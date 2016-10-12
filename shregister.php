<?php
    ob_start();
    session_start();
    include 'dbLogin.php';

    $sql = $db->prepare("INSERT INTO House (FirstName, LastName, PhoneNumber, Email, Password, Address, Suburb, PostCode, City, State, SpacesAvailable)
	VALUES (AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), ?, AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), ?)");
	$sql->bind_param("ssssssssssi", $first, $last, $phonenumber, $email, $hashpassword, $address, $suburb, $postcode, $city, $state, $spacesavailable);
    //, $phonenumber, $email, $hashpassword, $address, $suburb, $postcode, $city, $state, $spacesavailable, $infantspaces, $petfriendly, $licenseNumber, $description, $gender, $nights
    $first = ($_POST['FirstName']);
	$last =  ($_POST['LastName']);
	$phonenumber = ($_POST['PhoneNumber']);
	$email = ($_POST['Email']);
	$address = ($_POST['Address']);
	$suburb = ($_POST['Suburb']);
	$city = ($_POST['City']);
	$state = ($_POST['State']);
	$postcode = ($_POST['PostCode']);
	$spaces = ($_POST['SpacesAvailable']);
	$spacesavailable = 1;
	$infantspaces = ($_POST['InfantSpaces']);
	$petfriendly = ($_POST['PetFriendly']);
    $licensenumber = ($_POST['licensenumber']);
	$description = ($_POST['Description']);
	$gender = ($_POST['GenderTaken']);
	$nights = ($_POST['Nights']);
	$DOB = ($_POST['Nights']);
	$password = ($_POST['Password']);
	$hashpassword = hash("sha256", $password);
	
	$sql->execute();
	$sql->close();
	
	
/*	$sql = "INSERT INTO House (FirstName, LastName, PhoneNumber, Email, Password, Address, Suburb, PostCode, City, State, SpacesAvailable, InfantSpaces, PetFriendly, LicenseNumber, Description, Gendertaken, Nights)
	VALUES (AES_ENCRYPT('$first', 'show2016'), AES_ENCRYPT('$last', 'show2016'), AES_ENCRYPT('$phonenumber', 'show2016'), AES_ENCRYPT('$email', 'show2016'), '$hashpassword', AES_ENCRYPT('$address', 'show2016'), AES_ENCRYPT('$suburb', 'show2016'), AES_ENCRYPT('$postcode', 'show2016'), AES_ENCRYPT('$city', 'show2016'), AES_ENCRYPT('$state', 'show2016'), '$spacesavailable', '$infantspaces', '$petfriendly', AES_ENCRYPT('$licenseNumber', 'show2016'), '$description', '$gender', '$nights')";
	
	mysqli_query($db, $sql);*.*/
?>