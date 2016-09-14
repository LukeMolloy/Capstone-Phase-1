<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.
/*
    $servername = "127.0.0.1";
    $username = 'lukemolloy';
    $password = "";
    $database = "showDB";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);
*/

    $url = parse_url(getenv("JAWSDB_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $database = substr($url["path"], 1);

    $db = new mysqli($server, $username, $password, $database);
    

    // Check connection
    /*if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";*/
?>