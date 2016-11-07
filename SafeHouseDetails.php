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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	</div>
	<?php include 'dbLogin.php' ?>
	
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

	
<body>
    <div class="loginform">
    
        <?php
        echo "<h1>Hello $a</h1> <br /><br />";
        ?>
        <hr width="70%"><br />
        <table cellspacing="100">
    		<td valign="top">
    			<h2>Update your details quickly:  </h2><br /><br /><br /><br /><br /><br /><br /><br />
    			<h2>Update details which will require reauthorisation</h2>
    			</td>
    			<td valign="top">
    			
    			<?php 
        
    	
        
        
        $sql="SELECT CAST(AES_DECRYPT(FirstName, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(LastName, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, CAST(AES_DECRYPT(Email, 'show2016') AS CHAR(50)) EmailDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(Postcode, 'show2016') AS CHAR(50)) PostcodeDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(State, 'show2016') AS CHAR(50)) StateDecrypt, Spacesavailable, Petfriendly, Gendertaken, Authorised, Nights FROM House 
        WHERE Email = AES_ENCRYPT('$a', 'show2016')";
        
    	$number="SELECT Spacesavailable FROM House WHERE Email = AES_ENCRYPT('$a', 'show2016')";
       
      //$newvalue = array();
      
             
               	//$sql = "SELECT CAST(AES_DECRYPT(FirstName, 'show2016') AS CHAR(50)) FirstNameDecrypt, CAST(AES_DECRYPT(LastName, 'show2016') AS CHAR(50)) LastNameDecrypt, CAST(AES_DECRYPT(PhoneNumber, 'show2016') AS CHAR(50)) PhoneNumberDecrypt, CAST(AES_DECRYPT(Email, 'show2016') AS CHAR(50)) EmailDecrypt, CAST(AES_DECRYPT(Address, 'show2016') AS CHAR(50)) AddressDecrypt, CAST(AES_DECRYPT(Suburb, 'show2016') AS CHAR(50)) SuburbDecrypt, CAST(AES_DECRYPT(Postcode, 'show2016') AS CHAR(50)) PostcodeDecrypt, CAST(AES_DECRYPT(City, 'show2016') AS CHAR(50)) CityDecrypt, CAST(AES_DECRYPT(State, 'show2016') AS CHAR(50)) StateDecrypt, Spacesavailable, Petfriendly, Gendertaken, Authorised, Nights FROM House WHERE LastName = 'Name'";
               	$result = mysqli_query($db, $sql);
               	
               	
               	
               	if($result != NULL){
               		
               	    while($row = $result->fetch_assoc()) {
                        echo "
                        <form method='POST'><table>
                        <tr><input type='submit' value='Update' name='submit' class='updatebutton' id='submit'></tr>
                        <tr><th>Spaces Available: </th><td><input type='text' id='number' name='number' value=".$row["Spacesavailable"]." size='2' readonly></td><td><button type='button' class='updatebutton' onclick='add();'>&nbsp + &nbsp</button> <button class='updatebutton' type='button' onclick='minus();'>&nbsp - &nbsp</button></td></tr>
						<tr><th>Gender taken: </th><td colspan='3'>
							<select name='gendertaken'>
								  <option value=".$row["Gendertaken"].">".$row["Gendertaken"]."</option>
								  <option value='Male'>Male</option>
								  <option value='Female'>Female</option>
								  <option value='NoPreference'>NoPreference</option>
							</select></td><td></td><td></td></tr>
							
						<tr><th>Pet friendly: </th><td colspan='3'>
						
						
							<select name='petfriendly' style='width: 100%;'>
							
								  <option value=".$row["Petfriendly"].">".$row["Petfriendly"]."</option>
								  <option value='1'>Yes</option>
								  <option value='0'>No</option>
								  
							</select></td><td></td><td></td></tr>
							
					
						<tr><th>Length of stay: </th><td><input type='text' id='nights' name='nights' value=".$row["Nights"]." size='2' readonly></td><td><button type='button' class='updatebutton' onclick='addnights();'>&nbsp + &nbsp</button> <button class='updatebutton' type='button' onclick='minusnights();'>&nbsp - &nbsp</button></td></tr>
						</table>
						
						
						
						<br /><hr><br />
						<table><tr><th>First Name</th><td><input type='text' name='editfirst' value=".$row["FirstNameDecrypt"]."></td></tr>
                    	<tr><th>Last Name</th><td><input type='text' name='editlast' value=".$row["LastNameDecrypt"]."></td></tr>
                        <tr><th>Phone Number</th><td><input type='text' name='editphone' value=".$row["PhoneNumberDecrypt"]."></td></tr>
                        <tr><th>Email</th><td><input type='text' name='editemail' value=".$row["EmailDecrypt"]."></td></tr><br />
                        <tr><th>Address</th><td><input type='text' name='editaddress' value=".$row["AddressDecrypt"]."></td></tr>
                        <tr><th>Suburb</th><td><input type='text' name='editsuburb' value=".$row["SuburbDecrypt"]."></td></tr>
                        <tr><th>Post Code</th><td><input type='text' name='editpostcode' value=".$row["PostcodeDecrypt"]."></td></tr>
                        <tr><th>City</th><td><input type='text' name='editcity' value=".$row["CityDecrypt"]."></td></tr>
                        <tr><th>State</th><td><input type='text' name='editstate' value=".$row["StateDecrypt"]."></td></tr>
                        <tr><input type='submit' value='Update' name='submit2' class='updatebutton' id='submit2'></tr></table></form>";               
                        
                        
                       
               	                      
               	    }
               	    	
               	    
               	    
               	   
					$newnumber = $_POST['number'];
					$newgender = $_POST['gendertaken'];
					$newpet = $_POST['petfriendly'];
					$newnights = $_POST['nights'];
					
					$first = $_POST['editfirst'];
					$last = $_POST['editlast'];
					$phonenumber = $_POST['editphone'];
					$email = $_POST['editemail'];
					$address = $_POST['editaddress'];
					$suburb = $_POST['editsuburb'];
					$postcode = $_POST['editpostcode'];
					$city = $_POST['editcity'];
					$state = $_POST['editstate'];

               	     $stmt = "UPDATE House SET Spacesavailable='$newnumber', Gendertaken='$newgender', Petfriendly='$newpet', Nights='$newnights' WHERE Email = AES_ENCRYPT('$a', 'show2016')";
               	     $secondstmt = "UPDATE House SET Authorised = '0', Firstname= AES_ENCRYPT('$first', 'show2016'), Lastname= AES_ENCRYPT('$last', 'show2016'), Phonenumber = AES_ENCRYPT('$phonenumber', 'show2016'), Email = AES_ENCRYPT('$email', 'show2016'), Address = AES_ENCRYPT('$address', 'show2016'), Suburb = AES_ENCRYPT('$suburb', 'show2016'), Postcode = AES_ENCRYPT('$postcode', 'show2016'), City = AES_ENCRYPT('$city', 'show2016'), State = AES_ENCRYPT('$state', 'show2016')
               	     WHERE Email = AES_ENCRYPT('$a', 'show2016')";
               	    
               	    if(isset($_POST['submit'])){
               	    	$
							$dothis = mysqli_query($db, $stmt);
							header('Location: Thankyou.php'); 
						}
						
					if(isset($_POST['submit2'])){
               	    	$
							$dothisthis = mysqli_query($db, $secondstmt);
								header('Location: Thankyou.php'); 
						}
						
               	}
              
        
//sdfsd
?>
</td>
</table>
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

<script>

function add() {
    $('#number').val( function(i, oldval) {
        return ++oldval;
    });
}

function minus() {
    $('#number').val( function(i, oldval) {
        return --oldval;
    });
}


function addnights() {
    $('#nights').val( function(i, oldval) {
        return ++oldval;
    });
}

function minusnights() {
    $('#nights').val( function(i, oldval) {
        return --oldval;
    });
}

</script>

<!-- <tr><th>First Name</th><td>".$row["FirstNameDecrypt"]."</td><td><input type='text' name='editname'></td></tr><br /><br />
                    	<tr><th>Last Name</th><td>".$row["LastNameDecrypt"]."</td><td><input type='text' name='editname'></td></tr><br /><br />
                        <tr><th>Phone Number</th><td>".$row["PhoneNumberDecrypt"]."</td><td><input type='text' name='editname'></td></tr><br /><br />
                        <tr><th>Email</th><td>".$row["EmailDecrypt"]."</td><td><input type='text' name='editname'></td></tr><br /><br />
                        <tr><th>Address</th><td>".$row["AddressDecrypt"]."</td><td><input type='text' name='editname'></td></tr><br /><br />
                        <tr><th>Suburb</th><td>".$row["SuburbDecrypt"]."</td><td><input type='text' name='editname'></td></tr><br /><br />
                        <tr><th>City</th><td>".$row["CityDecrypt"]."</td><td><input type='text' name='editname'></td></tr><br /><br />
                        <tr><th>State</th><td>".$row["StateDecrypt"]."</td><td><input type='text' name='editname'></td></tr>
                        
                        PhoneNumber = AES_ENCRYPT('$phonenumber', 'show2016'), Email = AES_ENCRYPT('$email', 'show2016'), Address = AES_ENCRYPT('$address', 'show2016'), Suburb = AES_ENCRYPT('$suburb', 'show2016'), PostCode = AES_ENCRYPT('$postcode', 'show2016'), City = AES_ENCRYPT('$city', 'show2016'), State = AES_ENCRYPT('$state', 'show2016')
                        
                        -->