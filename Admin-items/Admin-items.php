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

    <link rel="stylesheet" href="Admin-items.css">
    <script src="https://kit.fontawesome.com/1fdc2deffc.js" crossorigin="anonymous"></script>
</header>

<body>
    <div class="all">
        <div class="title-box">
            <h1>Supreme</h1>
            <a href="../Login-Register/Logout.php">Log out</a>
            <a href="../Admin-main/Admin-main.php">
            <?php
                echo $username;
            ?>
            </a>
        </div>
        <div class="add-box" id="add-box">
            <form id="add1-box" class="input-group" action="add.php" method="POST" enctype="multipart/form-data">
                <table class="table-add">
                    <tr>
                        <th><label for="Nameadd">Name</label></th>
                        <td>
                            <input type="text" class="input-field" id="Nameadd" placeholder="Name" name="nameadd">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Priceadd">Price</label></th>
                        <td>
                            <input type="number" class="input-field" id="Priceadd" placeholder="Price" name="priceadd">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Avataradd">Avatar</label></th>
                        <td>
                            <input type="file" name="avtadd" id="Avataradd" accept=".jpg, .jpeg, .png">
                            
                        </td>
                    </tr>
                    <tr>
                        <th><label for="cate">Loại</label
                        ></th>
                        <td>
                            <select name="cateid">
                            <?php
                                if(isset($_SESSION['user_id'])){
                                $sql = 'select * from category';
                                $abc = executeResult($sql);
                                foreach($abc as $items){
                                    echo ' 
                                    <option value="'.$items['cate_id'].'">'.$items['cate_name'].'</option>
                                    ';
                                }
                            }
                            ?>
                            </select>
                            
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Noteadd">Note</label></th>
                        <td>
                            <textarea name="noteadd" id="" cols="50" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td class="btn-save">
                            <button type="submit" class="sub-btn" name="sub-btn"><p>Add</p></button>
                            <button type="button" class="sub-btn" onclick="cancel()"><p>Đóng</p></button>
                        </td>
                    </tr>
                </table>
            </form>
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
                        <td><a href="../Admin-cate/Admin-cate.php"><button type="button" class="btn"><i class="fas fa-sitemap"></i>
                        <p>Category</p>
                        </button></a></td>
                    </tr>
                </table>
            </div>
            <div class="data-box">
                <h1>Update items</h1>
                <div class="table-box">
                    <form action="xoa.php" method="POST">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Button</th>
                            </tr>
                            <?php
                                if(isset($_SESSION['user_id'])){
                                $sql = 'select * from product';
                                $abc = executeResult($sql);
                                foreach($abc as $items){
                                    echo ' 
                                    <tr>
                                    <td>'.$items['pro_id'].'</td>
                                    <td>'.$items['pro_name'].'</td>
                                    <td>'.number_format($items['price'],0,',','.').'₫</td>
                                    <td>
                                        <a href="chitiet.php?id='.$items['pro_id'].'"><button type="button">Chi tiết</button></a>
                                        <input type="checkbox" name="delete[]" value="'.$items['pro_id'].'">
                                    </td>
                                </tr>
                                    ';
                                }
                            }
                            ?>
                        </table>
                </div>
                <div class="search-box">
                    <table>
                        <tr>
                            <td>
                                <input type="text" placeholder="ID">
                            </td>
                            <td>
                                <button type="button">Search</button>
                            </td>
                            <td>
                                <button type="button" onclick="add()">Add</button>
                            </td>
                        </tr>
                    </table>
                </div>
                    <div class="delete-box">
                        <button name="sub-btn" type="submit"><i class="far fa-trash-alt"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="Admin-items.js"></script>
</body>

</html>