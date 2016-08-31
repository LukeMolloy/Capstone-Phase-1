<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
//	ob_start();
	session_start();
//	$_SESSION['Username'] = $_POST['Username'];
//		session_start();
//		$_SESSION['FirstName'] = $_POST['FirstName'];
//?>	

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
 	<link rel="stylesheet" href="stylesheets/index.css">
 	<link rel="stylesheet" href="stylesheets/template.css">
	<?php include 'dbLogin.php' ?>
</head>
<div id="wrapper">
<body>
    <form method="post" action="mail.php">
    <input name="Signin" type="submit"/>
    </form>
    
	<div class="header">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<label class="title">Safe Haven Our Women</label>
 		<li><a href="/safehavenregistration.php">Safe Haven Application</a></li>
 		 <li><a href="/registration.php">User Application</a></li>
		<li><a href="/About.php">About Us</a></li>
		<li><a href="/Contact.php">Contact Us</a></li>
	</ul> 
</div>
	<div class="loginform1">	
		<h1>Safe Haven Our Women</h1><br/>
		<form method="post" action="checklogin.php">
			<center>
			<php? $sql = "SELECT LastName FROM `User` WHERE UserID = 1\n". " LIMIT 0, 30 "; ?>
			<label id="username">Username</label> &nbsp; <input name="Username" type="text" value="Bob"/><br /><br />
			<label id="password">Password</label> &nbsp; <input name="Password" type="password" value="bob"/><br /><br />
			<input name="Signin" type="submit" value="&nbsp Sign In &nbsp"/></form>
				</div>
				<center>
			<div class="applyform">
			    <table>
			        <td>
			           <button class="safehavenyes">Volunteer a Safe Haven</button>
			         </td>
			         <td>
			           <button class="registeryes">Apply for the service</button><br />
			        </td>
			    </table>
			    <div class="moreinfo"></div>
			</div>
			
			</center>
			
			
			
		<!--	<a href="/registration.php">Apply as authority</a> | <a href="/safehavenregistration.php">Apply to be a safe haven</a> -->
		    
			</center>
</div>

</body>
</div>



<script>
$(document).ready(function(){
    $(".safehavenyes").click(function(){
        $(".moreinfo").animate({
            height: '+100px'
        });
        $( ".moreinfo" ).empty();
        $( ".moreinfo" ).append( "<br /><br /><br />Are you willing to offer your house as a safe haven? If so, click here to register: <a href='/safehavenregistration.php'><button>Register</button></a>" );
    });
    
    $(".registeryes").click(function(){
        $(".moreinfo").animate({
            height: '+100px'
        });
        $( ".moreinfo" ).empty();
        $( ".moreinfo" ).append( "<br /><br /><br />Are you willing to become a registered user with the responsibility of adding clients to the server? If so, click here to register: <a href='/registration.php'><button>Register</button></a>" );
    });
    
    
});
</script>




<footer>
	
	<p></p>
    <center>
    <div class="links">
        <table class="pics" align="" cellpadding="20px">
        <tr>
        <th>
        <div id="news">
          
        </div>
        </th>
        <th>
        <div id="sm">
       
        </div>
        </th>
        <th>
        <div id="sponsors">
            
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
	
</footer>

</html>
