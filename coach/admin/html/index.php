<!DOCTYPE html>
<html>
<head>
  
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./after_logout.js"></script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>

<div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#" name="top">Welcome</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#"><i class="icon-file icon-white"></i> Modify</a></li>
          <li class="divider-vertical"></li>
        </ul>
        <div class="btn-group pull-right">
          <form method="post" action="./logout.php">   
            <button type="submit" name="submit" name="submit" class="btn dropdown-toggle"><i class="icon-user"></i> Log out </button>
          </form>
        </div>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </div>
  <!--/.navbar-inner -->
</div>
<!--/.navbar -->
<div class="tab-pane active in" id="home"> 
<?php
  session_start();
  $connect=mysqli_connect('localhost:3306','root','','E-commerce') or die('Couldnt connect');
        $ussername=$_POST["firstname"];
        $password=$_POST["passwd"];
        $query='Select name,surname,role,email,birthday from User where name='.$ussername.' or password='.$password;
        $data=mysqli_query($connect,$query);
        while ($row=mysqli_fetch_array($data);) {
        echo '<div>'.$row['name'].'</div'.'<br>';
        echo '<div>'.$row['surname'].'</div'.'<br>';
        echo '<div>'.$row['role'].'</div'.'<br>';
        echo '<div>'.$row['email'].'</div'.'<br>';
        echo '<div>'.$row['birthday'].'</div'.'<br>';
        }
        mysql_close($connect);
  }
  catch(Exception $e){
  }
?>  
    
</div>
</body>
</html>