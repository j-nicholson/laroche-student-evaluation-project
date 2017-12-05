<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section5.php";
?>       
        
        
    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section V</legend>
         <br>  
        <div style="text-align:center">Summative Student Performace and Evaluation: </div><br>
        <table align = "center"  border = "1">
        <tr>
            <td><center>#<center></td>
			<td><center>ID#<center></td>
            <td><center>Grade<center></td>
			<td><center onmouseover="See key below">Learning Issues*<center></td>
			<td><center>Extent of Instructor Interactions<center></td>
			<td><center>Instructor Evaluations and Recomendations<center></td>
		<tr>
	        <tr>
			<td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructorInt[]" style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorEvalRecommendations[]" style="width: 350px; height: 75px"></textarea></td>
			</tr>
            <tr>
			<td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructorInt[]" style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorEvalRecommendations[]" style="width: 350px; height: 75px"></textarea></td>
			</tr>
            <tr>
            <td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructorInt[]" style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorEvalRecommendations[]" style="width: 350px; height: 75px"></textarea></td>
			</tr>
             <tr>
           <td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructorInt[]" style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorEvalRecommendations[]" style="width: 350px; height: 75px"></textarea></td>
			</tr>
            <tr>
            <td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructorInt[]" style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorEvalRecommendations[]" style="width: 350px; height: 75px"></textarea></td>
			</tr>
                </table>
			<br>
<label id="LI Key"><strong>* Learning Issues:</strong>
    1. Course pace
    2. Poor background
    3. Mindset
    4. Interest/curiosity
    5. Effort/focus
    6. Time management
    7. Health issues
    8. Complacence
    9. Employment hours
    10. Other
    </label>

    </fieldset>
