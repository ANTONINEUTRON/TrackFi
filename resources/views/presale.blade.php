<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi Presales</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('includes.head')
</head>

<body class="pt-1" style="min-height: 100vh;">
    <!--main body section-->
    <div id="main" class="row g-0" style="height: 95%;">
        <div class="col-md-9 col-lg-9 align-content-around h-100">
            <nav class="navbar navbar-light " style="padding-right: 10%;padding-left: 3%;">
                <div class="container row g-0">
                    <div class="col-2 ">
                        <!--toggler for navbar modal-->
                        <i data-bs-toggle="modal" data-bs-target="#get_quote_modal" class="fas fa-bars"
                            style="font-size: xx-large;"></i>

                    </div>
                    <!--navbar modal-->
                    
                    @include('includes.navbar')
                    <!-- modal -->
                    <!-- //left modal -->


                </div>

            </nav>

            <div class="d-flex flex-wrap flex-column justify-content-center mb-3">
                <div class="row">
                    <div class="col-1 d-sm-none d-md-block">

                    </div>
                    <div class="col-10 d-grid">
                        <h2 class="text-center"><img alt="header-trackfi" src="{{asset('images/header-trackfi.svg')}}"></h2>

                        <span class="text-center body-text2 d-flex justify-content-center">
                            TrackFi will be launched after presale has been caried out. You're welcome to be an early
                            investor
                            . Seed your spot by buying at a fair price.
                        </span>
                        <h1 class="text-center">Presale Statistics</h1>
                        <span class="body-text2 text-center">
                            Presale allocation = 250,000,000
                        </span>
                        <span class="body-text2 text-center">
                            Presale price 1TrackFi = $0.0012
                        </span>
                        <span class="body-text2 text-center">
                            Listing price = $0.0016
                        </span>
                        <span class="body-text2 text-center mt-3">
                            Minimum buy = 50 Algo
                        </span>
                        <span class="body-text2 text-center">
                            Maximum buy = 5000 Algo
                        </span>
                        <span class="body-text2 text-center">
                            Soft Cap= 50,000 Algo
                        </span>
                        <span class="body-text2 text-center">
                            Hard Cap = 150,000 Algo
                        </span>
                        <span class="mt-3 body-text2 text-center">
                            If you'd like to participate in our presale, fill the form below to initiate transaction that will receive payment from your My Algo wallet
                        </span>
                        {{--an Algo wallet address shall be provided
                            through which you will
                            process the purchase of your TrackFi token <span class="body-text2 text-center mt-3">
                            Copy Presale Address here <br>

                        </span> --}}
                        {{-- <span class="body-text2 w-100 d-flex justify-content-center align-items-center">
                            <span class="btn " id="presale_address" style="position: relative;"
                                onclick="myFunction(this.id)">
                                <span class="popuptext d-none" id="myPopup">Copied</span>
                                <i style=" font-size: small;" class="far fa-copy text-light"></i>
                            </span> --}}
                            {{-- <span class="d-none" id='keyval'> 4B7S3A73Y643XSAYRKTLZFKKYQBFNMHDUHAI4AXHBKGK4576AZ4C3CUBM
                            </span> --}}

                            {{-- <span class="bg-light text-dark" style="width: 13em;overflow-x: auto;">
                                4B7S3A73Y643XSA.......BM</span> --}}
                        </span>

                        <!--Form starts here  -->
                        <div class="justify-content-center text-center mt-5">
                            <div class="col-md-8 card mx-auto" style="background-color: #03031b;">
                                <div class="card-body text-center">
                                    <form autocomplete="off" id="tranxForm" method="POST" class="form-horizontal mb-5">
                                        {{ csrf_field() }}
                                        <input name="transaction_id" type="hidden" id="trxIdVal" value="">
                                        {{-- <div class="mb-3  ml-5 mr-5">
                                             <label class="ml-5 form-label">
                                                <b>Email</b>
                                            </label>
                                            <input name="email" type="email" id="email" class="form-control" placeholder="Email" required>
                                        </div> --}}
                                        <div class="mb-3  ml-5 mr-5">
                                            {{-- <label class="ml-5 form-label">
                                                <b>Amount</b> (Algo)
                                            </label> --}}
                                            <input  max="5000" oninput="listenForAmount()" placeholder="Amount (Algo)" name="amount" type="number" id="amount" class="form-control" required>
                                        </div>
                                        <div class="mb-3 ml-5 mr-5">
                                            {{-- <label class="ml-5 form-label">
                                                <b>Toolx</b>
                                            </label> --}}
                                            <input name="toolxAmount" onclick='return false;' type="Number" id="toget" placeholder="Toolx" class="form-control">
                                        </div>
                                        <button type="button" onclick="initiateTranx()" class="btn  btn-lg bg-success text-white">Purchase</button>
                                    </form>
                                    <div id="processing_section" class="d-none">
                                        <span class="btn mt-3" style="position: relative;" onclick="copyTransId()">
                                            <span class="popuptext d-none" id="myPopup">Copied</span>
                                            <i style=" font-size: small;" class="far fa-copy text-light"></i>
                                        </span>
                                        <span id="transId" class="mt-3 text-white">
                                            No Transaction ID yet
                                        </span><br>
                                        <span id="transResponse" class="mt-3">

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <span class="body-text2 text-center">
                            Please note that Algo is strictly accepted from an Algo wallet. Exchanges are yet to be
                            facilitated!
                        </span>
                        <span class="body-text2 text-center mt-3">
                            Follow our social media handles as all information regarding the presale will be posted
                            there.
                            This includes the date and time presale would be held and any further information to be
                            disseminated.
                        </span>
                    </div>

                </div>

                <br />
                @include('includes.wallet')

                @include('includes.ad2')
                
            </div>
        </div>

        <!--end of main body section-->
        <!--right navbar visible only on medium and large screens-->
        @include('includes.ad_banner')
        <!--end of right navbar-->
    </div>
    <!--footer section-->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    @include('includes.processing')
    <script src="{{asset('js/main.js')}}"></script>
    <script 
        src="https://cdn.jsdelivr.net/npm/algosdk@v1.15.0/dist/browser/algosdk.min.js"
        integrity="sha384-wURu1H0s7z6Nj/AiP4O+0EorWZNvjiXwex7pNwtJH77x60mNs0Wm2zR37iUtHMwH"
        crossorigin="anonymous"
    ></script>

    <script>
        var receiver = "{{ $address }}";//THE WALLET TO RECEIVE THE PRESALE ALGO
        var sender;//iswalletconnected will set the value of user wallet address
        
        let token = "";
        let port = ""
        let server = "https://node.algoexplorerapi.io";
        //https://node.algoexplorerapi.io -- mainnet https://api.testnet.algoexplorer.io
        
        const client  = new algosdk.Algodv2(token, server, port);//connection client

        var email;
        var amt;
        var value;
        window.onload = async (event)=>{
            value = await getToolxValueInAlgo();
        }

        //Get toolx 
        async function getToolxValueInAlgo() {
            let toolxId = 394014424;
            //connect to algocharts with toolx id
            let url = "https://algocharts.net/apiv2/?asset_in="+toolxId+"&asset_out=0";//getting value of token from algocharts !!READ UP DOCS!!
            
            const config = {
                'mode' : 'cors',
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            }

            let response = await fetch(url, config);
            let data = await response.json();
            console.log(data.data[0]);
            return Number.parseFloat(data.data[0]).toFixed(6);
        }

        async function listenForAmount(){
            //check if input is greater than 0 and update it according to the multiplier of toolx
            console.log(amt);
            console.log(value);
            amt = parseFloat(document.getElementById("amount").value)
            var toolxValue = amt/value;
            document.getElementById("toget").value = parseInt(toolxValue);
        }

        async function performTransaction(){
            //perform transaction
            const params = await client.getTransactionParams().do();
            params.fee = algosdk.ALGORAND_MIN_TX_FEE;
            params.flatFee = true;

            const enc = new TextEncoder();
            const note = enc.encode("Toolx Presale");

            const txn = algosdk.makePaymentTxnWithSuggestedParamsFromObject({
                suggestedParams: {
                    ...params,
                },
                from: sender,
                to: receiver, 
                amount: amt*1000000,
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
                console.log("Transaction " + txId + " confirmed in round " + confirmedTxn["confirmed-round"]);
                //TODO 
                
                hideProcessing();
                showMsgSection();
                //show successful message
                responseSpan.innerHTML = "Transaction successful!";
                responseSpan.classList.add("text-success");
            
                //send transaction id and email to server
                document.getElementById("trxIdVal").value = txId;
                // console.log("Toolx Value "+document.getElementById("toolxAmount").value);
                document.getElementById("tranxForm").submit();
            } catch (error) {
                hideProcessing();
                showMsgSection();
                responseSpan.innerHTML = "Transaction Failed!\n "+error.message;
                responseSpan.classList.add("text-danger");
            }

            
            // if(confirmedTxn["confirmed-round"]){
               
            // }else{
                
            // }

        }

        function showMsgSection(){
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
            if(sender){
                return true;
            }

            return false;
        }

        async function initiateTranx() {
            //check if wallet is connected
            if(isWalletConnected()){
                if(amt){
                    await performTransaction();//returns true if transaction is successful
                }else{
                    alert("Amount shouldn't be less than 1 Algo");
                }
            }else{
                let text = "You have not connected a wallet. \n You need a connected wallet in order to perform this transaction";
                if(confirm(text)){
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
    </script>
</body>

</html>