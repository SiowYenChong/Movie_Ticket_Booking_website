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
				<h1>My Profile</h1>
			</div>
			<div class="date">
				<h2>7 March 2022, 6:16PM</h2>
			</div>
		</div>
		<div class="draw-body">
			<div class="drawer">
				<li><a href="./movieList.php">Movie</a></li>
				<li><a href="./branchList.php">Branch</a></li>
				<li><a href="./account.php">Account</a></li>
				<li><a href="./screen.php">Screening</a></li>
				<li class="active"><a href="./profile.php">My Profile</a></li>
				<li><a href="profile.php?logout" title="Log Out">LOGOUT</a></li>
			</div>
			<div class="content">
				<div class="button-bar">
					<button>Save Changes</button>
				</div>
				<div class="main">
					<div class="box">
						<div class="left">
							<li>Username:</li>
							<li>Name:</li>
							<li>Employee ID:</li>
							<li>Email:</li>
							<li>Mobile Number:</li>
							<li>New Password:</li>
						</div>
						<div class="right">
							<li>admin</li>
							<li>testAdmin</li>
							<li>A123456</li>
							<li>admin@cftv.com</li>
							<li>0123456789</li>
							<li>
								<input type="text" name="password" id="pwd1" />
								&nbsp; &nbsp; &nbsp; Retype Password:
								<input
									type="text"
									name="confirm_password"
									id="pwd2"
								/>
							</li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
