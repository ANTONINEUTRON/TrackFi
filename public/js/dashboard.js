let token = "";
let port = ""
let server = " https://algoindexer.algoexplorerapi.io";
let USER_BALANCE = 0;

const client = new algosdk.Indexer(token, server, port);//connection client

var accountInfo;
var listOfAssetsDetails;
var listOfTokens = [];
var listOfNonTokens = [];
var listOfNonTokensDetails = [];
var algoDetails; //will contain details of algo token

window.onload = async (event) => {
    showProcessing("Loading Wallet Details");
    document.getElementById("addr_key").innerHTML = truncate(address);
    document.getElementById("keyval").innerHTML = address;
    await fetchAccountDetails();

    var transactionHistory = await getArrayOfTranxHistory();
    if (transactionHistory.length < 1) {
        var canvas = document.getElementById("myChart");
        var ctx = canvas.getContext("2d");
        ctx.font = "20px Arial";
        ctx.fillText("No Transaction Was Detected", 10, 90);
    } else {
        let blance = accountInfo.account.amount / 1000000 * MULTIPLIER;
        console.log(JSON.stringify(transactionHistory,null,4));
        showChart(transactionHistory.slice(0, 16), address, blance);
    }

    await getAssetsDetails();
    if(listOfTokens.length > 0){
        displayTokens();
    }

    if(listOfNonTokens.length > 0){
        filterForLiquidityPool();
    }

    if (document.getElementById("no_pool_found").style.display != 'none') {
        document.getElementById("no_pool_found").innerHTML = "No Liquidity Pool Found";
    }

    if (document.getElementById("no_token_found").style.display != 'none') {
        document.getElementById("no_token_found").innerHTML = "No Token Found";
    }
    await displayBalance();
    hideProcessing();
}

async function fetchAccountDetails() {
    try {
        accountInfo = await client.lookupAccountByID(address).do();
    } catch (error) {
        console.error(error);
        alert("couldn't fetch your wallet details, refresh this page to try again");
    }
}

async function displayBalance() {
    var balanceHold = document.getElementById("balance");
    if (accountInfo) {
        USER_BALANCE = USER_BALANCE + accountInfo.account.amount / 1000000;
        let formattedBalance = formatNumber(Number.parseFloat(USER_BALANCE * MULTIPLIER).toFixed(5))
        balanceHold.innerHTML = formattedBalance + " " + selectedCurr;
    } else {
        balanceHold.innerHTML = "Couldn't fetch Account Details";
    }
}

async function getArrayOfTranxHistory() {
    try {
        let start_time = "2021-12-23T10:00:00+00:00";
        let response = await client.searchForTransactions()
            .address(address)
            .afterTime(start_time)
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
        let price = 1 * MULTIPLIER;
        let value = algoBalance * price;
        console.log("VALUE " + value);
        algoDetails = {
            id: 0,
            name: "Algorand",
            balance: algoBalance,
            unit_name: "ALGO",
            price: Number.parseFloat(price).toFixed(2),
            value: Number.parseFloat(value).toFixed(6),
            url: "www.algorand.com"
        };
        showAssetOnTokenSection(algoDetails);

        //loop through assets in accounts
        let acctAssets = accountInfo.account.assets;
        
        if(acctAssets){
            //AT THIS POINT PASS THE ASSETS TO SERVER FOR PROCESSING AND FETCHING OF DETAILS
            let url = "/get_tokens_details";
            const config = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(acctAssets)
            }

            let response = await fetch(url, config);
            let data = await response.json();
            
            listOfTokens = data.tokens;
            listOfNonTokens = data.nonTokens;
        }
    } catch (error) {
        console.error(error);
    }
}

async function filterForLiquidityPool(){
    for(var i = 0; i<listOfNonTokens.length; i++){
        var asset = listOfNonTokens[i];
        var assetId = asset["asset-id"];
        //get asset details
        let assetInfo = await client.searchForAssets()
                .index(assetId).do();
        let params = assetInfo.assets[0].params;

        let name = params.name;
        let balance = asset["amount"];
        if(name.toLowerCase().includes("pool") && balance > 0){
            if(!params.url.includes("https://")){
                params.url = "https://"+params.url;
            }
            let detail = {
                id : assetId,
                name : name,
                unit_name: params["unit-name"],
                balance : formatNumber(Number.parseFloat(balance).toFixed(3)),
                value : algoDetails.value,
                totalSupply : formatNumber(params.total),
                url : params.url, 
                decimals : params.decimals
            };
            showAssetOnPoolSection(detail);
            listOfNonTokensDetails.push(detail);
        }
        // let assetParams = assetInfo.assets[0].params;
        //check if contains pool
    }
}

function showAssetOnPoolSection(assetDetail) {
    document.getElementById("no_pool_found").style.display = "none";
    let layout = `<a href="" id="`+assetDetail.id+`" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0" data-bs-toggle="modal" data-bs-target="#assetDetailsModal"
                                    onclick="showLPDetailOnModal(`+ assetDetail.id + `)" style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        `+ assetDetail.name + `
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        
                                        `+ assetDetail.unit_name + `
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8"
                                        style="line-height: 2px;">
                                        `+ assetDetail.balance + `
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        `+ assetDetail.value + `
                                    </div>
                                </a>`;

    document.getElementById("second-dashboard-t-b-l-1").innerHTML += layout;
}

function displayTokens(){
    //hide no token found
    listOfTokens.forEach(element => {
        if(element.balance > 0){
            USER_BALANCE += element.value;
            element.price = formatNumber(Number.parseFloat(element.price).toFixed(7));
            element.balance = formatNumber(Number.parseFloat(element.balance).toFixed(5));
            element.price_change_24 = Number.parseFloat(element.price_change_24).toFixed(1);
            element.value = formatNumber(Number.parseFloat(element.value).toFixed(5));
            if(!element.url.includes("https://")){
                element.url = "https://"+element.url;
            }
            element.market_cap = formatNumber(element.market_cap);
            element.circulating_supply = formatNumber(element.circulating_supply);
            element.totalSupply = formatNumber(element.totalSupply);
            element.volume24h = Number.parseFloat(element.volume24h).toFixed(6);
            showAssetOnTokenSection(element);
        }

    });
}
function showAssetOnTokenSection(assetDetail) {
    document.getElementById("no_token_found").style.display = "none";
    let layout = `<a href="" id="` + assetDetail.id + `" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2"
                onclick="showAssetDetailOnModal(`+ assetDetail.id + `)" data-bs-toggle="modal" data-bs-target="#assetDetailsModal">
                <div class="d-flex align-items-center table-width5">
                    <div  style="width:25px; height:25px; margin-left: 5%;margin-right: 5%;">
                    <img style="width:25px; height:25px;" src="https://asa-list.tinyman.org/assets/` + assetDetail.id + `/icon.svg" onerror="this.style.display = 'none'"/>
                    </div>
                    <div>`+ assetDetail.unit_name + `</div>
                </div>
                <div class="d-flex align-items-center table-width4" style="margin-right: 15px;">
                    `+ assetDetail.balance + `
                </div>
                <div class="d-flex align-items-center table-width4" style="margin-right: 10px;">
                    `+ assetDetail.price + `
                </div>
                <div class="d-flex align-items-center table-width4" style="">
                    `+ assetDetail.value + `
                </div>
            </a>`;
    document.getElementById("first-dashboard-t-b-l-1").innerHTML += layout;
}

function showLPDetailOnModal(assetId){
    let lpObject = listOfNonTokensDetails.filter(element => {
        return element.id == assetId;
    })[0];
    let detailsBody = `<h6>` + lpObject.name + `</h6>
                    <b class="text-secondary">ID: </b>  `+ lpObject.id + `<br>
                    <b class="text-secondary">Total Supply: </b> `+ lpObject.totalSupply + `<br>
                    <b class="text-secondary">Decimals: </b>  `+ lpObject.decimals + `<br>
                    <a  class="text-success" target="_blank" href="`+ lpObject.url + `">Website</a>`;

    document.getElementById("assetDetailTitle").innerHTML = ' <span class="h3 mx-2">'+lpObject.unit_name+'</span>';
    document.getElementById("assetDetailBody").innerHTML = detailsBody;
}

function showAssetDetailOnModal(assetId) {
    let assetObj = listOfTokens.filter(element => {
        return element.id == assetId;
    })[0];
    let detailsBody;
    let unitName;
    if (assetId == 0) {
        unitName = algoDetails.unit_name;
        detailsBody = `<h6>` + algoDetails.name + `</h6>
                        <b class="text-secondary">Price: </b>  `+ algoDetails.price + `<br>
                        <a  class="text-success" target="_blank" href="https://`+ algoDetails.url + `">Website</a>`;
    } else {
        unitName = assetObj.unit_name;
        detailsBody = `<h6>` + assetObj.name + `</h6>
                        <b class="text-secondary">ID: </b>  `+ assetObj.id + `<br>
                        <b class="text-secondary">Price: </b>  `+ assetObj.price + `  `+selectedCurr+`<br>
                        <b class="text-secondary">Price Change(24H%): </b>  `+ assetObj.price_change_24 + `<br>
                        <b class="text-secondary">Volume Traded(24H%): </b>  `+assetObj.volume24h+ `<br>
                        <b class="text-secondary">Total Supply: </b> `+assetObj.totalSupply + `<br>
                        <b class="text-secondary">Circulating Supply: </b> `+ formatNumber(assetObj.circulating_supply) + `<br>
                        <b class="text-secondary">Market Cap: </b>  `+ formatNumber(assetObj.market_cap) +` `+selectedCurr+ `<br>
                        <b class="text-secondary">Decimals: </b>  `+ assetObj.decimals + `<br>
                        <a  class="text-success" target="_blank" href="`+ assetObj.url + `">Website</a>`;
    }
    document.getElementById("assetDetailTitle").innerHTML = `<img style="width:50px; height:50px;" src="https://asa-list.tinyman.org/assets/` + assetId + `/icon.svg"  onerror="this.style.display = 'none'"/> 
                                                            <span class="h3 mx-2">`+unitName+`</span>`;
    document.getElementById("assetDetailBody").innerHTML = detailsBody;
}

function formatNumber(x) {
    return x.toLocaleString('en-US');//x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}