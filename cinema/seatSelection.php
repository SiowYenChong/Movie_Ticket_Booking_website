<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<link rel='stylesheet' href='style/seatStyle.css'>
<?php include('includes/navigation2.php'); ?>

<head>
    <title>Ticket Purchasing</title>
</head>

<body>
    <h1 style=text-align:center>Seat Selection</h1>
    <hr style="width: 300px; margin:auto">

    <p style = "text-align:center">Click to select your seat(s).</p><br>
    <div class="main">
        <div class="screen-box">
            <div class="movie-screen">
                <div class="movie"></div>
                <div class="seats">
                    <div class="row">
                        <div class="number">1</div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="number">1</div>
                    </div>
                    <div class="row">
                        <div class="number">2</div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="number">2</div>
                    </div>
                    <div class="row">
                        <div class="number">3</div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="number">3</div>
                    </div>
                    <div class="row">
                        <div class="number">4</div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="number">4</div>
                    </div>
                    <div class="path"></div>
                    <div class="row">
                        <div class="number">5</div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat selected"></div>
                        <div class="seat selected"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="number">5</div>
                    </div>
                    <div class="row">
                        <div class="number">6</div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="number">6</div>
                    </div>
                    <div class="row">
                        <div class="number">7</div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="number">7</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p style = "text-align:center">Seats Selected: F8, F9</p><br>

    <a href="index.php">
        <input type="button" id="cancel" value="Cancel" />
    </a>
    <a href="confirmation.php">
        <button type="submit" form="form1" value="Submit" id="next">CONFIRMATION</button>
    </a>
    <br><br><br>
</body>
<?php include('includes/footer.php'); ?>

</html>