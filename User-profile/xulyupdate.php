<?php
require_once '../config/config.php';
if(isset($_POST['sub-btn'])){
    $id=$_SESSION['user_id'];
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $birthday=$_POST['birthday'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
}
$sql="UPDATE `user` SET `name`='$name',`username`='$username',`email`='$email',`address`='$address',`gender`='$gender',`phone`='$phone',`birthday`='$birthday' WHERE user_id='$id'";
$con->query($sql);
header('Location: User-profile.php');
$con->close();
?>