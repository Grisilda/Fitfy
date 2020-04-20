<?php

// $email=$_POST['email'];
// $to = $email;
// $subject = "Require password"; 
// $message = '<html><body>';
// $message .= "<p>By clicking here you can go to login page</p>";
// $message .= "<h3>Your password is:".$passwordRequire."</h3>";
// $message .= "<a href='http://localhost/seminar/logim.html'> Link</a>"; 
// $message .= "</body></html>";
// $from = 'grixkbb@gmail.com';
 
// // Sending email
// if(mail($to, $subject, $message)){
//     echo 'Your mail has been sent successfully.';
// } else{
//     echo 'Unable to send email. Please try again.';
// }


$connect=mysqli_connect('localhost','id12990860_kizlar','grisilda123','id12990860_fitfydb') or die('Couldnt connect');
$email=$_POST["email"];
$query="Select password from users where email="."'$email'";
$data=mysqli_query($connect,$query);
while ($row = mysqli_fetch_array($data)) {
        $passwordRequire=$row[0];
}
// print_r($passwordRequire);die;

if(mysqli_num_rows ($data)!=0){
	$to = $email;
	$subject = "Require password"; 
	$message = "Please click here to restore your account: https://fitfy.000webhostapp.com/user/email/html/restoreAccount.html"; 
	$from = 'grixkbb@gmail.com';
	 
	// Sending email
	if(mail($to, $subject, $message)){
	    header("Location: ../html/restor.html");
	    echo 'Your mail has been sent successfully.';
	} else{
	    echo 'Unable to send email. Please try again.';
	}
   
}
mysql_close($connect);
?>