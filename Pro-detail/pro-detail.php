<?php
    require_once '../config/dbhelper.php';
    $idpro = $_GET['id_pro'];
    $idcate = $_GET['id_cate'];
    $sql = 'SELECT * FROM `product` WHERE pro_id = '.$idpro.' ';
    $result =  executeResult($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boootsrap area-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

    <!-- <link rel="stylesheet" href="stylye.css"> -->
    <!-- End bootstrap -->
    <link rel="stylesheet" href="pro-detail.css">
    <title>ProducDetail</title>
</head>

<body>
    <!-- header -->
    <div class="container-fluid ">
        <div class="row header">
            <div class="col-md-3">
                <a href="../index.html" style="width: 300px;">
                    <img src="../Img/logo.png" alt="" class="img-fluid ml-5" width="170px">
                </a>
            </div>
            <div class="col-md-6">
                <form action="">
                    <div class="input-group mt-4">
                        <input type="search" class="form-control" aria-label="Sizing example input" placeholder="Search here">
                        <button type="submit " class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
            <?php
                    if(isset($_SESSION['user_id'])){
                        echo '
                        <a href="../User-cart/User-cart.php" class="float-right"><span class="material-icons">
                            <span class="material-icons">
                        shopping_cart
                        </span></a>
                        </span></a>

                        <a href="../Login-Register/Logout.php" class="float-right">Logout
                        </a>
                        <a href="xulyrole.php" class="float-right mt-0">'.$_SESSION['name'].'</a>
                        ';
                    }else{
                        echo '
                        <a href="../Login-Register/Login-Register.html" class="float-right">Login</a>
                        ';
                    }
                ?>
            </div>
        </div>

    </div>
    <!-- endheader -->

    <div class="container-fluid content mt-3 pt-3">
        <?php
            foreach ($result as $prodetail){
                echo '
                <div class="container area-2">
                <div class="row ">
                    <div class="col-md-4 my-3 text-right">
                        <img src="../Img/proimg/'.$prodetail['img_link'].'" alt="" class="img-fluid">
                    </div>
    
                    <div class="col-md-5 mt-3 ">
                        <!-- Producttitle -->
                        <div class="pro_title">
                            <h3><span>'.$prodetail['pro_name'].'</span></h3>
                        </div>
                        <!-- Productprice -->
                        <div class="pro_price text-danger">
                            <h2><span>'.number_format($prodetail['price'], 0, ',', '.').' ₫</span>
                            </h2>
                            <p><i>(Đã bao gồm VAT)</i></p>
                        </div>
                        <!-- ProducDetail -->
                        <div class="pro_detail">
                            <div class="de_conntent mt-3">
                                <p>
                                     '.$prodetail['pro_content'].'
                                </p>
                            </div>
                        </div>
                        <!-- AddToCart -->
                        <div class="add_cart mt-5">
                                <button class="btn btn-warning pro_btn">MUA SẢN PHẨM NGAY <br> Giao hàng nhanh</button>
                                <button class="btn btn-danger pro_btn" onclick="them('.$idpro.')">THÊM VÀO GIỎ HÀNG <br>Xem sản phẩm sau</button>
                        </div>
    
                        <div class="camket my-5">
                            <img src="../img/01.png" alt="" class="img-fluid">
                        </div>
    
    
                    </div>
    
                    <div class="col-md-3 info">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Thông tin đặt hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Emai: email@gmail.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SĐT: 0974.xxx.xxx
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Địa chỉ: 298 Nguyễn Thiện Thuật, P3, Q3 , TP. Hồ Chí Minh
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                ';
            }
        ?>

        <!-- More -->
        <div class="container mt-3">
            <div class="row">
                <div class="container title-pro ">
                    <div class="col-md-4 mt-3 title-pro ">
                        <div class="conatainer">
                            <div class="title mb-3 text-center">
                                <span>CÁC SẢN PHẨM LIÊN QUAN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                    $sql2 = 'SELECT * FROM `product` WHERE cate_id = '.$idcate.' limit 4';
                    $more_pro = executeResult($sql2);

                    foreach($more_pro as $items){
                        echo '
                        <div class="col-md-3 text-center title-pro">
                        <div class="body-product">
                            <a href="">
                                <img src="../Img/proimg/'.$items['img_link'].'" alt="" class="imgproduct">
                                <hr>
                                <h6 class="mt-3 pro-title">'.$items['pro_name'].'</h6>
                                <h5 class="mt-4 text-danger mb-5">'.number_format($items['price'], 0, ',', '.').' ₫</h5>
                            </a>
                        </div>
                        </div>
                        ';
                    }

                ?>
            </div>
        </div>

        <!-- footer -->
        <div id="footer" class="nav-bottom mt-4">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-sm-4 col-md-4 text-center">
                        <a href="tel:0326175888">
                            <label>KHU VỰC MIỀNBẮC</label>
                            <p>0326.175.888</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 text-center">
                        <a href="mail:sale@mivietnam.vn">
                            <label>EMAIL ĐẶT HÀNG</label>
                            <p>sale@mivietnam.vn</p>
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 text-center">
                        <a href="0328175888" target="_blank">
                            <label>KHU VỰC PHÍA NAM</label>
                            <p>0328.175.888</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="pro-detail.js"></script>
</body>

</html>