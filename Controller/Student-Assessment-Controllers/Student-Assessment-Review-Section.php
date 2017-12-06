<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Review-Section-Update.php";
?>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Review</legend>

        <br>
        
        <div style="text-align:center"><label for= "textarea">Review ID: <br> <textarea id = "textarea" rows="4" cols="25" type = text name = "ReviewID"  /></textarea></label></div><br>
        
        <br><div style="text-align:center"><label for= "textarea">Department review and comments: <br> <textarea id = "textarea" rows="4" cols="100" type = text name = "DepReview"  /></textarea></label></div><br>

        <div style="text-align:center"><label>Department Reviewer(s): <br> <textarea rows="4" cols="100"  type = text name = "DepReviewer" /></textarea></label></div><br>

        




        <div style="text-align:center"><label>New action plans set for this course: <br> <textarea rows="4" cols="100"  type = text name = "NewActPlan" /></textarea></div></label><br>

         <div style="text-align:center"><label>New budget items to request for the next fiscal year: <br> <textarea rows="4" cols="100" type = text name = "NewBudgItem" /></textarea></label></div><br>

        <div style="text-align:center"><label>Director of Assessment/Division Chair review and comments: <br><textarea rows="4" cols="100"  type = text name ="DivChairReview" /></textarea></div></label><br>

        <div style="text-align:center"><label>Division Chair: <br><textarea rows="4" cols="100"  type = text name = "DivChairSig" /></textarea></label></div>

        <div style="text-align:center"><label>Date of review: <br></label>
        <input id="date" name="DivChairRevDate" type="text" value="<?php echo date('m/d/y');?>"/>
        


    </fieldset>
