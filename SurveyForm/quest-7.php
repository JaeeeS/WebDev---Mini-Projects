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
    <form action="quest-8.php" method="get">
    <label for="input-7">7. How can we better serve you?</label>
    <textarea name="input-7"placeholder="<?php echo"".$_REQUEST['input-6']."\n".$_REQUEST['x'];?>"></textarea>
    <button type="submit">Next Question</button>
    <input style="display:none" name="x"value="<?php echo"".$_REQUEST['x'];?>">
    <input style="display:none" name="y"value="<?php echo"".$_REQUEST['input-6'];?>">
    </form> 
    
</body>
</html>

