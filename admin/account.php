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
				<h1>Edit Account</h1>
			</div>
			<div class="date">
				<h2>7 March 2022, 6:16PM</h2>
			</div>
		</div>
		<div class="draw-body">
			<div class="drawer">
				<li><a href="./movieList.php">Movie</a></li>
				<li><a href="./branchList.php">Branch</a></li>
				<li class="active"><a href="./account.php">Account</a></li>
				<li><a href="./screen.php">Screening</a></li>
				<li><a href="./profile.php">My Profile</a></li>
				<li><a href="account.php?logout" title="Log Out">LOGOUT</a></li>
			</div>
			<div class="content">
				<div class="button-bar-account">
					<button class="delete">DELETE</button>
					<button>Reset Password</button>
					<button>Save Changes</button>
				</div>
				<div class="main">
					<div class="box-account">
						<div class="left">
							<li>Name:</li>
							<li>Gender:</li>
							<li>Address:</li>
							<li>Email:</li>
							<li>Mobile Number:</li>
							<li>Date of Birth:</li>
							<li class="mem">Membership</li>
							<li>Member ID</li>
							<li>Member Points</li>
						</div>
						<div class="right">
							<li>John Doe</li>
							<li>Male</li>
							<li>11, Jalan Bunga, Cheras, Selangor.</li>
							<li>john@example.com</li>
							<li>0198765432</li>
							<li>1/1/1991</li>
							<li class="mem"></li>
							<li>ABC123</li>
							<li>5104</li>
						</div>
						<div class="image">
							<img src="./images/user.png" alt="user-image" />
						</div>
					</div>
					<div class="sort-btn">
						<button>Sort By v</button>
					</div>
					<div class="txn">
						<h3>Transaction History</h3>
						<table>
							<tr>
								<th>Transaction Date</th>
								<th>Transaction ID</th>
								<th>Screening ID</th>
								<th>View</th>
							</tr>
							<tr>
								<td>25/2/2022</td>
								<td>100001</td>
								<td>KL00001</td>
								<td>
									<img
										src="./images/eye-solid.svg"
										alt="eye-icon"
									/>
								</td>
							</tr>
							<tr>
								<td>25/2/2022</td>
								<td>100001</td>
								<td>KL00001</td>
								<td>
									<img
										src="./images/eye-solid.svg"
										alt="eye-icon"
									/>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
