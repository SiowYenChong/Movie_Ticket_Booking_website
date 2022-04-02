<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "admin") or die('DB setting not valid...!');

//Time Zone...
date_default_timezone_set("Asia/Kuala_Lumpur");

require_once 'admin/admin.php';
?>
