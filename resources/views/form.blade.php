  <!DOCTYPE html>
  <html>
  <head>
      <title>Create new User</title>
   <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">       
        <link href="/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">    
        <link href="/plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css">       
        <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/media.css" rel="stylesheet" type="text/css"> 
  </head>
  <body>
  
  <section id="home">                 
                <div class="theme-slider">
                    <div class="item">  
                        <div class="carousel-inner slider">
                            <span class="mask-overlay"></span>      
                            <img src="/img/slider/slider-1.jpg" alt="...">                       
                            <div class="theme-container container">
                                <div class="caption-text row">
                                    <div class="col-md-7 col-sm-7">
                                        <h2 class="extra-bold-font block-inline">Safe Drive </h2>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent Get free forever!</p>
                                        <div class="buy-now">
                                            <a href="javascript:void(0);" class="theme-btn-1 btn white-color"> Read More </a>
                                        </div>
                                        <div class="form-group">
                                          @if($flash = session('message'))
      <div id="flash-message" class="alert alert-danger" role="alert">
        {{ $flash }}
      </div>
      @endif
                                        </div>
                                    </div>
<!-- Another form -->
 <div class="col-md-4 col-sm-5 col-md-offset-1 hidden-xs" style="margin-bottom: 5px;">
                                        <div class="form-wrap">
                                            <form class="slider-form" action="/reg" method="Post"> 
                                            {{csrf_field() }}     
                                                <div class="form-group col-sm-12 black-bg">                                     
                                                    <label class="title-1">Registration Form</label>
                                                </div>
                                                <div class="form-group col-sm-12">                                     
                                                    <i class="fa  fa-user"></i>
                                                    <input type="text" name="fname" required="name" placeholder="First Name" class="form-control" >
                                                </div>
                                                <div class="form-group col-sm-12">                                     
                                                    <i class="fa  fa-user"></i>
                                                    <input type="text" name="lname" required="name" placeholder="Lasr Name" class="form-control" >
                                                </div>
                                                <div class="form-group col-sm-12">                                     
                                                    <i class="fa  fa-envelope"></i>
                                                    <input type="text" required="email" name="email" placeholder="Your e-Mail" class="form-control" >
                                                </div>
                                                <div class="form-group col-sm-12">                                     
                                                    <i class="fa fa-phone"></i>
                                                    <input type="text" placeholder="Your Phone" name="phone" class="form-control" required>
                                                </div>
                                                <div class="form-group col-sm-12">                                     
                                                    <i class="fa fa-map-marker"></i>
                                                    <input type="text" placeholder="Address" class="form-control" name="address" required>
                                                </div>  
                                                
                                                
                                                <div class="form-group col-sm-12">                                     
                                                    <i class="fa fa-unlock"></i>
                                                    <input type="password" class="form-control" name="password" placeholder="password" required>
                                                </div> 
                                                <div class="form-group col-sm-12">                                     
                                                    <i class="fa fa-unlock"></i>
                                                    <input type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation" required>
                                                </div>                                               
                                                <div class="form-group col-sm-5 space-top-15" style="margin-right: 50px; margin-top: 5px; ">
                                                    <button class="theme-btn btn submit-btn" type="submit">Sign Up</button>
                                                </div>
                                               <br>
                                                <div class="form-group col-sm-5 space-top-15" style="margin-bottom: 5px; margin-top: 5px;">
                                                   <a href="auth/google"><i class="fa fa-google-plus"></i><button class="theme-btn btn submit-btn" type="button">Google </button></a> 
                                                </div> 

                                           
                                                @include('partials.errors')
                                            </form>                                     
                                        </div>                                                                 
                                    </div>







<!-- 
end other form -->

                                                                                                   
                                    </div>
                                </div>
<!-- Another form
 -->
 <!-- 
           <div class="col-md-4 col-sm-5 col-md-offset-1 hidden-xs" style="background-color: white; margin-top:-10px; margin-bottom: 10px; margin-top: 10px;">
               <div class="form-group col-sm-12 black-bg" style="padding-top: 5px; padding-bottom: 5px;">                                     
              <label class="title-1" ">Application Form</label>
              </div>
           <hr>
              <br>               
           <form action="/reg" method="Post">
                      {{ csrf_field() }}
                      
           
                          <div class="form-group " style="margin-top: 12px; margin-left: 2px;">
                            <i class="fa  fa-user"></i>
                          <input type="text" name="name" id="name" class="form-control" required placeholder="John Doe" required>
                      </div>
           
                      <div class="form-group ">
                          <i class="fas fa-home"></i>
                          <input type="text" name="address" id="address" class="form-control" required placeholder="address" required>
                      </div>
                       <div class="form-group ">
                          <i class="fa fa-address-card"></i>
                          <input type="text" name="phone" id="phone" class="form-control" required placeholder="phone" required>
                      </div>
           
                      <div class="form-group">
                          <i fa fa-address-book></i>
                          <input type="text" name="email" id="email" class="form-control" placeholder="example@gmail.com" required>  
                      </div>
                        <div class="form-group">
                          
                          <input type="password" name="password" id="password" class="form-control"  placeholder="password" required>
                      </div>
           
                      <div class="form-group">
                          
                          <input type="password" name="password_confirmation" id="password_confirmation"  class="form-control" placeholder="password_confirmation" required>
                         </div> 
                         <div class="form-group col-sm-12">
                       <button class="btn btn-success btn-block" type="submit" style="margin-bottom: 5px; ">Sign Up</button>
                        
                         </div>
                   
                  </form>
                  <div class="form-group" style="margin-bottom: 15px; font:white; padding-left: -5px; padding-right: -10px; margin-top: -15px;  margin-left: 5px;">
                  <a href="auth/google"><button type="button" class="btn btn-danger btn-block"><i class="fa fa-google-plus">Google</i> </button> </a>
                 </div>
                 <br>
                 <div class="form-group col-sm-12 space-top-15">
                                                              <button class="theme-btn btn submit-btn" type="submit">find the course</button>
                                                          </div>  
                 <br>
                  @include('partials.errors')
           <div class="form-group" style="margin-bottom: 15px; font:white; padding-left: -5px; padding-right: -10px; margin-top: -15px;  margin-left: 5px;">
           <button class="btn btn-danger btn-block" <i class="fa fa-google-plus"> Google </i> </button> </a>
                                  </div>
                </div> -->          
<!-- 
another form end -->




                            </div>
                        </div>
                    </div>                    
                </div>
            </section>  
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