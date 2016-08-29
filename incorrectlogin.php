<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
	ob_start();
	session_start();
	$_SESSION['Username'] = $_POST['Username'];
		session_start();
		$_SESSION['FirstName'] = $_POST['FirstName'];
?>	

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
 	<link rel="stylesheet" href="stylesheets/index.css">
 	<link rel="stylesheet" href="stylesheets/template.css">
	<?php include 'dbLogin.php' ?>
</head>
<div id="wrapper">
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
		<form method="post" action="checklogin.php">
			<center>
			<php? $sql = "SELECT LastName FROM `User` WHERE UserID = 1\n". " LIMIT 0, 30 "; ?>
			<label id="username">Username</label> &nbsp; <input name="Username" type="text" value="Bob"/><br /><br />
			<label id="password">Password</label> &nbsp; <input name="Password" type="password" value="bob"/><br /><br />
			<input name="Signin" type="submit" value="Sign In" /><br />
			Incorrect username or password!
			<br />
			<a href="/registration.php">Apply as authority</a> | <a href="/safehavenregistration.php">Apply to be a safe haven</a>
			</center>

		</form>
	</div>
</div>
</body>
</div>

<footer>
	
	<p></p>
    <center>
    <div class="links">
        <table class="pics" align="" cellpadding="20px">
        <tr>
        <th>
        <div id="news">
          
        </div>
        </th>
        <th>
        <div id="sm">
       
        </div>
        </th>
        <th>
        <div id="sponsors">
            
        </div>
        </th>
        </tr>
        <tr>
        <td><center><strong>News</strong></center></td>
        <td><center><strong>Social Media</strong></center></td>
        <td><center><strong>Sponsors</strong></center></td>
        </tr>
        </table>
    </div>
    </center>
    <p></p>
	
</footer>

</html>
