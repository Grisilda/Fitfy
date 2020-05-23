
 <html>
 <head>
 	<title>Fitfy Paymnet</title>
 	<style type="text/css">
 	body{
  background: url('fp1.jpg'); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */

 }

 </style>
 </head>
<body>

                                                              

<!-- PayPal payment form for displaying the buy button -->
<!-- <div class="logo"></div> -->
<div class="logo">
  <a href="https://fitfy.000webhostapp.com/index.php">
                <img src="../img/FitLogo.png" alt="FITFY" width="100px" height="100spx"></a>
 </div>
<center style="margin-top: 300px">   
<div style="background-color: purple; width: 500px; height: 200px">
<h1 style="color: orange"> Click Pay Now to continue with payment </h1>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top" style=" width: 300px; height: 100px;">
<input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>"> 
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="Y9NZNN6G4SBVS">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="width: 270px; height: 80px">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<div style="background-color: orange ; width:100px; height: :100px;"><a href="../user/register/html/register.html" style="color: black; text-decoration:none"><h3>Back</h3></a></div>
</div>
</center>


  </body>          
  </html>
