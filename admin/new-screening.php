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
	</head>
	<body>
		<div class="navbar">
			<div class="logo">
				<h1>CFTv</h1>
				<p>IMMERSIVE EXPERIENCE</p>
			</div>
			<div class="heading">
				<h1>New Screening</h1>
			</div>
			<div class="date">
				<h2><?php echo date("j F, Y, g:i A") ?></h2>
			</div>
		</div>
		<div class="draw-body">
			<div class="drawer">
				<li><a href="./movieList.php">Movie</a></li>
				<li><a href="./branchList.php">Branch</a></li>
				<li><a href="./account.php">Account</a></li>
				<li><a href="./screen.php">Screening</a></li>
				<li class="active"><a href="./profile.php">My Profile</a></li>
				<li><a href="new-screening.php?logout" title="Log Out">LOGOUT</a></li>
			</div>
			<div class="content">
				<div class="main">
					<div style="margin-top: 2rem" class="box-account screen">
						<div class="left">
							<li>Screening ID:</li>
							<li>Movie:</li>
							<li>Location:</li>
							<li>Hall:</li>
							<li>Date:</li>
							<li>Time:</li>
						</div>
						<div class="right">
							<li>S00004</li>
							<li>M00002 Uncharted</li>
							<li>B0001 CFTv KLCC</li>
							<li>H0003 - 3</li>
							<li>4/3/2022</li>
							<li>1.30pm</li>
						</div>
					</div>
					<div class="screening-btn">
						<button>New Screening</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
