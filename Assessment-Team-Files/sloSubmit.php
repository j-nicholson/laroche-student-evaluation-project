<?php
$ID = rand(0, 999999);
$course = $_POST['Course'];
include('connect.php');
$sqlinsert = "INSERT INTO Course_SLOs (CourseSLOID, CourseID, SLOID) VALUES ('$ID', '$course', '04')";
     
        if(!mysqli_query($conn,$sqlinsert)){
            die('error inserting');
        }
?>  
