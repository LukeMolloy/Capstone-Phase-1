<?php
require 'vendor/autoload.php';
$sendgrid = new SendGrid('lukemolloy01', 'Tuchanka12');

$email = new SendGrid\Email();
$email->addTo('luke.d.a.molloy@icloud.com')
    ->setFrom('me@bar.com')
    ->setSubject('Subject goes here')
    ->setText('Hello World!')
    ->setHtml('<strong>Hello World!</strong>');

$sendgrid->send($email);

?>

