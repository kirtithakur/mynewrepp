<?php
session_start();
$con=mysqli_connect("localhost","iitman99","Humblebr@g@2020","iitman99_onlineapp");
if (!isset($_SESSION['email'])){
header("location:../login.php");
}
include "../settings.php";
$email=$_SESSION['email'];
$query="SELECT * from internship WHERE email='$email'";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("onlineapp", $con);
if($data['confirmed']==1)
{
?>

<? }
$row=mysql_num_rows($result);
if($row!=0)
{
?>


<html>
	<head>
		<title> Online Application|Preview </title>
		<link rel="stylesheet" type="text/css" href="login-box.css"/>
	</head>
	<body>

		<center>
			<div class="content">
				<div class="header"></div>
<h1>Preview</h1><table width="100%"><tr><td colspan="4" align="right"><button><b>User: <?php echo $_SESSION['email'];?></button><a href="../logout.php"><button>Logout</button></a></b></td></tr></table>
<table border=1 width="100%">

<tr><td colspan="6"><h3>Personal Details:</h3></td></tr>
<tr><td colspan="6">
<tr><td><b>Name:</td></b><td colspan="5"><?php echo $data['fname']." ". $data['mname']." ".$data['lname'];?><br>
<tr><td><b>Father Name: </b></td> <td colspan="5"><?php echo $data['fatname'];?><br>
<tr><td><b>Address: </b></td><td colspan="5"><?php echo $data['address1'].", ".$data['address2'].", ".$data['city'].", ". $data['state'].", ". $data['country']."-".$data['pin']; ?><br>
<tr><td><b>Date of Birth:</b></td> <td colspan="5"><?php echo $data['dob'];?><br>
<tr><td><b>Gender: </b></td><td colspan="5"><?php echo $data['gender'];?><br>
<tr><td><b>Catagory:</b></td> <td colspan="5"><?php echo $data['category'];?><br>
<tr><td><b>Email:</b> </td><td colspan="5"><?php echo $data['email'];?><br></td></tr>
<tr><td><b>Landline:</b> </td><td colspan="5"><?php echo $data['landline'];?><br></td></tr>
<tr><td><b>Mobile:</b> </td><td colspan="5"><?php echo $data['mobile'];?><br></td></tr>
<tr><td colspan="6"><h3>Academic Details:</h3></td></tr>
<tr><th>Exam</th><th>Branch</th><th>Subjects</th><th>Board/Uni.</th><th>Year</th><th>Grade</th></tr>
<tr><td>Matric/10th</td><td><?php echo $data['marticsub']; ?></td><td><?php echo $data['matricschool']; ?></td><td><?php echo $data['matricboard']; ?></td><td><?php echo $data['matricyear']; ?></td><td><?php echo $data['matricgrade']; ?></td></tr>
<tr><td>12th</td><td><?php echo $data['twelvethsub']; ?></td><td><?php echo $data['twelvethschool']; ?></td><td><?php echo $data['twelvethboard']; ?></td><td><?php echo $data['twelvethyear']; ?></td><td><?php echo $data['twelvethgrade']; ?></td></tr>
<tr><td><?php echo $data['btechdegree']; ?></td><td><?php echo $data['btechbranch']; ?></td><td><?php echo $data['btechcollege']; ?></td><td><?php echo $data['btechuni']; ?></td><td><?php echo $data['btechyear']; ?></td><td><?php echo $data['btechgrade']; ?></td></tr>

<tr><td>Any Other Diploma</td><td><?php echo $data['dipbranch']; ?></td><td><?php echo $data['dipcollege']; ?></td><td><?php echo $data['dipuni']; ?></td><td><?php echo $data['dipyear']; ?></td><td><?php echo $data['dipgrade']; ?></td></tr>


<tr><td colspan="6"><h3>Area of Interest (choice1):</h3></td></tr>

<tr><td>Area of interest (choice1)</td><td colspan="5"><?php echo $data['choice1']; ?></td></tr>
<tr><td>Area of interest (choice2)</td><td colspan="5"><?php echo $data['choice2']; ?></td></tr>


<tr><td colspan="6"><h3>Additional Informations:</h3></td></tr>
<tr><td colspan="6"><?php echo nl2br($data['addinfo']); ?></td></tr>
</table></html><br>

<br>
<a href="edit.php"><button>Edit Your Details</button></a>
<a href="finalize.php"><button>Finalize Your Details</button></a>
<?php
}
?>