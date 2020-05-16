<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:../login.php");
}
include "../settings.php";
$email=$_SESSION['email'];
$query="SELECT * from int_phy WHERE email='$email'";
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
<h4 class="right"><button><b>User: <?php echo $_SESSION['email'];?></button><a href="../logout.php"><button>Logout</button></a></b></h4>

<form method="post" action="update.php">

<table width="100%">
<tr><td colspan="3"> <h3><br>Personal Details</h1></td></tr>


<tr><td><label>Name</label>:<font color="red">*</font></td><td><input name= "name" maxlength="255" value="<?php echo $data['name']?>"required/></td><td><label>Address Line1: <font color="red">*</font></label></td><td><input name="ad1"  type="text"value="<?php echo $data['ad1']?>"  /></td></tr>

<tr><td><label>Father's Name</label>:<font color="red">*</font></td><td><input name= "ftname"  maxlength="255" required  value="<?php echo $data['ftname']?>"/></td><td><label> Address Line2:<font color="red">*</font> &nbsp</label></td><td><input   name="ad2" type="text" required value="<?php echo $data['ad2']?>"/></td></tr>

        <tr>
                <td><label>Email</label>:</td>
                <td><input   name="email"   type="text"  value="<?php echo $_SESSION['email'];?>" readonly/></td>
		<td><label>City</label>:</td>
                <td><input   name="city"   type="text"  required value="<?php echo $data['city']?>"/></td>
        </tr>

 

        <tr>
               <td><label>Date of Birth</label>:<font color="red">*</font></td>
	       <td><input name="dob" size="15" maxlength="10"  value="<?php echo $data['dob'];?>" type="text"  required /></td>  <td><label>State:<font color="red">*</font></label></td>
		<td><input name="state" type="text" required  value="<?php echo $data['state']?>"/></td>
               
         </tr>
         <tr> 
                <td><label>Gender</label>:<font color="red">*</font></td>
                <td><select name="gender">
	<option value="<?php echo $data['gender'];?>" selected=""><?php echo $data['gender'];?></option>
        <option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Other" >Other</option>
		</select>
                 <label>Category</label>:<font color="red">*</font> 
		      <select name="catagory"> 
                <option value="<?php echo $data['catagory'];?>" selected=""><?php echo $data['catagory'];?></option>
		<option value="GN" >GN</option>
		<option value="SC" >SC</option>
		<option value="ST" >ST</option>
		<option value="OBC" >OBC</option>
</select></td><td><label>Country:<font color="red">*</font></label></td>
		<td><input name="country" type="text" required  value="<?php echo $data['country']?>"/></td>
                
          </tr>

<tr> <td><label>Contact Number</label>:<font color="red">*</font> </td>
                 <td><input name="phone" maxlength="15"  type="text" value="<?php echo $data['phone']?>"/><br></td>
<td><label>PIN:<font color="red">*</font></label></td><td><input   name="pin" maxlength="6"  type="text"  required value="<?php echo $data['pin']?>"/></td>

              
        </tr>
</table>
<hr>
<table width="100%">
<table width="100%">
<tr><td><h3><br>Academic Details</h3></td></tr>
<tr><td colspan="2"><b>Matriculation/10th:</b></td><tr>
<td><label>Subject <font color="red">*</font></label><input name="msubject" maxlength="255"    value="<?php echo $data['msubject']?>" /></td>
<td><label>Marks Obtained<font color="red">*</font></label> <input size="5" name= "mmarks" maxlength="5"    value="<?php echo $data['mmarks']?>" /></td>
<td><label>Maximum Marks <font color="red">*</font></label><input size="5" name= "mdivision" maxlength="5"    value="<?php echo $data['mdivision']?>" /></td>
<td><label>Institution <font color="red">*</font></label><input name="minstitution" maxlength="255"   value="<?php echo $data['minstitution']?>" /></td>
<td><label>Year <font color="red">*</font></label><input name="myear" maxlength="5" size="5"   value="<?php echo $data['myear']?>" />
</td>
</tr>
<tr><td colspan="2"><b>Higher Secondary/12th: </b></td><tr>
<td><label>Subject<font color="red">*</font></label> <input name="hsubject" maxlength="255"   value="<?php echo $data['hsubject']?>"/></td>
<td><label>Marks Obtained <font color="red">*</font></label><input size="5" name="hmarks" maxlength="5"   value="<?php echo $data['hmarks']?>" /></td>
<td><label>Maximum Marks<font color="red">*</font></label><input size="5" name= "hdivision" maxlength="5"    value="<?php echo $data['hdivision']?>" /></td>
<td><label>Institution<font color="red">*</font> </label><input name="hinstitution" maxlength="255"    value="<?php echo $data['hinstitution']?>" /></td>
<td><label>Year <font color="red">*</font></label><input name="hyear" maxlength="4"  size ="5"  value="<?php echo $data['hyear']?>" /></td>
</td>
</tr>
<tr><b><td colspan="2"><b>Graduation:</b></td><tr>
<td><label>Major Subjects <font color="red">*</font></label><input name="gsubject" maxlength="255" size="20"  value="<?php echo $data['gsubject']?>" /></td>
<td><label>Minor Subjects <font color="red">*</font></label><input name="minsubject" maxlength="255"  value="<?php echo $data['minsubject']?>" size="20"/></td>
<td><label>Institution <font color="red">*</font></label><input name="ginstitute" maxlength="255"  value="<?php echo $data['ginstitute']?>" size="20"/></tr></td>
<tr><td>
<label>Result Status</label><select name="gresult"> 
<option value="<?php echo $data['gresult'];?>" selected=""> <?php echo $data['gresult'];?></option>
		      <option value="Awaited">Awaited</option>
	<option value="Completed" >Completed</option>

                      </select></td>
<td><label>Marks Obtained </label><input size="5" name=" gmarks" maxlength="5"  value="<?php echo $data['gmarks']?>"/></td>
<td><label>Maximum Marks </label><input size="5" name= "gdivision" maxlength="5"  value="<?php echo $data['gdivision']?>"/></td>

<td><label>Year </label><input name="gyear" maxlength="4" size="5" />
</td>
</tr>
<tr><td colspan="2"><b>Other Qualification (Degree/Diploma):</b></td><tr>
<td><label>Name &nbsp </label><input name="odegree" maxlength="255"  value="<?php echo $data['odegree']?>"></td>
<td><label>Marks Obtained </label><input size="5" name="omarks" maxlength="5"   value="<?php echo $data['omarks']?>"/></td>
<td><label>Maximum Marks </label><input size="5"  name= "odivision" maxlength="5"   value="<?php echo $data['odivision']?>" /></td>
<td><label>Institution </label><input name="oinstitution" maxlength="255"   value="<?php echo $data['oinstitution']?>" /></td>
<td><label>Year </label><input name="oyear"maxlength="4" size="5"  value="<?php echo $data['oyear']?>"/></td>
</tr>
</table>
<hr>
<table width="100%">
<tr><td><h3><br>Additional Qualification information </h3></td></tr>
<tr><td>Name of Exam:
<input name="qexam"  type="text" size="20" maxlength="255" value="<?php echo $data['odegree']?>" />
Date: 
<input size="15" name="qdate" maxlength="10" value="<?php echo $data['qdate']; ?>" type="text" required />
<label>Marks</label><input name="qmarks" maxlength="5" size="3" value="<?php echo $data['qmarks']?>">
<label>All India Rank </label><input name="qrank" type="text"  value="<?php echo $data['qrank']?>" size="5"/>
<label>Score Valid</label> <select name="qvalid"> 
<option value="<?php echo $data['gresult'];?>" selected=""> <?php echo $data['gresult'];?></option>
                <option value="Yes">Yes</option>                <option value="No">No</option>

</select>
</td>
</tr>
</table>
<hr>
<table width="100%">
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

		