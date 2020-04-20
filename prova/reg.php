<?php
include_once 'config.php'; 
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
?>

<!DOCTYPE html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <script src="../js/validime.js"></scrip -->

<!------ Include the above in your HEAD tag ---------->
</head>
<body style="background-image: url(../../name.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
    
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '2880636978829764',
          cookie     : true,
          xfbml      : true,
          version    : 'v6.0'
        });
          
        FB.AppEvents.logPageView();   
          
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="container" style="margin-top: : 50%;" >    
        <div id="loginbox" style="margin-top:10%;text-align: center;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:white;border-color:white;">
                        <div class="panel-title" style="color:black">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <!--forma kryesore e logimit-->    
                        <form id="signupform" class="form-horizontal" role="form" method="post" action="<?php echo $paypal_url; ?>">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address"required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Ussername</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="ussername" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Gender</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="gender" placeholder="Female/Male" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Age</label>
                                    <div class="col-md-9">
                                        <input type="int" class="form-control" name="age" placeholder="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <!--<button type="submit" name="submit" name="submit" class="btn btn-primary" style="background-color:#f34e3a;border-color:#f34e3a;">Register</button>-->
                                        <!--<a href="https://www.sandbox.paypal.com/cgi-bin/webscr" class="btn btn-primary" style="background-color:#f34e3a;border-color:#f34e3a;">Continue to payment</a>-->
                                        <input type="submit" name="payment" value="payment">
                                        <span style="margin-left:8px;margin-right:8px;">or</span> 
                                        <a href="../../logimi/html/logimi.html" class="btn btn-primary" style="background-color:#f34e3a;border-color:#f34e3a;">Go to log in page</a>
                                    </div>
                                </div>

<input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">
                                
                               <!-- <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>-->
                                
                                
                                
                            </form>


                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="loginform" class="form-horizontal" role="form"  method="post" action="../php/data.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username_place" type="text" class="form-control" name="username" value="" placeholder="username or email">                                       
                                    </div>
                                <p id="username_info"></p> 
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password_place" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                 <p id="password_info"></p>   

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" name="submit" name="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     

                         </div>
                    </div>
         </div> 
    </div>
    </body>
<html>
