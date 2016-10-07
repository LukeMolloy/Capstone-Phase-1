<?php
	ob_start();
    session_start();
    include 'dbLogin.php';

    $sql = $db->prepare("INSERT INTO User (FirstName, LastName, EmailAddress, Password)	VALUES (?, ?, ?, ?, ?)");
	$sql->bind_param("ssss", $first, $last, $email, $hashpassword);
		
	$first = ($_POST['FirstName']);
	$last =  ($_POST['LastName']);
	$email = ($_POST['Email']);
	//$phone = ($_POST['Phonenumber']);
	//$job = ($_POST['Jobtitle']);
	$password = ($_POST['Password']);

	$hashpassword = hash("sha256", $password);
	$sql->execute();
	$sql->close();
    
   /* require 'vendor/autoload.php';
    $sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');
    $_SESSION['Email'] = $_POST['Email'];
	$emailEntered = $_SESSION['Email'];
	
    $_SESSION['FirstName'] = $_POST['FirstName'];
    $firstNameEntered = $_SESSION['FirstName'];


    $email = new SendGrid\Email();
    $email->addTo($emailEntered)
    ->setFrom('noreply@show.com')
    ->setSubject('Thank you for registering!')
    ->setHtml('<strong>Hello <?php echo $firstNameEntered ?> </strong> <br /> <br />
    Your account is requiring validation, and then you may use the system.<br /><br /> Thank you!
   ');

    $sendgrid->send($email);*/
	header("location:index.php");
?>