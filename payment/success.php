<?php 
session_start();
 // Include configuration file 
 include_once 'config.php'; 

 // Include database connection file 

 include_once 'dbConnect.php'; 
 ?>

<head><title>Fitfy Payment Response</title></head>
<?php

 $start_date=date('Y-m-d');


    $end = strtotime("+ 31 days", strtotime($start_date));
    $end_date= date("Y-m-d", $end);
 

 if (!empty(!empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])))
 { 
// Get transaction information from URL 

    
     $txn_id = $_GET['tx']; 

     $payment_gross = $_GET['amt']; 

     $currency_code = $_GET['cc']; 

     $payment_status = $_GET['st']; 

     $username = $_SESSION['username'];

     $name = $_SESSION['name'];

     $surname = $_SESSION['surname'];

     $hash = $_SESSION['hash'];

     $email = $_SESSION['email'];

     $gender = $_SESSION['gender'];

     $age = $_SESSION['age'];


   
     // Check if transaction data exists with the same TXN ID. 

     $prevPaymentResult = $db->query("SELECT * FROM payments WHERE txn_id = '".$txn_id."'"); 


     if($prevPaymentResult->num_rows > 0){ 

         $paymentRow = $prevPaymentResult->fetch_assoc(); 

         $payment_id = $paymentRow['payment_id']; 

         $payment_gross = $paymentRow['payment_gross']; 

         $payment_status = $paymentRow['payment_status']; 
        
     }
         else 
         { 

         // Insert transaction data into the database 

         $insert = $db->query("INSERT INTO payments(txn_id,payment_gross,currency_code,payment_status,start_date,end_date,username) VALUES('".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."','".$start_date."','".$end_date."','".$username."')"); 

         $payment_id = $db->insert_id; 
        
         $insert2=$db->query("INSERT INTO user (name, surname, age,email,gender,username,password,role) VALUES ('".$name."', '".$surname."', '".$age."','".$email."','".$gender."','".$username."','".$hash."',3)");

        } 

} 
$db->close();
 ?>
<html>
<head>
    <style type="text/css">
    body{
  background-image: url('gym_5.jpg'); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */

 }
 
 </style>
 </head>
<body>
 <div class="logo">
    <a href="https://fitfy.000webhostapp.com/index.php">
                <img src="../img/FitLogo.png" alt="FITFY" width="100px" height="100spx"></a>
            </div>

<div class="container">
 <div class="status">

    <?php if(!empty($payment_id)){ ?>

                
           <center >

            
            <h1 class="success" style="color: #4BB543; text-align: center; ">Your Payment has been Successful</h1>

                 <div style="background-color: grey; width: 400px;" >                                        

            <h4>Payment Information</h4>
            <p><b>Your payment is done for 30 days</b></p>

            <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>

            <p><b>Transaction ID:</b> <?php echo $txn_id; ?></p>


            <p><b>Paid Amount:</b> <?php echo $payment_gross; ?></p>


            <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>

            <p><b>User:</b> <?php echo $name." ".$surname; ?></p>                                      
            </div>

        <?php }else{ ?>
           
            <h1 class="error" style="color: red; text-align: center; "> Your Payment has Failed &#128577;</h1>

        <?php } ?>
    
    </div>
    <div style="text-align: center; "> 

    <a style="color: orange; display: inline-block; " href="https://fitfy.000webhostapp.com/" class="btn-link"> <h3>Back to home page</h3></a>
    </div>

</center>
