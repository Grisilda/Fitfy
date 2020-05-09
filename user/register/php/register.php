<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
		$connect=mysqli_connect('localhost','xxxx','xxxx','xxxx') or die('Couldnt connect');
		// echo $_POST["firstname"];die;
		if($_POST["firstname"]!=null && $_POST["lastname"]!=null && $_POST["email"]!=null && $_POST["ussername"]!=null && $_POST["gender"]!=null && $_POST["age"]!=null && $_POST["passwd"]!=null){
				 $name=$_POST["firstname"];
				 $_SESSION["name"] = $name;
				 $surname=$_POST["lastname"];
				 $_SESSION["surname"] = $surname;
				 $email=$_POST["email"];
				 $_SESSION["email"] = $email;
				 $password=$_POST["passwd"];
				 $age=$_POST["age"];
				 $_SESSION["age"] = $age;
				 $ussername=$_POST["ussername"];
				 $_SESSION["username"] = $ussername;
				 $gender=$_POST["gender"];
				 $_SESSION["gender"] = $gender;
				 $hash = md5($password);
				 $_SESSION["hash"] = $hash;
				 // echo $hash;die;
				 $query="Select * from user where username = "."'$ussername'"." or email = "."'$email'"."and role = 3";
				 $data=mysqli_query($connect,$query);
				 if(mysqli_num_rows ($data)==0){
				 	// $query2="INSERT INTO users (name, surname, age,email,gender,username,password)
						// 		VALUES ('$name', '$surname', '$age','$email','$gender','$ussername','$hash')";
				  //   $data2=mysqli_query($connect,$query2);
				    // echo $query2;die;
				    // header('Location:../../../prova/Pindex.php');
				    echo "Sucess";
				 }else{
				  	echo 'This ussername or email exists!';die;
				 }
		}else{
		
			echo 'An error happend, please check if your fields are valid!';die;
		}
		$connect -> close();

?>
