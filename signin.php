<!DOCTYPE html>
<html>
<?php
session_start();
session_destroy();


?>
 <title>ST Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>




input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #009933;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.container1 {
    padding: 16px;
}


.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 50px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body background="Slide1.jpg">




 <div class="container-fluid text-center">    
 
  <div class="row content">

   <div class="col-sm-3 text-left">
   <h1 style="color:white">Login</h1>
   
   
<form  method="POST" action="signinp.php">



    <label style="color:white"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label style="color:white"> <b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
   

  <div class="text-center">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a> 
	<a href="signup.php"><button type="button" class="cancelbtn">signup</button></a>
	</form>
	
 
 </div>
 <div>
</div>



</div>


</body>
</html>