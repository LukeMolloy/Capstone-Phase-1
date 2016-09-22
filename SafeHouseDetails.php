<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
	ob_start();
	session_start();
	include 'dbLogin.php';
?>	
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="/inspectlocation.js"></script>
<script type="text/javascript" src="/popups.js"></script>
<link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
<link rel="stylesheet" href="stylesheets/template.css">
<link rel="stylesheet" href="stylesheets/popups.css">
<div class="navbar">
</div>
</head>

<div class="header">
    <label class="title">Safe Haven Our Women</label>
    <?php
			
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
    <?php
        $house = $_SESSION['Username'];
               	    
        $sql="SELECT * FROM House WHERE Email = $house";
        $result = mysqli_query($db, $sql);
                 
        if ($result->num_rows > 0) {
            echo "<table cellpadding='10px'><tr><th>First Name</th> <th>Last Name</th> <th>PhoneNumber</th> <th>Email</th> <th>Address</th> <th>City</th> <th></th></tr>";
        }
                    
        while($row = $result->fetch_assoc()) {
                        
            /*echo "$row['FirstName']";
            echo "$row['LastName']";
            echo "$row['PhoneNumber']";
            echo "$row['Email']";*/
            echo "
            <tr><td>".$row["FirstName"]."</td>
            <td>".$row["LastName"]."</td>
            <td>".$row["PhoneNumber"]."</td>
            <td>".$row["Email"]."</td>
            <td><div id='add'>".$row["Address"]."</div></td>
            <td><div id='city'>".$row["City"]."</div></td>
            </tr>";
            $description = $row["Description"];
        }
        *echo "</table>";
                    
    ?> 

</body>