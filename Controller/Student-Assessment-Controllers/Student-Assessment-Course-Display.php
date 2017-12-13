<?php
	session_start();

    if(isset($_POST["submitted"])){
        
        include "Controller/DBConnection.php";

        $coursecode = $_POST["coursecode"];
        $ID = 'CourseID';
        $query = "SELECT * FROM Course Inner Join Instructor On Course.InstructorID = Instructor.InstructorID WHERE '$coursecode' = $ID";
        $result = mysqli_query($connection, $query) or die("error: $query");

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	       echo "<h4> <div style= 'text-align:center' >Course: <input type='text' id='Course' value={$row['CourseID']}><td></td>  Course Title: <input type='text' id='CourseTitle' value={$row['CourseTitle']}></div><br>";
	       echo "<div style= 'text-align:center'>Semester: <input type='text' id='Semester' value='SPR 2017'>  Instructor: <input type='text' id='Instructor' value={$row['InstructorName']}></div> <br></h4>";
        $_SESSION['passid'] = $row['CourseID'];
        $_SESSION['passid2'] = "SPR 2017";
        }
        echo "<h4>";
        echo "<div style= 'text-align:center' ><label id='SLOs'>Student Learning Outcomes (SLOs) addressed in this course:</div></label><br>";
	include "Student-Assessment-SLO-Buttons.php";
	echo "<br><a href='Controller/Student-Assessment-Controllers/Student-Assessment-Syllabus-Download.php'><div style='text-align:center' >Syllabus</div></a><br>";
	include "Student-Assessment-SLO-Information.php";
	include "Student-Assessment-Section2.php";
	include "Student-Assessment-Section3.php";
	include "Student-Assessment-Section4.php";
	include "Student-Assessment-Section5.php";
        include "Student-Assessment-Review-Section.php";
	include "Student-Assessment-Update-Button.php";
    }
?>
