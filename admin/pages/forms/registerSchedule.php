<?php


// connect to the database
$connect = mysqli_connect('xxx', 'xxx','xxx','xxx');

if ($_POST['date']!=null&& $_POST['start_time']!=null && $_POST['end_time']!=null && $_POST['coach_name']!=null && $_POST['coach_surname']!=null && $_POST['class_name']!=null) {
  
  // receive all input values from the form
  $date= mysqli_real_escape_string($connect, $_POST['date']);
  $start_time= mysqli_real_escape_string($connect, $_POST['start_time']);
  $end_time= mysqli_real_escape_string($connect, $_POST['end_time']);
  $coach_name = mysqli_real_escape_string($connect, $_POST['coach_name']);
  $coach_surname = mysqli_real_escape_string($connect, $_POST['coach_surname']);
  $class_name = mysqli_real_escape_string($connect, $_POST['class_name']);


  $check2="select id from user where name = '".$coach_name."' and surname= '".$coach_surname."' and role = 2";
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
  if($class_name!=$class_coach){
    echo "This coach don't give this class!";die;
  }

  $sqlQuery ="INSERT INTO schedule2 (day,start_time,end_time,id_coach) 
            VALUES('$date','$start_time','$end_time','$coach_id')";
  // echo $sqlQuery;die;
  $result = mysqli_query($connect, $sqlQuery);
  echo "Sucess";

}else{
  echo "Please fill all the fields!";die;
}
$connect -> close();

?>
