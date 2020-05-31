<?php
	$connect=mysqli_connect('xxx','xxx','xxx','xxx') or die('Couldnt connect'); 	
	$id=$_POST['id'];
	$sqlQuery1 = "SELECT day FROM  schedule2 where id = ".$id;
	$result1 = mysqli_query($connect, $sqlQuery1);
	// print_r($sqlQuery1);die;
	while ($row = mysqli_fetch_array($result1)) {
        $username=$row[0];
    }
    // echo $username;die;
	$sqlQuery = "DELETE FROM schedule2 WHERE id = ".$id;
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);

	// $sqlQuery = "DELETE FROM payments WHERE username = "."'$username'";
	// echo $sqlQuery;die;
	// $result = mysqli_query($connect, $sqlQuery);

	echo "sucess";
?>
