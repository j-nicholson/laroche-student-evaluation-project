<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section4.php";
?>       
        
        
    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
<?php
include "Student-Assessment-Learning-Issues.php";
?>
    <legend>Course Assessment Form Section IV</legend>
         <br>  
        <div style="text-align:center">Log of Mid-Semster Individual Student Performace and Evaluation: </div><br>
        <table align = "center"  border = "1">
        <tr>
            <td><center>#<center></td>
			<td><center>ID#<center></td>
			<td><center>Learning Issues<center></td>
			<td><center>Extent of Instructor Interactions<center></td>
			<td><center>Instructor Recommendations<center></td>
		<tr>
	        <tr>
			<td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructor[]"style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorRecommendations[]"style="width: 350px; height: 75px"></textarea></td>
			</tr>
            <tr>
			<td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructor[]"style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorRecommendations[]"style="width: 350px; height: 75px"></textarea></td>
			</tr>
            <tr>
            <td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructor[]"style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorRecommendations[]"style="width: 350px; height: 75px"></textarea></td>
			</tr>
             <tr>
            <td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructor[]"style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorRecommendations[]"style="width: 350px; height: 75px"></textarea></td>
			</tr>
            <tr>
            <td><input type="text" size = "5" NAME="Section4Num[]" /></td>
			<td><input type="text" size = "5" NAME="IDNum[]" /></td>
			<td><input type="text" size = "13" NAME="LearningIssue[]" /></td>
			<td><textarea NAME="ExtentInstructor[]"style="width: 350px; height: 75px"></textarea></td>
			<td><textarea NAME="InstructorRecommendations[]"style="width: 350px; height: 75px"></textarea></td>
			</tr>
                </table>
			<br>
    </fieldset>
