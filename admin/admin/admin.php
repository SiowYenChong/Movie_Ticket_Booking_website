<?php

require_once 'config.php';

class admin{
    public function login($data){
    $connect = mysqli_connect("localhost", "root", "", "admin") or die('DB setting not valid...!');
        $rs = mysqli_query($connect, "select * from users where user_name = '".$data['user_name']."' and password = '".$data['password']."'");
        $row = mysqli_fetch_assoc($rs);
        
        if ($row){
            $_SESSION['id'] = $row['id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['dob'] = $row['dob'];
            
            header('location:homepage.php');
        }
        else{
            header('location:login.php');
        }    
    }
    public function check_login() {   // we have written this function to start the login page by default when we start the index page or project
        if ($_SESSION['id'] == "") {
            header('location:login.php');
            exit();
        }
    }
    
    public function logout() {
        unset($_SESSION['id']);
        unset($_SESSION['first_name']);
        unset($_SESSION['last_name']);
        $_SESSION['user_name'] = $row['user_name'];
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['gender']);
        unset($_SESSION['dob']);
        header('location:login.php');
        exit();
    }
}
$admin = new admin();
?>

