<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php
		session_start();
		require('sendgrid-php/SendGrid_loader.php');
	?>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>SafeHaven.OurWomen</title>
    <link rel="stylesheet" href="stylesheets/template.css">
    <link rel="stylesheet" href="stylesheets/home.css">
    <?php include 'dbLogin.php' ?>
	<script src="validationClient.js"></script>
</head

<body>
<div class="loginform">
	<center><h1 class="heading">SH.OW</h1></center>
	<center><h2 class="heading2">- Our Women We Care -</h2></center>
</div>
<div class="header">
	<label class="title">Safe Haven Our Women</label>
 		<li><a href="/login.php">Login / Register</a></li>
		<li><a href="/About.php">About Us</a></li>
		<li><a href="/Contact.php">Contact Us</a></li>
		<li><a href="/index.php">Home</a></li>
	</ul> 
</div>
<div class="loginform" >
    <p></p>
    <center>
    <div class="links">
        <table class="pics" align="" cellpadding="20px">
        <tr>
        <th>
        <div id="news">
            <img src="images/newspaper.png" alt="Mountain View" style="width:220px;height:160px;">
        </div>
        </th>
        <th>
        <div id="sm">
            <img src="images/SocialMedia.gif" alt="Mountain View" style="width:220px;height:160px;">
        </div>
        </th>
        <th>
        <div id="sponsors">
            <img src="images/sponsor.png" alt="Mountain View" style="width:220px;height:160px;">
        </div>
        </th>
        </tr>
        <tr>
        <td><center><strong>News</strong></center></td>
        <td><center><strong>Social Media</strong></center></td>
        <td><center><strong>Sponsors</strong></center></td>
        </tr>
        </table>
    </div>
    </center>
    <p></p>
</div>
<?php
    //if(isset($_POST['submit']))
    /*{
        $sendgrid = new SendGrid('app55568313@heroku.com', 'p50ukokc0282');

        $mail = new SendGrid\Mail();
        $mail->
            addTo('email@gmail.com')->
            setFrom('app55568313@heroku.com')->
            setSubject('Subject goes here')->
            setText('Hello World!')->
            setHtml('<strong>Hello World!</strong>');

        $sendgrid->
            smtp->
            send($mail);
    //}*/
?>
</body>

<footer>
	<center>Contact Us	|	About</center>
</footer>

</html>