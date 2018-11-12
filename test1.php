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

  if(!empty($_POST['name'])&&!empty($_POST['dept'])&&!empty($_POST['id'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&!empty('re-password'))
  {

      $name=$_POST['name'];
      $dept=$_POST['dept'];
      $id=$_POST['id'];
      $email=$_POST['email'];
      $pass=md5($_POST['password']);
      $re_pass=md5($_POST['re_password']);

      if($pass==$re_pass)
      {

      $sql="INSERT INTO `admin_teacher` (`name`, `department`, `id_no`, `email`, `password`) VALUES ('$name', '$dept', '$id', '$email', '$pass')";
      $a=$conn->query($sql);
      if($a)
        echo "Success";
      else echo "error";
  
    }
    else echo "not matched with password";
  }

?>


<h2><center>Teacher Registration Form</center></h2>
<hr><br>
<form action=test1.php method="POST">
Full Name<nr>
<input type="text" name="name">

<br>
<br>
Name of the Department 
<input type="text" name="dept">

<br>
<br>
Teacher's ID Number
<input type="text" name="id">

<br>
<br>
Email
<input type="text" name="email">

<br>
<br>
Password
<input type="password" name="password">

<br>
<br>
Re-type Password
<input type="password" name="re_password">

<br><input type ="submit" value="submit">
<br>
<br>
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
</html>