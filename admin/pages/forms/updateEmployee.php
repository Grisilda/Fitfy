<?php

	// echo $_POST['name'];die;
	$connect=mysqli_connect('localhost','xxxx','xxxx','xxxx') or die('Couldnt connect'); 	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$username=$_POST['username'];

	$check="SELECT id,name,surname,age,email,gender,username FROM  user where username = '".$username."' and id != ".$id." and role = 3";
	$result1 = mysqli_query($connect, $check);
    $numRows = mysqli_num_rows($result1);
    // echo $check;die;
    if($numRows!=0){
		echo "This username exists in another user";die;
    }

    $check2="SELECT id,name,surname,age,email,gender,username FROM  user where email = '".$email."' and id != ".$id." and role = 3";
	$result2 = mysqli_query($connect, $check2);
    $numRows2 = mysqli_num_rows($result2);
    // echo $check;die;
    if($numRows2!=0){
		echo "This email exists in another user";die;
    }

	// echo $age;die;
	$sqlQuery = "UPDATE user u 
					SET u.name='".$name."', 
						u.surname='".$surname."',
					    u.age=".$age.",
					    u.email='".$email."',
					    u.gender='".$gender."',
					    u.username='".$username."'
					WHERE u.id=".$id." and role = 3";
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);
	echo "sucess";
?>
