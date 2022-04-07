<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<link rel='stylesheet' href='style/numberSelector.css'>

<?php
$screening_id = $_GET['screening_id'];
if(empty($screening_id)){
    header("Location: index.php?");
}
?>
<?php include('includes/navigation.php'); ?>


<head>
    <title>Ticket Purchasing</title>

</head>

<?php

// Check If form submitted, insert form data into announcement table.
if (isset($_POST['Submit']) && $_POST['adult'] > 0) {
    //Obtain data posted from the form
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $popcorn = $_POST['popcorn'];
    $hotdog = $_POST['hotdog'];
    $nugget = $_POST['nugget'];
    $coke = $_POST['coke'];

    header("Location: seatSelection.php?screening_id=$screening_id&adult=$adult&child=$child&popcorn=$popcorn&hotdog=$hotdog&nugget=$nugget&coke=$coke");
} else if ((isset($_POST['Submit']) && $_POST['adult'] <= 0)) {
    echo '<script>alert("Please purchase at least 1 adult ticket.")</script>';
}
?>

<body>
    <h1 style=text-align:center>Purchase</h1>
    <hr style="width: 300px; margin:auto">

    <form method="POST">
        <table id="purchaseTable">
            <tr>
                <td><img src="image/ticketIcon.png" style="width:200px;"></td>
                <td>
                    Adult Seat<br><br><br>
                    Child Seat
                </td>
                <td>
                    <div class="input-group">
                        <input type="number" step="1" min="0" max="" value="0" name="adult" class="quantity-field">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <input type="number" step="1" min="0" max="" value="0" name="child" class="quantity-field">
                    </div>
                </td>
                <td>
                    RM 20.00<br><br><br>
                    RM 10.00
                </td>
            </tr>
            </tr>

            <tr>
                <td colspan="100%">
                    <br>
                    <hr style="width: 95%; margin:auto">
                    <br>
                </td>
            </tr>

            <tr>
                <td><img src="image/popcorn.jpg" style="width:200px;"></td>
                <td>Popcorn</td>
                <td>
                    <div class="input-group">
                        <input type="number" step="1" min="0" max="" value="0" name="popcorn" class="quantity-field">
                    </div>
                </td>
                <td>RM 11.00</td>
            </tr>
            <tr>
                <td><img src="image/hotdog.webp" style="width:200px;"></td>
                <td>Hotdog</td>
                <td>
                    <div class="input-group">
                        <input type="number" step="1" min="0" max="" value="0" name="hotdog" class="quantity-field">
                    </div>
                </td>
                <td>RM 8.00</td>
            </tr>
            <tr>
                <td><img src="image/nugget.jpg" style="width:200px;"></td>
                <td>Nugget</td>
                <td>
                    <div class="input-group">
                        <input type="number" step="1" min="0" max="" value="0" name="nugget" class="quantity-field">
                    </div>
                </td>
                <td>RM 10.00</td>
            </tr>
            <tr>
                <td><img src="image/coke.jpg" style="width:200px;"></td>
                <td>Coke</td>
                <td>
                    <div class="input-group">
                        <input type="number" step="1" min="0" max="" value="0" name="coke" class="quantity-field">
                    </div>
                </td>
                <td>RM 5.00</td>
            </tr>
        </table>
        <hr style="width: 95%; margin:auto">

        <a href="index.php">
            <input type="button" id="cancel" value="Cancel">
        </a>

        <input type="submit" name="Submit" value="SEAT SELECTION" id='next'>
    </form>
    <br>
    <br>
    <br>

</body>
<?php include('includes/footer.php'); ?>

</html>