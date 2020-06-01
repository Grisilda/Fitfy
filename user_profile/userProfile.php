<?php
//session_start();
include'getUser.php';
?>
<?php
    if(!isset($_SESSION["login"])){
       header("Location: https://fitfy.000webhostapp.com/index.php");      
    }
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <link rel="stylesheet" href="styleProfile.css"> 
   <style type="text/css">
    input{
        border: none;
        display: inline;
        font-family: inherit;
        font-size: inherit;
        padding:none;
        width: auto;
        background: transparent;
        color: #0062cc;
    }
    .footercov {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#D8BFD8;
   color: white;
   
}

</style>
<!------ Include the above in your HEAD tag ---------->
<script src="jquery-3.5.1.min.js"></script>
</head>
<body>
        <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="../index.php">
                <img src="../img/FitLogo2.png" alt="FITFY" width="100px" height="100spx">
                </a>
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
               
<?php
    if(isset($_SESSION["login"])){
       echo '<div class="nav-right">
       <a class="ti-user" style="color:#ffffff;margin-right: 20px;margin-left: -30px;" href="userProfile.php"></a>
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
            <form method="post" id="myform1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="profile.png" alt="profile image" style="margin-left: 5px;height: 200px" id="image"/>
                           <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                               <input type='file' onchange="readURL(this);" />
                            </div>-->
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
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="https://fitfy.000webhostapp.com/user_profile/userProfile.php" role="tab" aria-controls="home" aria-selected="true">Personal Information</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" id="profile-tab" name="edit" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" onclick="editInfo()">Edit Profile</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                <div class="col-md-2">
                     <button class="profile-edit-btn"id="edit" type="button" name="btnAddMore" value="Edit Profile"  onclick="editInfo()" style="margin-left: 15px; margin-top:65px;width: 100px;color: blue;">Edit Profile</button>
                    </div>
                    <!-- <div class="col-md-2">
                         <button onclick="editInfo()">Edit</button>
                    </div> -->
                </div>

                <div class="row">
                    <div class="col-md-4">
                         <img src="userdata.svg" alt="User browsing" style="width: 300px;margin-top: 100px;">
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
                           
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               <form id="myform">
                                <p id="errors" style="font-size: 13px; color: red;"></p>
                                       <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>  <input  class="disabled" type="text" id="username" value="<?php echo $_SESSION['u_username'];?>" disabled></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input  class="disabled" type="text" id="name" value="<?php echo $_SESSION['u_name'];?>"disabled></p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Surname</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input class="disabled" type="text" id="surname" value="<?php echo $_SESSION['u_surname'];?>"disabled></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input class="disabled" type="email" id="email" value="<?php echo $_SESSION['u_email'];?>"disabled></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input class="disabled" type="password" style="border: none;display: inline;font-family: inherit;font-size: inherit;padding:none;width: auto;"value="<?php echo $_SESSION['password'];?>" id="pass" disabled> <input type="checkbox" onclick="show()">Show</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input class="disabled" type="text" id="gender" value="<?php echo $_SESSION['u_gender'];?>"disabled></p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input class="disabled" type="number" id="age" value="<?php echo $_SESSION['u_age'];?>"disabled></p>
                                            </div>
                                        </div>
                                         <div class="col-md-2">
                     <a class="profile-edit-btn" id="save" name="save" value=" Save "/ style="margin-left: 552px;width: 100px;color: green; display: none;" onclick="saveInfo()"> Save</a>
                    </div><br>
                    <div class="col-md-2">
                     <button class="profile-edit-btn" name="btnAddMore" value=" Log Out "/ style="margin-left: 525px;width: 100px;color: purple;"> <a href="logout.php" style="color: purple; text-decoration: none;">Log Out</a></button>
                    </div>
                </form>
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
<div class="modal" id="deleteModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style=" margin-top: 123px; ">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 600px;">
      <div class="modal-body" style="background: #cdc9f3;">
        <p style="font-size: 21px;padding-left: 90px; color: black;">Password changed. You need to Log In again!</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default" data-dismiss="modal" style="margin-right: 244px;background-color: #2d276c; color: white;" href="logout.php" >OK</a>
      </div>
    </div>
  </div>
</div>
 </div>

                        <div class="footercov">
                      <center> <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank"> <img src="home.svg" style="height:50px;"></a></center>
                    </div>

                      
        <script type="text/javascript">
            //$( document ).ready(function() {
 // $( "#field1" ).focus();
//});
             $("input").focus();
    function editInfo()
    { //alert("hi");
    setTimeout(function(){
    $("#username").filter(':visible').focus();
}, 500);
    document.getElementById("username").focus();
    $("input:text").focus();
    $("username").focus();
   document.getElementById("save").style.display="block";
    $(".edit").addClass("tab-pane fade show active");
    $(".edit").attr("aria-selected", "true")
    $("input").attr(  "border: 1px solid #cccccc;");
   var fields = $(".disabled");
    fields.removeClass("disabled");
    fields.addClass("enabled");
    fields.removeAttr("disabled", "");
    fields.attr("autofocus");
   // $("username").focus();
   // alert("hello");
}

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
function myFunction() {
 
        var el  = document.getElementById('edit');
var frm = document.getElementById('myform');

    for(var i=0; i < frm.length; i++) {
        frm.elements[i].disabled = false;
        
    } 
    frm.elements[0].focus();
}


function saveInfo(){
          debugger;
          // $('#errors').html();
           // alert(id);
           $.ajax({
             url:'updateUser.php',
             method:"POST",
             data:{
               name:$('#name').val(),
               surname:$('#surname').val(),
               age:$('#age').val(),       
               email:$('#email').val(),
               gender:$('#gender').val(),
              // description:$('#description').val(),
               //instagram:$('#instagram').val(),
              // specialism:$('#specialism').val(),
               //photo:$('#photo').val(),
               username:$('#username').val(),
               password:$('#pass').val() 
             },
             // dataType:"json",
             success:function(data){
              // alert(data);
              debugger;
               if (data=='Password changed') {
                // alert('Password changed. You need to Log In again! ');
                $('#deleteModal12').show();
               }
                
                 if(data=='This username exists in another user'){
                    // alert("This username exists in another user \n Please try again!");
         
                   $('#errors').html('This username exists in another user');
                 }
                 if(data=='This email exists in another user'){
         
                   $('#errors').html('This email exists in another user');
                 }
                if(data=='sucess'){
                   location.reload();
                 }
             }
           })
         }
</script>

</body>
</html>
