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
if(isset($_POST['id'])){
$id=$_POST['id'];
$pass=md5($_POST['password']);
  $_SESSION['id_no']=$id;
  $_SESSION['password']=$pass;
$sql="SELECT name 
      FROM student";
  $result = $con->query($sql);
  $num=$result->num_rows;
 

//echo $_SESSION['id_no'];

  if($num > 0){
    
  $sql1="Select * from student";
$result1=$con->query($sql1);
while($ro=$result1->fetch_assoc())
{
  
  $i=$ro['id_no'];
  $p=$ro['password'];
  if($_SESSION['id_no']==$i&&$_SESSION['password']==$p)
   
  	header('Location:student.php');
  else header('Location:error.php');
  
  
}


}
  
}


?>

<h4><b><p>Student's Login:</p></b></h4>

<form action="s_log.php" method="POST">

<label for="name">Student ID no.</label>
<input type="text" name="id">
</br>
<label for="password">Password</label>
<input type="password" name="password" Id="password" maxlength="16">

<br><input type ="submit" value="Login">
</form>
</div>
</div>
</body>
</html>