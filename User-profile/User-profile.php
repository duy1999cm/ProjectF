<?php
require_once '../config/config.php';
require_once '../config/check_ss.php';

$id=$_SESSION['user_id'];
$us=$_SESSION['name'];
$sql="SELECT * FROM `user` where user_id='$id'";
$result=$con->query($sql);
$con->close();
if ($result->num_rows>0) {
    $row=$result->fetch_assoc();
    echo'
    <!DOCTYPE html>
    <html>
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ProjectF</title>
        <link rel="icon" href="../Img/manager.ico">
        <link rel="stylesheet" href="User-profile.css">
        <script src="https://kit.fontawesome.com/1fdc2deffc.js" crossorigin="anonymous"></script>
    </header>
    
    <body>
        <div class="all">
            <div class="title-box">
                <h1>Supreme</h1>
                <a href="../Login-Register/Logout.php">Log out</a>
                <a href="#">'.$us.'</a>
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
                    <h1>User profile</h1>
                    <form id="profile" class="input-group" action="xulyupdate.php" method="POST">
                        <table class="table">
                        <tr>
                                <th>
                                    <label for="Username">User name</label></th>
                                <td class="input-name">
                                    <input type="text" class="input-field" placeholder="User name" name="username" value="'.$row['username'].'">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="Name">Name</label></th>
                                <td class="input-name">
                                    <input type="text" class="input-field" placeholder="Full name" name="name" value="'.$row['name'].'">
                                </td>
                            </tr>
                            <tr>
                                <th><label for="Email">Email</label></th>
                                <td>
                                    <input type="email" class="input-field" placeholder="Email" name="email" value="'.$row['email'].'">
                                </td>
                            </tr>
                            <tr>
                                <th><label for="Date">Date</label></th>
                                <td>
                                    <input type="date" class="input-field" name="birthday" value="'.$row['birthday'].'">
                                </td>
                            </tr>
                            <tr>
                                <th><label for="Phone number">Phone</label></th>
                                <td>
                                    <input type="number" class="input-field" placeholder="Phone number" name="phone" value="'.$row['phone'].'">
                                </td>
                            </tr>
                            <tr>
                                <th><label for="Address">Address</label></th>
                                <td>
                                    <input type="text" class="input-field" placeholder="Address" name="address" value="'.$row['address'].'">
                                </td>
                            </tr>
                            <tr>
                                <th><label>Gender</label></th>
                                ';
                                if($row['gender'] == ''){
                                    echo'
                                    <td class="input-gender">
                                    <input type="radio" name="gender" id="Male" value="Male">
                                    <label for="Male">Male</label>
                                    <input type="radio" name="gender" id="Female" value="Female">
                                    <label for="Female">Female</label>
                                    ';
                                }else if($row['gender'] == 'Male'){
                                    echo'
                                    <td class="input-gender">
                                    <input checked  type="radio" name="gender" id="Male" value="Male">
                                    <label for="Male">Male</label>
                                    <input type="radio" name="gender" id="Female" value="Female">
                                    <label for="Female">Female</label>
                                    ';
                                }else if($row['gender'] == 'Female'){
                                    echo'
                                    <td class="input-gender">
                                    <input type="radio" name="gender" id="Male" value="Male">
                                    <label for="Male">Male</label>
                                    <input checked  type="radio" name="gender" id="Female" value="Female">
                                    <label for="Female">Female</label>
                                    </td>
                                    ';
                                    }
                                echo'
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td class="btn-save">
                                    <button type="submit" name="sub-btn" class="sub-btn"><p>Save</p></button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="User-profile.js"></script>
    </body>
    
    </html>
    ';
}
?>
