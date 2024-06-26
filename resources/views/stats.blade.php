<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi Statistics</title>
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
                    @include('includes.wallet')
                    <!-- modal -->
                    <!-- //left modal -->

                    <div class="col-10 " style="height: 2em;" id="title">
                        <div class="row">
                            <div class="col-7 d-flex justify-content-center">
                                <h2 class="text-center"><img alt="nav-header-trackfi"
                                        src="{{asset('images/nav-header-trackfi.svg')}}"></h2>
                            </div>
                            
                            @include('includes.currency_switch')
                        </div>


                    </div>


                </div>

            </nav>

            <div class="container" style="height: 90%;padding-left: 3%;padding-right: 3%;">
                <h1 class="text-light">STATS</h1>
                <h3>Tokens</h3>

                <div class="row">
                    <!--First table-->
                    <div class="mb-3" id="first_table">
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
                            <div class="d-flex  justify-content-between" style="font-size: 0.8em;">
                                <span style="width: 40%">Token</span>
                                <span style="width: 30%;" class="pl-5">Price<br>({{session('selectedCurrency','Algo')}})</span>
                                <span style="width: 9%">24H%</span>
                            </div>
                            <div id="first-table-body-links-1" class="table-body-links-1">
                                {{-- <a href="#" class="d-flex justify-content-between mb-1 btn active pb-0 pt-0"
                                    style="font-size: small;padding-right: 10px;">
                                    <span class="d-flex align-items-center">
                                        <span class="img-box t-p-div"></span>Token
                                    </span><span>$0.0034743</span><span><span style="margin-right: 5px;">10%</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="{{asset('images/gains-line-up.svg')}}"></span>
                                </a> --}}
                                @for($i=0; $i < 10; $i++)
                                <a href="#" class="d-flex justify-content-between btn pb-0 pt-0 table-a">

                                    <span class="d-flex align-items-center" style="width: 15%">
                                        <div style="width:25px; height:25px; margin-left: 2%;margin-right: 2%;">
                                            <img style="width:25px; height:25px; margin: 5%;" src="https://asa-list.tinyman.org/assets/{{$result[$i]->id}}/icon.svg"  onerror="this.style.display = 'none'"/>
                                        </div>
                                        {{$result[$i]->unit_name ?: $result[$i]->name}}
                                    </span><span style="width: 32%">@php(printf("%.9f", $result[$i]->price * session('multiplier',1)))</span><span>
                                    <span style="width: 10%">{{$result[$i]->price_change_24}}</span><img
                                            alt="gains-line-up" width="10" height="10"
                                            src="{{asset('images/gains-line-up.svg')}}"></span>
                                </a>
                                @endfor
                            </div>

                        </div>

                    </div>
                    <div style="padding-left: 3%;padding-right: 3%;"> 
                        
                    </div>
                    <!--End of first table-->

                    
                <!--mobile add placeholder-->
                @include('includes.ad1')

                    <!--Start of second table-->
                    <div class="mb-3" id="second_table">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="d-flex align-items-center"><span style="margin-right: 10px;">Biggest
                                        Losers</span><img alt="chart-down-icon" width="10" height="10"
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
                                <span style="width: 40%">Token</span>
                                <span style="width: 30%">Price<br>({{session('selectedCurrency','Algo')}})</span>
                                <span style="width: 9%">24H%</span>
                            </div>
                            <div id="second-table-body-links-1" class="table-body-links-1">
                                @for($i= (count($result)-1); $i >= (count($result)-10); $i--)
                                    <a href="#" class="d-flex justify-content-between table-a btn pb-0 pt-0"
                                        style="font-size: small;padding-right: 10px;">
                                        <span class="d-flex align-items-center" style="width: 14%">
                                            <div style="width:25px; height:25px; margin-left: 2%;margin-right: 2%;">
                                                <img  style="width:25px; height:25px; margin-left: 2%;margin-right: 2%;" src="https://asa-list.tinyman.org/assets/{{$result[$i]->id}}/icon.svg" onerror="this.style.display = 'none'"/>
                                            </div>
                                            {{$result[$i]->unit_name ?: $result[$i]->name}}
                                        </span>
                                        <span style="width: 32%">@php(printf("%.9f", $result[$i]->price * session('multiplier',1)))</span><span>
                                        <span style="width: 10%">{{$result[$i]->price_change_24}}</span><img
                                                alt="lossess-line-down" width="10" height="10"
                                                src="{{asset('images/losses-line-down.svg')}}"></span>
                                    </a>
                                @endfor
                            </div>

                        </div>

                    </div>
                    <!--End of second table-->
                </div>

                <!--End of fourth table-->
                <!--mobile add placeholder-->
                @include('includes.ad2')



            </div>
        </div>



        <!-- Right sidebar-->
        @include('includes.ad_banner')
        <!--End of right sidebar-->
    </div>
    
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--locally hosted comment out during production and uncomment the one above-->
    <script src="{{asset('js/main.js')}}"></script>
    @include('includes.processing')

</body>

</html>