<?php
session_start();
if(isset($_POST['login'])){
    $pass = "123";
    if($_POST['pass'] == $pass){
        $_SESSION['logged_in'] = 1;
        header('Location: adminlogin.php');
    }else{
        header('Location: index.php');
    };
};
