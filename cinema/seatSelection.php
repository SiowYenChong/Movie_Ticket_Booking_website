<?php

include_once("config.php");


$screening_id = $_GET['screening_id'];
if (empty($screening_id)) {
    header("Location: index.php?");
}

$occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=$screening_id");

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

    $selected = $_POST['seat'];
    $selectedNum = 0;
    $limit = $adult + $child;

    $seatCode = http_build_query(array('aParam' => $selected));


    foreach ($selected as $code) {
        $selectedNum++;
    }

    if ($limit != $selectedNum) {
        echo '<script>alert("Please select ' . $limit . ' seats only.")</script>';
    } else {
        header("Location: confirmation.php?$seatCode&adult=$adult&child=$child&popcorn=$popcorn&hotdog=$hotdog&nugget=$nugget&coke=$coke&screening_id=$screening_id");
    }
}
?>

<body>
    <h1 style=text-align:center>Seat Selection</h1>
    <hr style="width: 300px; margin:auto">

    <p style="text-align:center">Click to select your seat(s).</p><br>

    <form method="POST">

        <div class="main">
            <div class="screen-box">
                <div class="movie-screen">
                    <div class="movie"></div>
                    <div class="seats">
                        <div class="row">
                            <div class="number">A</div>
                            <?php
                            for ($i = 1; $i <= 9; $i++) {
                                $x = 0;
                                $occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=$screening_id");
                                while ($row = mysqli_fetch_array($occupied)) {
                                    if ($row['seat_code'] == "A$i") {
                                        $x = 1;
                                    }
                                }

                                if ($x == 1) {
                                    echo '<div class="seat occupied"></div>';
                                    $x = 0;
                                } else if ($x == 0) {
                                    echo '<div class="seat"><input type="checkbox" name="seat[]" value="A' . $i . '" class="check"></div>';
                                }
                            }

                            ?>
                            <div class="number">A</div>
                        </div>
                        <div class="row">
                            <div class="number">B</div>
                            <?php

                            for ($i = 1; $i <= 9; $i++) {
                                $x = 0;
                                $occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=$screening_id");
                                while ($row = mysqli_fetch_array($occupied)) {
                                    if ($row['seat_code'] == "B$i") {
                                        $x = 1;
                                    }
                                }

                                if ($x == 1) {
                                    echo '<div class="seat occupied"></div>';
                                    $x = 0;
                                } else if ($x == 0) {
                                    echo '<div class="seat"><input type="checkbox" name="seat[]" value="B' . $i . '" class="check"></div>';
                                }
                            }

                            ?>
                            <div class="number">B</div>
                        </div>
                        <div class="row">
                            <div class="number">C</div>
                            <?php

                            for ($i = 1; $i <= 9; $i++) {
                                $x = 0;
                                $occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=$screening_id");
                                while ($row = mysqli_fetch_array($occupied)) {
                                    if ($row['seat_code'] == "C$i") {
                                        $x = 1;
                                    }
                                }

                                if ($x == 1) {
                                    echo '<div class="seat occupied"></div>';
                                    $x = 0;
                                } else if ($x == 0) {
                                    echo '<div class="seat"><input type="checkbox" name="seat[]" value="C' . $i . '" class="check"></div>';
                                }
                            }

                            ?>
                            <div class="number">C</div>
                        </div>
                        <div class="row">
                            <div class="number">D</div>
                            <?php

                            for ($i = 1; $i <= 9; $i++) {
                                $x = 0;
                                $occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=$screening_id");
                                while ($row = mysqli_fetch_array($occupied)) {
                                    if ($row['seat_code'] == "D$i") {
                                        $x = 1;
                                    }
                                }

                                if ($x == 1) {
                                    echo '<div class="seat occupied"></div>';
                                    $x = 0;
                                } else if ($x == 0) {
                                    echo '<div class="seat"><input type="checkbox" name="seat[]" value="D' . $i . '" class="check"></div>';
                                }
                            }

                            ?>
                            <div class="number">D</div>
                        </div>
                        <div class="path"></div>
                        <div class="row">
                            <div class="number">E</div>
                            <?php

                            for ($i = 1; $i <= 11; $i++) {
                                $x = 0;
                                $occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=$screening_id");
                                while ($row = mysqli_fetch_array($occupied)) {
                                    if ($row['seat_code'] == "E$i") {
                                        $x = 1;
                                    }
                                }

                                if ($x == 1) {
                                    echo '<div class="seat occupied"></div>';
                                    $x = 0;
                                } else if ($x == 0) {
                                    echo '<div class="seat"><input type="checkbox" name="seat[]" value="E' . $i . '" class="check"></div>';
                                }
                            }

                            ?>
                            <div class="number">E</div>
                        </div>
                        <div class="row">
                            <div class="number">F</div>

                            <?php

                            for ($i = 1; $i <= 11; $i++) {
                                $x = 0;
                                $occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=$screening_id");
                                while ($row = mysqli_fetch_array($occupied)) {
                                    if ($row['seat_code'] == "F$i") {
                                        $x = 1;
                                    }
                                }

                                if ($x == 1) {
                                    echo '<div class="seat occupied"></div>';
                                    $x = 0;
                                } else if ($x == 0) {
                                    echo '<div class="seat"><input type="checkbox" name="seat[]" value="F' . $i . '" class="check"></div>';
                                }
                            }

                            ?>
                            <div class="number">F</div>
                        </div>
                        <div class="row">
                            <div class="number">G</div>
                            <?php

                            for ($i = 1; $i <= 11; $i++) {
                                $x = 0;
                                $occupied = mysqli_query($mysqli, "SELECT * FROM seat WHERE screening_id=$screening_id");
                                while ($row = mysqli_fetch_array($occupied)) {
                                    if ($row['seat_code'] == "G$i") {
                                        $x = 1;
                                    }
                                }

                                if ($x == 1) {
                                    echo '<div class="seat occupied"></div>';
                                    $x = 0;
                                } else if ($x == 0) {
                                    echo '<div class="seat"><input type="checkbox" name="seat[]" value="G' . $i . '" class="check"></div>';
                                }
                            }

                            ?>
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