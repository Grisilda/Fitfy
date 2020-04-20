<?php
session_start();
	if(isset($_POST["submit"])){
		$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect');
		if($_POST["username"]!=null && $_POST["password"]!=null){
			// echo "Here";
				$name=$_POST["username"];
				$password=$_POST["password"];
				$_SESSION["name"] = $name;
				$_SESSION["password"] = $password;
				$hash = md5($password);
				$query="Select * from coach where username="."'$name'"." and password="."'$hash'";

				$data=mysqli_query($connect,$query);
				if(mysqli_num_rows ($data)!=0){
					header('Location:../../../../index.html');
					mysql_close($connect);
				}else{
					header('Location:../html/logimi.html');
				}
		}else{
			echo "<script type='text/javascript'>alert('Please fill all the fields!');
					window.location.href='../html/logimi.html';
				  </script>";
		}
	}
?>