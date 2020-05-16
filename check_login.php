<?php
include "settings.php";
$email=$_POST['email'];
$password=md5($_POST['password']);
$query="SELECT * from user WHERE email='$email' AND Password='$password'";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
$row=mysql_num_rows($result);
if($row!=0)
{
	
	if($data['Active']!=1)
		echo "<b><font size='3' color='Green'> Please login to address ".$data['Email']." and activate you account by clicking on the activation link. </font></b>";
	else
	{
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;?>
		<meta http-equiv="refresh" content="0; url=http://iitmandi.ac.in/onlineapp/index.php">
		<?php
	}
	
}
else
echo "<b><font size='3' color='Green'> You are not registered or using wrong credentials. Please <a href='register.php'>register here</a></font></b>";
?>