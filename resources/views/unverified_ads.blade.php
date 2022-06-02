<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="#" rel="icon">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css"
  integrity="sha512-ykRBEJhyZ+B/BIJcBuOyUoIxh0OfdICfHPnPfBy7eIiyJv536ojTCsgX8aqrLQ9VJZHGz4tvYyzOM0lkgmQZGw=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--locally hosted comment out during production and uncomment the one above-->
    <!-- <link rel="stylesheet" href="static/fontawesome-free/css/all.min.css" /> -->
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--locally hosted comment out during production and uncomment the one above-->
    <!-- <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css" /> -->
    <!--main stylesheet-->
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('css/styles.css')}}?v={{date('his')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <meta name="theme-color" content="#03031b">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon-16x16.png')}}">
</head>

<body class="pt-1">
    <div id="main" class="row g-0" style="min-height: 95vh;">
        <main class="col-md-9 col-lg-9 align-content-around h-100">
            <nav class="navbar navbar-light " style="padding-right: 10%;padding-left: 3%;">
                <div class="container row g-0">
                    <div class="col-2">
                        <i data-bs-toggle="modal" data-bs-target="#get_quote_modal" class="fas fa-bars"
                            style="font-size: xx-large;"></i>

                    </div>
                    @include('includes.navbar')
                    @include('includes.wallet')
                   <!-- modal-dialog -->
                    <!-- modal -->
                    <!-- //left modal -->

                    <div class="col-10 " style="height: 2em;" id="title">
                        <div class="row">
                            <div class="col-7 d-flex justify-content-center">
                                <h2 class="text-center"><img alt="nav-header-trackfi"
                                        src="{{asset('images/nav-header-trackfi.svg')}}"></h2>
                            </div>

                        </div>


                    </div>


                </div>

            </nav>

            <div class="container" style="height: 90%;padding-left: 3%;padding-right: 3%;">
                <h1 class="text-light first-heading text-center">PROMOTION AND ADVERTISEMENT</h1>

                <div class="row g-0 d-flex justify-content-center ">
                    <div class="col-12 col-md-8 col-lg-6 banner-toggler-wrapper">
                        <div class="row g-0 h-100">
                            <a href="/banner-ads"
                                class="col-4 h-100  d-flex justify-content-center align-items-center">
                                <span class="font-bold">Banner Ads</span>
                            </a>
                            <a href="/unverified-ads"
                                class="col-4 h-100 active  d-flex justify-content-center align-items-center">
                                <span class="font-bold">Unverified</span>
                            </a>
                            <a href="/verified-ads"
                                class="col-4 h-100  d-flex justify-content-center align-items-center">
                                <span class="font-bold">Verified</span>
                            </a>

                        </div>
                    </div>

                </div>

                <h2 class="second-heading mt-2">UNVERIFIED ADDS</h2>
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="mt-2">
                            <p>The Un-verified (Explorer or Algorand Inc.) list will place all new submissions to top
                                ads thereby pushing the rest down.</p>
                            <p>You can promote the same token as many times as you want, putting it back to the top of
                                the list.
                            </p>

                            @include('includes.ad1')

                            <p>If your token is pushed off the top- 10 most recent ads, it will no longer be on this
                                list and you will have to subscribe again to get it back to the top. </p>
                            <p>This is non - refundable.</p>
                            <p>See <a href="#">here</a> for our Prices and Ads Duration.</p>
                        </div>
                    </div>
                </div>


                


                <!--mobile add placeholder-->
                @include('includes.ad2')

            </div>
        </main>



        <!-- Right sidebar-->
        @include('includes.ad_banner')
        <!--End of right sidebar-->
    </div>
    <footer id="footer" class="d-flex text-dark justify-content-between mt-1" style="height: 5vh">
        <div><img alt="footer-trackfi" src="{{asset('images/footer-trackfi.svg')}}"></div>
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
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--locally hosted comment out during production and uncomment the one above-->
    <!-- <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{asset('js/main.js')}}?v={{date('his')}}"></script>


</body>

</html>