<?php
session_start();
		$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect');

		$query="SELECT COUNT(*) as count FROM `users`";

		$data=mysqli_query($connect,$query);
		$user_total = mysqli_fetch_assoc($data);
		// echo $total['count'] ;die;
		$_SESSION["user_total"] = $user_total['count'];
?>