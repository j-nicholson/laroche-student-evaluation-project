<?php
$ID = rand(0, 999999);
$SLO1 = $_POST['postSLO1'];
$SLO2 = $_POST['postSLO2'];
$SLO3 = $_POST['postSLO3'];
$SLO4 = $_POST['postSLO4'];
$SLO5 = $_POST['postSLO5'];
include('connect.php');
$coursecode = $_POST["coursecode"];
$query = "SELECT * FROM Class WHERE '$coursecode' = CourseID AND 'SPR 2017' = Semester";    
$result = mysqli_query($conn, $query) or die("error: $query");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$classID = $row['ClassID'];
}
$sqlinsert = "INSERT INTO Course_SLOs (CourseSLOID, CourseID, SLO1, SLO2, SLO3, SLO4, SLO5) VALUES ('$ID', '$classID', '$SLO1', '$SLO2', '$SLO3', '$SLO4', '$SLO5')";
     
        if(!mysqli_query($conn,$sqlinsert)){
            die('error inserting');
        }
?>
