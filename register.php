<?php
include "settings.php";
$email=$_POST['email'];
$password=md5($_POST['password']);
?>
<html>
<head>
<script language='javascript' type='text/javascript'>
function check(input) {
if (input.value != document.getElementById('password').value) {
input.setCustomValidity('Password Must be Matching.');
} else {
input.setCustomValidity('');
}
}
</script>
<title>
Register|IIT Mandi
</title>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>
<body><center>
<div class="content">
<div class="header"></div>
<?php
if($email=="")
{
?>	<div id="login-box">
	<form name="register" id="customForm" action="register.php" method="post">
		<table border="1">
			<tr><td colspan="3"><b>Registration</b></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td>Email-ID*</td><td><input type="email" id="email" name="email"required /></td></tr>
			<tr><td>Password*</td><td><input type="password" name="password" id="password" required /></td></tr>   
			<tr><td>Confirm Password*</td><td><input type="password" name="conf_pwd" id="conf_pwd" required oninput="check(this)" /></td></tr>   
			<tr><td><td></td></td></tr><tr><td><td></td></td></tr>
			<tr><td></td><td><input id="submit" type="submit" name="submit" value="Register"   /></td></tr>
				</table></form>
</div>
<?php 
} 
else
{
$query="INSERT INTO user(Password, Email, Active) VALUES ('$password', '$email',0)";	
if (!mysql_query($query,$conn)) {
  echo "\n\n\nEmail Address ".$email. " already exist in the database";
  
}
else
{
$query="SELECT User_ID from user where Email='$email'";	
$result=mysql_query($query);
$data=mysql_fetch_array($result);
$message="Dear Candidate,\n\n Click on below link to confirm your registration: \n\n http://iitmandi.ac.in/onlineapp/activate.php?User_ID=".$data['User_ID']."&Email=".$email."\n\n\nRegards \nIIT Mandi, Near Bus Stand
Mandi - 175 001, Himachal Pradesh
India";
mail($email,"Activation Link",$message,"From: support.iitmandi.ac.in\n");
echo "<b><font size='3' color='#fffff'> Your account has been created and an activation link has been sent to the address ".$email." Note that you must activate the account by clicking on the activation link when you get the e-mail before you can login. <br><font size='3' color='red'> Please check your spam folder also if activation link is not in your inbox.</font></font></b>";
}
}
?><?php include "menu.php";?>
<div class="footer"></div>
</div>
</center>
</body>
</center>
</body>
</html>
