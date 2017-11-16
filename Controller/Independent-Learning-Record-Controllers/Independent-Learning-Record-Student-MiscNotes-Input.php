<?php
  include "Model/Classes/MiscNote.php";
  include "Controller/DBConnection.php";
  $studentNote = new MiscNote();
  if($_GET['action'] == 'submitStudentNotes') {
    if(isset($_POST['submitNotes'])) {
      if($_SERVER['REQUEST_METHOD'] == "POST") {
        $studentNote->setMiscDate(date('Y-m-d H:i:s'));
        $secure_text = DataHandler::secure_input($_POST['miscNotes']);
        $studentNote->setMiscText($secure_text);

        Datahandler::insert_notes($studentNote->getMiscText(), $studentNote->getMiscDate());
      }
    }
  }
?>
