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
    <form action="quest-7.php" method="post">
    <label for="input-6">6. What product and/or service characteristics do you dislike?</label>
    <textarea name="input-6"placeholder="<?php echo"".$_REQUEST['input-5'];?>"></textarea>
    <button type="submit">Next Question</button>
    <input style="display:none" name="x"value="<?php echo"".$_REQUEST['input-5']?>">
    </form> 
</body>
</html>

