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
	<?php 
	include 'dbLogin.php';
	include 'key/key.php';
	?>
	
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
</head>


	<div class="header">
		<label class="title">Safe Haven Community</label>
		<?php
			if ($row[7] == 1) {
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
	<div class="navbar">
		 
	</div>
	
<body>
    <div class="loginform">
        <h2 align>Find a safe haven.</h2>
        <br /> <br />
        <form method ="post" action ="searchsafehaven.php">
            
            <label class="search">      Search By Suburb: </label>
            <input type="text" name="Suburb" size="30">
            <label class="search">      Search By Post Code: </label>
            <input type="intager" name="Postcode" size="30"> 
            <label class="search">      Search By City: </label>
            <input type="text" name="City" size="30"> 
            <label class="search">      Search By State: </label>
            <input type="text" name="State" size="30"> 
            <input name="Search" type="submit" value="Search"/>
        </form>
        <br /> <br /><hr align="center" width="90%"><br /><br />

         <h2>Suggested Safe Haven(s):</h2>
        <br /> <br />
            <?php
         
        		$userDependants = $_SESSION['ClientDependants'];
               	$userPets = $_SESSION['ClientPets'];
               	$userInfants = $_SESSION['ClientInfants'];
               	
               	$spaces = $userDependants + 1;
               	
               	$suburb = $_SESSION['Suburb'];
               	$postcode = $_SESSION['Postcode'];
               	$city = $_SESSION['City'];
               	$state = $_SESSION['State'];
               	
               	$sql="SELECT Houseid, CAST(AES_DECRYPT(FirstName, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(LastName, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, CAST(AES_DECRYPT(Email, 'show2016') AS CHAR(50)) EmailDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(Postcode, 'show2016') AS CHAR(50)) PostcodeDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(State, 'show2016') AS CHAR(50)) StateDecrypt, Spacesavailable, Petfriendly, Gendertaken, Authorised, Nights FROM House WHERE AES_DECRYPT(Suburb, 'show2016') LIKE '%$suburb%' AND AES_DECRYPT(PostCode, 'show2016') LIKE '%$postcode%' AND AES_DECRYPT(City, 'show2016') LIKE '%$city%' AND AES_DECRYPT(State, 'show2016') LIKE '%$state%' AND SpacesAvailable >= $spaces AND InfantSpaces >= $userInfants AND PetFriendly >= $userPets";
               	//$sql = "SELECT CAST(AES_DECRYPT(FirstName, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(LastName, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, CAST(AES_DECRYPT(Email, 'show2016') AS CHAR(50)) EmailDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(Postcode, 'show2016') AS CHAR(50)) PostcodeDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(State, 'show2016') AS CHAR(50)) StateDecrypt, Spacesavailable, Petfriendly, Gendertaken, Authorised, Nights FROM House WHERE LastName = 'Name'";
               	$result = mysqli_query($db, $sql);
               	echo "<table align='center' cellspacing='30'><tr><th colspan='2'>Safe Haven Owner</th> <th>PhoneNumber</th> <th>Email</th> <th>Address</th> <th>Suburb</th> <th>City</th> <th>State</th><th></th></tr>";
               	if($result != NULL){
               	    while($row = $result->fetch_assoc()) {
                        echo "
                        <tr onmouseover='popUp()'><td>".$row["FirstNameDecrypt"]."</td>
                    	<td>".$row["LastNameDecrypt"]."</td>
                        <td>".$row["PhoneNumberDecrypt"]."</td>
                        <td>".$row["EmailDecrypt"]."</td>
                        <td>".$row["AddressDecrypt"]."</td>
                        <td>".$row["SuburbDecrypt"]."</td>
                        <td>".$row["CityDecrypt"]."</td>
                        <td>".$row["StateDecrypt"]."</td>
                        
                        
                        <td>  <a href='inspectsafehaven.php?id=$row[Houseid]'><div class='dropdown'><button class='dropbtn'>Inspect</button><div class='dropdown-content'></div></div></a></td></tr>";
                    } 
                    echo "</table>"; 
               	}else{
               	    echo "No results";
               	}
            ?>

</div>
<!--aaaaa-->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <p>Some text in the Modal..</p>
  </div>

</div>





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
