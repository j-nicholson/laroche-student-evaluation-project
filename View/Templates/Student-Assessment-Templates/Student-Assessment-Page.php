<!DOCTYPE html>
<link rel="stylesheet" href="style.css" />
<html>
    <title>CourseDropDown</title>
<head>
    <form  method="post" action="Student-Assessment-Main.php">
        <input type="hidden" name="submitted" value="true" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type = "text/javascript" src = "jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="CSS/Main-Evaluation-Page-Style.css">
        <link rel="stylesheet" type="text/css" href="CSS/Student-Assessment-Style.css">
    
        <script src="js/libs/jquery.min.js" type="text/javascript"></script>
    
        <script type="text/javascript" src="JS/SetSLOButtonColor.js"></script>
    
</head>
<body>
    <script type="text/javascript" src="JS/SubmitSLOInformation.js"></script>
    <div class="Top-Navigation-Pane">
        <a href="Independent-Learning-Record-Main.php">Independent Learning Record</a>
        <a href="Student-Assessment-Main.php">Assessment Form</a>
        <a class="logOut" href="Chemistry-Student-Evaluation-Login-Main.php?logout=1">Logout</a>
    </div> 
    <img src="https://laroche.edu/img/logo.png" alt="Logo" style="width:300px;height:80px;">
        <header>
            <h1>Chemistry Department</h1> 
            <h2>Student Assessment Form</h2>
        </header>

    <h3 class="Select-A-Course-Head">Select a Course
    <label>
        <select name= "coursecode" onchange="this.form.submit()" onchange="makeButtons()">
        <option value="Select a Year/Sec">Select a Course</option>  
        <?php 
            include "Controller/Student-Assessment-Controllers/Student-Assessment-Course-Select.php";
        ?>
        </select>
    </label>
        <?php
            include "Controller/Student-Assessment-Controllers/Student-Assessment-Course-Display.php";
        ?>
    <div id="slos">
        <input type="button" id="button1" value = "Knowledge Base" class='button' style= "color:black" onclick="setSLOButtonColor('button1', '#101010')";/>
        <input type="button" id="button2" value = "Lab Skills" class='button' style= "color:black" onclick="setSLOButtonColor('button2', '#101010')";/>
        <input type="button" id="button3" value = "Practice" class='button' style= "color:black" onclick="setSLOButtonColor('button3', '#101010')";/>
        <input type="button" id="button4" value = "Societal Connects" class='button' style= "color:black" onclick="setSLOButtonColor('button4', '#101010')";/>
        <input type="button" id="button5" value = "Capstone" class='button' style= "color:black" onclick="setSLOButtonColor('button5', '#101010')";/>
        </div>
        <input type="button" id="slobutton" value = "SLO submit" class='button' style= "color:black" onclick="sloSubmit()";/>
</body> 
</html>
    
<!--MY ADDED CODE-->

<?php
    //include "Controller/Student-Assessment-Controllers/Student-Assessment-Syllabus-Download.php";
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-SLO-Information.php";
?>

<br>
<br><a href="Controller/Student-Assessment-Controllers/Student-Assessment-Syllabus-Download.php">Syllabus</a><br>


    <form action="code.php" method="post">
    <input type="hidden" name="submitted2" value="true" />
    <fieldset>
    <legend>Course Assessment Form Section 1 (Please be detailed):</legend>
        <div><label>CAFS1ID: <input type = text name = "CAFS1ID" /></label></div><br>
        <div><label;>New SLOs: <input type = text name = "NewSLOs" /></label></div><br>
        <div><label>Upgrades: <input type = text name = "Upgrades" /></label></div><br>
        <div><label>Enhancements: <input type = text name = "Enhancements" /></label></div><br>
        <div><label>Modifications: <input type = text name = "Modifications" /></div></label><br>
        <div><label>Other: <input type = text name = "Other" /></label></div><br>
    </fieldset>
    
       <iframe name="votar" style="display:none;"></iframe>
<form action="code.php" method="post" target="votar">
    <input type="submit" value="Update" />
    <input type="hidden" name="ad_id" value="2">            
</form>