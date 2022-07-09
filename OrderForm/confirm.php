<?php 
include "conn.php";
?>


<?php 
include "conn.php";
$sql="SELECT * FROM `customer`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="style.css" rel="stylesheet"> 
<title>Order Form</title>
<style>
    table, th, td {border: 1px solid;text-align: center}
</style>
</head>
<body>
    <div class="big-box" style="width:fit-content">
        <h1>Your orders are:</h1><hr style="margin-bottom:40px; height:8px">
    <center>
    <table>
        <tr>
            <th>Product Code</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Subtotal Price</th>
        </tr> 
        
    

<?php
//----get values----//
$ty = $_POST['type'];           $ty = trim($ty);
$qy = $_POST['quantity'];       $qy = trim($qy);
$ty2 = $_POST['type2'];         $ty2 = trim($ty2);
$qy2 = $_POST['quantity2'];     $qy2 = trim($qy2);
$ty3 = $_POST['type3'];         $ty3 = trim($ty3);
$qy3 = $_POST['quantity3'];     $qy3 = trim($qy3);
$ty4 = $_POST['type4'];         $ty4 = trim($ty4);
$qy4 = $_POST['quantity4'];     $qy4 = trim($qy4);
$ty5 = $_POST['type5'];         $ty5 = trim($ty5);
$qy5 = $_POST['quantity5'];     $qy5 = trim($qy5);

//---get cust_id----//
$sql1 = "SELECT * FROM `customer` ORDER BY `customer`.`cust_id` DESC LIMIT 1";
$cID; //store cust_id
        $res1 = mysqli_query($conn,$sql1);
            while($rows = mysqli_fetch_array($res1)){
                $cID = $rows['cust_id'];
            }


//----------end-------// 

?>



<?php

addtodb($ty,$qy,$cID,$conn);
addtodb($ty2,$qy2,$cID,$conn);
addtodb($ty3,$qy3,$cID,$conn);
addtodb($ty4,$qy4,$cID,$conn);
addtodb($ty5,$qy5,$cID,$conn);


//var 1 = type, var 2= qty, var 3= cID, var 4 = conn
function addtodb($var,$var2,$var3,$var4){
    $sql2 = "SELECT * FROM item WHERE product_code = '{$var}'";
    $res2 =mysqli_query($var4,$sql2);
    
        while($row1 = mysqli_fetch_array($res2)){
            $id = $row1["item_id"];
            $pc = $row1["unit_price"];
            $sub = $row1["unit_price"]*(int)$var2;
        }
    ?>
    <tr>
    <td><?php echo $var?></td>
    <td><?php echo $var2?></td>
    <td><?php echo $pc?></td>
    <td><?php echo $sub?></td>
    </tr><?php
    $sql="INSERT INTO `orders`(`item_id`, `quantity`,`sub_total`,`cust_id`) VALUES ('$id','$var2','$sub','$var3')";
    $insertresult = mysqli_query($var4, $sql) or die(mysqli_error($var4));
    return $insertresult;   
     //return $insertresult;
}


//----need cust_id, item_id, quantity, subtotal---//

$conn->close();
?>
</table>
</center>
        <center><a href="summary.php"><button style="margin-top:40px; width:200px" class="button">Confirm</button></a></center>
    </div>
    </body>
</html>
