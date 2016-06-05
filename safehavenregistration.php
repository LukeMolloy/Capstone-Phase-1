<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
  <link rel="stylesheet" href="stylesheets/template.css">
		<?php include 'dbLogin.php' ?>
		<script src="validation.js"></script>
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
	<?php
		$first = ($_POST['FirstName']);
		$last =  ($_POST['LastName']);
		$phonenumber = ($_POST['PhoneNumber']);
		$email = ($_POST['Email']);
		$address = ($_POST['Address']);
		$suburb = ($_POST['Suburb']);
		$postcode = ($_POST['PostCode']);
		$spacesavailable = ($_POST['SpacesAvailable']);
		$infantspaces = ($_POST['InfantSpaces']);
		$petfriendly = ($_POST['PetFriendly']);
		$bluecardnumber = ($_POST['BlueCardNumber']);
		$description = ($_POST['Description']);
	
	
		$sql = "INSERT INTO House (FirstName, LastName, PhoneNumber, Email, Address, Suburb, PostCode, SpacesAvailable, InfantSpaces, PetFriendly, Bluecard, Description)
		VALUES ('$first', '$last', '$phonenumber', '$email', '$address', '$suburb', '$postcode', '$spacesavailable', '$infantspaces', '$petfriendly', '$bluecardnumber', '$description')";
		
		mysqli_query($db, $sql);
	?>
	
	<div class="loginform">
		<form name="safeHavenRegistration" onsubmit="return validateRegistrationForm()" method="post">
			<center>
				<p>
					Safe Haven Registration
				</p>
				
			
			
			<label id="FirstName">First Name</label> <input name="FirstName" type="text" />
			<label id = "FirstNameError"></label> <br /><br />
			
			<label id="LastName">Last Name</label> <input name="LastName" type="text" />
			<label id = "LastNameError"></label> <br /><br />
			
			<label id="PhoneNumber">Phone Number</label> <input name="PhoneNumber" type="text" />
			<label id = "PhoneNumberError"></label> <br /><br />
			
			<label id="Email">Email</label> <input name="Email" type="text" />
			<label id = "EmailError"></label> <br /><br />
	

			<label id="Address">Address</label> <input name="Address" type="text" />
			<label id = "AddressError"></label> <br /><br />
			
			<label id="Suburb">Suburb</label> <input name="Suburb" type="text" />
			<label id = "SuburbError"></label> <br /><br />
			
			<label id="PostCode">Post Code</label> <input name="PostCode" type="text" />
			<label id = "PostCodeError"></label> <br /><br />
			
			<label id="SpacesAvailable">Spaces Available</label> <input name="SpacesAvailable" type="text" />
			<label id = "SpacesAvailableError"></label> <br /><br />
			
			<label id="InfantSpaces">Infant Spaces</label> <input name="InfantSpaces" type="text" />
			<label id = "InfantSpacesError"></label> <br /><br />
			
			<label id="PetFriendly">Pet Friendly</label>   
			<input type="radio" name="PetFriendly" value="Yes"> Yes
			<input type="radio" name="PetFriendly" value="No" checked> No
			<label id = "PetFriendlyError"></label> <br /><br />

			<label id="BluecardNumber">Bluecard Number</label> <input name="BluecardNumber" type="text" />
			<label id = "BluecardNumber"></label> <br /><br />
			
			<label id="Description">Description</label> <textarea name="Description" rows = "5" cols = "50"></textarea>
			<label id = "DescriptionError"></label> <br /><br /> 


			
			<input name="Register" type="submit" value="Register" />
			</center>
		</form>
	</div>
</body>

<footer>
	<center>Contact Us	|	About</center>
</footer>

</html>
