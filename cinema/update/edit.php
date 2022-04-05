<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation2.php'); ?>

<head>
	<title>Edit Profile</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['postID'];

$sql = "SELECT * FROM profile	 where id = " . $id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

  ?>

  <form action="update.php" method="POST" onsubmit="return confirm('update?');">
  

	<h1 style=text-align:center>My Profile</h1>
	<hr style="width: 300px; margin:auto">
	
		<table id="profileTable">
			<tr>
				<td id="inputField">
					<p>
						<label for="name">Name:</label><br>
						<input type="text" id="name" name="name" value="<?php echo $row['name'];?>"<br>
					</p>

					<p>
						<label for="gender">Gender:</label><br>
						<input type="text" id="gender" name="gender" value="<?php echo $row['gender'];?>" checked>
						
					</p>

					<p>
						<label for="address">Address:</label><br>
						<input type="text" id="address" name="address" value="<?php echo $row['address'];?>"><br>
		
				
					</p>

					<p>
						<label for="email">Email:</label><br>
						<input type="email" id="email" name="email" value="<?php echo $row['email'];?>"><br>
					</p>

					<p>
						<label for="phone">Mobile Number:</label><br>
						<input type="tel" id="phone" name="phone" value="<?php echo $row['phone'];?>">
					</p>

					<p>
						<label for="birthday">Date of Birth:</label>
						<input type="date" id="birthday" name="birthday" value="<?php echo $row['birthday'];?>">
					</p>
				</td>
			</tr>
			<tr>
				<td><br><input type="submit" style = "position: relative; left: 150px;" value="Save Changes"></td>
			</tr>
		</table>
	</form>
	<?php
$conn->close();
?>

<?php include('includes/footer.php'); ?>

</html>
