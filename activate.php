<meta http-equiv="refresh" content="3; url=http://iitmandi.ac.in/onlineapp/login.php" />
<?php
include "settings.php";
$id=$_GET['id'];
$email=$_GET['Email'];
$query="UPDATE user SET Active=1 WHERE id='id' AND Email='$email'";	
if (!mysql_query($query,$conn)) 
{
  die('Error in Activation:: ' . mysql_error($conn));
}
echo "Your account is active now.";
?>
