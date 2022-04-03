<!DOCTYPE html>	
<html>
<head>
	<title>Movies</title>

<link rel=stylesheet href="style/mystyle.css">

</head>

<?php include('includes/navigation.php');?>
<body class=nav >


<div style="position:relative;top:-48px;left:85px">
<ul class=nav >

<li class=nav  ><a  class=nav href="movies.php" style="color:red;"> NOW SHOWING </a></li>
<li class=nav  ><a class=nav href="comingsoon.php"> COMING SOON </a></li>



</ul>


</div>
<div class="nowshowing-poster" style="align-items: center;position:relative;top:60px;left:200px;">

<ul class="nav"  >
<li  class="nav" >
<a href="movieInfo1.php">
<img src="image/p1.jpg" alt="p1" style="width:200px; height:200px;">
  <figcaption>DOCTOR STRANGE</figcaption>


</a>
</li>

<li  class=nav >
<a href="movieInfo2.php">
 <img src="image/p2.jpg" alt="p2" style="width:200px; height:200px;">

 <figcaption>JUJUTSU KAISEN 0</figcaption>
 

 </a>
  </li>
 </ul>

 </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php include "includes/footer.php" ;?>

</body>







</html>