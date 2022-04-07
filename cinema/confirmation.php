<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php

include_once('config.php');
include('includes/navigation.php');

$screening_id = $_GET['screening_id'];
if (empty($screening_id)) {
    header("Location: index.php?");
}

// if (!isset($_SESSION['m_name'])) {
//     header("Location:login.php");
// }

$adult = $_GET['adult'];
$child = $_GET['child'];
$popcorn = $_GET['popcorn'];
$hotdog = $_GET['hotdog'];
$nugget = $_GET['nugget'];
$coke = $_GET['coke'];
$seatCode = $_GET['aParam'];

$seatCodeQuery = http_build_query(array('aParam' => $seatCode));


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
                                <td>Choosen Seat:</td>
                                <td><?php
                                    foreach ($seatCode as $code) {
                                        echo $code, ' ';
                                    }
                                    ?></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr><td><br></td></tr>
                            <tr>
                                <td>Adult Seat</td>
                                <td><?php echo $adult; ?></td>
                                <td>Total:</td>
                                <td><?php echo number_format($adult * 20, 2); ?></td>
                            </tr>
                            <?php
                            if ($child > 0) {
                                echo '<tr>';
                                echo '<td>Child Seat</td>';
                                echo '<td>' . $child . '</td>';
                                echo '<td>Total:</td>';
                                echo '<td>' . number_format($child * 10, 2) . '</td>';
                                echo '</tr>';
                            }
                            ?>
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
                    </td>
                </tr>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        <hr style="width: 95%; margin:auto">

        <?php
        $sub2 = 0;

        if ($popcorn > 0 || $hotdog > 0 || $nugget > 0 || $coke > 0) {
            echo '<table id="purchaseTable">';
            if ($popcorn > 0) {
                echo '<tr>';
                echo '<td><img src="image/popcorn.jpg" style="width:200px;"></td>';
                echo '<td>Popcorn</td>';
                echo '<td>' . $popcorn . '</td>';
                echo '<td>Total:</td>';
                echo '<td>' . number_format($popcorn * 11.00, 2) . '</td>';
                echo '</tr>';
            }

            if ($hotdog > 0) {
                echo '<tr>';
                echo '<td><img src="image/hotdog.webp" style="width:200px;"></td>';
                echo '<td>Hotdog</td>';
                echo '<td>' . $hotdog . '</td>';
                echo '<td>Total:</td>';
                echo '<td>' . number_format($hotdog * 8.00, 2) . '</td>';
                echo '</tr>';
            }

            if ($nugget > 0) {
                echo '<tr>';
                echo '<td><img src="image/nugget.jpg" style="width:200px;"></td>';
                echo '<td>Nugget</td>';
                echo '<td>' . $nugget . '</td>';
                echo '<td>Total:</td>';
                echo '<td>' . number_format($nugget * 10.00, 2) . '</td>';
                echo '</tr>';
            }

            if ($coke > 0) {
                echo '<tr>';
                echo '<td><img src="image/coke.jpg" style="width:200px;"></td>';
                echo '<td>Coke</td>';
                echo '<td>' . $coke . '</td>';
                echo '<td>Total:</td>';
                echo '<td>' . number_format($coke * 10.00, 2) . '</td>';
                echo '</tr>';
            }

            echo '<tr>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td>Sub Total:</td>';
            $sub2 = ($popcorn * 11) + ($hotdog * 8) + ($nugget * 10) + ($coke * 5);;
            echo '<td>' . number_format($sub2, 2) . '</td>';
            echo '</tr>';
            echo '</table>';
            echo '<hr style="width: 95%; margin:auto">';
        }
        ?>

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
        header("Location: payment.php?$seatCodeQuery&total=$total&screening_id=$screening_id");
    }
    ?>
</body>


<?php

include('includes/footer.php');

?>

</html>