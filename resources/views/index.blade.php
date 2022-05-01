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
            <form class="form-horizontal" id="search_form" method="POST" action="/wallet_dashboard" onkeydown="return event.key != 'Enter';">
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