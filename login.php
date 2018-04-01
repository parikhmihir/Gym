<?php
session_start();
if (isset($_POST['submit']))
{
	$connection = mysqli_connect("localhost","root","","get_fit");
if(!$connection){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM members WHERE email = '$email' AND password = '$password';";
$result = mysqli_query ($connection, $sql) or die ('request "Could not execute SQL query" '.$sql);
$user = mysqli_fetch_assoc($result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['email'];
			$message='Logged in successfully';
			include("header_login.php");
		}
		else{
			$message = 'No such user exists.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<html>
	<head>
		<title>Login to access website</title>
		<script type="text/javascript">
			function validate()
			{
				var email=document.getElementById("email");
				var password=document.getElementById("password");
				var atpos = email.value.indexOf("@");
    			var dotpos = email.value.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.value.length) 
				{
       				alert("Enter valid email-ID");
					email.focus();
			        return false;
   				}
   				if(password.value.length<8)
   				{
   					alert("Please enter valid password");
   					password.focus();
   					return false;
   				}
   				return true;
			}
		</script>
		<style type="text/css">
		#login{
			text-align: center;
			margin: auto;
			margin-top: 100px;
			margin-right: 400px;
			margin-left: 480px;
			width: 25%;
			border-radius: 25px;
			background-color: rgba(0,0,0,0.4);
		}
		td{
			padding: 5px;
		}
		#body{
			background: url("images/bg1.jpg");
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			color: black;
		}
		
		</style>
		<link rel="stylesheet" type="text/css" href="multiplestyle.css">
	</head>
	<body id="body">
		<h2 align="center">To access our exercises you must login</h2>
		<div id="login">
			<h3>LOGIN HERE</h3>
			<form name="login" method="post" action="login.php" onsubmit="return validate()" onreset="alert('Are you sure to reset?')">
			<table>
				<tr>
					<td>Login ID (Email):</td><td><input type="text" name="email" placeholder="Enter your login ID here" id="email"></td>
				</tr>
				<tr>
					<td>Password:</td><td><input type="password" name="password" id="password" placeholder="Enter your password here"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit"name="submit" value="LOGIN"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="reset"name="reset" value="RESET"></td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>