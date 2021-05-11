<?php
require_once '../config/dbhelper.php';
    $id = $_GET['id'];
    $sql="DELETE FROM `product` WHERE cate_id='$id'";
    $sql1 = "DELETE FROM `category` WHERE cate_id='$id'";
    execute($sql);
    execute($sql1);
    header("location: Admin-cate.php")
?>