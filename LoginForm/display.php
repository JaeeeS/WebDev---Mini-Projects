<?php
$connect = mysqli_connect("localhost","root","","dbmain");

$sql = "SELECT * FROM logins";
$result = mysqli_query($connect, $sql) or die("Error in Selecting " . mysqli_error($connect));


$userArray = array();
while($row =mysqli_fetch_assoc($result))
    {
        $userArray[] = $row;
    }
//echo json_encode($userArray[2]);
$num = count($userArray);

$i=0;?>
<html>
<head>
<style>
    table, th, td {
        border: 5px solid #8E44AD;
        border-radius: 5px;
    }
    th,td{
        width: 200px;
        padding:10px;
        text-align: center;
        background: white;
        
    }
    body{
        background-color: #C39BD3;
    }
    th{
        font-size: 20px;
        background-color: #F5EEF8
    }
</style>    
</head>
<body>
<center>
    <table style="margin-top:100px">
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
<?php
while($i!=$num){
    ?>
        <tr>
            <td><?php echo json_encode($userArray[$i]["username"]); ?></td>
            <td><?php echo json_encode($userArray[$i]["password"]); ?></td>
        </tr>
<?php  $i++; }?>
    </table>
</center>
</body>
</html>
