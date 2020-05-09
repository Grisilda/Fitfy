<?php
session_start();
	if(isset($_POST["submit"])){
		$connect=mysqli_connect('localhost','xxxx','xxxx','xxxx') or die('Couldnt connect');
		if($_POST["username"]!=null && $_POST["password"]!=null){
			// echo "Here";
				$name=$_POST["username"];
				$password=$_POST["password"];
				$_SESSION["admin_name"] = $name;
				$_SESSION["admin_password"] = $password;
				$hash = md5($password);

				$query1="SELECT COUNT(*) as count FROM `user`"." where role = 3";

				$data1=mysqli_query($connect,$query1);
				$user_total = mysqli_fetch_assoc($data1);
				// echo $total['count'] ;die;
				$_SESSION["user_total"] = $user_total['count'];

				$query2="SELECT COUNT(*) as count FROM `user`"." where role = 2";

				$data2=mysqli_query($connect,$query2);
				$coach_total = mysqli_fetch_assoc($data2);
				// echo $total['count'] ;die;
				$_SESSION["coach_total"] = $coach_total['count'];

				$query3="SELECT COUNT(*) as count FROM `user` u inner JOIN payments p on u.username=p.username where MONTH( p.start_date) > MONTH( curdate() ) -1"." and role = 3";

				$data3=mysqli_query($connect,$query3);
				$current_users = mysqli_fetch_assoc($data3);
				// echo $total['count'] ;die;
				$_SESSION["current_users"] = $current_users['count'];

				// echo $coach_total['count'];die;
				$query="Select * from user where username="."'$name'"." and password="."'$hash'"." and role = 1";

				$data=mysqli_query($connect,$query);
				// print_r(mysqli_num_rows ($data)) ;die;
				if(mysqli_num_rows ($data)!=0){
					header('Location:/admin/index.php');
					mysql_close($connect);
				}else{
					echo "Here";die;
					header('Location:/admin/login.html');
				}
		}else{
			echo "<script type='text/javascript'>alert('Please fill all the fields!');
					window.location.href='/admin/login.html';
				  </script>";
		}
	}
?>
