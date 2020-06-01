<?php
session_start();

		include'config.php';
		include'dbConnect.php';

		if (isset($_SESSION["login2"])) {
			$username= $_SESSION["login2"];
			$query="select*from user where username='$username' and role=2";
			$data= mysqli_query($db, $query);
			while ($info=mysqli_fetch_assoc($data))
			{
				$_SESSION["u_name"]=$info["name"];
		        $_SESSION["u_surname"]=$info["surname"];
		        $_SESSION["u_username"]=$info["username"];
		        $_SESSION["u_email"]=$info["email"];
		        $_SESSION["u_password"]=$info["password"];
		        $_SESSION["u_gender"]=$info["gender"];
		        $_SESSION["u_age"]=$info["age"];
		        $_SESSION["u_description"]=$info["description"];
		        $_SESSION["u_instagram"]=$info["instagram"];
		        $_SESSION["u_specialism"]=$info["specialism"];
		        // $image = $info['photo'];
          //       $image_src = "upload/".$image;
		        $_SESSION["u_photo"]='../admin/pages/forms/upload/'.$info["photo"];
		       
		   
		        
			}
		}
	$db->close();
?>
