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
img {
    border-radius: 10% 0% 0% 10%;
}

.content .main .box-account {
	padding: 0px !important;
	margin-top: 30px !important;
}
button.br_ed_btn {
    margin-top: 125px;
}
.left {
    padding-top: 10px;
}
.button-b {
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
				<h1>Branch List</h1>
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
				<li><a href="branchList.php?logout" title="Log Out">LOGOUT</a></li>
			</div>
			<div class="content">
				<div class="button-b">
					<button >Sort By</button>
				
					<button><a href="./addBranch.php">New Branch</a></button>
				</div>
				<div class="main">
					<div class="box-account">
						<div class="image">
							<img src="./images/branch.png" alt="user-image" />
						</div>
						<div class="left">
							<li>Branch ID: B001</li>
							<li>Branch Name: CFTv JB</li>
							<li>Location: Toppen Shopping Centre</li>
						</div>
						<button class="br_ed_btn"><a href="branchEdit.php">Edit</a></button>
						
					</div>
					<br>
					<div class="box-account">
						<div class="image">
							<img src="./images/branch.png" alt="user-image" />
						</div>
						<div class="left">
							<li>Branch ID: B002</li>
							<li>Branch Name: CFTv JB</li>
							<li>Location: Toppen Shopping Centre</li>
						</div>
						<button class="br_ed_btn"><a href="">Edit</a></button>
						
					</div>
					<div class="box-account">
						<div class="image">
							<img src="./images/branch.png" alt="user-image" />
						</div>
						<div class="left">
							<li>Branch ID: B003</li>
							<li>Branch Name: CFTv JB</li>
							<li>Location: Toppen Shopping Centre</li>
						</div>
						<button class="br_ed_btn"><a href="">Edit</a></button>
						
					</div>

					
				</div>
			</div>
		</div>
	</body>
</html>
