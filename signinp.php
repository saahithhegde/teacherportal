<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
session_start();

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username1=$_POST['uname'];
$password1=$_POST['psw'];
$_SESSION['user']=$username1;

$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if( $row["username"]== $username1 && $row["password"]== $password1)
			{
			header('Location: home.php');
			break;
		    }
			else
			{
				 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('wrong username and password')
    window.location.href='signin.php';
    </SCRIPT>");
				
				
			}
			
		
 }
} 
else {
    echo "0 results";
}

$conn->close();

?>