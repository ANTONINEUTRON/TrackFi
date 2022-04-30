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

<body class="pt-1">
    <div id="main" class="row g-0" style="height: 95%;">
        <div class="col-md-9 col-lg-9 align-content-around h-100">
            <nav class="navbar navbar-light " style="padding-right: 10%;padding-left: 3%;">
                <div class="container row g-0">
                    <div class="col-2">
                        <i data-bs-toggle="modal" data-bs-target="#get_quote_modal" class="fas fa-bars"
                            style="font-size: xx-large;"></i>

                    </div>
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
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal1"
                                                class="w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;"><i
                                                        class="fas fa-wallet" style="margin-right: 0.5em;"></i><span
                                                        class="ml-3">Connect Wallet</span></div>
                                            </a>
                                            <a href="#"
                                                class="w-100 g-0 text-light active btn btn-block d-flex justify-content-center mt-2">
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
                                                <img style="width: 20px;height: 20px;" alt="bar-chart-icon" src="{{asset('images/bar-chart-2.svg')}}"><span
                                                  style="margin-left: 0.5em;">STATS</span>
                                              </div>
                                            </a>

                                            <a href="/presale"
                                                class="w-100 g-0 text-light btn btn-block d-flex mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;"><i
                                                        class="fas fa-tag" style="margin-right: 0.5em;"></i><span
                                                        class="ml-3">PreSale</span></div>
                                            </a>


                                            <div class="dropdown mt-2">
                                                <button class="w-100 btn btn-block text-light dropdown-toggle"
                                                    type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="col-4" style="margin-right: 1em;">
                                                        <img style="width: 20px;height: 20px;" alt="more-horizontal"
                                                            src="{{asset('images/more-horizontal.svg')}}">
                                                    </span>

                                                    More
                                                </button>
                                                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton"
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

                    <div class="col-10 " style="height: 2em;" id="title">
                        <div class="row">
                            <div class="col-7 d-flex justify-content-center">
                                <h2 class="text-center"><img alt="nav-header" src="{{asset('images/nav-header-trackfi.svg')}}"></h2>
                            </div>
                            <div class="col-5 d-flex justify-content-end">
                                <!--algo and usd buttons-->

                                <form id="subjectName" name="abi" class="select" tabindex="1"
                                    onchange="selectedSubjectName()">
                                    <input checked class=" option-select selectopt" name="test" type="radio" id="opt1"
                                        value="usd">
                                    <label for="opt1" class="option d-flex justify-content-around"><img
                                            alt="united-states-flag-icon" style="width: 20px;"
                                            src="{{asset('images/united-states.svg')}}">USD</label>
                                    <input class="option-select selectopt" name="test" type="radio" id="opt2"
                                        value="algo">
                                    <label for="opt2" class="option"><img alt="algorand-icon" width="30"
                                            src="{{asset('images/algorand_logo_mark_white.svg')}}">ALGO</label>

                                </form>


                                <!--end of algo and usd buttons-->


                                <div>

                                </div>
                            </div>
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
                                <span style="word-wrap: break-word; width: 90%;" id='keyval'>HTI7.......aTzN9</span>
                            </span>
                        </div>
                        <div class="h-50 d-flex justify-content-center align-items-center">
                            <span class="body-text1"><img style="height: 20px;width: 20px;" alt="history-icon"
                                    src="{{asset('images/history-icon.svg')}}">
                                History</span>
                        </div>
                    </div>
                    <div style="position: relative;height: 30vh;" class="pt-3">
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
                <div class="d-block d-md-none mt-4 crossed mr-2 ml-2"
                    style="height: 20vh; background-color: #00ffbb;margin-left: 0.5em;margin-right: 0.5em;">
                    <!--this is adds placeholder remove svg and replace with add -->
                    <svg>
                        <line x1="0" y1="100%" x2="100%" y2="0" />
                        <line x1="0" y1="0" x2="100%" y2="100%" />
                    </svg>

                </div>

                <!--start of third table -->

                <!--second section-->
                <div id="first-dashboard-table" class="mt-4">
                    <div class="row">
                        <div class=" col-7 col-md-10">
                            <h1 class="d-flex justify-content-center"><span
                                    style="margin-right:10px; font-size: large;"><img alt="dashboard-token-icon"
                                        width="15" height="15" src="{{asset('images/dashboard-token-icon.svg')}}"></span><span
                                    style="margin-left: 0.5em;">Tokens</span></h1>
                        </div>
                        <div class="col-5 col-md-2 d-flex justify-content-between">
                            <span>Total: #4, 792</span>
                            <button id="fourth_table_dropdown-1" class="btn btn-sm table-expand-toggler"
                                name="first-dashboard-table" onclick="view(this.name)"><i
                                    id="first_dashboard_table_dropdown_icon" class="fas fa-angle-down"></i></button>
                        </div>
                    </div>
                    <!--table body-->
                    <div class="mb-3 w-100" style="overflow-x: auto;">
                        <div class="pt-1 pb-4 table-body table-body-width">

                            <div class="d-flex"
                                style="width: 100%; font-size: large;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width5" style="padding-left: 9%;">Token</div>
                                <div class="table-width6 ">Balance</div>
                                <div class="table-width6">Price</div>
                                <div class="table-width6">Value
                                </div>
                            </div>
                            <div id="first-dashboard-t-b-l-1" class="table-body-links-1 mt-2">
                                <a href="#" class="d-flex mb-1 btn active pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn dashboard-table-a pb-0 pt-0 body-text2">
                                    <div class="d-flex align-items-center table-width5">
                                        <div style="margin-left: 5%;margin-right: 5%;"><i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="img-box t-p-div" style="margin-left: 10px;"></div>
                                        <div>Token</div>
                                    </div>
                                    <div class="d-flex align-items-center table-width6">

                                        2.568
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #139
                                    </div>
                                    <div class="d-flex align-items-center table-width6">
                                        #205
                                    </div>
                                </a>
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
                    <div class="row">
                        <div class="col-7 col-md-10">
                            <h1 class="d-flex justify-content-center align-items-center"><img alt="dashboard-token-icon"
                                    width="15" height="15" src="static/dashboard-token-icon.svg"><span
                                    style="margin-left: 0.5em;">LP
                                    Tokens</span></h1>
                        </div>
                        <div class="col-5 col-md-2 d-flex justify-content-between">
                            <span>Total: #4, 792</span>
                            <button id="fourth_table_dropdown-2" class="btn btn-sm table-expand-toggler"
                                name="second-dashboard-table" onclick="view(this.name)"><i
                                    id="second_dashboard_table_dropdown_icon" class="fas fa-angle-down"></i></button>
                        </div>
                    </div>
                    <!--table body-->
                    <div class="mb-3 w-100" style="overflow-x: auto; ">
                        <div class="pt-1 pb-2 table-body table-body-width" style="border-color: #00ffbb;">

                            <div class="d-flex"
                                style="width: 100%; font-size: medium;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width7" style="padding-left: 5%;">Platform</div>
                                <div class="table-width8 ">Asset</div>
                                <div class="table-width8 d-flex justify-content-center">Balance</div>
                                <div class="d-flex justify-content-center table-width8">Value
                                </div>
                            </div>
                            <div id="second-dashboard-t-b-l-1" class="table-body-links mt-4">
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
                <!--end of third section-->

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
                <!--end of sixth section-->

                <!--mobile add placeholder visible only on small screens-->
                <div class="d-block d-md-none mt-4 mb-4 crossed mr-2 ml-2"
                    style="height: 20vh; background-color: #00ffbb;margin-left: 0.5em;margin-right: 0.5em;">

                    <svg>
                        <line x1="0" y1="100%" x2="100%" y2="0" />
                        <line x1="0" y1="0" x2="100%" y2="100%" />
                    </svg>

                </div>
                <!--end of mobile placeholder-->

                <!--start of third table -->



            </div>
        </div>



        <!-- Right sidebar-->
        <div id="right-sidebar" class="col-md-3 d-none d-md-block" style="height: 90vh;position: fixed;right: 0;">

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
        <!--End of right sidebar-->
    </div>
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="{{asset('js/chart.js')}}"></script>
    <script 
        src="https://cdn.jsdelivr.net/npm/algosdk@v1.15.0/dist/browser/algosdk.min.js"
        integrity="sha384-wURu1H0s7z6Nj/AiP4O+0EorWZNvjiXwex7pNwtJH77x60mNs0Wm2zR37iUtHMwH"
        crossorigin="anonymous"
    ></script>


    <script>
        const address = "{{$address}}";

        let token = "";
        let port = ""
        let server = " https://algoindexer.algoexplorerapi.io";
        
        const client  = new algosdk.Indexer(token, server, port);//connection client

        window.onload = async (event)=>{
            document.getElementById("keyval").innerHTML = address;
            await displayBalance();

            var transactionHistory = await getArrayOfTranxHistory();
            if(transactionHistory.length < 1){
                var canvas = document.getElementById("myChart");
                var ctx = canvas.getContext("2d");
                ctx.font = "30px Arial";
                ctx.fillText("No Transaction has been recorded on this account", 10, 50);
            }else{
                await showChart(transactionHistory);
            }
        }

        async function displayBalance() {
            var balanceHold = document.getElementById("balance");
            try {
                let accountInfo = await client.lookupAccountByID(address).do();
                console.log("Information for Account: " + JSON.stringify(accountInfo, undefined, 2));
                balanceHold.innerHTML = accountInfo.account.amount/1000000+" Algo";
            } catch (error) {
                console.error(error);
                balanceHold.innerHTML = "Couldn't fetch Balance";
            }
        }

        async function getArrayOfTranxHistory() {
            try {
                let response = await client.searchForTransactions()
                    .address(address)
                    .txType("pay").do();
                console.log("txn_type: pay = " + JSON.stringify(response, undefined, 2));

                return response.transactions;
            } catch (error) {
                console.error(error);
            }
            return [];
        }
    </script>

</body>

</html>