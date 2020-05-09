<?php

	// echo $_POST['name'];die;
	$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect'); 	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$description=$_POST['description'];
	$instagram=$_POST['instagram'];
	$specialism=$_POST['specialism'];
	$photo=$_POST['photo'];
	$username=$_POST['username'];
	$salary=$_POST['salary'];

	$check="SELECT id,name,surname,age,email,gender,description,instagram,specialism,photo,username,salary FROM coach where username = '".$username."' and id != ".$id;
	$result1 = mysqli_query($connect, $check);
    $numRows = mysqli_num_rows($result1);
    // echo $check;die;
    if($numRows!=0){
		echo "This username exists in another coach";die;
    }

    $check2="SELECT id,name,surname,age,email,gender,description,instagram,specialism,photo,username,salary FROM coach where email = '".$email."' and id != ".$id;
	$result2 = mysqli_query($connect, $check2);
    $numRows2 = mysqli_num_rows($result2);
    // echo $check;die;
    if($numRows2!=0){
		echo "This email exists in another coach";die;
    }

	// echo $age;die;
	$sqlQuery = "UPDATE coach c 
					SET c.name='".$name."', 
						c.surname='".$surname."',
					    c.age=".$age.",
					    c.email='".$email."',
					    c.gender='".$gender."',
					    c.description='".$description."',
					    c.instagram='".$instagram."',
					    c.specialism='".$specialism."',
					    c.photo='".$photo."'
					    c.username='".$username."'
					    c.salary='".$salary."'
					WHERE u.id=".$id;
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);
	echo "sucess";
?>
