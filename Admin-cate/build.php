<?php
require_once '../config/dbhelper.php';
if(isset($_POST['add-btn'])){
    $name=$_POST['catename1'];
    $sql="INSERT INTO `category`(`cate_name`) VALUES ('$name')";
    execute($sql);
    header('location: Admin-cate.php');
}
if(isset($_POST['up-btn'])){
    $id=$_POST['cateid'];
    $name=$_POST['catename2'];
    $sql="UPDATE `category` SET `cate_name`='$name' WHERE cate_id='$id'";
    execute($sql);
    header('location: Admin-cate.php');
}
?>