<?php
    session_start();
    include_once('allCoaches.php');
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
    <link type="text/css" rel="stylesheet" href="magicscroll/magicscroll.css"/>
<script type="text/javascript" src="magicscroll/magicscroll.js"></script>
<style type="text/css">
    .MagicScroll[data-mode="carousel"] {
    background-color: <your-colour>;
}
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
                    <img src="img/FitLogo.png" alt="FITFY" width="100px" height="100px">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                       <ul id='ul'>
                        <li id='Home' class="index" value="index"><a href="./index.php">Kreu</a></li>
                        <li id='About' class="active"><a href="./about-us.php">Rreth Nesh</a></li>
                        <li id='Schedule' class="schedule"><a href="./schedule.php">Orari</a></li>
                        <li id='Portfolio' class="gallery"><a href="./gallery.php">Foto</a></li>
                       <!-- <li id='Blog' class="blog"><a href="./blog.php">Blog</a>
                            <ul class="dropdown">
                                <li id='Blog Details' class="blog-details"><a href="blog-details.php">Blog Details</a></li>
                            </ul>
                        </li>-->
                        <li id='Contacts' class="contact"><a href="./contact.php">Kontaktet</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
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

    <!-- Site Breadcrumb Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/about-breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-text">
                        <h2>Rreth Nesh</h2>
                        <div class="site-breadcrumb">
                            <a href="./index.php" class="sb-item">Kreu</a>
                            <span class="sb-item">Rreth Nesh</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Breadcrumb End -->

    <!-- About Us Secion Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-pic">
                        <img src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500 1x, https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500 2x" alt="" style="height: 421px;">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>Mirësevini në Fitfy</h2>
                            <p>Qëndra sportive FITFY është një koncept i ri stërvitjeje, krijuar nga eksperienca jonë ndërkombetare në Evropë dhe Shtetet e Bashkuara. Programet stërvitore inovative që ne ofrojmë gërshetohen së bashku me rehatinë e një vendndodhje të shkëlqyer dhe udhëzimet nga instruktorë profesioniste, për tu siguruar që ju të keni stërvitjen më të mire në ambjentet e qendrës.</p>
                        </div>
                        <p>Koncepti yne i stërvitjes në një komunitet të vogël me orë mësimi dhe programe të strukturuara, iu jep shansin të keni motivim të lartë duke u ndjerë pjesë e grupit dhe një synimi të madh, fitnesit. Trajneret tanë do të krijojnë gjithmonë ushtrime stërvitore të reja me qëllim që të shmangin rutinat e përsëritura. Të gjitha pajisjet tona janë nga markat më të famshme si Reebok dhe Adidas. Për më tepër biçikletat daneze të dizajnit të brendshëm të ciklizmit do të përdoren për një stërvitje të shkëlqyer kardio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Secion End -->

    <!-- Why Chose Us Section Begin -->
    <section class="choseus-section set-bg spad" data-setbg="img/chose-us-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Përse ne?</h2>
                        <p>Choose the best to get the best!</p>
                    </div>
                </div>
            </div>
            <div class="chose-items">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-crown"></i>
                            <h5>Komunitet fitnesi ekskluziv</h5>
                            <p>Secili ka vëmendjen personale të trajnerëve gjatë stërvitjes.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-package"></i>
                            <h5>Gjendja e pajisjeve të fundit</h5>
                            <p>Ne përdorim Reebok, Adidas, Body Bike (Biçikleta daneze për çiklizmin e brendshëm) dhe Polar.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-hand-open"></i>
                            <h5>Teamwork</h5>
                            <p>Ne jemi të përkushtuar për qëllime të përbashkëta. Komunikimi dhe përgjegjshmëria efektive bën që ekipi ynë të arrijë rezultate më të larta.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="ci-item">
                            <i class="ti-user"></i>
                            <h5>Trajnerë profesionistë dhe me eksperiencë</h5>
                            <p>Ne ndjekim trendet më të fundit të stërvitjeve gjimnastikore dhe kemi specialiste ne shume disiplina.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Chose Us Section End -->

    <!-- About Page Trainer Section Begin -->
    <section class="about-page-trainer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Trajnerët tanë</h2>
                            <p>Our fitness experts can help you discover new training techniques.</p>
                        </div>
                    </div>
                </div>
            </div>
           <div class="MagicScroll" data-options="mode: carousel; height: 650px; " style="background-color: black;">
       <?php 
                    $data=getAllCoaches();
                    // print_r($data);
                    for( $i=0;$i<sizeof($data['name']);$i++){
                ?>
                                       
                <div class="col-lg-3 col-sm-6">
                    <div class="single-trainer-item" style="width: 270px;">
                        <div class="trainer-pic" style="width: 270px;">
                            <img src="<?php echo $data['photo'][$i]; ?>" alt="" style="height: 434px; width: 200px;">
                        </div>
                        <div class="trainer-text" >
                            <h5 style="color: white;"><?php echo $data['name'][$i]; ?></h5>
                            <span style="color: #FF4500;"><?php echo $data['specialism'][$i]; ?></span>
                            <div class="trainer-social">
                                <a style="color: white;" href="<?php echo $data['instagram'][$i]; ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php 
                    }
                    ?>
            </div>
        </div>
    </section>
    <!-- About Page Trainer Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6">

                    <div class="map-location">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.5888017284037!2d19.811742915725354!3d41.31780820826798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDE5JzA0LjEiTiAxOcKwNDgnNTAuMSJF!5e0!3m2!1sen!2s!4v1497606026685" style="border:0;" allowfullscreen=""></iframe>

                        <div class="map-widget">

                            <i class="fa fa-map-marker"></i>

                            <div class="map-address">

                                <img src="img/map-location.jpg" alt="">

                                <ul class="map-text">

                                    <li><span>Adresa:</span> Qendra Olimpia, pranë Postës Nr.8 , Tiranë</li>

                                    <li><span>Numri telefonit:</span>0692563038</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="footer-form set-bg" data-setbg="img/contact-form-bg.jpg">

                        <div class="row">

                            <div class="col-lg-10">

                                <div class="section-title">

                                   <h2>Ne jemi këtu për ju.</h2>

                                    <p>Ju lutemi plotësoni formën e mëposhtme dhe stafi jonë do t'ju vi në ndihmë.</p>

                                </div>

                                <form action="slack_message.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Name" id="name" name ="name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Email" id="email" name ="email">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" placeholder="Subject" id="subject" name ="subject">
                                            <textarea placeholder="Message" id="message" name ="message"></textarea>
                                            <button type="submit">Submit <i class="ti-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="register normal-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                         <div class="footercov">
                       <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank"> <img src="home.svg" style="height:50px;"></a>
                    </div>
                       <!-- <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                       <!-- </div>
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
