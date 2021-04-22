<?php
require_once '../config/config.php';
    if(isset($_POST['sub-btn'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']); 
    }
    $sql="SELECT * FROM `user` WHERE usename='$username' and password='$password'";
    $con->query($sql);
    echo '
    <script>
        alert("Đăng ký thành công!");
        window.location.replace("Login-Register.html");
    </script>
    ';
    $con->close();
?>