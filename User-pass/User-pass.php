<?php
    require_once '../config/dbhelper.php';
    require_once '../config/check_ss.php';

    $username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProjectF</title>
    <link rel="icon" href="../Img/manager.ico">
    <link rel="stylesheet" href="User-pass.css">
    <script src="https://kit.fontawesome.com/1fdc2deffc.js" crossorigin="anonymous"></script>
</header>

<body>
    <div class="all">
        <div class="title-box">
            <h1>Supreme</h1>
            <a href="../Login-Register/Logout.php">Log out</a>
            <a href="#"><?php echo $username;?></a>
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
                        <td><a href="../User-pass/User-pass.php"><button type="button" class="btn"><i class="fas fa-lock"></i>
                        <p>Đổi mật khẩu</p>
                        </button></a></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="data-box">
                <h1>Change password</h1>
                <form id="re-pass" class="input-group" action="changepass.php" method="POST">
                    <table class="table">
                        <tr>
                            <td><label for="old-pass">Old password</label></td>
                            <td><input type="password" class="input-field" id="old-pass" placeholder="Enter password" name="old-pass"></td>
                        </tr>
                        <tr>
                            <td><label for="new-pass">New password</label></td>
                            <td><input type="password" class="input-field" id="new-pass" placeholder="Enter password" name="new-pass"></td>

                        </tr>
                        <tr>
                            <td><label for="con-pass">Confirm password</label></td>
                            <td><input type="password" class="input-field" id="con-pass" placeholder="Enter password" name="con-pass"></td>
                        </tr>
                        <tr class="btn-save">
                            <td></td>
                            <td><button type="button" name="sub-btn" onclick="changepass()"><p>Save</p></button></td>
                        </tr>
                    </table>
                </form>
                <div class="small-pic"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="User-pass.js"></script>
</body>

</html>