<?php
    if(isset($_POST["submitted"])){

        include "Controller/DBConnection.php";

        $coursecode = $_POST["coursecode"];
        $ID = 'CourseID';
        $query = "SELECT * FROM Course Inner Join Instructor On Course.InstructorID = Instructor.InstructorID WHERE '$coursecode' = $ID";
        $result = mysqli_query($connection, $query) or die("error: $query");

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	       echo "<div style= 'text-align:center'> CAFS1ID:</div>";
	       echo "<div style= 'text-align:center'><input type='text' name='CAFS1ID' value={$row['CourseID']}-SPR2017 style= 'text-align:center' ></div>";

        }
    }



    if (isset($_POST['submitted2'])){
    include "Controller/DBConnection.php";


        $CAFS1ID = $_POST['CAFS1ID'];
        $NewSLOs = $_POST['NewSLOs'];
        $Upgrades = $_POST['Upgrades'];
        $Enhancements = $_POST['Enhancements'];
        $Modifications = $_POST['Modifications'];
        $Other = $_POST['Other'];
        $sqlinsert = "INSERT INTO Course_Assessment_Form_Section_1 (CAFS1ID, NewSLOs, Upgrades, Enhancements, Modifications, Other) VALUES ('$CAFS1ID', '$NewSLOs', '$Upgrades', '$Enhancements', '$Modifications', '$Other')";

        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
    }
?>
