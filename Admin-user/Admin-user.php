<?php
require_once '../config/config.php';
require_once '../config/check_ss.php';

$username=$_SESSION['name'];
$sql="SELECT * FROM `user`";
$result=$con->query($sql);
if ($result->num_rows>0) {
    echo'
        <!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProjectF</title>
    <link rel="icon" href="../Img/manager.ico">
    <link rel="stylesheet" href="Admin-user.css">
    <script src="https://kit.fontawesome.com/1fdc2deffc.js" crossorigin="anonymous"></script>
</header>

<body>
    <div class="all">
        <div class="title-box">
            <h1>Supreme</h1>
            <a href="../Login-Register/Logout.php">Log out</a>
            <a href="../Admin-main/Admin-main.php">'.$username.'</a>
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
                        <td><a href="../Admin-items/Admin-items.php"><button type="button" class="btn"><i class="fas fa-sitemap"></i>
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
                <h1>User manager</h1>
                <div class="table-box">
                    <form action="xoa.php" method="POST">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Button</th>
                            </tr>
                            ';
                            while($row = $result->fetch_assoc()){
                                echo'
                                <tr>
                                <td>'.$row['user_id'].'</td>
                                <td>'.$row['username'].'</td>
                                <td>'.$row['email'].'</td>


                                <td>
                                    <a href="update.php?id='.$row['user_id'].'">Chi tiết</a>
                                    <input type="checkbox" name="delete[]" value="'.$row['user_id'].'">
                                </td>
                            </tr>
                                ';
                            }
                            echo'
                        </table>

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
                    </table>
                </div>
                <div class="delete-box">
                        <button type="submit">
                            <i class="far fa-trash-alt"></i>
                        </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
    ';
}
?>

<?php
$con->close();
?>