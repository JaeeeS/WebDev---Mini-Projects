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
    <label for="input-7">8. Additional comments or concerns:</label>
    <textarea name="input-7"placeholder="<?php echo"".$_REQUEST['x']."\n".$_REQUEST['y']."\n".$_REQUEST['input-7'];?>"></textarea>
    <button type="submit">Submit</button>
    </form> 
    
</body>
</html>

