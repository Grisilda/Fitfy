<?php
session_start();

		include'config.php';
		include'dbConnect.php';

		if (isset($_SESSION["login"])) {
			$username= $_SESSION["login"];
			$query="select*from user where username='$username' and role=3";
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
		       
		   
		        
			}
		}
	$db->close();
?>
