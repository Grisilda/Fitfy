<?php
	$connect=mysqli_connect('localhost','xxxx','xxxx','xxxx') or die('Couldnt connect');
	$sqlQuery = "SELECT username,email,salary FROM user where role = 2 ORDER BY salary desc";

	$result = mysqli_query($connect,$sqlQuery);

	$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	echo json_encode($json);
?>
