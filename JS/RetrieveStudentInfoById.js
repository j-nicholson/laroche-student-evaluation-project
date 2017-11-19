
function retrieveStudentInfoById(id) {
    // URL to send a GET Request to Database query on the server
    var url = "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Student-Retrieval.php";
    if(id === "") {
        document.getElementById('studentName').innerHTML = '';
        return;
    }
    else {
        if(window.XMLHttpRequest) {
            // Create a new XMLHttpRequest object
            xmlhttp = new XMLHttpRequest();
        }
        else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            // Check to see if the readyState and status of the GET request is successful before returning the JSON response from the server
            // [this] refers to the newly created XMLHttpRequest object (xmlhttp)
            if(this.readyState == 4 && this.status == 200) {
                var studentJson = JSON.parse(this.responseText);

                // Grab the Student_Name from the Database
                document.getElementById('studentName').value = studentJson.Student_Name;

                // Grab the Student_Major from the Database and check if the Other Major Option text field should appear
                if(studentJson.Student_Major !== "Chemistry" && studentJson.Student_Major !== "Biochemistry"){
                    document.getElementById('studentMajor').value = "OtherOption";
                    document.getElementById('Other-Text').innerHTML = '<input id=Other class=field-style type=text placeholder=Other name=Other value=' + studentJson.Student_Major + ' required>';
                }
                else{
                    document.getElementById('studentMajor').value = studentJson.Student_Major;
                }

                // Grab the Student_Year from the Database
                document.getElementById('studentYear').value = studentJson.Student_Year;
                // Grab the Student_Semester from the Database
                document.getElementById('studentSemester').value = studentJson.Student_Semester;
                // Grab the Student_Date from the Database
                document.getElementById('Date-Last-Updated').innerHTML = '<p>Last Updated: ' + studentJson.Student_Date + '</p>';

                // Grab the Student_Photo from the Database and check to see if the image should be displayed or not
                let image = document.getElementById("Updated-Student-Profile-Image");
                let imgurl = studentJson.Student_Photo;
                if(imgurl === "") {
                    image.innerHTML = "";
                } else {
                    image.src = imgurl;
                    image.height ="200";
                    image.width ="200";
                }

                // Grab the Student_Math_Placement from the Database
                document.getElementById('mathPlacementResult').value = studentJson.Student_Math_Grade;

                // Grab the Student_Athletics from the Database
                if(studentJson.Student_Athletics === "no") {
                  document.getElementById('no').checked = true;
                }
                else {
                  document.getElementById('yes').checked = true;
                  document.getElementById('StudentAthleticsDisplay').innerHTML = 'If yes, your sport name: <input id="AthleticsDisplay" name="AthleticsDisplay" type="text" value="'+ studentJson.Student_Athletics +'">';
                }

                // Grab the Student_Housing_Status from Database
                if(studentJson.Student_Housing_Status === "resident") {
                  document.getElementById('resident').checked = true;
                }
                else {
                  document.getElementById('commuter').checked = true;
                }

                // Grab the Student_Honors from the Database
                if(studentJson.Student_Honors === "Yes") {
                  document.getElementById('honorYes').checked = true;
                }
                else {
                  document.getElementById('honorNo').checked = true;
                }

                // Grab the International_Student from the Database
                if (studentJson.International_Student === "No") {
                  document.getElementById('intStudent').value = "No";
                }
                else {
                  document.getElementById('intStudent').value = "Yes";
                  document.getElementById('otherInternationalText').innerHTML = 'If yes, your home country: <input id="OtherInternational" class="field-style" type="text" name="OtherInternational" value = "'+ studentJson.International_Student +'"required>';
                }

                // Grab the Student_ID from the Database
                document.getElementById('miscNotesStudentId').value = studentJson.Student_ID;

                // Grab the Misc_Text from the Database
                //document.getElementById('miscNotes').value = studentJson.Misc_Text;
            }
        };
        // Open the xmlhttp GET Request and pass the student ID along as a variable in the URL
        xmlhttp.open("GET", url + "?id=" + id, true);
        // Send the XMLHttpRequest to the server that manages the Database query
        xmlhttp.send();
    }
}
