<?php
session_start();
?>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<?php include 'dbLogin.php' ?>
</head>

<?php 
    ob_start();
    $suburb = $_POST['Suburb'];
    $_SESSION['Suburb']=$suburb;
    
    $postcode = $_POST['Postcode'];
    $_SESSION['Postcode']=$postcode;    
    
    $city = $_POST['City'];
    $_SESSION['City']=$city;
    
    $state = $_POST['State'];
    $_SESSION['State']=$state;
    
    header("location:safehaven.php");
?>