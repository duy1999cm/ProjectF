<?php
require_once '../config/dbhelper.php';
$id=random_int(100000,999999);
$userid=$_SESSION['user_id'];
$username=$_SESSION['name'];
$address=$_GET['address'];
$payment=$_GET['payment'];
$sum=$_GET['sum'];
$today = date("Y-m-d");  
if($address==""){
    echo'
        Bạn chưa cập nhật thông tin!
    ';
}else{
    $sql4="SELECT * FROM `user` WHERE user_id='$userid'";
    $reusult1=executeSingle($sql4);
    $name=$reusult1['name'];
    $phone=$reusult1['phone'];
    $sql="INSERT INTO `bill`(`id`,`name`,`username`, `address`,`phone`,`date`, `payment`, `sum`) VALUES ('$id','$name','$username','$address','$phone','$today','$payment','$sum')";
    execute($sql);
    $sql1 = "SELECT * FROM cart where user_id='$userid'";
    $reusult = executeResult($sql1);
    foreach($reusult as $items){
        $namesp=$items['ten_sp'];
        $cateid=$items['cate_id'];
        $soluong=$items['soluong'];
        $avatar=$items['avatar'];
        $price=$items['price'];
        $sql2="INSERT INTO `billinfo`(`idbill`, `pro_name`, `cate_id`, `soluong`, `avatar`, `price`) VALUES ('$id','$namesp','$cateid','$soluong','$avatar','$price')";
        execute($sql2);
    }
    $sql3="DELETE FROM `cart` WHERE user_id='$userid'";
    execute($sql3);
    echo'Thanh toán thành công!';
}
?>