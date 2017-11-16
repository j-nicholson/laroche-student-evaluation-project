<html lang="en">
         

    <head>

      <meta charset="UTF-8">

    </head>


    
    <body>

         <table border="2" style= "background-color: brown; color: white; margin: 0 auto;" >
             
          <thead>

                  <th>Note Title</th>
                  <th>Note Text</th>
                  <th>Note Date</th>
                  <th>Author ID</th>
                  <th>Student ID</th>
                  
                  

                </tr>
          </thead>    
      <tbody>
          


<?php
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbName = "Cap_Dev_Run";

    $connection = mysqli_connect($server, $user, $password, $dbName);

    if(!$connection) {
        die("Connection error: " . mysqli_error($connection));
    }
          

    //include("connection.php");

    $query = "SELECT * FROM `Misc_Notes`";

    if ($result = mysqli_query($connection, $query)) {

        while($row = mysqli_fetch_array($result)){


            echo
            "<tr>
            
                  <td>{$row['Misc_Title']}</td>
                  <td>{$row['Misc_Text']}</td>
                  <td>{$row['Misc_Date']}</td>
                  <td>{$row['Misc_Author_ID']}</td>
                  <td>{$row['Misc_Sudent_ID']}</td>
                  
                  

            </tr>\n";
        }
    }
          

?>
          
             </tbody>
        </table>
    </body>
</html>