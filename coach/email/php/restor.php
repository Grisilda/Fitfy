<?php
session_start();


 // Include database connection file 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

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


$connect=mysqli_connect('localhost','xxxx','xxxx','xxxx') or die('Couldnt connect');
$email=$_POST["email"];
$query="Select username,password from user where email="."'$email'"." and role = 2";
$data=mysqli_query($connect,$query);
while ($row = mysqli_fetch_array($data)) {
        $username=$row[0];
        $passwordRequire=$row[1];
        $_SESSION["username_email"] = $username;
}
// print_r($passwordRequire);die;

if(mysqli_num_rows ($data)!=0){
	// $to = $email;
	// $subject = "Require password"; 
	// $message = "Please click here to restore your account: https://fitfy.000webhostapp.com/user/email/html/restoreAccount.html"; 
	// $from = 'xxxx@gmail.com';
	 
	// // Sending email
	// if(mail($to, $subject, $message)){
	//     header("Location: ../html/restor.html");
	//     echo 'Your mail has been sent successfully.';
	// } else{
	//     echo 'Unable to send email. Please try again.';
	// }
	$mail = new PHPMailer;
	$mail->isSMTP(); 
	$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
	$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
	$mail->Port = 587; // TLS only
	$mail->SMTPSecure = 'tls'; // ssl is deprecated
	$mail->SMTPAuth = true;
	$mail->Username = 'xxxxx@gmail.com'; // email
	$mail->Password = 'xxxxx'; // password
	$mail->setFrom('xxxxx@gmail.com', 'Fitfy Fitness'); // From email and name
	$mail->addAddress($email); // to email and name
	$mail->Subject = 'Require password';
	$mail->msgHTML('Hi '.$username.',
		<br><br> You recently requested to reset your password for your Fitfy account. Please click to the button below in order to reset it.
		<br><br>

	<a href="https://fitfy.000webhostapp.com/coach/email/html/restoreAccount.html" style="background-color: #f34e3a;
    border-color: #f34e3a;color: #fff;display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    border-radius: 4px;">Reset password </a>
    <br><br> 
    Thanks,<br>
    Fitfy team'); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
	$mail->AddAttachment('https://fitfy.000webhostapp.com/prova/Pindex.php');
	$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
	// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
	$mail->SMTPOptions = array(
	                    'ssl' => array(
	                        'verify_peer' => false,
	                        'verify_peer_name' => false,
	                        'allow_self_signed' => true
	                    )
	                );
	if(!$mail->send()){
	    echo "Mailer Error: " . $mail->ErrorInfo;
		//echo "string";
	}else{
	    header("Location: https://fitfy.000webhostapp.com/coach/email/html/restor.html");
	    echo "Message sent!";
	}
   
}
?>
