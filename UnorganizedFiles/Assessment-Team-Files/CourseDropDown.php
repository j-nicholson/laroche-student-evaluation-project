<!DOCTYPE html>
<link rel="stylesheet" href="style.css" />
<html>
<title>CourseDropDown</title>
<head>
<form  method="post" action="CourseDropDown.php">
<input type="hidden" name="submitted" value="true" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type = "text/javascript" src = "jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../ILR-Team-Files/styles1.css">
    
<script src="js/libs/jquery.min.js" type="text/javascript"></script>
    
   <script type="text/javascript" src="setColor.js"></script>
    
<script type="text/javascript">
    
function sloSubmit()
{
var property = document.getElementById('button1');
if (property.style.backgroundColor == "rgb(127, 255, 0)") {
var SLO1 = true; } else{var SLO1 = false;}
var property = document.getElementById('button2');
if (property.style.backgroundColor == "rgb(127, 255, 0)") {
var SLO2 = true; } else{var SLO2 = false;}
var property = document.getElementById('button3');
if (property.style.backgroundColor == "rgb(127, 255, 0)") {
var SLO3 = true; } else{var SLO3 = false;}
var property = document.getElementById('button4');
if (property.style.backgroundColor == "rgb(127, 255, 0)") {
var SLO4 = true; } else{var SLO4 = false;}
var property = document.getElementById('button5');
if (property.style.backgroundColor == "rgb(127, 255, 0)") {
var SLO5 = true; } else{var SLO5 = false;}
$.post("sloSubmit.php",
        {
        postSLO1: SLO1,
	postSLO2: SLO2,
	postSLO3: SLO3,	
	postSLO4: SLO4,
	postSLO5: SLO5,
        },
        function(data){
          my_function(data);
        });

function my_function(data)
{
}
}
</script>
<style>
.button {
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
<div class="topnav">
    <a href="../ILR-Team-Files/Ilr.php">Independent Learning Record</a>
    <a href="../Assessment-Team-Files/CourseDropDown.php">Assessment Form</a>
    <a class="logOut" href="../ILR-Team-Files/index-signIn.php?logout=1">Logout</a>
</div> 
<img src="https://laroche.edu/img/logo.png" alt="Logo" style="width:300px;height:80px;">
    <header>
        <h1>Chemistry Department</h1> 
        <h2>Student Assessment Form</h2>
    </header>

<h3 class="head3">Select a Course
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
<input type="button" id="slobutton" value = "SLO submit" class='button' style= "color:black" onclick="sloSubmit()";/>
</body> 
</html>
    
<!--MY ADDED CODE-->


<?php
//include ('download.php');
include ('CAFSec1.php');
?>

<br>
<br><a href="download.php">Syllabus</a><br>


    <form action="code.php" method="post">
    <input type="hidden" name="submitted2" value="true" />
    <fieldset>
    <legend>Course Assessment Form Section 1 (Please be detailed):</legend>
        <div><label>CAFS1ID: <input type = text name = "CAFS1ID" /></label></div><br>
        <div><label;>New SLOs: <input type = text name = "NewSLOs" /></label></div><br>
        <div><label>Upgrades: <input type = text name = "Upgrades" /></label></div><br>
        <div><label>Enhancements: <input type = text name = "Enhancements" /></label></div><br>
        <div><label>Modifications: <input type = text name = "Modifications" /></div></label><br>
        <div><label>Other: <input type = text name = "Other" /></label></div><br>
    </fieldset>
    
       <iframe name="votar" style="display:none;"></iframe>
<form action="code.php" method="post" target="votar">
    <input type="submit" value="Update" />
    <input type="hidden" name="ad_id" value="2">            
</form>
  

