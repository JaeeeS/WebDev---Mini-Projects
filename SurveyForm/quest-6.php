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
    <form action="quest-7.php" method="post">
    <p for="input-6">6. What product and/or service characteristics do you dislike?</p>
    <textarea name="input-6"placeholder="Enter your answer here"></textarea>
        <center> 
        <button class="button quest"type="submit" style="vertical-align:middle">
        <span>Next Question </span></button></center>
    <input style="display:none" name="x"value="<?php echo"".$_REQUEST['input-5']?>">
    <br><br><br>
    <small><label>Past answer/s:</label>
    <br>
    <display>"5.<?php echo"".$_REQUEST['input-5'];?>"</display></small>
    </form> 
</div>
</body>
</html>

