<?php
    include('Student.php');
    $student = new Student();
    $q = intval($_GET['q']);

     include('connection.php');

    mysqli_select_db($link, 'Cap_Dev_Run');

    $query = "SELECT * FROM Student WHERE Student_ID = '" . $q . "'";
    $result = mysqli_query($link, $query);

    while($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row); 
    }
    mysqli_close($link);
?>