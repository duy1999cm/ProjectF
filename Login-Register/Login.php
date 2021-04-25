<?php
require_once '../config/config.php';
    if(isset($_POST['sub-btn'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']); 
    }
    $sql="SELECT * FROM `user` WHERE username='$username' and password='$password'";
    $result=$con->query($sql);
    if ($result->num_rows>0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['role']=$row['role'];
    }
    $con->close();
    header("location: ../index.html");
?>