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
if($data['confirmed']==1)
{
?>
<meta http-equiv="refresh" content="0; url=print.php" />
<?php }
?>
<html>
	<head>
		<title> Online Application|Home </title>
		<link rel="stylesheet" type="text/css" href="../login-box.css"/>
	</head>
	<body>

		<center>
			<div class="content">
				<div class="header"></div>
<p align="left">User: <?php echo $_SESSION['email'];?></p>

<form method="post" action="update.php">
		
<hr>			
<table bgcolor="EEEEE" width="100%">
<tr><td colspan="3"> <h3><br>Personal Details</h1></td></tr>
	<tr>
		<td>Name:</td>
		<td><input name= "name" maxlength="255" size="60" value="<?php echo $data['name']?>" required/>
		Father's Name:<input name= "ftname"  value="<?php echo $data['ftname'];?>" maxlength="255" size="40" required />
	</tr>
	<tr>
		<td>Address:</td>
		<td><label>Line1</label><input name="ad1" value="<?php echo $data['ad1'];?>" size="18" type="text" required /> 
		<label>Line 2</label><input   name="ad2" value="<?php echo $data['ad2'];?>" size="18" type="text" required />
		<label>City</label><input   name="city"  value="<?php echo $data['city'];?>" size="12" type="text"  required />
		<label>State</label><input   name="state" value="<?php echo $data['state'];?>" size="15" type="text" required />
		<label>PIN</label><input   name="pin" maxlength="6" value="<?php echo $data['pin'];?>"  size="10" type="text" required />
		<label>Country</label><input   Name="country" maxlength="15" value="<?php echo $data['country'];?>" size="10" type="text"  required />
		
</td></tr>
<tr><td>Date of Birth:</td>
	<td><label>DD/MM/YYYY </label> <input name="dob" size="15" maxlength="10"  value="<?php echo $data['dob'];?>" type="text"  required />
	
Gender:<select name="gender">
	<option value="<?php echo $data['gender'];?>" selected=""><?php echo $data['gender'];?></option>
        <option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Other" >Other</option>
		</select>
Catagery: 
		<select name="catagory"> 
                <option value="<?php echo $data['catagory'];?>" selected=""><?php echo $data['catagory'];?></option>
		<option value="GN" >GN</option>
		<option value="SC" >SC</option>
		<option value="ST" >ST</option>
		<option value="OBC" >OBC</option>
</select>

Contact No:<input name="aemail" maxlength="255" size="37" value="<?php echo $data['aemail'];?>" ><br>
</td></tr>

</table>
		
<hr>
<table bgcolor="EEEEE" width="100%">
<tr><td><h3><br>Academic Details</h3></td></tr>
<tr><td>Matriculation/10th:</td>
<td><label>Subject</label><input name="msubject" maxlength="255" value="<?php echo $data['msubject'];?>" size="30"  required />
<label>Marks</label><input name= "mmarks" value="<?php echo $data['mmarks'];?>" maxlength="5" size="5"  required />
<label>Maximum Marks</label><input name= "mdivision" value="<?php echo $data['mdivision'];?>" maxlength="5" size="5"  required />
<label>Institution</label><input name="minstitution" maxlength="255" size="30"  value="<?php echo $data['minstitution'];?>" required />
<label>Year</label><input name="myear" maxlength="5" size="5" required value="<?php echo $data['myear'];?>" />
</td>
</tr>
<tr><td>Higher Secondary/12th:</td>
<td><label>Subject</label><input name="hsubject" maxlength="255" size="30"  value="<?php echo $data['hsubject'];?>" required />
<label>Marks</label><input name="hmarks" maxlength="5" size="5" value="<?php echo $data['hmarks'];?>" required />
<label>Maximum Marks</label><input name= "hdivision" value="<?php echo $data['hdivision'];?>" maxlength="5" size="5"  required />
<label>Institution</label><input name="hinstitution" maxlength="255" size="30"  value="<?php echo $data['hinstitution'];?>" required />
<label>Year</label><input name="hyear" maxlength="4" size="5" required value="<?php echo $data['hyear'];?>" />
</td>
</tr>
<tr><td>Graduation:</td>
<td><label>Subject</label><input name="gsubject" maxlength="255" size="30" value="<?php echo $data['gsubject'];?>" required />
<label>Marks</label><input name=" gmarks" maxlength="5" size="5"  value="<?php echo $data['gmarks'];?>" />
<label>Maximum Marks</label><input name= "gdivision" value="<?php echo $data['gdivision'];?>" maxlength="5" size="5" />
<label>Institution</label><input name="ginstitute" maxlength="255" size="30"  value="<?php echo $data['ginstitute'];?>" />
<label>Year</label><input name="gyear" maxlength="4" size="5" value="<?php echo $data['gyear'];?>"/>
</td>
</tr>
<tr><td>Other Degree/Diploma</td>
<td><label>Name </label><input name="odegree" maxlength="255" size="30"  value="<?php echo $data['odegree'];?>" />
<label>Marks</label><input name="omarks" maxlength="5" size="5"  value="<?php echo $data['omarks'];?>" />
<label>Maximum Marks</label><input name= "odivision" value="<?php echo $data['odivision'];?>" maxlength="5" size="5" />
<label>Institution</label><input name="oinstitution" maxlength="255" size="30"  value="<?php echo $data['oinstitution'];?>" />
<label>Year</label><input name="oyear"maxlength="4" size="5"   value="<?php echo $data['oyear'];?>" /><br>
</td>
</tr>
</table>
<hr>
<table bgcolor="EEEEE" width="100%">
<tr><td><h3><br>Qualifying Exam Details</h3></td></tr>
<tr><td>Name of Exam:<select name="qexam">
                                <option value="<?php echo $data['qexam'];?>" selected="selected"> <?php echo $data['qexam'];?></option>
				<option value="B.Sc. Chemistry Major"> B.Sc. Chemistry Major </option>
                                <option value="B.Sc. Applied Sciences"> B.Sc. Applied Sciences </option>
		
</select>
Date: 
<label> DD/MM/YYYY <input size="15" name="qdate" maxlength="10" value="<?php echo $data['qdate']; ?>" type="text" required />

<label>Marks</label><input name="qmarks" maxlength="5" size="5"  value="<?php echo $data['qmarks'];?>" />

<label>All India Rank </label><input name="qrank" maxlength="255" size="24"  value="<?php echo $data['qrank'];?>" required />
<label>Score Valid</label> <select name="qvalid" > 
<option value="<?php echo $data['qvalid'];?>" selected=""> <?php echo $data['qvalid'];?></option>
		<option value="Yes">Yes</option>
                <option value="No">No</option>

</select>
</td>
</tr>
</table>
<hr>
<table bgcolor="EEEEE" width="100%">
<tr align="center"><td>
<input type="submit" value="Submit" />
<input type="reset" value="Reset" />
</td>
</tr>
</table>
		</form>	
				
				<div class="footer"></div>
			</div>
		</center>
	</body>
</html>
