<?php
require_once '../config/config.php';
$id=$_SESSION['user_id'];
    $oldpass=md5($_POST['oldpass']);
    $newpass=md5($_POST['newpass']);
$sql="SELECT * FROM `user` WHERE user_id='$id' and password='$oldpass'";
$result=$con->query($sql);
if($result->num_rows>0){
$sql1="UPDATE `user` SET `password`='$newpass' WHERE user_id=$id";
$con->query($sql1);
echo'Đã đổi mật khẩu!';
}else{
    echo'Sai mật khẩu cũ!';
}
$con->close();
// ?>