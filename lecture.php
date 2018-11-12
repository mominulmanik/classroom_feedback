<?php 
error_reporting(0);
session_start();?>
<?php
if (!isset($_SESSION['id_no2'])&&!isset($_SESSION['password2']))
{
  header('Location: login.php');
  exit();
}
 ?>
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


<?php

$con=new mysqli("localhost","root","","feedback");
if(isset($_POST['lecture'])&&isset($_POST['course'])){
$lecture=$_POST['lecture'];
$course=$_POST['course'];
$l=$course."_".$lecture;
$sql = "CREATE TABLE $l(Serial_No INT NOT NULL PRIMARY KEY AUTO_INCREMENT,comment TEXT NOT NULL,punctuality INT NOT NULL,Teaching_the_subject_matter INT NOT NULL,Delivery_of_structured_lecture INT NOT NULL,Uses_of_innovative_teaching_method INT NOT NULL,Realising_strengths_developmental_needs INT NOT NULL,understand INT NOT NULL)";

 $a=$con->query($sql);

$sql2="INSERT INTO `$course`(`Lecture_No`) VALUES ('$lecture')";
	$b=$con->query($sql2);

if($a&&$b)
	echo "success";




}
//else echo mysql_error();
?>

<form action="lecture.php" method="POST">
<p>
Course NO  <input type="text" name="course" placeholder="Course No">
</p>
<p>
Lecture NO  <input type="text" name="lecture" placeholder="Lecture No">
</p>
<p>
<input type="submit" value="Lecture Assign">
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