<?php 
require_once '../config/dbhelper.php';
$id=$_GET['id'];
$num=$_GET['num'];
$sql1="select * from `product` where pro_id='$id'";
$row= executeSingle($sql1);
$price=$row['price'];
$tong=0;
$tong=$price * $num;
$sql="UPDATE `cart` SET `soluong`='$num',`price`='$tong' where pro_id='$id'";
execute($sql);

?>