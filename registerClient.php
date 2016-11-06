<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include 'dbLogin.php' ?>
	<?php
	session_start();
	
		if (!isset($_SESSION['loggedin']) && !$_SESSION['loggedin'] == true) {
	    		header("Location: index.php");
			}
	
	
	$useruser = $_SESSION['Username'];

	
	$asql="SELECT * FROM User WHERE EmailAddress= '$useruser'";
	$aresult = mysqli_query($db, $asql);
	$row = mysqli_fetch_row($aresult);
	?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.Community</title>
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
				echo "<li><a href='index.php'>Login</a></li>";
			}
			
			?>
			
			<li><a href="/About.php">About Us</a></li>
			<li><a href="/Contact.php">Contact Us</a></li>
			<li><a href="/index.php">Home</a></li>
		</ul> 
	</div>
	
	<div class="loginform">
		<div class="instructions">
				<?php
					$user = $_SESSION['Username'];
					echo "<br /><h1>Welcome, $user.</h1><br />";
				?>
				</div>
			<br /><br /><hr width="70%"><br /><br />
			
			
			<table cellspacing="10">
				
			<td valign="top">
				<br />
				<h2>Please enter the client's details</h2>
				<br /><br /><br /><br />
				<p>These details will help narrow down the list of safe houses to those applicable to the client.</p>
				<p>They will also be sent to the safehouse that the client ends up being placed in.</p>
				<br />
				<p>Please fill out every field and add any extra information applicable to the clients situation in the</p>
				<p>extra info section.</p>
			</td>
			<td>
			<form name="clientRegistration" class="formscroll" method="post" action ="saveclient.php">
			<!--onsubmit="return validateRegistrationForm()-->
		
				
			<table align="center">
				
			<label id="S1Label"><h2>Step 1</h2> </label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label id="S2Label"><h2>Step 2</h2></label><br /><br /><br /><br />
			<div id="step1form">

			<label id="FirstName">First Name: </label> <input name="FirstName" type="text" value="Jenna"/><label id="FirstNameError" class="error"></label><br /><br /><br /><br />

			<label id="LastName">Last Name: </label> <input name="LastName" type="text" value="Smith"/><label id="LastNameError" class="error"></label><br /><br /><br /><br />

			<label id="Email">Email Address: </label> <input name="Email" type="text" value="jennasmith@hotmail.com"/><label id="EmailError" class="error"></label><br /><br /><br /><br />
			
			<label id="Phone">Phone Number: </label> <input name="Phone" type="text" value="0418276368"/><label id="PhoneError" class="error"></label><br /><br /><br /><br />
			<button id="next" type="button" onclick="return validateRegistrationForm()">Next</button>
			</div>
			
			<div id ="step2form">
			<label id="Dependants">Dependants: </label>
			
			<select name="Dependants">
				  <option value="0" selected>0</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5+">5+</option>
			</select>
			<br /><br />
			<!--dfd-->
			<label id="Pets">Pets: </label>
			<input type="radio" name="Pets" value="0" checked="checked"> No  &nbsp&nbsp <input type="radio" name="Pets" value="1" selected> Yes<br><br /><br />
			
			
			<label id="Infants">Infants: </label> 
				<select name="Infants">
				  <option value="0" selected>0</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5+">5+</option>
			</select>
			<br /><br />
			
			 <textarea name="Extra" rows="10" cols="100">
				Add any extra information here.
			 </textarea>
			 <br /><br />
					<button id="back" type="button">Back</button>	<input name="Register" type="submit" value="Register" />
			</div>
			
		
			</table>
			
			</center>
		</form>
		</td>
		</table>
	</div>
</body>


<script>
  $("#S1Label").css('text-decoration', 'underline');


$( "#next" ).click(function() {
	
	if (error > 0) {
		return false;
	}

  $("#step1form").css('visibility', 'hidden');
  $("#step1form").css('height', '0px');
    $("#step2form").css('height', 'auto');
  $("#step2form").css('visibility', 'VISIBLE');
  $("#S2Label").css('text-decoration', 'underline');
    $("#S1Label").css('text-decoration', 'none');
});


$( "#back" ).click(function() {
	
$("#step2form").css('visibility', 'hidden');
  $("#step2form").css('height', '0px');
  $("#step1form").css('height', 'auto');
   $("#step1form").css('visibility', 'VISIBLE');
       $("#S2Label").css('text-decoration', 'none');
         $("#S1Label").css('text-decoration', 'underline');
         return true;
});


</script>
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
