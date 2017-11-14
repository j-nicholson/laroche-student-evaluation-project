<?php
    class MiscNotes {
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
      /*  private $misc_notes;
        private $student_Id;
        private $last_time_edited;
        private $user_editing_data; *?

      /*  public function __construct($studentId){
            $this->student_Id = $studentId;
        }

        public function set_student_misc_notes($miscNotes){
            $this->misc_Notes = $miscNotes;
        }

        public function set_last_time_edited($lastTimeEdited){
            $this->last_time_edited = $lastTimeEdited;
        }

         public function set_user_editing($user_editing_data){
            $this->user_editing_data = $user_editing_data;
        }

        //leave this code piece untouched! I am supposing this information should already be avaiable from the page but i am not sure John/Antonio. Let me know how to get the user that is logger in as current user.

        public function get_user_editing_info(){
            return $this->user_editing_data;
        }

        public function get_studentID(){
            return $this->studentId;
        }
        public function get_misc_notes(){
            return $this->misc_notes;
        }
        public function get_last_time_edited(){
            return $this->last_time_edited;
        }*/
    }
?>
