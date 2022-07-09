<?php 
include "conn.php";

$cID;
$sql1 = "SELECT * FROM `customer` ORDER BY `customer`.`cust_id` DESC LIMIT 1";
    $res1 = mysqli_query($conn,$sql1);
    while($rows = mysqli_fetch_array($res1)){
        $cID=$rows['cust_id'];
        
    }  
$total=0;
$i=1;
$sql2 = "SELECT * FROM orders WHERE cust_id = '{$cID}'";
$res2 =mysqli_query($conn,$sql2);
    while($row1 = mysqli_fetch_array($res2)){
            $sub[$i] = $row1["sub_total"];
            $total=$total+$sub[$i];
            $i++;
        }
    //$total= $sub[1]+$sub[2]+$sub[3]+$sub[4]+$sub[5];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width, initial-scale=1.0">
<link href="style.css" rel="stylesheet">
<title>Order Form</title>
</head>
<body>
    <div class="big-box" style="width:300px">
        <h2>Total:</h2><hr style="margin-top:0"><br><center><h1><?php echo $total;?></h1><br></center>
    </div>
    <script src="script.js"></script>
</body>
</html>


<?php
$sql="INSERT INTO `summary`(`total`,`cust_id`) VALUES ('$total','$cID')";
  if($conn->query($sql)===TRUE){
        return $sql;
    }
    else{
        echo "Error". $sql. "<br>". $conn->error;}
?>
