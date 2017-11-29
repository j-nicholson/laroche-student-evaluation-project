<?php
    if (isset($_POST['submitted2'])){    
    include "Controller/DBConnection.php";
        
        $CoursePreReq = $_POST['CoursePrerequisites'];
        $Textbooks = $_POST['Textbooks/OtherRequiredMaterial'];
        $StudentAsse = $_POST['StudentAssessmentMeasures'];
        $Pedagogy = $_POST['Pedagogy'];
        $Faculty = $_POST['Faculty/GuestInstructors'];
        $MinorCapitalEq = $_POST['MinorandCapitalEquipmentNeeds'];
        $Other = $_POST['OtherRecommendations'];
        $sqlinsert = "INSERT INTO Course_Assessment_Form_Section_3 (CoursePreReq, Textbooks, StudentAsse, Pedagogy, Faculty, MinorCapitalEq, Other) VALUES ('$CoursePreReq', '$Textbooks', 
        '$StudentAsse', '$Pedagogy', '$Faculty', '$MinorCapitalEq', '$Other')";
       
        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
    }
?>