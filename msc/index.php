<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:../login.php");
}
include "../settings.php";
$email=$_SESSION['email'];
$query="SELECT confirmed from msc WHERE email='$email'";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
if($data['confirmed']==2)
{
?>
<meta http-equiv="refresh" content="0; url=preview.php" />
<?php 
}
if($data['confirmed']==1)
{
?>
<meta http-equiv="refresh" content="0; url=print.php" />
<?php } ?>
<html>
	<head>
		<title> Online Application|Home </title>
		<link rel="stylesheet" type="text/css" href="../login-box.css"/>
	</head>
	<body>

		<center>
			<div class="content">
				<div class="header"></div>
				
<h4 class="right"><button><b>User: <?php echo $_SESSION['email'];?></button><a href="../logout.php">Logout</a></b></h4>
<form method="post" action="submit.php">
<table width="100%">
<tr><td colspan="3"> <h3><br>Personal Details</h1></td></tr>


<tr><td><label>Name</label>:<font color="red">*</font></td><td><input name= "name" maxlength="255" required/></td><td><label>Address Line1: <font color="red">*</font></label></td><td><input name="ad1"  type="text" required /></td></tr>

<tr><td><label>Father's Name</label>:<font color="red">*</font></td><td><input name= "ftname"  maxlength="255" required /></td><td><label> Address Line2:<font color="red">*</font> &nbsp</label></td><td><input   name="ad2" type="text" required /></td></tr>

        <tr>
                <td><label>Email</label>:</td>
                <td><input   name="email"   type="text"  value="<?php echo $_SESSION['email'];?>" readonly/></td>
		<td><label>City</label>:</td>
                <td><input   name="city"   type="text"  required /></td>
        </tr>

 

        <tr>
               <td><label>Date of Birth</label>:<font color="red">*</font></td>
	       <td><input name="dobd" size="1.5" maxlength="2" value="DD" type="text" onclick="value=''" required /> / <input name="dobm" size="1.5" maxlength="2" value="MM" type="text" onclick="value=''" required /> / 	<input name="doby" size="1.5" maxlength="4" value="YYYY" type="text" onclick="value=''" required /></td>  <td><label>State:<font color="red">*</font></label></td>
		<td><input   name="state"   type="text" required /></td>
               
         </tr>
         <tr> 
                <td><label>Gender</label>:<font color="red">*</font></td>
                <td><select name="gender"> 
	              <option value="Male" selected="" >Male</option>
	              <option value="Female" >Female</option>
	              <option value="Other" >Other</option>
		    </select>
                 <label>Category</label>:<font color="red">*</font> 
		      <select name="catagory"> 
		      <option value="GN" >GN</option>
		        <option value="SC" >SC</option>
		        <option value="ST" >ST</option>
		         <option value="OBC" >OBC</option>
                      </select></td><td><label>Country:<font color="red">*</font></label></td>
		<td><input   name="country"   type="text" required /></td>
                
          </tr>

<tr> <td><label>Contact Number</label>:<font color="red">*</font> </td>
                 <td><input name="phone" maxlength="15"  type="text" required><br></td>
<td><label>PIN:<font color="red">*</font></label></td><td><input   name="pin" maxlength="6"  type="text"  required /></td>

              
        </tr>
</table>
<hr>
<table width="100%">
<tr><td><h3><br>Academic Details</h3></td></tr>
<tr><td colspan="2"><b>Matriculation/10th:</b></td><tr>
<td><label>Subject <font color="red">*</font></label><input name="msubject" maxlength="255"   required /></td>
<td><label>Marks Obtained<font color="red">*</font></label> <input size="5" name= "mmarks" maxlength="5"   required /></td>
<td><label>Maximum Marks <font color="red">*</font></label><input size="5" name= "mdivision" maxlength="5"   required /></td>
<td><label>Institution <font color="red">*</font></label><input name="minstitution" maxlength="255"  required /></td>
<td><label>Year <font color="red">*</font></label><input name="myear" maxlength="5" size="5"  required />
</td>
</tr>
<tr><td colspan="2"><b>Higher Secondary/12th: </b></td><tr>
<td><label>Subject<font color="red">*</font></label> <input name="hsubject" maxlength="255"  required /></td>
<td><label>Marks Obtained <font color="red">*</font></label><input size="5" name="hmarks" maxlength="5"  required /></td>
<td><label>Maximum Marks<font color="red">*</font></label><input size="5" name= "hdivision" maxlength="5"   required /></td>
<td><label>Institution<font color="red">*</font> </label><input name="hinstitution" maxlength="255"   required /></td>
<td><label>Year <font color="red">*</font></label><input name="hyear" maxlength="4"  size ="5" required /></td>
</td>
</tr>
<tr><b><td colspan="2"><b>Graduation:</b></td><tr>
<td><label>Major Subject <font color="red">*</font></label><input name="gsubject" maxlength="255" size="20" required /></td>
<td><label>Minor Subjects <font color="red">*</font></label><input name="minsubject" maxlength="255" required size="20"/></td>
<td><label>Institution <font color="red">*</font></label><input name="ginstitute" maxlength="255" required size="20"/></tr></td>
<tr><td>
<label>Result Status:</label><font color="red">*</font><select name="gresult"> 
		      <option value="" required>select</option>
		      <option value="Awaited">Awaited</option>
	<option value="Completed" >Completed</option>

                      </select></td>
<td><label>Marks Obtained/CGPA</label><input size="5" name=" gmarks" maxlength="5" /></td>
<td><label>Maximum Marks/CGPA out of </label><input size="5" name= "gdivision" maxlength="5" /></td>

<td><label>Year:</label> <font color="red">*</font><input name="gyear" maxlength="4" size="5" required/>
</td>
</tr>
<tr><td colspan="2"><b>Other Qualification (Degree/Diploma):</b></td><tr>
<td><label>Name &nbsp </label><input name="odegree" maxlength="255"  /></td>
<td><label>Marks Obtained </label><input size="5" name="omarks" maxlength="5"  /></td>
<td><label>Maximum Marks </label><input size="5"  name= "odivision" maxlength="5"   /></td>
<td><label>Institution </label><input name="oinstitution" maxlength="255"   /></td>
<td><label>Year</label>: <input name="oyear" maxlength="4" size="5" /></td>
</tr>
</table>
<hr>
<table width="100%">
<tr><td><h3><br>Additional Qualification information </h3></td></tr>
<tr><td>Name of Exam:
<input name="qexam"  type="text" size="20" maxlength="255"  />
Date: 
<input size="2" name="qdd" maxlength="2" value="DD" type="text"onclick="value=''"  /> /
	<input name="qmm" size="2" maxlength="2" value="MM" type="text" onclick="value=''"  /> / 
	<input name="qyy" size="4" maxlength="4" value="YYYY" type="text" onclick="value=''"  />
<label>Marks</label><input name="qmarks" maxlength="5" size="3" >
<label>All India Rank </label><input name="qrank" type="text"  value="" size="5"/>
<label>Score Valid</label> <select name="qvalid"> 
		<option value="Yes">Yes</option>
                <option value="No">No</option>

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
