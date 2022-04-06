<!DOCTYPE html>
<?php
include_once('config.php');
?>

<html>

<head>
    <?php include 'includes/navigation2.php'; ?>
    
    <link rel="stylesheet" href="style/mystyle.css">
</head>


<body>

<?php

$id = $_SESSION['member_id'];

// Fetch all announcements data from database
// $result = mysqli_query($mysqli, "SELECT * FROM transaction ORDER BY transaction_id");

$result = mysqli_query($mysqli, "SELECT T.member_id,T.screening_id,S.screening_date,S.screening_time,M.movie_id,M.movie_name,M.movie_poster, M.movie_duration
FROM transaction T
JOIN screening S ON T.screening_id = S.screening_id
JOIN movie M ON S.movie_id = M.movie_id 
WHERE member_id = $id
");

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

    if($row['screening_date'] > date("YYYY/mm/dd")){
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
    echo '<td>Seat: <td>'. $row['movie_name'] .'</td></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Duration: <td>'. $row['movie_duration'] .'</td></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Points Earned: <td>'. $row['movie_name'] .'</td></td>';
    echo '</tr>';
    echo '</table>';

    echo '</div>';
}}
    ?>

</body>
<?php include 'includes/footer.php'; ?>

</html>