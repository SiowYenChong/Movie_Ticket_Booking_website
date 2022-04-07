<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation.php'); ?>

<head>
	<title>Edit Profile</title>
</head>
<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'movie';
  $db_port = 8889;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Error: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;
  echo '<br>';

  $mysqli->close();
?>
    
    
    <?php 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'movie';
  $db_port = 8889;
  
  // Create connection
$conn = new mysqli ($db_host, $db_user, $db_password, $db_db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM profile ORDER BY id ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " ";
	
	echo "<br>";
	}
  
	
} else {
  echo "0 results";
}
?>

	<a href="update">Update Profile</a><br>
	
  <?php


$conn->close();
?>
<body>
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

$sql = "SELECT * FROM profile ORDER BY id ASC";
$result = mysqli_query($conn, $sql);

  ?>

	
	
  
  <?php
$conn->close();
?>
	
</body>
<?php include('includes/footer.php'); ?>

</html>
