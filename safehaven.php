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
 
 <!--           <article>
             Place the map here 
            </article> -->
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
               	
               	$sql="SELECT AES_DECRYPT(Firstname, 'show2016') FROM House WHERE Suburb LIKE '%$suburb%' AND PostCode LIKE '%$postcode%' AND City LIKE '%$city%' AND State LIKE '%$state%' AND SpacesAvailable >= $spaces AND InfantSpaces >= $userInfants AND PetFriendly >= $userPets";
               	$result = mysqli_query($db, $sql);
               	echo "<table align='center' cellspacing='30'><tr><th colspan='2'>Safe Haven Owner</th> <th>PhoneNumber</th> <th>Email</th> <th>Address</th> <th>Suburb</th> <th>City</th> <th>State</th><th></th></tr>";
               	if($result != NULL){
               	    while($row = $result->fetch_assoc()) {
                        echo "
                        <tr onmouseover='popUp()'><td>".$row["FirstName"]."</td>";
                       /* <td>".$row["LastName"]."</td>
                        <td>".$row["PhoneNumber"]."</td>
                        <td>".$row["Email"]."</td>
                        <td>".$row["Address"]."</td>
                        <td>".$row["Suburb"]."</td>
                        <td>".$row["City"]."</td>
                        <td>".$row["State"]."</td>
                        
                        
                        <td>  <a href='inspectsafehaven.php?id=$row[HouseID]'><button>Inspect</button></a></td></tr>";*/
                    }
                    echo "</table>"; 
               	}else{
               	    echo "No results";
               	}
            ?>

</div>


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
