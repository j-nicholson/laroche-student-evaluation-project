<?php
    include "Model/Classes/Student.php";
    include "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Data-Handler.php";
    include "Controller/DBConnection.php";
    $student = new Student();

    if($_GET['action'] == 'submitStudentInfo') {
      if(isset($_POST['submit'])) {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            // Set the student Date
            $student->set_student_date(date('Y-m-d H:i:s'));

            // Set the student ID
            $secure_id = DataHandler::secure_input($_POST['studentId']);
            $student->set_student_ID($secure_id);
            $_SESSION['studentId'] = $student->get_student_ID();

            // Set the student Name
            $secure_name = DataHandler::secure_input($_POST['studentName']);
            $student->set_student_name($secure_name);
            $_SESSION['studentName'] = $student->get_student_name();

            // Set the student Photo
            $_SESSION['studentPhoto'] = "";
            if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                $basefolder = "Controller/Independent-Learning-Record-Controllers/Student-Photos/" . $student->get_student_name() . "/";
                $studentImage = $_FILES['image']['name'];
                if(!is_dir($basefolder)){
                    if(mkdir($basefolder)) {
                        $directory = $basefolder . basename($studentImage);
                        $imageFileType = pathinfo($directory, PATHINFO_EXTENSION);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $directory)) {
                            $student->set_student_photo($directory);
                            $_SESSION['studentPhoto'] = $student->get_student_photo();
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
                        $_SESSION['studentPhoto'] = $student->get_student_photo();
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }

            // Set the student Major
            switch($_POST['major']) {
                case $_POST['major'] == "Chemistry":
                    $student->set_student_major("Chemistry");
                    $_SESSION['studentMajor'] = $student->get_student_major();
                    break;
                case $_POST['major'] == "Biochemistry":
                    $student->set_student_major("Biochemistry");
                    $_SESSION['studentMajor'] = $student->get_student_major();
                    break;
                case $_POST['major'] == "OtherOption":
                    $secure_major = DataHandler::secure_input($_POST['Other']);
                    $position = strpos($secure_major, " ");
                    if($position !== false){
                        $secure_major = str_replace(" ", "_", $secure_major);
                        $student->set_student_major($secure_major);
                        $_SESSION['studentMajor'] = $student->get_student_major();
                    } else {
                        $student->set_student_major($secure_major);
                        $_SESSION['studentMajor'] = $student->get_student_major();
                    }
                    break;
                default:
                    break;
            }

            // Set the student Year
            $student->set_student_year($_POST['year']);
            $_SESSION['studentYear'] = $student->get_student_year();

            // Set the student Semester
            switch($_POST['semester']) {
                case $_POST['semester'] == "Fall":
                    $student->set_student_semester("Fall");
                    $_SESSION['studentSemester'] = $student->get_student_semester();
                    break;
                case $_POST['semester'] == "Spring":
                    $student->set_student_semester("Spring");
                    $_SESSION['studentSemester'] = $student->get_student_semester();
                    break;
                case $_POST['semester'] == "Summer":
                    $student->set_student_semester("Summer");
                    $_SESSION['studentSemester'] = $student->get_student_semester();
                    break;
                default:
                    break;
            }

            // Set the student math placement results
            switch($_POST['mathPlacement']){
                case $_POST['mathPlacement'] == "A":
                    $student->set_student_math_grade("A");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "A-":
                    $student->set_student_math_grade("A-");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "B+":
                    $student->set_student_math_grade("B+");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "B":
                    $student->set_student_math_grade("B");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "B-":
                    $student->set_student_math_grade("B-");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "C+":
                    $student->set_student_math_grade("C+");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "C":
                    $student->set_student_math_grade("C");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "C-":
                    $student->set_student_math_grade("C-");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "D+":
                    $student->set_student_math_grade("D+");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "D":
                    $student->set_student_math_grade("D");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "D-":
                    $student->set_student_math_grade("D-");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                case $_POST['mathPlacement'] == "F":
                    $student->set_student_math_grade("F");
                    $_SESSION['studentMathPlacement'] = $student->get_student_math_grade();
                    break;
                default:
                    break;
            }

            // Set the student athletics status
            switch ($_POST['athletes']){
                case $_POST['athletes'] == "no":
                    $student->set_student_Athletics("no");
                    $_SESSION['studentAthletes'] = $student->get_student_Athletics();
                    break;
                case $_POST['athletes'] == "yes":
                    $secure_Athlete_Student = DataHandler::secure_input($_POST['AthleticsDisplay']);
                    $position = strpos($secure_Athlete_Student, " ");
                    if($position !== false){
                        $secure_major = str_replace(" ", "_", $secure_Athlete_Student);
                        $student->set_student_Athletics($secure_Athlete_Student);
                        $_SESSION['studentAthletes'] = $student->get_student_Athletics();
                    } else {
                        $student->set_student_Athletics($secure_Athlete_Student);
                        $_SESSION['studentAthletes'] = $student->get_student_Athletics();
                    }
                    break;
                default:
                    break;
            }

            // Set the student housing status
             switch($_POST['housing']){
                case $_POST['housing'] == "resident":
                    $student->set_student_Housing_Status("resident");
                    $_SESSION['studentHousing'] = $student->get_student_Housing_Status();
                    break;
                case $_POST['housing']  == "commuter":
                    $student->set_student_Housing_Status("commuter");
                    $_SESSION['studentHousing'] = $student->get_student_Housing_Status();
                    break;
                default:
                    break;
            }

            // Set the student honors status
            switch($_POST['honors']){
                case $_POST['honors'] == "honorsYes":
                    $student->set_student_Honors_Institute("Yes");
                    $_SESSION['studentHonors'] = $student->get_student_Honors_Institute();
                    break;
                case $_POST['honors'] == "honorsNo":
                    $student->set_student_Honors_Institute("No");
                    $_SESSION['studentHonors'] = $student->get_student_Honors_Institute();
                    break;
                default:
                    break;
            }

            // Set the student international status
            switch($_POST['InternationalStudent']){
                case $_POST['InternationalStudent'] == "No":
                    $student->set_student_International_Student("No");
                    $_SESSION['InternationalStudent'] = $student->get_student_International_Student();
                    break;
                case $_POST['InternationalStudent'] == "Yes":
                    $secure_Int_Student = DataHandler::secure_input($_POST['OtherInternational']);
                    $position = strpos($secure_Int_Student, " ");
                    if($position !== false){
                        $secure_major = str_replace(" ", "_", $secure_Int_Student);
                        $student->set_student_International_Student($secure_Int_Student);
                        $_SESSION['InternationalStudent'] = $student->get_student_International_Student();
                    } else {
                        $student->set_student_International_Student($secure_Int_Student);
                        $_SESSION['InternationalStudent'] = $student->get_student_International_Student();
                    }
                default:
                    break;

            }
            // Insert student info to database
            Datahandler::insert_student($_SESSION['studentId'], $_SESSION['studentName'], $_SESSION['studentMajor'], $_SESSION['studentYear'], $_SESSION['studentSemester'], $_SESSION['studentPhoto'], $student->get_student_date(), $_SESSION['studentMathPlacement'], $_SESSION['studentAthletes'], $_SESSION['studentHousing'], $_SESSION['studentHonors'], $_SESSION['InternationalStudent']);
        }
      }
    }
?>
