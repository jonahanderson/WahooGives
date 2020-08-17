<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();


$db_connection = pg_connect("host=ec2-54-147-209-121.compute-1.amazonaws.com port=5432 dbname=d39b9gu7qensp9 user=ccfruivhlolxpg password=6ec9e514492f6fbf6654b34b888d0b4d416aea7eae8695121d1a4787ebd59b3e");

if ( ! empty( $_POST ) ) {
  
    
        
        $event_id = (int)$_POST['event_id'];
        
      
        $check=pg_query($db_connection,"DELETE FROM public.events where id='$event_id'");
        $result = pg_fetch_row($check);
        
        $event_info=$result;
    }

   
  



    header('Location: products.php');

?>