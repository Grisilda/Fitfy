<?php
	$connect=mysqli_connect('localhost','xxxx','xxxx','id12990860_fitfydb') or die('Couldnt connect'); 	
	$id=$_POST['id'];
	$sqlQuery = "DELETE FROM user WHERE id = '".$id."'and role=2";
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);
	echo "sucess";
?>
