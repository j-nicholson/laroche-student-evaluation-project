var previousStudent;
var ranAlready;
function retrieveStudentNotesById(id) {
  if(id !== previousStudent) {
    previousStudent = id;
    ranAlready = false;
    console.log("Got into previousStudent");
    var notesTable = document.getElementById('excelDataTable');
    while(notesTable.firstChild){
      notesTable.removeChild(notesTable.firstChild);
    }
  }
  if(!ranAlready){
    ranAlready = true;
    var url = "Controller/Independent-Learning-Record-Controllers/Independent-Learning-Record-Student-Notes-Retrieval.php";
    if(id === "") {
      document.getElementById('miscNotes').innerHTML = "";
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
        if(this.readyState == 4 && this.status == 200) {
          var studentJson = JSON.parse(this.responseText);

          // Create Column Headers for the HTML table
          var columnSet = [];
          var headerTr$ = $('<tr/>');

          for (var i = 0; i < studentJson.length; i++) {
            var rowHash = studentJson[i];
            for (var key in rowHash) {
              if ($.inArray(key, columnSet) == -1) {
                columnSet.push(key);
                headerTr$.append($('<th/>').html(key));
              }
            }
            //console.log(studentJson[i]);
          }
          $("#excelDataTable").append(headerTr$);

          // Append table rows based on returned Student Note JSON Data
          var columns = columnSet;

          for (var i = 0; i < studentJson.length; i++) {
            var row$ = $('<tr/>');
            for (var colIndex = 0; colIndex < columns.length; colIndex++) {
              var cellValue = studentJson[i][columns[colIndex]];
              if (cellValue == null) cellValue = "";
              row$.append($('<td/>').html(cellValue));
            }
            $("#excelDataTable").append(row$);
          }
        }//end else
      }
    };
    xmlhttp.open("GET", url + "?id=" + id, true);
    xmlhttp.send();
  }
}
