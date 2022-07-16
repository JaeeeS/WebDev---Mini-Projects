<?php
    session_start();
	if(!isset($_SESSION['loginName']) && !isset($_SESSION['passWord']))
	{
		header('location:surveylogin.php');
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Survey Form</title>
<link href="surveyStyle.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <a href="logout.php">
            <button class="button" style="float:right;background-color:#FF0000;width:200px;">Log Out</button></a><br>
        <h1>Customer Satisfaction Survey</h1>
        <p>Thank you for taking our customer satisfaction survey!</p> 
        <p>The survey should take less than five minutes of your time to complete.</p>
        <p style="text-align: justify"><strong>Username: </strong> <?php echo "".$_SESSION["loginName"];?></p>
        <hr>
        <h2>Please rate your satisfaction level with each of the following statements:</h2>
        <p>1 - Very Satisfied <th\> 2 - Somewhat Satisfied   3 - Neutral   4 - Somewhat Dissatisfied   5 - Very Dissatisfied</p>
        <table>
            <tr>
                <th class="txt"></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
            <tr>
                <td class="txt">1. How satisfied are you with the delivery of our products?</td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-1" name="recommend" value=1>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-2" name="recommend" value=2>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-3" name="recommend" value=3>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-4" name="recommend" value=4>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-5" name="recommend" value=5>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="txt">2. How do you rate the response time of our sales representatives?</td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-1" name="recommend2" value=1>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-2" name="recommend2" value=2>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-3" name="recommend2" value=3>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-4" name="recommend2" value=4>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-5" name="recommend2" value=5>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="txt">3. How satisfied are you with the quality of our products?</td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-1" name="recommend3" value=1>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-2" name="recommend3" value=2>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-3" name="recommend3" value=3>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-4" name="recommend3" value=4>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-5" name="recommend3" value=5>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="txt">4. How do you rate our customer communications?</td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-1" name="recommend4" value=1>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-2" name="recommend4" value=2>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-3" name="recommend4" value=3>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-4" name="recommend4" value=4>
                    </div>
                </td>
                <td>
                    <div class="radio-control">
                    <input type="radio" id="recommend-5" name="recommend4" value=5>
                    </div>
                </td>
            </tr>
        </table>
        <a href="quest-5.php">
            <button class="button" style="vertical-align:middle">
                <span>Next</span></button></a>
    </div>
</body>    
</html>