<?php
    class Independent_Learning_Record_View {
        private $independent_learning_record_controller;
        private $independent_learning_record_model;
        
        public function __construct($independent_learning_record_controller, $independent_learning_record_model) {
            $this->independent_learning_record_controller = $independent_learning_record_controller;
            $this->independent_learning_record_model = $independent_learning_record_model;
        }
        
        public function output() {
            require_once($this->independent_learning_record_model->independent_learning_record_page);
        }
    }
?>