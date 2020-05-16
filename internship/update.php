<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:../login.php");
}
include "../settings.php";
$email=$_SESSION['email'];
$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$fatname= $_POST['fatname'];
$dob= $_POST['dob'];
$gender= $_POST['gender'];
$category= $_POST['category'];
$address1= $_POST['address1'];
$address2= $_POST['address2'];
$city= $_POST['city'];
$state= $_POST['state'];
$country= $_POST['country'];
$pin= $_POST['pin'];
$landline= $_POST['landline'];
$mobile= $_POST['mobile'];
$matric= $_POST['matric'];
$marticsub= $_POST['marticsub'];
$matricschool= $_POST['matricschool'];
$matricboard= $_POST['matricboard'];
$matricyear= $_POST['matricyear'];
$matricgrade= $_POST['matricgrade'];
$twelveth= $_POST['twelveth'];
$twelvethsub= $_POST['twelvethsub'];
$twelvethschool= $_POST['twelvethschool'];
$twelvethboard= $_POST['twelvethboard'];
$twelvethyear= $_POST['twelvethyear'];
$twelvethgrade= $_POST['twelvethgrade'];
$btechdegree= $_POST['btechdegree'];
$btechbranch= $_POST['btechbranch'];
$btechcollege= $_POST['btechcollege'];
$btechuni= $_POST['btechuni'];
$btechyear= $_POST['btechyear'];
$btechgrade= $_POST['btechgrade'];
$dipname= $_POST['dipname'];
$dipbranch= $_POST['dipbranch'];
$dipcollege= $_POST['dipcollege'];
$dipuni= $_POST['dipuni'];
$dipyear= $_POST['dipyear'];
$dipgrade= $_POST['dipgrade'];
$choice1=$_POST['choice1'];
$choice2=$_POST['choice2'];
$addinfo= $_POST['addinfo'];

$query="UPDATE internship SET fname='$fname', mname='$mname', lname='$lname', fatname='$fatname', dob='$dob', gender='$gender', category='$category', address1='$address1', address2='$address2', city='$city', state='$state', country='$country', pin='$pin', landline='$landline', mobile='$mobile', matric='$matric', marticsub='$marticsub', matricschool='$matricschool', matricboard='$matricboard', matricyear='$matricyear', matricgrade='$matricgrade', twelveth='$twelveth', twelvethsub='$twelvethsub', twelvethschool='$twelvethschool', twelvethboard='$twelvethboard', twelvethyear='$twelvethyear', twelvethgrade='$twelvethgrade', btechdegree='$btechdegree', btechbranch='$btechbranch', btechcollege='$btechcollege', btechuni='$btechuni', btechyear='$btechyear', btechgrade='$btechgrade', dipname='$dipname', dipbranch='$dipbranch', dipcollege='$dipcollege', dipuni='$dipuni', dipyear='$dipyear', dipgrade='$dipgrade', choice1='$choice1', choice2='$choice2', addinfo='$addinfo' WHERE email='$email'";
 
if (!mysql_query($query,$conn)) 
{
$error=die('Error: ' . mysql_error($conn));
echo "<b><font size='3' color='Green'>".$error."</font></b>"; 
}
else
{
mysql_close($conn);?>
<meta http-equiv="refresh" content="0; url=preview.php" />
<?php
}
?>


