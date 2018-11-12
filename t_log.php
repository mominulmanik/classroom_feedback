<?php
session_start();
error_reporting(0);
?>
<html>
<body>

    <div class="maincontent clear">
      <div class="about">
    
<?php

$con=new mysqli("localhost","root","","feedback");
if(isset($_POST['Email'])){
$email=$_POST['Email'];
$pass=md5($_POST['password']);
 $_SESSION['id_no2']=$id;
  $_SESSION['password2']=$pass;
$sql="SELECT name 
      FROM teacher";
  $result = $con->query($sql);
  $num=$result->num_rows;
  

  if($num > 0){
    
  $sql1="Select * from teacher";
$result1=$con->query($sql1);
while($ro=$result1->fetch_assoc())
{
  
  $e=$ro['email'];
  $p=$ro['password'];

  if($_SESSION['id_no2']==$i&&$_SESSION['password2']==$p)
   
  	header('Location:teacher.php');
  else header ('Location:error.php');
  
}


}
  
}


?>


<h4><b><p>Teacher's Login:</p></b></h4>
<form action="t_log.php" method="POST">
<label for="name">Email</label>
<input type="text" name="Email">

<br>
<label for="password">Password</label>
<input type="password" name="password" Id="password" maxlength="16">

<br><input type ="submit" value="Login">

</form>

</div>
</div>
</body>
</html>