<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('includes.head')

  <title>
    Trackfi Home
  </title>
</head>

<body class="pt-1" style="height: 100vh;">
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
                      <a href="/" class="w-100 g-0 btn btn-block active d-flex justify-content-center">
                        <div class="d-flex  align-items-center" style="width: 100%;"><i class="fas fa-home"
                            style="margin-right: 0.5em;"></i><span class="ml-3">Home</span></div>
                      </a>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modal1"
                        class="w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                        <div class="d-flex align-items-center" style="width: 100%;"><i class="fas fa-wallet"
                            style="margin-right: 0.5em;"></i><span class="ml-3">Connect Wallet</span></div>
                      </a>
                      <a href="/wallet_dashboard"
                        class="w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                        <div class="d-flex align-items-center" style="width: 100%;"><i class="fas fa-tachometer-alt"
                            style="margin-right: 0.5em;"></i><span class="ml-3">Dashboard</span></div>
                      </a>
                      <a href="/nfts" class="w-100 g-0 text-light btn btn-block d-flex justify-content-center mt-2">
                        <div class="d-flex align-items-center" style="width: 100%;"><i class="fas fa-image"
                            style="margin-right: 0.5em;"></i><span class="ml-3">NFTS</span></div>
                      </a>
                      <a href="/stats" class="w-100 g-0 text-light btn btn-block d-flex mt-2">
                        <div class="d-flex align-items-center" style="width: 100%;">
                          <img style="width: 20px;height: 20px;" alt="bar-chart-icon" src="{{asset('images/bar-chart-2.svg')}}"><span
                            style="margin-left: 0.5em;">STATS</span>
                        </div>
                      </a>

                      <a href="/presale" class="w-100 g-0 text-light btn btn-block d-flex mt-2">
                        <div class="d-flex align-items-center" style="width: 100%;"><i class="fas fa-tag"
                            style="margin-right: 0.5em;"></i><span class="ml-3">PreSale</span></div>
                      </a>


                      <div class="dropdown mt-2">
                        <button class="w-100 btn btn-block text-light dropdown-toggle" type="button"
                          id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="col-4" style="margin-right: 1em;">
                            <img alt="more-horizontal-icon" style="width: 20px;height: 20px;"
                              src="{{asset('images/more-horizontal.svg')}}">
                          </span>

                          More
                        </button>
                        <div class="dropdown-menu w-100" style="background:inherit">
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
                        <button class="w-100 btn btn-block text-light dropdown-toggle" type="button"
                          id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                          <span style="margin-right: 10px;"><i class="fas fa-cog"></i></span>Settings
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

          <div class="col-10" id="search_bar">
            <form class="form-horizontal" id="search_form" method="POST" action="/dashboard" onkeydown="return event.key != 'Enter';">
              {{ csrf_field() }}
              <div class="form-group">
                <input id='nav-search' name="address" type="text" class=" form-control" style="width: 100%;"
                  placeholder="Paste Address here">
              </div>
            </form>

          </div>


        </div>

      </nav>

      <div class="d-flex flex-wrap flex-column justify-content-center" style="height: 90%;">


        <h1 class="text-center"><img alt="trackfi-header-icon" src="{{asset('images/header-trackfi.svg')}}"></h1>

        <span class="text-center body-text1">
          TrackFi is a DeFi Protocol built under Algorand that <br>
          offers users full access to their Portfolio, Activites on <br>
          AMM / LP tracking on any ASA.
        </span>
        <div class="w-100 d-flex justify-content-center mt-2">

          <button type="button" onclick="myform()" class="mb-1 btn-sm justify-content-center text-light" style="
                width: fit-content;
                background: linear-gradient(
                  90.38deg,
                  #323365 -27.96%,
                  #00ffbb 156.66%
                ); ;
              ">
            ACCESS
          </button>
        </div>
        <div class="d-block d-md-none mt-1 crossed mr-2 ml-2"
          style="height: 10%; background-color: #00ffbb;margin-left: 1.5em;margin-right: 1.5em;">
          <svg>
            <line x1="0" y1="100%" x2="100%" y2="0" />
            <line x1="0" y1="0" x2="100%" y2="100%" />
          </svg>
        </div>
        <br />

        @include('includes.wallet')

        <h1 class="text-center">Buy $TrackFi</h1>
        <div class="d-flex justify-content-center">
          <div class="rounded-circle text-secondary text-center m-s-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-s-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-s-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-s-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-s-div">

          </div>
        </div>
        <!--manage portfolio section-->

        <h1 class="text-center mt-2">Manage Portfolio</h1>
        <div class="d-flex justify-content-center">
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div ">

          </div>
        </div>

        <div class="d-flex justify-content-center mt-1">
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
        </div>
        <div class="d-flex justify-content-center mt-1">
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">

          </div>
        </div>
        <div class="d-block d-md-none d-xs-block crossed mt-1"
          style="height: 10%; background-color: #00ffbb;margin-left: 1.5em;margin-right: 1.5em;">
          <svg>
            <line x1="0" y1="100%" x2="100%" y2="0" />
            <line x1="0" y1="0" x2="100%" y2="100%" />
          </svg>
        </div>
      </div>
    </div>

    <!--end of main body section-->
    <!--right navbar visible only on medium and large screens-->

    <div id="right-sidebar" class="col-md-3 d-none d-md-block">

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
  @include('includes.footer')

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script> -->
  <!--locally hosted comment out during production and uncomment the one above-->
  <script src="{{asset('css/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script>
    @if(!empty($error))
      //Error detected
      if(confirm("{{ $error }}")){
        document.getElementById("connect").click();
      }else{
        window.href = "/";
      }
    @endif
  </script>
  
</body>

</html>