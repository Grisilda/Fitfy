<?php
session_start();
		$connect=mysqli_connect('localhost','xxxx','xxxx','xxxx') or die('Couldnt connect');

		$query="SELECT COUNT(*) as count FROM `user` where role = 3";

		$data=mysqli_query($connect,$query);
		$user_total = mysqli_fetch_assoc($data);
		// echo $total['count'] ;die;
		$_SESSION["user_total"] = $user_total['count'];
?>
