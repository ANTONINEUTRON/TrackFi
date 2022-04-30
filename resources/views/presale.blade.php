<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi</title>
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
                    <div class="modal modal_outer left_modal fade" id="get_quote_modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <form method="post" id="get_quote_frm">
                                <div class="modal-content ">

                                    <div class="modal-body h-100 p-0 pt-4" style="font-size: small;">
                                        <div style="height: 70%;">
                                            <a href="/"
                                                class="w-100 g-0 btn btn-block d-flex justify-content-center text-light">
                                                <div class="d-flex  align-items-center" style="width: 100%;"><i
                                                        class="fas fa-home" style="margin-right: 0.5em;"></i><span
                                                        class="ml-3">Home</span></div>
                                            </a>
                                            <a href="#" id="connect" data-bs-toggle="modal" data-bs-target="#modal1"
                                                class="w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;"><i
                                                        class="fas fa-wallet" style="margin-right: 0.5em;"></i><span
                                                        class="ml-3">Connect Wallet</span></div>
                                            </a>
                                            <a href="/wallet_dashboard"
                                                class="w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;"><i
                                                        class="fas fa-tachometer-alt"
                                                        style="margin-right: 0.5em;"></i><span
                                                        class="ml-3">Dashboard</span></div>
                                            </a>
                                            <a href="/nfts"
                                                class="w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;"><i
                                                        class="fas fa-image" style="margin-right: 0.5em;"></i><span
                                                        class="ml-3">NFTS</span></div>
                                            </a>
                                            <a href="/stats" class="w-100 g-0 text-light btn btn-block d-flex mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;">
                                                    <img alt="bar-chart" style="width: 20px;height: 20px;"
                                                        src="{{asset('images/bar-chart-2.svg')}}"><span
                                                        style="margin-left: 0.5em;">STATS</span>
                                                </div>
                                            </a>

                                            <a href="/presale"
                                                class="w-100 g-0 text-light btn btn-block d-flex mt-2 active">
                                                <div class="d-flex align-items-center" style="width: 100%;"><i
                                                        class="fas fa-tag" style="margin-right: 0.5em;"></i><span
                                                        class="ml-3">PreSale</span></div>
                                            </a>


                                            <div class="dropdown mt-2">
                                                <button class="w-100 btn btn-block text-light dropdown-toggle"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="col-4" style="margin-right: 1em;">
                                                        <img style="width: 20px;height: 20px;"
                                                            alt="more-horizontal-icon" src="{{asset('images/more-horizontal.svg')}}">
                                                    </span>

                                                    More
                                                </button>
                                                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1"
                                                    style="background:inherit">
                                                    <div class="d-grid justify-content-center">
                                                        <a class="dropdown-item text-dark d-flex align-items-center "
                                                            style="background-color: #00ffbb;" href="#">
                                                            <div class="img-box m-p-div"></div><span>Placeholder</span>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <div class="img-box m-p-div"></div>Placeholder
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <div class="img-box m-p-div"></div>Placeholder
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <div class="img-box m-p-div"></div>Placeholder
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--settings dropdown start-->
                                        <div>
                                            <div class="dropdown mt-2">
                                                <button class="w-100 btn btn-block text-light dropdown-toggle"
                                                    type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">

                                                    <span style="margin-right: 10px;"><i
                                                            class="fas fa-cog"></i></span>Settings
                                                </button>
                                                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton2"
                                                    style="background:inherit">
                                                    <div class="d-grid justify-content-center">

                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <div class="img-box m-p-div"></div>Placeholder
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <div class="img-box m-p-div"></div>Placeholder
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <div class="img-box m-p-div"></div>Placeholder
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--settings dropdown end -->
                                    </div>



                                </div><!-- //modal-content -->
                            </form>
                        </div><!-- modal-dialog -->
                    </div><!-- modal -->
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
                            If you'd like to participate in our presale, an Algo wallet address shall be provided
                            through which you will
                            process the purchase of your TrackFi token
                        </span>
                        <span class="body-text2 text-center mt-3">
                            Copy Presale Address here <br>

                        </span>
                        <span class="body-text2 w-100 d-flex justify-content-center align-items-center">
                            <span class="btn " id="presale_address" style="position: relative;"
                                onclick="myFunction(this.id)">
                                <span class="popuptext d-none" id="myPopup">Copied</span>
                                <i style=" font-size: small;" class="far fa-copy text-light"></i>
                            </span>
                            <span class="d-none" id='keyval'> 4B7S3A73Y643XSAYRKTLZFKKYQBFNMHDUHAI4AXHBKGK4576AZ4C3CUBM
                            </span>

                            <span class="bg-light text-dark" style="width: 13em;overflow-x: auto;">
                                4B7S3A73Y643XSA.......BM</span>
                        </span>
                        <span class="body-text2 text-center mt-3">
                            Please note that Algo is strictly accepted from an Algo wallet. Exchanges are yet to be
                            facilitated!
                        </span>
                        <span class="body-text2 text-center mt-3">
                            Follow our social media handles as all information regarding the presale will be posted
                            there.
                            This includes the date and time presale would be held and any further information to be
                            disseminated.
                        </span>

                        <!--Form starts here  -->
                        <div class="justify-content-center text-center mt-5">
                            <div class="col-md-8 card bg-dark mx-auto">
                                <div class="card-body text-center">
                                    <form autocomplete="off" id="tranxForm" method="POST" class="form-horizontal mb-5">
                                        {{ csrf_field() }}
                                        <input name="transaction_id" type="hidden" id="trxIdVal" value="">
                                        <div class="mb-3  ml-5 mr-5">
                                            {{-- <label class="ml-5 form-label">
                                                <b>Email</b>
                                            </label> --}}
                                            <input name="email" type="email" id="email" class="form-control" placeholder="Email" required>
                                        </div>
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

                                        </span><br>
                                        <span id="transResponse" class="mt-3">

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <br />
                @include('includes.wallet')

                <div class="d-block d-md-none d-xs-block crossed mt-1"
                    style="height: 20vh; background-color: #00ffbb;margin-left: 1.5em;margin-right: 1.5em;">
                    <svg>
                        <line x1="0" y1="100%" x2="100%" y2="0" />
                        <line x1="0" y1="0" x2="100%" y2="100%" />
                    </svg>
                </div>
            </div>
        </div>

        <!--end of main body section-->
        <!--right navbar visible only on medium and large screens-->

        <div id="right-sidebar" class="col-md-3 d-none d-md-block" style="height: 90vh;">

            <div class="crossed" style="height: 15%;">


                <svg style="background-color: #00ffbb;">
                    <line x1="0" y1="100%" x2="100%" y2="0" />
                    <line x1="0" y1="0" x2="100%" y2="100%" />
                </svg>
            </div>
            <div class="mt-1 crossed" style="height: 70%; background-color: white">
                <svg>
                    <line x1="0" y1="100%" x2="100%" y2="0" />
                    <line x1="0" y1="0" x2="100%" y2="100%" />
                </svg>
            </div>
            <div class="mt-1 crossed" style="height: 15%; background: #00ffbb">
                <svg>
                    <line x1="0" y1="100%" x2="100%" y2="0" />
                    <line x1="0" y1="0" x2="100%" y2="100%" />
                </svg>
            </div>
        </div>
        <!--end of right navbar-->
    </div>
    <!--footer section-->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
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
            

            const myAlgoConnect = new MyAlgoConnect();
            const signedTxn = await myAlgoConnect.signTransaction(txn.toByte());
            
            //show user transaction id with support for copy
            document.getElementById("processing_section").classList.remove("d-none");
            document.getElementById("transId").innerHTML = txId;

            document.getElementById("transResponse").innerHTML = "Transaction processing ......"

            // Submit the transaction
            await client.sendRawTransaction(signedTxn.blob).do();

            // Wait for confirmation
            let confirmedTxn = await algosdk.waitForConfirmation(client, txId, 4);
            //Get the completed Transaction
            console.log("Transaction " + txId + " confirmed in round " + confirmedTxn["confirmed-round"]);
            //TODO 
            
            let responseSpan = document.getElementById("transResponse");
            if(confirmedTxn["confirmed-round"]){
                //show successful message
                responseSpan.innerHTML = "Transaction successful!";
                responseSpan.classList.add("text-success");
            
                //send transaction id and email to server
                document.getElementById("trxIdVal").value = txId;
                // console.log("Toolx Value "+document.getElementById("toolxAmount").value);
                document.getElementById("tranxForm").submit();
            }else{
                responseSpan.innerHTML = "Transaction Failed!";
                responseSpan.classList.add("text-danger");
            }

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
            console.log("THE COOKIE "+sender);
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
                    alert("Invalid amount entered");
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