<!DOCTYPE html>
<link rel="stylesheet" href="style.css" />
<html>
<title>CourseDropDown</title>
<head>
<form  method="post" action="CourseDropDown.php">
<input type="hidden" name="submitted" value="true" />
<script type="text/javascript" src="toggle.js"></script>
<script src="js/libs/jquery.min.js" type="text/javascript"></script>
   <script type="text/javascript">
    function setColor(btn, color) {
        var property = document.getElementById(btn);
        if (property.style.backgroundColor == "rgb(127, 255, 0)") {
            property.style.backgroundColor = "#FFFFFF"        
        }
        else {
            property.style.backgroundColor = "#7FFF00"
        }
    }
</script>
<style>
.button {
    background-color: ;
    border: 1px solid black;
    border-radius: 8px;
    color: black;
    padding: 15px 0;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 150px;
}
</style>
</head>
<body>
<img src="background.jpeg" style="width:40%">
<h2>Department of Chemistry</h2>
<h2>Course Assessment Worksheet</h2>
<h3>Select a Course
<label>
    <select name= "coursecode" onchange="this.form.submit()" onchange="makeButtons()">
    <option value="Select a Year/Sec">Select a Course</option>  
<?php 
include ('dropdown.php');
?>
</select>
    </label>
<?php
include ('courseselect.php');
?>
<div id="slos">
<input type="button" id="button1" value = "Knowledge Base" class='button' style= "color:black" onclick="setColor('button1', '#101010')";/>
<input type="button" id="button2" value = "Lab Skills" class='button' style= "color:black" onclick="setColor('button2', '#101010')";/>
<input type="button" id="button3" value = "Practice" class='button' style= "color:black" onclick="setColor('button3', '#101010')";/>
<input type="button" id="button4" value = "Societal Connects" class='button' style= "color:black" onclick="setColor('button4', '#101010')";/>
<input type="button" id="button5" value = "Capstone" class='button' style= "color:black" onclick="setColor('button5', '#101010')";/>
</div>
<input type="button" id="slobutton" value = "SLO submit" class='button' style= "color:black" onclick="sloSubmit";/>
</body> 
</html>
<script>
function sloSubmit()
{
<?php
include ('sloSubmit.php');
?>
}
</script>
  
