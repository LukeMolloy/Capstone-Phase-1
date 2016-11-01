<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include 'dbLogin.php' ?>
	<?php
	session_start();
	
		if (!isset($_SESSION['loggedin']) && !$_SESSION['loggedin'] == true) {
	    		header("Location: login.php");
			}
	
	
	$useruser = $_SESSION['Username'];

	
	$asql="SELECT * FROM User WHERE EmailAddress= '$useruser'";
	$aresult = mysqli_query($db, $asql);
	$row = mysqli_fetch_row($aresult);
	?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <link rel="stylesheet" href="stylesheets/templatetest.css">
		
		<script src="validationClient.js"></script>
</head>

<body>
<div class="header">
		<label class="title">Safe Haven Our Women </label>
			<?php
			if ($row[8] == 1) {
				echo "<li><a href='adminpanel.php'>Admin Panel</a></li>";
			}
			
			session_start();
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	    		echo "<li><a href='logout.php'>Logout</a></li>";
			}
			else {
				echo "<li><a href='login.php'>Login</a></li>";
			}
			
			?>
			
			<li><a href="/About.php">ABOUT US</a></li>
			<li><a href="/Contact.php">CONTACT US</a></li>

 
		
	</div>
	<div class="navbar">
	</div>
	
	<div class="loginform">
		<br /><br /><br /><br /><h1>Thank you!</h1><br /><br /><br />
		The details are being updated. We'll redirect you shortly.
		 <?php
	header( "refresh:2;url=adminpanel.php" );
	?>
	</div></div>
</body>

<footer>
<br />
<table class="footertable">
	<tr>
		<td class="lightertext">SHOW<br /><hr></td>
		<td class="lightertext">ABOUT<br /><hr></td>
		<td class="lightertext">HELP<br /><hr></td>
		<td class="lightertext">CONNECT<br /><hr></td>
	</tr>
	<tr>
		<td class="darkertext">
			<br />Home<br />
			User Registration<br />
			Safe Haven Registration
		</td>
		<td class="darkertext">
			<br />About Us<br />
			Company Site
		</td>
		
		<td class="darkertext">
			<br />Contact Us<br />
			Instructions
		</td>
		
		<td class="darkertext">
		<br />	Facebook<br />
			Twitter
		</td>
	</tr>
</table>
</footer>

</html>
