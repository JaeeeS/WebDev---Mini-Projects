<?php

include "conn.php";

$cn = $_POST['name'];
$ad = $_POST['address'];
$con = $_POST['contact'];
$ph = $_POST['phone'];
$mb = $_POST['mobile'];
$em = $_POST['email'];
$dt = $_POST['date'];
$sql="INSERT INTO `customer`(`cust_name`, `address`,`contact_name`, `phone`,`mobile`, `email`, `date`) VALUES ('$cn','$ad','$con','$ph','$mb','$em','$dt')";



if($conn->query($sql)===TRUE){
    header("Location:product.php");
}
else{
    echo "Error". $sql. "<br>". $conn->error;
    header("Location:product.php?error=$em");
}


$_SESSION['cust_id'];?>

$conn->close();
?>