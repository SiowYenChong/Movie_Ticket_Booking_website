<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>

<?php 
require_once 'config.php';

if(empty($_SESSION['member_id'])){
    header('location:index.php');
}

include('includes/navigation.php'); 

//Fetch member upcoming movies from database...
$fetch_movies = mysqli_query($mysqli, "select screening.screening_date, screening.screening_time, movie.movie_name, branch.branch_name, transaction.points_earned from transaction inner join screening on transaction.screening_id = screening.screening_id inner join movie on screening.movie_id = movie.movie_id inner join branch on screening.branch_id = branch.br_id  where transaction.member_id = '".$_SESSION['member_id']."' ");

// Fetch Member points
$fetch_member_points_here = mysqli_query($mysqli, "select * from member where member_id = '".$_SESSION['member_id']."' ");
        $member_points_here = mysqli_fetch_assoc($fetch_member_points_here);
?>

<head>
    <title>Home - Member</title>
    <style>
        .column {
            margin: 20%;
            position: relative;
        }

        #divpic {
            height: 350px;
            width: 350px;
            text-align: center;
        }

        .column {
            font-size: 1.5em
        }
        button#decrement {
    background-color: transparent;
    border: none;
}
    </style>
</head>

<body>

    <h1 style=text-align:center>Membership Card</h1>
    <hr style="width: 300px; margin:auto">
    <br>
    <table id="membershipCard">
        <tr>
            <td>
                <div id="barcode">
                    <img src="image/barcode.png" style="width:200px;">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                45645138421
            </td>
        </tr>
        <tr>

            <td>
                <div id="pointsText">Available Points:</div> <span id="pointEarned"></span>
            </td>
        </tr>
    </table>

    <h1 style=text-align:center>Upcoming Movies</h1>
    <hr style="width: 300px; margin:auto">
    <table id="homeMemberTable">
        <thead id="homeMemberHead">
            <tr id="memberRow">
                <th>Date</th>
                <th>Time</th>
                <th>Movie</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    
                while($movies = mysqli_fetch_assoc($fetch_movies)){
                  
            ?>

            <tr id="memberRow">
                <td><?php echo $movies['screening_date'] ?></td>
                <td><?php echo $movies['screening_time'] ?></td>
                <td><?php echo $movies['movie_name'] ?></td>
                <td>CFTv KLCC</td>
            </tr>
            <?php
                }
            ?>
           <input type="hidden" name="points" id="points" value="<?php echo $member_points_here['m_points']; ?>">
        </tbody>
    </table>

    <h1 style=text-align:center>Rewards</h1>
    <hr style="width: 300px; margin:auto">
    <h3 style=text-align:center>Click To Claim a Rewards</h3>



    <table style="width:100vw;" id="Rewards">
        <tr>
            <td style="border-radius:50%">
                <div class="column">
                    <div id="container">
                        <button id="decrement" onclick="decreaseInteger(3000)"><img src="image/reward.png" style="width:200px" /></button>

                        <span class="column">3000 points</span>
                    </div>

            </td>

            <td style="border-radius:50%">

                <div class="column">
                    <div id="container">
                        <button id="decrement" onclick="decreaseInteger(5000)"><img src="image/rewardsecond.png" style="width:200px" /></button>

                        <span class="column">5000 points</span>


                    </div>

            </td>
            <td style="border-radius:50%">

                <div class="column">
                    <div id="container">
                        <button id="decrement" onclick="decreaseInteger(7000)"><img src="image/rewardthird.png" style="width:200px" /></button>

                        <span class="column">7000 points</span>


                    </div>

            </td>
            <td style="border-radius:50%">

                <div class="column">
                    <div id="container">
                        <button id="decrement" onclick="decreaseInteger(10000)"><img src="image/reward3.png" style="width:200px" /></button>

                        <span class="column">10000 points</span>


                    </div>

            </td>



        </tr>
    </table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  
    var points = $("#points").val();
    //alert(points);
    $("#pointEarned").html(points);
  
});

function decreaseInteger(val){
    if(confirm("Do you really want to get this award?") == true ){
    $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'decreasePoints='+val,
                success:function(html){
                    alert(html)
                   
                }
            });
        window.location.replace("memberHome.php");
    }
}
</script>
<?php include('includes/footer.php'); ?>

</html>