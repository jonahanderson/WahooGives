<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    $style1 = "style='display:none;'";
    $style2 = NULL;
} else {
    // Redirect them to the login page
     $style1 = NULL;
     $style2 = "style='display:none;'";
}   
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo_size2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-ruNsw1yRec" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"> <a href="index.php"> <img class="center" src="assets/images/logo_size2.png" style="width:150px;height:50px;" alt="" title=""> </a> </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-black display-4" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="products.php">Events</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4"  href="login.php" <?php echo $style1;?>>Login</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4"  href="signup.html" <?php echo $style1;?>>Sign Up</a></li>
                 <li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php" <?php echo $style2;?> >Log Out</a></li>
                 <li class="nav-item"><a class="nav-link link text-black display-4" href="shop.html">Shop</a></li>
            </ul>
        </div>
    </nav>
</section>




   <script>
    var slideIndex = 1;
    showDivs(slideIndex);
    function plusDivs(n) {
    showDivs(slideIndex += n);
     }
    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1} if (n < 1) {slideIndex = x.length}for
    (i = 0; i < x.length; i++) {x[i].style.display = "none";}
    x[slideIndex-1].style.display = "block"; }
   </script>

<section class="cid-ruNtyUeTOv mbr-fullscreen mbr-parallax-background" id="header2-1">


    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1"><span style="font-weight: normal;">
                    WahooGives</span></h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    The hub of all things philanthropy at c'ville! </p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="login.php">Login</a></div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="signup.html">Signup</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<div align="center">
    <marquee behavior="alternate" bgcolor="#bb3434" direction="left" height:="" 
    loop="7" scrollamount="1" scrolldelay="1" width="100%">
    <span style="font-size: 20px;color:#FFFFFF">
    COVID-19 Alert: All events are subject to change due to the coronavirus pandemic.  Be safe and be healthy!</span></marquee>
</div>


<section class="features1 cid-ruNBDZ0eEF" id="features1-8">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-browse" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 80px;"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="#">Join an Event</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Browse through all the fun and safe philanthropy events around c'ville! Find an event you like, sign up and learn more about how to participate.
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <!-- <a href="#">READ MORE » </a> -->
                  </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-contact-form" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 80px;"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="#">Host an Event&nbsp;</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        As an organization leader, post your philanthropy event here to let your fellow students know to come out and join! Post info and updates to bring out as many guests as you can.
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <!-- <a href="#">READ MORE » </a> -->
                  </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-cart-full" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 80px;"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="#">Buy Merch</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Our shop offers merchandise from organizations that sell for a good cause.  Help donate to local charitible organizations while purchasing cool things.
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <!-- <a href="#">READ MORE » </a> -->
                  </p>
                </div>
            </div>

            

        </div>

    </div>

</section>

<section class="mbr-section content7 cid-ruNvXuN71m" id="content7-2">
          
    

    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-12">
                <div class="media-container-row">
                    <div class="media-content">
                      
                      <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">What we offer</h2>
                      
                      
                      	
                        <div class="mbr-section-text">
                            <p class="mbr-text align-right mb-0 mbr-fonts-style display-7">Are you looking for the next fun philanthropy event to go to? Look no further! WahooGives provides students at the University of Virginia a hub where students can browse and post fun and safe things to do around c'ville.</br></br>

                            We strive to connect local charitible organizations with bright students to provide a safe place for commerce in philanthropy.  Whether you are looking for ways to help out or interesting in sharing your own event, WahooGives is the place to be. &nbsp;</p>                           
                        </div>
                      	<span class="vspacer"></span>
                      	<div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="products.php">View Events!</a></div>
                    </div>
                    <div class="mbr-figure" style="width: 75%;">
                     <img src="assets/images/valentines-blog-post.png" alt="" title="">  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features11 cid-ruXpPiazmW" id="features11-19">

    

    

    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure m-auto" style="width: 40%;">
                    <img src="assets/images/Atterro-Blog-Philanthropy.jpg" alt="" title="">
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        What Philanthropy means</h2>
                    <div class="mbr-section-text">
                        
                    </div>

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">
                                <div class=" align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-like"></span>
                                </div>     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">The Purpose</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                  Philanthropy is the desire to promote the welfare of others, commonly expressed with donations of either time or money.  </p>
                            </div>
                        </div>

                        <div class="card p-3 pr-3">
                            <div class="media">
                                <div class="align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-home"></span>
                                </div>     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">The Events</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                   The events you find on our site offers students the opportunity to be charitable on a larger scale, involving a community of bright minds.  Whether you provide generous donations or service time, philanthropy can help everyone! &nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>          
</section>



<section class="mbr-section" id="witsec-custom-html-block-1c" data-rv-view="269" style="background-color: rgb(255, 255, 255);">
 
 <div class="witsec-custom-html-container elements-content" style="padding-top: 3rem; padding-bottom: 3rem;">
     
    <div class="mbr-section__container block" style="width: 100%;"></div>
 </div>

</section>



<section class="cid-ruOT0L6rL9" id="footer5-14">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="#">
                
                    
                </div>
            </div>
           <!--  <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7">
                    <a href="#" class="text-black">ABOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">TERMS</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">CAREERS</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">CONTACT</a>
                </p>
            </div> -->
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <img class="center" src="assets/images/logo_size2.png" style="width:150px;height:50px;" alt="" title="">  
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 <a href="#">WahooGives</a> - All Rights Reserved
                    </p>
                </div>
                <!-- <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>