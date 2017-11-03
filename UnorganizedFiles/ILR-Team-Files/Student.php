<?php
    class Student {
        private $student_ID;
        private $student_Name;
        private $student_Major;
        private $student_Year;
        private $student_Semester;
        private $student_Photo;
        private $student_Date;
        
        public function set_student_ID($id) {
            $this->student_ID = $id;
        }
        
        public function set_student_name($name) {
            $this->student_Name = $name;
        }
        
        public function set_student_major($major) {
            $this->student_Major = $major;
        }
        
        public function set_student_year($year) {
            $this->student_Year = $year;
        }
        
        public function set_student_semester($semester) {
            if(stripos($semester, 'Fall') !== false || stripos($semester, 'Spring') !== false || stripos($semester, 'Summer') !== false)
                $this->student_Semester = $semester;
            else
                $this->student_Semester = null;
        }
        
        public function set_student_photo($photo) {
            $this->student_Photo = $photo;
        }
        
        public function set_student_date($date) {
            $this->student_Date = $date;
        }
        
        public function get_student_ID() {
            return $this->student_ID;
        }
        
        public function get_student_name() {
            return $this->student_Name;
        }
        
        public function get_student_major() {
            return $this->student_Major;
        }
        
        public function get_student_year() {
            return $this->student_Year;
        }
        
        public function get_student_semester() {
            return $this->student_Semester;
        }
        
        public function get_student_photo() {
            return $this->student_Photo;
        }
        
        public function get_student_date() {
            return $this->student_Date;
        }
    }
?>