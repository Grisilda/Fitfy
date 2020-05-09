<?php
session_start();
	if(isset($_POST["submit"])){
		$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect');
		if($_POST["ussername"]!=null && $_POST["password"]!=null){
			// echo "Here";
				$name=$_POST["ussername"];
				$password=$_POST["password"];
				$hash = md5($password);
				$query="Select * from user where username="."'$name'"."and role=2";

				$data=mysqli_query($connect,$query);
				if(mysqli_num_rows ($data)!=0){
					$query="Update user set password="."'$hash'"." where username="."'$name'"."and role=2";
					$data=mysqli_query($connect,$query);
					header("Location: ../../logimi/html/logimi.html");
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
