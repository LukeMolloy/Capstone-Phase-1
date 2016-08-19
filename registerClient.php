<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php
		session_start();
		$_SESSION['FirstName'] = $_POST['FirstName'];
		//$_SESSION['Phone'] = $_POST['Phone'];
	?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>

  <link rel="stylesheet" href="stylesheets/template.css">
		<?php include 'dbLogin.php' ?>
		<script src="validationClient.js"></script>
</head>

<body>
<div class="header">
		<label class="title">Safe Haven Our Women</label>
 			<li><a href="">Login</a></li>
 			<li><a href="">Apply</a></li>
			<li><a href="">About Us</a></li>
			<li><a href="">Contact Us</a></li>
		</ul> 
		
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
		<form name="clientRegistration" onsubmit="return validateRegistrationForm()" method="post">
			<center>
				<?php
					$user = $_SESSION['Username'];
					echo "<h1>Welcome, $user.</h1><br />
					<h2>Please enter the client's details below to search for a safe haven.</h2>";
				?>
			<br /><br /><br /><br />
			<table align="center">
				<tr>
					<td>
			<label id="FirstName">First Name</label><br /> <input name="FirstName" type="text"/><br /><br /><br /><br /></td>
		<td>
			<label id="LastName">Last Name</label><br /> <input name="LastName" type="text"/><br /><br /><br /><br /></td>
			</tr>
			<tr>
				<td>
			<label id="Email">Email</label><br /> <input name="Email" type="text"/><br /><br /><br /><br /></td>
			<td>
			<label id="Phone">Phone Number</label><br /> <input name="Phone" type="text"/><br /><br /><br /><br /></td>
			</tr>
			
			<tr>
				<td>
			<label id="Dependants">Dependants</label><br /> <input name="Dependants" type="text"/><br /><br /><br /><br /></td>
			<td>
			<label id="Pets">Pets</label><br /> <input name="Pets" type="text"/><br /><br /><br /><br /></td>
			</tr>
			<tr>
				<td>
			<label id="Infants">Infants</label><br /> <input name="Infants" type="text"/><br /><br /><br /><br /></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
			<input name="Register" type="submit" value="Register" /></td></tr>
			</table>
			</center>
		</form>
	</div>
</body>

<footer>
<br />
	<center>Contact Us	|	About</center>
</footer>

</html>
