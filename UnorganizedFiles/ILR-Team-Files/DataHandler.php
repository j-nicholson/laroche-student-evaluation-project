<?php
    class DataHandler {
        public static function insert_student($student_ID, $student_name, $student_major, $student_year, $student_semester, $student_photo, $student_date) {
            
            include('connection.php');
            
            $sec_student_ID = mysqli_real_escape_string($link, $student_ID);
            $sec_student_name = mysqli_real_escape_string($link, $student_name);
            $sec_student_major = mysqli_real_escape_string($link, $student_major);
            $sec_student_year = mysqli_real_escape_string($link, $student_year);
            $sec_student_semester = mysqli_real_escape_string($link, $student_semester);
            
            $query = "INSERT INTO Student (Student_ID, Student_Name, Student_Major, Student_Year, Student_Semester,  Student_Date, Student_Photo) VALUES ('$sec_student_ID', '$sec_student_name', '$sec_student_major', '$sec_student_year', '$sec_student_semester', '$student_date', '$student_photo')";
            
            $check = "SELECT * FROM Student WHERE Student_ID = '$sec_student_ID'";
            
            $update = "UPDATE Student SET Student_Name = '$sec_student_name', Student_Major = '$sec_student_major', Student_Year = '$sec_student_year', Student_Semester = '$sec_student_semester', Student_Date = '$student_date', Student_Photo = '$student_photo' WHERE Student_ID = '$sec_student_ID'";
            
            $result_check = mysqli_query($link, $check);
            if(!$result_check) {
                die("Query failed 1: " . mysqli_error($link));
            }
            
            $check_rows = mysqli_num_rows($result_check);
            if($check_rows > 0) {
                $update_confirm = mysqli_query($link, $update);
                if(!$update_confirm) {
                    die("Query failed 2: " . mysqli_error($link));
                }
                mysqli_close($link);
            }
            else {
                $result = mysqli_query($link, $query);
                if(!$result) {
                    die("Query failed 3: " . mysqli_error($link));
                }
                mysqli_close($link);
            }
        }
        
        public static function secure_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }    
    }
?>