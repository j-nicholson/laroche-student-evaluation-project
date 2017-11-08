<?php
<<<<<<< HEAD
    session_start();
    $filename = "Syllabus/" . $_SESSION['passid2'] . "/" . $_SESSION['passid'] . ".pdf";
=======
    $filename = 'syllabus.pdf';    
>>>>>>> 55dad2b9bdec1a949d7e1491fa15a1a54f96f949
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
