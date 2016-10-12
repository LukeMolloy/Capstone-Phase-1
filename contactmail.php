<?php
	ob_start();
    session_start();
    include 'dbLogin.php';
    require 'vendor/autoload.php';
    
    $sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');
    //$_SESSION['Email'] = $_POST['Email'];
    
    $shcemail = 'luke.d.a.molloy@icloud.com';
	$emailEntered = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $email = new SendGrid\Email();
    $email->addTo($shcemail)
    ->setFrom($emailEntered)
    ->setSubject('Safe Haven Comunity Inquiry')
    ->setHtml('<?php echo $message ?><strong>From <?php echo $name ?></strong>');

    $sendgrid->send($email);
    
?>