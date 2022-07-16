<?php
	session_start();
	if (!isset($_SESSION['loginName']) && !isset($_SESSION['passWord']))
	{
		header('location:login.php');
	}
	else
	{
		session_destroy();
		echo "<script> alert('Log Out Successful!')</script>";
		header('location:login.php');
	}
?>