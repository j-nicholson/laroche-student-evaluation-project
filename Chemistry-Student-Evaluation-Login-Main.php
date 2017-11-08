<?php

    include "Model/Chemistry-Student-Evaluation-Login-Model.php";
    include "View/Chemistry-Student-Evaluation-Login-View.php";
    include "Controller/Chemistry-Student-Evaluation-Login-Controllers/Chemistry-Student-Evaluation-Login-Controller.php";

    $login_model = new Chemistry_Student_Evaluation_Model();
    $login_controller = new Chemsitry_Student_Evaluation_Login_Controller($login_model);
    $login_view = new Chemistry_Student_Evaluation_Login_View($login_controller, $login_model);

    echo $login_view->output();
?>
