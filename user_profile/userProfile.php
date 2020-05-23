<?php
//session_start();
include'getUser.php';
?>
<html>
<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="description" content="Fitfy Template">
    <meta name="keywords" content="Fitfy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="styleProfile.css"> 
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
        <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <img src="../img/FitLogo2.png" alt="FITFY" width="100px" height="100spx">
            </div>
            <div class="nav-menu" style="background-color: #FF7F50">
                <nav class="mainmenu mobile-menu">
                    <ul id='ul'>
                        <li id='Home' class="index" value="index"><a href="../index.php">Kreu</a></li>
                        <li id='About' class="about-us"><a href="../about-us.php">Rreth Nesh</a></li>
                        <li id='Schedule' class="schedule"><a href="../schedule.php">Orari</a></li>
                        <li id='Portfolio' class="gallery"><a href="../gallery.php">Foto</a></li>
                       <!-- <li id='Blog' class="blog"><a href="./blog.php">Blog</a>
                            <ul class="dropdown">
                                <li id='Blog Details' class="blog-details"><a href="blog-details.php">Blog Details</a></li>
                            </ul>
                        </li>-->
                        <li id='Contacts' class="contact"><a href="../contact.php">Kontaktet</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="ti-search"></i>
                    
                </div>
<?php
    if(isset($_SESSION["login"])){
       echo '<div class="nav-right">
       <a class="ti-user" style="color:#ffffff" href="userProfile.php"></a>
        </div>';       
    }
?>
               <!--  <div class="nav-right search-switch">
                    <i class="ti-user"></i>
                </div> -->
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="profile.png" alt="profile image" style="margin-left: 5px;height: 200px" id="image"/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                               <input type='file' onchange="readURL(this);" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head"> 
                                    <h5>
                                        
                                    <?php echo $_SESSION['u_name']." ".$_SESSION['u_surname'];?>
                                    </h5>
                                   <!-- <h6>
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>-->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="https://fitfy.000webhostapp.com/user_profile/userProfile.php" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                              <!--  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                           <!-- <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>-->
                            <img src="userInfo.svg" alt="User browsing" style="width: 300px">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>  <?php echo $_SESSION['u_username'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['u_name'];?></p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Surname</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['u_surname'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['u_email'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="password" style="border: none;display: inline;font-family: inherit;font-size: inherit;padding:none;width: auto;"value="<?php echo $_SESSION['password'];?>" id="pass"> <input type="checkbox" onclick="show()">Show</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['u_gender'];?></p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['u_age'];?></p>
                                            </div>
                                        </div>
                                        
                    <div class="col-md-2">
                     <button class="profile-edit-btn" name="btnAddMore" value=" Log Out "/ style="margin-left: 525px;width: 100px;color: purple;"> <a href="logout.php" style="color: purple; text-decoration: none;">Log Out</a></button>
                    </div>
                            </div>
                    
                           <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <script type="text/javascript">

            function show() {
            var x = document.getElementById("pass");
             if (x.type === "password") {
             x.type = "text";
             } else {
             x.type = "password";
            }
            }

                function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>

</body>
</html>
