<?php
	session_start();
	$db = mysqli_connect('localhost', 'xxxx','xxxx','id12990860_fitfydb');

	$photo = $_FILES['file']['name'];
	$target_dir = "../admin/pages/forms/upload/";
    $target_file = $target_dir . basename($photo);
    move_uploaded_file($_FILES['file']['tmp_name'],'../admin/pages/forms/upload/'.$photo);
    $usern=$_SESSION['login2'];
 	$query="SELECT id from user where username='$usern' and role=2";
    $res= mysqli_query($db, $query);
	   while ($info=mysqli_fetch_assoc($res)){
	    	# code...
	    	$id=$info['id'];
    }
    $sqlQuery2="UPDATE user u 
					SET u.photo='".$photo."'
					where u.id=".$id." and role=2 ";
					$resultP = mysqli_query($db, $sqlQuery2);
    header('Location: https://fitfy.000webhostapp.com/user_profile/coachProfile.php');
?>
