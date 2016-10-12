<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.Community</title>
<link rel="stylesheet" href="stylesheets/templatetest.css">
</head>

<body>
<div class="header">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<label class="title">SAFE HAVEN COMMUNITY</label>
 		<li><a href="/safehavenregistration.php">SAFE HAVEN APPLICATION</a></li>
 		 <li><a href="/registration.php">USER APPLICATION</a></li>
		<li><a href="/About.php">ABOUT</a></li>
		<li><a href="/Contact.php">CONTACT</a></li>
	</ul> 
</div>
</div>
	<div class="contactform">
		<center><h1>Contact Us</h1></center>
		<form id="contact_form" action="contactmail.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<label for="name">Your name:</label><br />
			<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
		</div>
		<div class="row">
			<label for="email">Your email:</label><br />
			<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
		</div>
		<div class="row">
			<label for="message">Your message:</label><br />
			<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
		</div>
		<input id="submit_button" type="submit" value="Send email" />
		</form>	
	</div>
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