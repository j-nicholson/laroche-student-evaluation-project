
function showStudent(id) {
    var url = "StudentDB.php";
    if(id === "") {
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
                var studentJson = JSON.parse(this.responseText);
                var nonstudentJson = this.responseText;
              //  console.log("This is not studentJson parsed: " + nonstudentJson);


                document.getElementById('studentName_1').value = studentJson.Student_Name;

                if(studentJson.Student_Major !== "Chemistry" && studentJson.Student_Major !== "Biochemistry"){
                    document.getElementById('studentMajor').value = "OtherOp";
                    document.getElementById('other-text1').innerHTML = '<input id=Other class=field-style type=text placeholder=Other name=Other value=' + studentJson.Student_Major + ' required>';
                }
                else{
                    document.getElementById('studentMajor').value = studentJson.Student_Major;
                }
              //student year is null on html page when it ets to this line
                document.getElementById('studentYear').value = studentJson.Student_Year;
                document.getElementById('studentSemester').value = studentJson.Student_Semester;
                document.getElementById('lastUpdated').innerHTML = '<p>Last Updated: ' + studentJson.Student_Date + '</p>';


                // Debug output for JSON image from student
                console.log("This IS studentJson stuphoto parsed: " + studentJson.Student_Photo);


                //Errors with image retreival.
                let image = document.getElementById("prof-img");
                let imgurl = studentJson.Student_Photo;
                //let prefix = "data:image/jpeg;base64,";
               // let concat = p studentJson.Student_Photo;
                image.src = imgurl;
                image.height ="200";
                image.width ="200";


               // document.getElementById('prof-img').innerHTML = '<img src="data:image/jpeg;base64,' + studentJson.Student_Photo + '" height="200" width="200" >';

            }
        };
        xmlhttp.open("GET", url + "?q=" + id, true);
        xmlhttp.send();
    }
}
