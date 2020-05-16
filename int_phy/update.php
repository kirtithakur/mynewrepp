<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:../login.php");
}
include "../settings.php";
$email=$_SESSION['email'];
$name= $_POST['name'];
$ftname= $_POST['ftname'];
$ad1= $_POST['ad1'];
$ad2= $_POST['ad2'];
$city= $_POST['city'];
$state= $_POST['state'];
$pin= $_POST['pin'];
$country= $_POST['country'];
$dob= $_POST['dob'];
$gender= $_POST['gender'];
$catagory= $_POST['catagory'];
$phone= $_POST['phone'];
$msubject= $_POST['msubject'];
$mmarks= $_POST['mmarks'];
$mdivision= $_POST['mdivision'];
$minstitution= $_POST['minstitution'];
$myear= $_POST['myear'];
$hsubject= $_POST['hsubject'];
$hmarks= $_POST['hmarks'];
$hdivision= $_POST['hdivision'];
$hinstitution= $_POST['hinstitution'];
$hyear= $_POST['hyear'];
$gsubject= $_POST['gsubject'];
$minsubject= $_POST['minsubject'];
$gmarks= $_POST['gmarks'];
$gdivision= $_POST['gdivision'];
$ginstitute= $_POST['ginstitute'];
$gresult= $_POST['gresult'];
$gyear= $_POST['gyear'];
$odegree= $_POST['odegree'];
$omarks= $_POST['omarks'];
$odivision= $_POST['odivision'];
$oinstitution= $_POST['oinstitution'];
$oyear= $_POST['oyear'];
$qexam= $_POST['qexam'];
$qdate= $_POST['qdate'];
$qmarks= $_POST['qmarks'];
$qrank= $_POST['qrank'];
$qvalid= $_POST['qvalid'];
$query="UPDATE int_phy SET name='$name', ftname='$ftname', ad1='$ad1', ad2='$ad2', city='$city', state='$state', pin='$pin', country='$country', dob='$dob', gender='$gender', catagory='$catagory', phone='$phone', msubject='$msubject', mmarks='$mmarks', mdivision='$mdivision', minstitution='$minstitution', myear='$myear', hsubject='$hsubject', hmarks='$hmarks', hdivision='$hdivision', hinstitution='$hinstitution', hyear='$hyear', gsubject='$gsubject',  minsubject='$minsubject', gmarks='$gmarks', gdivision='$gdivision', ginstitute='$ginstitute', gresult='$gresult', gyear='$gyear', odegree='$odegree', omarks='$omarks', odivision='$odivision', oinstitution='$oinstitution', oyear='$oyear', qexam='$qexam', qdate='$qdate', qmarks='$qmarks', qrank='$qrank', qvalid='$qvalid' WHERE email='$email'";
 
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

