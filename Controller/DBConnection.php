<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbName = "Cap_Dev_Run";

    $connection = mysqli_connect($server, $user, $password, $dbName);

    if(!$connection) {
        die("Connection error: " . mysqli_error($connection));
    }
    mysqli_select_db($connection, $dbName);
?>
