<?php
   require_once '../config/dbhelper.php';
   $id=$_SESSION['user_id'];
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
                <form>
                    <table>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM cart where user_id='$id'";
                            $reusult = executeResult($sql);

                            foreach($reusult as $item){
                                echo '
                                <tr>
                                <td><img src="../Img/proimg/'.$item['avatar'].'" width="100px" height="100px"></td>
                                <td><a href="../Pro-detail/pro-detail.php">'.$item['ten_sp'].'</a></td>
                                <td>
                                <input type="number" style="width:40px;" onchange="change(this.value,'.$item['pro_id'].')" value="'.$item['soluong'].'"></input>
                                <td>'.number_format($item['price'],0,'.',',').'</td>
                                <td> <button >xoa</button></td>
                                </tr>
                                ';
                            }
                        ?>
                    </table>
                    </form>
                </div>
                <div class="payment">
                <?php
                    $sql1="SELECT SUM(price)as sum FROM `cart` WHERE user_id='$id'";
                    $reusult1 = executeResult($sql1);
                    foreach($reusult1 as $item){
                        echo'
                        <h2>Thành tiền: '.number_format($item['sum'],0,'.','.').'₫</h2>
                        ';
                    }
                ?>
                    <button><h2>Thanh toán</h2></button>
                </div>
                <div>
                    <div class="opt">
                        <form action="" method="GET">
                            <label>Địa chỉ:</label>
                            <select name="type" class="select">
                            <?php
                    $sql2="SELECT * FROM `user` WHERE user_id='$id'";
                    $reusult2 = executeSingle($sql2);
                        echo'
                        <option value="0">'.$reusult2['address'].'</option>
                        ';
                ?>
                               
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
    <script type="text/javascript" src="User-cart.js"></script>
</body>

</html>