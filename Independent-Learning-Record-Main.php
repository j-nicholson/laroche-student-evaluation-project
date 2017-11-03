<?php
    include "Model/Independent-Learning-Record-Model.php";
    include "View/Independent-Learning-Record-View.php";
    include "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Controller.php";

    $ilr_model = new Independent_Learning_Record_Model();
    $ilr_controller = new Independent_Learning_Record_Controller($ilr_model);
    $ilr_view = new Independent_Learning_Record_View($ilr_controller, $ilr_model);
    
    echo $ilr_view->output();
?>