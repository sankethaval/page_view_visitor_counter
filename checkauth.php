<?php
$use = $_POST['usern'];
$pas = md5($_POST['passw']);
include "passwo.php";

	if($user == $use && $pass==$pas)
	{
	     session_start();
	     $_SESSION['HGB'] = "passed";
	     $block = "false";
	} else
	{
	  $xx=true;
	  include "authlogin.php";
	  $block="true";
	}
?>

