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
       <div style="text-align:center" ><input type="button" id="button1" value = "Knowledge Base" class='button' style= "color:black" onclick="setSLOButtonColor('button1', '#101010')";/><td></td><input type="button" id="button2" value = "Lab Skills" class='button' style= "color:black" onclick="setSLOButtonColor('button2', '#101010')";/><td></td><input type="button" id="button3" value = "Practice" class='button' style= "color:black" onclick="setSLOButtonColor('button3', '#101010')";/><td></td><input type="button" id="button4" value = "Societal Connects" class='button' style= "color:black" onclick="setSLOButtonColor('button4', '#101010')";/><td></td><input type="button" id="button5" value = "Capstone" class='button' style= "color:black" onclick="setSLOButtonColor('button5', '#101010')";/></div>

</body>
</html>





    <br><a href="Controller/Student-Assessment-Controllers/Student-Assessment-Syllabus-Download.php"><div style="text-align:center" >Syllabus</div></a><br>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
     <legend>Course Assessment Form Section I</legend>
      <br>
        <?php

    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-SLO-Information.php";
?>
        <div style="text-align:center" ><label>New SLOs:<br> <textarea rows="4" cols="100" type = text name = "NewSLOs" /></textarea></label></div><br>
        <div style="text-align:center" ><label>Upgrades:<br> <textarea rows="4" cols="100"  type = text name = "Upgrades" /></textarea></label></div><br>
        <div style="text-align:center"><label>Enhancements:<br> <textarea rows="4" cols="100" type = text name = "Enhancements" /></textarea></label></div><br>
        <div style="text-align:center"><label>Modifications:<br> <textarea rows="4" cols="100"  type = text name = "Modifications" /></textarea></div></label><br>
        <div style="text-align:center"><label>Other:<br> <textarea rows="4" cols="100" type = text name = "Other" /></textarea></label></div><br>
    </fieldset>


<?php
    //include "Controller/Student-Assessment-Controllers/Student-Assessment-Syllabus-Download.php";
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section2.php";
?>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section II</legend>

        <br><div style="text-align:center"><label>Chemestry Concepts Carry-Over From Previous Semsters:<br>
        <textarea id = "textarea" rows="4" cols="100" type = text name = "ChemConceptCarryOver"  /></textarea></label></div><br>
        <div style="text-align:center"><label>Were Objectves and Content Covered:<br> <textarea rows="4" cols="100"  type = text name = "WereObjectvesContentCovered" /></textarea></label></div><br>
        <div style="text-align:center"><label>General Comments:<br>
        <textarea rows="4" cols="100"  type = text name = "GeneralComments" /></textarea></label></div><br>

        <div style="text-align:center">Overall student performace: </div>
        <table align = "center"  border = "1">
        <tr>
            <td><center>%A<center></td>
			<td><center>%B<center></td>
			<td><center>%C<center></td>
			<td><center>%D<center></td>
			<td><center>%F<center></td>
		<tr>
	        <tr>
			<td><input type="text" size = "5" NAME="Apercent" /></td>
			<td><input type="text" size = "5" NAME="Bpercent" /></td>
			<td><input type="text" size = "5" NAME="Cpercent" /></td>
			<td><input type="text" size = "5" NAME="Dpercent" /></td>
			<td><input type="text" size = "5" NAME="Fpercent" /></td>
			</tr>
                </table>
			<br>
    </fieldset>





<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section3.php";
?>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section III</legend>

        <br><div style="text-align:center"><label for= "textarea">Course Prerequisites:<br> <textarea id = "textarea" rows="4" cols="100" type = text name = "CoursePrerequisites"  /></textarea></label></div><br>
        <div style="text-align:center"><label>Textbooks/Other Required Material:<br> <textarea rows="4" cols="100"  type = text name = "Textbooks/OtherRequiredMaterial" /></textarea></label></div><br>
        <div style="text-align:center"><label>Student Assessment Measures:<br> <textarea rows="4" cols="100"  type = text name = "StudentAssessmentMeasures" /></textarea></label></div><br>
        <div style="text-align:center"><label>Pedagogy:<br> <textarea rows="4" cols="100"  type = text name = "Pedagogy" /></textarea></div></label><br>
         <div style="text-align:center"><label>Faculty/Guest Instructors:<br> <textarea rows="4" cols="100" type = text name = "Faculty/GuestInstructors" /></textarea></label></div><br>
        <div style="text-align:center"><label>Minor and Capital Equipment Needs: <br><textarea rows="4" cols="100"  type = text name ="MinorandCapitalEquipmentNeeds" /></textarea></div></label><br>
        <div style="text-align:center"><label>Other Recommendations: <br><textarea rows="4" cols="100"  type = text name = "OtherRecommendations" /></textarea></label></div>

    </fieldset>

<?php
    //include "Controller/Student-Assessment-Controllers/Student-Assessment-Syllabus-Download.php";
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section4.php";
?>       
        
        
    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section IV</legend>
         <br>  
        <div style="text-align:center">Log of Mid-Semster Individual Student Performace and Evaluation: </div><br>
        <table align = "center"  border = "1">
        <tr>
            <td><center>#<center></td>
			<td><center>ID#<center></td>
			<td><center>Learning Issues<center></td>
			<td><center>Extent of Instructor Interactions<center></td>
			<td><center>Instructor Recommendations<center></td>
		<tr>
	        <tr>
			<td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructor[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorRecommendations[]" /></td>
			</tr>
            <tr>
			<td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructor[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorRecommendations[]" /></td>
			</tr>
            <tr>
            <td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructor[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorRecommendations[]" /></td>
			</tr>
             <tr>
            <td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructor[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorRecommendations[]" /></td>
			</tr>
            <tr>
            <td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructor[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorRecommendations[]" /></td>
			</tr>
                </table>
			<br>
    </fieldset>
       <iframe name="votar" style="display:none;"></iframe>
<form action="Student-Assessment-Main.php" method="post" target="votar">
    <div style="text-align:center">Click To Update All Sections: <input type="submit" name="submitted2" value="Update" onclick="sloSubmit()"/></div>
    <input type="hidden" name="ad_id" value="2">
</form>
