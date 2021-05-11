<?php
    require_once '../config/check_ss.php';
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProjectF</title>
    <link rel="icon" href="../Img/manager.ico">
    <link rel="stylesheet" href="User-bill.css">
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
                        <td><a href="../index.php"><button type="button" class="btn"><i class="fas fa-home"></i>
                        <p>Trang chủ</p>
                    </button></a></td>
                        <td><a href="../User-cart/User-cart.php"><button type="button" class="btn"><i class="fas fa-shopping-basket"></i>
                        <p>Giỏ hàng</p>
                        </button></a></td>
                    </tr>
                    <tr>
                        <td><a href="../User-profile/User-profile.php"><button type="button" class="btn"><i class="fas fa-address-card"></i>
                        <p>Thông tin cá nhân</p>
                        </button></a></td>
                        <td><a href="../User-bill/User-bill.php"><button type="button" class="btn"><i class="fas fa-clipboard-list"></i>
                        <p>Hóa đơn</p>
                        </button></a></td>
                    </tr>
                    <tr>
                        <td><a href="#"><button type="button" class="btn"><i class="fas fa-university"></i>
                        <p>Ví điện tử</p>
                        </button></a></td>
                        <td><a href="../User-address/User-address.php"><button type="button" class="btn"><i class="fas fa-map-marker-alt"></i>
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
                <h1>Hóa đơn</h1>
                <div class="table-box">
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Ngày mua</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><a href="../Pro-bill/Pro-bill.html">0934294</a></td>
                            <td>20/4/1029</td>
                            <td>Hoàn thành</td>
                            <td>9032903$</td>
                            <td> <button>xoa</button></td>
                        </tr>
                    </table>
                </div>
                <div class="img1">
                    <img src="../Img/bill1.png" width="290px">
                </div>
                <div class="img2">
                    <img src="../Img/bill2.png" width="290px">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="User-bill.js"></script>
</body>

</html>