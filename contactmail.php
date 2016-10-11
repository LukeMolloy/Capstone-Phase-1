<?php
	ob_start();
    session_start();
    include 'dbLogin.php';
    
    $sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');
    //$_SESSION['Email'] = $_POST['Email'];
	$emailEntered = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $email = new SendGrid\Email();
    $email->addTo($emailEntered)
    ->setFrom()
    ->setSubject()
    ->setHtml();

    $sendgrid->send($email);
    
?>