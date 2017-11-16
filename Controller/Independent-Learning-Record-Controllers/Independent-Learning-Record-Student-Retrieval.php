<?php
    $q = intval($_GET['id']);

    include "../DBConnection.php";

    mysqli_select_db($connection, 'Cap_Dev_Run');

    $query = "SELECT * FROM Student WHERE Student_ID = '" . $q . "'";
    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }

    //The second query fetches data for the misc notes tabel and so on.
    /*$query2 = "SELECT *FROM MiscNotes WHERE StudentID = '" . $q . "'";
    $result2 = mysqli_query($connection, $query2);

    while($row = mysqli_fetch_assoc($result2)){
        echo json_encode($row);
    }*/

    mysqli_close($connection);

?>
