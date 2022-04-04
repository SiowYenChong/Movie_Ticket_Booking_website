<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation2.php'); ?>

<head>
    <title>Ticket Purchasing</title>
</head>

<body>
    <h1 style=text-align:center>Purchase</h1>
    <hr style="width: 300px; margin:auto">

    <form action="">
        <table id="purchaseTable">
            <tr>
                <td><img src="image/ticketIcon.png" style="width:200px;"></td>
                <td>
                    Adult Seat<br><br>
                    Child Seat
                </td>
                <td>
                    <input type="number" id="quantity" name="quantity" value=0> <br><br>
                    <input type="number" id="quantity" name="quantity" value=0>
                </td>
                <td>
                    RM 20.00<br><br>
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
                <td><input type="number" id="quantity" name="quantity" value=0></td>
                <td>RM 11.00</td>
            </tr>
            <tr>
                <td><img src="image/hotdog.webp" style="width:200px;"></td>
                <td>Hotdog</td>
                <td><input type="number" id="quantity" name="quantity" value=0></td>
                <td>RM 8.00</td>
            </tr>
            <tr>
                <td><img src="image/nugget.jpg" style="width:200px;"></td>
                <td>Nugget</td>
                <td><input type="number" id="quantity" name="quantity" value=0></td>
                <td>RM 10.00</td>
            </tr>
            <tr>
                <td><img src="image/coke.jpg" style="width:200px;"></td>
                <td>Coke</td>
                <td><input type="number" id="quantity" name="quantity" value=0></td>
                <td>RM 5.00</td>
            </tr>
        </table>
        <hr style="width: 95%; margin:auto">
        <a href="index.php">
            <input type="button" id="cancel" value="Cancel" />
        </a>
        <a href="seatSelection.php">
            <button type="submit" form="form1" value="Submit" id="next">SEAT SELECTION</button>
        </a>

    </form>
    <br>
    <br>
    <br>
</body>
<?php include('includes/footer.php'); ?>

</html>