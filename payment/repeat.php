<?php 



 // Include configuration file 
 include'config.php'; 
 include'dbConnect.php';  // Include database connection file 



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$today = date('Y-m-d');

		$email_results=$db->query("SELECT email FROM users INNER JOIN payments ON users.username = payments.username WHERE end_date="."'$today'");
		while ($row2=mysqli_fetch_array($email_results,MYSQLI_BOTH)) {
			


$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587; 
$mail->SMTPSecure = 'tls'; 
$mail->SMTPAuth = true;
$mail->Username = 'xxx@gmail.com'; 
$mail->Password = 'xxx'; 
$mail->setFrom('xxx@gmail.com', 'Fitfy payment'); 
$mail->addAddress($row2['email']); 
$mail->Subject = 'Complete payment for next 30 days';
$mail->msgHTML('Hello!<br> <a href="https://fitfy.000webhostapp.com/payment/Pindex.php" >Please click here to make your payment for  next 30 days </a> <br><br> Thank you, Fitfy team!');
$mail->AddAttachment('https://fitfy.000webhostapp.com/payment/Pindex.php');
$mail->AltBody = 'HTML messaging not supported'; 

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
	$em=$row2['email'];
	$getUsername=$db->query("SELECT username FROM payments WHERE end_date="."'$today'");
	$row3=mysqli_fetch_array($getUsername,MYSQLI_BOTH);
	$us=$row3['username'];
	$db->query("DELETE FROM users WHERE email="."'$em'");
	$db->query("DELETE FROM payments WHERE username="."'$us'");
    echo "Message sent!";
}
}
			
?>
