<?php 


// PayPal configuration 

 define('PAYPAL_ID', 'sb-e8vhx1286796@business.example.com'); 

 define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 

 define('PAYPAL_RETURN_URL', 'https://fitfy.000webhostapp.com/payment/success.php'); 

 define('PAYPAL_CANCEL_URL', 'https://fitfy.000webhostapp.com/payment/cancel.php'); 


 define('PAYPAL_CURRENCY', 'USD'); 


 // Database configuration 

 define('DB_HOST', 'localhost'); 

 define('DB_USERNAME', 'xxxx'); 
 define('DB_PASSWORD', 'xxxx'); 

 define('DB_NAME', 'id12990860_fitfydb'); 


 define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
