<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation2.php'); ?>
<h1>Update</h1>

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

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  <form action="edit.php" method="POST">
  <?php
  while($row = mysqli_fetch_assoc($result)) {
   // echo "<a href=\"#" . $row["id"] . "\">";
   ?>
   <input type="radio" name="postID" value="<?php echo $row['id'];?>">
   <?php
    echo "id: " . $row["id"]. " 
	- name: " . $row["name"]. "
	- gender: ". $row["gender"]."
	- address: ". $row["address"]."
	- email: ". $row["email"]."
	- phone: ". $row["phone"]."
	- birthday: ". $row["birthday"]."";
   // echo "</a>";
	echo "<br>";
	
  }
  ?>
  <input type="submit">
  <?php
} else {
  echo "0 results";
}
$conn->close();
?>
<?php include('includes/footer.php'); ?>

</html>
