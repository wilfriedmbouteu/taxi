<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from usejavascript.com/demo/material-template/single-page-cv/purple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Dec 2018 09:15:32 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/purple/css/bundle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>
    <header>

        <!--Side Menu-->
        <div id="slide-out" class="side-nav fixed">
            <div class="bg-color material-box">
                <div class="photo " style="width: 145px; height: 145px;"><img src="/uploads/avatars/{{ auth()->user()->avatar  }}" alt=""></div>
                <p>First Name :<strong> {{ auth()->user()->fname }} </strong></p>
                <p>Last Name :<strong> {{ auth()->user()->lname }} </strong></p>
                <p>Email id  : <strong>{{ auth()->user()->email }} </strong> </p>

               <div class="upload">
                   <form enctype="multipart/form-data" action="/profile" method="Post">
        {{ csrf_field() }}
        <label>Update Profile Image</label>
        <input type="file" name="avatar">
        <br>
        <input type="submit" class="btn  btn-primary btn-sm" style="font: white; margin-left: 80px; ">
    </form>

               </div>

                <!--Side Menu Link-->
                <div class="social-media">
                    <a href="#" target="_blank" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    </div>
                <!--Side Menu Link End-->
            </div>
            <ul class="center-align menu">
                <li><a href="javascript:app.loadContent('pages/about.html')" class="waves-effect waves-color">About Me</a></li>
                <li><a href="javascript:app.loadContent('pages/work-skills.html')" class="waves-effect waves-color">
                <li><a href="javascript:app.loadContent('pages/contact.html')" class="waves-effect waves-color">Recent Activities</a></li>
            </ul>
        </div>
        <!--Side Menu End-->
    </header>
    <main>
        <!--Main Content-->
    </main>
    <!--Footer-->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="white-text">{{ auth()->user()->name }} ' s Profile</h5>
                    <!--Instagram-->
                    <div class="link" style="float: right;"><a href="/"> Book a driver now</a> </div>
                    <div class="row instagram">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="images/photo.jpg" alt=""></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="images/insta-1.jpg" alt=""></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="images/insta-2.jpg" alt=""></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="images/insta-3.jpg" alt=""></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="images/insta-4.jpg" alt=""></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#"><img src="images/insta-5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 white-text">
                    <a href="/" class="link" style="float: left; margin-bottom: 20px; "><< Return home >></a>
                    <!--Contact Form-->
                    <form>
                        <div class="input-field col-md-6">
                            
                            <label for="name" class="label" style="float: left;">Address: <strong>{{ auth()->user()->address }} </strong> </label>
                        </div>
                        <div class="input-field col-md-6">
                            <input id="email1" type="email" class="validate">
                            <label for="email1">PHONE</label>
                            <strong>{{ auth()->user()->phone }} </strong>
                        </div>

                        <div class="input-field col s6">
                            <input id="created_on" type="text" class="validate">
                          <label for="created_on"> Registered on  :</label> 
                          <strong>{{ auth()->user()->created_at->toFormattedDateString() }} </strong> 
                         </div>
                  
                        <div class="input-field col s12">
                            <textarea id="message1" class="materialize-textarea"></textarea>
                            <label for="message1">MESSAGE</label>
                        </div>
<h2>USER account: {{ auth()->user()->verified() ? 'Verifiedd' : 'Not verified' }} </h2>

                    </form>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <!--Copryght Text-->
                © 2018 Copyright  | <a href="#"></a>
                <!--Social Media Links-->
                <span class="right social-media">
                    <a href="#" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="#" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="#" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance-square" aria-hidden="true"></i></a>
                    <a href="#" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                    <a href="#" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Snapchat"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>
                    <a href="#" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Skype"><i class="fa fa-skype" aria-hidden="true"></i></a>
                </span>
            </div>
        </div>
    </footer>

    <script src="js/bundle.js"></script>
    <script src="js/app.js"></script>
    <script>
        //Default Loaded Content
        app.loadContent('pages/about.html');
    </script>

</body>


<!-- Mirrored from usejavascript.com/demo/material-template/single-page-cv/purple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Dec 2018 09:16:42 GMT -->
</html>