<?php
session_start();
?>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<?php 
    ob_start();
    $_SESSION['ClientFirstName'] = ($_POST['FirstName']);
	$_SESSION['ClientLastName'] = ($_POST['LastName']);
	$_SESSION['ClientEmail'] = ($_POST['Email']);
	$_SESSION['ClientPhone'] = ($_POST['Phone']);
	$_SESSION['ClientDependants'] = ($_POST['Dependants']);
	$_SESSION['ClientPets'] = ($_POST['Pets']);
	$_SESSION['ClientInfants'] = ($_POST['Infants']);
    
    header("location:safehaven.php");
?>