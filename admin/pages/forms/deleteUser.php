<?php
	$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect'); 	
	$id=$_POST['id'];
	$sqlQuery1 = "SELECT username FROM  user where id = ".$id." and role = 3";
	$result1 = mysqli_query($connect, $sqlQuery1);
	// print_r($sqlQuery1);die;
	while ($row = mysqli_fetch_array($result1)) {
        $username=$row[0];
    }
    // echo $username;die;
	$sqlQuery = "DELETE FROM user WHERE id = ".$id." and role = 3";
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);

	$sqlQuery = "DELETE FROM payments WHERE username = "."'$username'";
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);

	echo "sucess";
?>