<?php
require_once 'config.php';

$movie_id = $_GET['id'];
$fetch_movies_details = mysqli_query($mysqli, "select * from movie where movie_id = '" . $movie_id . "' ");
$fetch_details = mysqli_fetch_assoc($fetch_movies_details);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Movies</title>

  <link rel=stylesheet href="style/mystyle.css">
  <style>
    .dropbtn {
      background-color: #212121;
      color: white;
      padding: 16px;
      font-size: 20px;
      border: none;
      margin-left: 20px;
      margin-right: 20px;
      text-align: center;
    }

    .dropdown {
      position: relative;
      display: inline-block;
      text-align: center;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      text-align: center;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: red;
    }
  </style>
</head>

<?php include('includes/navigation.php'); ?>

<body class=nav>
  <h1><?php echo $fetch_details['movie_name']; ?></h1>
  <iframe width=100% height="460px" src="<?php echo $fetch_details['movie_trailer']; ?>">
  </iframe>

  <h2> Duration: <?php echo $fetch_details['movie_duration']; ?></h2>
  <h2> Publish Date: <?php echo $fetch_details['movie_date']; ?></h2>
  <h2> Rating: <?php echo $fetch_details['movie_rating']; ?></h2>

  <div>
    <?php
    $fetch_movie_branches = mysqli_query($mysqli, "select branch.branch_name, branch.br_id from branch inner join screening on branch.br_id = screening.branch_id where screening.movie_id = '" . $fetch_details['movie_id'] . "' group by branch.branch_name ");
    while ($fetch_branches = mysqli_fetch_assoc($fetch_movie_branches)) {
    ?>
      <div class="dropdown">
        <button class="dropbtn"><?php echo $fetch_branches['branch_name']; ?></button>
        <div class="dropdown-content">
          <?php
          $fetch_time = mysqli_query($mysqli, "select * from screening where movie_id = '" . $fetch_details['movie_id'] . "' and branch_id = '" . $fetch_branches['br_id'] . "' ");
          while ($time = mysqli_fetch_assoc($fetch_time)) {
          
            $screening_id = $time['screening_id'];
            
          ?>
            <?php 
            if(date('Y-m-d') < $time['screening_date'] ) { ?>
            <a href="purchase.php?screening_id=<?php echo $screening_id ?>"><?php echo $time['screening_date']." ".$time['screening_time']; ?> <br> </a>
              
          <?php
          } }
          ?>
        </div>
      </div>
    <?php
    }
    ?>

  </div>



  <?php include "includes/footer.php"; ?>

</body>







</html>