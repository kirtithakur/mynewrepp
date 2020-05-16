<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:../login.php");
}
include "../settings.php";
$email=$_SESSION['email'];
$query="SELECT * from msc WHERE email='$email'";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
$row=mysql_num_rows($result);
if($row!=0)
{
?>
<html>
	<head>
		<title> Online Application|Preview </title>
		<link rel="stylesheet" type="text/css" href="../login-box.css"/>
	</head>
	<body>

		<center>
			<div class="content">
				<div class="header"></div>
<h2>You have sucessfully submitted your form </h2>
<table border=1 width="100%">
<tr><td colspan="6"><h3>Personal Details:</h3></td></tr>
<tr><td colspan="6">
<tr><td><b>User ID:</td></b><td colspan="5"><?php echo $data['User_ID']?><br>
<tr><td><b>Name:</td></b><td colspan="5"><?php echo $data['name']?><br>
<tr><td><b>Father Name: </b></td> <td colspan="5"><?php echo $data['ftname'];?><br>
<tr><td><b>Address: </b></td><td colspan="5"><?php echo $data['ad1'].", ".$data['ad2'].", ".$data['city'].", ". $data['state'].", ". $data['country']."-".$data['pin']; ?><br>
<tr><td><b>Date of Birth:</b></td> <td colspan="5"><?php echo $data['dob'];?><br>
<tr><td><b>Gender: </b></td><td colspan="5"><?php echo $data['gender'];?><br>
<tr><td><b>Catagory:</b></td> <td colspan="5"><?php echo $data['catagory'];?><br>
<tr><td><b>Contact No.:</b> </td><td colspan="5"><?php echo $data['phone'];?><br></td></tr>
<tr><td colspan="6"><h3>Academic Details:</h3></td></tr>
<tr><th>Exam</th><th>Subjects</th><th>Marks</th><th>Maximum Marks</th><th>Institute</th><th>Year</th></tr>
<tr><td>Matric/10th</td><td><?php echo $data['msubject']; ?></td><td><?php echo $data['mmarks']; ?></td><td><?php echo $data['mdivision']; ?></td><td><?php echo $data['minstitution']; ?></td><td><?php echo $data['myear']; ?></td></tr>
<tr><td>12th</td><td><?php echo $data['hsubject']; ?></td><td><?php echo $data['hmarks']; ?></td><td><?php echo $data['hdivision']; ?></td><td><?php echo $data['hinstitution']; ?></td><td><?php echo $data['hyear']; ?></td></tr>
<tr><td>Graduation</td><td><?php echo $data['gsubject']; ?></td><td><?php echo $data['gmarks']; ?></td><td><?php echo $data['gdivision']; ?></td><td><?php echo $data['ginstitute']; ?></td><td><?php echo $data['gyear']; ?></td></tr>
<tr><td>Any Other Diploma</td><td><?php echo $data['odegree']; ?></td><td><?php echo $data['omarks']; ?></td><td><?php echo $data['odivision']; ?></td><td><?php echo $data['oinstitution']; ?></td><td><?php echo $data['oyear']; ?></td></tr>
<tr><td colspan="6"><h3>Qualifying Exam Details:</h3></td></tr>
<tr><th>Exam</th><th colspan="2">Date</th><th>Marks</th><th>Rank</th><th>Score Valid</th></tr>
<tr><td><?php echo $data['qexam']; ?></td><td colspan="2"><?php echo $data['qdate']; ?></td><td><?php echo $data['qmarks']; ?></td><td><?php echo $data['qrank']; ?></td><td><?php echo $data['qvalid']; ?></td></tr>
</table>
<?php
}
?>
<br>
<font color="red">**You don't need to send any hard copy to us. You can print this page just for your reference.<br></font>
<br>
<button onclick="myFunction()">Print This Page</button>
<a href="../logout.php"><button>Logout</button></a>
<script>
function myFunction() {
    window.print();
}
</script>
<div class="footer"></div></div>


