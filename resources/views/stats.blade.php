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
                                                class="w-100 g-0 btn text-light btn-block d-flex justify-content-center">
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
                                            <a href="/stats"
                                                class="w-100 g-0 text-light btn btn-block d-flex mt-2 active">
                                                <div class="d-flex align-items-center" style="width: 100%;">
                                                    <img style="width: 20px;height: 20px;" alt="bar-chart"
                                                        src="{{asset('images/bar-chart-2.svg')}}"><span
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
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="col-4" style="margin-right: 1em;">
                                                        <img style="width: 20px;height: 20px;" alt="more-horizontal"
                                                            src="{{asset('images/more-horizontal.svg')}}">
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

                    <div class="col-10 " style="height: 2em;" id="title">
                        <div class="row">
                            <div class="col-7 d-flex justify-content-center">
                                <h2 class="text-center"><img alt="nav-header-trackfi"
                                        src="{{asset('images/nav-header-trackfi.svg')}}"></h2>
                            </div>
                            <div class="col-5 d-flex justify-content-end"><!--algo and usd buttons-->

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

            <div class="container" style="height: 90%;padding-left: 3%;padding-right: 3%;">
                <h1 class="text-light">STATS</h1>
                <h3>Tokens</h3>

                <div class="row">
                    <!--First table-->
                    <div class="col-md-6 col-xs-12 mb-3" id="first_table">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="d-flex align-items-center"><span style="margin-right: 10px;">Biggest
                                        Gainers</span><img alt="chart-up-icon" width="10" height="10"
                                        src="{{asset('images/chart-up-icon.svg')}}"></h3>
                            </div>
                            <div class="col-3 d-flex justify-content-center"><button id="first_table_dropdown"
                                    class="btn btn-sm table-expand-toggler" name="first_table"
                                    onclick="view(this.name)"><i id="first_table_dropdown_icon"
                                        class="fas fa-angle-down"></i></button></div>
                        </div>
                        <div class="pt-1 pb-4 table-body">
                            <div class="d-flex justify-content-between" style="font-size: 0.8em;">
                                <span>Token</span><span>Price</span><span style="margin-right: 14px;">24H%</span>
                            </div>
                            <div id="first-table-body-links-1" class="table-body-links-1">
                                <a href="#" class="d-flex justify-content-between mb-1 btn active pb-0 pt-0"
                                    style="font-size: small;padding-right: 10px;">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="{{asset('images/gains-line-up.svg')}}"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">

                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="{{asset('images/gains-line-up.svg')}}"></span>
                                </a>
                                {{-- <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="static/gains-line-up.svg"></span>
                                </a> --}}
                            </div>

                        </div>

                    </div>
                    <!--End of first table-->

                    @include('includes.wallet')


                    <!--Start of second table-->
                    <div class="col-md-6 col-xs-12 mb-3" id="second_table">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="d-flex align-items-center"><span style="margin-right: 10px;">Biggest
                                        Loosers</span><img alt="chart-down-icon" width="10" height="10"
                                        src="{{asset('images/chart-down-icon.svg')}}">
                                </h3>
                            </div>
                            <div class="col-3 d-flex justify-content-center"><button id="second_table_dropdown"
                                    class="btn btn-sm table-expand-toggler" name="second_table"
                                    onclick="view(this.name)"><i id="second_table_dropdown_icon"
                                        class="fas fa-angle-down"></i></button></div>
                        </div>
                        <div class="pt-1 pb-4 table-body">
                            <div class="d-flex justify-content-between" style="font-size: 0.8em;">
                                <span>Token</span><span>Price</span><span style="margin-right: 14px;">24H%</span>
                            </div>
                            <div id="second-table-body-links-1" class="table-body-links-1">
                                <a href="#" class="d-flex justify-content-between mb-1 btn active pb-0 pt-0"
                                    style="font-size: small;padding-right: 10px;">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="{{asset('images/losses-line-down.svg')}}"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">

                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="{{asset('images/losses-line-down.svg')}}"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="{{asset('images/losses-line-down.svg')}}"></span>
                                </a>
                                {{-- <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="static/losses-line-down.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="static/losses-line-down.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="static/losses-line-down.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="static/losses-line-down.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="static/losses-line-down.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="static/losses-line-down.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="static/losses-line-down.svg"></span>
                                </a>
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="lossess-line-down" width="10" height="10"
                                            src="static/losses-line-down.svg"></span>
                                </a> --}}
                            </div>

                        </div>

                    </div>
                    <!--End of second table-->
                </div>
                <!--mobile add placeholder-->
                <div class="d-block d-md-none mt-1 crossed mr-2 ml-2"
                    style="height: 15vh; background-color: #00ffbb;margin-left: 0.5em;margin-right: 0.5em;">

                    <svg>
                        <line x1="0" y1="100%" x2="100%" y2="0" />
                        <line x1="0" y1="0" x2="100%" y2="100%" />
                    </svg>

                </div>

                <!--start of third table -->
                <div id="third_table">
                    <h3>Pools</h3>
                    <div class="row">
                        <div class="col-10">
                            <h3><span style="margin-right:10px">Biggest Gainers</span><img width="10" height="10"
                                    alt="chart-up-icon" src="{{asset('images/chart-up-icon.svg')}}"></h3>
                        </div>
                        <div class="col-2 d-flex justify-content-center"><button id="third_table_dropdown"
                                class="btn btn-sm table-expand-toggler" name="third_table" onclick="view(this.name)"><i
                                    id="third_table_dropdown_icon" class="fas fa-angle-down"></i></button></div>
                    </div>
                    <div class="mb-3 w-100" style="background-color: #478A78;overflow-x: auto;">


                        <div class="pt-1 pb-4 table-body table-body-width">
                            <div class="d-flex"
                                style="width: 100%; font-size: medium;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width1" style="margin-right: 10px;">Platform</div>
                                <div class="table-width2">Pool</div>
                                <div class="table-width3">TVL</div>
                                <div class="table-width4 d-flex justify-content-end" style="padding-right: 13px;">24H%
                                </div>
                            </div>
                            <div id="third-table-body-links-1" class="table-body-links">
                                <a href="#" class="d-flex mb-1 btn active pb-0 pt-0" style="font-size: medium;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">
                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">
                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="{{asset('images/gains-line-up.svg')}}"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">
                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">
                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">
                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">
                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="{{asset('images/gains-line-up.svg')}}"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="{{asset('images/gains-line-up.svg')}}"></span>
                                    </div>
                                </a>
                                {{-- <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a> --}}
                            </div>

                        </div>

                    </div>
                </div>

                <!--end of third table -->

                <!--Start of fourth table-->
                <div id="fourth_table">
                    <h3>Farms</h3>
                    <div class="row">
                        <div class="col-10">
                            <h3><span style="margin-right:10px">Biggest Gainers</span><img width="10" height="10"
                                    alt="chart-up-icon" src="{{asset('images/chart-up-icon.svg')}}"></h3>
                        </div>
                        <div class="col-2 d-flex justify-content-center"><button id="fourth_table_dropdown"
                                class="btn btn-sm table-expand-toggler" name="fourth_table" onclick="view(this.name)"><i
                                    id="fourth_table_dropdown_icon" class="fas fa-angle-down"></i></button></div>
                    </div>
                    <div class="mb-3 w-100" style="background-color: #478A78;overflow-x: auto;">


                        <div class="pt-1 pb-4 table-body table-body-width">
                            <div class="d-flex"
                                style="width: 100%; font-size: medium;padding-left: 2%;padding-right: 2%;">
                                <div class="table-width1" style="margin-right: 10px;">Platform</div>
                                <div class="table-width2">Pool</div>
                                <div class="table-width3">TVL</div>
                                <div class="table-width4 d-flex justify-content-end" style="margin-right: 13px;">24H%
                                </div>
                            </div>
                            <div id="fourth-table-body-links-1" class="table-body-links">
                                <a href="#" class="d-flex mb-1 btn active pb-0 pt-0" style="font-size: medium;">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div"></div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2"></div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">
                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">
                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="{{asset('images/gains-line-up.svg')}}"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">
                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">
                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">
                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">
                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="{{asset('images/gains-line-up.svg')}}"></span>
                                    </div>
                                </a>
                                {{-- <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a>
                                <a href="#" class="d-flex mb-1 btn pb-0 pt-0 table-links">
                                    <div class="d-flex align-items-center table-width1">
                                        <div class="img-box t-p-div">

                                        </div>
                                        Platform
                                    </div>
                                    <div class="d-flex align-items-center table-width2">
                                        <div class="img-box2 t-p-div2">

                                        </div>
                                        RAY-SOL-PSOL
                                    </div>
                                    <div class="d-flex align-items-center table-width3">

                                        $1.67M
                                    </div>
                                    <div class="d-flex align-items-center table-width4 justify-content-end">

                                        <span><span style="margin-right: 5px;">10%</span><img width="10" height="10"
                                                alt="gains-line-up" src="static/gains-line-up.svg"></span>
                                    </div>
                                </a> --}}
                            </div>

                        </div>

                    </div>
                </div>

                <!--End of fourth table-->
                <!--mobile add placeholder-->
                <div class="d-block d-md-none mt-1 crossed mr-2 ml-2"
                    style="height: 15vh; background-color: #00ffbb;margin-left: 0.5em;margin-right: 0.5em;">

                    <svg>
                        <line x1="0" y1="100%" x2="100%" y2="0" />
                        <line x1="0" y1="0" x2="100%" y2="100%" />
                    </svg>

                </div>



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
    {{-- <footer id="footer" class="d-flex text-dark justify-content-between mt-1" style="height: 5vh">
        <div><img alt="footer-trackfi" src="static/footer-trackfi.svg"></div>
        <div class="h1 d-flex justify-content-around footer-icons align-items-center h-100">
            <a href="#">
                <i class="fab fa-reddit-square"></i></a>
            <a href="#">
                <i class="fab fa-twitter-square"></i></a>
            <a href="#">
                <div class="d-flex justify-content-center align-items-center"
                    style="width: 0.85em;height: 0.85em; background-color: #03031b;position: relative;">
                    <i class='fab fa-telegram tel-sty'></i>
                </div>
            </a>
            <a href="#">
                <i class="fas fa-envelope-square"></i></a>
            <a href="#">
                <i class="fab fa-discord"></i></a>
        </div>
    </footer> --}}
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--locally hosted comment out during production and uncomment the one above-->
    <script src="asset('js/main.js')"></script>
    <script>
        {{--
        //Fetch all assets from tinycharts
        //check and show price from algocharts
        --}}
    </script>

</body>

</html>