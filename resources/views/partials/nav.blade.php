<header>               
                <section class="header-wrap upper-text white-color"> 
                    <div class="container theme-container">   
                        <div class="row">
                            <div class="col-sm-3 col-md-2 navigation"> 
                                <div class="logo  navbar-brand">
                                    <h2 class="logo-title secondery-font"> <a href="/">  <b>Drive Me</b> </a> </h2>                                
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navigation" >
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>

                                        </button>                                        
                                    </div> 
                                </div>
                            </div>
                            <div class="col-sm-9 col-md-10 navigation">
                                <nav>                                                               
                                    <div class="collapse navbar-collapse no-padding" id="primary-navigation">                                        
                                        <ul class="nav navbar-nav primary-navbar">
                                            <!-- <li><a href="index.html">Home</a></li>
                                             --> <li><a href="#feature">Features</a></li>
                                             <li><a href="#wilfried">Nos Experts</a></li>
                                             <li><a href="#testimonials-slider">Nos Emplacements</a></li>
                                            <li><a href="#contact">Contact</a></li>
                                            <!--<li><a href="#section-slide">Contact</a></li>
                                            <li><a href="#our-team">instructores</a></li>
                                             -->         
                                            @if(Auth::check())  
                                             <li class="dropdown">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >
                                                    <img src="uploads/avatars/{{ auth()->user()->avatar }} " style="width:32px; height:32px; position:relative; top:5px; bottom:5px; left:10px; border-radius: 50%; margin-top: -7px; margin-right: 15px; "> 
                                                 {{ auth()->user()->name }}
                                                </a>
                                                <ul class="dropdown-menu">  

                                                    <li><a href="/profile">Profile</a></li>
                                                    <li><a href="/logout">Logout</a></li>
                                                </ul>
                                            </li>
                                                <!-- <button class="btn btn-primary-outline ">hellooo</button> 
                                                <button class="nav-item dropdown btn-primary-outline">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left: 50px;">
                                                          
                                                           <img src="uploads/avatars/{{ auth()->user()->avatar }} " style="width:32px; height:32px; position:absolute; top:5px; bottom:5px; left:10px; border-radius: 50%"> Name
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                          <a class="dropdown-item" href="#">Profile</a>
                                                          <a class="dropdown-item" href="#">Notifications</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                                
                                                        </div>
                                                              </button> -->
                                             @else



          <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/login">login</a>
          </li>
         
          @endif                                
                                           <!--  <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Pages</a>
                                                <ul class="dropdown-menu">  
                                                    <li><a href="blog.html">Blog Right Sidebar</a></li>
                                                    <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                    <li><a href="single-blog.html">Single Blog Right Sidebar</a></li>
                                                    <li><a href="single-blog-left.html">Single Blog Left Sidebar</a></li>   
                                                    <li><a href="404-page.html">Error Page</a></li> 
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu</a>
                                                        <ul class="dropdown-menu">  
                                                            <li><a href="#">Sub Menu 1</a></li>
                                                            <li><a href="#">Sub Menu 2</a></li>    
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu 3</a>
                                                                <ul class="dropdown-menu">  
                                                                    <li><a href="#">Sub Menu 4</a></li>
                                                                    <li><a href="#">Sub Menu 5</a></li> 
                                                                    <li><a href="#">Sub Menu 6</a></li> 
                                                                </ul>
                                                            </li> 
                                                        </ul>
                                                    </li> 
                                                </ul>
                                            </li>  --> 
                                            
                                        </ul>
                                    </div>                         
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>            
            </header>