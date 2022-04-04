<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation2.php'); ?>

<head>
    <title>Ticket Purchasing</title>
</head>

<body>
    <h1 style=text-align:center>Seat Selection</h1>
    <hr style="width: 300px; margin:auto">

    Click to select your seat(s).<br>

    'seat selection get from vincent side'<br>

    Seats Selected: F8, F9 <br>

    <a href="index.php">
            <input type="button" id="cancel" value="Cancel" />
        </a>
        <a href="confirmation.php">
            <button type="submit" form="form1" value="Submit"  id="next" >CONFIRMATION</button>
        </a>
    <br><br><br>
</body>
<?php include('includes/footer.php'); ?>
</html>