<?php
require_once '../config/dbhelper.php';
if(isset($_POST['sub-btn'])){
    $name=$_POST['nameadd'];
    $price=$_POST['priceadd'];
    $avatar=$_FILES['avtadd']['name'];
    $link="../Img/proimg/".$_FILES['avtadd']['name'];
    $cateid=$_POST['cateid'];
    $today = date("Y-m-d");  
    $note=$_POST['noteadd'];
}
$sql="INSERT INTO `product`(`cate_id`,`pro_name`, `price`, `img_link`, `created_at`, `pro_content`) VALUES ('$cateid','$name','$price','$avatar','$today','$note')";
execute($sql);
move_uploaded_file($_FILES['avtadd']['tmp_name'],$link);
header("location: Admin-items.php")
?>