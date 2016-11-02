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

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd4s12YPZmYZNQwaPTHF0Dcx8ZClsMVqg&callback=initMap"
  type="text/javascript"></script>
	
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
	<br /><br /><hr width="70%"><br /><br />
    <div class="loginform">
		<table width='70%'>
       		<?php
           		$house = $_GET['id'];
           	
          		$sql="SELECT CAST(AES_DECRYPT(Firstname, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(Lastname, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, Description FROM House WHERE HouseID = $house";
               	$result = mysqli_query($db, $sql);

              	while($row = $result->fetch_assoc()) {
              		echo "<td width='50%' align='left'>";
                   	echo "<strong>Name: </strong><p>".$row["FirstNameDecrypt"]." ".$row["LastNameDecrypt"]."</p>";
                    echo "<br />";
                    echo "<strong>Address: </strong>".$row["AddressDecrypt"];
                    echo "<br />";
                    echo "<strong>Suburb: </strong>".$row["SuburbDecrypt"];
                    echo "<br />";
                    echo "<strong>City: </strong>".$row["CityDecrypt"];
                    echo "<br />";
                    echo "<strong>Phone Number: </strong>".$row["CityDecrypt"];
                    echo "<br />";
                    echo "<br /><br /><button>Place Client</button><br /> <br /><br />";
                    echo "</td>";
                    echo "<td width='50%' align='left'>";
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

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), 
    zoom: 10
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<?php

function lookup($string){
  $quotaguard_env = getenv("QUOTAGUARD_URL");
  $quotaguard = parse_url($quotaguard_env);

  $proxyUrl       = $quotaguard['host'].":".$quotaguard['port'];
  $proxyAuth       = $quotaguard['user'].":".$quotaguard['pass'];

   $string = str_replace (" ", "+", urlencode($string));
   $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$string."&sensor=false";

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $details_url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_PROXY, $proxyUrl);
   curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);
   curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyAuth);
   $response = json_decode(curl_exec($ch), true);

   // If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
   if ($response['status'] != 'OK') {
    return null;
   }

   print_r($response);
   $geometry = $response['results'][0]['geometry'];

    $longitude = $geometry['location']['lng'];
    $latitude = $geometry['location']['lat'];

    $array = array(
        'latitude' => $latitude,
        'longitude' => $longitude,
        'location_type' => $geometry['location_type'],
    );

    return $array;

}
?>


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
