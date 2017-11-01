<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/Main-Evaluation-Page-Style.css">
        <title>ILR Form</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="JS/DisplayStudentProfilePicture.js"></script>
        <script src="JS/ShowOtherMajorField.js"></script>
        <script src="JS/RetrieveStudentInfoById.js"></script>
    </head>
    <body>
        <!-- top navigation -->
        <?php
              //we can use include or read file, stack overflow says use read file
              readfile("View/Templates/HTMLmodules/ILRTopNavigationPane.html");
        ?>
        <!-- END top navigation -->
        <!-- LRC logo -->
        <img src="https://laroche.edu/img/logo.png" alt="Logo" style="width:300px;height:80px;">
        <!-- END LRC logo -->
        <header>
                <h1>Chemistry Department</h1>
                <h2>Undergraduate Individual Learning Record</h2>
        </header>
        <h2 id="ILR-Title">Biographical Information </h2>
        <h5 id="Current_Date"></h5>
        <script src="JS/ShowCurrentDate.js"></script>
        <!-- read in main form -->
        <?php
              include "View/Templates/HTMLmodules/ILRform.html";
        ?>
        <!-- END read in main form -->

    <body>
<html>
<?php
    include "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Student-Data-Input.php";
?>
