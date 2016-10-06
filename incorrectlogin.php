<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
//header("location:safehavenregistration.php");
//	ob_start();
	session_start();
//	$_SESSION['Username'] = $_POST['Username'];
//		session_start();
//		$_SESSION['FirstName'] = $_POST['FirstName'];
//?>	

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
 	<link rel="stylesheet" href="stylesheets/indextest.css">
 	<link rel="stylesheet" href="stylesheets/templatetest.css">
	<?php include 'dbLogin.php' ?>
</head>
<div id="wrapper">
<body>
    <!----<form method="post" action="mail.php">
    <input name="Signin" type="submit"/>
    </form>----->
    
	<div class="header">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<label class="title">SAFE HAVEN COMMUNITY</label>
 		<li><a href="/safehavenregistration.php">SAFE HAVEN APPLICATION</a></li>
 		 <li><a href="/registration.php">USER APPLICATION</a></li>
		<li><a href="/About.php">ABOUT</a></li>
		<li><a href="/Contact.php">CONTACT</a></li>
	</ul> 
</div>

	<div class="loginform1">
	    
		<h1>SAFE HAVEN COMMUNITY</h1><hr><br />
		<h2>Your login details were incorect</h2><br />
			<div id="loginauthority">
				Login as Authority
			</div>
			
			<div id="loginsafehaven">
				Login as Safe Haven
			</div> <br /><br />
		
		<div id="authorityform">
		<form method="post" action="checkloginauthority.php">
				
			
			<h3>Enter your details to login as authority</h3><br />
			<php? $sql = "SELECT LastName FROM `User` WHERE UserID = 1\n". " LIMIT 0, 30 "; ?>
				
				
			<label id="username">Email</label> &nbsp; <input name="Username" type="text"/><br /><br />
			<label id="password">Password</label> &nbsp; <input name="Password" type="password"/><br /><br />
			<input name="Signin" class="signinbutton" type="submit" value="&nbsp Sign In &nbsp"/></form>
			</div>
			
			<div id="shform">
			<form method="post" action="checkloginsafehaven.php">
			<h3>Enter your details to login as a safe haven owner</h3><br />
			<php? $sql = "SELECT LastName FROM `User` WHERE UserID = 1\n". " LIMIT 0, 30 "; ?>
				
				
			<label id="username">Email</label> &nbsp; <input name="Username" type="text"/><br /><br />
			<label id="password">Password</label> &nbsp; <input name="Password" type="password"/><br /><br />
			<input name="Signin" class="signinbutton" type="submit" value="&nbsp Sign In &nbsp"/></form>
			</div>
				</div>
			
			
			</center>
			
			
			
		<!--	<a href="/registration.php">Apply as authority</a> | <a href="/safehavenregistration.php">Apply to be a safe haven</a> -->
		    
			</center>
</div>
<!--<div class="applyform">
			    <table>
			        <td>
			           <button class="safehavenyes">Safe Haven Application</button> 
			         </td><td>&nbsp&nbsp</td>
			         <td>
			           <button class="registeryes">User Application</button><br />
			        </td>
			    </table>
			    <div class="moreinfo"></div>
			</div>
</body>
</div>-->



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


<script>
      $("#loginauthority").css('border-bottom', '3px solid black');
	
	$( "#loginsafehaven" ).click(function() {
    $("#authorityform").css('height', '0px');
   $("#authorityform").css('visibility', 'hidden');
  $("#shform").css('visibility', 'VISIBLE');
  $("#shform").css('height', 'auto');
      $("#loginsafehaven").css('border-bottom', '3px solid black');

      $("#loginauthority").css('border-bottom', 'none');


});


$( "#loginauthority" ).click(function() {
	
    $("#shform").css('height', '0px');
   $("#shform").css('visibility', 'hidden');
  $("#authorityform").css('visibility', 'VISIBLE');

      $("#loginauthority").css('border-bottom', '3px solid black');

     $("#loginsafehaven").css('border-bottom', 'none');
  $("#authorityform").css('height', 'auto');
});   
	
</script>

<footer>
<br />
<table class="footertable">
	<tr>
	   <td class="lightertext">SHOW<br /><hr></td>
		<td class="lightertext">ABOUT<br /><hr></td>
		<td class="lightertext">HELP<br /><hr></td>
		<td class="lightertext">CONNECT<br /><hr></td>  
	</tr>
	<tr>
		<td class="darkertext">
			<br />Home<br />
			User Registration<br />
			Safe Haven Registration
		</td>
		<td class="darkertext">
			<br />About Us<br />
			Company Site
		</td>
		
		<td class="darkertext">
			<br />Contact Us<br />
			Instructions
		</td>
		
		<td class="darkertext">
		<br />	Facebook<br />
			Twitter
		</td>
	</tr>
</table>
</footer>

</html>
