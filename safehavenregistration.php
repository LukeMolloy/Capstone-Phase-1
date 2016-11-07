<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
  <link rel="stylesheet" href="stylesheets/templatetest.css">
		<?php include 'dbLogin.php' ?>
		<script src="validationSafeHaven.js"></script>
		<script src="popupsSH.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
	<div class="header">
	<label class="title">Safe Haven Community</label>
			<li><a href="/About.php">About Us</a></li>
			<li><a href="/Contact.php">Contact Us</a></li>
			<li><a href="/index.php">Home</a></li>
			
		</ul> 
	</div>

	<div class="loginform3">
		<form name="safeHavenRegistration" onsubmit="return validateSecondSafeHavenRegistrationForm()" method="post" action="shregister.php">
			<br /><br />
			<center>
				<p>
					<h1>Safe Haven Registration</h1><br />
				</p>
				<br />
				<table width="80%">
				<label id="S1Label"><h2>Personal Details</h2> </label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <label id="S2Label"><h2>House Details</h2></label>
				<br /><br />
				<hr width="80%">
				<br /><br />
					<td valign="top" width="40%">
						<br />
						<div id="shrDescription">
						<h2>Please Enter Your Details</h2>
						<br />
						<br />
						<p>First of all thank you for showing interest in becoming a Safe House.</p>
						<br />
						<p>
						As a safehouse your information will be added to the registry of safehouses to be used in 
						the Safe Haven Community system. This may involve providing temporary shelter and hospitality
						to a person fleeing their home due to domestic violence.
						</p>
						<br />
						<p>
						Once in the system you, as a safehouse owner, will be able to log in and manage your safehouse.
						This will involve changing your details and preferences as well as indicating wether you are currently
						avilable to provide a safe haven.
						</p>
						<br />
						<p>
						The information you enter will be stored in our database for use in the 
						Safe Haven Comunity service. All of your information will be encrypted and stored 
						safely to ensure maximum security for you and anyone who you might take in.
						</p>
						<br />
					</td>
					<td width="40%">
					<center>
						<br />
						<div id="step1form" width="40%">
							<label id="FirstName">First Name: </label> <input name="FirstName" type="text" value="Tom" />
							<label id = "FirstNameError" class="error"></label> <br /><br /><br />
			
							<label id="LastName">Last Name: </label> <input name="LastName" type="text" value="Robinson" />
							<label id = "LastNameError" class="error"></label> <br /><br /><br />
			
							<label id="PhoneNumber">Phone Number: </label>
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">This will be the first point of call when someone needs shelter in your home</span>
								<input name="PhoneNumber" type="text" value="0453623784" />
							</div>
							<label id = "PhoneError" class="error"></label> <br /><br /><br />
			
							<label id="Email">Email: </label> 
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">Please use an email you will check regularly.</span>
								<input name="Email" type="email" value="tomrobinson@hotmail.com" />
							</div>
							<label id = "EmailError" class="error"></label> <br /><br /><br />
						
							<label id="licenseNumber">License Number:</label>
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">Your license number is used to verify your identity and address</span>
								<input name="licenseNumber" type="text" value="132285923" />
							</div>
							<label id = "LicenseError" class="error"></label> <br /><br /><br />
							
							<label id="password">Password: </label>
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">Your password needs to be a minimum of six characters</span>
  								<input name="Password" type="password" value="password"/>
							</div>
							<label id = "PasswordError" class="error"></label> <br /><br /><br />
			
							<label id="ConfirmPassword">Confirm Password: </label> <input name="ConfirmPassword" type="password" value="password" />
							<label id = "ConfirmPasswordError" class="error"></label> <br /><br /><br />
							<button id="next" type="button" onclick="return validateFirstSafeHavenRegistrationForm()">Next</button>
							<br />
							<br />
						</div>
						<div id="step2form" width="40%">
						
							<label id="Address">Address: </label> <input name="Address" type="text" value="5 Lorikeet Drive"/>
							<label id = "AddressError" class="error"></label> <br /><br /><br />
			
							<label id="Suburb">Suburb: </label> <input name="Suburb" type="text" value="Thornlands"/>
							<label id = "SuburbError" class="error"></label> <br /><br /><br />
			
							<label id="PostCode">Post Code: </label> <input name="PostCode" type="text" value="4164"/>
							<label id = "PostCodeError" class="error"></label> <br /><br /><br />
				
							<label id="City">City/Town: </label> <input name="City" type="text" value="Brisbane" />
							<label id = "CityError" class="error"></label> <br /><br /><br />
			
							<label id="State">State: </label> <input name="State" type="text" value="QLD"/>
							<label id = "StateError" class="error"></label> <br /><br /><br />
			
							<label id="SpacesAvailable">Spaces Available: </label> 
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">This is the number of people you can house at any given time.</span>
								<select name="SpacesAvailable">
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
								</select>
							</div>
							<label id = "SpacesAvailableError"></label> <br /><br /><br />
			
							<label id="GenderTaken">Gender Taken: </label> 
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">This is the gender of domestic violence victim you are willing to shelter.</span>
									<select name="GenderTaken">
				 	 					<option value="Male">Male</option>
				  						<option value="Female">Female</option>
				  						<option value="No Preference" selected>No Preference</option>
				  					</select>
							</div>
							<label id = "SpacesAvailableError"></label> <br /><br /><br />
			
							<label id="InfantSpaces">Infant Spaces: </label> 
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">This is the number of infants (Children below the age of 3) you can house. Take into account what facilities you have available for babies.</span>
									<select name="InfantSpaces">
				  						<option value="0" selected>0</option>
				  						<option value="1">1</option>
				  						<option value="2">2</option>
				  						<option value="3">3</option>
				  						<option value="4">4</option>
				  						<option value="5">5</option>
									</select>
							</div>
							<label id = "InfantSpacesError"></label> <br /><br /><br />
			
							<label id="PetFriendly">Pet Friendly: </label>   
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">Some domestic violence victims flee their homes with a pet.</span>
								<input type="radio" name="PetFriendly" value="1"> Yes
								<input type="radio" name="PetFriendly" value="0" checked> No
							</div>
							<label id = "PetFriendlyError"></label> <br /><br /><br />
			
							<label id="Nights">Length of Stay: </label> 
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">This is the average number of nights you are willing to shelter someone. (Minimum 3 nights)</span>
								<select name="Nights">
				  					<option value="3" selected>3</option>
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
								</select>
							</div>
							<label id = "NightsError"></label> <br /><br /><br />
			
							<div class="tooltip">
  								<span class="tooltiptext tooltip-right">Add a short description of yourself and your house here. This information will be seen by domestic violence victims seeking shelter.</span>
								<textarea name="Description" rows = "10" cols="50"></textarea>
							</div>
							<label id = "DescriptionError"></label> <br /><br /> <br />
			
							<button id="back" type="button">Back</button> &emsp;&emsp;&emsp;&emsp; <input name="Register" type="submit" value="Register")/>
							<br />
							<br />
						</div>
					</center>
					</td>
				</center>
			</form>
		</table>
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

<!--
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
</footer>-->


</html>
