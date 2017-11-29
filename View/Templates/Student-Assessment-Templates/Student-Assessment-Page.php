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

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script type="text/javascript" src="JS/SetSLOButtonColor.js"></script>
        <script type="text/javascript" src="JS/SubmitSLOInformation.js"></script>
	<script type="text/javascript" src="JS/updateGrades.js"></script>

</head>
<body>
    <script type="text/javascript" src="JS/SubmitSLOInformation.js"></script>
    <div class="Top-Navigation-Pane">
        <a href="Independent-Learning-Record-Main.php?action=none">Independent Learning Record</a>
        <a href="Student-Assessment-Main.php?action=none">Assessment Form</a>
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

</body>
</html>
