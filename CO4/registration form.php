registration form

<html>
<head>
<title>Registration Form</title>
</head>
<body>
<br><br>
<center>
<form name="frmRegistration" method="post" action="action.php">
<table border="0" width="800" align="center">
<tr><th colspan=2>Registration Form</th></tr>
<tr><td>Username</td>
<td><input type="text" name="userName" value"></td>
</tr>
<tr><td>First Name</td>
<td><input type="text" name="firstName" value"></td>
</tr>
<tr><td>Last Name</td>
<td><input type="text" name="lastName" value"></td>
</tr>
<tr><td>Password</td>
<td><input type="password" name="password" value=""></td>
</tr>
<tr><td>Confirm Password</td>
<td><input type="password" name="confirm_password" value=""></td>
</tr>
<tr><td>Email</td>
<td><input type="text" name="userEmail" ></td>
</tr>
<tr><td>Gender</td>
<td><input type="radio" name="gender" id="gender" value="Male" > Male
<input type="radio" name="gender" id="gender" value="Female"> Female
</td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" name="terms"> I accept Terms and
Conditions</td>
</tr>
<tr><th colspan=2>
<div><input type="submit" name="submit" value="Register" ></div>
</th></tr>
</table>
</form>
</body>
</html>


action.php


<html>
<head>
<title>Registration Form</title>
</head>
<body>
<center>
<br><br>
<?php
foreach($_POST as $key=>$value) {
if(empty($_POST[$key])) {
$message = ucwords($key) . " field is required";
break;
}
}
/* Password Matching Validation */
if($_POST['password'] != $_POST['confirm_password']){
$message = 'Passwords should be same<br>';
}
/* Email Validation */
if(!isset($message)) {
if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
$message = "Invalid UserEmail";
}
}
/* Validation to check if gender is selected */
if(!isset($message)) {
if(!isset($_POST["gender"])) {
$message = " Gender field is required";
}
}
/* Validation to check if Terms and Conditions are accepted */
if(!isset($message)) {
if(!isset($_POST["terms"])) {
$message = "Accept Terms and conditions before submit";
}
}
print("<table width='700'><tr><th colspan=2>Registration Details</th></tr>");
print("<tr><td align='right'>User Name : </td><td>". $_POST["userName"]."</td></tr>");
print("<tr><td align='right'>First Name : </td><td>". $_POST["firstName"]."</td></tr>");
print("<tr><td align='right'>Last Name : </td><td>". $_POST["lastName"]."</td></tr>");
print("<tr><td align='right'>Email : </td><td>". $_POST["userEmail"]."</td></tr>");
print("<tr><td align='right'>Gender : </td><td>". $_POST["gender"]."</td></tr>");
print("<tr><th colspan=2> </th></tr></table></body></html>");
?>

