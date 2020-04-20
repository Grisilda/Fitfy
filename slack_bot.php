<?php
$event = file_get_contents("php://input");
$eventArray = json_decode($event, TRUE);
print_r($event) ;
file_get_contents("https://slack.com/api/chat.postMessage?token=xoxb-1017216968501-1027139985682-YxeATSUn2B8fmTV3SgBfBjNS&channel=D010T43V3V0&text=hi");
?>