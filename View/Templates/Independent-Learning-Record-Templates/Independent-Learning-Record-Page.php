<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/Main-Evaluation-Page-Style.css"> 
        <title>ILR Form</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="JS/DisplayStudentProfilePicture.js"></script>
        <script src="JS/ShowOtherMajorField.js"></script>
        <script src="JS/RetrieveStudentInfoById.js"></script>
    </head>
    <body>
        <!-- top navigation -->
        <div class="Top-Navigation-Pane">
             <a href="Independent-Learning-Record-Main.php">Independent Learning Record</a>
             <a href="Student-Assessment-Main.php">Assessment Form</a>
             <a class="logOut" href="Chemistry-Student-Evaluation-Login-Main.php?logout=1">Logout</a>
        </div> 
        <!-- LRC logo -->
        <img src="https://laroche.edu/img/logo.png" alt="Logo" style="width:300px;height:80px;">
        <header>
                <h1>Chemistry Department</h1>
                <h2>Undergraduate Individual Learning Record</h2>
        </header>
        <h2 id="ILR-Title">Biographical Information </h2> 
        <h5 id="Current_Date"></h5>
        <script src="JS/ShowCurrentDate.js"></script>
        <div id="Student-Information-Form">
             <form name="Student-Information-Input-Form" class="w3-container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" autocomplete="off" enctype="multipart/form-data">
                <p>
                    <img id="Student-Profile-Image" src="#" alt="">
                </p>
                <img id="Updated-Student-Profile-Image" />
                <p>
                    <label>Upload Image: </label>
                    <input type="file" id="picture"  name="image" accept="image/*" onchange="displayStudentProfilePicture(this)" value="">
                </p>
                
                <p>
                    <label>ID: </label>
                    <input id="studentId" class="studentId field-style" type="text" name="studentId" onchange="retrieveStudentInfoById(this.value)" maxlength="6" required>
                    
                    <label id="nameLabel" style="padding-left:5px;">Name: </label>
                    <input id="studentName" class="field-style field-split" type="text" name="studentName" required>
                </p>
                
                <div id="Date-Last-Updated"></div>
                
                <div class="wrapper">
                    <label style="padding-right:2px;">Major: </label>
                    <select class="field-style" id="studentMajor" name="major" onchange="showOtherMajorField(this.options[this.selectedIndex].value)" value="">
                        <option value="Chemistry" name="Chemistry">Chemistry</option>
                        <option value="Biochemistry" name="Biochemistry">Biochemistry</option>
                        <option value="OtherOption" name="OtherOption">Other</option>
                    </select>
                    <div id="Other-Text" style="padding-left:5px;"></div>
                
                    <label style="padding-left:38px;padding-right:2px;">Year: </label>
                    <select class="field-style" id="studentYear" name="year">
                    </select>
                    <script src="JS/SetStudentYearOption.js"></script>
                
                    <label style="padding-left:38px;padding-right:2px">Semester: </label>
                    <select class="field-style" id="studentSemester" name="semester" value="">
                        <option value="Fall" name="Fall">Fall</option>
                        <option value="Spring" name="Spring">Spring</option>
                        <option value="Summer" name="Summer">Summer</option>
                    </select>
                </div>
                
                <p style="padding-top:10px;">
                    <input class="field-full field-style" type="submit" name="submit" value="Update Biographical Information">
                </p>
            </form>      
        </div>
    <body>
<html>
<?php
    include "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Student-Data-Input.php";
?>