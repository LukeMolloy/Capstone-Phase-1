<?php
	ob_start();
    session_start();



require 'vendor/autoload.php';
$sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');
$_SESSION['Email']= $_POST['Email'];
	$emailEntered = $_SESSION['Email'];


$email = new SendGrid\Email();
$email->addTo($emailEntered)
    ->setFrom('noreply@show.com')
    ->setSubject('YOU GOT MAIL BITCH!')
    ->setText('I cant believe this works!')
    ->setHtml('<strong>THIS IS CRAZY</strong>');

$sendgrid->send($email);

?>