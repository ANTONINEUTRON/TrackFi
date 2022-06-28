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
          
          @include('includes.navbar')
          <!-- modal -->
          <!-- //left modal -->

          <div class="col-10" id="search_bar">
            <form class="form-horizontal" id="search_form" method="GET" action="/wallet_dashboard" onkeydown="return event.key != 'Enter';">
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
          TrackFi is a DeFi Protocol built under Algorand which offers users full access to their Portfolio, 
          Activites on AMM / LP tracking on any ASA or address. Users can also pledge their NFT to borrow funds 
          from a decentralized pool and pay back under a stipulated timeframe.
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
        @include('includes.ad1')
        <br />

        @include('includes.wallet')

        <h1 class="text-center">Buy $TrackFi</h1>
        <div class="d-flex justify-content-center">
          <div class="rounded-circle text-secondary text-center m-s-div">
              <src="{{asset('static/svg/phantom-wallet-icon.svg')}}" />
            <a href="https://app.tinyman.org/#/swap?asset_in=0&asset_out=580431573"><img src="icons/tinyman.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-s-div">
            <a href="https://app.algostake.org/"><img src="icons/algostake.png"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-s-div">
            <a href="https://tinychart.org/asset/580431573"><img src="icons/tinychart.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-s-div">
            <a href="https://algoexplorer.io/asset/580431573"><img src="icons/explorer.png"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-s-div">
            <a href="#"><img src="icons/yield.jpeg"></a>
          </div>
        </div>
        <!--manage portfolio section-->

        <h1 class="text-center mt-2">Manage Portfolio</h1>
        <div class="d-flex justify-content-center">
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/defly.jpeg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/opulus.jpeg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/zone.jpeg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/yield.jpeg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/alchemon.jpeg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/algofund.png"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/asastats.png"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/birdbox.jpeg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/casino.jpeg"></a>
          </div>
          
        </div>

        <div class="d-flex justify-content-center mt-1">
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/algostake.png"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/choicecoin.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/dex.jpeg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/weblen.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/tinychart.jpg"></a>
          </div>
          
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/akita.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/algomint.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/algonut.jpg"></a>
          </div>
        </div>
        
        <div class="d-flex justify-content-center mt-1">
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/nexus.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/smile.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/tree.jpg"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/octorand.png"></a>
          </div>
          <div class="rounded-circle text-secondary text-center m-p-div">
<a href="#"><img src="icons/headline.png"></a>
          </div>
       
        </div>
        
      </div>
    </div>

    <!--end of main body section-->
    <!--right navbar visible only on medium and large screens-->
    @include('includes.ad_banner')
    <!--end of right navbar-->
  </div>
  @include('includes.ad2')
  @include('includes.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
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