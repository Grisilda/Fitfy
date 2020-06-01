<?php 


 // Include configuration file 
 include'config.php'; 
 include'dbConnect.php';
 // Include database connection file 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$today = date('Y-m-d');
//echo $today;
$email_results=$db->query("SELECT email FROM user INNER JOIN payments ON user.username = payments.username WHERE end_date="."'$today'"." and role=3");
while ($row2=mysqli_fetch_array($email_results,MYSQLI_BOTH)) {
			//echo " hello ".$row2['email']." ";
			# code...
			//$i++;
//echo $row2['email'];
$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587; 
$mail->SMTPSecure = 'tls'; 
$mail->SMTPAuth = true;
$mail->Username = 'teacela96@gmail.com'; // email
$mail->Password = 'testingemail'; // password
$mail->setFrom('teacela96@gmail.com', 'Fitfy payment'); // From email and name
$mail->addAddress($row2['email']); // to email and name
$mail->Subject = 'Complete payment for next 30 days';
$mail->msgHTML('Hello!<br> This is an email sent to inform to you about the end of payment subscription in Fitfy Fitness. <a href="https://fitfy.000webhostapp.com/payment/Pindex.php" >Please click here to make your payment for  next 30 days </a> <br><br> Thank you,<br> Fitfy team!'); 
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
	$db->query("DELETE FROM user WHERE email="."'$em'"."and role=3");
	$db->query("DELETE FROM payments WHERE username="."'$us'");
    echo "Message sent!";
}
}
		
		$db->close();
?>
