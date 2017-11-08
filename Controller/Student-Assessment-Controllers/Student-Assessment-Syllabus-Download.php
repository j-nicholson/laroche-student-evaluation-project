<?php
<<<<<<< HEAD
    $filename = 'syllabus.pdf';    
=======
    session_start();
    $filename = "Syllabus/" . $_SESSION['passid2'] . "/" . $_SESSION['passid'] . ".pdf"; 
>>>>>>> 051e9df803d07a6915ef28225aa3d6b04a65e006
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false); // required for certain browsers 
    header('Content-Type: application/pdf');

    header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($filename));

    readfile($filename);

    exit;
?>