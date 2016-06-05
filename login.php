<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
	ob_start();
	session_start();
	$_SESSION['Username'] = $_POST['Username'];
?>	

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
 	<link rel="stylesheet" href="stylesheets/index.css">
 	<link rel="stylesheet" href="stylesheets/template.css">
	<?php include 'dbLogin.php' ?>
</head>

<body>
	<div class="header">
	<label class="title">Safe Haven Our Women</label>
 		<li><a href="/login.php">Login / Register</a></li>
		<li><a href="/About.php">About Us</a></li>
		<li><a href="/Contact.php">Contact Us</a></li>
		<li><a href="/index.php">Home</a></li>
	</ul> 
</div>
	<div class="loginform1">	
		<h1>Safe Haven Our Women</h1><br/>
		<form method="post" action="">
			<center>
			<php? $sql = "SELECT LastName FROM `User` WHERE UserID = 1\n". " LIMIT 0, 30 "; ?>
			<label id="username">Username</label> &nbsp; <input name="Username" type="text" /><br /><br />
			<label id="password">Password</label> &nbsp; <input name="Password" type="password" /><br /><br />
			<input name="Signin" type="submit" value="Sign In" />
			<br /> <br />
			<a href="/registration.php">Apply as authority</a> | <a href="/safehavenregistration.php">Apply to be a safe haven</a>
			</center>
			<?php 
				
				$myusername=$_POST['Username'];
				$mypassword=$_POST['Password']; 
		
				$sql="SELECT * FROM User WHERE EmailAddress='$myusername' and Password='$mypassword'";
				$result = mysqli_query($db, $sql);
				$count = mysqli_num_rows($result);
		
				if($count==1){
					
         			$_SESSION['login_user'] = $myusername;
					header("location:registerClient.php");
				}
				else {
				//	echo "Wrong Username or Password";
				}
			?>
		</form>
	</div>
</div>
</body>

</html>
