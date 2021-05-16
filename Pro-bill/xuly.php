<?php
    require_once '../config/dbhelper.php';
    $id=$_GET['id'];
    $sql="UPDATE `bill` SET `status`='1' WHERE id='$id'";
    execute($sql);
    header("location: ../Admin-bill/Admin-bill.php")
?>