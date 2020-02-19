<?php

    // Prepare variables for database connection
    $dbusername = "arduino";  // enter database username
    $dbpassword = "V4bGufj9SS35EetM!";  // enter database password
    $server = "www.sawyerconcepts.com";
    echo "hello world";
    // Connect to database

    $dbconnect = mysqli_connect($server, $dbusername, $dbpassword);
    $dbselect = mysqli_select_db("Plants",$dbconnect);

    // Prepare SQL statement

    $sql = "INSERT INTO Plants.PlantInfo VALUES ('".$_GET["temp"]."', '".$_GET["humidity"]."', now() - 50000)";

    // Execute SQL statement

    mysqli_query($dbconnect, $sql);

?>
