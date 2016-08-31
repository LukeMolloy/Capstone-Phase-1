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
	//print_r($row);	
//	if ($row[7] == 1) {
//		echo "dsssdasfafasfs";
//	}
//	else {
//		echo "no";
//	}
	
	
	
		
	
		//$_SESSION['Phone'] = $_POST['Phone'];
		
		//if($_SESSION['Admin'] == 1) {
	//		echo "admin";
   // 	}
	?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <link rel="stylesheet" href="stylesheets/template.css">
		
		<script src="validationClient.js"></script>
</head>

<body>
<div class="header">
		<label class="title">Safe Haven Our Women</label>
			<?php
			if ($row[7] == 1) {
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
			
			<li><a href="/About.php">About Us</a></li>
			<li><a href="/Contact.php">Contact Us</a></li>

 
		
	</div>
	<div class="navbar">
	</div>
	<?php
		//$userID = ($_POST['UserID']);
		$first = ($_POST['FirstName']);
		$last =  ($_POST['LastName']);
		$email = ($_POST['Email']);
		$phone = ($_POST['Phone']);
		$dependants = ($_POST['Dependants']);
		$pets =  ($_POST['Pets']);
		$infants = ($_POST['Infants']);
		
		
		
	
		
		if($first == "" || $last == "" || $email == "" || $phone == "" || $dependants == "" || $pets == "" || $infants == ""){
		
		}else{
			$sql = "INSERT INTO Client (FirstName, LastName, Email, PhoneNumber, Dependants, Pets, Infants)
			VALUES ('$first', '$last', '$email', '$phone', '$dependants', '$pets', '$infants')";
			
			mysqli_query($db, $sql);
			$_SESSION['Phone'] = $phone;
			header('Location: safehaven.php');
		}
		
	?>
	
	<div class="loginform">
		<form name="clientRegistration" method="post">
			<!--onsubmit="return validateRegistrationForm()-->
			<center>
				<?php
					$user = $_SESSION['Username'];
					echo "<h1>Welcome, $user.</h1><br />
					<h2>Please enter the client's details below to search for a safe haven.</h2>";
				?>
			<br /><br /><br /><br />
			<table align="center">
				
			<label id="S1Label"><h2>Step 1</h2> </label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label id="S2Label"><h2>Step 2</h2></label><br /><br /><br /><br />
			<div id="step1form">

			<label id="FirstName">First Name: </label> <input name="FirstName" type="text"/><label id="FirstNameError" class="error"></label><br /><br /><br /><br />

			<label id="LastName">Last Name: </label> <input name="LastName" type="text"/><label id="LastNameError" class="error"></label><br /><br /><br /><br />

			<label id="Email">Email Address: </label> <input name="Email" type="text"/><label id="EmailError" class="error"></label><br /><br /><br /><br />
			
			<label id="Phone">Phone Number: </label> <input name="Phone" type="text"/><label id="PhoneError" class="error"></label><br /><br /><br /><br />
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
			<br /><br /><br /><br />
			
			<label id="Pets">Pets: </label>
			<input type="radio" name="Pets" value="No" checked="checked"> No  &nbsp&nbsp <input type="radio" name="Pets" value="Yes" selected> Yes<br><br /><br /><br /><br />
			
			
			<label id="Infants">Infants: </label> 
				<select name="Infants">
				  <option value="0" selected>0</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5+">5+</option>
			</select>
			<br /><br /><br /><br />
			
			 <textarea name="Extra" rows="10" cols="100">
				Add any extra information here.
			 </textarea>
			 <br /><br /><br /><br />
					<button id="back" type="button">Back</button>	<input name="Register" type="submit" value="Register" />
			</div>
			
		
			</table>
			
			</center>
		</form>
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
	<center>Contact Us	|	About</center>
</footer>

</html>
