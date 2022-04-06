<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php
<?php include_once('config.php');?>
<?php include('includes/navigation2.php'); ?>
$adult = $_GET['adult'];
$child = $_GET['child'];
$popcorn = $_GET['popcorn'];
$hotdog = $_GET['hotdog'];
$nugget = $_GET['nugget'];
$coke = $_GET['coke'];
?>

<head>
    <title>Purchase Confirmation</title>
</head>



<body>
    <h1 style=text-align:center>Purchase Confirmation</h1>
    <hr style="width: 300px; margin:auto">
    <form method="POST">
        <table id="purchaseTable">
            <tbody>
                <tr>
                    <td><img src="image/ticketIcon.png" style="width:200px;"></td>
                    <td>
                        <table id="purchaseTable">
                            <tr>
                                <td>Adult Seat</td>
                                <td><?php echo $adult; ?></td>
                                <td>Total:</td>
                                <td><?php echo number_format($adult * 20, 2); ?></td>
                            </tr>
                            <tr>
                                <td>Child Seat</td>
                                <td><?php echo $child; ?></td>
                                <td>Total:</td>
                                <td><?php echo number_format($child * 10, 2); ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Sub Total:</td>
                                <td>
                                    <?php
                                    $sub1 = ($adult * 20) + ($child * 10);
                                    echo number_format($sub1, 2);
                                    ?>
                                </td>
                            </tr>
                        </table>
                </tr>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        <hr style="width: 95%; margin:auto">

        <table id="purchaseTable">
            <tr>
                <td><img src="image/popcorn.jpg" style="width:200px;"></td>
                <td>Popcorn</td>
                <td><?php echo $popcorn; ?></td>
                <td>Total:</td>
                <td><?php echo number_format($popcorn * 11.00, 2); ?></td>
            </tr>
            <tr>
                <td><img src="image/hotdog.webp" style="width:200px;"></td>
                <td>Hotdog</td>
                <td><?php echo $hotdog; ?></td>
                <td>Total:</td>
                <td><?php echo number_format($hotdog * 8.00, 2); ?></td>
            </tr>
            <tr>
                <td><img src="image/nugget.jpg" style="width:200px;"></td>
                <td>Nugget</td>
                <td><?php echo $nugget; ?></td>
                <td>Total:</td>
                <td><?php echo number_format($nugget * 10.00, 2); ?></td>
            </tr>
            <tr>
                <td><img src="image/coke.jpg" style="width:200px;"></td>
                <td>Coke</td>
                <td><?php echo $coke; ?></td>
                <td>Total:</td>
                <td><?php echo number_format($coke * 5.00, 2); ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Sub Total:</td>
                <td>
                    <?php
                    $sub2 = ($popcorn * 11) + ($hotdog * 8) + ($nugget * 10) + ($coke * 5);
                    echo number_format($sub2, 2);
                    ?>
                </td>
            </tr>
        </table>
        <hr style="width: 95%; margin:auto">

        <table id="purchaseTable">
            <tr>
                <td class="left">
                    Final Total(RM):
                    <?php
                    $total = $sub1 + $sub2;
                    echo number_format($total, 2);
                    ?>
                </td>
            </tr>
        </table>

        <hr style="width: 95%; margin:auto">

        <a href="index.php">
            <input type="button" id="cancel" value="Cancel">
        </a>

        <input type="submit" name="Submit" value="PAYMENT" id='next'>

    </form>
    <br><br><br>
    
    <?php
    if (isset($_POST['Submit'])) {
        echo '<script>alert("' . $total . '")</script>';
        header("Location: payment.php?total=$total");
    }
    ?>
</body>


<?php

include('includes/footer.php');

?>

</html>