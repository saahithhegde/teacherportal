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
  <title>Techers Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
 
</script>
  <style>
       .animated { 
            background-image: url(/css/images/logo.png); 
            background-repeat: no-repeat;
            background-position: left top; 
            padding-top:95px;
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
    border: none;
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

<div  class="container" >
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
  <div class="card animated bounce" id="animated-example"">
  
  <h1>3rd semseter</h1>
  <a href="sem3.php"><p><button>students</button></p></a>
  <a href="sem3attendance.php"><p><button>attendence</button></p></a>
  <a href="sem3marks.php"><p><button>unit test</button></p></a>
</div>
</div>

    <div class="col-sm-4">
    <div class="card animated bounce" id="animated-example"">
  
  <h1>5th semseter</h1>
  <p><button>students</button></p>
  <p><button>attendence</button></p>
  <p><button>unit test</button></p>
</div>
</div>



    <div class="col-sm-4">
   <div class="card animated bounce" id="animated-example"">
  
  <h1>7th semseter</h1>
  <p><button>students</button></p>
  <p><button>attendence</button></p>
  <p><button>unit test</button></p>
</div>
</div>
</div>



</div>



</div>


</body>



</html>
