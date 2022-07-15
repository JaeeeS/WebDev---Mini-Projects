
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Customer Information</title>
<link href="surveyStyle.css" rel="stylesheet">
</head>
<body>

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

</body>
</html>
