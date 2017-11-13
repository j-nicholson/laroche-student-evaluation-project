<?php
    class MiscNotes{
        private $misc_notes;
        private $student_Id;
        private $last_time_edited;
        private $user_editing_data;
        
        function __construct($studentId){
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
            return $user_editing_data;
        } 
        
        public function get_studentID(){
            return $studentId;
        }
        public function get_misc_notes(){
            return $misc_notes;
        }
        public function get_last_time_edited(){
            return $last_time_edited;
        }
        
        
        
        
    }



?>