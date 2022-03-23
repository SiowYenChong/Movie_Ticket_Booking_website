<?php
require_once 'config.php';


$admin->check_login();

if (isset($_GET['logout'])) {   // 
    $admin->logout();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="./styles/style.css" />
<style type="text/css">
  img.mv_img_list {
    width: 100px;
}
img.mv_tr_list {
    width: 400px;
    height: 85px;
}
a{
  text-decoration: none;
  color: white;
}
.mv_ed_btn{
  width: 5rem !important;
}
.\.button_m {
    float: right;
    text-align: right;
    margin: 30px 35px 10px 10px;
}
</style>
	</head>
	<body>
		<div class="navbar">
			<div class="logo">
				<h1>CFTv</h1>
				<p>IMMERSIVE EXPERIENCE</p>
			</div>
			<div class="heading">
				<h1>Movie List</h1>
			</div>
			<div class="date">
				<h2>7 March 2022, 6:16PM</h2>
			</div>
		</div>
		<div class="draw-body">
			<div class="drawer">
				<li class="active"><a href="./movieList.php">Movie</a></li>
				<li><a href="./branchList.php">Branch</a></li>
				<li><a href="./account.php">Account</a></li>
				<li><a href="./screen.php">Screening</a></li>
				<li><a href="./profile.php">My Profile</a></li>
				<li><a href="movieList.php?logout" title="LogOut">LOGOUT</a></li>
			</div>
			<div class="content">
            <div class=".button_m">
              <button>Sort By</button>
              <button><a href="addMovie.php">New Movie</a></button>
            </div>
          <table>
            <tr>
              <th width="2%">No.</th>
              <th width="40%">Movie Info</th>
              <th width="40%">Trailer</th>
              <th width="5%"></th>
            </tr>
            <tr>
              <td>1</td>
              <td><img src="images/user.png" class="mv_img_list" align="left"> Movie Name: The Batman Movie <br>Duration: 185 <br> Publish Date: 5 March 2022 <br> Rating: 18</td>
              <td><a href="#"><img src="images/mov_trailer.png" class="mv_tr_list"></a></td>
              <td><button class="mv_ed_btn"><a href="movieEdit.php">Edit</a></button></td>
            </tr>
             <tr>
              <td>2</td>
              <td><img src="images/user.png" class="mv_img_list" align="left"> Movie Name: The Batman Movie <br>Duration: 185 <br> Publish Date: 5 March 2022 <br> Rating: 18</td>
              <td><a href="#"><img src="images/mov_trailer.png" class="mv_tr_list"></a></td>
              <td><button class="mv_ed_btn"><a href="movieEdit.php">Edit</a></button></td>
            </tr>
             <tr>
              <td>3</td>
              <td><img src="images/user.png" class="mv_img_list" align="left"> Movie Name: The Batman Movie <br>Duration: 185 <br> Publish Date: 5 March 2022 <br> Rating: 18</td>
              <td><a href="#"><img src="images/mov_trailer.png" class="mv_tr_list"></a></td>
              <td><button class="mv_ed_btn"><a href="movieEdit.php">Edit</a></button></td>
            </tr>
             <tr>
              <td>4</td>
              <td><img src="images/user.png" class="mv_img_list" align="left"> Movie Name: The Batman Movie <br>Duration: 185 <br> Publish Date: 5 March 2022 <br> Rating: 18</td>
              <td><a href="#"><img src="images/mov_trailer.png" class="mv_tr_list"></a></td>
              <td><button class="mv_ed_btn"><a href="movieEdit.php">Edit</a></button></td>
            </tr>
             <tr>
              <td>5</td>
              <td><img src="images/user.png" class="mv_img_list" align="left"> Movie Name: The Batman Movie <br>Duration: 185 <br> Publish Date: 5 March 2022 <br> Rating: 18</td>
              <td><a href="#"><img src="images/mov_trailer.png" class="mv_tr_list"></a></td>
              <td><button class="mv_ed_btn"><a href="movieEdit.php">Edit</a></button></td>
            </tr>
             <tr>
              <td>6</td>
              <td><img src="images/user.png" class="mv_img_list" align="left"> Movie Name: The Batman Movie <br>Duration: 185 <br> Publish Date: 5 March 2022 <br> Rating: 18</td>
              <td><a href="#"><img src="images/mov_trailer.png" class="mv_tr_list"></a></td>
              <td><button class="mv_ed_btn"><a href="movieEdit.php">Edit</a></button></td>
            </tr>
          
          </table>
        </div>
		</div>
	</body>
</html>
<!--
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booking App</title>

  <style type="text/css">
    .header{
      width: 100%;
      height: 40px;
    }
    .header > h2 {
      text-align: center;
    }
    .header > time {
      float: right;
    }
    .sidebar{
      width: 15%;
      height: 550px;
      background-color: #d11d27;
      float: left;
    }
    .sidebar > ul > li {
      list-style-type: none;
      padding: 10px;
    }
    .sidebar > ul > li > a{
      text-decoration: none;
      color: white;
      font-size: 20px;

    }
    .sidebar > ul > li:hover{
      text-decoration: none;
      color: white;
      font-size: 20px;
      background-color: #e53c38;
    }
    .body{
      float: right;
      background-color: #2f1414;
      width: 85%;
      height: 550px;
    }
    table, td, th {
      border: 1px solid;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      text-align: center;
    }
    .buttons{
      float: right;
      padding: 10px;
    }
    button {
      color: white;
      background-color: #e53c38;
      padding: 10px 25px 10px 25px;
      border-radius: 10px;
      border: none;

    }
  </style>
</head>
<body>

  <div class="header">
    <h2>Movie List/Overview</h2>
    
  </div>
  <div class="sidebar">
    <ul>
      <li><a href="movieList.php">Movie</a></li>
      <li><a href="branchList.php">Branch</a></li>
      <li><a href="#">Account</a></li>
      <li><a href="#">Screening</a></li>
      <li><a href="#">My Profile</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>
  <div class="body">
    <div class="buttons">
      <button>Sort By</button>
      <button><a href="addMovie.php">New Movie</a></button>
    </div>
    <table>
      <tr>
        <th>No.</th>
        <th>Movie Info</th>
        <th>Trailer</th>
        <th></th>
      </tr>
      <tr>
        <td>1</td>
        <td><img src="#"> Movie Name <br> Duration <br> Publish Date <br> Rating</td>
        <td><a href="#">Link</a></td>
        <td><a href="movieEdit.php">Edit</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td><img src="#"> Movie Name <br> Duration <br> Publish Date <br> Rating</td>
        <td><a href="#">Link</a></td>
        <td><a href="#">Edit</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td><img src="#"> Movie Name <br> Duration <br> Publish Date <br> Rating</td>
        <td><a href="#">Link</a></td>
        <td><a href="#">Edit</a></td>
      </tr>
      <tr>
        <td>4</td>
        <td><img src="#"> Movie Name <br> Duration <br> Publish Date <br> Rating</td>
        <td><a href="#">Link</a></td>
        <td><a href="#">Edit</a></td>
      </tr>
      <tr>
        <td>5</td>
        <td><img src="#"> Movie Name <br> Duration <br> Publish Date <br> Rating</td>
        <td><a href="#">Link</a></td>
        <td><a href="#">Edit</a></td>
      </tr>
    </table>
  </div>

</body>
</html>
  -->