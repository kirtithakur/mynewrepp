<html>
<head>
<title>
Login|IIT Mandi
</title>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<div class="content">
<div class="header"></div>
<?php
$option=$_GET['option'];
if($option!=2)
{
$option=1;
?>
<div id="login-box">
	<h2>Login</h2><br><br>
			<form name="form1" id="customForm" action="check_login.php" method="post">
			<table>
			<tr><td><label for="email">Email</label></td><td><input type="textbox" name="email" id="username" required /></td></tr>
			<tr><td><label for="password">Password</label></td><td><input type="password" name="password" id="password" required /></td></tr><tr><td></td><td>
			<input type="submit" id="submit" name="submit" value="Submit"/>&nbsp&nbsp
			<input type="reset" id="reset" name="reset" value="Reset"/></td></tr></table><br>
                        <a href="login.php?option=2">Forgot Password</a><br>
                        <a href="register.php">New users can register here</a>
			</form>
<?php
}
?>
<?php
if($option==2)
{
?>
<div id="login-box">
			<h2>Forgot Password</h2><br><br><br><br><br> 
			<form name="form2" id="customForm" action="forgot.php" method="post">
			<table><tr><td><label for="email">Enter Your Email ID</label></td><td><input type="textbox" name="email" id="email" required /></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td></td><td><input type="submit" id="submit" name="submit" value="Send"/></td></tr></table>
			</form>

<?php
}
?>
</div>
<div class="footer"></div></div>
</center>
</body>
</html>

</html>
