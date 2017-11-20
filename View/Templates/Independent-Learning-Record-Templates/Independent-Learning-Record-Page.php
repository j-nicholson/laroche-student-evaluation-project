<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/Main-Evaluation-Page-Style.css">
        <link rel="stylesheet" type="text/css" href="CSS/ILRCSS.css">
        <title>ILR Form</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="JS/DisplayStudentProfilePicture.js"></script>
        <script src="JS/ShowOtherMajorField.js"></script>
        <script src="JS/RetrieveStudentInfoById.js"></script>
        <script src="JS/formSubmit.js"></script>

    </head>
    <body>
        <!-- top navigation -->
        <?php
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


        <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Student-Information-Form')">Biographical Information</button>
        <button class="tablinks" onclick="openTab(event, 'AdmissionsPlacementInfo')">Admissions Placement</button>
        <button class="tablinks" onclick="openTab(event, 'MiscNotes')">Miscelaneous Notes</button>
        </div>

        <!-- TABS -->
        <?php
        include "View/Templates/HTMLmodules/ILRStudent-Information-Form.html";
        include "View/Templates/HTMLmodules/ILRAdmissionsPlacementInfo.html";
        include "View/Templates/HTMLmodules/ILRMiscNotes.html";
        ?>
        <!-- END TABS -->
        <script src="JS/openTabs.js"></script>
    <body>

<html>
<?php
    include "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Student-Data-Input.php";
?>
