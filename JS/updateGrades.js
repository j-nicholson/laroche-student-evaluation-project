function updateGrades(grade)
{
	var x = document.getElementById(grade).value;
	var x = x.toUpperCase();
    	switch(x)
	{
		case 'A':
			var y = document.getElementById("gradeA").value;
			y = Number(y) + 1;
			document.getElementById("gradeA").value = y;
			break;
		case 'B':
			var y = document.getElementById("gradeB").value;
			y = Number(y) + 1;
			document.getElementById("gradeB").value = y;
			break;
		case 'C':
			var y = document.getElementById("gradeC").value;
			y = Number(y) + 1;
			document.getElementById("gradeC").value = y;
			break;
		case 'D':
			var y = document.getElementById("gradeD").value;
			y = Number(y) + 1;
			document.getElementById("gradeD").value = y;
			break;
		case 'F':
			var y = document.getElementById("gradeF").value;
			y = Number(y) + 1;
			document.getElementById("gradeF").value = y;
			break;
	}
}
