
<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php 
require_once 'config.php';

if(empty($_SESSION['member_id'])){
    header('location:index.php');
}

include('includes/navigation.php'); 
//Fetch user details from database...
$fetch_member_details = mysqli_query($mysqli, "select * from member where member_id = '"
  .$_SESSION['member_id']."' ");
$member_profile = mysqli_fetch_assoc($fetch_member_details);

if(isset($_POST['update_member_profile'])){
  // echo $_POST['name']."<br>";
  // echo $_POST['gender']."<br>";
  // echo $_POST['addressline']."<br>";
  // echo $_POST['email']."<br>";
  // echo $_POST['phone']."<br>";
  // echo $_POST['birthday']."<br>";
  // exit();
  mysqli_query($mysqli, "update member set m_name = '".$_POST['name']."', m_gender = '".$_POST['gender']."', m_address = '".$_POST['addressline']."', m_email = '".$_POST['email']."', m_number = '".$_POST['phone']."', m_dob = '".$_POST['birthday']."' where member_id = '".$_SESSION['member_id']."' ");
  header('location:editProfile.php');
}

?>

<head>
  <title>Edit Profile</title>
</head>

<body>
  <h1 style=text-align:center>My Profile</h1>
  <hr style="width: 300px; margin:auto">

  <form action="" method="post">
    <table id="profileTable">
      <tr>
        <td id="inputField">
          <p>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $member_profile['m_name']; ?>"><br>
          </p>

          <p>
            <label for="gender">Name:</label><br>
            <input type="radio" id="gender" name="gender" value="Male" <?php if($member_profile['m_gender'] == 'Male') { echo "checked"; } ?> >
            <label for="male">Male</label>
            <input type="radio" id="gender" name="gender" value="Female" <?php if($member_profile['m_gender'] == 'Female') { echo "checked"; } ?> >
            <label for="female">Female</label>
          </p>

          <p>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="addressline" value="<?php echo $member_profile['m_address']; ?>"><br>
            <!-- <input type="text" id="address" name="addressline2" value="Taman Bunga, Semenyih"><br>
            <input type="text" id=address name="postcode" pattern="[0-9]{5}" maxlength="5" value="32000"> -->
          <!--   <select id="address" name="state">
              <option value="Johor" <?php if($member_profile['m_address'] == 'Johor') { echo "selected"; } ?> >Johor</option>
              <option value="Kedah" <?php if($member_profile['m_address'] == 'Kedah') { echo "selected"; } ?>>Kedah</option>
              <option value="Kelantan" <?php if($member_profile['m_address'] == 'Kelantan') { echo "selected"; } ?> >Kelantan</option>
              <option value="Malacca" <?php if($member_profile['m_address'] == 'Malacca') { echo "selected"; } ?> >Malacca</option>
              <option value="Negerisembilan" <?php if($member_profile['m_address'] == 'Negerisembilan') { echo "selected"; } ?> >Negeri Sembilan</option>
              <option value="Pahang" <?php if($member_profile['m_address'] == 'Pahang') { echo "selected"; } ?>>Pahang</option>
              <option value="Penang" <?php if($member_profile['m_address'] == 'Penang') { echo "selected"; } ?>>Penang</option>
              <option value="Perak" <?php if($member_profile['m_address'] == 'Perak') { echo "selected"; } ?> >Perak</option>
              <option value="Perlis" <?php if($member_profile['m_address'] == 'Perlis') { echo "selected"; } ?> >Perlis</option>
              <option value="Sabah" <?php if($member_profile['m_address'] == 'Sabah') { echo "selected"; } ?> >Sabah</option>
              <option value="Sarawak" <?php if($member_profile['m_address'] == 'Sarawak') { echo "selected"; } ?> >Sarawak</option>
              <option value="Selangor" <?php if($member_profile['m_address'] == 'Selangor') { echo "selected"; } ?> >Selangor</option>
              <option value="Terengganu" <?php if($member_profile['m_address'] == 'Terengganu') { echo "selected"; } ?> >Terengganu</option>
            </select> -->
          </p>

          <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="<?php echo $member_profile['m_email']; ?>"><br>
          </p>

          <p>
            <label for="phone">Mobile Number:</label><br>
            <input type="tel" id="phone" name="phone" value="<?php echo $member_profile['m_number']; ?>">
          </p>

          <p>
            <label for="birthday">Date of Birth:</label>
            <input type="date" id="birthday" name="birthday" value="<?php echo $member_profile['m_dob']; ?>">
          </p>
        </td>
      </tr>
      <tr>
        <td><br><input type="submit" style = "position: relative; left: 150px;" value="Save Changes" name="update_member_profile"></td>
      </tr>
    </table>
  </form>
</body>
<?php include('includes/footer.php'); ?>

</html>