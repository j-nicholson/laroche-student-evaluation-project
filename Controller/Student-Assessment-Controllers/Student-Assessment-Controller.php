<?php
    class Student_Assessment_Controller {
        private $student_assessment_model;
        
        public function __construct($student_assessment_model) {
            $this->student_assessment_model = $student_assessment_model;
        }
    }
?>