<?php

// Include configuration file

include_once 'config.php'; 

 // Include database connection file 

 include_once 'dbConnect.php'; 

 ?>

<div class="container">



<div class="pro-box">



<div class="body">

                                                                    

<!-- PayPal payment form for displaying the buy button -->
<center>
<h1 style="color: orange"> Click Buy Now to continue with payment </h1>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top" style="width: 600px; height: 600px">
	
<input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">     
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LMXGWPR3NMMSQ">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</center>

            </div>


        </div>


</div>