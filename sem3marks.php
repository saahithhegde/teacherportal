<?php
session_start();
 if(!isset($_SESSION['user']))
 {
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('please sign in')
    window.location.href='signin.php';
    </SCRIPT>");
 }

?>





  



<html lang="en">
<head>
  <title>ST Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="RGraph.svg.common.core.js"></script>
<script src="RGraph.svg.semicircularprogress.js"></script>
  <style>
       .animated { 
            background-image: url(/css/images/logo.png); 
            background-repeat: no-repeat;
            background-position: left top; 
            
            margin-bottom:60px;
            -webkit-animation-duration: 1s;
            animation-duration: 1.5s; 
            -webkit-animation-fill-mode: both; 
            animation-fill-mode: both; 
         }
         
         @-webkit-keyframes bounce { 
            0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);} 
            40% {-webkit-transform: translateY(-30px);} 
            60% {-webkit-transform: translateY(-15px);} 
         } 
         
         @keyframes bounce { 
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);} 
            40% {transform: translateY(-30px);} 
            60% {transform: translateY(-15px);} 
         }
         
         .bounce { 
            -webkit-animation-name: bounce; 
            animation-name: bounce; 
         }

  li.dropdown {
    display: inline-block;

}

h1
{
  color:green;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.card {
    box-shadow: 0 4px 30px 0 rgba(0, 0, 0, 1);
    max-width: 300px;
    margin: auto;
    text-align: center;
}




button {
    border: 2px solid#000;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

button:hover{
    opacity: 0.7;
}


  



    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #222;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
    
    }
    .container{
    background-color: #555;
  

  }

  table {
    table-layout: variable;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;

}

td, th {
    border: 1px solid #000;
    text-align: left;
  padding: 1px;
  width: 2px;
  wordwrap: break-word;
  
}

tr:nth-child(odd) {
    background-color: #b3b3b3;
  }
tr:nth-child(even) {
    background-color:#fff;
}
.navbar-toggle
{
      margin-right: 0px; 
}

  </style>

</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Teachers Portal</a>
    
    <p class="navbar-brand"><?php

  echo $_SESSION['user'];
   ?></p>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

 
      <li><a href="sem3.php">3rd semester</a></li>
      <li><a href="sem5.php">5th semester</a></li>
     <li> <a href="sem7.php">7th semester</a></li>
        <li><a href="#">Announcemnets</a></li>
        
        
      </ul>
    </div>
  </div>
</div>
</nav>
<br>
<br>

<body background="background.jpg">

 





<div class="container-fluid animated bounce" id="animated-example">
 
     
        
         <form class="container" id="needs-validation" novalidate method="POST" action="sem3datamarks.php">
          <h2 style="color:white">EDIT TEST MARKS:</h2>
  <div class="row">
    <div class="col-md-4 mb-3">
      <label >USN</label>
      <input type="text" class="form-control" id="usn11" placeholder="enter usn" name="uname" required>
    </div>
    <div class="col-md-4 mb-3">
      <label >MATHS</label>
      <input type="text" class="form-control" id="a" placeholder="enter marks" name="su1"  >
    </div>
   <div class="col-md-4 mb-3">
      <label >ADE</label>
      <input type="text" class="form-control" id="b" placeholder="enter marks" name="su2"  >
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-3">
      <label >DSA</label>
      <input type="text" class="form-control" id="c" placeholder="enter marks" name="su3" >
    </div>
    <div class="col-md-4 mb-3">
      <label >CO</label>
      <input type="text" class="form-control" id="d" placeholder="enter marks" name="su4"  >
    </div>
   <div class="col-md-4 mb-3">
      <label >UNIX</label>
      <input type="text" class="form-control" id="e" placeholder="enter marks" name="su5"  >
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-3">
      <label >DMS</label>
      <input type="text" class="form-control" id="f" placeholder="enter marks" name="su6" >
    </div>
    <div class="col-md-4 mb-3">
      <label >ADE LAB</label>
      <input type="text" class="form-control" id="g" placeholder="enter marks" name="su7"  >
    </div>
   <div class="col-md-4 mb-3">
      <label >DSA LAB</label>
      <input type="text" class="form-control" id="h" placeholder="enter marks" name="su8"  >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 mb-3">

    <select class="custom-select d-block my-3 form-control" name="select" id="select" required>
    
    <option value="test1"  >test 1</option>
    <option value="test2" id="q" >test 2</option>
    <option value="test3" >test 3</option>
  </select>
</div>
</div>
  <div class="col-md-3 mb-3 align-center">      
  <button type="submit" name="get" value="1">insert</button> 

  <br>
  <br>

      
  <button type="submit" name="get" value="2">delete</button> 

  <br>
  <br>
       
  <button type="submit" name="get"  value="3">update</button> 
</div>



            
          </form>
        </div>
      </div>
    </div>
</div>

</div>
<br>


 <div class="container-fluid animated bounce" id="animated-example">


    <div class="tab">
    <div class="col-sm-2">
  <button class="tablinks" onclick="opentab(event, 'test1')" id="defaultOpen" style="background-color:green">test1</button>
</div>
<div class="col-sm-2">
  <button class="tablinks" onclick="opentab(event, 'test2')" style="background-color:green">test2</button>
</div>
  <div class="col-sm-2">
  <button class="tablinks" onclick="opentab(event, 'test3')" style="background-color:green">test3</button>
</div>
  <div class="col-sm-2">
  <button class="tablinks" onclick="opentab(event, 'avg')" style="background-color:green">average</button>
  </div>
  <div class="col-sm-2">
  <button class="tablinks" onclick="opentab(event, 'report')" style="background-color:green">get report</button>
</div>
</div>
</div>
</div>
</div>






<div id="test1" class="tabcontent animated bounce" id="animated-example">
   <?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sem3";
$conn = mysqli_connect($host, $username, $password, $dbname);
?>
<div class="container-fluid">
  
<h1 style="color:white">UNIT TEST 1:</h1>

<table class="fixed" id="table">
  <div class="cols-sm-2">
<thead>
  <tr>
  <th>USN</th>
    <th>MATHS</th>
    <th>ADE</th>
  <th>DSA</th>
  <th>CO</th>
  <th>UNIX</th>
  <th>DMS</th>
  <th>ADE LAB</th>
  <th>DSA LAB</th>
  </tr>
  </thead>
  <tbody> 
<?php

 $result = mysqli_query($conn, "SELECT * FROM test1");
 while ($row = mysqli_fetch_assoc($result))
 {
   ?>
  <tr>
    
  <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub1'];?></td>
  <td><?php echo $row['sub2'];?></td>
  <td><?php echo $row['sub3'];?></td>
  <td><?php echo $row['sub4'];?></td>
  <td><?php echo $row['sub5'];?></td>
  <td><?php echo $row['sub6'];?></td>
  <td><?php echo $row['sub7'];?></td>
  <td><?php echo $row['sub8'];?></td>
  </tr>
  <?php
 }
 ?>
</tbody>

</table>    
<br>
<div class="col-md-3 mb-3">
<a href="sem3test1excel.php"> <button style="background-color:red"type="button" class="cancelbtn">generate excel</button></a>
</div>

</div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
</div>






<div id="test2" class="tabcontent animated bounce" id="animated-example">
  <div id="t2"
   <?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sem3";
$conn = mysqli_connect($host, $username, $password, $dbname);
?>
<div class="container-fluid">
 

<h1 style="color:white">UNIT TEST 2:</h1>


<table class="fixed" id="table1">
  <div class="cols-sm-2">
<thead>
  <tr>
  <th>USN</th>
    <th>MATHS</th>
    <th>ADE</th>
  <th>DSA</th>
  <th>CO</th>
  <th>UNIX</th>
  <th>DMS</th>
  <th>ADE LAB</th>
  <th>DSA LAB</th>
  </tr>
  </thead>
  <tbody> 
<?php

 $result = mysqli_query($conn, "SELECT * FROM test2");
 while ($row = mysqli_fetch_assoc($result))
 {
   ?>
  <tr>
    
  <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub1'];?></td>
  <td><?php echo $row['sub2'];?></td>
  <td><?php echo $row['sub3'];?></td>
  <td><?php echo $row['sub4'];?></td>
  <td><?php echo $row['sub5'];?></td>
  <td><?php echo $row['sub6'];?></td>
  <td><?php echo $row['sub7'];?></td>
  <td><?php echo $row['sub8'];?></td>
  </tr>
  <?php
 }
 ?>
</tbody>

</table>   
<br>
<div class="col-md-3 mb-3">
<a href="sem3test2excel.php"> <button style="background-color:red"type="button" class="cancelbtn">generate excel</button></a>
</div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
 
</div>

</div>




<div id="test3" class="tabcontent animated bounce" id="animated-example"">
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sem3";
$conn = mysqli_connect($host, $username, $password, $dbname);
?>
<div class="container-fluid">
  
  

  
<h1 style="color:white">UNIT TEST 3:</h1>

<table class="fixed" id="table2">
  <div class="cols-sm-2">


<thead>
  <tr>
  <th>USN</th>
    <th>MATHS</th>
    <th>ADE</th>
  <th>DSA</th>
  <th>CO</th>
  <th>UNIX</th>
  <th>DMS</th>
  <th>ADE LAB</th>
  <th>DSA LAB</th>


  </tr>
  </thead>
  <tbody>
  
  
<?php

 $result = mysqli_query($conn, "SELECT * FROM test3");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result))
 {
   ?>
  <tr>
    
  <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub1'];?></td>
  <td><?php echo $row['sub2'];?></td>
  <td><?php echo $row['sub3'];?></td>
  <td><?php echo $row['sub4'];?></td>
  <td><?php echo $row['sub5'];?></td>
  <td><?php echo $row['sub6'];?></td>
  <td><?php echo $row['sub7'];?></td>
  <td><?php echo $row['sub8'];?></td>

  
  
  </tr>
  <?php
 }
 ?>
</tbody>

</table>    
<br>
<div class="col-md-3 mb-3">
<a href="sem3test3excel.php"> <button style="background-color:red"type="button" class="cancelbtn">generate excel</button>  
 <a href="sem3marksavg.php"> <button style="background-color:red"type="button" class="cancelbtn">generate average</button>
</a>
</div>
</div>
</div>
</div>
</div>
 </div>
 </div>
 </div>
</div>
</div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
</div>





<div id="avg" class="tabcontent animated bounce" id="animated-example">
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sem3";
$conn = mysqli_connect($host, $username, $password, $dbname);
?>
<div class="container-fluid">
  
  

  
<h1 style="color:white">AVERAGE:</h1>

<table class="fixed">
  <div class="cols-sm-2">


<thead>
  <tr>
  <th>USN</th>
    <th>MATHS</th>
    <th>ADE</th>
  <th>DSA</th>
  <th>CO</th>
  <th>UNIX</th>
  <th>DMS</th>
  <th>ADE LAB</th>
  <th>DSA LAB</th>


  </tr>
  </thead>
  <tbody>
  
  
<?php

 $result = mysqli_query($conn, "SELECT * FROM avg1");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result))
 {
   ?>
  <tr>
    
  <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub1'];?></td>
  <td><?php echo $row['sub2'];?></td>
  <td><?php echo $row['sub3'];?></td>
  <td><?php echo $row['sub4'];?></td>
  <td><?php echo $row['sub5'];?></td>
  <td><?php echo $row['sub6'];?></td>
  <td><?php echo $row['sub7'];?></td>
  <td><?php echo $row['sub8'];?></td>

  
  
  </tr>
  <?php
 }
 ?>
</tbody>

</table>    
<br>
<div class="col-md-3 mb-3">
<a href="sem3avgexcel.php"> <button style="background-color:red"type="button" class="cancelbtn">generate excel</button>
</a>
</div>
</div>
</div>
</div>
</div>




 
   

  
 </div>
 </div>
 </div>
</div>
</div>





  



     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
 
</div>




<div id="report" class="tabcontent animated bounce" id="animated-example">
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

?>

 <div class="container">
<div class="container-fluids">
   <div class="row">
    <div class="col-sm-4">
    STUDENTS LESS THAN 20 IN MATHS:
    <BR>
<BR>
<table>
<thead>
  <tr>
  <th>USN</th>
    <th>MATHS</th>

  </tr>
  </thead>
   <tbody>
       
       <?php

 $result11 = mysqli_query($conn, "SELECT usn,sub1 FROM avg1 WHERE sub1 < 20");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result11))
 {
   ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub1'];?></td>
</tr>
  
  <?php
      }
      ?>
</tbody>
</table>
</div>


    <div class="col-sm-4">
STUDENTS LESS THAN 20 IN ADE:
<BR>
<BR>
<table>
<thead>
  <tr>
  <th>USN</th>
    <th>ADE</th>

  </tr>
  </thead>
   <tbody>
       
       <?php

 $result11 = mysqli_query($conn, "SELECT usn,sub2 FROM avg1 WHERE sub2 < 20");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result11))
 {
   ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub2'];?></td>
</tr>
  
  <?php
      }
      ?>
</tbody>
</table>
</div>




 <div class="col-sm-4">
STUDENTS LESS THAN 20 IN DSA:
<BR>
<BR>
<table>
<thead>
  <tr>
  <th>USN</th>
    <th>DSA</th>

  </tr>
  </thead>
   <tbody>
       
       <?php

 $result11 = mysqli_query($conn, "SELECT usn,sub3 FROM avg1 WHERE sub3 < 20");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result11))
 {
   ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub3'];?></td>
</tr>
  
  <?php
      }
      ?>
</tbody>
</table>
</div>








</div>
<BR>
<BR>
<BR>


<div class="row">
    <div class="col-sm-4">
    STUDENTS LESS THAN 20 IN CO:
    <BR>
<BR>
<table>
<thead>
  <tr>
  <th>USN</th>
    <th>CO</th>

  </tr>
  </thead>
   <tbody>
       
       <?php

 $result11 = mysqli_query($conn, "SELECT usn,sub4 FROM avg1 WHERE sub4 < 20");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result11))
 {
   ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub4'];?></td>
</tr>
  
  <?php
      }
      ?>
</tbody>
</table>
</div>

    <div class="col-sm-4">
    STUDENTS LESS THAN 20 IN UNIX:
    <BR>
<BR>
<table>
<thead>
  <tr>
  <th>USN</th>
    <th>UNIX</th>

  </tr>
  </thead>
   <tbody>
       
       <?php

 $result11 = mysqli_query($conn, "SELECT usn,sub5 FROM avg1 WHERE sub5 < 20");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result11))
 {
   ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub5'];?></td>
</tr>
  
  <?php
      }
      ?>
</tbody>
</table>
</div>

    <div class="col-sm-4">
    STUDENTS LESS THAN 20 IN DMS:
    <BR>
<BR>
<table>
<thead>
  <tr>
  <th>USN</th>
    <th>DMS</th>

  </tr>
  </thead>
   <tbody>
       
       <?php

 $result11 = mysqli_query($conn, "SELECT usn,sub6 FROM avg1 WHERE sub6 < 20");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result11))
 {
   ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub6'];?></td>
</tr>
  
  <?php
      }
      ?>
</tbody>
</table>
</div>
</div>

<BR>
<BR>
<BR>

<div class="row">
    <div class="col-sm-4">
    STUDENTS LESS THAN 20 IN ADELAB:
    <BR>
<BR>
<table>
<thead>
  <tr>
  <th>USN</th>
    <th>ADELAB</th>

  </tr>
  </thead>
   <tbody>
       
       <?php

 $result11 = mysqli_query($conn, "SELECT usn,sub4 FROM avg1 WHERE sub7 < 20");
   
     
 

 
 
 while ($row = mysqli_fetch_assoc($result11))
 {
   ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub4'];?></td>
</tr>
  
  <?php
      }
      ?>
</tbody>
</table>
</div>

    <div class="col-sm-4">
    STUDENTS LESS THAN 20 IN DBLAB:
    <BR>
<BR>
<table>
<thead>
  <tr>
  <th>USN</th>
    <th>DBLAB</th>

  </tr>
  </thead>
   <tbody>
       
       <?php

 $result11 = mysqli_query($conn, "SELECT usn,sub5 FROM avg1 WHERE sub8 < 20");
   
 
 while ($row = mysqli_fetch_assoc($result11))
 {
   ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
  <td><?php echo $row['sub5'];?></td>
</tr>
  
  <?php
      }
      ?>
</tbody>
</table>
</div>
</div>
<BR>
<BR>

<div class="container-fluids">
   <div class="row">
    <div class="col-sm-6">
    <?php
   $av1 = mysqli_query($conn, "SELECT AVG(sub1) FROM avg1");
     while ($ro1 = mysqli_fetch_assoc($av1))
    {
?>
<div style="width: 450px; height: 250px" id="chart-container"></div>
</div>
<script>
var x= "<?php echo $ro1['AVG(sub1)'] ?>";
    scp = new RGraph.SVG.SemiCircularProgress({
        id: 'chart-container',
        min: 0,
        max: 100,
        value: x,
        options: {
            title: 'AVERAGE MARKS OF MATH',
            colors: ['red'],
            backgroundColor: 'rgba(0,255,0,0.25)',
            labelsCenterDecimals: 1,
            labelsCenterUnitsPost: '%'
        }
    }).grow();
    </script>
<?php

}
?>


<div class="col-sm-6">
<?php
    $av2 = mysqli_query($conn, "SELECT AVG(sub2) FROM avg1");
    while($ro2 = mysqli_fetch_assoc($av2))  
    {
    ?>
<div style="width: 450px; height: 250px" id="chart-container1"></div>
</div>
<script>

    var y= "<?php echo $ro2['AVG(sub2)'] ?>";
    scp = new RGraph.SVG.SemiCircularProgress({
        id: 'chart-container1',
        min: 0,
        max: 100,
        value: y,
        options: {
            title: 'AVERAGE MARKS OF ADE',
            colors: ['red'],
            backgroundColor: 'rgba(0,255,0,0.25)',
            labelsCenterDecimals: 1,
            labelsCenterUnitsPost: '%'
        }
    }).grow();

</script>

<?php

}
?>
</div>

<div class="row">
<div class="col-sm-6">
<?php
    $av3 = mysqli_query($conn, "SELECT AVG(sub3) FROM avg1");
    while($ro3 = mysqli_fetch_assoc($av3))  
    {
    ?>
<div style="width: 450px; height: 250px" id="chart-container2"></div>
</div>
<script>

    var y= "<?php echo $ro3['AVG(sub3)'] ?>";
    scp = new RGraph.SVG.SemiCircularProgress({
        id: 'chart-container2',
        min: 0,
        max: 100,
        value: y,
        options: {
            title: 'AVERAGE MARKS OF DSA',
            colors: ['red'],
            backgroundColor: 'rgba(0,255,0,0.25)',
            labelsCenterDecimals: 1,
            labelsCenterUnitsPost: '%'
        }
    }).grow();

</script>

<?php

}
?>

<div class="col-sm-6">
<?php
    $av4 = mysqli_query($conn, "SELECT AVG(sub4) FROM avg1");
    while($ro4 = mysqli_fetch_assoc($av4))  
    {
    ?>
<div style="width: 450px; height: 250px" id="chart-container3"></div>
</div>
<script>

    var y= "<?php echo $ro4['AVG(sub4)'] ?>";
    scp = new RGraph.SVG.SemiCircularProgress({
        id: 'chart-container3',
        min: 0,
        max: 100,
        value: y,
        options: {
            title: 'AVERAGE MARKS OF CO',
            colors: ['red'],
            backgroundColor: 'rgba(0,255,0,0.25)',
            labelsCenterDecimals: 1,
            labelsCenterUnitsPost: '%'
        }
    }).grow();

</script>

<?php

}
?>
</div>




<div class="row">
<div class="col-sm-6">
<?php
    $av5 = mysqli_query($conn, "SELECT AVG(sub5) FROM avg1");
    while($ro5 = mysqli_fetch_assoc($av5))  
    {
    ?>
<div style="width: 450px; height: 250px" id="chart-container4"></div>
</div>
<script>

    var y= "<?php echo $ro5['AVG(sub5)'] ?>";
    scp = new RGraph.SVG.SemiCircularProgress({
        id: 'chart-container4',
        min: 0,
        max: 100,
        value: y,
        options: {
            title: 'AVERAGE MARKS OF UNIX',
            colors: ['red'],
            backgroundColor: 'rgba(0,255,0,0.25)',
            labelsCenterDecimals: 1,
            labelsCenterUnitsPost: '%'
        }
    }).grow();

</script>

<?php

}
?>

<div class="col-sm-6">
<?php
    $av6 = mysqli_query($conn, "SELECT AVG(sub6) FROM avg1");
    while($ro6 = mysqli_fetch_assoc($av6))  
    {
    ?>
<div style="width: 450px; height: 250px" id="chart-container5"></div>
</div>
<script>

    var y= "<?php echo $ro6['AVG(sub6)'] ?>";
    scp = new RGraph.SVG.SemiCircularProgress({
        id: 'chart-container5',
        min: 0,
        max: 100,
        value: y,
        options: {
            title: 'AVERAGE MARKS OF DMS',
            colors: ['red'],
            backgroundColor: 'rgba(0,255,0,0.25)',
            labelsCenterDecimals: 1,
            labelsCenterUnitsPost: '%'
        }
    }).grow();

</script>

<?php

}
?>
</div>



<div class="row">
<div class="col-sm-6">
<?php
    $av7 = mysqli_query($conn, "SELECT AVG(sub7) FROM avg1");
    while($ro7 = mysqli_fetch_assoc($av7))  
    {
    ?>
<div style="width: 450px; height: 250px" id="chart-container6"></div>
</div>
<script>

    var y= "<?php echo $ro7['AVG(sub7)'] ?>";
    scp = new RGraph.SVG.SemiCircularProgress({
        id: 'chart-container6',
        min: 0,
        max: 100,
        value: y,
        options: {
            title: 'AVERAGE MARKS OF ADELAB',
            colors: ['red'],
            backgroundColor: 'rgba(0,255,0,0.25)',
            labelsCenterDecimals: 1,
            labelsCenterUnitsPost: '%'
        }
    }).grow();

</script>

<?php

}
?>

<div class="col-sm-6">
<?php
    $av8 = mysqli_query($conn, "SELECT AVG(sub8) FROM avg1");
    while($ro8 = mysqli_fetch_assoc($av8))  
    {
    ?>
<div style="width: 450px; height: 250px" id="chart-container7"></div>
</div>
<script>

    var y= "<?php echo $ro8['AVG(sub8)'] ?>";
    scp = new RGraph.SVG.SemiCircularProgress({
        id: 'chart-container7',
        min: 0,
        max: 100,
        value: y,
        options: {
            title: 'AVERAGE MARKS OF DSALAB',
            colors: ['red'],
            backgroundColor: 'rgba(0,255,0,0.25)',
            labelsCenterDecimals: 1,
            labelsCenterUnitsPost: '%'
        }
    }).grow();

</script>

<?php

}
?>
</div>


</div>

</div>

</div>










<script>
function opentab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script>


var table = document.getElementById('table'),rIndex;


for(var i = 0;i<table.rows.length;i++)
{
  table.rows[i].onclick = function()
  {
  
    rIndex = this.rowIndex;
    
    document.getElementById("usn11").value = this.cells[0].innerHTML;
    document.getElementById("a").value = this.cells[1].innerHTML;
    document.getElementById("b").value = this.cells[2].innerHTML;
    document.getElementById("c").value = this.cells[3].innerHTML;
    document.getElementById("d").value = this.cells[4].innerHTML;
    document.getElementById("e").value = this.cells[5].innerHTML;
    document.getElementById("f").value = this.cells[6].innerHTML;
    document.getElementById("g").value = this.cells[7].innerHTML;
    document.getElementById("h").value = this.cells[8].innerHTML;
    
      
  };
  
}


</script>
<script>


var table = document.getElementById('table1'),rIndex;


for(var i = 0;i<table.rows.length;i++)
{
  table.rows[i].onclick = function()
  {
  
    rIndex = this.rowIndex;
    
    document.getElementById("usn11").value = this.cells[0].innerHTML;
    document.getElementById("a").value = this.cells[1].innerHTML;
    document.getElementById("b").value = this.cells[2].innerHTML;
    document.getElementById("c").value = this.cells[3].innerHTML;
    document.getElementById("d").value = this.cells[4].innerHTML;
    document.getElementById("e").value = this.cells[5].innerHTML;
    document.getElementById("f").value = this.cells[6].innerHTML;
    document.getElementById("g").value = this.cells[7].innerHTML;
    document.getElementById("h").value = this.cells[8].innerHTML;
    
    
    
      
  };
  
}


</script>
<script>


var table = document.getElementById('table2'),rIndex;


for(var i = 0;i<table.rows.length;i++)
{
  table.rows[i].onclick = function()
  {
  
    rIndex = this.rowIndex;
    
    document.getElementById("usn11").value = this.cells[0].innerHTML;
    document.getElementById("a").value = this.cells[1].innerHTML;
    document.getElementById("b").value = this.cells[2].innerHTML;
    document.getElementById("c").value = this.cells[3].innerHTML;
    document.getElementById("d").value = this.cells[4].innerHTML;
    document.getElementById("e").value = this.cells[5].innerHTML;
    document.getElementById("f").value = this.cells[6].innerHTML;
    document.getElementById("g").value = this.cells[7].innerHTML;
    document.getElementById("h").value = this.cells[8].innerHTML;
    
      
  };
  
}


</script>




     
</body>
</html> 
