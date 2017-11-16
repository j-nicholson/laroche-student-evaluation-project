<?php
    include "Model/Classes/Student.php";
    include "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Data-Handler.php";
    include "Controller/DBConnection.php";
    $student = new Student();
    //$globalStudentID = 0;
    if($_GET['action'] == 'submitStudentInfo') {
      if(isset($_POST['submit'])) {
        if($_SERVER['REQUEST_METHOD'] == "POST") {

            $student->set_student_date(date('Y-m-d H:i:s'));

            $secure_id = DataHandler::secure_input($_POST['studentId']);
            $student->set_student_ID($secure_id);
            //super global is needed as the contructor for MiscNotes requires a valid studentID
            //$GLOBALS['globalStudentID'] = $secure_id;

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

            //MathPlacement Input to the Database
            switch($_POST['mathPlacement']){
                case $_POST['mathPlacement'] == "A":
                    $student->set_student_math_grade("A");
                    break;
                case $_POST['mathPlacement'] == "A-":
                    $student->set_student_math_grade("A-");
                    break;
                case $_POST['mathPlacement'] == "B+":
                    $student->set_student_math_grade("B+");
                    break;
                case $_POST['mathPlacement'] == "B":
                    $student->set_student_math_grade("B");
                    break;
                case $_POST['mathPlacement'] == "B-":
                    $student->set_student_math_grade("B-");
                    break;
                case $_POST['mathPlacement'] == "C+":
                    $student->set_student_math_grade("C+");
                    break;
                case $_POST['mathPlacement'] == "C":
                    $student->set_student_math_grade("C");
                    break;
                case $_POST['mathPlacement'] == "C-":
                    $student->set_student_math_grade("C-");
                    break;
                case $_POST['mathPlacement'] == "D+":
                    $student->set_student_math_grade("D+");
                    break;
                case $_POST['mathPlacement'] == "D":
                    $student->set_student_math_grade("D");
                    break;
                case $_POST['mathPlacement'] == "D-":
                    $student->set_student_math_grade("D-");
                    break;
                case $_POST['mathPlacement'] == "F":
                    $student->set_student_math_grade("F");
                    break;
                default:
                    break;
            }

            //Athletics Input to the Database
            switch ($_POST['athletes']){
                case $_POST['athletes'] == "no":
                    $student->set_student_Athletics("no");
                    break;
                case $_POST['athletes'] == "yes":
                     $secure_Athlete_Student = DataHandler::secure_input($_POST['AthleticsDisplay']);
                    $position = strpos($secure_Athlete_Student, " ");
                    if($position !== false){
                        $secure_major = str_replace(" ", "_", $secure_Athlete_Student);
                        $student->set_student_Athletics($secure_Athlete_Student);
                    } else {
                        $student->set_student_Athletics($secure_Athlete_Student);
                    }
                    break;

                default:
                    break;
            }
             switch($_POST['housing']){
                case $_POST['housing'] == "resident":
                    $student->set_student_Housing_Status("resident");
                    break;
                case $_POST['housing']  == "commuter":
                    $student->set_student_Housing_Status("commuter");
                    break;
                default:
                    break;
            }

            //Student honors Intitute Input to the Database

            switch($_POST['honors']){
                case $_POST['honors'] == "honorsYes":
                    $student->set_student_Honors_Institute("Yes");
                    break;
                case $_POST['honors'] == "honorsNo":
                    $student->set_student_Honors_Institute("No");
                    break;
                default:
                    break;
            }

            //International Student

            switch($_POST['InternationalStudent']){
                case $_POST['InternationalStudent'] == "No":
                    $student->set_student_International_Student("No");
                    break;
                case $_POST['InternationalStudent'] == "Yes":
                    $secure_Int_Student = DataHandler::secure_input($_POST['OtherInternational']);
                    $position = strpos($secure_Int_Student, " ");
                    if($position !== false){
                        $secure_major = str_replace(" ", "_", $secure_Int_Student);
                        $student->set_student_International_Student($secure_Int_Student);
                    } else {
                        $student->set_student_International_Student($secure_Int_Student);
                    }
                default:
                    break;

            }
            Datahandler::insert_student($student->get_student_ID(), $student->get_student_name(), $student->get_student_major(), $student->get_student_year(), $student->get_student_semester(), $student->get_student_photo(), $student->get_student_date(), $student->get_student_math_grade(), $student->get_student_Athletics(), $student-> get_student_Housing_Status(),$student->get_student_Honors_Institute(),$student->get_student_International_Student());
        }
      }
    }
    //MiscNotes object is made here with the super global $globalStudentID
    /*$miscNotes = new MiscNotes($globalStudentID);

    if(isset($_POST['submitNotes'])) {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            echo $globalStudentID;
            $secure_notes = DataHandler::secure_input($_POST['notes']);
            $miscNotes->set_student_misc_notes($secure_notes);

            $last_time_edited = $_POST['lastTimeEdited'];

            $miscNotes->set_last_time_edited($last_time_edited);

            $userEditing = $_POST['userLoggedIn'];
            $miscNotes->set_user_editing($userEditing);

            Datahandler::insert_notes($miscNotes->get_studentID(),$miscNotes->get_misc_notes(), $miscNotes->get_user_editing_info(), $miscNotes->get_last_time_edited());
        }
    }*/
?>
