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
    <link rel="stylesheet" href="Admin-bill.css">
    <script src="https://kit.fontawesome.com/1fdc2deffc.js" crossorigin="anonymous"></script>
</header>

<body>
    <div class="all">
        <div class="title-box">
            <h1>Supreme</h1>
            <a href="../index.php">Log out</a>
            <a href="../Admin-main/Admin-main.php">
            <?php
                echo $username;
            ?>
            </a>
        </div>
        <div class="big-box" id="big-box">
            <div class="btn-box">
                <table>
                    <tr>
                        <td><a href="../index.php"><button type="button" class="btn"><i class="fas fa-home"></i>
                        <p>Trang chủ</p>
                    </button></a></td>
                        <td><a href="../Admin-user/Admin-user.php"><button type="button" class="btn"><i class="fas fa-list"></i>
                        <p>User manager</p>
                        </button></a></td>
                    </tr>
                    <tr>
                        <td><a href="../Admin-items/Admin-items."><button type="button" class="btn"><i class="fas fa-sitemap"></i>
                        <p>Update items</p>
                        </button></a></td>
                        <td><a href="../Admin-bill/Admin-bill.php"><button type="button" class="btn"><i class="fas fa-money-bill-alt"></i>
                            <p>Bill manager</p>
                            </button></a></td>
                    </tr>
                    <tr>
                    <td><a href="../Admin-items/Admin-items.php"><button type="button" class="btn"><i class="fas fa-sitemap"></i>
                    <p>Category</p>
                    </button></a></td>
                </tr>
                </table>
            </div>
            <div class="data-box">
                <h1>User bill</h1>
                <div class="table-box">
                    <form action="" method="POST">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Ngày mua</th>                                
                                <th>Trạng thái</th>
                                <th>Tổng tiền</th>
                            </tr>
                            <?php
                            $sql="SELECT * FROM `bill`";
                            $result=executeResult($sql);
                            foreach($result as $items){
                                echo'
                                <tr>
                                <td><a href="../Pro-bill/Pro-bill.php">'.$items['id'].'</a></td>
                                <td>'.$items['username'].'</td>
                                <td>'.$items['date'].'</td>
                                ';
                                if($items['status']==0){
                                echo'
                                <td>Đang xử lý</td>
                                ';
                                }
                                else if($items['status']==1){
                                    echo'
                                    <td>Hoàn thành</td>
                                    ';
                                }
                                echo'
                                <td>'.number_format($items['sum'],0,'.',',').'</td>
                                </tr>
                                ';
                            }
                        ?>
                        </table>
                    </form>
                </div>
                <div class="search-box">
                    <table>
                        <tr>
                            <td>
                                <input type="text" placeholder="Username">
                            </td>
                            <td>
                                <button type="button">Search</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Date">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="delete-box">
                    <button type="button">
                        <i class="far fa-trash-alt"></i></button>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="Admin-bill.js"></script>
</body>

</html>