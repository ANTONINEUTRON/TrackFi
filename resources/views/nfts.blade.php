<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi NFTS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('includes.head')
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
                    <!-- modal -->
                    <!-- //left modal -->
                    
                    @include('includes.navbar')




                </div>

            </nav>

            <div class="d-flex flex-wrap flex-column justify-content-center" style="height: 90%;">


                <h1 class="text-center"><img alt="header-trackfi" src="{{asset('images/header-trackfi.svg')}}"></h1>

                <span class="text-center body-text1">
                    Sorry we are currently working on NFT portfolio<br>
                    Please checkback later
                </span>

                <br />
                <!--modal1 that contains wallet providers-->
                @include('includes.wallet')

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
    <!--footer section-->
    {{-- <footer class="d-flex text-dark justify-content-between mt-1" style="height: 6%">
        <div><img alt="trackfi-footer" src="{{asset('images/footer-trackfi.svg')}}"></div>
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
    

</body>

</html>