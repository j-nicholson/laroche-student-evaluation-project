<?php
    if (isset($_POST['submitted'])){    
    include('connect.php');
        
        $CAFS1ID = $_POST['CAFS1ID'];
        $NewSLOs = $_POST['NewSLOs'];
        $Upgrades = $_POST['Upgrades'];
        $Enhancements = $_POST['Enhancements'];
        $Modifications = $_POST['Modifications'];
        $Other = $_POST['Other'];
        $sqlinsert = "INSERT INTO Course_Assessment_Form_Section_1 (CAFS1ID, NewSLOs, Upgrades, Enhancements, Modifications, Other) VALUES ('$CAFS1ID', '$NewSLOs', '$Upgrades', '$Enhancements', '$Modifications', '$Other')";
     
        if(!mysqli_query($conn,$sqlinsert)){
            die('error inserting');
        }
    }
?>