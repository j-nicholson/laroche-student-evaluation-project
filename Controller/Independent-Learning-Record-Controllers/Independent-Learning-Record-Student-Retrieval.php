<?php
    $q = intval($_GET['id']);

    include "../DBConnection.php";

    $query = "SELECT * FROM Student WHERE Student_ID = '" . $q . "'";
    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
    mysqli_close($connection);
?>
