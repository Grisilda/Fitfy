<?php 
session_start();
 // Include configuration file 
 include_once 'config.php'; 

 // Include database connection file 

 include_once 'dbConnect.php'; 

//date_default_timezone_set('Central European Summer Time');
//$date = date('m/d/Y h:i:s a', time());
//$end_date = $date + 30;
 //$now = new DateTime();
 //$start_date= new DateTime();
 //$start_date = date_format($now,"Y-m-d H:i:s");
 //date_default_timezone_set('Europe/Tirana');
 $start_date=date('Y-m-d');
// $end_date=date('Y-m-d');
 //$end=date('Y-m-d');

    $end = strtotime("+ 30 days", strtotime($start_date));
    $end_date= date("Y-m-d", $end);
 //$end=date_add($now,date_interval_create_from_date_string("30 days"));
// $end_date=date_format($end,"Y-m-d");
 //$end_date = new DateTime(null, new DateTimeZone('America/New_York'));
 //$end_date->setTimezone(new DateTimeZone('Europe/London')); 
 //$end_date =  $end_date.AddDays(30);
 // If transaction data is available in the URL 

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

     // Get product info from the database 

   
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

         $insert2=$db->query("INSERT INTO users (name, surname, age,email,gender,username,password) VALUES ('".$name."', '".$surname."', '".$age."','".$email."','".$gender."','".$username."','".$hash."')");

        } 

} 

 ?>


 

<div class="container">
 <div class="status">

    <?php if(!empty($payment_id)){ ?>

           <center>
            <h1 class="success" style="color: #4BB543">Your Payment has been Successful</h1>

                                                         

            <h4>Payment Information</h4>

            <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>

            <p><b>Transaction ID:</b> <?php echo $txn_id; ?></p>


            <p><b>Paid Amount:</b> <?php echo $payment_gross; ?></p>


            <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>

                    <p><b>User:</b> <?php echo $name; ?></p>                                      


        <?php }else{ ?>

            <h1 class="error" style="color: red">Your Payment has Failed</h1>

        <?php } ?>
    
    </div>
    <div style="text-align: center"> 

    <a style="color: orange; display: inline-block; " href="https://fitfy.000webhostapp.com/" class="btn-link"> <h3>Back to home page</h3></a>
    </div>

</div>
</center>
