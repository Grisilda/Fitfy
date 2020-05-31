<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
	if(isset($_POST["submit"])){
		$connect=mysqli_connect('xxx','xxx','xxx','xxx') or die('Couldnt connect');
		
		if($_POST["firstname"]!=null && $_POST["lastname"]!=null && $_POST["email"]!=null && $_POST["passwd"]!=null && $_POST["age"]!=null && $_POST["ussername"]!=null && $_POST["gender"]!=null && $_POST["description"]!=null && $_POST["instagram"]!=null && $_POST["specialism"]!=null){
				 $name=$_POST["firstname"];
				 $surname=$_POST["lastname"];
				 $email=$_POST["email"];
				 $password=$_POST["passwd"];
				 $age=$_POST["age"];
				 $ussername=$_POST["ussername"];
				 $gender=$_POST["gender"];
				 $description=$_POST["description"];
				 $instagram=$_POST["instagram"];
				 $specialism=$_POST["specialism"];
				 // Upload photo
				 $name = $_FILES['file']['name'];
			     $target_dir = "upload/";
			     $target_file = $target_dir . basename($_FILES["file"]["name"]);
			     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			     $extensions_arr = array("jpg","jpeg","png","gif");
				 // End
				 $hash = md5($password);
				 $query="Select * from coach where username = "."'$ussername'"." and email = "."'$email'";
				 $data=mysqli_query($connect,$query);
				 if(mysqli_num_rows ($data)==0 && in_array($imageFileType,$extensions_arr)){
				 	$query2="INSERT INTO coach (name, surname, age,email,gender,description,instagram,specialism,photo,username,password)
								VALUES ('$name', '$surname', '$age','$email','$gender','$description','$instagram','$specialism','$name','$ussername','$hash')";
				    $data2=mysqli_query($connect,$query2);
				    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
				    // echo $query2;die;
				    // header('Location:../html/register.html');
				 }else{
				 // 	echo "<script type='text/javascript'>alert('An error happend, please check if your fields are valid!');
					// window.location.href='../html/register.html';
				 //  </script>";
				 }
		}else{
			// echo "<script type='text/javascript'>alert('An error happend, please check if your fields are valid!');
			// 		window.location.href='../html/register.html';
			// 	  </script>";
		}	}
?>
