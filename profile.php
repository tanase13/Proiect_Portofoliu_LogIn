<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
 <title>Welcome</title>
   <link rel="shortcut icon" type="image/x-icon" href="Media/favicon.ico" />
      <script type="text/javascript" src="jquery-3.1.1.js"></script>
   <script type="text/javascript" src="BootStrap/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="BootStrap/css/bootstrap.min.css">
   
 <link rel="stylesheet" href="Fonts\Font_Awesome\fonts\FontAwesome.otf"> 
   <link rel="stylesheet" type="text/css" href="CSS/css.css">
      <link rel="stylesheet" type="text/css" href="CSS/css_profile.css">
      	   <link rel="stylesheet" type="text/css" href="Fonts\Font_Awesome\css\font-awesome.css">


 </head>

 <body>
 	<div class="background"></div>
 		<div id="nav"> <br>
 		<div id="nav_wrapper"><br>
 			<table class="center">
 		<ul>
 			<li><a href ="index.php">Home</a></li>
 			<li><a href="about.php">About</a></li>
 			<li><a href="">FAQ</a></li>

 		 </ul>
 		 	</table>
 		 </div>
<div class="col-md-2">
<div class='containerp'> 	
	<div class="row profile">
<!--		<div class="col-md-4"> -->
			<div class="profil-sidebar">
				<div class="profile-user-pic">
					<img src="Media/profile.jpg" alt="" class="img-responsive img-circle">
				</div>
				<div class="profile-user-title">
					<div class="profile-user-name">
						Mihalcea Catalin
					</div>
					<div class="profile-user-job">
						Developer
					</div>
				</div>
				<div class="profile-user-buttons">
					<button class="btn btn-success btn-sm">Intrested</button>
					<button class="btn btn-danger btn-sm">Message</button>
				</div>
				<div class="profile-user-menu">

					<ul class="nav">
						<li class="active"><a href-""><i class="glyphicon glyphicon-home"></i>  Overview</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-user"></i>  Account Status</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"></i>  Tasks</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-flag"></i>  Help</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-calendar"></i>  Verify Calendar</a></li>

						<?php
						if(isset($_SESSION['u_email'])){

							echo '<form action="includes/logout.inc.php" method="POST">
							
							<button type="submit" name="submit">Logout</button>	
						</form>';

						

						} else {

							echo ' <form action="includes/join.php" method="POST">';

						}


						?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



	<div class="containerp2">
		<div class="inside_container">
				<div class="inside_logo"><img src="Media/logo.png"></div>
			<div class="col-md-2">
				<a href="#">
				<div class="inside">
					<br><br><i class="fa fa-file-o fa-5x" aria-hidden="true"></i>
					<font color="gray"><br><br>  Add a new<br> project</font>
				</div></a>
			</div>



	<div class="col-md-2">
		<a href="#">
		<div class="inside2">
			<br><br><i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
<br><br> <font color="gray"> Open your current <br> project</font>
		</div></a>
	</div>



		
	<div class="col-md-2">
		<a href="#">
		<div class="inside3">
			<br><br><i class="fa fa-envelope-open-o fa-5x" aria-hidden="true"></i>
<br><br> <font color="gray"> Check your <br> messages</font>

		</div></a>
	</div>

		<div class="col-md-4">
			<div class="inside4">
				
				<h3><font color="gray">Project list</font></h3> <hr> <br>
					Project nr. 1 <hr> <br>
					Project nr. 2 <hr> <br>
					Project nr. 3 <hr> <br></div>

			</div>
		
		</div>

	</div>


	<!--	<div class="col-md-9">
			<p>""On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
		</div>-->
	</div>
</div>



 </body>

  <footer>
 	


 	<div class="footer">

 <!-- <div class="f1"><font color="white"><b>ADRESS</b> <br> <br> Oxford Street, Nr 16, <br> (+40)730 336 796, <br> Bucharest, Romania.</font></div>  -->

  <div class="f2"><font color="white"><br><b>LINKS</b>  <br> <font color="#1abc9c"><a href=""> COMPANY MC </a></font> <br> 
        <font color="#1abc9c"><a href=""> Other info </a></font> <br> 
          <font color="#1abc9c"><a href=""> contact@company.mc </a></font></font></div>

  <div class="f3"><font color="white">&copy; 2017 All right reserved</font></div>

  </div>
 </footer>


 </body>





 </html>