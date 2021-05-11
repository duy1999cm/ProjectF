<?php
require_once '../config/dbhelper.php';
if(isset($_POST['delete-btn'])){
    $id = $_POST['delete'];
    $sql1="DELETE from product WHERE cate_id=".$deleteid;
    foreach($id as $deleteid){
        $sql = "DELETE from category WHERE cate_id=".$deleteid;
        execute($sql);
        echo $sql;
    }
    // header('location: Admin-cate.php');
}
if(isset($_POST['up-btn'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    foreach($name as $catename){
    $sql = "UPDATE `category` SET `cate_name`='$catename' WHERE cate_id='$id'";
    // execute($sql);
    echo $sql;
    }
}
    // header('location: Admin-cate.php');
?>