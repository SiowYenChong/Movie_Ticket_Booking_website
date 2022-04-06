<!DOCTYPE html>	
<html>
<head>
	<title>Movies</title>

<link rel=stylesheet href="style/mystyle.css">

</head>

<?php include_once('config.php');?>
<?php include('includes/navigation2.php'); ?>
<body class=nav >
<nav>

	<div style="position:relative;top:-48px;left:450px">
<ul class=nav >

<li class=nav  ><a  class=nav href="movies.php"> NOW SHOWING </a></li>
<li class=nav  ><a class=nav href="comingsoon.php" style="color:red;"> COMING SOON </a></li>



</ul>

</nav>




</div>


<div class="nowshowing-poster" style="align-items: center;position:relative;top:60px;left:500px;">

<ul class="nav"  >
<li  class="nav" >
<a href="movieInfo3.php">
<img src="image/p3.jpg" alt="p1" style="width:200px; height:200px;">
  <figcaption>THE BATMAN</figcaption>


</a>
</li>


 </ul>

 </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include "includes/footer.php" ;?>

</body>







</html>