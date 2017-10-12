<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <title>COMPANY MC</title>
   <link rel="shortcut icon" type="image/x-icon" href="Media/favicon.ico" />
      <script type="text/javascript" src="jquery-3.1.1.js"></script>
   <script type="text/javascript" src="BootStrap/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="BootStrap/css/bootstrap.min.css">
   
   <link rel="stylesheet" type="text/css" href="Fonts/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="CSS/css.css">
   <link rel="stylesheet" type="text/css" href="CSS/css.css">

 </head>

 <body>
 	<div id="nav"> <br>
 		<div id="nav_wrapper"><br>
 			<table class="center">
 		<ul>
 			<li><a href ="index.php">Home</a></li>
 			<li><a href="about.php">About</a></li>
 			<li><a href="">FAQ</a></li>
 			<li><a href="contact.php">Contact</a></li>
 		 </ul>


 		 	</table>
 		 </div>




 		</ul>

 		<div class="container">


 			<img src="Media/logo.png">


 		 <form action="includes/login.inc.php" method="POST">
 		   <br>
 		   	<div class="form-input">
 		     <input type="email" name="email" placeholder="Email address:"> <br>
 		 
 		 </div>
 		  		 <div class="form-input">
 		 <input type="password" name="pwd" placeholder="Password:"> <br>

     <a href="forgot.php">Forgot your password?</a>
 		 
 		 </div>
 		 <br>

 		 <button type="submit" name ="submit" class="btn btn-sign">Sign in</button>
 		 <br> <br>
 		 Not a member?  <u><a href="join.php" >Join now! </a></u>
 		 </form> 
		
 		 


 		 

 		 </div>

 		 





 	</div>