<?php
    require_once '../config/dbhelper.php';
    require_once '../config/check_ss.php';
    $id=$_GET['id'];
    $role=$_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boootsrap area-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="Pro-bill.css">
    <!-- End bootstrap -->
    <title>Detail_bill</title>

    <link rel="stylesheet" href="style_bill.css">
</head>

<body>
    <!-- header -->
    <div class="container-fluid">
        <div class="row header">
            <div class="col-md-3">
                <a href="../index.php" style="width: 300px;">
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
                <a href="" class="float-right">Login</a>
                <a href="../Login-Register/Logout.php" class="float-right">Logout</a>
            </div>
        </div>

    </div>
    <!-- endheader -->

    <!-- content -->
    <div class="container-fluid content">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4 item ">
                <?php
                    $sql="SELECT * FROM `bill` WHERE id='$id'";
                    $result=executeSingle($sql);
                    echo'
                    <h5 class="text-center my-3">Địa chỉ người nhận</h5>
                    <div class="address info p-4">
                        <h6>'.$result['name'].'</h6>
                        <span>
                            Địa chỉ: '.$result['address'].'<br>
                            Điện thoại: '.$result['phone'].'
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center my-3">Ngày đặt hàng</h5>
                    <div class="create_at info p-4">
                        <span>
                                '.$result['date'].'
                        </span>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <h5 class="text-center my-3">Hình thức thanh toán</h5>
                    <div class="payment info p-4">
                        <span>
                            '.$result['payment'].'
                        </span>
                    </div>
                    ';
                ?>

                </div>
            </div>

            <!-- tablelist -->
            <div class="row mt-4">
                <div class=" col product">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql1="SELECT * FROM `billinfo` WHERE idbill='$id'";
                            $result1=executeResult($sql1);
                            foreach($result1 as $items){
                                echo'
                                <tr>
                                <td scope="row">
                                    <img width="100px" src="../Img/proimg/'.$items['avatar'].'" alt="">
                                </td>
                                <td><span class="ml-3 d-block mt-4">'.$items['pro_name'].'</span></td>
                                <td><span class="ml-3 d-block mt-4">'.$items['soluong'].'</span></td>
                                <td class="text-danger"><span class="ml-3 d-block mt-4">'.number_format($items['price'],0,'.',',').'₫</span></td>';
                               echo' 
                                </tr>
                                ';
                            }
                            echo'
                            <tr>
                                <td class=" p-3 text-right" colspan="4">';
                                if($role==1){
                                    echo '
                                    <a href="xuly.php?id='.$id.'">
                                         <button type="button" class="w-100 btn btn-success">HOÀN THÀNH ĐƠN</button>
                                    </a>
                                    ';
                                }
                                echo'</td>
                            </tr>
                            ';
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- tablelist -->

            <div class="row ">
                <div class="col-md-10 text-right pay py-3">
                    <h6>Thành tiền:</h6>
                </div>
                <div class="col-md-2 text-right pay py-3">
                <?php
                    echo'
                    <h6 class="text-danger">'.number_format($result['sum'],0,'.',',').'₫</h6>
                    ';
                ?>
                </div>

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
        <!-- footer -->
    </div>
    <!-- content -->


</body>

</html>