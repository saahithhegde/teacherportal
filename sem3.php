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
    <?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sem3";



$conn = mysqli_connect($host, $username, $password, $dbname);
?>
  <style>
  input[type=text]{
    width: auto;
    height: auto;
	text-align: left;
	
    display: inline-block;
    border: 1px solid #ccc;
    
}
  input1[type=text]{
    width: 50px;
    height: 20px;
    display: inline-block;
    border: 1px solid #ccc;
    
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
.cancelbtn {
    width: auto;
    padding: 10px 30px;
    background-color: #f44336;
}
  .form1
  {
	  margin: 0px;
	  padding :0px;
  }
  
  
  
  
  li.dropdown {
    display: inline-block;
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
.container1
{
  padding:10px;
  background-color: #555;
}

tr:nth-child(odd) {
    background-color: #b3b3b3;
  }
tr:nth-child(even) {
    background-color:#fff;
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
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
      background-color: #555;
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
  </style>
</head>
<body background="background.jpg">

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



<div class="container-fluid text-center">
  <a href="sem3marks.php"><button type="button" 
  style="background-color:green" class="cancelbtn">view marks</button></a>
  <a href="sem3attendance.php"><button type="button" 
    
  style="background-color:green" class="cancelbtn">view attendence</button></a>

   
 

</div>
<br>


<div class="container-fluid align-left">

     <div class="col-sm-8">
  
     <h1 style="color:white">STUDENTS LIST:</h1>

     <table class="fixed" id="table">
    

  
     <thead>
      <tr>
      <th>USN</th>
    <th>NAME</th>
    <th>PHONE NO</th>
	    <th>EMAIL</th>

      </tr>
      </thead>
     <tbody>
  
  
<?php

 $result = mysqli_query($conn, "SELECT * FROM students");
	 
     
 

 
 
 while ($row = mysqli_fetch_assoc($result))
 {
	 ?>
  <tr>
    
  <td><?php echo $row['usn'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['phone'];?></td> 
	<td><?php echo $row['email'];?></td>
	
	
  </tr>
  <?php
 }
 ?>
</tbody>

</table>    
<br>
<a href="sem3excel.php"> <button type="button" class="cancelbtn">generate excel</button></a>

</div>


  <div class="col-sm-3">
    <div class="conatiner">

      <div class="row main">
        <div class="main-login main-center">
        <h5 style="color:white">EDIT STUDENT DATA:</h5>
          <form class="container1" method="post" action="sem3data.php">
            
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Usn</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="usn1" id="usn11"  placeholder="Enter usn"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name1" id="a"  placeholder="Enter name"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Phone no</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="phone1" id="b"  placeholder="Enter phone no"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="email1" id="c"  placeholder="Enter email"/>
                </div>
              </div>
            </div>


            
  <button type="submit" name="get" value="1">insert</button> 
  <br>
  <br>

  <button type="submit" name="get" value="2">delete</button> 
  <br>
  <br>
  <button type="submit" name="get"  value="3">update</button> 
            
          </form>
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
    
      
  };
  
}


</script>






</body>
</html>
