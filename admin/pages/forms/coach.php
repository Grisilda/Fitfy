<?php
  
$connect=mysqli_connect('localhost' ,'xxxx','xxxx','id12990860_fitfydb') or die('Couldnt connect'); 
  $sqlQuery = "SELECT id,name, surname, age, email,age,email,gender, description,instagram,specialism,photo,username,salary FROM  user where role=2 ";
    if(!empty($_POST["search"]["value"])){
        
        $sqlQuery .= 'and (name LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR surname LIKE "%'.$_POST["search"]["value"].'%" ';            
        $sqlQuery .= ' OR age LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR gender LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR username LIKE "%'.$_POST["search"]["value"].'%") ';  
        // print_r($sqlQuery);die;       
    }
    // if(!empty($_POST["order"])){
    //     $sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
    // } else {
    //     $sqlQuery .= 'ORDER BY id DESC ';
    // }
    // if($_POST["length"] != -1){
    //     $sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
    // }   
    // mysqli_query($connect, $sqlTot)
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
        $empRows[] = $employee['description'];
        $empRows[] = $employee['instagram'];
        $empRows[] = $employee['specialism'];
        $empRows[] = $employee['photo'];
        $empRows[] = $employee['username']; 
        $empRows[] = $employee['salary'];   
        $empRows[] = '<button type="button" style="width:50px; height:20px; font-size: 1.0rem;" name="update" id="'.$employee["id"].'" class="btn btn-warning btn-xs update"  onclick="update('.$employee["id"].')">Update</button>';
        $empRows[] = '<button type="button" style="width:50px; height:20px; font-size: 1.0rem;" name="delete" id="'.$employee["id"].'" class="btn btn-danger btn-xs delete"  onclick="deleteUser('.$employee["id"].')" >Delete</button>';           
        //$empRows[] = '<button type="button" style="width:50px; height:20px; font-size: 1.0rem;" name="update" id="'.$employee["id"].'" class="btn btn-warning btn-xs update onclick="update('.$employee["id"].')">Update</button>';
       // $empRows[] = '<button type="button" style="width:50px; height:20px; font-size: 1.0rem;"  name="delete" id="'.$employee["id"].'" class="btn btn-danger btn-xs delete " onclick="deleteUser('.$employee["id"].')">Delete</button>';
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
