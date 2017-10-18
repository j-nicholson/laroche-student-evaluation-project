
<?php
  
if(isset($_POST["submitted"])){
    
include('connect.php');

$coursecode = $_POST["coursecode"];
$ID = 'CourseID';
$query = "SELECT * FROM Course Inner Join Instructor On Course.InstructorID = Instructor.InstructorID WHERE '$coursecode' = $ID";    
$result = mysqli_query($conn, $query) or die("error: $query");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo "<h4> Course:";
	echo "<input type='text' id='Course' value={$row['CourseID']}>";
	echo "Course Title:";
	echo "<input type='text' id='CourseTitle' value={$row['CourseTitle']}> <br>";
	echo "Semester: ";
	echo "<input type='text' id='Semester' value='SPR 2017'>";
	echo "Instructor: ";
	echo "<input type='text' id='Instructor' value={$row['InstructorName']}> <br><br></h4>";
}
echo "<h4>";
echo "<label id='SLOs'>Student Learning Outcomes (SLOs) addressed in this course:</label><br>";
}

?> 
  
