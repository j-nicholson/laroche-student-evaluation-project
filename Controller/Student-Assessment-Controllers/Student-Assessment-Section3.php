<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section3.php";
?>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section III</legend>

        <br><div style="text-align:center"><label for= "textarea">Course Prerequisites:<br> <textarea id = "textarea" rows="4" cols="100" type = text name = "CoursePrerequisites"  /></textarea></label></div><br>
        <div style="text-align:center"><label>Textbooks/Other Required Material:<br> <textarea rows="4" cols="100"  type = text name = "Textbooks/OtherRequiredMaterial" /></textarea></label></div><br>
        <div style="text-align:center"><label>Student Assessment Measures:<br> <textarea rows="4" cols="100"  type = text name = "StudentAssessmentMeasures" /></textarea></label></div><br>
        <div style="text-align:center"><label>Pedagogy:<br> <textarea rows="4" cols="100"  type = text name = "Pedagogy" /></textarea></div></label><br>
         <div style="text-align:center"><label>Faculty/Guest Instructors:<br> <textarea rows="4" cols="100" type = text name = "Faculty/GuestInstructors" /></textarea></label></div><br>
        <div style="text-align:center"><label>Minor and Capital Equipment Needs: <br><textarea rows="4" cols="100"  type = text name ="MinorandCapitalEquipmentNeeds" /></textarea></div></label><br>
        <div style="text-align:center"><label>Other Recommendations: <br><textarea rows="4" cols="100"  type = text name = "OtherRecommendations" /></textarea></label></div>

    </fieldset>
