<?php
	require_once'config.php';

	if (isset($_GET['logout'])) {   
    $member->logout();
}

?>
<div class="nav">

<nav style="background-color:rgb(33,33,33);">
<a href="./">
<img src="image/logo.png" class="logo" alt="logo">
</a>
<?php
	if (!empty($_SESSION['m_name'])){
?>
<h4 id=guest style="color:white;float:right;position:relative;top:-20px;"> / Welcome, <?php echo $_SESSION['m_name']; ?></h4>

<a href="index.php?logout" style="color:rgb(233,29,66);float:right;">
SiGN OUT
</a>
<?php } ?>
<?php
	if (empty($_SESSION['m_name'])){
?>
<a href="signUp.php" style="color:rgb(233,29,66);float:right;">
SiGN UP
</a>
<a href="logIn.php" style="color:rgb(233,29,66);float:right;">
SIGN IN/
</a>
<?php
	}

?>

<ul class=nav>

<li class=nav><a class=nav href="index.php"> HOME</a></li>
<li class=nav><a class=nav href="ContactUs.php"> CONTACT US</a></li>
<li class=nav><a class=nav href="movies.php"> MOVIES  </a></li>

<?php
	if (!empty($_SESSION['m_name'])){
?>
<li class=nav><a class=nav href="memberHome.php"> MEMBER HOME  </a></li>
<li class=nav><a class=nav href="editProfile.php"> EDIT PROFILE  </a></li>
<li class=nav><a class=nav href="transactionHistory.php"> TRANSACTION HISTORY  </a></li>
<?php } ?>


</ul>
</nav>
</div>