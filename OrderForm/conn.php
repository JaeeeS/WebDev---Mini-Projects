<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="orderform";
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    if(!$conn){
        echo "Connection Failed";
    }                               
?>
