
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
 	<link rel="stylesheet" href="stylesheets/index.css">
 	<link rel="stylesheet" href="stylesheets/template.css">
	<?php include 'dbLogin.php' ?>
</head>

<?php 
	ob_start();
				
				$myusername=$_POST['Username'];
				$mypassword=$_POST['Password']; 
		
				$sql="SELECT * FROM User WHERE EmailAddress='$myusername' and Password='$mypassword'";
				$result = mysqli_query($db, $sql);
				$count = mysqli_num_rows($result);
				
				

				
				if($count==1){
						session_start();
				$_SESSION['Username']= $_POST['Username'];
         		$_SESSION['loggedin'] = true;
					header("location:registerClient.php");
				}
				else {
					header("location:incorrectlogin.php");
					ob_end_flush();
				}
?>