<?php
error_reporting(0);
session_destroy();
if(session_destroy())
{
	header('Location:login.php');
}


?>