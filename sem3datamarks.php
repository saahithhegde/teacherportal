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
$usn1=$_POST['uname'];
$suba=$_POST['su1'];
$subb=$_POST['su2'];
$subc=$_POST['su3'];
$subd=$_POST['su4'];
$sube=$_POST['su5'];
$subf=$_POST['su6'];
$subg=$_POST['su7'];
$subh=$_POST['su8'];
$sel=$_POST['select'];



$check1 =  $_POST['get'];

if($sel=="test1")
{

if($check1 == 1)
{

$sql = "INSERT INTO test1 (usn,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8)
VALUES ('$usn1','$suba','$subb','$subc','$subd','$sube','$subf','$subg','$subh')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks.php');
	
} else {
				 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
}
elseif($check1 == 2)
{
	$sql ="DELETE FROM `test1` WHERE usn='$usn1'";
	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks.php');
	
} else {

	
   			 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
}
elseif($check1 == 3)
	
{
	$sql="UPDATE test1 SET sub1 = $suba, sub2 = $subb, sub3 = $subc, sub4 = $subd, sub5 = $sube, sub6 = $subf, sub7 = $subg, sub8 = $subh  WHERE usn ='$usn1'";
	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks.php');
	
} else {
	
   			 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
	

}

}
 
 elseif($sel=="test2")
 {
 	if($check1 == 1)
{

$sql = "INSERT INTO test2 (usn,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8)
VALUES ('$usn1','$suba','$subb','$subc','$subd','$sube','$subf','$subg','$subh')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks.php');
	
} else {
	
   			 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
}
elseif($check1 == 2)
{
	$sql ="DELETE FROM `test2` WHERE usn='$usn1'";
	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks.php');
	
} else {

	
   			 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
}
elseif($check1 == 3)
	
{
	$sql="UPDATE test2 SET sub1 = $suba, sub2 = $subb, sub3 = $subc, sub4 = $subd, sub5 = $sube, sub6 = $subf, sub7 = $subg, sub8 = $subh  WHERE usn ='$usn1'";
	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks.php');
	
} else {
	
   			 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
	

}
 	
 }





  elseif($sel=="test3")
 {
 	if($check1 == 1)
{

$sql = "INSERT INTO test3 (usn,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8)
VALUES ('$usn1','$suba','$subb','$subc','$subd','$sube','$subf','$subg','$subh')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks.php');
	
} else {
	
   			 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
}
elseif($check1 == 2)
{
	$sql ="DELETE FROM `test3` WHERE usn='$usn1'";
	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks.php');
	
} else {

	
   			 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
}
elseif($check1 == 3)
	
{
	$sql="UPDATE test3 SET sub1 = $suba, sub2 = $subb, sub3 = $subc, sub4 = $subd, sub5 = $sube, sub6 = $subf, sub7 = $subg, sub8 = $subh  WHERE usn ='$usn1'";

	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3marks');
	
} else {
	
   			 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('student not present')
    window.location.href='sem3marks.php';
    </SCRIPT>");
}
	

}
 	
 }


?>
