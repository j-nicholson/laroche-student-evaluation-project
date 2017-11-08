<?php

    if(isset($_POST["submitted"])){

        include "Controller/DBConnection.php";

        $coursecode = $_POST["coursecode"];
        $ID = 'CourseID';
        $query = "SELECT * FROM Course Inner Join Instructor On Course.InstructorID = Instructor.InstructorID WHERE '$coursecode' = $ID";
        $result = mysqli_query($connection, $query) or die("error: $query");

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	       echo "<h4> <div style= 'text-align:center' >Course: <input type='text' id='Course' value={$row['CourseID']}><td></td>  Course Title: <input type='text' id='CourseTitle' value={$row['CourseTitle']}></div><br>";
	       echo "<div style= 'text-align:center'>Semester: <input type='text' id='Semester' value='SPR 2017'>  Instructor: <input type='text' id='Instructor' value={$row['InstructorName']}></div> <br></h4>";
        }
        echo "<h4>";
        echo "<div style= 'text-align:center' ><label id='SLOs'>Student Learning Outcomes (SLOs) addressed in this course:</div></label><br>";
    }
?>
