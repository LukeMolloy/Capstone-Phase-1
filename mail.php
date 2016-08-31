<?php
require_once("Mail.php");

$from = "Your Name <luke_d_a@hotmail.com>";
$to = "Luke <luke.d.a.molloy@icloud.com>";
$subject = "Subject";
$body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";

$host = "smtp.sparkpostmail.com ";
$username = "SMTP_Injection";
$password = "76c2919cc54c205851d087325b98997a81696fd3";

$headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);

$smtp = Mail::factory('smtp', array ('host' => $host,
                                     'auth' => true,
                                     'username' => $username,
                                     'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if ( PEAR::isError($mail) ) {
    echo("<p>Error sending mail:<br/>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message sent.</p>");
}
?>