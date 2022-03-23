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
				<h1>Add New Branch</h1>
			</div>
			<div class="date">
				<h2>7 March 2022, 6:16PM</h2>
			</div>
		</div>
		<div class="draw-body">
			<div class="drawer">
				<li><a href="./movieList.php">Movie</a></li>
				<li class="active"><a href="./branchList.php">Branch</a></li>
				<li><a href="./account.php">Account</a></li>
				<li><a href="./screen.php">Screening</a></li>
				<li><a href="./profile.php">My Profile</a></li>
				<li><a href="addBranch.php?logout" title="Log Out">LOGOUT</a></li>
			</div>
			<div class="content">
				<div class="button-bar-account">
					<button class="delete">DELETE</button>
					<button>Reset Password</button>
					<button><a href="./branchList.php">Add Branch</a></button>
				</div>
				<div class="main">
					<div class="box-account">
						<div class="left">
							<li>Branch ID:</li>
							<li>Branch Name:</li>
							<li>Address:</li>
							<li>No. of Halls:</li>
						</div>
						<div class="right">
							<li>T004</li>
							<li>CFTv JB</li>
							<li>Toppen Shopping Centre, No. 33, Jln Harmonium, Taman Desa Tebrau, 81100 Johor Bahru, Johor</li>
							<li>11</li>
						</div>
						<div class="image">
							<img src="./images/user.png" alt="user-image" />
							<button>Upload Image</button>
						</div>
					</div>
					<br>
					<div class="txn">
						<h3>Hall Information</h3>
						<table>
							<tr>
								<th>Hall ID</th>
								<th>Hall No</th>
								<th>Hall Type</th>
								<th>Capacity</th>
							</tr>
							<tr>
								<td>H0001</td>
								<td>1</td>
								<td>Standard</td>
								<td>90</td>
							</tr>
							<tr>
								<td>H0001</td>
								<td>1</td>
								<td>Standard</td>
								<td>90</td>
							</tr>
							<tr>
								<td>H0001</td>
								<td>1</td>
								<td>Standard</td>
								<td>90</td>
							</tr>
							<tr>
								<td>H0001</td>
								<td>1</td>
								<td>Standard</td>
								<td>90</td>
							</tr>
							<tr>
								<td>H0001</td>
								<td>1</td>
								<td>Standard</td>
								<td>90</td>
							</tr>
							<tr>
								<td>H0001</td>
								<td>1</td>
								<td>Standard</td>
								<td>90</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
