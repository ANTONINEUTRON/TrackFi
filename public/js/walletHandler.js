async function connectMyAlgoWallet() {
    var address = null;
    try {
        const connect = new MyAlgoConnect();
        const accounts = await connect.connect(); //Returns array of accounts
        address = accounts[0].address;
    } catch (err) {
        console.error(err);
    }
    console.log(address);
    //Load to dashboard
    //send request to server to note
    // await saveAddress(address);
    await loadDashboard(address);
}

// async function saveAddress(address){
//     let url = 
//     let response = await fetch(url);
//     console.log(response);
// }
async function loadDashboard(address) {
    if (address != null) {
        window.location.href = "/save_wallet/" + address;
    } else {
        alert("Invalid wallet response detected");
    }
}
