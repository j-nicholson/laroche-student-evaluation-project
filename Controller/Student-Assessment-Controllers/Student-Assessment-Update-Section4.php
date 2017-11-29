<?php
    if (isset($_POST['submitted2'])){    
    include "Controller/DBConnection.php";
        
        foreach($_POST['Section4Num'] as $idx => $Sec4Num) {
    $sqlinsert="INSERT INTO Course_Assessment_Form_Section_4 (Sec4Num, IDNum, LearningIssue, ExtentInstructor, InstructorRecommendations) VALUES ('" . $Sec4Num . "', '" . $_POST['IDNum'][$idx] . "', '" . $_POST['LearningIssue'][$idx] . "', '" . $_POST['ExtentInstructor'][$idx] . "','" . $_POST['InstructorRecommendations'][$idx] . "' )";
    
        
       
        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
        }
    }
?>