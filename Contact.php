<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.Community</title>
<link rel="stylesheet" href="stylesheets/templatetest.css">
</head>

<body>
	<div class="header">
	<label class="title">Safe Haven Our Women</label>
			<li><a href="/About.php">About Us</a></li>
			<li><a href="/Contact.php">Contact Us</a></li>
			<li><a href="/index.php">Home</a></li>
		</ul> 
	</div>
	
	<center><h1>Contact Us</h1></center>
	<div class="contactform">
		<table cellspacing="10">
				
		<td valign="top" width="600"><br /><br /><br /><br /><br /><br /><br />
			<p>Feel free to ask any questions about the service using the form to the right.</p><p>We will try and get back to you as soon as possible!</p><br /><p></p>
		</td>
		<td width="600"><br /><h2>Enter Your Message below:</h2><br /><br /><br />
			<form id="contact_form" action="contactmail.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<label for="name" align="left">Your name:</label><br />
				<input class="contact" id="name" class="input" name="name" type="text" value="" size="30" /><br /><br />
			</div>
			<div class="row">
				<label for="email">Your email:</label><br />
				<input id="email" class="input" name="email" type="text" value="" size="30" /><br /><br />
			</div>
			<div class="row">
				<label for="message" align="left">Your message:</label><br />
				<textarea id="message" class="input" name="message" rows="14" cols="60"></textarea><br /><br />
			</div>
			<input id="submit_button" type="submit" value="Send email" />
			</form>
		</td>
		</table>
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