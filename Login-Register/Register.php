<?php
    require_once '../config/config.php';
    if(isset($_POST['sub-btn'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']); 
        $email=$_POST['email'];
    }
    $sql="INSERT INTO `user`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";
    $con->query($sql);
    echo '
    <script>
        alert("Đăng ký thành công!");
        window.location.replace("Login-Register.html");
    </script>
    ';
    $con->close();
?>