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
  margin-left:20px;
   margin-right:20px;
  text-align:center;
}

.dropdown {
  position: relative;
  display: inline-block;
   text-align:center;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align:center;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: red;}
</style>
</head>

<?php include('includes/navigation.php');?>
<body class=nav >
<h1> DOCTER STRANGE</h1>
<iframe width=100% height="460px" src="https://www.youtube.com/embed/Rt_UqUm38BI?autoplay=1&mute=1" >
</iframe>

<h2> Duration:</h2>
<h2> Publish Date::</h2>
<h2> Rating:</h2>

<div>
<div class="dropdown">
  <button class="dropbtn">KLCC</button>
  <div class="dropdown-content">
    <a href="#">1.15pm</a>
    <a href="#">3.15pm</a>
    <a href="#">4.15pm</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">BUTTERWORTH</button>
  <div class="dropdown-content">
   <a href="#">1.15pm</a>
 

  </div>
  </div>
<div class="dropdown">
  <button class="dropbtn">KUCHING</button>
  <div class="dropdown-content">
   <a href="#">1.15pm</a>
    <a href="#">3.15pm</a>
 

  </div>  

</div>

</div>



<?php include "includes/footer.php" ;?>

</body>







</html>