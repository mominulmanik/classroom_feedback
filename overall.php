<?php 
error_reporting(0);
session_start();
?>
<?php
if ((!isset($_SESSION['id_no1'])&&!isset($_SESSION['password1']))||(!isset($_SESSION['id_no2'])&&!isset($_SESSION['password2'])))
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
if(isset($_POST['course'])){
$course=$_POST['course'];

$sql="SELECT Lecture_No 
      FROM $course";
  $result = $con->query($sql);
  $num=$result->num_rows;
  

  if($num > 0){
    echo $course."</br>";
  
          $p=0;
          $t=0;
          $d=0;
          $u=0;
          $r=0;
          $un=0;

$sql1="Select * from $course";
$result1=$con->query($sql1);
if($result1)
while($ro=$result1->fetch_assoc())
{
  
         $p=$p+$ro['Punctuality'];
         $t=$t+$ro['Teaching_the_subject_matter'];
         $d=$d+$ro['Delivery_of_structured_lecture'];
         $u=$u+$ro['Uses_of_innovative_teaching_method'];
         $r=$r+$ro['Realising_strengths_and_developmental_needs'];
         $un=$un+$ro['understand'];
          

  
}

		$p=$p/$num;
        $t=$t/$num;
        $d=$d/$num;
        $u=$u/$num;
        $r=$r/$num;
        $un=$un/$num;

    if($p>=40&&$p<60)
      $p1="Low";
    if($p>=60&&$p<70)
      $p1="Medium";
    if($p>=70&&$p<80)
      $p1="Good";
    if($p>=80&&$p<100)
      $p1="Better";
    if($p==100)
      $p1="Best";

    if($d>=40&&$d<60)
      $d1="Low";
    if($d>=60&&$d<70)
      $d1="Medium";
    if($d>=70&&$d<80)
      $d1="Good";
    if($d>=80&&$d<100)
      $d1="Better";
    if($d==100)
      $d1="Best";

    if($t>=40&&$t<60)
      $t1="Low";
    if($t>=60&&$t<70)
      $t1="Medium";
    if($t>=70&&$t<80)
      $t1="Good";
    if($t>=80&&$t<100)
      $t1="Better";
    if($t==100)
      $t1="Best";

    if($u>=40&&$u<60)
      $u1="Low";
    if($u>=60&&$u<70)
      $u1="Medium";
    if($u>=70&&$u<80)
      $u1="Good";
    if($u>=80&&$u<100)
      $u1="Better";
    if($u==100)
      $u1="Best";

    if($r>=40&&$r<60)
      $r1="Low";
    if($r>=60&&$r<70)
      $r1="Medium";
    if($r>=70&&$r<80)
      $r1="Good";
    if($r>=80&&$r<100)
      $r1="Better";
    if($r==100)
      $r1="Best";

    if($un>=40&&$un<60)
      $u2="Low";
    if($un>=60&&$un<70)
      $u2="Medium";
    if($un>=70&&$un<80)
      $u2="Good";
    if($un>=80&&$un<100)
      $u2="Better";
    if($un==100)
      $u2="Best";

    echo "Punctuality:".$p1."</br>";
    echo "Teaching the subject matter:".$t1."</br>";
echo "Delivery of structured lecture:".$d1."</br>";
echo "Uses of innovative teaching method:".$u1."</br>";
echo "Realising strengths and developmental needs:".$r1."</br>";
echo " Understanding the course materials: ".$u2."</br></br></br>";
    
		 
}
 
       
          

}
?>

<form action="overall.php" method="POST">
<p>
Course NO  <input type="text" name="course" placeholder="Course No">
</p>
<input type="submit" value="Submit">
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