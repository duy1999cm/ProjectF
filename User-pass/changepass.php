<?php
require_once '../config/config.php';
$id=$_SESSION['user_id'];
if(isset($_POST['sub-btn'])){
    $newpass=md5($_POST['new-pass']);
}
$sql="UPDATE `user` SET `password`='$newpass' WHERE user_id=$id";
$result=$con->query($sql);
$con->close();
header("location: User-pass.php");
?>