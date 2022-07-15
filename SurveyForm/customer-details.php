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
<title>Survey Form</title>
<link href="surveyStyle.css" rel="stylesheet">
</head>
<body>
    <div class="details">
    <form action="survey.php">
        <table>
        <tr>
            <td><label for="name">Name:</label></td>  
            <td><input type="text" required><br></td>
        </tr>
        <tr>
            <td><label for="phone">Phone Number:</label></td>
            <td><input type="number" pattern="{0}{0-9}{11}"></td>
        </tr>
        <tr>
            <td><label for="email">Email Address:</label></td>
            <td><input type="email" required></td>
        </tr>
        </table> 
        <button type="submit">Take a survey</button><br><br>
         </form>
        <a href="logout.php"><button >Log Out</button></a>
    </div> 
</body>
</html>