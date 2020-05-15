<?php
// echo $_POST['empId'];die;
	$connect=mysqli_connect('localhost','xxxx','xxxx','id12990860_fitfydb') or die('Couldnt connect'); 
	$id=$_POST['empId'];
    $sqlQuery = "SELECT id,name,surname,age,email,gender,description,instagram,specialism,photo,username,salary FROM  user where id = '".$id."' and role = 2 ";
    // if(!empty($_POST["search"]["value"])){
    //     $sqlQuery .= 'where(name LIKE "%'.$_POST["search"]["value"].'%" ';
    //     $sqlQuery .= ' OR surname LIKE "%'.$_POST["search"]["value"].'%" ';            
    //     $sqlQuery .= ' OR age LIKE "%'.$_POST["search"]["value"].'%" ';
    //     $sqlQuery .= ' OR gender LIKE "%'.$_POST["search"]["value"].'%" ';
    //     $sqlQuery .= ' OR username LIKE "%'.$_POST["search"]["value"].'%") ';         
    // }
    $result = mysqli_query($connect, $sqlQuery);
    $numRows = mysqli_num_rows($result);
    $employeeData = array();    
    while( $employee = mysqli_fetch_assoc($result) ) {      
    // print_r($employee);die;
        $empRows = array();   
        // $empRows[0] = $employee['id'];      
        $empRows[1] = $employee['name'];
        $empRows[2] = $employee['surname'];
        $empRows[3] = $employee['age'];      
        $empRows[4] = $employee['email'];   
        $empRows[5] = $employee['gender'];
         $empRows[6] = $employee['description'];
        $empRows[7] = $employee['instagram'];
        $empRows[8] = $employee['specialism'];
        $empRows[9] = $employee['photo'];
        $empRows[10] = $employee['username']; 
        $empRows[11] = $employee['salary'];  
        $employeeData[] = $empRows;
    }
    $output = array(
        // "draw"              =>  intval($_POST["draw"]),
        "recordsTotal"      =>  $numRows,
        "recordsFiltered"   =>  $numRows,
        "data"              =>  $employeeData
    );
    echo json_encode($employeeData);
?>
