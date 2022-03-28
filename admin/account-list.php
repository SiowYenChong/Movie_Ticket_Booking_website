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
				<h1>Account List/Overview</h1>
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
				<li class="active"><a href="./screen.php">Screening</a></li>
				<li><a href="./profile.php">My Profile</a></li>
				<li><a href="account-list.php?logout" title="Log Out">LOGOUT</a></li>
			</div>
			<div class="content">
				<div class="button-bar-overview button-bar-ac-list">
					<input
						type="text"
						placeholder="Search"
						name="search"
						id="search"
					/>
					<button>Sort By v</button>
				</div>
				<div class="main">
					<div class="ac-list">
						<table>
							<tr>
								<th>Member ID</th>
								<th>Name</th>
								<th>Mobile Number</th>
								<th>Email</th>
								<th>Edit</th>
							</tr>
							<tr>
								<td>M000001</td>
								<td>John Doe</td>
								<td>0123456789</td>
								<td>jane@example.com</td>
								<td>
									<img
										src="./images/pencil-solid.svg"
										alt="eye-icon"
									/>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp;</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
