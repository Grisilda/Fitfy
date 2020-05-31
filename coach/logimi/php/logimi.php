<?php
session_start();

		$connect=mysqli_connect('xxx','xxx','xxx','xxx') or die('Couldnt connect');
		if($_POST["ussername"]!=null && $_POST["password"]!=null){
			// echo "Here";
				$name=$_POST["ussername"];
				$password=$_POST["password"];
				$_SESSION["login"] = $name;
				$_SESSION["password"] = $password;
				$hash = md5($password);
				$queryUssername="Select * from user where username="."'$name'"."and role=2" ;
				$dataUssername=mysqli_query($connect,$queryUssername);
				$queryPassword="Select * from user where password="."'$hash'"."and role=2" ;
				$dataPassword=mysqli_query($connect,$queryPassword);
				if(mysqli_num_rows ($dataUssername)==0){
					echo "Please check your credintials!";
				}else if(mysqli_num_rows ($dataUssername)!=0 && mysqli_num_rows ($dataPassword)==0){
					echo "Your password is incorrect!";
				}else if(mysqli_num_rows ($dataUssername)!=0 && mysqli_num_rows ($dataPassword)!=0){
					echo "Sucess";
				}
		}else{
			echo "Please fill all the fields!";die;
		}
	$connect -> close();
?>
