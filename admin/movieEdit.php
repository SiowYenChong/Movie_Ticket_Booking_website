<?php
require_once 'config.php';


$admin->check_login();

if (isset($_GET['logout'])) {   
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
			.content .main .box-account .image {
    display: flow-root;
}
.mov_des_box{
    background-color: #fce7dc;
    border-radius: 15px;
    margin: 15px 30px 15px 30px;
    padding: 15px;
}
.movie_description {
    background-color: white;
    font-size: 18px;
    height: 140px;
    padding: 5px;
}
.mov_trailer_box{
    background-color: #fce7dc;
    border-radius: 15px;
    margin: 15px 30px 15px 30px;
    padding: 15px;
}
.movie_trailer_img {
    text-align: center;
    font-size: 18px;
    height: 215px;
    padding: 5px;
}
a{
	text-decoration: none;
	color: white;
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
				<h1>Edit Movie</h1>
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
				<li><a href="movieEdit.php?logout" title="Log Out">LOGOUT</a></li>
			</div>
			<div class="content">
				<div class="button-bar-account">
					<button class="delete">DELETE</button>
					<button>Reset Details</button>
					<button><a href="./movieList.php">Save Changes</a></button>
				</div>
				<div class="main">
					<div class="box-account">
						<div class="left">
							<li>Movie Name:</li>
							<li>Duration (min):</li>
							<li>Publish Date:</li>
							<li>Case:</li>
							<li>Rating:</li>
							
						</div>
						<div class="right">
							<li>The Batman Movie</li>
							<li>185</li>
							<li>5 March 2022</li>
							<li>???</li>
							<li>18</li>
							
						</div>
						<div class="image">
							<img src="./images/user.png" alt="user-image" />
							<button>Upload Image</button>
						</div>
					</div> <br>
					<div class="mov_des_box">
						<h3>Description:</h3>
						<div class="movie_description">
							<p>Batman ventures into Gotham City's underworld when a sadistic killer leaves
behind a trail of cryptic clues. As the evidence begins to lead closer to home
and the scale of the perpetrator's plans become clear, he must forge new
relationships, unmask the culprit and bring justice to the abuse of power and
corruption that has long plagued the metropolis</p>
						</div>
					</div>
					<br>
					<div class="mov_trailer_box">
						<h3>Trailer Link:  &nbsp; https://www.youtube.com/watch?v=mqqft2x_Aa4</h3>
						<div class="movie_trailer_img">
							<img src="images/mov_trailer.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
