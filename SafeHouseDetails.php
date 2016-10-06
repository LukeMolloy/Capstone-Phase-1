<!--<body>
    <h1>Test SH Page</h1>
    <?php
        session_start();
        ob_start();
        
        $a = $_SESSION['Username'];
        
        echo $a;
    ?>

</body> -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php
	    ob_start();
    ?>	
    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="/location.js"></script>
    <script type="text/javascript" src="/popups.js"></script>
    <link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>SafeHaven.OurWomen</title>
    <link rel="stylesheet" href="stylesheets/templatetest.css">
    <link rel="stylesheet" href="stylesheets/popups.css">
	<div class="navbar">
	</div>
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
</head>


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
			<li><a href="/registerClient.php">Register Client</a></li>

	</div>

	
<body>
    <div class="loginform">
        <?php
        echo "<h1>Hello $a</h1> <br /><br />
        <h2>Find and edit your details below:</h2>";
        
        $sql="SELECT CAST(AES_DECRYPT(FirstName, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(LastName, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, CAST(AES_DECRYPT(Email, 'show2016') AS CHAR(50)) EmailDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(Postcode, 'show2016') AS CHAR(50)) PostcodeDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(State, 'show2016') AS CHAR(50)) StateDecrypt, Spacesavailable, Petfriendly, Gendertaken, Authorised, Nights FROM House 
        WHERE Email = AES_ENCRYPT('$a', 'show2016')";
               	//$sql = "SELECT CAST(AES_DECRYPT(FirstName, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(LastName, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, CAST(AES_DECRYPT(Email, 'show2016') AS CHAR(50)) EmailDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(Postcode, 'show2016') AS CHAR(50)) PostcodeDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(State, 'show2016') AS CHAR(50)) StateDecrypt, Spacesavailable, Petfriendly, Gendertaken, Authorised, Nights FROM House WHERE LastName = 'Name'";
               	$result = mysqli_query($db, $sql);
               
               	if($result != NULL){
               	    while($row = $result->fetch_assoc()) {
                        echo "<table align='center' cellspacing='50'>
                        <tr><th>First Name</th><td>".$row["FirstNameDecrypt"]."</td></tr>
                    	<tr><th>Last Name</th><td>".$row["LastNameDecrypt"]."</td></tr>
                        <tr><th>Phone Number>/th><td>".$row["PhoneNumberDecrypt"]."</td></tr>
                        <tr><th>Email</th><td>".$row["EmailDecrypt"]."</td></tr>
                        <tr><th>Address</th><td>".$row["AddressDecrypt"]."</td></tr>
                        <tr><th>Suburb</th><td>".$row["SuburbDecrypt"]."</td></tr>
                        <tr><th>City</th><td>".$row["CityDecrypt"]."</td></tr>
                        <tr><th>State</th><td>".$row["StateDecrypt"]."</td></tr>
                        
                        
                        
                    } 
                    echo "</table>"; 
               	}else{
               	    echo "No results";
               	}
        

?>
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
