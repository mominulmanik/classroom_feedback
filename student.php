<?php 
error_reporting(0);
session_start();?>
<?php
if (!isset($_SESSION['id_no'])&&!isset($_SESSION['password']))
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
    <li><a href="index.html">Home</a></li>
    <li><a href="About.php">About</a></li>  
    
  </ul>
</div>
<div class="contentsection contemplete clear">
    <div class="maincontent clear">
      <div class="about">


<?php

$servername = "localhost";
  $username   = "root";
  $passward   = "";
  $dbname     = "feedback";
  $conn=new mysqli($servername,$username,$passward,$dbname);

  if(isset($_POST['feedback1'])){
if($_POST['feedback1']=='l')
  $f1=40;
if($_POST['feedback1']=='m')
  $f1=60;
if($_POST['feedback1']=='g')
  $f1=70;
if($_POST['feedback1']=='b')
  $f1=80;
if($_POST['feedback1']=='bt')
  $f1=100;

if($_POST['feedback2']=='l')
  $f2=40;
if($_POST['feedback2']=='m')
  $f2=60;
if($_POST['feedback2']=='g')
  $f2=70;
if($_POST['feedback2']=='b')
  $f2=80;
if($_POST['feedback2']=='bt')
  $f2=100;

if($_POST['feedback3']=='l')
  $f3=40;
if($_POST['feedback3']=='m')
  $f3=60;
if($_POST['feedback3']=='g')
  $f3=70;
if($_POST['feedback3']=='b')
  $f3=80;
if($_POST['feedback3']=='bt')
  $f3=100;

if($_POST['feedback4']=='l')
  $f4=40;
if($_POST['feedback4']=='m')
  $f4=60;
if($_POST['feedback4']=='g')
  $f4=70;
if($_POST['feedback4']=='b')
  $f4=80;
if($_POST['feedback4']=='bt')
  $f4=100;

if($_POST['feedback5']=='l')
  $f5=40;
if($_POST['feedback5']=='m')
  $f5=60;
if($_POST['feedback5']=='g')
  $f5=70;
if($_POST['feedback5']=='b')
  $f5=80;
if($_POST['feedback5']=='bt')
  $f5=100;

if($_POST['feedback6']=='l')
  $f6=40;
if($_POST['feedback6']=='m')
  $f6=60;
if($_POST['feedback6']=='g')
  $f6=70;
if($_POST['feedback6']=='b')
  $f6=80;
if($_POST['feedback6']=='bt')
  $f6=100;

$c=$_POST['comment'];
$course=$_POST['course'];
$lecture=$_POST['lecture'];
$table=$_POST['course']."_".$_POST['lecture'];

  $sql="INSERT INTO `$table`( `comment`, `punctuality`, `Teaching_the_subject_matter`, `Delivery_of_structured_lecture`, `Uses_of_innovative_teaching_method`, `Realising_strengths_developmental_needs`,`understand`) VALUES ('$c',$f1,$f2,$f3,$f4,$f5,$f6)";
  
$result=$conn->query($sql);
if($result)
  echo "success";

$sql="SELECT Serial_No 
      FROM $table";
  $result = $conn->query($sql);
  $num=$result->num_rows;
  

  if($num > 0){
    
    

  
          $p=0;
          $t=0;
          $d=0;
          $u=0;
          $r=0;
          $un=0;

$sql1="Select * from $table";
$result1=$conn->query($sql1);
while($ro=$result1->fetch_assoc())
{
 $p=$p+$ro['punctuality'];
         $t=$t+$ro['Teaching_the_subject_matter'];
         $d=$d+$ro['Delivery_of_structured_lecture'];
         $u=$u+$ro['Uses_of_innovative_teaching_method'];
         $r=$r+$ro['Realising_strengths_developmental_needs'];
         $un=$un+$ro['understand'];
  
}

}

$p=$p/$num;
        $t=$t/$num;
        $d=$d/$num;
        $u=$u/$num;
        $r=$r/$num;
        $un=$un/$num;
          $sql3="UPDATE `$course` SET `Punctuality`=$p,`Teaching_the_subject_matter`=$t,`Delivery_of_structured_lecture`=$d,`Uses_of_innovative_teaching_method`=$u,`Realising_strengths_and_developmental_needs`=$r,`understand`=$un WHERE `Lecture_No`='$lecture'";
          $z=$conn->query($sql3);
          

}
?>


<form action="student.php" method="POST">
<p>
Lecture No  <input type="text" name="lecture" placeholder="lectureno">
</p>

<p>
Course No  <input type="text" name="course" placeholder="courseno">
</p>

<p>
#Punctuality
<select name="feedback1">
  <option value="#">select</option>
  <option value="l">Low </option>
  <option value="m">Medium</option>
  <option value="g">Good</option>
  <option value="b">Better</option>
  <option value="bt">Best</option>
</select>
</p>

<p>
#Teaching the subject matter
<select name="feedback2">
  <option value="#">select</option>
  <option value="l">Low </option>
  <option value="m">Medium</option>
  <option value="g">Good</option>
  <option value="b">Better</option>
  <option value="bt">Best</option>
</select>
</p>

<p>
#Delivery of structured lecture
<select name="feedback3">
  <option value="#">select</option>
  <option value="l">Low </option>
  <option value="m">Medium</option>
  <option value="g">Good</option>
  <option value="b">Better</option>
  <option value="bt">Best</option>
</select>
</p>

<p>
#Uses of innovative teaching method
<select name="feedback4">
  <option value="#">select</option>
  <option value="l">Low </option>
  <option value="m">Medium</option>
  <option value="g">Good</option>
  <option value="b">Better</option>
  <option value="bt">Best</option>
</select>
</p>

<p>
#Realising strengths and developmental needs
<select name="feedback5">
  <option value="#">select</option>
  <option value="l">Low </option>
  <option value="m">Medium</option>
  <option value="g">Good</option>
  <option value="b">Better</option>
  <option value="bt">Best</option>
</select>
</p>


<p>
#Understanding the course materials
<select name="feedback6">
  <option value="#">select</option>
  <option value="l">Low </option>
  <option value="m">Medium</option>
  <option value="g">Good</option>
  <option value="b">Better</option>
  <option value="bt">Best</option>
</select>
</p>


<p>
Comment  <input type="text" name="comment" placeholder="Comment">
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