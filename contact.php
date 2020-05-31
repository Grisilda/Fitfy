<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitfy Fitness</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
        .footercov {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 60%;
   background-color:transparent;
   color: white;
   
}
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container">
            <div class="logo">
                <a href="./index.php">
                    <img src="img/FitLogo2.png" alt="FITFY" width="100px" height="100px">
                </a>
            </div>
            <div class="nav-menu">
                 <nav class="mainmenu mobile-menu">
                       <ul id='ul'>
                        <li id='Home' class="index" value="index"><a href="./index.php">Kreu</a></li>
                        <li id='About' class="about-us"><a href="./about-us.php">Rreth Nesh</a></li>
                        <li id='Schedule' class="schedule"><a href="./schedule.php">Orari</a></li>
                        <li id='Portfolio' class="gallery"><a href="./gallery.php">Foto</a></li>
                       <!-- <li id='Blog' class="blog"><a href="./blog.php">Blog</a>
                            <ul class="dropdown">
                                <li id='Blog Details' class="blog-details"><a href="blog-details.php">Blog Details</a></li>
                            </ul>
                        </li>-->
                        <li id='Contacts' class="active"><a href="./contact.php">Kontaktet</a></li>
                    </ul>
                </nav>
                <div class="nav-right">
                    <i class="ti-search"></i>
                </div>
                <?php
    if(isset($_SESSION["name"])){
       echo '<div class="nav-right">
       <a class="ti-user" style="color:black" href="/user/profil/profil.html"></a>
        </div>';       
    }
?>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
     <br>
     <br>
     <br>
     <br>
     <br>
    <!-- Map Section Begin -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.5888017284037!2d19.811742915725354!3d41.31780820826798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDE5JzA0LjEiTiAxOcKwNDgnNTAuMSJF!5e0!3m2!1sen!2s!4v1497606026685" style="border:0;" allowfullscreen=""></iframe>
        <i class="fa fa-map-marker"></i>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-location-pin"></i>
                        <p>Qendra Olimpia, pranë Postës Nr.8 , Tiranë</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-email"></i>
                        <ul>
                            <li><span>Numri telefonit:</span>0692563038</li>
                            <li><span>Mail:</span>Fitfy.Fitness@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-timer"></i>
                        <ul>
                            <li><span>Ora:</span> 10:00 – 22:00</li>
                            <li><span>E Diel:</span> Mbyllur</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="section-title">
                    <h2 >Lini mesazhin tuaj.</h2>
                    <p>Stafi jonë do tju kontaktoj më vonë dhe do t'ju japi përgjigje për pyetjet që ju keni</p>
                </div>
                <form action="slack_message.php" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Emri juaj" id="name" name="name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Email juaj" id="email" name="email">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="Mesazhi që dëshironi të lini" id="message" name="message"></textarea>
                            <button type="submit">Submit<i class="ti-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="register normal-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                         <div class="footercov">
                       <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank"> <img src="home.svg" style="height:50px;"></a>
                    </div>
                       <!-- <div class="copyright">
                             Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      <!--  </div>
                        <div class="footer-widget">
                            <ul>
                                <li class="active">Privacy Policy</li>
                                <li>Terms Of Service</li>
                                <li>Careers</li>
                            </ul>
                        </div>-->
                        <div class="footer-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
<!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <!-- <form id="searchForm" action="javascript:search();"> -->
            <form class="search-model-form" id="searchForm" action="javascript:search();">
               <div class="input-group">
                  <button id="go" class="btn btn-default" type="button" 
                          onclick="document.getElementById('searchForm').submit(); return false;">
                  </button>
                  <!-- <input type="text" id="searchItem" class="form-control" placeholder="Search here ..."> -->
                  <input type="text" id="searchItem" placeholder="Search here.....">
               </div>
               <ul id="result" style="padding-left: 64px;;margin: 17px;">
                        
                    </ul>
            </form>
        </div>
    </div>
    <!-- Search model end -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
          function search() {
        debugger;
       var name = document.getElementById("searchForm").elements["searchItem"].value;
       var pattern = name.toLowerCase();
       var targetId = "";
     
       var divs = document.getElementsByClassName("nav-menu");
       for (var i = 0; i < divs.length; i++) {
          var para = divs[i].getElementsByTagName("li");
          for (var j = 0; j < para.length; j++) {
             var index = para[j].innerText.toLowerCase().indexOf(pattern);
              if (index != -1) {
                 targetId = para[j].id;
                 var clasa=para[j].className;
                 $("#result").empty();
                 // $("#result").append(para[j].id);
                 $("#result").append('<a href="https://fitfy.000webhostapp.com/'+clasa+'.php">'+targetId+'</a>');
                 // $("#ul").append(para[j]);
                 break;
              }
          }
       }  
    }
    </script>
</body>

</html>
