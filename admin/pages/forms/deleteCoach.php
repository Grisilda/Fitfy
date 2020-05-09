<?php
	$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect'); 	
	$id=$_POST['id'];
	$sqlQuery = "DELETE FROM coach WHERE id = ".$id;
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);
	echo "sucess";
?>
