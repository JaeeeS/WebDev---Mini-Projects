<?php
$connect = mysqli_connect("localhost","root","","dbmain");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Information</title>
<link href="surveyStyle.css" rel="stylesheet">
</head>
<body>
    <?php  
    
    $un = $_REQUEST['loginName'];
    $pass = $_REQUEST['passWord'];
    $sql = "SELECT * FROM `logins` WHERE `username` = '{$un}'";
    $res = mysqli_query($connect,$sql);
    $rows = mysqli_num_rows($res);
    
    if($rows == 0){
        $array[0]['username'] = $un;
        $array[0]['password'] = $pass;
        $newJsonString = json_encode($array);
        file_put_contents('user.json', $newJsonString);
        
        $filename = "user.json";
        $data = file_get_contents($filename);
        $array = json_decode($data, true);
            foreach($array as $row){
                $sql= "INSERT INTO logins (username, password) VALUES('".$row["username"]."','".$row["password"]."')";
                mysqli_query($connect,$sql);
            }
        header('location:display.php');
    }
    else{
        echo "<script>alert('Username is already taken! Try Again');</script>";
		echo "<script>window.location.href='login.php'</script>";
    }
 
?>
    
</body>
</html>

