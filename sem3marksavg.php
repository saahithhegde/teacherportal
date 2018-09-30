<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sem3";
$conn = mysqli_connect($host, $username, $password, $dbname);



$result1 = mysqli_query($conn, "SELECT * FROM test1");
$result2 = mysqli_query($conn, "SELECT * FROM test2");
$result3 = mysqli_query($conn, "SELECT * FROM test3");



$test1 =Array();
$test2 =Array();
$test3 =Array();


while($row1 = mysqli_fetch_array($result1))
{
	$test1[]= $row1['usn'];
	$test1[]= $row1['sub1'];
	$test1[]= $row1['sub2'];
	$test1[]= $row1['sub3'];
	$test1[]= $row1['sub4'];
	$test1[]= $row1['sub5'];
	$test1[]= $row1['sub6'];
	$test1[]= $row1['sub7'];
	$test1[]= $row1['sub8'];
}



while($row2 = mysqli_fetch_array($result2))
{
	$test2[]= $row2['usn'];
	$test2[]= $row2['sub1'];
	$test2[]= $row2['sub2'];
	$test2[]= $row2['sub3'];
	$test2[]= $row2['sub4'];
	$test2[]= $row2['sub5'];
	$test2[]= $row2['sub6'];
	$test2[]= $row2['sub7'];
	$test2[]= $row2['sub8'];
	
}

while($row3 = mysqli_fetch_array($result3))
{
	$test3[]= $row3['usn'];
	$test3[]= $row3['sub1'];
	$test3[]= $row3['sub2'];
	$test3[]= $row3['sub3'];
	$test3[]= $row3['sub4'];
	$test3[]= $row3['sub5'];
	$test3[]= $row3['sub6'];
	$test3[]= $row3['sub7'];
	$test3[]= $row3['sub8'];
}




$avg1 = Array();
$avg2 = Array();
$avg3 = Array();
/*--------------------------------------------------------*/
$avg4 = Array();
$avg5 = Array();
$avg6 = Array();
/*--------------------------------------------------------*/





for($i=0;$i<(sizeof($test1));$i+=9)
{

    $avg1[$i]=$test1[$i];

    $sql1="INSERT INTO avg1 (usn) VALUES('$avg1[$i]')";
    mysqli_query($conn,$sql1);


	     if($test1[$i+1] <= $test2[$i+1] && $test1[$i+1] <= $test3[$i+1] )
	{
		
		$avg1[$i+1]=($test2[$i+1] + $test3[$i+1])/2;
		$t=$i+1;
		$sql="UPDATE avg1 SET sub1 = $avg1[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }



   if($test2[$i+1] <= $test1[$i+1] && $test2[$i+1] <= $test3[$i+1] )
	{
		
		$avg2[$i+1]=($test1[$i+1] + $test3[$i+1])/2;
		$t=$i+1;
		$sql="UPDATE avg1 SET sub1 = $avg2[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

  


       if($test3[$i+1] <= $test1[$i+1] && $test3[$i+1] <= $test2[$i+1] )
	{
		
		$avg3[$i+1]=($test1[$i+1] + $test2[$i+1])/2;
		$t=$i+1;
		$sql="UPDATE avg1 SET sub1 = $avg3[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }


/*--------------------------------------------------------*/



      	     if($test1[$i+2] <= $test2[$i+2] && $test1[$i+2] <= $test3[$i+1] )
	{
		
		$avg1[$i+2]=($test2[$i+2] + $test3[$i+2])/2;
		$t=$i+2;
		$sql="UPDATE avg1 SET sub2 = $avg1[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }



   if($test2[$i+2] <= $test1[$i+2] && $test2[$i+2] <= $test3[$i+2] )
	{
		
		$avg2[$i+2]=($test1[$i+2] + $test3[$i+2])/2;
		$t=$i+2;
		$sql="UPDATE avg1 SET sub2 = $avg2[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

  


       if($test3[$i+2] <= $test1[$i+2] && $test3[$i+2] <= $test2[$i+2] )
	{
		
		$avg3[$i+2]=($test1[$i+2] + $test2[$i+2])/2;
		$t=$i+2;
		$sql="UPDATE avg1 SET sub2 = $avg3[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }






      /*--------------------------------------------------------*/



      	     if($test1[$i+3] <= $test2[$i+3] && $test1[$i+3] <= $test3[$i+1] )
	{
		
		$avg1[$i+3]=($test2[$i+3] + $test3[$i+3])/2;
		$t=$i+3;
		$sql="UPDATE avg1 SET sub3 = $avg1[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }



   if($test2[$i+3] <= $test1[$i+3] && $test2[$i+3] <= $test3[$i+3] )
	{
		
		$avg2[$i+3]=($test1[$i+3] + $test3[$i+3])/2;
		$t=$i+3;
		$sql="UPDATE avg1 SET sub3 = $avg2[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

  


       if($test3[$i+3] <= $test1[$i+3] && $test3[$i+3] <= $test2[$i+3] )
	{
		
		$avg3[$i+3]=($test1[$i+3] + $test2[$i+3])/2;
		$t=$i+3;
		$sql="UPDATE avg1 SET sub3 = $avg3[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }


/*--------------------------------------------------------*/



      	     if($test1[$i+4] <= $test2[$i+4] && $test1[$i+4] <= $test3[$i+1] )
	{
		
		$avg1[$i+4]=($test2[$i+4] + $test3[$i+4])/2;
		$t=$i+4;
		$sql="UPDATE avg1 SET sub4 = $avg1[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }



   if($test2[$i+4] <= $test1[$i+4] && $test2[$i+4] <= $test3[$i+4] )
	{
		
		$avg2[$i+4]=($test1[$i+4] + $test3[$i+4])/2;
		$t=$i+4;
		$sql="UPDATE avg1 SET sub4 = $avg2[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

  


       if($test3[$i+4] <= $test1[$i+4] && $test3[$i+4] <= $test2[$i+4] )
	{
		
		$avg3[$i+4]=($test1[$i+4] + $test2[$i+4])/2;
		$t=$i+4;
		$sql="UPDATE avg1 SET sub4 = $avg3[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }






/*--------------------------------------------------------*/



      	     if($test1[$i+5] <= $test2[$i+5] && $test1[$i+5] <= $test3[$i+1] )
	{
		
		$avg1[$i+5]=($test2[$i+5] + $test3[$i+5])/2;
		$t=$i+5;
		$sql="UPDATE avg1 SET sub5 = $avg1[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }



   if($test2[$i+5] <= $test1[$i+5] && $test2[$i+5] <= $test3[$i+5] )
	{
		
		$avg2[$i+5]=($test1[$i+5] + $test3[$i+5])/2;
		$t=$i+5;
		$sql="UPDATE avg1 SET sub5 = $avg2[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

  


       if($test3[$i+5] <= $test1[$i+5] && $test3[$i+5] <= $test2[$i+5] )
	{
		
		$avg3[$i+5]=($test1[$i+5] + $test2[$i+5])/2;
		$t=$i+5;
		$sql="UPDATE avg1 SET sub5 = $avg3[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }







      /*--------------------------------------------------------*/



      	     if($test1[$i+6] <= $test2[$i+6] && $test1[$i+6] <= $test3[$i+1] )
	{
		
		$avg1[$i+6]=($test2[$i+6] + $test3[$i+6])/2;
		$t=$i+6;
		$sql="UPDATE avg1 SET sub6 = $avg1[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }



   if($test2[$i+6] <= $test1[$i+6] && $test2[$i+6] <= $test3[$i+6] )
	{
		
		$avg2[$i+6]=($test1[$i+6] + $test3[$i+6])/2;
		$t=$i+6;
		$sql="UPDATE avg1 SET sub6 = $avg2[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

  


       if($test3[$i+6] <= $test1[$i+6] && $test3[$i+6] <= $test2[$i+6] )
	{
		
		$avg3[$i+6]=($test1[$i+6] + $test2[$i+6])/2;
		$t=$i+6;
		$sql="UPDATE avg1 SET sub6 = $avg3[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }



/*--------------------------------------------------------*/



      	     if($test1[$i+7] <= $test2[$i+7] && $test1[$i+7] <= $test3[$i+1] )
	{
		
		$avg1[$i+7]=($test2[$i+7] + $test3[$i+7])/2;
		$t=$i+7;
		$sql="UPDATE avg1 SET sub7 = $avg1[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }



   if($test2[$i+7] <= $test1[$i+7] && $test2[$i+7] <= $test3[$i+7] )
	{
		
		$avg2[$i+7]=($test1[$i+7] + $test3[$i+7])/2;
		$t=$i+7;
		$sql="UPDATE avg1 SET sub7 = $avg2[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

  


       if($test3[$i+7] <= $test1[$i+7] && $test3[$i+7] <= $test2[$i+7] )
	{
		
		$avg3[$i+7]=($test1[$i+7] + $test2[$i+7])/2;
		$t=$i+7;
		$sql="UPDATE avg1 SET sub7 = $avg3[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

 /*--------------------------------------------------------*/



      	     if($test1[$i+8] <= $test2[$i+8] && $test1[$i+8] <= $test3[$i+1] )
	{
		
		$avg1[$i+8]=($test2[$i+8] + $test3[$i+8])/2;
		$t=$i+8;
		$sql="UPDATE avg1 SET sub8 = $avg1[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }

   if($test2[$i+8] <= $test1[$i+8] && $test2[$i+8] <= $test3[$i+8] )
	{
		
		$avg2[$i+8]=($test1[$i+8] + $test3[$i+8])/2;
		$t=$i+8;
		$sql="UPDATE avg1 SET sub8 = $avg2[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }
       if($test3[$i+8] <= $test1[$i+8] && $test3[$i+8] <= $test2[$i+8] )
	{
		
		$avg3[$i+8]=($test1[$i+8] + $test2[$i+8])/2;
		$t=$i+8;
		$sql="UPDATE avg1 SET sub8 = $avg3[$t]  WHERE usn ='$avg1[$i]'";
		mysqli_query($conn,$sql);
      }
}
header('Location: sem3marks.php');
?>