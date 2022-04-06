<div class="nav">
<?php
 	include_once("config.php"); 
// Starting the session, to use and
// store data in session variable
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['m_name'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
else{
			echo'<a href="index.php?logout=1" style="color: red;float:right;position:relative;">'.'Click here to Logout'.'</a>';
			echo '<h4 id="m_name" style="color:white;float:right;position:relative;top:-20px;">';
			echo 'Hello '. $_SESSION['m_name'].',';
			echo '</h4>';
}
  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['m_name']);
    header("location: index.php");
}
?>
<nav style="background-color:rgb(33,33,33);">

<a href="./">
<img src="image/logo.png" class="logo" alt="logo">
</a>


<ul class=nav>

<li class=nav><a class=nav href="memberHome.php"> HOME</a></li>
<li class=nav><a class=nav href="ContactUs.php"> CONTACT US</a></li>
<li class=nav><a class=nav href="movies.php"> MOVIES  </a></li>
<li class=nav><a class=nav href="editProfile.php"> EDIT PROFILE  </a></li>
<li class=nav><a class=nav href="transactionHistory.php"> TRANSACTION HISTORY  </a></li>


</ul>
</nav>
</div>