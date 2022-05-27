  <!-- Favicons -->
  <link href="#" rel="icon">

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token()}}"/>
  <!--fontawesome-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css"
    integrity="sha512-ykRBEJhyZ+B/BIJcBuOyUoIxh0OfdICfHPnPfBy7eIiyJv536ojTCsgX8aqrLQ9VJZHGz4tvYyzOM0lkgmQZGw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!--locally hosted comment out during production and uncomment the one above-->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}" />
  <!--bootstrap-->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <!--locally hosted comment out during production and uncomment the one above-->
  <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" />
  <!--main stylesheet-->
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('css/styles.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <meta name="theme-color" content="#03031b">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon-16x16.png')}}">