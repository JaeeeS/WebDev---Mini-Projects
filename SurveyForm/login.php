<?php 
	session_start();
	if (isset($_SESSION["loginName"]) && isset($_SESSION["password"]))
	{
		header("location:login.php");
	}
?>

<! DOCTYPE html>
<html>
<head>
    <title>Log-in</title>
<style>
body{
  background-color: #AED3E3;
}
th{
    font-size: 20px;
}
h2{
  font-size: 40px;
  margin:20px;
}
label {
  font-size: 25px;
}
form{
    background-color:white;
    text-align:center;
    padding:10px;
    width: fit-content;
    border-radius:10px;
}
hr{
    height:5px;
    background:#16558F;
}
.login-content{   
    margin-top:10%;
}
.btn{
    height:30px;
    border-radius:10px;
    width:100px;
    cursor:pointer;
    margin-top:10px;
    color:white;
    background-color:#16558F;
}
</style>
</head>
<body>
<div class="container-login">
<center>
<div class="login-content">
    <form action="verify.php" method="post">
   <h2>Log In</h2><hr>
    <table>
        <th>AUTHORIZATION</th> 
        <tr>
            <td><label>Login Name:</label></td>
            <td><input type="text" name="loginName"></td>
        </tr>
        <tr>
            <td><label>Password:</label></td>
            <td><input type="password" name="passWord"></td>
        </tr>
        <tr>
            <td><input class="btn" style="float:right" type = "submit" value="Submit"></td>
            <td><input class="btn"  type = "reset" value="Reset"></td>
        </tr>
    </table>
    </form>
    </center>
</div>
</div>
</body>
</html>
