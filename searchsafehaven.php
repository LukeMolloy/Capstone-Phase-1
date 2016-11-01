<?php
session_start();
?>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<?php include 'dbLogin.php' ?>
</head>

<?php 
    ob_start();
    
    
    $suburb = $_POST['AES_ENCRYPT('$first', 'Suburb')'];
    $_SESSION['Suburb']=$suburb;
    
    $postcode = $_POST['AES_ENCRYPT('$first', 'Postcode')'];
    $_SESSION['Postcode']=$postcode;    
    
    $city = $_POST['AES_ENCRYPT('$first', 'City')'];
    $_SESSION['City']=$city;
    
    $state = $_POST['AES_ENCRYPT('$first', 'State')'];
    $_SESSION['State']=$state;
    
    header("location:safehaven.php");
?>