<?php
    class MiscNote {
      private $miscID;
      private $miscTitle;
      private $miscText;
      private $miscDate;
      private $miscAuthorID;
      private $miscStudentID;

      public function setMiscID($miscID) {
        $this->miscID = $miscID;
      }

      public function setMiscTitle($miscTitle) {
        $this->miscTitle = $miscTitle;
      }

      public function setMiscText($miscText) {
        $this->miscText = $miscText;
      }

      public function setMiscDate($miscDate) {
        $this->miscDate = $miscDate;
      }

      public function setMiscAuthorID($miscAuthorID) {
        $this->miscAuthorID = $miscAuthorID;
      }

      public function setMiscStudentID($miscStudentID) {
        $this->miscStudentID = $miscStudentID;
      }

      public function getMiscID() {
        return $this->miscID;
      }

      public function getMiscTitle() {
        return $this->miscTitle;
      }

      public function getMiscText() {
        return $this->miscText;
      }

      public function getMiscDate() {
        return $this->miscDate;
      }

      public function getMiscAuthorID() {
        return $this->miscAuthorID;
      }

      public function getMiscStudentID() {
        return $this->miscStudentID;
      }
    }
?>
