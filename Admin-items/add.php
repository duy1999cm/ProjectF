<?php
require_once '../config/config.php';
if(isset($_POST['sub-btn'])){
    $name=$_POST[''];
}
$sql="INSERT INTO `product`(`pro_name`, `price`, `img_link`, `created_at`, `pro_content`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
$result=$con->query($sql);
$con->close();
header("location: Admin-items.php")
?>