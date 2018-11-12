<?php session_start();
error_reporting(0);?>
<?php
if (!isset($_SESSION['id_no1'])&&!isset($_SESSION['password1']))
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
<body  style="background-color:white">

<div class="headersection templete clear">
    <a href="#">
      <div class="logo">
        <img src="CUET_logo_transparent.png" alt="Logo"/>
        <h2>Class Room Feedback System</h2>
        
      </div>
    </a>
    
  </div>

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

$servername = "localhost";
  $username   = "root";
  $passward   = "";
  $dbname     = "feedback";
  $con=new mysqli($servername,$username,$passward,$dbname);

  $sql="SELECT name 
      FROM admin_teacher";
  $result = $con->query($sql);
  $num=$result->num_rows;
  $b=1;

  if($num > 0){
$sql1="Select * from admin_teacher";
$result1=$con->query($sql1);
while($ro=$result1->fetch_assoc())
{
$name=$ro['name'];
$dept=$ro['department'];
$id=$ro['id_no'];
$pass=$ro['password'];
$email=$ro['email'];

if(isset($_POST['a'])&&$b==1)
{
$sq="INSERT INTO `teacher` (`name`, `department`, `id_no`, `email`, `password`) VALUES ('$name', '$dept', '$id', '$email', '$pass')";
      $a=$con->query($sq);
      if($a)
        echo "OK";
      else echo "error";

      $s="DELETE FROM `admin_teacher` WHERE `id_no`='$id'";
      $b=$con->query($s);
      

$b=0;
$_POST['a']=0;
}

?>

<html>
         <form action="a.php" method="POST">
         <p>
         <?php  echo $ro['name'] ."  teacher of department of ".$ro['department'] ?>
         </p>
         <p>

         <input type="submit" value="Approved" name="a" >
         </p>
         </form>
</html>

<?php

}
}
?>
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

  