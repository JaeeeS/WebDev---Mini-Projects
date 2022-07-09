<?php 
    $i = $_POST['id'];
    $i = trim($i);
    $j = $_POST['quantity'];
    $j = trim($j);
    include "conn.php";
    $sql = "SELECT * FROM item WHERE product_code = '{$i}'";
    $res = mysqli_query($conn, $sql);

    while($rows = mysqli_fetch_array($res)){?>
        <td style="border:0;
    text-align: center"><?php 
    echo $rows["unit"]; ?></td>
        <td style="border:0;
    text-align: center"><?php 
    echo $rows["product_code"]; ?></td>
        <td style="border:0;
    text-align: center"><?php 
    echo $rows["description"]; ?></td>
        <td style="border:0;
    text-align: center"><?php 
    echo $rows["unit_price"]*(int)$j; ?></td>
<?php    }
    echo $sql;
?>