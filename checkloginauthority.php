
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<?php include 'dbLogin.php' ?>
</head>

<?php 
	ob_start();
				
				$myusername=$_POST['Username'];
				$password=$_POST['Password']; 
				
								

			//	$salt = uniqid(mt_rand(), true);
	
			//	$hashpassword = hash("sha256", $password.$salt);
			
				$hashpassword = hash("sha256", $password);
		
				$sql="SELECT * FROM User WHERE EmailAddress='$myusername' and Password='$hashpassword'";
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