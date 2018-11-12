
<?php

$servername = "localhost";
  $username   = "root";
  $passward   = "";
  $dbname     = "feedback";
  $conn=new mysqli($servername,$username,$passward,$dbname);

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


<div class="contentsection contemplete clear">
    <div class="maincontent clear">
      <div class="about">

<h2><center>Teacher Registration Form</center></h2>
<hr><br>
<form action=registration.php method="POST">
<label for="name">Full Name</label>
<input type="text" name="name">

<br>
<br>
<label for="name">Name of the Department (e.g Department of ETE)</label>
<input type="text" name="dept">

<br>
<br>
<label for="name">Teacher's ID Number</label>
<input type="text" name="id">

<br>
<br>
<label for="name">Email</label>
<input type="text" name="email">

<br>
<br>
<label for="password">Password</label>
<input type="password" name="password">

<br>
<br>
<label for="password">Re-type Password</label>
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
      Coded By:Md.Jayed Bin Morshed &nbsp &nbsp A.K.M. Raihan&nbsp &nbspMd. Shakhawat Hossain</br>
      
      Supervised By:Md. Shafiul Alam &nbsp&nbspLecturer ,dept of CSE,CUET&nbsp&nbsp</br>Md. Sabir Hossain&nbsp&nbspLecturer ,dept of CSE,CUET 
    </ul>
   </div>
    
  </div>

</body>
</html>