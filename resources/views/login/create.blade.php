<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>

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
        {!! $map['js'] !!}
       
     
</head>
<body>
@include('partials.nav')
<div class="container-fluid">
	<div class="row" style="height: 600px;   " >
        <img src="/img/slider/driver1.jpg" alt="driver1" style="position: absolute; height: 100%; width: 1800px;">
		<div class="col-sm-12 ">

			 @if($flash = session('message'))
      <div id="flash-message" class="alert alert-danger" role="alert">
        {{ $flash }}
      </div>
      @endif


		</div>	
<div class="col-sm-4 col-md-offset-4 hidden-xs" style="background-color: #f2f2f2;">
<!-- Material form login -->
<div class="card">
    <br>

   
<h2>Login Form:</h2>
  <h5 class="card-header info-color white-text text-center py-4">
    
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
<hr>
<br>
    <!-- Form -->
    <form class="text-center" action="/login" method="Post" style="color: #757575;">
   {{csrf_field() }}
      <!-- Email -->
      <div class="md-form">
        <input type="email" name="email" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" name="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>
<br>
      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
           <a href="">Forgot password?</a>    
      
          </div>
        </div>
        
      </div>

      <!-- Sign in button -->
     <!--  <button class="btn btn-outline-info btn-rounded btn-block my-4 " type="submit">Sign in</button>
      -->
<div class="form-group col-sm-5 space-top-15" style=" margin-top: 5px; margin-right: -45px; ">
        <button class="theme-btn btn submit-btn btn-block my-4" type="submit">Sign In</button>
                                                </div>
      &nbsp
      or sign in with:
<div class="form-group col-sm-5 space-top-15" style="margin-bottom: 5px; margin-right: 48px; margin-left: 50px; margin-top: -15px;">
<a href="auth/google"><button class="theme-btn btn submit-btn" type="button"><i class="fa fa-google-plus">Google </i></button></a> 
</div>     
<br>
<div class="text" style="margin-left: 5px;">
      <!-- Register -->
      <br>
      <p>Not a member?
        <a href="/register">Register</a>
      </p>

          <!-- Forgot password -->
        </div>

@include('partials.errors')

    </form>
    <!-- Form -->

  </div>


</div>
<!-- Material form login -->




     

</div>
		
	</div>
  <div class="row">
    <form action="/geoloc" method="Post">
      {{csrf_field() }}
              <div class="col-md-12">
                <input type="text"  name="start" id="myPlaceTextBox" placeholder="startpoint" />
               
                <input type="text" name="end" id="myPlaceTextBoxe" placeholder="endpoint" />
<button class="btn btn-rounded btn-success" type="submit" >submit</button>
        {!! $map['html'] !!}
        <div id="directionsDiv"></div>
          </form>
              </div>
            </div>
</div>

</body>
</html>