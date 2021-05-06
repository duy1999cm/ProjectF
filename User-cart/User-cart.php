<?php
   $id = $_GET['id'];
   echo $id;
   require_once '../config/dbhelper.php';
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProjectF</title>
    <link rel="icon" href="../Img/manager.ico">
    <link rel="stylesheet" href="User-cart.css">
    <script src="https://kit.fontawesome.com/1fdc2deffc.js" crossorigin="anonymous"></script>
</header>

<body>
    <div class="all">
        <div class="title-box">
            <h1>Supreme</h1>
            <a href="#">Log out</a>
            <a href="#">Account</a>
        </div>
        <div class="big-box">
            <div class="btn-box">
                <table>
                    <tr>
                        <td><a href="../index.html"><button type="button" class="btn"><i class="fas fa-home"></i>
                        <p>Trang chủ</p>
                    </button></a></td>
                        <td><a href="../User-cart/User-cart.html"><button type="button" class="btn"><i class="fas fa-shopping-basket"></i>
                        <p>Giỏ hàng</p>
                        </button></a></td>
                    </tr>
                    <tr>
                        <td><a href="../User-profile/User-profile.html"><button type="button" class="btn"><i class="fas fa-address-card"></i>
                        <p>Thông tin cá nhân</p>
                        </button></a></td>
                        <td><a href="../User-bill/User-bill.html"><button type="button" class="btn"><i class="fas fa-clipboard-list"></i>
                        <p>Hóa đơn</p>
                        </button></a></td>
                    </tr>
                    <tr>
                        <td><a href="#"><button type="button" class="btn"><i class="fas fa-university"></i>
                        <p>Ví điện tử</p>
                        </button></a></td>
                        <td><a href="../User-address/User-address.html"><button type="button" class="btn"><i class="fas fa-map-marker-alt"></i>
                        <p>Địa chỉ</p>
                        </button></a></td>
                    </tr>
                    <tr>
                        <td><a href="../User-pass/User-pass.html"><button type="button" class="btn"><i class="fas fa-lock"></i>
                        <p>Đổi mật khẩu</p>
                        </button></a></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="data-box">
                <h1>Giỏ hàng</h1>
                <div class="table-box">
                    <table>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Action</th>
                        </tr>

                        <?php
                            $sql = 'SELECT * FROM `product` WHERE pro_id = '.$id.'';
                            $reusult = executeResult($sql);

                            foreach($reusult as $item){
                                echo '
                                <tr>
                                <td><img src="../Img/bk1.jpg" width="100px"></td>
                                <td><a href="../Pro-detail/pro-detail.html">'.$item['pro_name'].'</a></td>
                                <td><button>+</button> 3
                                    <button>-</button></td>
                                <td>0934850934</td>
                                <td> <button>xoa</button></td>
                                </tr>
                                ';
                            }
                        ?>
                    </table>
                </div>
                <div class="payment">
                    <h2>Thành tiền: 325252626</h2>
                    <button><h2>Thanh toán</h2></button>
                </div>
                <div>
                    <div class="opt">
                        <form action="" method="GET">
                            <label>Địa chỉ:</label>
                            <select name="type" class="select">
                                <option value="tructiep">le khanh Duy 091846124234 12/2 dao duy tu ninh kieu can tkjhiuguiho viet nam</option>
                                <option value="atm">Khác</option>
                                <option value="atm">Khác</option>
                                <option value="atm">Khác</option>
                                <option value="atm">Khác</option>
                                <option value="atm">Khác</option>
                            </select>
                            <br>
                            <label>Phương thức thanh toán:</label>
                            <select name="type">
                            <option value="tructiep">Trực tiếp</option>
                            <option value="atm">ATM</option>
                            <option value="vidientu">Ví điện tử</option>
                        </select>
                        </form>
                    </div>
                    <div class="atm1">
                        <table>
                            <tr>
                                <td>
                                    <input type="radio" name="atm1" value="">
                                    <img src="../Img/vcb.png" width="100px">
                                </td>
                                <td>
                                    <input type="radio" name="atm1" value="">
                                    <img src="../Img/vcb.png" width="100px">
                                </td>
                                <td>
                                    <input type="radio" name="atm1" value="">
                                    <img src="../Img/vcb.png" width="100px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="atm1" value="">
                                    <img src="../Img/vcb.png" width="100px">
                                </td>
                                <td>
                                    <input type="radio" name="atm1" value="">
                                    <img src="../Img/vcb.png" width="100px">
                                </td>
                                <td>
                                    <input type="radio" name="atm1" value="">
                                    <img src="../Img/vcb.png" width="100px">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="atm2">
                        <table>
                            <tr>
                                <td>
                                    <input type="radio" name="atm2" value="">
                                    <img src="../Img/momo.png" width="50px">
                                </td>
                                <td>
                                    <input type="radio" name="atm2" value="">
                                    <img src="../Img/momo.png" width="50px">
                                </td>
                                <td>
                                    <input type="radio" name="atm2" value="">
                                    <img src="../Img/momo.png" width="50px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="atm2" value="">
                                    <img src="../Img/momo.png" width="50px">
                                </td>
                                <td>
                                    <input type="radio" name="atm2" value="">
                                    <img src="../Img/momo.png" width="50px">
                                </td>
                                <td>
                                    <input type="radio" name="atm2" value="">
                                    <img src="../Img/momo.png" width="50px">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>