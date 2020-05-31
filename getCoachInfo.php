<?php
session_start();

		$connect=mysqli_connect('xxx','xxx','xxx','xxx') or die('Couldnt connect');
		
		$query="select name,surname,description, instagram, photo from user where role=2 order by salary desc limit 3";
		$i=0;
		$data=mysqli_query($connect,$query);
		while ($row = mysqli_fetch_array($data)) {
		        $_SESSION["name1".$i]=$row[0].' '.$row[1];
		        // print_r($row[0]);
		        $_SESSION["description1".$i]=$row[2];
		        $_SESSION["instagram1".$i]=$row[3];
		        $_SESSION["photo1".$i]='admin/pages/forms/upload/'.$row[4];
		        $i++;
		}
		print_r($_SESSION["photo10"]) ;
		$connect -> close();
		


	
?>
