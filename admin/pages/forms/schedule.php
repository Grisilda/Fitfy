<?php
 
$connect=mysqli_connect('xxx','xxx','xxx','xxx') or die('Couldnt connect'); 
    $sqlQuery = "SELECT schedule2.id,day,start_time,end_time,user.name as c_name,surname as c_surname,user.specialism as name
                    FROM  schedule2
                    inner join user on schedule2.id_coach=user.id";
    if(!empty($_POST["search"]["value"])){
        $sqlQuery .= ' and (id LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR day LIKE "%'.$_POST["search"]["value"].'%" ';            
        $sqlQuery .= ' OR start_time LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR end_time LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR c_name LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR c_surname LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR name LIKE "%'.$_POST["search"]["value"].'%") ';         
    }
    $result = mysqli_query($connect, $sqlQuery);
    $numRows = mysqli_num_rows($result);
    $employeeData = array();    
    while( $employee = mysqli_fetch_assoc($result) ) {      
    // print_r($employee);die;
        $empRows = array();   
        $empRows[] = $employee['id'];      
        $empRows[] = $employee['day'];
        $empRows[] = $employee['start_time'];
        $empRows[] = $employee['end_time'];      
        $empRows[] = $employee['c_name'];   
        $empRows[] = $employee['c_surname'];
        $empRows[] = $employee['name'];                  
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
