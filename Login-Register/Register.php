<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'sale_web';

    $con = new mysqli($server,$user,$pass,$database);
    $con->set_charset("utf8");

    if(isset($_POST['sub-btn'])){
        $username=$_POST['username'];
        $password=$_POST['password']; 
        $email=$_POST['email'];
    }


    $sql="INSERT INTO `user`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";
    echo $sql;
    $con->query($sql);
    
    $con->close();

?>