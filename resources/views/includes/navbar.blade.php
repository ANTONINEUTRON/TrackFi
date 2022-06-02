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
                                    class="fas fa-wallet" style="margin-right: 0.5em;"></i><span id="connStatus"
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
                        <a href="/banner-ads"
                                                class="w-100 g-0 text-light btn btn-block d-flex mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;"><i
                                                        class="fas fa-globe" style="margin-right: 0.5em;"></i><span
                                                        class="ml-3">Ads</span></div>
                                            </a>

                                            <a href="/borrow-platform"
                                                class="w-100 g-0 text-light btn btn-block d-flex mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;"><img alt="borrowing-icon"
                                                    src="{{asset('images/undo-icon.png')}}" style="margin-right: 0.5em; width: 20px;"><span
                                                        class="ml-3">Borrowing</span></div>
                                            </a>
                                            <a href="#"
                                                class="w-100 g-0 text-light btn btn-block d-flex mt-2">
                                                <div class="d-flex align-items-center" style="width: 100%;"><img class="h-50" alt="whitepaper-icon"
                                                        src="{{asset('images/whitepaper-icon.svg')}}" style="margin-right: 0.5em;"><span
                                                        class="ml-3">White paper</span></div>
                                            </a>

                    </div>
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