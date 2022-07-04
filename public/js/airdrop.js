var address = document.getElementById("address");
var handles = document.getElementById("handles");

//get input from user
let token = "";
let port = ""
let server = "https://node.algoexplorerapi.io";
//https://node.algoexplorerapi.io -- mainnet https://api.testnet.algoexplorer.io

const client = new algosdk.Algodv2(token, server, port);//connection client

async function processTransaction(){
    //validate
    if(address.value.length < 10 || handles.value.length < 7){
        alert("Please enter valid values in order to participate in this airdrop");
        return;
    }
    //prepare optin tranx object
    const params = await client.getTransactionParams().do();
    params.fee = algosdk.ALGORAND_MIN_TX_FEE;
    params.flatFee = true;

    //for the note
    const enc = new TextEncoder();
    
    try{
        let sender = address.value;
        let rec = sender;
        const txn = algosdk.makeAssetTransferTxnWithSuggestedParamsFromObject({
            suggestedParams: {
                ...params,
            },
            type: 'axfer',
            from: sender,
            to: rec,
            assetIndex: 580431573,
            amount: 0,
            note: enc.encode(handles)
        });
        
        showProcessing("Transaction processing");
        //set transaction Id
        var txId = txn.txID().toString();
        document.getElementById("tranxId").value = txId;
        
        //sign transaction
        const myAlgoConnect = new MyAlgoConnect();
        const signedTxn = await myAlgoConnect.signTransaction(txn.toByte());

        //save to database
        document.getElementById("tranxForm").submit();
        hideProcessing();
    }catch(error){
        hideProcessing();
        alert("Couldn't optin to the transaction. Something went wrong");
        console.log(error);
    }
    //alert user
}