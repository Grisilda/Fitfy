<?php
session_start();

		$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect');
		
		$query="Select day,start_time,end_time,id_class,id_coach from schedule";
		$result=[];
		$i=0;
		$data=mysqli_query($connect,$query);
		while ($row = mysqli_fetch_array($data)) {
		        $result['day'][$i]=$row[0];
		        $result['start_time'][$i]=$row[1];
		        $result['end_time'][$i]=$row[2];
		        // get the name of the class
		        $id_class=$row[3];
		        $class_query="Select name from classes where id_class= ".$id_class;
		        $class_data=mysqli_query($connect,$class_query);
		        $class_row = mysqli_fetch_array($class_data);
		        $result['class'][$i]=$class_row[0];
		        // get the name of the trainer
		        $id_coach=$row[4];
		        $coach_query="Select name,surname from user where id= ".$id_coach;
		        $coach_data=mysqli_query($connect,$coach_query);
		        $coach_row = mysqli_fetch_array($coach_data);
		        $result['coach_name'][$i]=$coach_row[0];
		        $result['coach_surname'][$i]=$coach_row[1];

		        $i++;

		}
		$myJSON = json_encode($result);
		echo $myJSON;
		$connect -> close();
	
?>
