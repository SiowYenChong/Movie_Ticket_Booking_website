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

    $name=$_POST['name'];
    $gender=$_POST['gender'];
     $address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$birthday=$_POST['birthday'];
// sql to delete a record
$sql = "UPDATE `profile` SET name='". $name ."', gender= '". $gender ."', address='" . $address . "' , email='" . $email ."', phone='" . $phone . "' , birthday='" . $birthday . "'";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Record inserted successfully</h1>";
  echo "<a href='../editProfile.php'> Return </a>";
} else {
  echo "Error inserting record: " . $conn->error;
}

$conn->close();
?>
<?php include('includes/footer.php'); ?>

</html>