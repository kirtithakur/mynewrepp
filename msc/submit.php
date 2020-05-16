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
$dob= $_POST['dobd']."/".$_POST['dobm']."/".$_POST['doby'];
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
$qdate= $_POST['qdd']."/".$_POST['qmm']."/".$_POST['qyy'];
$qmarks= $_POST['qmarks'];
$qrank= $_POST['qrank'];
$qvalid= $_POST['qvalid'];
$query="SELECT * from msc WHERE email='$email'";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
$row=mysql_num_rows($result);
if($row==0)
{
$query="INSERT INTO msc (email, name, ftname, ad1, ad2, city, state, pin, country, dob,gender, catagory, phone, msubject, mmarks, mdivision, minstitution, myear, hsubject, hmarks, hdivision, hinstitution, hyear, gsubject, minsubject, gmarks, gdivision, ginstitute, gresult, gyear, odegree, omarks, odivision, oinstitution, oyear, qexam, qdate, qmarks, qrank, qvalid, confirmed) VALUES ('$email', '$name', '$ftname', '$ad1', '$ad2', '$city', '$state', '$pin', '$country', '$dob', '$gender', '$catagory', '$phone', '$msubject', '$mmarks', '$mdivision', '$minstitution', '$myear', '$hsubject', '$hmarks', '$hdivision', '$hinstitution', '$hyear', '$gsubject', '$minsubject', '$gmarks', '$gdivision', '$ginstitute', '$gresult', '$gyear', '$odegree', '$omarks', '$odivision', '$oinstitution', '$oyear', '$qexam', '$qdate', '$qmarks', '$qrank', '$qvalid',2)";
if (!mysql_query($query,$conn)) {
$error=die('Error: ' . mysql_error($conn));
echo "<b><font size='3' color='Green'>".$error."</font></b>"; 
}
else
{
mysql_close($conn);?>
<meta http-equiv="refresh" content="0; url=preview.php" />
<?php
}
}
else
{
echo "Email Already Exist";?>
<meta http-equiv="refresh" content="2; url=preview.php" />
<?php
}
?>

