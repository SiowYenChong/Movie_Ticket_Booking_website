<!DOCTYPE html>
<?php
include_once('config.php');
?>

<html>

<head>
    <title>Transaction Upcoming</title>
    <?php include 'includes/navigation.php'; ?>
    
    <link rel="stylesheet" href="style/mystyle.css">
</head>


<body>

<?php

$id = $_SESSION['member_id'];

// Fetch all announcements data from database
// $result = mysqli_query($mysqli, "SELECT * FROM transaction ORDER BY transaction_id");

$result = mysqli_query($mysqli, "SELECT T.points_earned, T.member_id,T.screening_id,S.screening_date,S.screening_time,M.movie_id,M.movie_name,M.movie_poster, M.movie_duration
FROM transaction T
JOIN screening S ON T.screening_id = S.screening_id
JOIN movie M ON S.movie_id = M.movie_id 
WHERE T.member_id = $id
");

// $seat = mysqli_query($mysqli, "SELECT E.seat_code, T.member_id
// FROM transaction T
// JOIN seat E ON T.screening_id = E.screening_id
// WHERE T.member_id = $id
// ");


?>

    <div class="midBtn">
        <a href="TransactionUpcoming.php">
            <li class="a">Upcoming</li>
        </a>
        <li style="display: inline-block;">|</li>
        <a href="TransactionHistory.php">
            <li class="a"> History</li>
        </a>
    </div>
    
     <?php  

while($row = mysqli_fetch_array($result)) {  

    if($row['screening_date'] < date("YYYY/mm/dd")){
    echo '<div class="movieBackground">';
    echo '<img src="image/'. $row['movie_poster'] . '">';
    echo '<table class="GeneratedTable">';
    echo '<tr>';
    echo '<td>Movie Name: <td>'. $row['movie_name'] .'</td></td>';
    echo '<td>    </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Date: <td>'. $row['screening_date'] .'</td></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Time: <td>'. $row['screening_time'] .'</td></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Seat: <td>';

    $screenID = $row['screening_id'];

    $seat = mysqli_query($mysqli, "SELECT E.seat_code, T.member_id
    FROM transaction T
    JOIN seat E ON T.screening_id = E.screening_id 
    WHERE T.member_id = $id AND E.screening_id = $screenID AND E.member_id = $id"
    );

    while($seatPrint = mysqli_fetch_array($seat)){
    echo $seatPrint['seat_code'] . "  ";
    }
    echo '</td></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Duration: <td>'. $row['movie_duration'] .'</td></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Points Earned: <td>'. $row['points_earned'] .'</td></td>';
    echo '</tr>';
    echo '</table>';

    echo '</div>';
}}
    ?>

</body>
<?php include 'includes/footer.php'; ?>

</html>