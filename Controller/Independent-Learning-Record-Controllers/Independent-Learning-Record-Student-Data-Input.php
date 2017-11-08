<?php
    include "Classes/Student.php";
    include "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Data-Handler.php";
    include "Controller/DBConnection.php";
    $student = new Student();

    if(isset($_POST['submit'])) {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            
            $student->set_student_date(date('Y-m-d H:i:s'));
            
            $secure_id = DataHandler::secure_input($_POST['studentId']);
            $student->set_student_ID($secure_id);
            
            $secure_name = DataHandler::secure_input($_POST['studentName']);
            $student->set_student_name($secure_name);
        
            if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                $basefolder = "Controller/Independent-Learning-Record-Controllers/Student-Photos/" . $student->get_student_name() . "/";
                $studentImage = $_FILES['image']['name'];
                if(!is_dir($basefolder)){
                    if(mkdir($basefolder)) {
                        $directory = $basefolder . basename($studentImage);
                        $imageFileType = pathinfo($directory, PATHINFO_EXTENSION);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $directory)) {
                            $student->set_student_photo($directory);
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }  
                    }
                }
                else {
                    $directory = $basefolder . basename($studentImage);
                    $imageFileType = pathinfo($directory, PATHINFO_EXTENSION);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $directory)) {
                        $student->set_student_photo($directory);
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }  
                }
            }
            
            switch($_POST['major']) {
                case $_POST['major'] == "Chemistry":
                    $student->set_student_major("Chemistry");
                    break;
                case $_POST['major'] == "Biochemistry":
                    $student->set_student_major("Biochemistry");
                    break;
                case $_POST['major'] == "OtherOption":
                    $secure_major = DataHandler::secure_input($_POST['Other']);
                    $position = strpos($secure_major, " ");
                    if($position !== false){
                        $secure_major = str_replace(" ", "_", $secure_major);
                        $student->set_student_major($secure_major);
                    } else {
                        $student->set_student_major($secure_major);
                    }
                    break;
                default:
                    break;
            }
            
            $student->set_student_year($_POST['year']);
            
            switch($_POST['semester']) {
                case $_POST['semester'] == "Fall":
                    $student->set_student_semester("Fall");
                    break;
                case $_POST['semester'] == "Spring":
                    $student->set_student_semester("Spring");
                    break;
                case $_POST['semester'] == "Summer":
                    $student->set_student_semester("Summer");
                    break;
                default:
                    break;
            }
            
            $secure_notes = DataHandler::secure_input($_POST['notes']);
            $student->set_student_notes($secure_notes);
            
            Datahandler::insert_student($student->get_student_ID(), $student->get_student_name(), $student->get_student_major(), $student->get_student_year(), $student->get_student_semester(), $student->get_student_photo(), $student->get_student_date(), $student->get_student_notes());
        }
    }
?>