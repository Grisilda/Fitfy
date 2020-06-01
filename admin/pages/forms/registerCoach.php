<?php
//session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'xxxx','xxxx','id12990860_fitfydb');

// REGISTER USER
if ($_POST['name']!=null&& $_POST['surname']!=null && $_POST['email']!=null && $_POST['username']!=null && $_POST['gender']!=null && $_POST['age']!=null && $_POST['password']!=null) {
  
  // receive all input values from the form
  $name= mysqli_real_escape_string($db, $_POST['name']);
  $surname= mysqli_real_escape_string($db, $_POST['surname']);
  $age= mysqli_real_escape_string($db, $_POST['age']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $instagram = mysqli_real_escape_string($db, $_POST['instagram']);
  $specialism = mysqli_real_escape_string($db, $_POST['specialism']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $salary = mysqli_real_escape_string($db, $_POST['salary']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
 // $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  $photo;
  if($gender=='Female'){
    $photo='girl.png';
  }else{
    $photo='boy.png';
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' and role=2 LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if(mysqli_num_rows ($result)==0){

    $password = md5($password_1);
    $query = "INSERT INTO user (name,surname,age,email,gender,description,instagram,specialism,username, password,salary,role,photo) 
            VALUES('$name','$surname','$age','$email','$gender','$description','$instagram','$specialism','$username', '$password','$salary','2','$photo')";
    mysqli_query($db, $query)or die(mysqli_error($db));
    echo "Sucess";
  }else{
    echo 'This username or email exists!';die;
  
    die();
    exit();
  }

}else{
    
    echo 'There is an error, please check if your fields are valid!';die;
}
$db -> close();

?>
