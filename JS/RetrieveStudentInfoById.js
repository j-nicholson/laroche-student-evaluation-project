
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
                var nonstudentJson = this.responseText;
    
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
                
                // Grab the Student_Notes from the Database
                document.getElementById('notes').value = studentJson.Student_Notes;
            }
        };
        // Open the xmlhttp GET Request and pass the student ID along as a variable in the URL
        xmlhttp.open("GET", url + "?id=" + id, true);
        // Send the XMLHttpRequest to the server that manages the Database query
        xmlhttp.send();
    }
}