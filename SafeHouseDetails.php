<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
 	<link rel="stylesheet" href="stylesheets/indextest.css">
 	<link rel="stylesheet" href="stylesheets/templatetest.css">
	<?php include 'dbLogin.php' ?>
</head>

<body>
    <h1>Test SH Page</h1>
    <?php
        session_start();
        ob_start();
        
        $a = $_SESSION['Username'];
        
        echo $a;
    ?>

</body>