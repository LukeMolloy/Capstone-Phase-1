<?php
    ob_start();
    session_start();
    include 'dbLogin.php';
    require 'vendor/autoload.php';

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
	
    $sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');
    $emailmsg = new SendGrid\Email();
    $emailmsg->addTo($email)
    ->setFrom('noreply@shc.com')
    ->setSubject('You have successfully applied to become a safehouse!')
    ->setHtml("<strong>Hello $first,</strong> <br /> <br />
    Thank you for entering your information into the Safe Haven Community system. We really appreciate 
    your involvement in this early testing phase of the system.
    <br /><br />
    If all goes well we would like to include your information in the final release of the service.
    When this phase arives you will be informed.
    <br /><br /> Thank you!
   ");

    $sendgrid->send($emailmsg);
	
	header("location:Thankyou1.php");
?>