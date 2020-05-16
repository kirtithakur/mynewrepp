<html>
<head><meta http-equiv="refresh" content="0; url=preview.php" /></head>

<?php
$con=mysqli_connect("#","#","#","#");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$email = mysqli_real_escape_string($con, $_POST['email']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$mname = mysqli_real_escape_string($con, $_POST['mname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$fatname = mysqli_real_escape_string($con, $_POST['fatname']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$category = mysqli_real_escape_string($con, $_POST['category']);
$address1 = mysqli_real_escape_string($con, $_POST['address1']);
$address2 = mysqli_real_escape_string($con, $_POST['address2']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$pin = mysqli_real_escape_string($con, $_POST['pin']);
$landline = mysqli_real_escape_string($con, $_POST['landline']);
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$matric = mysqli_real_escape_string($con, $_POST['matric']);
$marticsub = mysqli_real_escape_string($con, $_POST['marticsub']);
$matricschool = mysqli_real_escape_string($con, $_POST['matricschool']);
$matricboard = mysqli_real_escape_string($con, $_POST['matricboard']);
$matricyear = mysqli_real_escape_string($con, $_POST['matricyear']);
$matricgrade = mysqli_real_escape_string($con, $_POST['matricgrade']);
$twelveth = mysqli_real_escape_string($con, $_POST['twelveth']);
$twelvethsub = mysqli_real_escape_string($con, $_POST['twelvethsub']);
$twelvethschool = mysqli_real_escape_string($con, $_POST['twelvethschool']);
$twelvethboard = mysqli_real_escape_string($con, $_POST['twelvethboard']);
$twelvethyear = mysqli_real_escape_string($con, $_POST['twelvethyear']);
$twelvethgrade = mysqli_real_escape_string($con, $_POST['twelvethgrade']);
$btechdegree = mysqli_real_escape_string($con, $_POST['btechdegree']);
$btechbranch = mysqli_real_escape_string($con, $_POST['btechbranch']);
$btechcollege = mysqli_real_escape_string($con, $_POST['btechcollege']);
$btechuni = mysqli_real_escape_string($con, $_POST['btechuni']);
$btechyear = mysqli_real_escape_string($con, $_POST['btechyear']);
$btechgrade = mysqli_real_escape_string($con, $_POST['btechgrade']);
$dipname = mysqli_real_escape_string($con, $_POST['dipname']);
$dipbranch = mysqli_real_escape_string($con, $_POST['dipbranch']);
$dipcollege = mysqli_real_escape_string($con, $_POST['dipcollege']);
$dipuni = mysqli_real_escape_string($con, $_POST['dipuni']);
$dipyear = mysqli_real_escape_string($con, $_POST['dipyear']);
$dipgrade = mysqli_real_escape_string($con, $_POST['dipgrade']);
$choice1 = mysqli_real_escape_string($con, $_POST['choice1']);
$choice2 = mysqli_real_escape_string($con, $_POST['choice2']);
$addinfo = mysqli_real_escape_string($con, $_POST['addinfo']);

$sql="INSERT INTO internship (email, fname, mname, lname, fatname, dob, gender, category, address1, address2, city, state, country, pin, landline, mobile, matric, marticsub, matricschool, matricboard, matricyear, matricgrade, twelveth, twelvethsub, twelvethschool, twelvethboard, twelvethyear, twelvethgrade, btechdegree, btechbranch, btechcollege, btechuni, btechyear, btechgrade, dipname, dipbranch, dipcollege, dipuni, dipyear, dipgrade, choice1, choice2, addinfo, confirmed)  VALUES
('$email', '$fname', '$mname', '$lname','$fatname','$dob', '$gender', '$category', '$address1', '$address2', '$city', '$state', '$country', '$pin', '$landline', '$mobile', '$matric', '$marticsub', '$matricschool', '$matricboard', '$matricyear', '$matricgrade', '$twelveth', '$twelvethsub', '$twelvethschool', '$twelvethboard', '$twelvethyear', '$twelvethgrade', '$btechdegree', '$btechbranch', '$btechcollege', '$btechuni', '$btechyear', '$btechgrade', '$dipname','$dipbranch', '$dipcollege', '$dipuni', '$dipyear', '$dipgrade', '$choice1', '$choice2', '$addinfo', 2)"; 

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Your information has been store successfully";

mysqli_close($con);
?> </html>
