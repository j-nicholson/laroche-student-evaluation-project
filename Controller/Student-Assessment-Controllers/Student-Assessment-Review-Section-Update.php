<?php
    if (isset($_POST['submitted2'])){
    include "Controller/DBConnection.php";

        $ReviewID = $_POST['ReviewID'];
        $DepReview = $_POST['DepReview'];
        $DepReviewer = $_POST['DepReviewer'];
        $NewActPlan = $_POST['NewActPlan'];
        $NewBudgItem = $_POST['NewBudgItem'];
        $DivChairReview = $_POST['DivChairReview'];
        $DivChairSig = $_POST['DivChairSig'];
        $DivChairRevDate = $_POST['DivChairRevDate'];
        $sqlinsert = "INSERT INTO course_assessment_review_section (ReviewID, DepReview, DepReviewer, NewActPlan, NewBudgItem, DivChairReview, DivChairSig, DivChairRevDate) VALUES ('$ReviewID', '$DepReview',
        '$DepReviewer', '$NewActPlan', '$NewBudgItem', '$DivChairReview', '$DivChairSig', '$DivChairRevDate')";

        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
    }
?>
