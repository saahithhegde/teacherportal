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
   $usn1=$_POST['usn1'];
   $a=$_POST['name1'];
   $b=$_POST['phone1'];
   $c=$_POST['email1'];
$check1 =  $_POST['get'];
if($check1 == 1)
{

$sql = "INSERT INTO students (usn,name,phone,email)
VALUES ('$usn1','$a','$b','$c')";
if ($conn->query($sql) === TRUE) {
   	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('inserted new student')
    window.location.href='sem3.php';
    </SCRIPT>");
} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
elseif($check1 == 2)
{
	$sql ="DELETE FROM `students` WHERE usn= '$usn1'";
 
if ($conn->query($sql) === TRUE) {
   	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('deleted new student')
    window.location.href='sem3.php';
    </SCRIPT>");
	
} else {
	header('Location: sem3.php');
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
elseif($check1 == 3)
{


	$sql ="UPDATE `students` SET `name` = '$a', `phone` = '$b', `email` = '$c' WHERE `students`.`usn` = '$usn1'";
if ($conn->query($sql) === TRUE) {
       	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('updated student')
    window.location.href='sem3.php';
    </SCRIPT>");
	
} else {
	header('Location: sem3.php');
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

