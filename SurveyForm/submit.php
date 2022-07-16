<?php
	Session_start();
    if (isset($_SESSION["loginName"]) && isset($_SESSION["password"]))
	{
		header('location:login.php');
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
<br><br><br><br><br><br>
<center>
        <div class="intro">   
        <h2>CUSTOMER SATISFACTIONS SURVEY</h2><hr>
         <p>Thank you for taking our customer satisfaction survey!</p>
         <p>You have submitted it successfully!</p>
        <br><br>
            <a href="login.php">
            <button class="button quest">Okay</button></a>
    </div>
    </center>
</body>    
</html>