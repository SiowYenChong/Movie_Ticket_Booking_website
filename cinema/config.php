<?php
session_start();
$mysqli = mysqli_connect("localhost", "root", "", "admin") or die('DB setting not valid...!');


class member{
    public function login($data){
    $connect = mysqli_connect("localhost", "root", "", "admin") or die('DB setting not valid...!');
        $rs = mysqli_query($connect, "select * from member where m_email = '".$data['m_email']."' and m_password = '".$data['m_password']."'");
        $row = mysqli_fetch_assoc($rs);
        
        if ($row){
            $_SESSION['m_name'] = $row['m_name'];
            $_SESSION['member_id'] = $row['member_id'];
        
            header('location:index.php');
        }
        else{
			echo '<script language="javascript">';
			echo 'alert("Invalid email or password");';
			echo 'window.location = "login.php"';
			echo '</script>';
        }    
    }
    public function check_login() {   // we have written this function to start the login page by default when we start the index page or project
        if ($_SESSION['id'] == "") {
            header('location:login.php');
            exit();
        }
    }
    
    public function logout() {
        unset($_SESSION['m_name']);
        unset($_SESSION['member_id']);
        
        header('location:index.php');
        exit();
    }
}
$member = new member();



?>
