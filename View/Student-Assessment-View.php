<?php
    class Student_Assessment_View {
        private $student_assessment_controller;
        private $student_assessment_model;
        
        public function __construct($student_assessment_controller, $student_assessment_model) {
            $this->student_assessment_controller = $student_assessment_controller;
            $this->student_assessment_model = $student_assessment_model;
        }
        
        public function output() {
            require_once($this->student_assessment_model->student_assessment_page);
        }
    }
?>