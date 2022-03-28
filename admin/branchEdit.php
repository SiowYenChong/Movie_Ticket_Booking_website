<?php
require_once 'config.php';


$admin->check_login();

if (isset($_GET['logout'])) {   
    $admin->logout();
}

$br_id = $_GET['id'];
	$branch_details = mysqli_query($connect, "select * from branch where br_id = '".$br_id."' ");
	$branch = mysqli_fetch_assoc($branch_details);

	  if (isset($_POST['update_branch'])) {

    $filename = $_FILES["branch_image"]["name"];
    $tempname = $_FILES["branch_image"]["tmp_name"];    
        $folder = "images/".$filename;

       // echo $_POST['branch_id']."<br>".$_POST['branch_name']."<br>".$_POST['branch_address']."<br>".$filename."'<br>'".$_POST['hall_id']."<br><br<br>".$_POST['hall_id']."'<br>'".$_POST['hall_num']."'<br>'".$_POST['hall_type']."'<br>'".$_POST['hall_capacity'];
       // exit();
  
        // Execute branch query
       mysqli_query($connect, "update branch set branch_id='".$_POST['branch_id']."', branch_name='".$_POST['branch_name']."', branch_address='".$_POST['branch_address']."',hall_id='".$_POST['hall_id']."', branch_image='".$filename."' where br_id='".$br_id."' ");

        //Execute hall query
     //  mysqli_query($connect, "insert into hall (hall_id, hall_no, hall_type, hall_capacity) values('".$_POST['hall_id']."', '".$_POST['hall_num']."', '".$_POST['hall_type']."', '".$_POST['hall_capacity']."') ");
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
      header('location:branchList.php');
  }

    if(isset($_POST['delete_branch'])){
  	mysqli_query($connect, "delete from branch where br_id = '".$br_id."' ");
  	header('location:branchList.php');
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

label {
    border-radius: 15px;
    font-size: 1.3rem;
    background-color: #da310f;
    color: #fff;
    font-weight: 500;
    padding: 10px 45px 10px 45px;
    line-height: 45px;
}

		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
				<script>
			// To preview movie poster
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory

    }
  };

/*
  $(document).ready(function(){
  $("#no_of_hall").change(function(){
  	var hall = "<tr><td><input type='text' name='hall_id' style='width:60px; font-size: 1.3rem; border: none;'required></td><td><input type='text' name='hall_num' style='width:60px; font-size: 1.3rem; border: none;'required></td><td><input type='text' name='hall_type' style='width:150px; font-size: 1.3rem; border: none;''  required></td><td><input type='text' name='hall_capacity' style='width:60px; font-size: 1.3rem; border: none;' required></td></tr>";
   	$('#halls').append(hall);
  });
});  */
</script>
		</style>
	</head>
	<body>
		<div class="navbar">
			<div class="logo">
				<h1>CFTv</h1>
				<p>IMMERSIVE EXPERIENCE</p>
			</div>
			<div class="heading">
				<h1>Edit Branch</h1>
			</div>
			<div class="date">
				<h2><?php echo date("j F, Y, g:i A") ?></h2>
			</div>
		</div>
		<div class="draw-body">
			<div class="drawer">
				<li><a href="./movieList.php">Movie</a></li>
				<li class="active"><a href="./branchList.php">Branch</a></li>
				<li><a href="./account.php">Account</a></li>
				<li><a href="./screen.php">Screening</a></li>
				<li><a href="./profile.php">My Profile</a></li>
				<li><a href="branchEdit.php?logout" title="Log Out">LOGOUT</a></li>
			</div>
			<form method="post" enctype="multipart/form-data">
			<div class="content">
				<div class="button-bar-account">
					<button class="delete" type="submit" name="delete_branch">DELETE</button>
					<button type="reset">Reset Details</button>
					<button type="submit" name="update_branch">Save Changes</button>
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
							<li><input type="text" name="branch_id" style="width:550px; font-size: 1.3rem; border: none;" value="<?php echo $branch['branch_id']; ?>" required></li>
							<li><input type="text" name="branch_name" style="width:550px; font-size: 1.3rem; border: none;" value="<?php echo $branch['branch_name']; ?>" required></li>
							<li><input type="text" name="branch_address" style="width:550px; font-size: 1.3rem; border: none;" value="<?php echo $branch['branch_address']; ?>" required></li>
							<li><input type="text" name="no_of_hall" id="no_of_hall" style="width:550px; font-size: 1.3rem; border: none;" value="<?php echo $branch['no_of_halls']; ?>"required></li>
						</div>
						<div class="image">
							<img src="./images/user.png" alt="branch_image" id="output" />
							<input type="file" name="branch_image" id="branch_image" hidden accept="image/*" onchange="loadFile(event)" >
							<label for="branch_image">Upload Image</label>
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
							<?php
								$hall_details = mysqli_query($connect, "select * from hall where hall_id = '".$branch['hall_id']."' ");
								$hall = mysqli_fetch_assoc($hall_details);
							?>
							<tr>
								<td><input type='text' name='hall_id' style='width:60px; font-size: 1.3rem; border: none;' required value="<?php echo $hall['hall_id']; ?>"></td>
								<td><input type='text' name='hall_num' style='width:60px; font-size: 1.3rem; border: none;'required value="<?php echo $hall['hall_no']; ?>"></td>
								<td><input type='text' name='hall_type' style='width:150px; font-size: 1.3rem; border: none;'  required value="<?php echo $hall['hall_type']; ?>"></td>
								<td><input type='text' name='hall_capacity' style='width:60px; font-size: 1.3rem; border: none;' required value="<?php echo $hall['hall_capacity']; ?>"></td>
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
					<br>
					<div class="txn">
						<h3>Screening History</h3>
						<table>
							<tr>
								<th>Screening ID</th>
								<th>Movie</th>
								<th>Date</th>
								<th>Time</th>
							</tr>
							<tr>
								<td>KL00001</td>
								<td>The Batman Movie</td>
								<td>25/4/2022</td>
								<td>1.35pm</td>
							</tr>
							<tr>
								<td>KL00001</td>
								<td>The Batman Movie</td>
								<td>25/4/2022</td>
								<td>1.35pm</td>
							</tr>
							<tr>
								<td>KL00001</td>
								<td>The Batman Movie</td>
								<td>25/4/2022</td>
								<td>1.35pm</td>
							</tr>
							
								
						</table>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>
