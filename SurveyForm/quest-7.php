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
    <form action="quest-8.php" method="get">
    <p for="input-7">7. How can we better serve you?</p>
    <textarea name="input-7"placeholder="Enter your answer here"></textarea>
        <center> 
        <button class="button quest"type="submit" style="vertical-align:middle">
        <span>Next Question </span></button></center>
    <input style="display:none" name="x"value="<?php echo"".$_REQUEST['x'];?>">
    <input style="display:none" name="y"value="<?php echo"".$_REQUEST['input-6'];?>">
    <br><br><br><small>
    <label>Past answer/s:</label>
    <br>
    <display>"5.<?php echo"".$_REQUEST['x'];?>"<br>"6.<?php echo"".$_REQUEST['input-6'];?>"</display></small>
    </form> 
   </div> 
</body>
</html>

