<?php
    class Chemistry_Student_Evaluation_Login_View {
        private $chemistry_student_evaluation_login_controller;
        private $chemistry_student_evaluation_login_model;
        
        public function __construct($chemistry_student_evaluation_login_controller, $chemistry_student_evaluation_login_model) {
            $this->chemistry_student_evaluation_login_controller = $chemistry_student_evaluation_login_controller;
            $this->chemistry_student_evaluation_login_model = $chemistry_student_evaluation_login_model;
        }
        
        public function output() {
            require_once($this->chemistry_student_evaluation_login_model->chemistry_student_evaluation_login_page);
        }
    }
?>