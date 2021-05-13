<?php
require_once '../config/dbhelper.php';
require_once '../config/check_ss.php';

$username=$_SESSION['name'];
$sql="SELECT * FROM `category`";
$result=executeResult($sql);
    echo'
        <!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProjectF</title>
    <link rel="icon" href="../Img/manager.ico">
    <link rel="stylesheet" href="Admin-cate.css">
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
                <h1>Category</h1>
                <div class="table-box">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Button</th>
                            </tr>
                            ';
                            foreach($result as $row){
                                echo'
                                <tr>
                                <td>'.$row['cate_id'].'</td>
                                <td>'.$row['cate_name'].'</td>
                                <td>
                                    <button type="button" onclick="del('.$row['cate_id'].')"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                                ';
                            }
                            echo'
                        </table>

                </div>
                <form id="search-form" action="build.php" method="POST">
                <div class="search-box">
                    <table>
                        <tr>
                            <td>
                                <input type="text" placeholder="Catename" name="catename1"></td>
                            </td>
                            <td>
                                <button type="button">Search</button>
                            </td>
                            <td>
                                <button type="submit" name="add-btn" onclick="add()">Add</button>
                            </td>
                        </tr>
                    </table>
                </div>
                </form>
                <form id="up-form" action="build.php" method="POST">
                <div class="up-box">
                    <table>
                        <tr>
                            <td>
                                <input type="text" placeholder="id" name="cateid"></td>
                            </td>
                            <td>
                            <button type="submit" name="up-btn" onclick="update()">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="text" placeholder="Catename" name="catename2"></td></td>
                        </tr>
            </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="Admin-cate.js" type="text/javascript"></script>
</body>
</html>
    ';
                        
?>
