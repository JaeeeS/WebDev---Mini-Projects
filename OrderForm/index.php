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
</head>
<body>
    <form method="post" action="add.php" enctype="multipart/form-data">
    <div class="big-box">
        <div class="customer-box">
            <h1>ORDER FORM</h1><hr>
            <h3>Customer Details</h3>
            <p><label for="cust_id">Customer Id:</label>
                <input style="border:0;width:40px" type="text" name="cust_id" readonly value="<?php
                           $sql1 = "SELECT * FROM `customer` ORDER BY `customer`.`cust_id` DESC LIMIT 1";
                        $res1 = mysqli_query($conn,$sql1);

                        while($rows = mysqli_fetch_array($res1)){
                            echo $rows['cust_id']+1;
                        }                  
                                                                  ?>"></p>
                <div class="upright">
                    <p><label for="date">Order Date:</label>
                    <input type="date" name="date"></p>
                    <p><label for="ordernum">Order Number:</label>
                    <input style="border:0;width:40px" type="number" name="ordernum" value = "<?php
                        $sqlo = "SELECT * FROM `summary`";
                        if($res = mysqli_query($conn,$sqlo)){
                            $rowcount = mysqli_num_rows($res);
                            echo "".$rowcount+1;
                        } ?>"readonly>
                        </p>
                </div>
                <p><label for="name">Customer Name:</label>
                <input type="text" name="name" required></p>
                <p><label for="address">Address:</label>
                <input type="text" name="address" required></p>
                <p><label for="contact">Contact Name:</label>
                <input type="text" name="contact" required></p>
                <p><label for="phone">Phone:</label>
                <input type="tel" name="phone">
                <label for="mobile">Mobile:</label>
                <input type="number" name="mobile"></p>
                <p><label for="email">Email Address:</label>
                <input type="email" name="email" required></p>
                <center>
                <input class="button a" type="reset">
                <input class="button a" type="submit" value="Confirm Details"></center>
        </div>
    </div>
    </form>
</body>
</html>