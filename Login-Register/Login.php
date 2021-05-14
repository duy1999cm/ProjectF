<?php
require_once '../config/config.php';
    if(isset($_POST['sub-btn'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']); 
    }
    $sql="SELECT * FROM `user` WHERE username='$username' and password='$password'";
    $result=$con->query($sql);
    $con->close();
    if ($result->num_rows>0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['role']=$row['role'];
        $_SESSION['name']=$row['username'];
        header("location: ../index.php");
    }else{
        echo'
            <script>alert("Tài khoản hoặc mật khẩu không hợp lệ!")</script>
        ';
        header("location: Login-Register.html");
    }
    
?>
