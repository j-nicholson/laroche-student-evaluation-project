<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section5.php";
?>       
        
        
    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section IV</legend>
         <br>  
        <div style="text-align:center">Log of Mid-Semster Individual Student Performace and Evaluation: </div><br>
        <table align = "center"  border = "1">
        <tr>
            <td><center>#<center></td>
			<td><center>ID#<center></td>
            <td><center>Grade<center></td>
			<td><center>Learning Issues*<center></td>
			<td><center>Extent of Instructor Interactions<center></td>
			<td><center>Instructor Evaluations and Recomendations<center></td>
		<tr>
	        <tr>
			<td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" id="fname0" onchange="updateGrades('fname0')" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructorInt[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorEvalRecommendations[]" /></td>
			</tr>
            <tr>
			<td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" id="fname1" onchange="updateGrades('fname1')" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructorInt[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorEvalRecommendations[]" /></td>
			</tr>
            <tr>
            <td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" id="fname2" onchange="updateGrades('fname2')" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructorInt[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorEvalRecommendations[]" /></td>
			</tr>
             <tr>
           <td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" id="fname3" onchange="updateGrades('fname3')" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructorInt[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorEvalRecommendations[]" /></td>
			</tr>
            <tr>
            <td><input type="text" size = "5" NAME="Section5Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
            <td><input type="text" id="fname4" onchange="updateGrades('fname4')" size = "5" NAME="Grade[]" /></td> 
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><input type="text" size = "30" NAME="ExtentInstructorInt[]" /></td>
			<td><input type="text" size = "32" NAME="InstructorEvalRecommendations[]" /></td>
			</tr>
                </table>
			<br>
    </fieldset>
