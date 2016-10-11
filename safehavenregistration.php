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
	
<div class="wrapper">
	
<div class="header">
	<label class="title"><a href="/index.php">Safe Haven Our Women</a></label>
 	<!--	<li><a href="/index.php">Login / Register</a></li>
		<li><a href="/About.php">About Us</a></li>
		<li><a href="/Contact.php">Contact Us</a></li>
		<li><a href="/index.php">Home</a></li> -->
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
		$city = ($_POST['City']);
		$state = ($_POST['State']);
		$postcode = ($_POST['PostCode']);
		$spacesavailable = ($_POST['SpacesAvailable']);
		$infantspaces = ($_POST['InfantSpaces']);
		$petfriendly = ($_POST['PetFriendly']);
		$bluecardnumber = ($_POST['BluecardNumber']);
		$description = ($_POST['Description']);
		$gender = ($_POST['GenderTaken']);
		$nights = ($_POST['Nights']);
		$DOB = ($_POST['Nights']);
		$password = ($_POST['Password']);
		$hashpassword = hash("sha256", $password);
	
	
		
	
	
		$sql = "INSERT INTO House (FirstName, LastName, PhoneNumber, Email, Password, Address, Suburb, PostCode, City, State, SpacesAvailable, InfantSpaces, PetFriendly, LicenseNumber, Description, Gendertaken, Nights)
		VALUES (AES_ENCRYPT('$first', 'show2016'), AES_ENCRYPT('$last', 'show2016'), AES_ENCRYPT('$phonenumber', 'show2016'), AES_ENCRYPT('$email', 'show2016'), '$hashpassword', AES_ENCRYPT('$address', 'show2016'), AES_ENCRYPT('$suburb', 'show2016'), AES_ENCRYPT('$postcode', 'show2016'), AES_ENCRYPT('$city', 'show2016'), AES_ENCRYPT('$state', 'show2016'), '$spacesavailable', '$infantspaces', '$petfriendly', AES_ENCRYPT('$licenseNumber', 'show2016'), '$description', '$gender', '$nights')";
		
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
			<label id = "FirstNameError" class="error"></label> <br /><br /><br />
			
			<label id="LastName">* Last Name</label> <input name="LastName" type="text" />
			<label id = "LastNameError" class="error"></label> <br /><br /><br />
			
			<label id="PhoneNumber">* Phone Number</label> <input name="PhoneNumber" type="text" />
			<label id = "PhoneError" class="error"></label> <br /><br /><br />
			
			<label id="Email">* Email</label> <input name="Email" type="email"/>
			<label id = "EmailError" class="error"></label> <br /><br /><br />
						
			<label id="BluecardNumber">License Number:</label><input name="licenseNumber" type="text" />
		<br /><br />
		
		<label id="Password">* Password</label> <input name="Password" type="password" />
			<label id = "PasswordError" class="error"></label> <br /><br /><br />
			
					<label id="ConfirmPassword">* Confirm Password</label> <input name="ConfirmPassword" type="password" />
			<label id = "ConfirmPasswordError" class="error"></label> <br /><br /><br />
			<button id="next" type="button" onclick="return validateFirstSafeHavenRegistrationForm()">Next</button>
			
			</div>
			
			<div id="step2form">

			<label id="Address">* Address</label> <input name="Address" type="text" />
			<label id = "AddressError" class="error"></label> <br /><br /><br />
			
			<label id="Suburb">* Suburb</label> <input name="Suburb" type="text" />
			<label id = "SuburbError" class="error"></label> <br /><br /><br />
			
			<label id="PostCode">* Post Code</label> <input name="PostCode" type="text" />
			<label id = "PostCodeError" class="error"></label> <br /><br /><br />
			
			<label id="City">* City/Town</label> <input name="City" type="text" />
			<label id = "CityError" class="error"></label> <br /><br /><br />
			
			<label id="State">* State</label> <input name="State" type="text" />
			<label id = "StateError" class="error"></label> <br /><br /><br />
			
			
			<label id="SpacesAvailable">* Spaces Available</label> 
			<select name="SpacesAvailable">
				  <option value="1" selected>1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5+</option>
			</select>
			<label id = "SpacesAvailableError"></label> <br /><br /><br />
			
			
			<label id="GenderTaken">* Gender Taken</label> 
				<select name="GenderTaken">
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
				  <option value="No Preference" selected>No Preference</option>

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
			<input type="radio" name="PetFriendly" value="1"> Yes
			<input type="radio" name="PetFriendly" value="0" checked> No
			<label id = "PetFriendlyError"></label> <br /><br /><br />

			
			<textarea name="Description" rows = "5" cols = "100">Add a description of the house here.</textarea>
			<label id = "DescriptionError"></label> <br /><br /> <br />
			
			<label id="Nights">* Length of Stay</label> 
			<select name="Nights">
				  <option value="1" selected>1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>
				  <option value="9">9</option>
				  <option value="10">10</option>
				  <option value="11">11</option>
				  <option value="12">12</option>
				  <option value="13">13</option>
				  <option value="14">14</option>
				  <option value="15">15+</option>
			</select>
			<label id = "NightsError"></label> <br /><br /><br />
			
			<button id="back" type="button">Back</button> &emsp;&emsp;&emsp;&emsp; <input name="Register" type="submit" value="Register")/>
			
			
			</div>
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
     $("#step2form").css('overflow-y', 'auto');

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
</div>
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
