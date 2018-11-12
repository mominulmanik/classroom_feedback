<?php 
error_reporting(0);
session_start();
?>
<?php
if (!isset($_SESSION['id_no1'])&&!isset($_SESSION['password1']))
{
  header('Location: login.php');
  exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
</head>
<div class="headersection templete clear">
		<a href="#">
			<div class="logo">
				<img src="CUET_logo_transparent.png" alt="Logo"/>
				<h2>Class Room Feedback System </h2>
				
			</div>
		</a>
		
	</div>

<body>
<div class="navsection templete">
  <ul>
    <li><a  href="index.html">Home</a></li>
    <li><a href="About.php">About</a></li>  
    
  </ul>
</div>

<div class="contentsection contemplete clear">
    <div class="maincontent clear">
      <div class="about">
    
<form action="test.php" method="POST">
<p>
<input type="submit" value="Student's Feedback ">
</p>
</form>
<form action="overall.php" method="POST">
<p>
<input type="submit" value="Over All of the course">
</p>
</form>
<form action="a.php" method="POST">
<p>
<input type="submit" value="Approve teacher">
</p>
</form>
<form action="admin_student.php" method="POST">
<p>
<input type="submit" value="Approve student">
</p>
</form>
<h3><a  href="logout.php">Logout</a></h3>
</div>
</div>
</div>
<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			Coded By:Md.Jayed Bin Murshed &nbsp &nbsp A.K.M. Raihan&nbsp &nbspMd. Shakhawat Hossain</br>
			
			Supervised By:Md. Shafiul Alam &nbsp&nbspLecturer ,dept of CSE,CUET&nbsp&nbsp</br>Md. Sabir Hossain&nbsp&nbspLecturer ,dept of CSE,CUET 
		</ul>
	  </div>
	  
	</div>
</body>
</html>