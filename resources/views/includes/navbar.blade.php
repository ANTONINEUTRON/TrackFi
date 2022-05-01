<!--navbar modal-->
<div class="modal modal_outer left_modal fade" id="get_quote_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form method="post" id="get_quote_frm">
            <div class="modal-content ">

                <div class="modal-body h-100 p-0 pt-4" style="font-size: small;">
                    <div style="height: 70%;">
                        <a href="/"
                            class="navii w-100 g-0 btn btn-block d-flex justify-content-center text-light">
                            <div class="d-flex  align-items-center" style="width: 100%;"><i
                                    class="fas fa-home" style="margin-right: 0.5em;"></i><span
                                    class="ml-3">Home</span></div>
                        </a>
                        <a href="#" id="connect" data-bs-toggle="modal" data-bs-target="#modal1"
                            class="navii w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                            <div class="d-flex align-items-center" style="width: 100%;"><i
                                    class="fas fa-wallet" style="margin-right: 0.5em;"></i><span
                                    class="ml-3">Connect Wallet</span></div>
                        </a>
                        <a href="/wallet_dashboard"
                            class="navii w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                            <div class="d-flex align-items-center" style="width: 100%;"><i
                                    class="fas fa-tachometer-alt"
                                    style="margin-right: 0.5em;"></i><span
                                    class="ml-3">Dashboard</span></div>
                        </a>
                        <a href="/nfts"
                            class="navii w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                            <div class="d-flex align-items-center" style="width: 100%;"><i
                                    class="fas fa-image" style="margin-right: 0.5em;"></i><span
                                    class="ml-3">NFTS</span></div>
                        </a>
                        <a href="/stats" class="navii w-100 g-0 text-light btn btn-block d-flex mt-2">
                            <div class="d-flex align-items-center" style="width: 100%;">
                                <img alt="bar-chart" style="width: 20px;height: 20px;"
                                    src="{{asset('images/bar-chart-2.svg')}}"><span
                                    style="margin-left: 0.5em;">STATS</span>
                            </div>
                        </a>

                        <a href="/presale"
                            class="navii w-100 g-0 text-light btn btn-block d-flex mt-2">
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
</div>

<script>
    var path = window.location.pathname;

    var navItems = document.getElementsByClassName("navii");
    for(var i = 0; i < navItems.length; i++){
        if(path == navItems[i].getAttribute("href")){
            navItems[i].classList.add("active");
            break;
        }
    }
</script>