
    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
     <legend>Course Assessment Form Section I</legend>
      <br>
        <?php

    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-SLO-Information.php";
?>
        <div style="text-align:center" ><label>New SLOs:<br> <textarea rows="4" cols="100" type = text name = "NewSLOs" /></textarea></label></div><br>
        <div style="text-align:center" ><label>Upgrades:<br> <textarea rows="4" cols="100"  type = text name = "Upgrades" /></textarea></label></div><br>
        <div style="text-align:center"><label>Enhancements:<br> <textarea rows="4" cols="100" type = text name = "Enhancements" /></textarea></label></div><br>
        <div style="text-align:center"><label>Modifications:<br> <textarea rows="4" cols="100"  type = text name = "Modifications" /></textarea></div></label><br>
        <div style="text-align:center"><label>Other:<br> <textarea rows="4" cols="100" type = text name = "Other" /></textarea></label></div><br>
    </fieldset>


