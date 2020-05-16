<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:../login.php");
}
include "../settings.php";
$email=$_SESSION['email'];
$query="UPDATE int_phy SET confirmed=1";
 
if (!mysql_query($query,$conn)) 
{
$error=die('Error: ' . mysql_error($conn));
echo "<b><font size='3' color='Green'>".$error."</font></b>"; 
}
else
{
mysql_close($conn);?>
<meta http-equiv="refresh" content="0; url=print.php" />
<?php
}
?>

