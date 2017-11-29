<?php
    if (isset($_POST['submitted2'])){    
    include "Controller/DBConnection.php";
        
        foreach($_POST['Section5Num'] as $idx => $Sec5Num) {
    $sqlinsert="INSERT INTO Course_Assessment_Form_Section_5 (Sec5Num, IDNum, Grade, LearningIssue, ExtentInstructorInt, InstructorEvalRecommendations) VALUES ('" . $Sec5Num . "', '" . $_POST['IDNum'][$idx] . "', '" . $_POST['Grade'][$idx] . "', '" . $_POST['LearningIssue'][$idx] . "', '" . $_POST['ExtentInstructorInt'][$idx] . "','" . $_POST['InstructorEvalRecommendations'][$idx] . "' )";
    
        
       
        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
        }
    }
?>