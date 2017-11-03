<?php
    include "Model/Student-Assessment-Model.php";
    include "View/Student-Assessment-View.php";
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Controller.php";

    $assessment_model = new Student_Assessment_Model();
    $assessment_controller = new Student_Assessment_Controller($assessment_model);
    $assessment_view = new Student_Assessment_View($assessment_controller, $assessment_model);

    echo $assessment_view->output();

?>