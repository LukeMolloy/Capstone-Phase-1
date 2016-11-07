<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
	ob_start();
	session_start();
	
	if (!isset($_SESSION['loggedin']) && !$_SESSION['loggedin'] == true) {
	    header("Location: index.php");
	}
?>	


	<script type="text/javascript" src="/popups.js"></script>
    <link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>SafeHaven.OurWomen</title>
	<link rel="stylesheet" href="stylesheets/templatetest.css">
  
    <link rel="stylesheet" href="stylesheets/popups.css">
	<div class="navbar">
	</div>
	<?php include 'dbLogin.php' ?>
</head>
<body>
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
	<br /><br />
	<center><h1>Safe House Inspection</h1></center>
	<br /><br /><hr width="70%"><br />
	<center><br /><button>Click here to place client in the home</button><br /></center>
    <div class="loginform">
		<table width='70%'>
       		<?php
           		$house = $_GET['id'];
           	
          		$sql="SELECT CAST(AES_DECRYPT(Firstname, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(Lastname, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, Description FROM House WHERE HouseID = $house";
               	$result = mysqli_query($db, $sql);

              	while($row = $result->fetch_assoc()) {
              		echo "<td width='50%' align='left' valign='top'>";
              		echo "<strong>Name: </strong><p>".$row["FirstNameDecrypt"]." ".$row["LastNameDecrypt"]."</p>";
                    echo "<br />";
                    echo "<strong>Address: </strong>".$row["AddressDecrypt"];
                    echo "<br />";
                    echo "<strong>Suburb: </strong>".$row["SuburbDecrypt"];
                    echo "<br />";
                    echo "<strong>City: </strong>".$row["CityDecrypt"];
                    echo "<br />";
                    echo "<strong>Phone Number: </strong>".$row["PhoneNumberDecrypt"];
                    echo "<br />";
                     echo "<div style='width:400px;max-width:100%;overflow:hidden;height:300px;color:red;'><div id='gmap_display' style='height:100%; width:100%;max-width:100%;'><iframe style='height:100%;width:100%;border:0;' frameborder='0' src='https://www.google.com/maps/embed/v1/place?q=".$row["AddressDecrypt"]." ".$row["SuburbDecrypt"]." ".$row["CityDecrypt"]."&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU'></iframe></div><a class='embed-map-html' rel='nofollow' href='https://www.interserver-coupons.com' id='get-data-for-map'>https://www.interserver-coupons.com</a><style>#gmap_display img{max-width:none!important;background:none!important;font-size: inherit;}</style></div><script src='https://www.interserver-coupons.com/google-maps-authorization.js?id=f621b912-406a-9c5b-4a73-43d220a6035f&c=embed-map-html&u=1478059496' defer='defer' async='async'></script>";
                   	
                    echo "</td>";
                    echo "<td width='50%' align='right' valign='top'>";
                    echo "<strong>Description: </strong><p >".$row["Description"];
                    echo "<img src='images/home.jpg' alt='House' style='width:100%'";
                    echo "</p></td>";
                 
               	}
             
		
                        //echo "<table cellpadding='10px'><tr><th>First Name</th> <th>Last Name</th> <th>PhoneNumber</th> <th>Email</th> <th>Address</th> <th></th></tr>";
                  // echo "</table>";
           	?> 
    	</table>
	</div>
</body>
<div id="map" style="width:100%;height:500px"></div>



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
