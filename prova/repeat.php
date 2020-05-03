<?php 

//set_time_limit(0); 
//ignore_user_abort(true);

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
//$today->format('Y-m-d');
//$sql = "SELECT end_date FROM payments";
//$results = $db->query($sql);
//$i=0;
//while ($row=mysqli_fetch_array($results,MYSQLI_BOTH)) {
//	if($row['end_date']==$today)
//	{
		$email_results=$db->query("SELECT email FROM users INNER JOIN payments ON users.username = payments.username WHERE end_date="."'$today'");
		while ($row2=mysqli_fetch_array($email_results,MYSQLI_BOTH)) {
			//echo " hello ".$row2['email']." ";
			# code...
			//$i++;



$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'xxx@gmail.com'; // email
$mail->Password = 'xxx'; // password
$mail->setFrom('xxx@gmail.com', 'Fitfy payment'); // From email and name
$mail->addAddress($row2['email']); // to email and name
$mail->Subject = 'Complete payment for next 30 days';
$mail->msgHTML('Hello!<br> <a href="https://fitfy.000webhostapp.com/prova/Pindex.php" >Please click here to make your payment for  next 30 days </a> <br><br> Thank you, Fitfy team!'); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
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
	$em=$row2['email'];
	$getUsername=$db->query("SELECT username FROM payments WHERE end_date="."'$today'");
	$row3=mysqli_fetch_array($getUsername,MYSQLI_BOTH);
	$us=$row3['username'];
	$db->query("DELETE FROM users WHERE email="."'$em'");
	$db->query("DELETE FROM payments WHERE username="."'$us'");
    echo "Message sent!";
}
}
			/*$to = $row2['email'];
	$subject = "Repeat payment "; 
	$message = "Please click here to make your payment for  next 30 days: https://fitfy.000webhostapp.com/prova/Pindex.php"; 
	$from = 'teacela96@gmail.com';

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ". $from. "\r\n";
$headers .= "Reply-To: ". $from. "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "X-Priority: 1" . "\r\n";
	 
	// Sending email
	$retval=mail('ermelinda_ela@yahoo.com', $subject, $message,$headers);
	if($retval == true ){
	   // header("Location: ../html/restor.html");
	    echo 'Your mail has been sent successfullyyy.';
	} else{
	    echo 'Unable to send email. Please try again.';
	}
		}
		*/

		//echo "today";
		//echo $row['end_date'];
	//}
	//$i++;
//}
?>
