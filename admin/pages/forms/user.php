<?php
 
$connect=mysqli_connect('localhost','xxxx','xxxx','xxxx') or die('Couldnt connect'); 
    $sqlQuery = "SELECT id,name,surname,age,email,gender,username FROM  user where role = 3";
    if(!empty($_POST["search"]["value"])){
        $sqlQuery .= ' and (name LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR surname LIKE "%'.$_POST["search"]["value"].'%" ';            
        $sqlQuery .= ' OR age LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR gender LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR username LIKE "%'.$_POST["search"]["value"].'%") ';         
    }
    $result = mysqli_query($connect, $sqlQuery);
    $numRows = mysqli_num_rows($result);
    $employeeData = array();    
    while( $employee = mysqli_fetch_assoc($result) ) {      
    // print_r($employee);die;
        $empRows = array();   
        $empRows[] = $employee['id'];      
        $empRows[] = $employee['name'];
        $empRows[] = $employee['surname'];
        $empRows[] = $employee['age'];      
        $empRows[] = $employee['email'];   
        $empRows[] = $employee['gender'];
        $empRows[] = $employee['username'];                  
        $empRows[] = '<button type="button" name="update" id="'.$employee["id"].'" class="btn btn-warning btn-xs update" style="font-size: 10px;" onclick="update('.$employee["id"].')">Update</button>';
        $empRows[] = '<button type="button" name="delete" id="'.$employee["id"].'" class="btn btn-danger btn-xs delete" style="font-size: 10px;" onclick="deleteUser('.$employee["id"].')" >Delete</button>';
        $employeeData[] = $empRows;
    }
    $output = array(
        "draw"              =>  intval($_POST["draw"]),
        "recordsTotal"      =>  $numRows,
        "recordsFiltered"   =>  $numRows,
        "data"              =>  $employeeData
    );
    echo json_encode($output);
?>
