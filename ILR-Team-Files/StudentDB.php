<?php
    include('Student.php');
    $student = new Student();
    $q = intval($_GET['q']);
    $conn = mysqli_connect('localhost', 'root', '', 'Cap_Dev_Run');
    if(!$conn)
        die('Could not connect: ' . mysqli_error($conn));

    mysqli_select_db($conn, 'Cap_Dev_Run');

    $query = "SELECT * FROM Student WHERE Student_ID = '" . $q . "'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row); 
    }
    mysqli_close($conn);
?>