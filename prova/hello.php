<?php
$now = new DateTime();
//echo $now->format('Y-m-d H:i:s');    // MySQL datetime format
echo date_format($now,"Y-m-d H:i:s");; 
echo "<br>";
$n=new DateTime();
$next=new DateTime();
$next=date_add($now,date_interval_create_from_date_string("30 days"));
//$next= date_format($now,"Y-m-d H:i:s");
//echo date_format($next,"Y-m-d H:i:s");
$n= date_format($next,"Y-m-d H:i:s");
echo $n;
?>