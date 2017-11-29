<?php
  $id = intval($_GET['id']);
  include "../DBConnection.php";

  $query = "SELECT Student_ID, Student_Name, Misc_Date, Misc_Text FROM Student INNER JOIN Misc_Notes ON Misc_Notes.Misc_Student_ID = Student.Student_ID WHERE Student_ID = '" . $id . "' ORDER BY Misc_Date DESC";
  $result = mysqli_query($connection, $query);

  $returned_notes = array();
  while($row = mysqli_fetch_assoc($result)) {
    $returned_notes[] = $row;
  }
  echo json_encode($returned_notes);
  mysqli_close($connection);
?>
