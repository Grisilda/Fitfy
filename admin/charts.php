<?php
	$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect');
	$sqlQuery = "SELECT username,email,salary FROM coach ORDER BY salary DESC";

	$result = mysqli_query($connect,$sqlQuery);

	$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	echo json_encode($json);
?>