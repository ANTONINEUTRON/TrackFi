<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi Airdrop</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('includes.head')
</head>

<body class="pt-1" style="min-height: 100vh;">
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

                </div>

            </nav>
 
            <div class="d-flex flex-wrap flex-column justify-content-center mb-3">
                <div class="row">
                    <div class="col-1 d-sm-none d-md-block">

                    </div>
                    <div class="col-10 d-grid">
                        <h2 class="text-center"><img alt="header-trackfi" src="{{asset('images/header-trackfi.svg')}}"></h2>

                        @include('includes.ad1')

                        {{-- Form starts here --}}
                        <div class="justify-content-center text-center mt-5">
                            <div class="col-md-8 card mx-auto" style="background-color: #03031b;">
                                <div class="card-body text-center">

                                    <form id="tranxForm" method="POST" class="form-horizontal mb-5">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="transactionId" id="tranxId" />
                                        
                                        <div class="mb-3  ml-5 mr-5">
                                            <input placeholder="Wallet Address" name="address" type="text" id="address" onclick="return false;" onkeydown="return false;" class="form-control" required>
                                        </div>
                                        <div class="mb-3 ml-5 mr-5">
                                            <textarea name="handles" id="handles" placeholder="Enter link to social media handles separated by comma" class="form-control" rows="5" required></textarea>
                                        </div>
                                        <button type="button" onclick="processTransaction()" class="btn  btn-lg bg-success text-white">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <br />
                @include('includes.wallet')

                @include('includes.ad2')
                
            </div>
        </div>

        <!--end of main body section-->
        <!--right navbar visible only on medium and large screens-->
        @include('includes.ad_banner')
        <!--end of right navbar-->
    </div>
    <!--footer section-->
    <div class="fixed-bottom">
        @include('includes.footer')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    @include('includes.processing')
    <script src="{{asset('js/main.js')}}"></script>
    <script 
        src="https://cdn.jsdelivr.net/npm/algosdk@v1.15.0/dist/browser/algosdk.min.js"
        integrity="sha384-wURu1H0s7z6Nj/AiP4O+0EorWZNvjiXwex7pNwtJH77x60mNs0Wm2zR37iUtHMwH"
        crossorigin="anonymous"
    ></script>
    <script src="{{ asset('js/airdrop.js') }}"></script>

    <script>
        var addr = document.getElementById("address");

        @if(!empty($address))
            addr.value = "{{$address}}";
        @endif

        if(addr.value === ""){
            if(confirm("You need to connect a myalgo wallet address before you can participate in this airdrop")){
                document.getElementById("connect").click();
            }else{
                window.location = "/";
            }
        }
    
    </script>   

    @if (!empty($message))
        <script>
            alert("{{$message}}");
        </script>
    @endif

    @if ($errors->any())
        <script>
            var error = "";
            @foreach ($errors->all() as $error)
                error += "{{ $error }}... ";
            @endforeach
            alert(error);
        </script>
    @endif
</body>

</html>