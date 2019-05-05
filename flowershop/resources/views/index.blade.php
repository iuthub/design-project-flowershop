<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">   
        <!-- SmartMenus jQuery Bootstrap Addon CSS -->
        <link href="{{ asset('css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
        <!-- Product view slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.simpleLens.css') }}">    
        <!-- slick slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
        <!-- price picker slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}">
        <!-- Theme color -->
        <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">
        <!-- <link id="switcher" href="{{ asset('css/theme-color/bridge-theme.css" rel="stylesheet"> -->
        <!-- Top Slider CSS -->
        <link rel="stylesheet" type="text/css" href= "<?php echo e(asset('css/sequence_theme_modern_slide_in.css')); ?>">
        <!-- Main style sheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">    

        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="{{ asset('js/menu_toggle.js') }}"></script>

        <script src="{{ asset('js/close_menu.js') }}"></script>
        <title>Laravel</title>
    </head>
  <body> 
   <!-- wpf loader Two -->
    <!-- <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>  -->
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    
    
   
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">            
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">My Account</a></li>
                  <li class="hidden-xs"><a href="blog-single.html">About</a></li>
                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                  <li class="hidden-xs"><a href="checkout.html">Bonus</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                  <li><a href="" data-toggle="modal" data-target="#register-modal">Register</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <!-- <span class="fa fa-shopping-cart"></span> -->
                   <div class="logo-image"><img src="img/logo.svg" alt=""></div>
                    <!-- <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p> --> </a> 
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">default number</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#" ><img style="width: 100%; height: inherit; " src="img/slider-img-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img style="width: 100%; height: inherit; " src="img/slider-img-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Bonus</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search your favourite flower ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.html">HOME</a></li>
              <li><a href="#">Flowers </a>
              </li>
              <li><a href="#">PLants </a></li>
               
             
              <li><a href="#">Occasion </a>
                
              </li>
              <li><a href="#">Cake</a></li>
             
              <li><a href="#">Gifts</a></li>            
              <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="blog-archive.html">Blog Style 1</a></li>
                              
                </ul>
              </li>
              
              <li><a href="#">Pensonailaized </a>
                
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img id="corusel" data-seq  src="img/slider.jpg"  />
              </div>
              <div class="seq-title">
                           
                <h2 data-seq>FLowers</h2>                
                
               
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img id="corusel" data-seq src="img/slider.jpg"  />
              </div>
              <div class="seq-title">
                           
                <h2 data-seq>Plants</h2>                
               
                
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img id="corusel" data-seq src="img/slider.jpg"  />
              </div>
              <div class="seq-title">
                             
                <h2 data-seq>Occasion</h2>                
                
               
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img id="corusel" data-seq src="img/slider.jpg"  />
              </div>
              <div class="seq-title">
                            
                <h2 data-seq>Cake</h2>                
               
               
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img id="corusel" data-seq src="img/slider.jpg"  />
              </div>
              <div class="seq-title">
                            
                <h2 data-seq>Gifts</h2>                
               
                
              </div>
            </li>        
            <li>
              <div class="seq-model">
                <img id="corusel" data-seq src="img/slider.jpg"  />
              </div>
              <div class="seq-title">
                            
                <h2 data-seq>Blogs</h2>                
               
                
              </div>
            </li>  
            <li>
              <div class="seq-model">
                <img id="corusel" data-seq src="img/slider.jpg"  />
              </div>
              <div class="seq-title">
                            
                <h2 data-seq>Personailized</h2>                
               
                
              </div>
            </li>                         
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset style="margin-bottom: -75px;" class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span  class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
    <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">

              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    <li>
                     <div>
                      <figure>
                        
                        <a class="aa-product-img" href="#"><img src="img/flower6.jpg" ></a>
                       
                      </figure>
                                           
                       <div class="box">
                           <p class="category-img">Flower</p>
                       </div>
                        </div>   
                                                        
                    </li>
                     <!-- start single product item -->
                    <li>
                     <div>
                      <figure>
                        
                        <a class="aa-product-img" href="#"><img src="img/plant7.jpg" ></a>
                       
                      </figure>
                                           
                       <div class="box">
                           <p class="category-img">Plants</p>
                       </div>
                        </div>   
                                                        
                    </li>
                    <!-- start single product item -->
                    <li>
                     <div>
                      <figure>
                        
                        <a class="aa-product-img" href="#"><img src="img/occassion2.jpg" ></a>
                       
                      </figure>
                                           
                       <div class="box">
                           <p class="category-img">Occasion</p>
                       </div>
                        </div>   
                                                        
                    </li>
                    <!-- start single product item -->
                    <li>
                     <div>
                      <figure>
                        
                        <a class="aa-product-img" href="#"><img src="img/cake1.jpg" ></a>
                       
                      </figure>
                                           
                       <div class="box">
                           <p class="category-img">Cake</p>
                       </div>
                        </div>   
                                                        
                    </li>
                    <!-- start single product item -->
                    <li>
                     <div>
                      <figure>
                        
                        <a class="aa-product-img" href="#"><img src="img/slider-img-1.jpg" ></a>
                       
                      </figure>
                                           
                       <div class="box">
                           <p class="category-img">Gifts</p>
                       </div>
                        </div>   
                                                        
                    </li>
                    <!-- start single product item -->
                    <li>
                     <div>
                      <figure>
                        
                        <a class="aa-product-img" href="#"><img src="img/slider-img-1.jpg" ></a>
                       
                      </figure>
                                           
                       <div class="box">
                           <p class="category-img">Blogs</p>
                       </div>
                        </div>   
                                                        
                    </li>
                    <!-- start single product item -->
                    <li>
                     <div>
                      <figure>
                        
                        <a class="aa-product-img" href="#"><img src="img/slider-img-1.jpg" ></a>
                       
                      </figure>
                                           
                       <div class="box">
                           <p class="category-img">Personailized</p>
                       </div>
                        </div>   
                                                        
                    </li>
                    <!-- start single product item -->
                                                                                              
                  </ul>
                 
                </div>
                <!-- / popular product category -->

                <!-- start featured product category -->
               
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>

  
  
  
  
  
  
  
  
  
  
  
   <section id="aa-client-brand">
    <div class="container" >
     <h2 style="text-decoration: underline;">Flowers        </h2>
     <button type="text" style="float: right; margin-top: -43px;" >View All</button>
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/flower1.jpg" ></a>
                  <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower6.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower3.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower4.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower5.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower6.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower7.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower8.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower9.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/flower10.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
   

<section id="aa-client-brand" style="margin-top: 20px;">
    <div class="container" >
     <h2 style="text-decoration: underline;"> Plants </h2>
     <button type="text" style="float: right; margin-top: -43px;" >View All</button>
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
             
              <li><a href="#"><img src="img/plant1.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant2.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant3.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant4.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant5.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant6.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant7.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant8.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant9.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant10.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/plant11.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<section id="aa-client-brand" style="margin-top: 20px;">
    <div class="container" >
     <h2 style="text-decoration: underline;"> Occasion </h2>
     <button type="text" style="float: right; margin-top: -43px;" >View All</button>
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/occassion2.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/ocassion3.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/ocassion4.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/ocassion5.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/ocassion6.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/ocassion7.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/ocassion8.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
            
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
   <section id="aa-client-brand" style="margin-top: 20px;">
    <div class="container" >
     <h2 style="text-decoration: underline;"> Cake </h2>
     <button type="text" style="float: right; margin-top: -43px;" >View All</button>
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/cake1.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/cake2.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/cake3.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/cake4.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/cake5.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/cake6.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/cake7.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/cake8.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
      <section id="aa-client-brand" style="margin-top: 20px;">
    <div class="container" >
     <h2 style="text-decoration: underline;"> Gifts </h2>
     <button type="text" style="float: right; margin-top: -43px;" >View All</button>
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/gift1.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/gift2.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/gift3.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/gift4.jpg" ></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/gift5.jpeg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/gift1.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/gift6.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/gift7.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
              <li><a href="#"><img src="img/gift8.jpg"></a>
              <figure><a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a></figure></li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
      <section id="aa-client-brand" style="margin-top: 20px;">
    <div class="container" >
     <h2 style="text-decoration: underline;"> Blog </h2>
     <button type="text" style="float: right; margin-top: -43px;" >View All</button>
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/slider-img-1.jpg" ></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg" ></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg" ></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg" ></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg"></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg"></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg"></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg"></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg"></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg"></a></li>
              <li><a href="#"><img src="img/slider-img-1.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
 
    
    <!-- Start Promo section -->
  
  
  <!-- Card -->

<!-- Card -->
  
  
  
  
  
  
  
  
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                       
                        <figure>
                            <a class="aa-product-img" href="#"><img src="img/slider-img-1.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">65.50$</span>

  <!-- Card content -->


  <!-- Card image -->

                        
                          
                           
                           
                           
                           
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/slider-img-1.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">65.50$</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/slider-img-1.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">65.50$</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/slider-img-1.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">65.50$</span>
                        </li>
                        <!-- start single product item -->
                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                    
                    <!-- / electronic product category -->
                  </div>
                  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                              <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  
  <!-- popular section -->
  
  <!-- / popular section -->
 

  <!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>Products</h2>
            
             
             
             <div class="row">
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                
                  <figure class="aa-blog-img"> 
                      
                    <a href="#"><img src="img/slider-img-1.jpg" alt="img"></a>  
                      <div>
                      <span class="aa-badge aa-sold-out" href="#"><h3><sup>$</sup>65.50</h3></span>
                     </div>
                  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>14 out of 100</span>
                      <a href="#"><i class="fa fa-heart"></i>426</a>
                      <a href="#"><i class="fa fa-download"></i>20</a>
                      <div class="buy">
                            <a href="#" class="aa-read-mor-btn" style="font-size: 20px; float: right">Order Now </a>    
                        </div>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Orchideya</a>
                    <p style="font-size: 50px; margin-top: -30px; margin-left: 200px;"><sup>$</sup>25.99</p>
                            <div style="margin-left: 170px; margin-top: -40px; ">
                                <p style="text-decoration: line-through; font-size: 30px; "><sup>$</sup>30-</p>
                                
                            </div>
                    </h3>
                    
                   <p class="read-more">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                   
                   
                   <div class="feedback">
                            
                               <form action="">
                                    <div class="inputBox">
                                        <input type="text" name="" required="" placeholder="Feedback">
                                        
                                    </div>
                                </form>
                            </div>
                     
                       <div>
                           <h3 class="aa-blog-title"><a href="#">Available colors</a></h3>
                               
                        </div> 
                        
                      <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>    
                      
                  </div>
                   
                </div>
                
              </div>
              
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function()
                 {
    var readMoreHtml=$(".read-more").html();
    var lessText=readMoreHtml.substr(0.100);
    if(readMoreHtml.length>100)
        {
            $(".read-more").html(lessText).append("<a href='' class=' read-more-link'> Show More</a>")
        }
    else{
        $(".read-more").html(readMoreHtml);
    }
    $("body").on("click", ".read-more-link", function(event)
                { event.preventDefault();
        $(this).parent(".read-more").html(readMoreHtml).append("<a href='' class='show-less-link'> Show Less</a>")
                 
    })
    $("body").on("click", ".show-less-link", function(event)
                {event.preventDefault();
        $(this).parent(".read-more").html(readMoreHtml.substr(0,100)).append("<a href='' class='read-more-link'> Show More</a>")
    })
})

</script>
              <!-- single latest blog -->
              
              <!-- single latest blog -->
           
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->
   <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->

  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
               
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <h3><p>Just imagine becoming the way you used to be as a very young child, before you understood the meaning of any word, before opinions took over your mind. The real you is loving, joyful, and free. The real you is just like a flower, just like the wind, just like the ocean, just like the sun.
                     </p></h3>
                  
                </div>
              </li>
              <!-- single slide -->
            
                
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe for Email offers </h3>
           
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                     <div class="logo-image" style="margin-top: 50px; margin-left: -75px; "><img src="img/logo.svg" style="fill:red;" ></div>
                  </div>
                </div>
              </div>
              
               <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
             
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> Inha University In Tashkent</p>
                      <p><span class="fa fa-phone"></span>+998 93 538-64-48</p>
                      <p><span class="fa fa-envelope"></span>aziz13inha@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a>
                      <a href="https://web.telegram.org/"><span class="fa fa-telegram"></span></a>
                      <a href="https://mail.google.com/mail/u/0/#inbox"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
           
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="card-body">
          <h4>Login</h4>
          <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="" data-toggle="modal" data-target="#forgot-password-modal">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>   


<!-- Register Modal -->
  <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Register</h4>
          <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>   



  <!-- Forgot password Modal -->
  <div class="modal fade" id="forgot-password-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Forgot password</h4>
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>   

          <script type="text/javascript" src="js/jquery.js"></script>
          <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="{{ asset('js/bootstrap.js') }}"></script>  
          <!-- SmartMenus jQuery plugin -->
          <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.js') }}"></script>
          <!-- SmartMenus jQuery Bootstrap Addon -->
          <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.bootstrap.js') }}"></script>  
          <!-- To Slider JS -->
          <script src="{{ asset('js/sequence.js') }}"></script>
          <script src="{{ asset('js/sequence-theme.modern-slide-in.js') }}"></script>  
          <!-- Product view slider -->
          <script type="text/javascript" src="{{ asset('js/jquery.simpleGallery.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/jquery.simpleLens.js') }}"></script>
          <!-- slick slider -->
          <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
          <!-- Price picker slider -->
          <script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>
          <!-- Custom js -->
          <script src="{{ asset('js/custom.js') }}"></script> 
    </body>
</html>
