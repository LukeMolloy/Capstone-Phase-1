<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
  <link rel="stylesheet" href="stylesheets/templatetest.css">
		<?php include 'dbLogin.php' ?>
		<script src="validationSafeHaven.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
		<form name="safeHavenRegistration" onsubmit="return validateSecondSafeHavenRegistrationForm()" method="post">
			<center>
				<p>
					<h1>Safe Haven Registration</h1><br />
				</p>
				
			<label id="S1Label"><h2>Personal Details</h2> </label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <label id="S2Label"><h2>House Details</h2></label><br /><br /><hr width="70%"><br /><br />
			
			<div id="step1form">
			<label id="FirstName">* First Name</label> <input name="FirstName" type="text" />
			<label id = "FirstNameError" class="error"></label> <br /><br /><br /><br />
			
			<label id="LastName">* Last Name</label> <input name="LastName" type="text" />
			<label id = "LastNameError" class="error"></label> <br /><br /><br /><br />
			
			<label id="PhoneNumber">* Phone Number</label> <input name="PhoneNumber" type="text" />
			<label id = "PhoneError" class="error"></label> <br /><br /><br /><br />
			
			<label id="Email">* Email</label> <input name="Email" type="email"/><button id="next" type="button" onclick="return validateFirstSafeHavenRegistrationForm()">Next</button>
			<label id = "EmailError" class="error"></label> <br /><br /><br /><br />
						
						<label id="BluecardNumber">Bluecard Number</label> <input name="BluecardNumber" type="text" />
		<br /><br /><br /><br />
		
		<label id="Password">* Password</label> <input name="Password" type="password" />
			<label id = "PasswordError" class="error"></label> <br /><br /><br /><br />
			
					<label id="ConfirmPassword">* Confirm Password</label> <input name="ConfirmPassword" type="password" />
			<label id = "ConfirmPasswordError" class="error"></label> <br /><br /><br /><br />
		
			
			</div>
			
			<div id="step2form">

			<label id="Address">* Address</label> <input name="Address" type="text" />
			<label id = "AddressError" class="error"></label> <br /><br /><br />
			
			<label id="Suburb">* Suburb</label> <input name="Suburb" type="text" />
			<label id = "SuburbError" class="error"></label> <br /><br /><br />
			
			<label id="PostCode">* Post Code</label> <input name="PostCode" type="text" />
			<label id = "PostCodeError" class="error"></label> <br /><br /><br />
			
			<label id="SpacesAvailable">* Spaces Available</label> 
				<select name="SpacesAvailable">
				  <option value="1" selected>1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5+">5+</option>
			</select>
			<label id = "SpacesAvailableError"></label> <br /><br /><br />
			
			
			<label id="GenderTaken">* Gender Taken</label> 
				<select name="GenderTaken">
				  <option value="1">Male</option>
				  <option value="2">Female</option>
				  <option value="3" selected>Either</option>

			</select>
			<label id = "SpacesAvailableError"></label> <br /><br /><br />
			
			<label id="InfantSpaces">* Infant Spaces</label> 
					<select name="InfantSpaces">
				  <option value="0" selected>0</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5+">5+</option>
			</select>
			<label id = "InfantSpacesError"></label> <br /><br /><br />
			
			<label id="PetFriendly">* Pet Friendly</label>   
			<input type="radio" name="PetFriendly" value="Yes"> Yes
			<input type="radio" name="PetFriendly" value="No" checked> No
			<label id = "PetFriendlyError"></label> <br /><br /><br />

			
			<textarea name="Description" rows = "5" cols = "100">Add a description of the house here.</textarea>
			<label id = "DescriptionError"></label> <br /><br /> <br />
				<button id="back" type="button">Back</button> <input name="Register" type="submit" value="Register")/>
			</div>

			
			<br /><br />
			<a href="/index.php"><button type="button">Back to login</button></a>
			</center>
		</form>
	</div>
	
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

</body>

<footer>
<br />
<table class="footertable">
	<tr>
		<td class="lightertext">SHOW</td>
		<td class="lightertext">ABOUT</td>
		<td class="lightertext">HELP</td>
		<td class="lightertext">CONNECT</td>
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
