var sender;//iswalletconnected will set the value of user wallet address

let token = "";
let port = ""
let server = "https://node.algoexplorerapi.io";
//https://node.algoexplorerapi.io -- mainnet https://api.testnet.algoexplorer.io

const client = new algosdk.Algodv2(token, server, port);//connection client

var email;
var amt;
var value;
window.onload = async (event) => {
    value = 100/41600;//100 algo == 41,600 trackdefi
}

async function listenForAmount() {
    //check if input is greater than 0 and update it according to the multiplier of trackFi
    
    amt = parseFloat(document.getElementById("amount").value)
    var trackFiValue = amt / value;
    document.getElementById("toget").value = parseInt(trackFiValue);
}

async function performTransaction() {
    //perform transaction
    const params = await client.getTransactionParams().do();
    params.fee = algosdk.ALGORAND_MIN_TX_FEE;
    params.flatFee = true;

    const enc = new TextEncoder();
    const note = enc.encode("trackFi Presale");

    const txn = algosdk.makePaymentTxnWithSuggestedParamsFromObject({
        suggestedParams: {
            ...params,
        },
        from: sender,
        to: receiver,
        amount: amt * 1000000,
        note: note
    });

    var txId = txn.txID().toString();
    var responseSpan = document.getElementById("transResponse");
    try {
        const myAlgoConnect = new MyAlgoConnect();
        const signedTxn = await myAlgoConnect.signTransaction(txn.toByte());

        // Submit the transaction
        await client.sendRawTransaction(signedTxn.blob).do();

        showProcessing("Transaction processing")
        //show user transaction id with support for copy
        document.getElementById("processing_section").classList.remove("d-none");
        document.getElementById("transId").innerHTML = txId;

        // Wait for confirmation
        let confirmedTxn = await algosdk.waitForConfirmation(client, txId, 4);
        //Get the completed Transaction
        
        //TODO 

        hideProcessing();
        showMsgSection();
        //show successful message
        responseSpan.innerHTML = "Transaction successful!";
        responseSpan.classList.add("text-success");

        //send transaction id and email to server
        document.getElementById("trxIdVal").value = txId;
        document.getElementById("tranxForm").submit();
    } catch (error) {
        hideProcessing();
        showMsgSection();
        responseSpan.innerHTML = "<h2>Transaction Failed!</h2><br>Something went wrong!<br>Ensure you fund your account,<br>have a strong network connection<br>and Try Again";
        responseSpan.classList.add("text-danger");
    }

}

function showMsgSection() {
    document.getElementById("processing_section").classList.remove("d-none");
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function isWalletConnected() {
    //check for cookie
    let cookieName = "trackfi_wallet_address";
    sender = getCookie(cookieName);
    if (sender) {
        return true;
    }

    return false;
}

async function initiateTranx() {
    //check if wallet is connected
    if (isWalletConnected()) {
        if (amt >= 100) {
            await performTransaction();//returns true if transaction is successful
        } else {
            alert("Amount should be greater than 100 Algo");
        }
    } else {
        let text = "You have not connected a wallet. \n You need a connected wallet in order to perform this transaction";
        if (confirm(text)) {
            document.getElementById("connect").click();
        }
    }
}

function copyTransId() {
    var copyText = document.getElementById("transId").innerHTML;

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText);

    /* Alert the copied text */
    document.getElementById("myPopup").classList.remove("d-none");
    setTimeout(myFunc, 3000);
    function myFunc() {
        document.getElementById("myPopup").classList.add("d-none");
    }
}