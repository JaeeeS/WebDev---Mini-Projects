<?php
session_start();
if(!isset($_SESSION['loginName']) && !isset($_SESSION['passWord']))
	{
		header('location:login.php');
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Customer Information</title>
<link href="surveyStyle.css" rel="stylesheet">
</head>
<body>
    <div class="container question">
    <form action="quest-6.php" method ="post">
    <p for="input-5">5. What product and/or service characteristics do you like?</p>
    <textarea name="input-5"placeholder="Enter your answer here"></textarea><center> 
        <button class="button quest"type="submit" style="vertical-align:middle">
        <span>Next Question </span></button></center>
    </form> 
    </div>
</body>
</html>

