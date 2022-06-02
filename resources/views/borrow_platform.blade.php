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
    <!--fontawesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css"
  integrity="sha512-ykRBEJhyZ+B/BIJcBuOyUoIxh0OfdICfHPnPfBy7eIiyJv536ojTCsgX8aqrLQ9VJZHGz4tvYyzOM0lkgmQZGw=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--locally hosted comment out during production and uncomment the one above-->
    <link rel="stylesheet" href="static/fontawesome-free/css/all.min.css" />
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--locally hosted comment out during production and uncomment the one above-->
    <!-- <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css" /> -->
    <!--main stylesheet-->
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('css/styles.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <meta name="theme-color" content="#03031b">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon-16x16.png')}}">
</head>

<body class="pt-1">
    <div id="main" class="row g-0" style="min-height: 95vh;">
        <main class="col-md-12 col-lg-12 align-content-around h-100">
            <nav class="navbar navbar-light " style="padding-right: 10%;padding-left: 3%;">
                <div class="container row g-0">
                    <div class="col-2">
                        <i data-bs-toggle="modal" data-bs-target="#get_quote_modal" class="fas fa-bars"
                            style="font-size: xx-large;"></i>

                    </div>
                     @include('includes.navbar')
                    <!-- modal -->
                    <!-- //left modal -->

                    <div class="col-10" style="height: 2em;" id="title">
                        <div class="row d-flex justify-content-center">
                            <div class="col-8 d-flex justify-content-center">
                                <h2 class="text-center"><img alt="nav-header-trackfi"
                                        src="{{asset('images/nav-header-trackfi.svg')}}"></h2>
                            </div>

                        </div>


                    </div>


                </div>

            </nav>

            <div class="container" style="height: 90%;">
                <h1 class="text-light first-heading text-center">BORROW PLATFORM</h1>

                <div class="row g-0 mb-5 position-relative p-3 d-flex justify-content-center">
                    <div id="cp-insight" class="col-12 d-flex justify-content-center d-none position-absolute">
                        <div class="col-4 insight-popup p-2"><img alt="insight-icon" src="{{asset('images/insight.svg')}}">
                            <span>Current Price</span>
                        </div>

                    </div>
                    <div id="bd-insight" class="col-12 d-flex justify-content-end d-none position-absolute">
                        <div class="col-4 insight-popup p-2"><img alt='insight_icon' src="{{asset('images/insight.svg')}}">
                            <span>Borrow Duration</span>
                        </div>

                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row g-0">
                    <div class="col-4">
                        <h2 class="second-heading">NFT</h2>
                        <form id="subjectName" name="abi" class="select" tabindex="1" onchange="selectedSubjectName()">
                            <input checked class=" option-select selectopt" name="test" type="radio" id="opt1"
                                value="placeholder1">
                            <label for="opt1" class="option d-flex justify-content-around">placehr1</label>
                            <input class="option-select selectopt" name="test" type="radio" id="opt2"
                                value="placeholder2">
                            <label for="opt2" class="option d-flex justify-content-around">placehr2</label>
                            <input class="option-select selectopt" name="test" type="radio" id="opt3"
                                value="placeholder3">
                            <label for="opt3" class="option d-flex justify-content-around">placehr3</label>
                            <input class="option-select selectopt" name="test" type="radio" id="opt4"
                                value="placeholder4">
                            <label for="opt4" class="option d-flex justify-content-around">placehr4</label>

                        </form>
                    </div>

                    <div class="col-4">
                        <h2 class="second-heading d-none d-md-block">CURRENT PRICE</h2>
                        <h2 class="second-heading d-md-none text-center">CP<sup><img alt="insight-icon" title="cp-insight" onclick="popups(this.title)" src="{{asset('images/insight.svg')}}"></sup></h2>
                        <div class="row g-0">
                        <div class=" col-3 col-md-2">
                            <img alt="algorand-icon" style="height: 40px;" src="{{asset('images/algorand_logo_mark_white.svg')}}">
                        </div>

                        <div class=" col-4 col-md-2 d-flex align-items-center">
                            <form id="borrow-form" onkeydown="return event.key != 'Enter';">
                                <input type="number" name="borrow-amount" class="w-100 borrow-amount">
                            </form>
                        </div>
                        </div>


                        <button type="button" class="mb-1 mt-4 btn-sm justify-content-center text-light ac-btn">
                            WITHDRAW
                        </button>
                    </div>

                    <div class="col-4">
                        <h2 class="second-heading d-none d-md-block">BORROW DURATION</h2>
                        <h2 class="second-heading d-md-none text-center">BD<sup><img title="bd-insight" alt="insight-icon" onclick="popups(this.title)" src="{{asset('images/insight.svg')}}"></sup></h2>
                        <form id="days" name="abi2" class="select" tabindex="1" onchange="selectedDuration()">
                            <input checked class=" option-select selectopt" name="days" type="radio" id="opt-1"
                                value="10 days">
                            <label for="opt-1" class="option d-flex justify-content-around">10 days</label>
                            <input class="option-select selectopt" name="days" type="radio" id="opt-2" value="20 days">
                            <label for="opt-2" class="option d-flex justify-content-around">20 days</label>
                            <input class="option-select selectopt" name="days" type="radio" id="opt-3" value="30 days">
                            <label for="opt-3" class="option d-flex justify-content-around">30 days</label>
                            <input class="option-select selectopt" name="days" type="radio" id="opt-4" value="40 days">
                            <label for="opt-4" class="option d-flex justify-content-around">40 days</label>

                        </form>
                    </div>
                </div>
                </div>




                </div>


                

                
                <div class="row g-0 d-flex justify-content-center ">
                    
                    <div class="col-12 col-md-8">
                        <h3 class="second-heading mt-2 p-2">DISCLAIMER</h3>
                        <p class="body-text2 p-2">
                            Facilisi urna, praesent in et. Quis rhoncus venenatis pellentesque sit ac
                            ipsum. Nibh interdum eget sit faucibus nulla odio pharetra egestas sed. Tempor
                            sollicitudin orci egestas eu lectus aliquam interdum risus pellentesque.Facilisi
                            urna, praesent in et. Quis rhoncus venenatis pellentesque sit ac ipsum. Nibh interdum
                            eget sit faucibus nulla odio pharetra egestas sed.
                            Tempor sollicitudin orci egestas eu lectus aliquam interdum risus pellentesque.
                        </p>

                    </div>

                </div>

                


                




            </div>
        </main>



        
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
    <script src="{{asset('js/main.js')}}"></script>


</body>

</html>