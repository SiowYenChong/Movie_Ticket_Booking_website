<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "admin") or die('DB setting not valid...!');

require_once 'admin/admin.php';
?>
