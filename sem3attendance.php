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



<!DOCTYPE html>
<html lang="en">
<head>
  <title>ST Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="FileSaver.js"></script>
<script src="tableexport.js"></script>
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


<body background="background.jpg">




  <div class="container-fluid animated bounce" id="animated-example">
 
     
       
         <form class="container" id="needs-validation" novalidate method="POST" action="sem3dataattendance.php">
           <h3 style="color:white">EDIT ATTENDENCE:</h2>
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



<div id="test1" class="tabcontent animated bounce" id="animated-example">
   <?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sem3";
$conn = mysqli_connect($host, $username, $password, $dbname);
?>
<div class="container-fluid">
  
<h1 style="color:white">ATTENDANCE:</h1>

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

 $result = mysqli_query($conn, "SELECT * FROM attendance");
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
<a href="sem3attendanceexcel.php"> <button style="background-color:red"type="button" class="cancelbtn">generate excel</button></a>
</div>

</div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
</div>




<div id="test1" class="tabcontent">

<h1 style="color:white">ATTENDANCE < 75%:</h1>
<table class="fixed" id="mtable">
<thead >
  <tr>
  <th>USN</th>
    <th>MATH</th>
    <th>ADE</th>
  <th>DSA</th>
  <th>UNIX</th>
  <th>CO</th>
  <th>DMS</th>
  
  <th>ADLAB</th>
  <th>DSALAB</th>
  
  </tr>
  </thead>
  <tbody>
  
  
<?php

 $result2 = mysqli_query($conn, "SELECT * FROM attendance");
   
     
 

 
 
 while ($row1 = mysqli_fetch_assoc($result2))
 {
   if ($row1['sub1'] < 75)
   {
    $row11=$row1['sub1']; 
   }
   else
   {
    $row11=null;
   }
    if ($row1['sub2'] < 75)
   {
    $row22=$row1['sub2']; 
   }
   else
   {
    $row22=null;
   }
    if ($row1['sub3'] < 75)
   {
    $row33=$row1['sub3']; 
   }
   else
   {
    $row33=null;
   }
    if ($row1['sub4'] < 75)
   {
    $row44=$row1['sub4']; 
   }
   else
   {
    $row44=null;
   }
    if ($row1['sub5'] < 75)
   {
    $row55=$row1['sub5']; 
   }
   else
   {
    $row55=null;
   }
    if ($row1['sub6'] < 75)
   {
    $row66=$row1['sub6']; 
   }
   else
   {
    $row66=null;
   }
    if ($row1['sub7'] < 75)
   {
    $row77=$row1['sub7']; 
   }
   else
   {
    $row77=null;
   }
    if ($row1['sub8'] < 75)
   {
    $row88=$row1['sub8']; 
   }
   else
   {
    $row88=null;
   }
 
    
     
    
  
?>

 <tr>
    <td><?php echo $row1['usn'];?></td>
  <td><?php echo $row11;?></td>
  <td><?php echo $row22;?></td>
  <td><?php echo $row33;?></td>
  <td><?php echo $row44;?></td>
  <td><?php echo $row55;?></td>
   <td><?php echo $row66;?></td>
   <td><?php echo $row77;?></td>
   <td><?php echo $row88;?></td>
 
  
  </tr>
  <?php
 }
 ?>
</tbody>
</table>    


</div>
</div>
</div>
</div>




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