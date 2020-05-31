<?php
// echo $_POST['empId'];die;
	$connect=mysqli_connect('xxx','xxx','xxx','xxx') or die('Couldnt connect'); 
	$id=$_POST['empId'];
    $sqlQuery = "SELECT schedule2.id,day,start_time,end_time,user.name as c_name,surname as c_surname,user.specialism as name
                    FROM  schedule2
                    inner join user on schedule2.id_coach=user.id where schedule2.id= ".$id;
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
        $empRows[1] = $employee['day'];
        $empRows[2] = $employee['start_time'];
        $empRows[3] = $employee['end_time'];      
        $empRows[4] = $employee['c_name'];   
        $empRows[5] = $employee['c_surname'];
        $empRows[6] = $employee['name'];
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
