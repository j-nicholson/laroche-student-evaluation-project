<?php
    include('Student.php');
    include('DataHandler.php');
    $stu = new Student();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Independent Learning Record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <script type="text/javascript">
        function showfield(name) {
            if(name == 'OtherOp')
                document.getElementById('other-text1').innerHTML='<input id="Other" class="field-style" type="text" placeholder="Other" name="Other" required>';
            else
                document.getElementById('other-text1').innerHTML='';
        }
    </script>
    <script type="text/javascript">
        function showStudent(id) {
            var url = "StudentDB.php";
            if(id == "") {
                document.getElementById('studentName_1').innerHTML = '';
                return;
            }
            else {
                if(window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                }
                else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        var json = JSON.parse(this.responseText);
                        
                        document.getElementById('studentName_1').value = json.Student_Name;
                        
                        if(json.Student_Major !== "Chemistry" && json.Student_Major !== "Biochemistry"){
                            document.getElementById('studentMajor').value = "OtherOp";
                            document.getElementById('other-text1').innerHTML = '<input id=Other class=field-style type=text placeholder=Other name=Other value=' + json.Student_Major + ' required>';
                        }
                        else{
                            document.getElementById('studentMajor').value = json.Student_Major;
                        }
                        
                        document.getElementById('studentYear').value = json.Student_Year;
                        document.getElementById('studentSemester').value = json.Student_Semester;
                        document.getElementById('lastUpdated').innerHTML = '<p>Last Updated: ' + json.Student_Date + '</p>';
                        //Errors with image retreival.
                        document.getElementById('prof-img').innerHTML = '<img src="data:image/jpeg;base64,'.base64_encode(json.Student_Photo).'"/>';
                    }
                };
                xmlhttp.open("GET", url + "?q=" + id, true);
                xmlhttp.send();
            }
        }
    </script>
    <script type="text/javascript">
        function displayImage(input) {
            if(input.files && input.files[0]) {
                var f_reader = new FileReader();
                
                f_reader.onload = function(e){
                    $('#profile-image')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };
                f_reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>
    
<body style="background-color: cornsilk;">
    <img src="larochelogo.png" alt="La Roche College Logo" style="display:block;margin:auto;width:40%;height:40%;">
    <h2><strong>Independent Learning Record</strong></h2>
    <div class="card-pad">
        <h5><strong>Biographical Information</strong></h5>
        <h6 id="curr_date"></h6>
        <script type="text/javascript">
            var date = new Date();
            document.getElementById('curr_date').innerHTML = '<strong>Date: </strong>' + date.toDateString();
        </script>
        <?php 
            $stu->set_student_date(date('Y-m-d H:i:s'));
        ?>
        
        <div class="w3-card w3-red container">
            <form name="inputForm" class="w3-container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" autocomplete="off" enctype="multipart/form-data">
                <p>
                    <img id="profile-image" src="#" alt="">
                </p>
                <div id="prof-img"></div>
                <p>
                    <label>Upload Image: </label>
                    <input type="file" id="picture"  name="image" accept="image/*" onchange="displayImage(this)" value="">
                </p>
                
                <p>
                    <label>ID: </label>
                    <input id="studentId_1" class="studentId field-style" type="text" name="studentId_1" onchange="showStudent(this.value)" required>
                    
                    <label id="nameLabel" style="padding-left:5px;">Name: </label>
                    <input id="studentName_1" class="field-style field-split" type="text" name="studentName_1" required>
                </p>
                
                <div id="lastUpdated"></div>
                
                <div class="wrapper">
                    <label style="padding-right:2px;">Major: </label>
                    <select class="field-style" id="studentMajor" name="major" onchange="showfield(this.options[this.selectedIndex].value)" value="">
                        <option value="Chemistry" name="Chemistry">Chemistry</option>
                        <option value="Biochemistry" name="Biochemistry">Biochemistry</option>
                        <option value="OtherOp" name="OtherOp">Other</option>
                    </select>
                    <div id="other-text1" style="padding-left:5px;"></div>
                
                   <label style="padding-left:38px;padding-right:2px;">Year: </label>
                    <select class="field-style" id="studentYear" name="year" value="">
                        <option value="Freshman" name="Freshman">Freshman</option>
                        <option value="Sophomore" name="Sophomore">Sophomore</option>
                        <option value="Junior" name="Junior">Junior</option>
                        <option value="Senior" name="Senior">Senior</option>
                    </select> 
                
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
    </div>
</body>
</html>
<?php
   if(isset($_POST['submit'])) {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            
            $sec_id = DataHandler::secure_input($_POST['studentId_1']);
            $stu->set_student_ID($sec_id);
            
            $sec_name = DataHandler::secure_input($_POST['studentName_1']);
            $stu->set_student_name($sec_name);
        
            if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                $sImage2 = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                //$sImage = addslashes(fread(fopen($_FILES['image']['tmp_name'], "r"), filesize($_FILES['image']['tmp_name'])));
                $stu->set_student_photo($sImage2);
            }
            
            switch($_POST['major']) {
                case $_POST['major'] == "Chemistry":
                    $stu->set_student_major("Chemistry");
                    break;
                case $_POST['major'] == "Biochemistry":
                    $stu->set_student_major("Biochemistry");
                    break;
                case $_POST['major'] == "OtherOp":
                    $sec_major = DataHandler::secure_input($_POST['Other']);
                    $stu->set_student_major($sec_major);
                    break;
                default:
                    break;
            }
            
            switch($_POST['year']) {
                case $_POST['year'] == "Freshman":
                    $stu->set_student_year("Freshman");
                    break;
                case $_POST['year'] == "Sophomore";
                    $stu->set_student_year("Sophomore");
                    break;
                case $_POST['year'] == "Junior";
                    $stu->set_student_year("Junior");
                    break;
                case $_POST['year'] == "Senior";
                    $stu->set_student_year("Senior");
                    break;
                default:
                    break;
            }
            
            switch($_POST['semester']) {
                case $_POST['semester'] == "Fall":
                    $stu->set_student_semester("Fall");
                    break;
                case $_POST['semester'] == "Spring":
                    $stu->set_student_semester("Spring");
                    break;
                case $_POST['semester'] == "Summer":
                    $stu->set_student_semester("Summer");
                    break;
                default:
                    break;
            }
            
            Datahandler::insert_student($stu->get_student_ID(), $stu->get_student_name(), $stu->get_student_major(), $stu->get_student_year(), $stu->get_student_semester(), $stu->get_student_photo(), $stu->get_student_date());
        }
    }
?>