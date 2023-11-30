<?php

function genNewPassword(){
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = strtoupper($letters);
    $numbers = '0123456789';
    $passwordLength= $_GET['passwordLength'];
    $password='';
while(strlen($password) < $passwordLength){
$elements= $symbols.$letters.$upLetters.$numbers;
$pippo= $elements[rand(0, strlen($elements) -1)];
$password .= $pippo;
}
return $password;
}
?>
