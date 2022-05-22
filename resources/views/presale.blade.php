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
                        </span>

                        <!--Form starts here  -->
                        <div class="justify-content-center text-center mt-5">
                            <div class="col-md-8 card mx-auto" style="background-color: #03031b;">
                                <div class="card-body text-center">
                                    <form autocomplete="off" id="tranxForm" method="POST" class="form-horizontal mb-5">
                                        {{ csrf_field() }}
                                        <input name="transaction_id" type="hidden" id="trxIdVal" value="">
                                        
                                        <div class="mb-3  ml-5 mr-5">
                                            <input min="50" max="5000" oninput="listenForAmount()" placeholder="Amount (Algo)" name="amount" type="number" id="amount" class="form-control" required>
                                        </div>
                                        <div class="mb-3 ml-5 mr-5">
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
    </script>

    <script src="{{ asset('js/presale.js') }}"></script>
</body>

</html>