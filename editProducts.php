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
     header('Location: login.php');
}
$db_connection = pg_connect("host=ec2-54-147-209-121.compute-1.amazonaws.com port=5432 dbname=d39b9gu7qensp9 user=ccfruivhlolxpg password=6ec9e514492f6fbf6654b34b888d0b4d416aea7eae8695121d1a4787ebd59b3e");

if ( ! empty( $_POST ) ) {
   
    if ( isset( $_POST['editConfirmed'] )){
        
        $event_id = (int)$_POST['event_id'];
        echo $event_id;
        $event_name = $_POST['event_name'];
        $event_descr = $_POST['event_descr'];
        $date = $_POST['date'];
        $num_attending = $_POST['num_attending'];
        $price = $_POST['price'];
        echo $event_name;
        echo $event_descr;
        
        $check=pg_query($db_connection,"UPDATE public.events SET event_name ='$event_name', event_descr ='$event_descr',date ='$date',num_attending ='$num_attending',price ='$price' WHERE id='$event_id'");
        $check=pg_query($db_connection,"SELECT * FROM public.events where id='$event_id'");
        $result = pg_fetch_row($check);
        
        $event_info=$result;
    }
    else{
        $event_id = $_POST['event_id'];
        $check=pg_query($db_connection,"SELECT * FROM public.events where id='$event_id'");
        echo $event_id;
        
        $checkrows = pg_num_rows($check);
        $result = pg_fetch_row($check);
        
        $event_info=$result;
    }
   
  }





?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="About us page">
  
  <title>Events</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


    
#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;

}
    </style>
  
  
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
                
                <span class="navbar-caption-wrap"> <a href="index.php"> <img class="center" src="assets/images/logo.png" style="width:150px;height:50px;" alt="" title=""> </a> </span>
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
                    Products</h2>
            </div>
        </div>
    </div>
</section>
    
<!-- !PAGE CONTENT! -->
<div class="w3-main" >



  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
 <!-- <div class="contact"> -->

   
        <form action="editProducts.php" method="post" class="login100-form validate-form" id="contact" >
				
					<!-- <span class="login100-form-header p-b-20">
						Event Name
					</span>
					<div class="wrap-input100 validate-input" data-validate="Event name is required">
						

						<input class="input100" type="text" name="event_name" value ="<?php echo $event_info[0];?>">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
          </div>
          <span class="login100-form-header p-b-20">
						Event Description
					</span>
					<div class="wrap-input100 validate-input" data-validate="Event description is required">
						

						<input class="input100" type="text" name="event_descr" value ="<?php echo $event_info[1];?>">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<span class="login100-form-header p-b-20">
						Date
					</span>
					<div class="wrap-input100 rs1 validate-input" data-validate="Date is required">
                    <input type="date" id="date" name="date" value ="<?php echo $event_info[2];?>">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
		
					<span class="login100-form-header p-b-20">
						Number of People attending
					</span>
					<div class="wrap-input100 rs1 validate-input" data-validate="Please include an estimated value of number attending">
						<input class="input100" type="number" name="num_attending" value ="<?php echo $event_info[3];?>">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<span class="login100-form-header p-b-20">
						Price
					</span>
					<div class="wrap-input100 rs1 validate-input" data-validate="Price is required, if none please enter 0">
						<input class="input100" type="number" name="price" value ="<?php echo $event_info[4];?>">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div> -->
				
                    <!-- <input type="hidden" id="event_id" name="event_id" value ="<?php echo $event_info[5];?>">
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="editConfirmed" type = "submit" >
							Edit Event Details
						</button>
                    </div> -->
                    
                    

                    <h3>Add a New Event!</h3>
                    <h4>Fill in the specified fields</h4>
                    <fieldset>
                        <input type="text" name="event_name" value ="<?php echo $event_info[0];?>"  >
                    </fieldset>
                    <fieldset>
                        <input type="text" name="event_descr" value ="<?php echo $event_info[1];?>">
                    </fieldset>
                    <fieldset>
                        <input type="date" id="date" name="date" value ="<?php echo $event_info[2];?>">
                    </fieldset>
                    <fieldset>
                        <input type="number" name="num_attending" value ="<?php echo $event_info[3];?>">
                    </fieldset>
                    <fieldset>
                        <input  type="number" name="price" value ="<?php echo $event_info[4];?>">
                    </fieldset>
                    <input type="hidden" id="event_id" name="event_id" value ="<?php echo $event_info[5];?>">
                    
                    <fieldset>
                        <button name="editConfirmed" type="submit" class="btn btn-md btn-secondary display-3" id="submit">Submit</button>
                    </fieldset>


					
                </form>
<!-- </div> --> <div class="modal-footer">
          <a class="nav-link link text-black display-2"  href="products.php">Close</a>
        </div>

        </div>
       
      </div>
      
    </div>
  </div>
  
</div>
        

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