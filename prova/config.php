<?php 

 /* 
3
* PayPal and database configuration 
4
*/ 


// PayPal configuration 

 define('PAYPAL_ID', 'sb-e8vhx1286796@business.example.com'); 

 define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 

 define('PAYPAL_RETURN_URL', 'http://www.example.com/success.php'); 

 define('PAYPAL_CANCEL_URL', 'http://www.example.com/cancel.php'); 

 define('PAYPAL_NOTIFY_URL', 'http://www.example.com/ipn.php'); 

 define('PAYPAL_CURRENCY', 'USD'); 


 // Database configuration 

 define('DB_HOST', 'localhost'); 

 define('DB_USERNAME', 'id12990860_kizlar'); 
 define('DB_PASSWORD', 'grisilda123'); 

 define('DB_NAME', 'id12990860_fitfydb'); 

 // Change not required 

 define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");