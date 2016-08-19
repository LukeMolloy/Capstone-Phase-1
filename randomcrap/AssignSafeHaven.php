<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
	ob_start();
	session_start();
?>	

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
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
	<div class="navbar">
 
	</div>
	<div class="loginform">	
		<form method="post" action="">
			<center>
			<?php
				$user = $_SESSION['Client'];
				echo "<h1>Welcome, $user, please enter the client's details.</h1>";
			?>
			<div id ="map">	
				<p>
					You are here:
					<br /><br /><br />
				</p>
				
			</div>
			<p>
				Search for a safe haven:
			</p>
			<php? $sql = "SELECT LastName FROM `User` WHERE UserID = 1\n". " LIMIT 0, 30 "; ?>
			<label id="username">Username</label> <input name="Username" type="text" /><br /><br />
			<label id="password">Password</label> <input name="Password" type="password" /><br /><br />
			<input name="Signin" type="submit" value="Sign In" />
			<input name="Register" type="submit" value="Register"  />
			<a href="https://capstone-phase-1-lukemolloy.c9users.io/registration.php">ClickHere</a>
			</center>
			<?php
				$myusername=$_POST['Username'];
				$mypassword=$_POST['Password']; 
		
				$sql="SELECT * FROM User WHERE EmailAddress='$myusername' and Password='$mypassword'";
				$result = mysqli_query($db, $sql);
				$count = mysqli_num_rows($result);
		
				if($count==1){
					//session_register("myusername");
					//session_register("mypassword");
				//	header("location:registerClient.php");
				}
				else {
					echo "Wrong Username or Password";
				}
			?>
		</form>
	</div>
</body>

<footer>
	<center>Contact Us	|	About</center>
</footer>

</html>
