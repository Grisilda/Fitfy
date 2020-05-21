<?php
//session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'xxxx','xxxx','id12990860_fitfydb');

// REGISTER USER
//if (isset($_POST['reg_user'])) {
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
//  $namei = $_FILES['file']['name'];
  $namei= mysqli_real_escape_string($db,$_POST['file']);
        $target_dir = "upload/";
        //$target_file = $target_dir . basename($_FILES["file"]["name"]);
         $target_file = $target_dir . basename($namei);

 // $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  //if ($password_1 != $password_2) {
    //array_push($errors, "The two passwords do not match");
  //}
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' and role=2 LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if(mysqli_num_rows ($result)==0){
  /*if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }*/

  // Finally, register user if there are no errors in the form
  //if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
  if( in_array($imageFileType,$extensions_arr) ){
     $query = "INSERT INTO user (name,surname,age,email,gender,description,instagram,specialism,photo,username, password,salary,role) 
            VALUES('$name','$surname','$age','$email','$gender','$description','$instagram','$specialism','$namei','$username', '$password','$salary','2')";
      mysqli_query($db, $query)or die(mysqli_error($db));
       move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$namei);
    //    $_SESSION['username'] = $username;
      //$_SESSION['success'] = "You are now logged in";
      //echo "success";
     // echo $username;
     }
    echo "Sucess";
    }else{
     // echo "Here";die;
      echo 'This username or email exists!';die;
  
      die();
      exit();
    }
    }else{
    
      echo 'An error happend, please check if your fields are valid!';die;
    }
    $db -> close();

?>
