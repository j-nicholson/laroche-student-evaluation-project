
function retrieveStudentInfoById(id) {
    var url = "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Student-Retrieval.php";
    if(id === "") {
        document.getElementById('studentName').innerHTML = '';
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
                var studentJson = JSON.parse(this.responseText);
                var nonstudentJson = this.responseText;
    
                document.getElementById('studentName').value = studentJson.Student_Name;

                if(studentJson.Student_Major !== "Chemistry" && studentJson.Student_Major !== "Biochemistry"){
                    document.getElementById('studentMajor').value = "OtherOption";
                    document.getElementById('Other-Text').innerHTML = '<input id=Other class=field-style type=text placeholder=Other name=Other value=' + studentJson.Student_Major + ' required>';
                }
                else{
                    document.getElementById('studentMajor').value = studentJson.Student_Major;
                }
                
                //student year is null on html page when it ets to this line
                document.getElementById('studentYear').value = studentJson.Student_Year;
                document.getElementById('studentSemester').value = studentJson.Student_Semester;
                document.getElementById('Date-Last-Updated').innerHTML = '<p>Last Updated: ' + studentJson.Student_Date + '</p>';

                let image = document.getElementById("Updated-Student-Profile-Image");
                let imgurl = studentJson.Student_Photo;
                image.src = imgurl;
                image.height ="200";
                image.width ="200";
            }
        };
        xmlhttp.open("GET", url + "?id=" + id, true);
        xmlhttp.send();
    }
}