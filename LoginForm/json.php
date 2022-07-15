<?php
$connect = mysqli_connect("localhost","root","","dbmain");
$filename = "user.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);
    foreach($array as $row){
        $sql= "INSERT INTO logins (username, password) VALUES('".$row["username"]."','".$row["password"]."')";
        mysqli_query($connect,$sql);
    }


?>