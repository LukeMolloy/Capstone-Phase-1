
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<?php include 'dbLogin.php' ?>
</head>

<?php 
	ob_start();
				
				$myusername=$_POST['Username'];
				$password=$_POST['Password']; 
				
				//VALUES (AES_ENCRYPT('$first', 'show2016'), AES_ENCRYPT('$last', 'show2016'), AES_ENCRYPT('$phonenumber', 'show2016'), AES_ENCRYPT('$email', 'show2016'), '$hashpassword', AES_ENCRYPT('$address', 'show2016'), AES_ENCRYPT('$suburb', 'show2016'), AES_ENCRYPT('$postcode', 'show2016'), AES_ENCRYPT('$city', 'show2016'), AES_ENCRYPT('$state', 'show2016'), '$spacesavailable', '$infantspaces', '$petfriendly', '$bluecardnumber', '$description', '$gender', '$nights')";				

			//	$salt = uniqid(mt_rand(), true);
	
			//	$hashpassword = hash("sha256", $password.$salt);
			//CAST(AES_DECRYPT(Email, 'show2016') AS CHAR(50)) EmailDecrypt, Password 
				$hashpassword = hash("sha256", $password);
		
				$sql="SELECT * FROM House WHERE Email= AES_ENCRYPT('$myusername', 'show2016') AND Password= '$hashpassword'";
				$result = mysqli_query($db, $sql);
				$count = mysqli_num_rows($result);
				
				

				
				if($count==1){
					session_start();
					$_SESSION['Username']= $_POST['Username'];
         			$_SESSION['loggedin'] = true;
					header("location:SafeHouseDetails.php");
				}
				else {
					header("location:incorrectlogin.php");
					ob_end_flush();
				}
?>