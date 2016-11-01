<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php
		session_start();
		$_SESSION['FirstName'] = $_POST['FirstName'];
	?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>

  <link rel="stylesheet" href="stylesheets/template.css">
		<?php include 'dbLogin.php' ?>
		<script src="admintabs.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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

	
	<div class="loginform">
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
		<form name="information" onsubmit="return validateRegistrationForm()">

				<?php
					$user = $_SESSION['Username'];
					echo "<h1>Admin Control Panel</h1><br />
					<h3>Welcome, $user.</h3>";
				?>
				
				
					  
	  <div id="details">

	  
	  <?php
	  //echo number of clients helped:
	    if ($result = mysqli_query($db, "SELECT * FROM Client")) {

    /* determine number of rows result set */
      $clientcount = mysqli_num_rows($result);

      echo "<br /><b>Helped clients:</b> $clientcount <br />";
    }
    
    
     //echo number of safe havens:
	    if ($aresult = mysqli_query($db, "SELECT * FROM House")) {

    /* determine number of rows result set */
      $safehavencount = mysqli_num_rows($aresult);

      echo "<b>Number of safe havens:</b> $safehavencount <br /><br />";
    }
    
	  ?>
	  
	  </div>
				
				
				

                    <ul class="tab" align="center">
                      <li><a href="#" class="tablinks" onclick="changeTabs(event, 'Clients')">Clients</a></li>
                      <li><a href="#" class="tablinks" onclick="changeTabs(event, 'Safe Havens')">Safe Havens</a></li>
                      <li><a href="#" class="tablinks" onclick="changeTabs(event, 'Users')">Pending Users</a></li>
                    </ul>
                    
                    <div id="Clients" class="tabcontent">
                      <h3>Clients</h3>
  									
  									<?php
  									
  									$sql = "SELECT * FROM Client";
                    $result = mysqli_query($db, $sql);
                    
                    $c = 1;
                    
                    $sql = "SELECT * FROM Client";
                    $result = $db->query($sql);
                    echo "<table id='clientInfo'>";
                    if ($result->num_rows > 0) {
    
                        echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Dependants</th><th>Pets</th><th>Infants</th><th></th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Email"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["Dependants"]."</td><td>".$row["Pets"]."</td><td>".$row["Infants"]."</td><td><button onclick='delete(c)'>Delete</button></td></tr>";
                        
                          $c++;
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                                        
                    echo "</table>";
  									//a
  									
  									
  									
  								$sql="SELECT Houseid, CAST(AES_DECRYPT(FirstName, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(LastName, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, CAST(AES_DECRYPT(Email, 'show2016') AS CHAR(50)) EmailDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(Postcode, 'show2016') AS CHAR(50)) PostcodeDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(State, 'show2016') AS CHAR(50)) StateDecrypt, Spacesavailable, Petfriendly, Gendertaken, Authorised, Nights FROM House WHERE Suburb LIKE '%$suburb%' AND PostCode LIKE '%$postcode%' AND City LIKE '%$city%' AND State LIKE '%$state%' AND SpacesAvailable >= $spaces AND InfantSpaces >= $userInfants AND PetFriendly >= $userPets";
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
                    
                    <script>
                      function delete(r) {
                        var i = r.parentNode.parentNode.rowIndex;
                        document.getElementById("clientInfo").deleteRow(i);
                      }
                    </script>
                      
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div id="Safe Havens" class="tabcontent">
                      <h3>Safe Havens</h3>
                      
                    	<?php
  									
  									$sql = "SELECT * FROM Client";
                    $result = mysqli_query($db, $sql);
                    
                    
                    
                    $sql = "SELECT * FROM House";
                    $result = $db->query($sql);
                    
                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Suburb</th><th>Post Code</th><th>Spaces Available</th><th>Infants Available</th><th>Pet Friendly</th><th>Bluecard</th><th>Police Check</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Email"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["Address"]."</td><td>".$row["Suburb"]."</td><td>".$row["PostCode"]."</td><td>".$row["SpacesAvailable"]."</td><td>".$row["InfantSpaces"]."</td><td>".$row["PetFriendly"]."</td><td>".$row["Bluecard"]."</td><td>".$row["PoliceCheck"]."</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                                        
                    
  									
                    ?>
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    </div>
                    
                    <div id="Users" class="tabcontent">
                      <h3>Users</h3>
                      
                      <?php
  									
                    
                    
                    
                    $sql = "SELECT * FROM User";
                    $result = $db->query($sql);
                    
                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Credentials</th><th>Admin</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["EmailAddress"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["Credentials"]."</td><td>".$row["Admin"]."</td><td><button type='button' name='makeadmin'>Make Admin</button></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                                        
                    
  									
                    ?>
                      
                      
                      
                      
                      
                      
                    </div>


	</div>
</body>

<footer>
<br />
	<center>Contact Us	|	About</center>
</footer>

</html>
