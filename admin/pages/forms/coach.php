<?php


		$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect');
        $name       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        if(isset($name) and !empty($name)){
            $location = 'upload/';      
            if(move_uploaded_file($temp_name, $location.$name)){
            	$fullname=$location.$name;
                echo 'File uploaded successfully';
            }
        } else {
            echo 'You should select a file to upload !!';
        }
    $query="INSERT INTO coach (name, surname, age,email,gender,description,instagram,specialism,photo,username,password,salary)
								VALUES ('Ermelinda', 'Cela', '20','teacela@gmail.com','Female','I am the best!','TeaCelaaaa','Yoga','$fullname','Ermelinda','	
25f9e794323b453885f5181f1b624d0b','200')";
    $data = mysqli_query($connect,$query);
    print_r($data);
    echo $data?'ok':'err';
?>
