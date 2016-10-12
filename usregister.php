<?php
	ob_start();
    session_start();
    include 'dbLogin.php';
	require 'vendor/autoload.php';
	
    $sql = $db->prepare("INSERT INTO User (FirstName, LastName, EmailAddress, Password, PhoneNumber, JobTitle, Information)
		VALUES (?, ?, ?, ?, ?, ?, ?)");
	$sql->bind_param("sssssss", $first, $last, $email, $hashpassword, $phone, $job, $info);
		
	$first = ($_POST['FirstName']);
	$last =  ($_POST['LastName']);
	$email = ($_POST['Email']);
	$phone = ($_POST['Phonenumber']);
	$job = ($_POST['Jobtitle']);
	$info = ($_POST['Information']);
	$password = ($_POST['Password']);

	$hashpassword = hash("sha256", $password);
	$sql->execute();
	$sql->close();
	
    $sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');
    $emailmsg = new SendGrid\Email();
    $emailmsg->addTo($email)
    ->setFrom('noreply@shc.com')
    ->setSubject('You have successfully applied to become a user!')
    ->setHtml('<strong>Hello <?php echo $first ?> </strong> <br /> <br />
    Your account is undergoing verification. You will recieve an email when you can use the system.<br /><br /> Thank you!
   ');

    $sendgrid->send($emailmsg);
	header("location:index.php");
?>