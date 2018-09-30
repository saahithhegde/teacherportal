<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username1=$_POST['uname'];
$password1=$_POST['psw'];
$key1=$_POST['key1'];
if($key1==1234)
{
$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

$sql = "INSERT INTO users (username,password)
VALUES ('$username1','$password1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: signin.php');
} else {
	header('Location: signup.php');
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
				 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('wrong key')
    window.location.href='signup.php';
    </SCRIPT>");
}
$conn->close();

?>



?>