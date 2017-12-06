<?php
    class DataHandler {
        // Insertion for Student_Info
        public static function insert_student($student_ID, $student_name, $student_major, $student_year, $student_semester, $student_photo, $student_date, $student_Math_Grade, $student_Athletics,$student_Housing_Status,$student_Honors_Institute,$student_International_Student) {
            include "Controller/DBConnection.php";
            $sec_student_ID = mysqli_real_escape_string($connection, $student_ID);
            $sec_student_name = mysqli_real_escape_string($connection, $student_name);
            $sec_student_major = mysqli_real_escape_string($connection, $student_major);
            $sec_student_year = mysqli_real_escape_string($connection, $student_year);
            $sec_student_semester = mysqli_real_escape_string($connection, $student_semester);
            $sec_student_Math_Grade = mysqli_real_escape_string($connection, $student_Math_Grade);
            $sec_student_Athletics = mysqli_real_escape_string($connection, $student_Athletics);
            $sec_student_Housing_Status = mysqli_real_escape_string($connection, $student_Housing_Status);
            $sec_student_Honors_Institute = mysqli_real_escape_string($connection, $student_Honors_Institute);
            $sec_student_International_Student = mysqli_real_escape_string($connection, $student_International_Student);
            //check for blank photo update
            if($student_photo == ""){
              //greb old photo
              $photo_retreive = "SELECT Student_Photo FROM Student WHERE Student_ID = '$sec_student_ID'";
              $photo_query = mysqli_query($connection, $photo_retreive);
              if(!$photo_query) {
                  die("Query failed on photo retreival: " . mysqli_error($connection));
              }
              while($row = mysqli_fetch_assoc($photo_query)) {
                $student_photo = $row['Student_Photo'];
              }

            }

            $query = "INSERT INTO Student (Student_ID, Student_Name, Student_Major, Student_Year, Student_Semester, Student_Date, Student_Photo, Student_Math_Grade, Student_Athletics, Student_Housing_Status, Student_Honors, International_Student) VALUES ('$sec_student_ID', '$sec_student_name', '$sec_student_major', '$sec_student_year', '$sec_student_semester', '$student_date', '$student_photo', '$sec_student_Math_Grade', '$sec_student_Athletics', '$sec_student_Housing_Status', '$sec_student_Honors_Institute', '$sec_student_International_Student')";

            $check = "SELECT * FROM Student WHERE Student_ID = '$sec_student_ID'";

            $update = "UPDATE Student SET Student_Name = '$sec_student_name', Student_Major = '$sec_student_major', Student_Year = '$sec_student_year', Student_Semester = '$sec_student_semester', Student_Date = '$student_date', Student_Photo = '$student_photo', Student_Math_Grade = '$sec_student_Math_Grade', Student_Athletics = '$sec_student_Athletics', Student_Housing_Status = '$sec_student_Housing_Status', Student_Honors = '$sec_student_Honors_Institute', International_Student = '$sec_student_International_Student' WHERE Student_ID = '$sec_student_ID'";

            $result_check = mysqli_query($connection, $check);
            if(!$result_check) {
                die("Query failed 1: " . mysqli_error($connection));
            }

            $check_rows = mysqli_num_rows($result_check);
            if($check_rows > 0) {
                $update_confirm = mysqli_query($connection, $update);
                if(!$update_confirm) {
                    die("Query failed 2: " . mysqli_error($connection));
                }
                mysqli_close($connection);
            }
            else {
                $result = mysqli_query($connection, $query);
                if(!$result) {
                    die("Query failed 3: " . mysqli_error($connection));
                }
                mysqli_close($connection);
            }
        }

        // Insertion for Student_Notes
        public static function insert_notes($miscId, $miscText, $miscDate, $miscAuthor) {
          include "Controller/DBConnection.php";
          $sec_miscId = mysqli_real_escape_string($connection, $miscId);
          $sec_miscText = mysqli_real_escape_string($connection, $miscText);
          $sec_miscDate = mysqli_real_escape_string($connection, $miscDate);
          $sec_miscAuthor = mysqli_real_escape_string($connection, $miscAuthor);

          $query = "INSERT INTO Misc_Notes (Misc_Notes.Notes, Misc_Notes.Date, Misc_Notes.Author, Misc_Notes.Student_ID) VALUES ('$sec_miscText', '$sec_miscDate', '$sec_miscAuthor', '$sec_miscId')";
          $result = mysqli_query($connection, $query);
          if(!$result) {
            die("Notes insertion failed: " . mysqli_error($connection));
          }
          mysqli_close($connection);
        }

        public static function insert_user() // w/ parameters (whatever they may be)
        {
          # code...
        }

        public static function secure_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
?>
