<?php
    include "Controller/DBConnection.php";

    $sql = "SELECT * FROM Class WHERE Semester = 'SPR 2017'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
	       $ID = $row["CourseID"];  
            echo "<option value=";
            echo "$ID>$ID</option>";
        } 
    }
    else 
    {
        echo "0 results";
    }
    mysqli_close($connection);
?>