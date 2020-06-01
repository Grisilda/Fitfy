<?php
session_start();

	// echo $_POST['name'];die;
	// include'config.php';
	// include'dbConnect.php';
	//$id=$_POST['id'];
$connect=mysqli_connect('localhost','xxxx','xxxx','id12990860_fitfydb') or die('Couldnt connect');
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
$usern=$_SESSION['login'];
 $query="SELECT id from user where username='$usern' and role=3";
    $res= mysqli_query($connect, $query);
   while ($info=mysqli_fetch_assoc($res)){
    	# code...
    	$id=$info['id'];
    }
    $query1="SELECT payment_id from payments where username='$usern'";
    $res1= mysqli_query($connect, $query1);
   while ($info1=mysqli_fetch_assoc($res1)){
    	# code...
    	$id1=$info1['payment_id'];
		// echo $id1;die;
    }
	// echo $info['payment_id'];die;
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
   $check3="SELECT password from user where id='$id' and role=3";
   $result3=mysqli_query($connect, $check3);
   while($data=mysqli_fetch_assoc($result3)){
   	if ($data['password']!=$password) {
   		
   		$sqlQuery2="UPDATE user u 
					SET u.password='".$password."'
					where u.id=".$id." and role=3 ";
					$resultP = mysqli_query($connect, $sqlQuery2);
					echo "Password changed";die;
   		# code...
   	}
   }

	// echo $age;die;
	$sqlQuery = "UPDATE user u 
					SET u.name='".$name."', 
						u.surname='".$surname."',
					    u.age=".$age.",
					    u.email='".$email."',
					    u.gender='".$gender."',
					    u.username='".$username."',
					    u.password='".$password."'
					WHERE u.id=".$id." and role = 3";
	$sqlQuery3 = "UPDATE payments 
					SET username='".$username."'
					WHERE payment_id=".$id1 ;
					//echo "hi";
					//echo $usern;
					//echo "hi";
					//echo $username;
	$result4 = mysqli_query($connect,$sqlQuery3);
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);
	$_SESSION['u_username']=$username;
	$_SESSION['u_name']=$name;
	$_SESSION['u_surname']=$surname;
	$_SESSION['u_age']=$age;
	$_SESSION['u_email']=$email;
	$_SESSION['u_gender']=$gender;
	$_SESSION['login']=$username;

	echo "sucess";

	$connect->close();
?>
