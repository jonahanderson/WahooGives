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
  
  <title>About Us</title>
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

<section class="mbr-section content5 cid-ruXCVKDreY mbr-parallax-background" id="content5-1f">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(85, 180, 212);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    About Us</h2>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-ruXHzFNbH4" id="content2-1i">

     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
                <blockquote><strong>The hub of all things philanthropy at c'ville! </strong> Browse through all the fun and safe philanthropy events around c'ville. As an organization leader, post your philanthropy event here to let your fellow students know to come out and join.  Shop at our store that offers merchandise from organizations that sell for a good cause.</blockquote>
            </div>
        </div>
    </div>

</section>

<section class="team1 cid-ruXEWX5uJh" id="team1-1g">
    
    
    
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
            Meet the Team
        </h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">Our team consists of experienced developers who are dedicated to provide the best customer experience you will find.</h3>
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/boy.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                           Andrew Ni</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Founder/Developer</p>
                    </div>
                    <div class="item-social pt-2">
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                       
                    </div>
                </div>
            </div>
            
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/boy.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                           Navid Jahromi</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Founder/Developer</p>
                    </div>
                    <div class="item-social pt-2">
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            
                        </a>
                        <a href="#" target="_blank">    
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/boy.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                           Kush Patel</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Founder/Developer</p>
                    </div>
                    <div class="item-social pt-2">
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            
                        </a>
                        <a href="#" target="_blank">    
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/boy.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                            Jonah Anderson</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Founder/Developer</p>
                    </div>
                    <div class="item-social pt-2">
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>    
    </div>
    
</section>
    
                

<section class="cid-ruOT0L6rL9" id="footer5-14">

    

    

    <div class="container">
       
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