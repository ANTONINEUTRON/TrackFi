<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
                                History<img style="width:30px; height:30px; margin:10px;" src="https://asa-list.tinyman.org/assets/0/icon.svg"  onerror="this.style.display = 'none'"/></span>
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
                        <div class=" col-8 w-100 col-md-10">
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
                                <div class="table-width4">Balance</div>
                                <div class="table-width4" style="">Price<br>({{session('selectedCurrency','Algo')}})</div>
                                <div class="table-width4"  style="">Value<br>({{session('selectedCurrency','Algo')}})</div>
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
    <!--Token Details Modal -->
    <div class="modal fade" id="assetDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div style="width: 100%;" class="modal-content bg-dark">
            <div class="modal-header">
              <div class="modal-title" id="assetDetailTitle">Modal title</div>
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
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

</body>

</html>