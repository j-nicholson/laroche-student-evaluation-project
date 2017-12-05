<?php
  $id = intval($_GET['id']);
  include "../DBConnection.php";

  $query = "SELECT Student.Student_ID, Student.Student_Name, Misc_Notes.Date, Misc_Notes.Notes, Misc_Notes.Author FROM Student INNER JOIN Misc_Notes ON Misc_Notes.Student_ID = Student.Student_ID WHERE Student.Student_ID = '" . $id . "' ORDER BY Date DESC";
  $result = mysqli_query($connection, $query);

  $returned_notes = array();
  while($row = mysqli_fetch_assoc($result)) {
    $returned_notes[] = $row;
  }
  echo json_encode($returned_notes);
  mysqli_close($connection);
?>
