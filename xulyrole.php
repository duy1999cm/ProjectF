<?php
    require_once 'config/config.php';
    if(isset($_SESSION['role'])){
        if($_SESSION['role']==1){
            header("Location: Admin-main/Admin-main.html");
        }else{
            header("Location: User-main/User-main.html");
        }
    }else{
        header("Location: Login-Register/Login-Register.html");

    }
?>
