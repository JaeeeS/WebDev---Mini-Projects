<?php 
	session_start();
	if (isset($_SESSION["loginName"]) && isset($_SESSION["password"]))
	{
		header("location:survey.php");
	}
?>

<! DOCTYPE html>
<html>
<head>
    <title>Log-in</title>
</head>
<body>
<div class="container">
    <form action="verify.php" method="post">
    <h2>Log in</h2>
    <table>
        <th>AUTORIZATION</th> 
        <tr>
            <td><label>Login Name:</label></td>
            <td><input type="text" name="loginName"></td>
        </tr>
        <tr>
            <td><label>Password:</label></td>
            <td><input type="password" name="passWord"></td>
        </tr>
        <tr>
            <td><input type = "submit" value="Submit"></td>
            <td><input type = "reset" value="Reset"></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>
