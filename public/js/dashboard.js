const noPoolFoundSpan = document.getElementById("no_pool_found");
const noTokenFoundSpan = document.getElementById("no_token_found");

let token = "";
let port = ""
let server = " https://algoindexer.algoexplorerapi.io";
let USER_BALANCE = 0;

const client = new algosdk.Indexer(token, server, port);//connection client


var accountInfo;
var listOfAssetsDetails = [];

window.onload = async (event) => {
    showProcessing("Loading Wallet Details");
    document.getElementById("addr_key").innerHTML = truncate(address);
    document.getElementById("keyval").innerHTML = address;
    await fetchAccountDetails();

    var transactionHistory = await getArrayOfTranxHistory();
    if (transactionHistory.length < 1) {
        var canvas = document.getElementById("myChart");
        var ctx = canvas.getContext("2d");
        ctx.font = "30px Arial";
        ctx.fillText("No Transaction Yet", 10, 50);
    } else {
        let blance = accountInfo.account.amount / 1000000 * MULTIPLIER;
        console.log(JSON.stringify(transactionHistory, null, 4));
        await showChart(transactionHistory.slice(0, 16), address, blance);
    }

    await getAssetsDetails();
    if (listOfAssetsDetails.length > 0) {
        await displayAssets(listOfAssetsDetails);
        // console.log(JSON.stringify(accountInfo,null,4));
    }

    if (noPoolFoundSpan.style.display != 'none') {
        noPoolFoundSpan.innerHTML = "No Liquidity Pool Found";
    }

    if (noTokenFoundSpan.style.display != 'none') {
        noTokenFoundSpan.innerHTML = "No Token Found";
    }
    await displayBalance();
    hideProcessing();
}

async function fetchAccountDetails() {
    try {
        accountInfo = await client.lookupAccountByID(address).do();
    } catch (error) {
        console.error(error);
        alert("couldn't fetch your wallet details, refresh page");
    }
}

async function displayBalance() {
    var balanceHold = document.getElementById("balance");
    if (accountInfo) {
        USER_BALANCE = USER_BALANCE + accountInfo.account.amount / 1000000;
        let formattedBalance = formatNumber(Number.parseFloat(USER_BALANCE * MULTIPLIER).toFixed(5))
        console.log("FORMATED Balan ce " + formattedBalance);
        balanceHold.innerHTML = formattedBalance + " " + selectedCurr;
    } else {
        balanceHold.innerHTML = "Couldn't fetch Account Details";
    }
}

async function getArrayOfTranxHistory() {
    try {
        let response = await client.searchForTransactions()
            .address(address)
            .txType("pay").do();
        return filterForOnlyPayments(response.transactions);
    } catch (error) {
        console.error(error);
    }
    return [];
}

function filterForOnlyPayments(transactionHistory) {
    //Filter the list of transactions for only transactions that inolve payment
    return transactionHistory.filter(element => {
        return element["tx-type"] == "pay";
    });
}

async function getAssetsDetails() {
    //Get assets details of user {name, balance, unitname, price, value}
    try {
        let algoBalance = accountInfo.account.amount / 1000000;
        //Insert algo details first
        let priceAndPriceChange = await getPrice(0);
        let price = 1 * MULTIPLIER;//await getAlgoPrice();
        let priceChange = priceAndPriceChange.price_change_24;
        let value = algoBalance * price;
        console.log("VALUE " + value);
        listOfAssetsDetails.push({
            id: 0,
            name: "Algorand",
            balance: algoBalance,
            unitName: "ALGO",
            priceChange: Number.parseFloat(priceChange).toFixed(2),
            price: Number.parseFloat(price).toFixed(2),
            value: Number.parseFloat(value).toFixed(6),
            url: "www.algorand.com"
        });

        //loop through assets in accounts
        console.log(JSON.stringify(accountInfo, null, 4));
        let acctAssets = accountInfo.account.assets;
        if (acctAssets) {
            for (var i = 0; i < acctAssets.length; i++) {
                //Get asset info
                let assetIndex = acctAssets[i];
                let assetId = assetIndex["asset-id"];
                let assetInfo = await client.searchForAssets()
                    .index(assetId).do();
                console.log("Information for Asset: " + JSON.stringify(assetInfo, undefined, 2));
                let assetParams = assetInfo.assets[0].params;
                //check for nfts
                if (assetParams.url) {
                    if (assetParams.url.includes("ipfs")) {
                        continue;
                    }
                }


                let balance = assetIndex.amount / 10 ** assetParams.decimals;
                let priceAndPriceChange = await getPrice(assetId);
                let price = priceAndPriceChange.price * MULTIPLIER;//Number.parseFloat().toFixed(8);
                let priceChange = priceAndPriceChange.price_change_24;
                let value = balance * price;//Number.parseFloat().toFixed(8);
                USER_BALANCE = USER_BALANCE + value;

                listOfAssetsDetails.push({
                    id: assetId,
                    name: assetParams.name,
                    balance: balance,
                    unitName: assetParams['unit-name'],
                    priceChange: Number.parseFloat(priceChange).toFixed(0),
                    price: Number.parseFloat(price).toFixed(8),
                    value: Number.parseFloat(value).toFixed(8),
                    url: assetParams.url,
                    totalSupply: assetParams.total,
                    decimals: assetParams.decimals
                });
            }
        }
    } catch (error) {
        console.error(error);
    }

    //return listOfAssets;
}

async function getPrice(assetId) {
    try {
        let url = "https://algocharts.net/apiv2/?asset_in=" + assetId + "&asset_out=0";//getting value of token from algocharts !!READ UP dapp_doc.md!!
        //"/price"+assetId;
        const config = {
            // mode: 'cors',
            method: 'GET',
            headers: {
                'Accept': 'text/plain'
            }
        }

        let response = await fetch(url, config);
        let data = await response.json();//Returns array[price, price change 24h] price, 24h price change, USD token value and Algorand to USD value saved for asset:

        // console.log("Value from SERVER ABT COIN "+JSON.stringify(data,null,4));
        //return data[0];//Number.parseFloat().toFixed(5);
        return {
            price: data.data[0],
            price_change_24: data.data[1]
        }
    } catch (error) {
        alert("A network error occured while fetching the price of some tokens \\n Please refresh!");
    }
    return {
        price: 0,
        price_change_24: 0
    }
}

async function displayAssets(listOfAssetsDetails) {
    //Filter through list of assets and display to appropriete field
    for (let index = 0; index < listOfAssetsDetails.length; index++) {
        const assetDetail = listOfAssetsDetails[index]; //{name, balance, unitname, price, value}
        if (assetDetail.balance > 0) {
            if (assetDetail.name.indexOf("-") > -1) {
                //hide no pool found
                noPoolFoundSpan.style.display = 'none';
                // document.getElementById("second-dashboard-table").classList.remove("d-none");
                showAssetOnPoolSection(assetDetail);
            } else {
                //hide no token found
                noTokenFoundSpan.style.display = 'none';
                // document.getElementById("first-dashboard-table").classList.remove("d-none");
                showAssetOnTokenSection(assetDetail);
            }
        }
    }

}

function showAssetOnPoolSection(assetDetail) {
    let layout = `<a href="" id="` + assetDetail.id + `" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0" data-bs-toggle="modal" data-bs-target="#assetDetailsModal"
                                    onclick="showAssetDetailOnModal(`+ assetDetail.id + `)" style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        `+ assetDetail.name + `
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        `+ assetDetail.unitName + `
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8"
                                        style="line-height: 2px;">
                                        `+ formatNumber(assetDetail.balance) + `
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        `+ formatNumber(assetDetail.value) + `
                                    </div>
                                </a>`;

    document.getElementById("second-dashboard-t-b-l-1").innerHTML += layout;
}

function showAssetOnTokenSection(assetDetail) {
    let layout = `<a href="" id="` + assetDetail.id + `" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2"
                onclick="showAssetDetailOnModal(`+ assetDetail.id + `)" data-bs-toggle="modal" data-bs-target="#assetDetailsModal">
                <div class="d-flex align-items-center table-width5">
                    <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                    </div>
                    <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                    <div>`+ assetDetail.unitName + `</div>
                </div>
                <div class="d-flex align-items-center table-width4" style="margin-right: 15px;">
                    `+ formatNumber(assetDetail.balance) + `
                </div>
                <div class="d-flex align-items-center table-width4" style="margin-right: 10px;">
                    `+ assetDetail.price + `
                </div>
                <div class="d-flex align-items-center table-width4" style="">
                    `+ formatNumber(assetDetail.value) + `
                </div>
            </a>`;
    document.getElementById("first-dashboard-t-b-l-1").innerHTML += layout;
}

function showAssetDetailOnModal(assetId) {
    let assetObj = listOfAssetsDetails.filter(element => {
        return element.id == assetId;
    })[0];
    console.log(JSON.stringify(assetObj, null, 4));
    let detailsBody;
    if (assetObj.name == "Algorand") {
        detailsBody = `<h6>` + assetObj.name + `</h6>
                        <b class="text-secondary">Price: </b>  `+ assetObj.price + `<br>
                        <a  class="text-success" target="_blank" href="https://`+ assetObj.url + `">Website</a>`;
    } else {
        detailsBody = `<h6>` + assetObj.name + `</h6>
                        <b class="text-secondary">ID: </b>  `+ assetObj.id + `<br>
                        <b class="text-secondary">Price: </b>  `+ assetObj.price + `  `+selectedCurr+`<br>
                        <b class="text-secondary">Price Change(24H%): </b>  `+ assetObj.priceChange + `<br>
                        <b class="text-secondary">Total Supply: </b> `+ formatNumber(assetObj.totalSupply) + `<br>
                        <b class="text-secondary">Decimals: </b>  `+ assetObj.decimals + `<br>
                        <a  class="text-success" target="_blank" href="https://`+ assetObj.url + `">Website</a>`;//{{session('selectedCurrency','Algo')}}
    }
    document.getElementById("assetDetailTitle").innerHTML = assetObj.unitName;
    document.getElementById("assetDetailBody").innerHTML = detailsBody;
}

function formatNumber(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}