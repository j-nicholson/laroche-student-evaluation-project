<?php
    //This file will direct the user to the signIn page
    session_start();

    if (array_key_exists("id", $_COOKIE)) {
        $_SESSION['id'] = $_COOKIE['id'];
    }
    include("Ilr.php"); 
?>