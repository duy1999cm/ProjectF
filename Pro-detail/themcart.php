<?php

    require_once '../config/dbhelper.php';
    $id = $_GET['id'];

    $sql = 'SELECT * FROM `product` WHERE pro_id = '.$id.'';
    $reusult = executeResult($sql);
    foreach($reusult as $item ){
        $name = $item['pro_name'];
        $anh = $item['img_link'];
        $sl = '1';
        $price = $item['price'] ;
    }
    $user_id =  $_SESSION['user_id'];

    $sql2 = "INSERT INTO `cart`(`ten_sp`, `pro_id`, `soluong`,`avatar`, `price`, `status`, `user_id`) VALUES ('$name','$id','1','$anh','$price','0','$user_id')";
    execute($sql2);

    header ('location: ../index.php');
?>