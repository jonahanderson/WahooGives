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
  if(isset($_POST["Export"])){
    ob_clean();
  header('Content-Type: text/csv; charset=utf-8');  
  header('Content-Disposition: attachment; filename=wahooGives_event_data.csv');  
  $output = fopen("php://output", "w");  
  fputcsv($output, array('Event Name', 'Event Description', 'Date', 'Number of People Attending', 'Price','Owner'));  
  $query = "SELECT * from public.events";  
  $result = pg_query($db_connection, $query);  
  while($row = pg_fetch_assoc($result))  
  {  
       fputcsv($output, $row);  
  }  
  fclose($output);  
  exit();
  
} 
else {
  if ( isset( $_POST['event_name'] ) && isset( $_POST['event_descr'] )&& isset( $_POST['date'] )&& isset( $_POST['price'] )&& isset( $_POST['num_attending'] ) ) {

    
  $event_name = $_POST['event_name'];
  $event_descr = $_POST['event_descr'];
  $date = $_POST['date'];
  $price = $_POST['price'];
  $num_attending= $_POST['num_attending'];
  $user_id = $_SESSION['user_id'];
    // Verify user password and set $_SESSION
  $query = "INSERT INTO public.events (event_name,event_descr,date,num_attending,price,user_id) VALUES ('$event_name', '$event_descr', '$date', '$num_attending', '$price','$user_id')";

  $result = pg_query($db_connection, $query);
  echo $result;
  header('Location: products.php');
  }

}


?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo_size2.png" type="image/x-icon">
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

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

/* body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
} */

.modal-body {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

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
.row {
  margin: 0 0 5px;
  padding: 10px;
  align: center;
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
                    Events</h2>
            </div>
        </div>
    </div>
</section>
    
<!-- !PAGE CONTENT! -->
<div class="w3-main" >



  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
 

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Add new Event</h4> -->
        </div>
        <div class="modal-body">
          <div class="container"> 
            <form action="products.php" method="post" id="contact" >
            
            <!-- <h3>Event Name</h3>
              
              <div class="wrap-input100 validate-input" data-validate="Event name is required">

                <input class="input100" type="text" name="event_name" placeholder="Enter your Event Name!">
                <span class="focus-input100-1"></span>
                <span class="focus-input100-2"></span>
              </div>
              <span class="login100-form-header p-b-20">
                Event Description
              </span>
              <div class="wrap-input100 validate-input" data-validate="Event description is required">
                

                <input class="input100" type="text" name="event_descr" placeholder="Enter your Event Descripion">
                <span class="focus-input100-1"></span>
                <span class="focus-input100-2"></span>
              </div>
              <span class="login100-form-header p-b-20">
                Date
              </span>
              <div class="wrap-input100 rs1 validate-input" data-validate="Date is required">
              <input type="date" id="date" name="date">
                <span class="focus-input100-1"></span>
                <span class="focus-input100-2"></span>
              </div>
        
              <span class="login100-form-header p-b-20">
                Number of People attending
              </span>
              <div class="wrap-input100 rs1 validate-input" data-validate="Please include an estimated value of number attending">
                <input class="input100" type="number" name="num_attending" placeholder="Enter the estimated number of people coming">
                <span class="focus-input100-1"></span>
                <span class="focus-input100-2"></span>
              </div>
              <span class="login100-form-header p-b-20">
                Price
              </span>
              <div class="wrap-input100 rs1 validate-input" data-validate="Price is required, if none please enter 0">
                <input class="input100" type="number" name="price" placeholder="Enter the price of your event">
                <span class="focus-input100-1"></span>
                <span class="focus-input100-2"></span>
              </div>
            

              <div class="container-login100-form-btn m-t-20">
                <button class="login100-form-btn" type = "submit">
                  Create Event
                </button>
              </div> -->
              <h3>Add a New Event!</h3>
              <h4>Fill in the specified fields</h4>
              <fieldset>
                <input placeholder="Event Name" type="text" name="event_name" required autofocus>
              </fieldset>
              <fieldset>
                <input type="text" name="event_descr" placeholder="Event Descripion" required>
              </fieldset>
              <fieldset>
                <input type="date" id="date" name="date" placeholder="Date" required>
              </fieldset>
              <fieldset>
                <input type="number" name="num_attending" placeholder="No. Attendees">
              </fieldset>
              <fieldset>
                <input  type="number" name="price" placeholder="Price of Event" required>
              </fieldset>
              <fieldset>
                <button name="submit" type="submit" id="submit">Submit</button>
              </fieldset>

            </form>
          </div>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>
        <!-- <span class="w3-margin-right">Filter:</span> 
        <button class="w3-button w3-black">ALL</button>
        <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Themed</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Basic</button> -->
      <div class="row">
      <div class="column"><button type="button" class="btn btn-md btn-secondary display-3" data-toggle="modal" data-target="#myModal">Create New Event</button></div>
      <div class="column"> <form action="products.php" method="post"><button class="btn btn-md btn-secondary display-3" name= "Export" type = "submit">
            Export Events to CSV
          </button>
        </form></div>
      </div>
    </div>
  </div>
</header>
    
    <!-- First Photo Grid-->
    <div class="w3-row-padding">
    <?php
     $query = "SELECT * FROM public.events";
     $events = pg_query($db_connection, $query);
     $arr = pg_fetch_all($events);
     $i = 0;
     while($i < count($arr) ){
      if ($arr[$i]['user_id'] == $_SESSION['user_id']){
       $v ='	<button class="btn btn-md btn-success display-6" name= "edit_event" type = "submit">
            Edit Event
          </button>
          ';
        $q = '<form action="removeProduct.php" method="post">
        <input type="hidden" id="event_id" name="event_id" value='.$arr[$i]['id'].'>
        <button class="btn btn-md btn-warning display-6" name= "remove" type = "submit">
          Remove Event
        </button>
        </form>';
      }else {
        $v = '';
        $q = '';
      }


       echo'<div class="w3-third w3-container w3-margin-bottom">
         <div style=" border-color: gray; border-style:solid; border-radius:25px"  class="w3-container w3-white">
         <form action="editProducts.php" method="post">
           <p align="center" style="font-size:25px; color:green"><b>  '.$arr[$i]['event_name']. '</b></p>
           <p align="center"> '.$arr[$i]['event_descr'].'</p>
           <p align="center" style="font-size:18px; color:red">It is on '.$arr[$i]['date'].' and admission is $'.$arr[$i]['price'].'</p>
           <p align="center" style="font-size:15px; color:blue;">'.$arr[$i]['num_attending'].' people are attending!</p>
           <div align="center" class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="#">Learn More</a></div>
           <input type="hidden" id="event_id" name="event_id" value='.$arr[$i]['id'].'>
           <div align="center" class="mbr-section-btn"> '. $v .'</div>
           </form>
           <div align="center" class="mbr-section-btn"> '. $q .'</div>
         </div>
       </div>
       ';
     //   <div class="w3-third w3-container">
     //     <img src="assets/images/garden_party.jpg"  height="400" alt="garden_party" style="width:100%" class="w3-hover-opacity">
     //     <div class="w3-container w3-white">
     //       <p><b>Garden Party Package</b></p>
     //       <p>With a vast selection of outdoor supplies, this package pairs great with planning outdoor garden parties during warm Summer days.</p>
     //       <p>Starting at <b>$50</b> per box</p>
     //       <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
     //     </div>
     //   </div>
     // </div>
     $i += 1;
     }
    ?>
      <!-- <div class="w3-third w3-container w3-margin-bottom">
        <img src="assets/images/basic_party.jpg"  height="400" alt="basic_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Standard Party Package</b></p>
          <p>This package comes with a wonderful selection of party supplies to get any type of party off the ground, no matter what occasion.</p>
          <p>Starting at <b>$20</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>

        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="assets/images/birthday_party.jpg"  height="400" alt="birthday_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Birthday Party Package</b></p>
          <p>Whether you are planning a princess party for your 5 year old daughter or throwing a 21st birthday party rager, this package has you covered.</p>
          <p>Starting at <b>$30</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
      <div class="w3-third w3-container">
        <img src="assets/images/garden_party.jpg"  height="400" alt="garden_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Garden Party Package</b></p>
          <p>With a vast selection of outdoor supplies, this package pairs great with planning outdoor garden parties during warm Summer days.</p>
          <p>Starting at <b>$50</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
    </div>
    
    Second Photo Grid-->
    <!-- <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="assets/images/themed_party.jpeg"  height="400" alt="themed_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Themed Party Package</b></p>
          <p>This package is ideal for event planners that want to spice up their events with cool and interesting themed decoration for most upcoming holidays.</p>
          <p>Starting at <b>$25</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="assets/images/college_party.jpg"  height="400" alt="college_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>College Party Package</b></p>
          <p>From college football tailgates to dance filled pregames, this package ensures that your event will be the hottest event on the block.</p>
          <p>Starting at <b>$25</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
      <div class="w3-third w3-container">
        <img src="assets/images/celebration_party.jpeg"  height="400" alt="celebration_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Celebration Party Package</b></p>
          <p>This package caters to event planners that wish to celebrate big milestones in either a friends or family type setting.</p>
          <p>Starting at <b>$40</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
    </div> -->
    </div>
    <!-- Pagination -->
   
  
   
      
      
      
    <!-- <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-black pb-3 mbr-fonts-style display-2">
                    Subscription Pricing Info</h2>
            </div>
        </div>
    </div>

      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32">Standard</li>
            <li class="w3-padding-16">Standard Box Packages</li>
            <li class="w3-padding-16">Party Sizes up to 25 people</li>
            <li class="w3-padding-16">Free Shipping (5-7 Business Days)</li>
            <li class="w3-padding-16">Up to 5 box purchases</li>
            <li class="w3-padding-16">
              <h2>$ 5</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="signup.html">Sign Up</a></div>
            </li>
          </ul>
        </div>
        
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-teal w3-xlarge w3-padding-32">Pro</li>
            <li class="w3-padding-16">All Box Packages</li>
            <li class="w3-padding-16">Party Sizes up to 30 people</li>
            <li class="w3-padding-16">Free Shipping (5-7 Business Days)</li>
            <li class="w3-padding-16">Up to 7 box purchases</li>
            <li class="w3-padding-16">
              <h2>$ 10</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="signup.html">Sign Up</a></div>
            </li>
          </ul>
        </div>
        
        <div class="w3-third">
          <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
            <li class="w3-padding-16">All Box Packages</li>
            <li class="w3-padding-16">Party Sizes up to 100 people</li>
            <li class="w3-padding-16">Free Shipping (2 Business Days)</li>
            <li class="w3-padding-16">Unlimited box purchases</li>
            <li class="w3-padding-16">
              <h2>$ 20</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="signup.html">Sign Up</a></div>
            </li>
          </ul>
        </div>
      </div> -->
    </div>
  </div>      
                

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