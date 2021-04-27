<?php
require_once '../config/config.php';
$id=$_POST['id'];
$role=$_POST['role'];
$sql="UPDATE `user` SET `role`='$role' where user_id='$id'";
$con->query($sql);
header('Location: Admin-user.php');
$con->close();
?>