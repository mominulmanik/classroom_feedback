<?php 
//error_reporting(0);
session_start();
?>
<?php
if (isset($_SESSION['id_no'])&&isset($_SESSION['password']))
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
$lecture=$_POST['lecture'];
$table=$_POST['course']."_".$_POST['lecture'];

$sql="SELECT Serial_No 
      FROM $table";
  $result = $con->query($sql);
  $num=$result->num_rows;
  

  if($num > 0){
    echo $lecture;
    echo "</br>";
    echo $course;
    echo"</br></br>";

  
         

$sql1="Select * from $table";
$result1=$con->query($sql1);
while($ro=$result1->fetch_assoc())
{
  $s=$ro['Serial_No'];
$pu=$ro['punctuality'];
$te=$ro['Teaching_the_subject_matter'];
$de=$ro['Delivery_of_structured_lecture'];
$us=$ro['Uses_of_innovative_teaching_method'];
$re=$ro['Realising_strengths_developmental_needs'];
$u=$ro['understand'];
$c=$ro['comment'];
if($pu>=40&&$pu<=59)
      $p1="Low";
    if($pu>=60&&$pu<=69)
      $p1="Medium";
    if($pu>=70&&$pu<=79)
      $p1="Good";
    if($pu>=80&&$pu<=99)
      $p1="Better";
    if($pu==100)
      $p1="Best";

    if($de>=40&&$de<=59)
      $d1="Low";
    if($de>=60&&$de<=69)
      $d1="Medium";
    if($de>=70&&$de<=79)
      $d1="Good";
    if($de>=80&&$de<=99)
      $d1="Better";
    if($de==100)
      $d1="Best";

    if($te>=40&&$te<=59)
      $t1="Low";
    if($te>=60&&$te<=69)
      $t1="Medium";
    if($te>=70&&$te<=79)
      $t1="Good";
    if($te>=80&&$te<=99)
      $t1="Better";
    if($te==100)
      $t1="Best";

    if($us>=40&&$us<=59)
      $u1="Low";
    if($us>=60&&$us<=69)
      $u1="Medium";
    if($us>=70&&$us<=79)
      $u1="Good";
    if($us>=80&&$us<=99)
      $u1="Better";
    if($us==100)
      $u1="Best";

    if($re>=40&&$re<=59)
      $r1="Low";
    if($re>=60&&$re<=69)
      $r1="Medium";
    if($re>=70&&$re<=79)
      $r1="Good";
    if($re>=80&&$re<=99)
      $r1="Better";
    if($re==100)
      $r1="Best";

if($u>=40&&$u<=59)
      $u2="Low";
    if($u>=60&&$u<=69)
      $u2="Medium";
    if($u>=70&&$u<=79)
      $u2="Good";
    if($u>=80&&$u<=99)
      $u2="Better";
    if($u==100)
      $u2="Best";

    echo "Serial No:".$s."</br></br>";
    echo "Punctuality:"."$p1"."</br>";
    echo "Teaching the subject matter:"."$t1"."</br>";
echo "Delivery of structured lecture:"."$d1"."</br>";
echo "Uses of innovative teaching method:"."$u1"."</br>";
echo "Realising strengths and developmental needs:"."$r1"."</br>";
echo " Understanding the course materials :"."$u2"."</br>";
echo "Comment :".$c."</br></br></br>";

        
}


}
  echo "</table></center>";
       
}
?>
<form action="test.php" method="POST">
<p>
Lecture No  <input type="text" name="lecture" placeholder="lectureno">
</p>

<p>
Course No  <input type="text" name="course" placeholder="courseno">
</p>
<p>
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