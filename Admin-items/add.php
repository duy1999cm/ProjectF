<?php
require_once '../config/dbhelper.php';
if(isset($_POST['sub-btn'])){
    $name=$_POST['nameadd'];
    $price=$_POST['priceadd'];
    $avatar=$_FILES['avtadd']['name'];
    $link="../Img/proimg".$_FILES['avtadd']['name'];
    $today = date("Y-m-d");  
    $note=$_POST['noteadd'];
}
$sql="INSERT INTO `product`(`cate_id`,`pro_name`, `price`, `img_link`, `created_at`, `pro_content`) VALUES ('$name','$price','$avatar','$today','$note')";
echo $sql;
$result=$con->query($sql);
move_uploaded_file($_FILES['avtadd']['tmp_name'],$link);
$con->close();
// header("location: Admin-items.php")
?>