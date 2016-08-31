<?php
require_once 'Mail.php';

$wgSMTP = array(
    'host' => 'tls://smtp.sendgrid.net',
    'IDHost' => 'heroku.com',
    'port' => 587,
    'username' => getenv("lukemolloy01"), 
    'password' => getenv("Tuchanka12"),
    'auth' => true
 );
 
$msg = "First line of text\nSecond line of text";

mail("luke.d.a.molloy@icloud.com","My subject",$msg);

?>

