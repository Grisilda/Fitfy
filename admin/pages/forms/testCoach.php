<?php

// //shtimi tjeter
    // $connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect');
     
//     // initilize all variable
//     $params = $columns = $totalRecords = $data = array();

//     $params = $_REQUEST;
//     //define index of column
//     $columns = array( 
//         0 =>'name',
//         1 =>'surname', 
//         2 =>'age', 
//         3 => 'email',
//         4 => 'gender',
//         5 => 'username'
//     );
//     $where = $sqlTot = $sqlRec = "";

//     // check search value exist
//     if( !empty($params['search']['value']) ) {   
//         $where .=" WHERE ";
//         $where .=" username LIKE ('".$params['search']['value']."%' )";    
//         $where .=" OR surname LIKE ('".$params['search']['value']."%')";

//         $where .=" OR email LIKE ('".$params['search']['value']."%' )";
//     }
//     // getting total number records without any search
//     $sql = "SELECT name,surname,age,email,gender,username FROM  users ";
//     $sqlTot .= $sql;
//     $sqlRec .= $sql;
//     //concatenate search sql if value exist
//     if(isset($where) && $where != '') {

//         $sqlTot .= $where;
//         $sqlRec .= $where;
//     }
  
// // Instructions if $_POST['value'] exist
// if( !empty($params['order']) ) {

//     $sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

// }
// // echo $sqlRec;die;
//     // echo $sqlRec; die;
//     $queryTot = mysqli_query($connect, $sqlTot) or die("database error:". mysqli_error($connect));

//     $totalRecords = mysqli_num_rows($queryTot);

//     //echo $sqlRec;die;
//     $queryRecords = mysqli_query($connect, $sqlRec) or die("error to fetch employees data");

//     //iterate on results row and create new index array of data
//     while( $row = mysqli_fetch_row($queryRecords) ) { 
//         $data[] = $row;
//     }   

//     $json_data = array(
//             "draw"            => intval( $params['draw'] ),   
//             "recordsTotal"    => intval( $totalRecords ),  
//             "recordsFiltered" => intval($totalRecords),
//             "data"            => $data // total data array
//             );

//     echo json_encode($json_data);    // send data as json format

  
$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect'); 
    $sqlQuery = "SELECT id,name, surname, age, email,age,email,gender, description,instagram,specialism,photo,username,salary FROM  coach ";
    if(!empty($_POST["search"]["value"])){
        $sqlQuery .= 'where(name LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR surname LIKE "%'.$_POST["search"]["value"].'%" ';            
        $sqlQuery .= ' OR age LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR gender LIKE "%'.$_POST["search"]["value"].'%" ';
        $sqlQuery .= ' OR username LIKE "%'.$_POST["search"]["value"].'%") ';         
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
        $empRows[] = '<button type="button" name="update" id="'.$employee["id"].'" class="btn btn-warning btn-xs update onclick="update('.$employee["id"].')" >Update</button>';
        $empRows[] = '<button type="button" name="delete" id="'.$employee["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
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
