<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrackFi Admin</title>
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

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </body>
</html>