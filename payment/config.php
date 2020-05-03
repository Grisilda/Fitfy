<?php 


// PayPal configuration 

 define('PAYPAL_ID', 'sb-e8vhx1286796@business.example.com'); 

 define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 

 define('PAYPAL_RETURN_URL', 'https://fitfy.000webhostapp.com/prova/success.php'); 

 define('PAYPAL_CANCEL_URL', 'https://fitfy.000webhostapp.com/cancel.php'); 

 define('PAYPAL_NOTIFY_URL', 'https://fitfy.000webhostapp.com/prova/ipn.php'); 

 define('PAYPAL_CURRENCY', 'USD'); 


 // Database configuration 

 define('DB_HOST', 'localhost'); 

 define('DB_USERNAME', 'id12990860_kizlar'); 
 define('DB_PASSWORD', 'grisilda123'); 

 define('DB_NAME', 'id12990860_fitfydb'); 


 define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
