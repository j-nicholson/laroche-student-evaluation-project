<?php
    $q = intval($_GET['id']);

    include "../DBConnection.php";

    $query = "SELECT Student_ID, Student_Name, Student_Major, Student_Year, Student_Semester, Student_Date, Student_Photo, Student_Math_Grade, Student_Athletics, Student_Housing_Status, Student_Honors, International_Student, Misc_Text FROM Student INNER JOIN Misc_Notes ON Misc_Notes.Misc_Student_ID = Student.Student_ID WHERE Student_ID = '" . $q . "'";
    $result = mysqli_query($connection, $query);

    

    while($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
    mysqli_close($connection);

?>
