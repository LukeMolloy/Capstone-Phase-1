<?php
require 'vendor/autoload.php';
$sendgrid = new SendGrid('app55568313@heroku.com', 'zukzurbh9121');

$email = new SendGrid\Email();
$email->addTo('luke.d.a.molloy@icloud.com')
    ->setFrom('noreply@show.com')
    ->setSubject('YOU GOT MAIL BITCH!')
    ->setText('I cant believe this works!')
    ->setHtml('<strong>THIS IS CRAZY</strong>');

$sendgrid->send($email);

?>