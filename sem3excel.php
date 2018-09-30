<?php  
  
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sem3";
        // Create connection
        $conn = new mysqli($host, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            
        }
  
$setSql = "SELECT * FROM students";  
$setRec = mysqli_query($conn, $setSql);  


  
$columnHeader = '';  
$columnHeader = "usn" . "\t" . "name" . "\t" . "phone no" . "\t". "usn";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  