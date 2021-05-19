<?php
    require_once 'config/dbhelper.php';
    $sql = 'SELECT * FROM `category`';
    $cate = executeResult($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone sale </title>

    <!-- boootsrap area-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="index.css">

    <!-- End bootstrap -->

</head>

<body>
    <!-- header -->
    <div class="container-fluid">
        <div class="row header">
            <div class="col-md-3">
                <a href="index.php" style="width: 300px;">
                    <img src="Img/logo.png" alt="" class="img-fluid ml-5" width="170px">
                </a>
            </div>
            <div class="col-md-6">
                <form action="./search/search.php" method="GET">
                    <div class="input-group mt-4">
                        <input type="search" class="form-control" name="search" aria-label="Sizing example input" placeholder="Tìm kiếm tên sản phẩm">
                        <button type="submit " class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <?php
                    if(isset($_SESSION['user_id'])){
                        echo '
                        <a href="./User-cart/User-cart.php" class="float-right"><span class="material-icons">
                        shopping_cart
                        </span></a>

                        <a href="Login-Register/Logout.php" class="float-right">Logout
                        </a>
                        <a href="xulyrole.php" class="float-right mt-0">'.$_SESSION['name'].'</a>
                        ';
                    }else{
                        echo '
                        <a href="Login-Register/Login-Register.html" class="float-right">Login</a>
                        ';
                    }
                ?>
                

            </div>
        </div>

    </div>
    <!-- endheader -->

    <div class="container-fluid">
        <!-- Menu -->
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-md-3 font-menu2">
                    <div class="font-menu">
                        <ul class="font-list">
                            <?php
                                foreach($cate as $items){
                                    echo '
                                    <li><a href="./All-pro/all_pro.php?idcate='.$items['cate_id'].'" style="text-decoration: none; color: white; display:block;" href="?id='.$items['cate_id'].'">'.$items['cate_name'].'</a></li>
                                    ';
                                }
                            ?>
                            <li><a style="text-decoration: none; color: white; display:block;" href="Contact/contact.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Carosel -->
                <div class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Img/banner.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Img/banner1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Img/banner2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Img/banner3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- End-Carosel -->
            </div>
        </div>
        <!-- endmenu -->

        <div class="container-fluid content">
            <!-- TiltleProduct -->
            <?php
                foreach($cate as $item){
                    echo'
                    <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <div class="conatainer">
                                <div class="title mb-3 text-center">
                                    <span>'.$item['cate_name'].'</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="container">
                    <div class="row">';


                    $sql2 = 'SELECT * FROM product WHERE cate_id ='.$item['cate_id'].' limit 4';
                    $pro = executeResult($sql2);
                    foreach($pro as $item_pro){
                        echo '
                        <div class="col-md-3 text-center title-pro mt-4">
                        <div class="body-product py-3">
                            <a href="Pro-detail/pro-detail.php?id_pro='.$item_pro['pro_id'].'&id_cate='.$item_pro['cate_id'].'">
                                <img src="Img/proimg/'.$item_pro['img_link'].'" alt="" class="imgproduct img-fluid">
                                <hr>
                                <h6 class="mt-3 pro-title">'.$item_pro['pro_name'].'</h6>
                                <h5 class="mt-4 text-danger mb-5">'.number_format($item_pro['price'], 0, ',', '.').' ₫</h5>
                            </a>
                        </div>
                        </div>
                        ';
                    }

                    echo '
                    </div>
                </div>
                    ';
                    // $sql2 = 'SELECT product.*, category.* FROM product INNER JOIN category ON product.cate_id ='.$item['cate_id'].'';
                    // $pro = executeResult($sql2);

                }
                
            ?>
            <!-- End-ProductList -->


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
                            <label><a href="Contact/contact.php">Liên hệ với chúng tôi</a></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <!-- EndJavascript -->
        <script type="text/javascript" src="index.js"></script>
    </div>
</body>
</html>
<!-- lol duy -->