<?php

	// echo $_POST['name'];die;
	$connect=mysqli_connect('xxx','xxx','xxx','xxx') or die('Couldnt connect'); 	
	$id=$_POST['id'];
	$day=$_POST['day'];
	$start_time=$_POST['start_time'];
	$end_time=$_POST['end_time'];
	$c_name=$_POST['c_name'];
	$c_surname=$_POST['c_surname'];
	$name=$_POST['name'];

	// $check="SELECT id,name,surname,age,email,gender,username FROM  user where username = '".$username."' and id != ".$id." and role = 3";
	// $result1 = mysqli_query($connect, $check);
 //    $numRows = mysqli_num_rows($result1);
 //    // echo $check;die;
 //    if($numRows!=0){
	// 	echo "This username exists in another user";die;
 //    }

    $check2="select id from user where name = '".$c_name."' and surname= '".$c_surname."' and role = 2";
	$result2 = mysqli_query($connect, $check2);
	// print_r($check2);die;
    $numRows2 = mysqli_num_rows($result2);
    // echo $check;die;
    if($numRows2==0){
		echo "This coach dont exist!";die;
    }else{
    	$row=mysqli_fetch_assoc($result2);
    	// print_r($row['id']);die;
    	$coach_id=$row['id'];
    }

    $check3="select specialism from user where id = ".$coach_id."";
    // print_r($check3);die;
	$result3 = mysqli_query($connect, $check3);
	$row2=mysqli_fetch_assoc($result3);
	$class_coach=$row2['specialism'];
	  // echo $check;die;
	if($name!=$class_coach){
	   echo "This coach dont give this class!";die;
	}


	// echo $age;die;
	$sqlQuery = "update schedule2 SET
						day='".$day."', 
						start_time= '".$start_time."',
					    end_time= '".$end_time."',
					    id_coach= ".$coach_id."
					where schedule2.id=".$id;
	// echo $sqlQuery;die;
	$result = mysqli_query($connect, $sqlQuery);
	echo "sucess";
?>
