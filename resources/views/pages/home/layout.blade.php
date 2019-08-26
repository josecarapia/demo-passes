<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	  <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('author')">
	
	  <!-- Mobile Specific Meta -->	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Bootstrap -->
    <link href="{{ asset('css/site/bootstrap.css') }}" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('css/site/font-awesome.min.css') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/site/animate.css') }}">

    <!-- Owl-carousel style -->
    <link rel="stylesheet" href="{{ asset('css/site/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site/owl.theme.css') }}">

    <!-- magnific style -->
    <link rel="stylesheet" href="{{ asset('css/site/magnific-popup.css') }}">

    <!-- Custom stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site/responsive.css') }}" media="screen">

    <!-- Added google font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!--Fav and touch icons-->
    <link rel="shortcut icon" href="{{ asset('images/site/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/site/icons/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/site/icons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/site/icons/apple-touch-icon-114x114.png') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Preloader -->
      <div id="faceoff">
        <div id="preloader"></div>
        <div class="preloader-section"></div>
      </div>
    <!-- Preloader end -->
    
    @include('pages.home.header')
    
    @yield('content')

    @include('pages.home.footer')
    @include('pages.home.scripts')

  </body>
</html>