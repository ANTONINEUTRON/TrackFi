<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('includes.head')
</head>

<body class="pt-1">
    <div id="main" class="row g-0" style="height: 95%;">
        <div class="col-md-9 col-lg-9 align-content-around h-100">
            <nav class="navbar navbar-light " style="padding-right: 10%;padding-left: 3%;">
                <div class="container row g-0">
                    <div class="col-2">
                        <i data-bs-toggle="modal" data-bs-target="#get_quote_modal" class="fas fa-bars"
                            style="font-size: xx-large;"></i>

                    </div>
                    @include('includes.navbar')
                    <!-- modal -->
                    <!-- //left modal -->

                    <div class="col-10 " style="height: 2em;" id="title">
                        <div class="row">
                            <div class="col-7 d-flex justify-content-center">
                                <h2 class="text-center"><img alt="nav-header" src="{{asset('images/nav-header-trackfi.svg')}}"></h2>
                            </div>
                            @include('includes.currency_switch')
                        </div>


                    </div>


                </div>

            </nav>

            <div id="main1-1" class="container pt-3" style="height: 90%;padding-left: 3%;padding-right: 3%;">

                <h1>DASHBOARD</h1>
                <h3>Tokens</h3>
                <!--first section-->
                <div class="first-dashboard-section">
                    <div class="h-50" style="border-bottom: #00ffbb 1px solid;">
                        <div class="h-50 first-dashboard-section-1 d-flex flex-wrap w-100">
                            <span class="body-text2 d-flex justify-content-end w-100 text-secondary">Total
                                Balance</span><br>
                            <h1 id="balance" class="w-100 d-flex justify-content-end">$XX,XXX,XXX</H1>
                            <span class="body-text2 w-100 d-flex justify-content-end align-items-center">
                                <span class="btn " id="dashboard_address" style="position: relative;"
                                    onclick="myFunction(this.id)">
                                    <span class="popuptext d-none" id="myPopup">Copied</span>
                                    <i style=" font-size: small;" class="far fa-copy text-light"></i>
                                </span>

                                <span style="padding-left: 0">
                                    <i style="font-size: small;padding-left: 0;" class="fas fa-sync text-light btn"></i>
                                </span>
                                <span class="d-none" id='keyval'>HTI7.......aTzN9</span>
                                <span id='addr_key'>HTI7.......aTzN9</span>
                            </span>
                        </div>
                        <div class="h-50 d-flex justify-content-center align-items-center">
                            <span class="body-text1"><img style="height: 20px;width: 20px;" alt="history-icon"
                                    src="{{asset('images/history-icon.svg')}}">
                                History</span>
                        </div>
                    </div>
                    <div style="position: relative;height: 30vh;" class="pt-5">
                        {{-- <div class="d-flex align-items-center p-2" style="font-weight: bold;
                        height: 2em;margin-left: 1em;border: #00ffbb 1px solid;margin-top: 0.5em;width: fit-content;">
                            $ XX,XXX,XXX <div style="color: #2DB020;margin-left: 1em;"><img alt="dashboard-angle-arrow"
                                    width="10" height="10" src="{{asset('images/dashboard-angle-arrow.svg')}}"><span
                                    style="font-size: small;margin-left: 0.6em;">5%</span></div>
                        </div> --}}
                        <canvas id="myChart"></canvas>
                    </div>

                </div>
                <!--End of first section-->
                <!--mobile add placeholder-->
                @include('includes.ad1')

                <!--start of third table -->

                <!--second section-->
                <div id="first-dashboard-table" class="mt-4">
                    <div class="row">
                        <div class=" col-7 col-md-12">
                            <h1 class="d-flex justify-content-center"><span
                                    style="margin-right:10px; font-size: large;">
                                    <img alt="dashboard-token-icon" width="15" height="15" src="{{asset('images/dashboard-token-icon.svg')}}"></span>
                                    <span style="margin-left: 0.5em;">Tokens</span>
                            </h1>
                        </div>
                        {{-- <div class="col-5 col-md-2 d-flex justify-content-between">
                            <span>Total: #4, 792</span>
                            <button id="fourth_table_dropdown-1" class="btn btn-sm table-expand-toggler"
                                name="first-dashboard-table" onclick="view(this.name)"><i
                                    id="first_dashboard_table_dropdown_icon" class="fas fa-angle-down"></i></button>
                        </div> --}}
                    </div>
                    <!--table body-->
                    <div class="mb-3 w-100" style="overflow-x: auto;">
                        <div class="pt-1 pb-4 table-body table-body-width">

                            <div class="d-flex"
                                style="width: 100%; font-size: large;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width5" style="padding-left: 9%;">Token</div>
                                <div class="table-width6 ">Balance</div>
                                <div class="table-width6" style="margin-left: 10px;">Price<br>({{session('selectedCurrency','Algo')}})</div>
                                <div class="table-width6"  style="margin-left: 10px;">Value<br>({{session('selectedCurrency','Algo')}})</div>
                            </div>
                            <div id="first-dashboard-t-b-l-1" class="table-body-links-1 mt-2">
                                <span id="no_token_found">Loading Token .......</span>
                                {{-- The tokens will be loaded here --}}
                            </div>

                        </div>
                    </div>
                    <!--end of table body-->
                </div>
                <!--end of second section-->


                <!--modal1 that contains wallet providers-->
                @include('includes.wallet')
                <!--end of connect wallet modal-->

                <!--third section-->
                <div id="second-dashboard-table" class="mt-3">
                    <div class="row w-100">
                        {{-- <div class=" col-7 col-md-12">
                            <h1 class="d-flex justify-content-center"><span
                                    style="margin-right:10px; font-size: large;">
                                    <img alt="dashboard-token-icon" width="15" height="15" src="{{asset('images/dashboard-token-icon.svg')}}"></span>
                                    <span style="margin-left: 0.5em;">Tokens</span>
                            </h1>
                        </div> --}}
                        <div class="col-8 w-100 col-md-10">
                            <h1 class="d-flex justify-content-center">
                                <span style="margin-right:10px; font-size: large;">
                                <img alt="dashboard-token-icon" width="15" height="15" src=" {{asset('images/dashboard-token-icon.svg')}}">
                                </span>    
                                <span style="margin-left: 0.5em;">LP Tokens</span>
                            </h1>
                        </div>
                        {{-- <div class="col-5 col-md-2 d-flex justify-content-between">
                            <span>Total: #4, 792</span>
                            <button id="fourth_table_dropdown-2" class="btn btn-sm table-expand-toggler"
                                name="second-dashboard-table" onclick="view(this.name)"><i
                                    id="second_dashboard_table_dropdown_icon" class="fas fa-angle-down"></i></button>
                        </div> --}}
                    </div>
                    <!--table body-->
                    <div class="mb-3 w-100" style="overflow-x: auto; ">
                        <div class="pt-1 pb-2 table-body table-body-width" style="border-color: #00ffbb;">

                            <div class="d-flex"
                                style="width: 100%; font-size: medium;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width7" style="padding-left: 5%;">Platform</div>
                                <div class="table-width8 ">Asset</div>
                                <div class="table-width8 d-flex justify-content-center">Balance</div>
                                <div class="d-flex justify-content-center table-width8">Value<br>({{session('selectedCurrency','Algo')}})</div>
                            </div>
                            <div id="second-dashboard-t-b-l-1" class="table-body-links-1 mt-4">
                                <span id="no_pool_found">Loading Liquidity Pool .......</span>
                                {{-- The LP tokens will be loaded here --}}
                            </div>

                        </div>
                    </div>
                    <!--end of table body-->
                </div>
                <!--end of third section-->
{{-- 
                <!--fourth section-->
                <div id="third-dashboard-table" class="mt-3">
                    <div class="row">
                        <div class="col-7 col-md-10">
                            <h1 class="d-flex justify-content-center align-items-center"><img alt="dashboard-plant-icon"
                                    width="15" height="15" src="static/dashboard-plant-icon.svg"><span
                                    style="margin-left: 0.5em;">Farms</span></h1>
                        </div>
                        <div class="col-5 col-md-2 d-flex justify-content-between">
                            <span>Total: #4, 792</span>
                            <button id="third_table_dropdown" class="btn btn-sm table-expand-toggler"
                                name="third-dashboard-table" onclick="view(this.name)"><i
                                    id="third_dashboard_table_dropdown_icon" class="fas fa-angle-down"></i></button>
                        </div>
                    </div>
                    <!--table body-->
                    <div class="mb-3 w-100" style="overflow-x: auto; ">
                        <div class="pt-1 pb-4 table-body table-body-width" style="border-color: #00ffbb;">

                            <div class="d-flex"
                                style="width: 100%; font-size: medium;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width7" style="padding-left: 5%;">Platform</div>
                                <div class="table-width8 ">Asset</div>
                                <div class="table-width8 d-flex justify-content-center">Balance</div>
                                <div class="d-flex justify-content-center table-width8">Value
                                </div>
                            </div>
                            <div id="third-dashboard-t-b-l-1" class="table-body-links mt-4">
                                <a href="#" class="d-flex mb-1 btn active pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span style="font-size: x-small;" class="w-100">15.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">12.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">40.3 XXX</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span style="font-size: x-small;" class="w-100">15.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">12.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">40.3 XXX</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span style="font-size: x-small;" class="w-100">15.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">12.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">40.3 XXX</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span style="font-size: x-small;" class="w-100">15.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">12.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">40.3 XXX</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span style="font-size: x-small;" class="w-100">15.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">12.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">40.3 XXX</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span style="font-size: x-small;" class="w-100">15.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">12.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">40.3 XXX</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span style="font-size: x-small;" class="w-100">15.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">12.8 XXX</span><br>
                                        <span style="font-size: x-small;" class="w-100">40.3 XXX</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--end of table body-->
                </div>
                <!--end of fourth section-->

                <!--fifth section-->
                <div id="fourth-dashboard-table" class="mt-3">
                    <div class="row">
                        <div class="col-7 col-md-10">
                            <h1 class="d-flex justify-content-center align-items-center"><img
                                    alt="dashboard-staking-icon" width="15" height="15"
                                    src="static/dashboard-staking-icon.svg"><span
                                    style="margin-left: 0.5em;">Staking</span></h1>
                        </div>
                        <div class="col-5 col-md-2 d-flex justify-content-between">
                            <span>Total: #4, 792</span>
                            <button id="fourth_table_dropdown-3" class="btn btn-sm table-expand-toggler"
                                name="fourth-dashboard-table" onclick="view(this.name)"><i
                                    id="fourth_dashboard_table_dropdown_icon" class="fas fa-angle-down"></i></button>
                        </div>
                    </div>
                    <!--table body-->
                    <div class="mb-3 w-100" style="overflow-x: auto; ">
                        <div class="pt-1 pb-4 table-body table-body-width" style="border-color: #00ffbb;">

                            <div class="d-flex"
                                style="width: 100%; font-size: medium;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width7" style="padding-left: 5%;">Platform</div>
                                <div class="table-width8 ">Name</div>
                                <div class="table-width8 d-flex justify-content-center">Collateral Ratio</div>
                                <div class="d-flex justify-content-center table-width8">Value
                                </div>
                            </div>
                            <div id="fourth-dashboard-t-b-l-1" class="table-body-links mt-4">
                                <a href="#" class="d-flex mb-1 btn active pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">

                                        ====
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span class="body-text2" style="color: #2DB020">+400%</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">

                                        ====
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span class="body-text2" style="color: #2DB020">+400%</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">

                                        ====
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span class="body-text2" style="color: #2DB020">+400%</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">

                                        ====
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span class="body-text2" style="color: #2DB020">+400%</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">

                                        ====
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span class="body-text2" style="color: #2DB020">+400%</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">

                                        ====
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span class="body-text2" style="color: #2DB020">+400%</span>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width8">

                                        ====
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8 "
                                        style="line-height: 2px;">
                                        <span class="body-text2" style="color: #2DB020">+400%</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        #205
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--end of table body-->
                </div>
                <!--end of fifth section-->


                <!--sixth section-->
                <div id="fifth-dashboard-table" class="mt-3">
                    <div class="row">
                        <div class="col-7 col-md-10">
                            <h1 class="d-flex justify-content-center align-items-center"><img
                                    alt="dashboard-miscellaneous-icon" width="15" height="15"
                                    src="static/dashboard-miscellaneous-icon.svg"><span
                                    style="margin-left: 0.5em;">Miscellaneous</span></h1>
                        </div>
                        <div class="col-5 col-md-2 d-flex justify-content-between">
                            <span>Total: #4, 792</span>
                            <button id="fifth_table_dropdown" class="btn btn-sm table-expand-toggler"
                                name="fifth-dashboard-table" onclick="view(this.name)"><i
                                    id="fifth_dashboard_table_dropdown_icon" class="fas fa-angle-down"></i></button>
                        </div>
                    </div>
                    <!--table body-->
                    <div class="mb-3 w-100" style="overflow-x: auto; ">
                        <div class="pt-1 pb-4 table-body table-body-width" style="border-color: #00ffbb;">

                            <div class="d-flex"
                                style="width: 100%; font-size: medium;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width1 " style="padding-left: 5%;">Platform</div>
                                <div class="table-width5 text-center">Name</div>

                                <div class="d-flex justify-content-center table-width1">Value
                                </div>
                            </div>
                            <div id="fifth-dashboard-t-b-l-1" class="table-body-links mt-4">
                                <a href="#" class="d-flex mb-1 btn active pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width5 justify-content-center">
                                        ====

                                    </div>

                                    <div class="d-flex justify-content-center table-width1">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width5 justify-content-center">
                                        ====

                                    </div>

                                    <div class="d-flex align-items-center justify-content-center table-width1">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width5 justify-content-center">
                                        ====

                                    </div>

                                    <div class="d-flex align-items-center justify-content-center table-width1">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width5 justify-content-center">
                                        ====

                                    </div>

                                    <div class="d-flex align-items-center justify-content-center table-width1">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width5 justify-content-center">
                                        ====

                                    </div>

                                    <div class="d-flex align-items-center justify-content-center table-width1">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width5 justify-content-center">
                                        ====

                                    </div>

                                    <div class="d-flex align-items-center justify-content-center table-width1">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0"
                                    style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width5">
                                        ====

                                    </div>

                                    <div class="d-flex align-items-center justify-content-center table-width1">
                                        #205
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--end of table body-->
                </div>
                <!--end of sixth section--> --}}

                <!--mobile add placeholder visible only on small screens-->
                    @include('includes.ad2')
                <!--end of mobile placeholder-->

                <!--start of third table -->



            </div>
        </div>



        <!-- Right sidebar-->
        @include('includes.ad_banner')
        
        <!--End of right sidebar-->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="assetDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div style="width: 100%;" class="modal-content bg-dark">
            <div class="modal-header">
              <h5 class="modal-title" id="assetDetailTitle">Modal title</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="assetDetailBody" class="modal-body text-light">
                {{-- The token details will be here --}}
            </div>
          </div>
        </div>
      </div>

  

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="{{asset('js/chart.js')}}"></script>
    
    @include('includes.processing')
    <script 
        src="https://cdn.jsdelivr.net/npm/algosdk@v1.15.0/dist/browser/algosdk.min.js"
        integrity="sha384-wURu1H0s7z6Nj/AiP4O+0EorWZNvjiXwex7pNwtJH77x60mNs0Wm2zR37iUtHMwH"
        crossorigin="anonymous"
    ></script>


    <script>
        const address = "{{$address}}";
        
        const noPoolFoundSpan = document.getElementById("no_pool_found");
        const noTokenFoundSpan = document.getElementById("no_token_found");

        let token = "";
        let port = ""
        let server = " https://algoindexer.algoexplorerapi.io";
        let USER_BALANCE = 0;
        
        const client  = new algosdk.Indexer(token, server, port);//connection client

        
        var accountInfo;
        var listOfAssetsDetails;

        window.onload = async (event)=>{
            showProcessing("Loading Wallet Details");
            document.getElementById("addr_key").innerHTML = truncate(address);
            document.getElementById("keyval").innerHTML = address;
            await fetchAccountDetails();

            var transactionHistory = await getArrayOfTranxHistory();
            if(transactionHistory.length < 1){
                var canvas = document.getElementById("myChart");
                var ctx = canvas.getContext("2d");
                ctx.font = "30px Arial";
                ctx.fillText("No Transaction Yet", 10, 50);
            }else{
                await showChart(transactionHistory);
            }

            listOfAssetsDetails = await getAssetsDetails();
            if(listOfAssetsDetails.length > 0){
                await displayAssets(listOfAssetsDetails);
                console.log(JSON.stringify(accountInfo,null,4));
            }
            
            if(noPoolFoundSpan.style.display != 'none'){
                noPoolFoundSpan.innerHTML = "No Liquidity Pool Found";
            }

            if(noTokenFoundSpan.style.display != 'none'){
                noTokenFoundSpan.innerHTML = "No Token Found";
            }
            await displayBalance();
            hideProcessing();
        }

        async function fetchAccountDetails(){
            try {
                accountInfo = await client.lookupAccountByID(address).do();
            } catch (error) {
                console.error(error);
                alert("couldn't fetch your wallet details, refresh page");
            }
        }

        async function displayBalance() {
            var balanceHold = document.getElementById("balance");
            if(accountInfo){
                USER_BALANCE = USER_BALANCE + accountInfo.account.amount/1000000;
                let formattedBalance = formatNumber(Number.parseFloat( USER_BALANCE * MULTIPLIER ).toFixed(5))
                console.log("FORMATED Balan ce "+formattedBalance);
                balanceHold.innerHTML = formattedBalance+" "+selectedCurr;
            }else{
                balanceHold.innerHTML = "Couldn't fetch Account Details";
            }
        }

        function truncate(address){
            return address.substring(0,6)+"............"+address.substring(address.length-7, address.length-1);
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

        function filterForOnlyPayments(transactionHistory){
            //Filter the list of transactions for only transactions that inolve payment
            return transactionHistory.filter(element => {
                return element["tx-type"] == "pay";
            });
        }

        async function getAssetsDetails(){
            //Get and return assets details of user {name, balance, unitname, price, value}
            let listOfAssets = [];
            try {
                //loop through assets in accounts
                console.log(JSON.stringify(accountInfo,null,4));
                let acctAssets = accountInfo.account.assets;
                if(acctAssets){
                    for(var i = 0; i<acctAssets.length; i++){
                        //Get asset info
                        let assetIndex = acctAssets[i];
                        let assetId = assetIndex["asset-id"];
                        let assetInfo = await client.searchForAssets()
                            .index(assetId).do();
                        console.log("Information for Asset: " + JSON.stringify(assetInfo, undefined, 2));
                        let assetParams = assetInfo.assets[0].params;
                        let balance = assetIndex.amount/10**assetParams.decimals;
                        let priceAndPriceChange = await getPrice(assetId);
                        let price = priceAndPriceChange.price * MULTIPLIER;//Number.parseFloat().toFixed(8);
                        let priceChange = priceAndPriceChange.price_change_24;
                        let value = balance * price;//Number.parseFloat().toFixed(8);
                        USER_BALANCE = USER_BALANCE + value;

                        listOfAssets.push({
                            id: assetId,
                            name: assetParams.name, 
                            balance: balance,
                            unitName: assetParams['unit-name'],
                            priceChange: Number.parseFloat(priceChange).toFixed(0),
                            price: Number.parseFloat(price).toFixed(8),
                            value: Number.parseFloat(value).toFixed(8),
                            url: assetParams.url
                        });
                    }
                }
            } catch (error) {
                console.error(error);
            }

            return listOfAssets;
        }

        async function getPrice(assetId){
            let url = "https://algocharts.net/apiv2/?asset_in="+assetId+"&asset_out=0";//getting value of token from algocharts !!READ UP dapp_doc.md!!
            //"/price"+assetId;
            const config = {
                mode: 'cors',
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            }

            let response = await fetch(url, config);
            let data = await response.json();//Returns array[price, price change 24h] price, 24h price change, USD token value and Algorand to USD value saved for asset:

            console.log("Value from SERVER ABT COIN "+JSON.stringify(data,null,4));
            //return data[0];//Number.parseFloat().toFixed(5);
            return {
                price: data.data[0],
                price_change_24: data.data[1]
            }
        }

        async function displayAssets(listOfAssetsDetails) {
            //Filter through list of assets and display to appropriete field
            for (let index = 0; index < listOfAssetsDetails.length; index++) {
                const assetDetail = listOfAssetsDetails[index]; //{name, balance, unitname, price, value}
                if(assetDetail.balance > 0){
                    if(assetDetail.name.indexOf("-") > -1){
                        //hide no pool found
                        noPoolFoundSpan.style.display= 'none';
                        // document.getElementById("second-dashboard-table").classList.remove("d-none");
                        showAssetOnPoolSection(assetDetail);
                    }else{
                        //hide no token found
                        noTokenFoundSpan.style.display= 'none';
                        // document.getElementById("first-dashboard-table").classList.remove("d-none");
                        showAssetOnTokenSection(assetDetail);
                    }
                }
            }
            
        }

        function showAssetOnPoolSection(assetDetail){
            let layout = `<a href="" id="`+assetDetail.id+`" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0" data-bs-toggle="modal" data-bs-target="#assetDetailsModal"
                                    onclick="showAssetDetailOnModal(`+assetDetail.id+`)" style="font-size: medium;height: 3em;">
                                    <div class="d-flex align-items-center table-width7">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i
                                                class="fas fa-angle-down text-dark"></i></div>
                                        <div class="img-box t-p-div"></div>
                                        `+assetDetail.name+`
                                    </div>
                                    <div class="d-flex align-items-center table-width8">
                                        <div class="img-box2 t-p-div2"></div>
                                        `+assetDetail.unitName+`
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap justify-content-center table-width8"
                                        style="line-height: 2px;">
                                        `+formatNumber(assetDetail.balance)+`
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center table-width8">
                                        `+formatNumber(assetDetail.value)+`
                                    </div>
                                </a>`;

            document.getElementById("second-dashboard-t-b-l-1").innerHTML += layout;
        }

        function showAssetOnTokenSection(assetDetail){
            let layout = `<a href="" id="`+assetDetail.id+`" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2"
                onclick="showAssetDetailOnModal(`+assetDetail.id+`)" data-bs-toggle="modal" data-bs-target="#assetDetailsModal">
                <div class="d-flex align-items-center table-width5">
                    <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                    </div>
                    <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                    <div>`+assetDetail.unitName+`</div>
                </div>
                <div class="d-flex align-items-center table-width6">
                    `+formatNumber(assetDetail.balance)+`
                </div>
                <div class="d-flex align-items-center table-width6" style="margin-left: 10px;">
                    `+assetDetail.price+`
                </div>
                <div class="d-flex align-items-center table-width6" style="margin-left: 10px;">
                    `+formatNumber(Number.parseFloat(assetDetail.value).toFixed(8))+`
                </div>
            </a>`;
            document.getElementById("first-dashboard-t-b-l-1").innerHTML += layout;
        }

        function showAssetDetailOnModal(assetId){
            let assetObj = listOfAssetsDetails.filter(element=>{
                return element.id == assetId;
            })[0];
            console.log(JSON.stringify(assetObj,null,4));
            let detailsBody = assetObj.name+`<br>
                        <b>ID: </b>  `+assetObj.id+`<br>
                        <b>Price: </b>  `+assetObj.price+`<br>
                        <b>Price Change(24H%): </b>  `+assetObj.priceChange+`<br>
                        <a  class="text-success" target="_blank" href="https://`+assetObj.url+`">Website</a>`;
            document.getElementById("assetDetailTitle").innerHTML = assetObj.unitName;
            document.getElementById("assetDetailBody").innerHTML = detailsBody;
        }

        function formatNumber(x) {
            return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>

</body>

</html>