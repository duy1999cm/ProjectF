<?php
require_once '../config/dbhelper.php';
$id=$_GET['id'];
$sql="DELETE FROM `cart` where pro_id='$id'";
execute($sql);
echo $sql;
header("location: User-cart.php");
?>