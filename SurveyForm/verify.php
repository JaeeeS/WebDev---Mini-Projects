<?php
	Session_start();
    if (isset($_SESSION["loginName"]) && isset($_SESSION["password"]))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Customer Information</title>
<link href="surveyStyle.css" rel="stylesheet">
</head>
<body>
    <?php
	if($_REQUEST['loginName']=='ABC' && $_REQUEST['passWord']=='123')
	{
		$_SESSION['loginName']='ABC';
		$_SESSION['passWord']='123';
		echo "<script>alert('Login Successful!');</script>";
		?>
        <center>
        <div class="intro">
<!--       <p style="text-align: justify"><strong>Customer: </strong> <?php echo "".$_SESSION["loginName"];?></p>
--->       
        <h2>CUSTOMER SATISFACTIONS SURVEY</h2><hr>
         <p> We would like to know what you think about our service, so we can make sure we are meeting your need and improve our work. All responses will remain confidential and anonymous.<br><br><small>To proceed, click the "Take the Survey" button for further instructions. To leave, click the "Log Out" button. Thank you for your time!</small></p>
           <br>
            <a href="survey.php">
            <button class="button" style="vertical-align:middle">
            <span>Take the Survey </span></button></a>
            <br>
            <a href="logout.php">
            <button class="button">Log Out</button></a>    
        </div></center>
    <?php
		}
	else
	{
		echo "<script>alert('Unauthorized Login!');</script>";
		echo "<script>window.location.href='login.php'</script>";		
	}
?>
</body>
</html>
