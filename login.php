
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
    
<?php  session_start(); error_reporting(0);?>

<?php include "t_log.php";?>

<?php include "s_log.php";?>

<?php

if(isset($_POST['Email']) &&isset($_POST['password']))
{
	$_SESSION['id_no1']=$_POST['Email'];
	$_SESSION['password1']=$_POST['password'];
	if($_SESSION['id_no1']=='headete@cuet.ac.bd'  && $_SESSION['password1']=='123')
	{
		
		header('Location:admin.php');
	}
	else header('Location:login.php');
}

?>

<form action="login.php" method="POST">
<h4><b><p>Admin Login:</p></b></h4>
<label for="name">Email</label>
<input type="text" name="Email">
</br>
<label for="password">Password</label>
<input type="password" name="password" Id="password" maxlength="16">
</br>
<br><input type ="submit" value="Login">
</form>

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
<html>