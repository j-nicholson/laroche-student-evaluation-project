
<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section2.php";
?>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section II</legend>

        <br><div style="text-align:center"><label>Chemestry Concepts Carry-Over From Previous Semsters:<br>
        <textarea id = "textarea" rows="4" cols="100" type = text name = "ChemConceptCarryOver"  /></textarea></label></div><br>
        <div style="text-align:center"><label>Were Objectves and Content Covered:<br> <textarea rows="4" cols="100"  type = text name = "WereObjectvesContentCovered" /></textarea></label></div><br>
        <div style="text-align:center"><label>General Comments:<br>
        <textarea rows="4" cols="100"  type = text name = "GeneralComments" /></textarea></label></div><br>

        <div style="text-align:center">Overall student performace: </div>
        <table align = "center"  border = "1">
        <tr>
            <td><center>%A<center></td>
			<td><center>%B<center></td>
			<td><center>%C<center></td>
			<td><center>%D<center></td>
			<td><center>%F<center></td>
		<tr>
	        <tr>
			<td><input type="text" size = "5" NAME="Apercent" /></td>
			<td><input type="text" size = "5" NAME="Bpercent" /></td>
			<td><input type="text" size = "5" NAME="Cpercent" /></td>
			<td><input type="text" size = "5" NAME="Dpercent" /></td>
			<td><input type="text" size = "5" NAME="Fpercent" /></td>
			</tr>
                </table>
			<br>
    </fieldset>
