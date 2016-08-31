<?php
    include('Mail.php');
    $mail = Mail::factory("mail");

    $headers = array("From"=>"me@example.com", "Subject"=>"Test Mail");
    $body = "This is a test!";
    $mail->send("luke.d.a.molloy@icloud.com", $headers, $body);
?>

