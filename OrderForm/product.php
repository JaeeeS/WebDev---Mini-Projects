<?php 
include "conn.php";
?>                  
                                                                              

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<style>
    table, th, td {border: 1px solid;}
    th{width: 200px;}
    td{width: 202px;}
    p{width: 40px;}
    select{margin-right: 25px;
           border: 0px;
           outline: 0px;
           font-size: 17px;}
    input{width: 193px;}
</style> 
<title>Order Form</title>
</head>
<body>
    <form method="post" action="confirm.php" enctype="multipart/form-data">
    <div class="big-box">
        
<!-----PRODUCTS CORNER------>
        
        <div class="order-box">
            <h1 style="text-align:center" >Products to Order</h1><hr style="margin-bottom:20px;">
           
            <table>
                <tr>
                    <th>Product Code</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>Total Price</th>
                </tr>          
            </table>
    <!----- END TABLE HEADER----->
            <!-----ROW1----->
                <div style="display:flex">
                    <select name="type" id="prodcode" onchange="selectCode()" required>
                        <option selected="selected">Select Product Code</option>
                        <?php
                        $sql = "SELECT * FROM item";
                        $resultset = mysqli_query($conn, $sql);
                        while( $rows = mysqli_fetch_assoc($resultset) ) { 
                        ?>
                        <option value="<?php 
                        echo $rows["product_code"]; ?>"><?php echo $rows["product_code"]; ?></option>
                        <?php }	?>
                    </select>
                    <td><input id="quantity" min="0" value="1" name="quantity" type="number" onchange="selectCode()"></td>
                     <div id="get" class="ans"></div>               
                </div>
            <!---END ROW1---->
            
            <!-----ROW2----->
                <div style="display:flex">
                    <select name="type2"id="prodcode2" onchange="selectCode2()" required>
                        <option value="" selected="selected">Select Product Code</option>
                        <?php
                        $sql = "SELECT * FROM item";
                        $resultset = mysqli_query($conn, $sql);
                        while( $rows = mysqli_fetch_assoc($resultset) ) { 
                        ?>
                        <option value="<?php 
                        echo $rows["product_code"]; ?>"><?php echo $rows["product_code"]; ?></option>
                        <?php }	?>
                    </select>
                    <td><input  id="quantity2" min="0" value="1" name="quantity2" type="number" onchange="selectCode2()"></td>
                     <div id="get" class="ans2"></div>               
                </div>
            <!---END ROW2---->
            
            <!-----ROW3----->
                <div style="display:flex">
                    <select name="type3" id="prodcode3" onchange="selectCode3()" required>
                        <option value="" selected="selected" >Select Product Code</option>
                        <?php
                        $sql = "SELECT * FROM item";
                        $resultset = mysqli_query($conn, $sql);
                        while( $rows = mysqli_fetch_assoc($resultset) ) { 
                        ?>
                        <option value="<?php 
                        echo $rows["product_code"]; ?>"><?php echo $rows["product_code"]; ?></option>
                        <?php }	?>
                    </select>
                    <td><input  id="quantity3" min="0" value="1" name="quantity3" type="number" onchange="selectCode3()"></td>
                     <div id="get" class="ans3"></div>               
                </div>
            <!---END ROW3---->
            
            <!-----ROW4----->
                <div style="display:flex">
                    <select name="type4"  id="prodcode4" onchange="selectCode4()" required>
                        <option value="" selected="selected">Select Product Code</option>
                        <?php
                        $sql = "SELECT * FROM item";
                        $resultset = mysqli_query($conn, $sql);
                        while( $rows = mysqli_fetch_assoc($resultset) ) { 
                        ?>
                        <option value="<?php 
                        echo $rows["product_code"]; ?>"><?php echo $rows["product_code"]; ?></option>
                        <?php }	?>
                    </select>
                    <td><input  id="quantity4" min="0" value="1" name="quantity4" type="number" onchange="selectCode4()"></td>
                     <div id="get" class="ans4"></div>               
                </div>
            <!---END ROW4---->
            
            <!-----ROW5----->
                <div style="display:flex">
                    <select name="type5"  id="prodcode5" onchange="selectCode5()" required>
                        <option value="" selected="selected">Select Product Code</option>
                        <?php
                        $sql = "SELECT * FROM item";
                        $resultset = mysqli_query($conn, $sql);
                        while( $rows = mysqli_fetch_assoc($resultset) ) { 
                        ?>
                        <option value="<?php 
                        echo $rows["product_code"]; ?>"><?php echo $rows["product_code"]; ?></option>
                        <?php }	?>
                    </select>
                    <td><input id="quantity5" min="0" value="1" name="quantity5" type="number" onchange="selectCode5()"></td>
                     <div id="get" class="ans5"></div>             
                </div>
            <!---END ROW5---->
        </div>
       <center><input class="button" style="margin-top:30px" type = "submit" value="Confirm Order"></center>
    </div>
    </form>
    <script type="text/javascript" src="script.js"></script>   
</body>
</html>