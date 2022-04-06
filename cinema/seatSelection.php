<?php

include_once("config.php");

$occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=12");

$adult = $_GET['adult'];
$child = $_GET['child'];
$popcorn = $_GET['popcorn'];
$hotdog = $_GET['hotdog'];
$nugget = $_GET['nugget'];
$coke = $_GET['coke'];
?>


<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<link rel='stylesheet' href='style/seatStyle.css'>
<?php include('includes/navigation2.php'); ?>

<head>
    <title>Ticket Purchasing</title>
</head>

<?php

// Check If form submitted, insert form data into announcement table.
if (isset($_POST['Submit'])) {
    $adult = $_GET['adult'];
    $child = $_GET['child'];
    $popcorn = $_GET['popcorn'];
    $hotdog = $_GET['hotdog'];
    $nugget = $_GET['nugget'];
    $coke = $_GET['coke'];
    // algorithm to check number of selected seat == adult + child 

    $selected = $_POST['seat'].",";
    

    header("Location: confirmation.php?adult=$adult&child=$child&popcorn=$popcorn&hotdog=$hotdog&nugget=$nugget&coke=$coke");
}
?>

<body>
    <h1 style=text-align:center>Seat Selection</h1>
    <hr style="width: 300px; margin:auto">

    <p style="text-align:center">Click to select your seat(s).</p><br>
    <?php
    while ($row = mysqli_fetch_array($occupied)) {
        echo $row['seat_code'];
        if ($row['seat_code'] == 'F2') {
            echo 'same';
        } else {
            echo 'different';
        }
    }
    ?>
    <br>
    
    <form method="POST">
        <div class="main">
            <div class="screen-box">
                <div class="movie-screen">
                    <div class="movie"></div>
                    <div class="seats">
                        <div class="row">
                            <div class="number">A</div>
                            <div class="seat"><input type="checkbox" name="seat" value="A1" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="A2" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="A3" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="A4" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="A5" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="A6" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="A7" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="A8" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="A9" class="check"></div>
                            <div class="number">A</div>
                        </div>
                        <div class="row">
                            <div class="number">B</div>
                            <div class="seat"><input type="checkbox" name="seat" value="B1" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="B2" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="B3" class="check"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="B6" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="B7" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="B8" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="B9" class="check"></div>
                            <div class="number">B</div>
                        </div>
                        <div class="row">
                            <div class="number">C</div>
                            <div class="seat"><input type="checkbox" name="seat" value="C1" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="C2" class="check"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="C8" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="C9" class="check"></div>
                            <div class="number">C</div>
                        </div>
                        <div class="row">
                            <div class="number">D</div>
                            <div class="seat"><input type="checkbox" name="seat" value="D1" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="D2" class="check"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="D8" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="D9" class="check"></div>
                            <div class="number">D</div>
                        </div>
                        <div class="path"></div>
                        <div class="row">
                            <div class="number">E</div>
                            <div class="seat"><input type="checkbox" name="seat" value="E1" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="E2" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="E3" class="check"></div>
                            <div class="seat occupied"></div>
                            <div class="seat occupied"></div>
                            <div class="seat selected"><input type="checkbox" name="seat" value="E6" class="check"></div>
                            <div class="seat selected"><input type="checkbox" name="seat" value="E7" class="check"></div>
                            <div class="seat occupied"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="E9" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="E10" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="E11" class="check"></div>
                            <div class="number">E</div>
                        </div>
                        <div class="row">
                            <div class="number">F</div>

                            <?php
                            $x = 0;
                            while ($row = mysqli_fetch_array($occupied)) {
                                if ($row['seat_code'] == 'F1') {
                                    $x = 1;
                                }
                            }

                            if ($x < 0) {
                                echo '<div class="seat occupied"></div>';
                                $x = 0;
                            } else if (!$x) {
                                echo '<div class="seat"><input type="checkbox" name="seat" value="F1" class="check"></div>';
                            }
                            ?>

                            <?php
                            $x = 0;
                            while ($row = mysqli_fetch_array($occupied)) {
                                if ($row['seat_code'] == 'F2') {
                                    $x = 1;
                                }
                            }

                            if ($x < 0) {
                                echo '<div class="seat occupied"></div>';
                                $x = 0;
                            } else if (!$x) {
                                echo '<div class="seat"><input type="checkbox" name="seat" value="F1" class="check"></div>';
                            }
                            ?>

                            <?php
                            $x = 0;
                            while ($row = mysqli_fetch_array($occupied)) {
                                if ($row['seat_code'] == 'F3') {
                                    $x = 1;
                                }
                            }

                            if ($x < 0) {
                                echo '<div class="seat occupied"></div>';
                                $x = 0;
                            } else {
                                echo '<div class="seat"><input type="checkbox" name="seat" value="F1" class="check"></div>';
                            }
                            ?>

                            <?php
                            $x = false;
                            while ($row = mysqli_fetch_array($occupied)) {
                                if ($row['seat_code'] == 'F4') {
                                    $x = true;
                                }
                            }

                            if ($x) {
                                echo '<div class="seat occupied"></div>';
                                $x = false;
                            } else {
                                echo '<div class="seat"><input type="checkbox" name="seat" value="F1" class="check"></div>';
                            }
                            ?>
                            <?php
                            $x = false;
                            while ($row = mysqli_fetch_array($occupied)) {
                                if ($row['seat_code'] == 'F5') {
                                    $x = true;
                                }
                            }

                            if ($x) {
                                echo '<div class="seat occupied"></div>';
                                $x = false;
                            } else {
                                echo '<div class="seat"><input type="checkbox" name="seat" value="F1" class="check"></div>';
                            }
                            ?>
                            <div class="seat"></div>
                            <div class="seat"></div>
                            <div class="seat occupied"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="F9" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="F10" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="F11" class="check"></div>
                            <div class="number">F</div>
                        </div>
                        <div class="row">
                            <div class="number">G</div>
                            <div class="seat"><input type="checkbox" name="seat" value="G1" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G2" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G3" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G4" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G5" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G6" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G7" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G8" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G9" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G10" class="check"></div>
                            <div class="seat"><input type="checkbox" name="seat" value="G11" class="check"></div>
                            <div class="number">G</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <a href="index.php">
            <input type="button" id="cancel" value="Cancel">
        </a>

        <input type="submit" name="Submit" value="CONFIRMATION" id='next'>
    </form>

    <br>
    <br>
    <br>
</body>
<?php include('includes/footer.php'); ?>

</html>