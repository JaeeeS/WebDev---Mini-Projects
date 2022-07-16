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
    <p>8. Additional comments or concerns:</p>
    <textarea name="input-7"placeholder="Enter your answer here"></textarea><center>
        <a href="submit.php">
        <button class="button" type="submit" style="vertical-align:middle">
        <span>Submit </span></button></a></center>
    <br><br><br><small>
    <label>Past answer/s:</label>
    <br>
    <display>"5.<?php echo"".$_REQUEST['x'];?>"<br>"6.<?php echo"".$_REQUEST['y'];?>"<br>"7.<?php echo"".$_REQUEST['input-7'];?>"</display></small>
    </form> 
</div>
</body>
</html>

