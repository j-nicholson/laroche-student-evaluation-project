<?php
    if (isset($_POST['submitted2'])){    
    include "Controller/DBConnection.php";
        
        $ChemConcepts = $_POST['ChemConceptCarryOver'];
        $ObjectivesContent = $_POST['WereObjectvesContentCovered'];
        $GeneralComments = $_POST['GeneralComments'];
        $Apercent = $_POST['Apercent'];
        $Bpercent = $_POST['Bpercent'];
        $Cpercent = $_POST['Cpercent'];
        $Dpercent = $_POST['Dpercent'];
        $Fpercent = $_POST['Fpercent'];
        
        $sqlinsert = "INSERT INTO Course_Assessment_Form_Section_2 (ChemConcept, ObjectivesContent, GeneralComments, percentA, percentB, percentC, percentD, percentF) VALUES ('$ChemConcepts', '$ObjectivesContent', '$GeneralComments', '$Apercent', '$Bpercent', '$Cpercent', '$Dpercent', '$Fpercent')";
       
        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
    }
?>