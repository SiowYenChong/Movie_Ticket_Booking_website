<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include_once('config.php');?>
<?php include('includes/navigation2.php'); ?>
<head>
    <title>Payment</title>
</head>

<body>
    <h1 style=text-align:center>Payment</h1>
    <hr style="width: 300px; margin:auto">

    <form method="POST">
        <div class="center">
            <table id="paymentTable">
                <tr>
                    <td><input type="radio" value="VISA Card" name="payment"></td>
                    <td><img src="image/visa.png" style="width:200px;"></td>
                    <td>VISA Card</td>
                </tr>
                <tr>
                    <td><input type="radio" value="Mastercard" name="payment"></td>
                    <td><img src="image/mastercard.png" style="width:200px;"></td>
                    <td>Mastercard</td>
                </tr>
                <tr>
                    <td><input type="radio" value="Touch n Go eWallet" name="payment"></td>
                    <td><img src="image/tngEwallet.png" style="width:200px;"></td>
                    <td>Touch n Go eWallet</td>
                </tr>
                <tr>
                    <td><input type="radio" value="Bank Transfer" name="payment"></td>
                    <td><img src="image/bankTransfer.png" style="width:200px;"></td>
                    <td>Bank Transfer</td>
                </tr>
            </table>
        </div>
        <br>
        </td>
        </tr>
        </table>

        <hr style="width: 95%; margin:auto">

        <table id="purchaseTable">
            <tr>
                <td class="left">Final Total(RM): 57.00</td>
            </tr>
        </table>
        <hr style="width: 95%; margin:auto">

        <a href="index.php">
            <input type="button" id="cancel" value="Cancel" />
        </a>
        <input type="submit" name="Submit" value="MAKE PAYMENT" id='next'>
        <!--fake prompt of payment done, link to upcoming movie in transaction history-->
    </form>

    <br><br><br>

    <?php
    if (isset($_POST['Submit'])) {
        $paymentType = $_POST['payment'];
        $total = $_GET['total'];
        
        if(!empty($paymentType)){

            include_once("config.php");

            $submit = mysqli_query($mysqli, "INSERT INTO transaction(screening_id, member_id, total_price, payment_type) VALUES('12','123456','$total','$paymentType')");
            
            echo '<script>alert("Payment Successful!")</script>';
            header("Location: TransactionUpcoming.php");

        }else if(empty($paymentType)){
            echo '<script>alert("Please choose a payment method.")</script>';
        }
    }
    ?>
</body>
<?php include('includes/footer.php'); ?>

</html>