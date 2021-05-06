<?php
require_once '../config/dbhelper.php';
if(isset($_POST['sub-btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $cateid=$_POST['cateid'];
    $avatar=$_FILES['img']['name'];
    $link="../Img/proimg/".$_FILES['img']['name'];
    $today = date("Y-m-d");  
    $note=$_POST['note'];
}
$sql="UPDATE `product` SET `cate_id`='$cateid',`pro_name`='$name',`price`='$price',`img_link`='$avatar',`created_at`='$today',`pro_content`='$note' WHERE pro_id='$id'";
execute($sql);
move_uploaded_file($_FILES['img']['tmp_name'],$link);
header("location: Admin-items.php")
?>