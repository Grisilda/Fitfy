<?php
function slack($message, $channel)
{
// echo "Hereds";die;
    $ch = curl_init("https://slack.com/api/chat.postMessage");
    $data = http_build_query([
        "token" => "xxxxxx",
        "channel" => $channel, //"#mychannel",
        "text" => $message, //"Hello, Foo-Bar channel message.",
        "username" => "MySlackBot",
    ]);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    
    return $result;
}
	if (isset($_POST['name'])) {
   	 $name = $_POST['name'];
	}
	if (isset($_POST['email'])) {
   	 $email = $_POST['email'];
 
	}
	if (isset($_POST['subject'])) {
   	 $subject = $_POST['subject'];
	}
	if (isset($_POST['message'])) {
   	 $message = $_POST['message'];
	}
	slack('The user with name '.$name.' with email '.$email.' and subject '.$subject.'.Sended this message: '.$message.'.', '#kizlar-team');
	
	echo '<script type="text/javascript">';
	echo 'window.location = "https://fitfy.000webhostapp.com/index.html";';
	echo '</script>';
?>
