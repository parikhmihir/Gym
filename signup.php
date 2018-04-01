<?php
session_start();
$connection = mysqli_connect("localhost","root","","get_fit");
if(!$connection){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];
$sql = "INSERT INTO members (fname, lname, age, contact, gender, email, password) VALUES ('$fname', '$lname', '$age', '$contact', '$gender', '$email', '$password');";
	if(mysqli_query($connection, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<html>
<head>
<title>SIGN UP FOR FREE NOW!</title>
<style>
#signup {
	margin-top: 40px;
	margin-left: 400px;
	margin-right: 400px;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.4);
}
body {
	background-image:url("images/");
	background-repeat:no-repeat;
	background-position:"center";
	background-size:cover;
}
button {
	border-radius: 8px;
	background-color: #4CAF50;
	padding: 15px;
}
</style>
<link rel="stylesheet" type="text/css" href="multiplestyle.css">
<script src="validate.js"></script>
</head>
<body>
	<?php include("header.php") ?>
	<center><br><br>
		If you are already a member, <a href="login.php"><button id="button">LOGIN HERE!</button></a><br><br>
		REGISTER HERE:
	</center>
	<div id="signup">
	<form name="signup" method="post" action="signup.php" onreset="alert('On reset all entries will be erased and lost')" onsubmit="return validate()">
		<table align="center">
		<tr>
			<td>First Name:</td><td><input type="text" name="fname" id="fname" placeholder="Enter your first name"></td>
		</tr>
		<tr>	
			<td>Last Name:</td><td><input type="text" name="lname" id="lname" placeholder="Enter your last name"></td>
	    </tr>
		<tr>
			<td>Age:</td><td><input type="text" name="age" id="age" placeholder="Enter Your Age"></td>
        <tr>
			<td>Contact Number:</td><td><input type="text" maxlength="10" id="contact" name="contact" placeholder="Enter valid contact number"></td>
	    </tr>
		<tr>
			<td>Gender:</td><td><input type="radio" name="gender" value="Male">Male
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" value="Female">Female</td>
		</TR>
		<tr>
			<td>Email:</td><td><input type="text" name="email" id="email" placeholder="Enter valid e-mail"></td>
		</tr>
		<tr>
			<td>Password</td><td><input type="password" name="password" id="password" placeholder="Enter your password here"></td>
		</tr>
		<tr>
			<td>Confirm Password</td><td><input type="password" name="c_password" id="c_password" placeholder="Confirm your password here"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="reset" name="reset" value="RESET"></td>
		</tr>
		</table>
	</form>
	</div>
</body>
</html>