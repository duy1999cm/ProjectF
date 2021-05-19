<?php
    // require_once '../config/dbhelper.php';
    require_once '../config/config.php';
    $id = $_GET['id'];

    if(isset( $_SESSION['user_id'])){
        $user_id =  $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    if($user_id==''){
        echo'
            <script>alert("Vui lòng đăng nhập để mua sản phẩm này");</script>
        ';
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        // echo 'Vui lòng đăng nhập để mua sản phẩm này';
    }else{
        $sql = "select * from `cart` where pro_id='$id'";
        $reusult=$con->query($sql);
    
        if($reusult->num_rows>0){
            header("location: ../User-cart/User-cart.php");
        }else{
    
        $sql1 = 'SELECT * FROM `product` WHERE pro_id = '.$id.'';
        $reusult1 = $con->query($sql1);
        // foreach($reusult as $item ){
            if($reusult1->num_rows>0){
            $row = $reusult1->fetch_assoc();
            $name = $row['pro_name'];
            $anh = $row['img_link'];
            $price = $row['price'] ;
            $cate=$row['cate_id'];
            }
        // }
        $sql2 = "INSERT INTO `cart`(`ten_sp`, `pro_id`,`cate_id`, `soluong`,`avatar`, `price`, `status`, `user_id`) VALUES ('$name','$id','$cate','1','$anh','$price','0','$user_id')";
        $reusult2=$con->query($sql2);
        header("location: ../User-cart/User-cart.php");
    }
    }

?>