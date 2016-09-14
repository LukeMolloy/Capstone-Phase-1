<?php
	ob_start();
    session_start();



require 'vendor/autoload.php';
$sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');
$_SESSION['Email'] = $_POST['Email'];
	$emailEntered = $_SESSION['Email'];
	
$_SESSION['FirstName'] = $_POST['FirstName'];
    $firstNameEntered = $_SESSION['FirstName'];


$email = new SendGrid\Email();
$email->addTo($emailEntered)
    ->setFrom('noreply@show.com')
    ->setSubject('Thank you for registering!')
    //->setText('I cant believe this works!')
    ->setHtml('<strong>Hello <?php echo $firstNameEntered ?> </strong> <br /> <br />
    Your account is requiring validation, and then you may use the system.<br /><br /> Thank you!
   ');

$sendgrid->send($email);
	header("location:index.php");
?>