<?php 
require_once 'config.php';

//Fetch movies from database...
$fetch_movies = mysqli_query($mysqli, "select * from movie where movie_case = 'now showing' ");

?>

<!DOCTYPE html>	
<html>
<head>
	<title>Movies</title>

<link rel=stylesheet href="style/mystyle.css">

</head>

<?php include('includes/navigation2.php');?>
<body class=nav >


<div style="position:relative;top:-48px;left:85px">
<ul class=nav >

<li class=nav  ><a  class=nav href="movies.php" style="color:red;"> NOW SHOWING </a></li>
<li class=nav  ><a class=nav href="comingsoon.php"> COMING SOON </a></li>



</ul>


</div>
<div class="nowshowing-poster" style="align-items: center;position:relative;top:60px;left:200px;">

<ul class="nav"  >
    <?php 
      while($movies = mysqli_fetch_assoc($fetch_movies)){
  ?>
<li  class="nav" >
<a href="movieInfo1.php?id=<?php echo $movies['movie_id']; ?>">
<img src="../admin/images/<?php echo $movies['movie_poster']; ?>" alt="p1" style="width:300px; height:250px;">
  <figcaption><?php echo $movies['movie_name']; ?></figcaption>
</a>
</li>
<?php
    }
  ?>

 </ul>

 </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php include "includes/footer.php" ;?>

</body>







</html>