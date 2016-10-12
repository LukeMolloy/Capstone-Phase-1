<?php
    ob_start();
    session_start();
    include 'dbLogin.php';

    $sql = $db->prepare("INSERT INTO House (FirstName, LastName, PhoneNumber, Email, Password, Address, Suburb, PostCode, City, State, SpacesAvailable, InfantSpaces, PetFriendly, LicenseNumber, Description, GenderTaken, Nights)
	VALUES (AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), ?, AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), AES_ENCRYPT(?, 'show2016'), ?, ?, ?, AES_ENCRYPT(?, 'show2016'), ?, ?, ?)");
	$sql->bind_param("ssssssssssiiissss", $first, $last, $phonenumber, $email, $hashpassword, $address, $suburb, $postcode, $city, $state, $spacesavailable, $infantspaces, $petfriendly, $licensenumber, $description, $gender, $nights);
    
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
	$spacesavailable = ($_POST['SpacesAvailable']);
	$infantspaces = ($_POST['InfantSpaces']);
	$petfriendly = ($_POST['PetFriendly']);
    $licensenumber = ($_POST['licenseNumber']);
	$description = ($_POST['Description']);
	$gender = ($_POST['GenderTaken']);
	$nights = ($_POST['Nights']);
	$password = ($_POST['Password']);
	$hashpassword = hash("sha256", $password);
	
	$sql->execute();
	$sql->close();
	
	require 'vendor/autoload.php';
    $sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');
    $email = new SendGrid\Email();
    $email->addTo($email)
    ->setFrom('noreply@shc.com')
    ->setSubject('You have successfully applied to become a safehouse!')
    ->setHtml('<strong>Hello <?php echo $first ?> </strong> <br /> <br />
    Your account is undergoing verification. You will recieve an email when you become part of the system. You can edit your details by logging in as a safehouse.<br /><br /> Thank you!
   ');

    $sendgrid->send($email);
	
	header("location:index.php");
?>