<!-- <?php
require_once '../config/dbhelper.php';
// $sql="SELECT * FROM `user`";
// $result=$con->query($sql);
// if ($result->num_rows>0) {
//     echo'

//     ';
// }
?> -->
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
            <a href="#">Log out</a>
            <a href="../Admin-main/Admin-main.html">Account</a>
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
                            <input type="file" name="avtadd" id="Avataradd">
                            
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
        <div class="update-box" id="update-box">
            <form class="input-group" action="" method="POST">
                <table class="table-update">
                    <tr>
                        <th><label for="IDupdate">ID</label></th>
                        <td>
                            <input type="text" class="input-field" id="IDupdate" placeholder="ID" value="">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Nameupdate">Name</label></th>
                        <td>
                            <input type="text" class="input-field" id="Nameupdate" placeholder="Name" value="">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Priceupdate">Price</label></th>
                        <td>
                            <input type="number" class="input-field" id="Priceupdate" placeholder="Price" value="">
                        </td>
                    </tr>
                    <tr>
                        <th><label>Avatar</label></th>
                        <td>
                            <img src="../Img/pass1.png" width="200px">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Avatarupdate">Avatar</label></th>
                        <td>
                            <input type="file" name="img" id="Avatarupdate">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Noteupdate">Note</label></th>
                        <td>
                            <textarea name="textarea" id="" cols="50" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td class="btn-save">
                            <button type="submit" class="sub-btn"><p>Save</p></button>
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
                        <td><a href="../index.html"><button type="button" class="btn"><i class="fas fa-home"></i>
                        <p>Trang chủ</p>
                    </button></a></td>
                        <td><a href="../Admin-user/Admin-user.html"><button type="button" class="btn"><i class="fas fa-list"></i>
                        <p>User manager</p>
                        </button></a></td>
                    </tr>
                    <tr>
                        <td><a href="../Admin-items/Admin-items.html"><button type="button" class="btn"><i class="fas fa-sitemap"></i>
                        <p>Update items</p>
                        </button></a></td>
                        <td><a href="../Admin-bill/Admin-bill.html"><button type="button" class="btn"><i class="fas fa-money-bill-alt"></i>
                            <p>Bill manager</p>
                            </button></a></td>
                    </tr>
                </table>
            </div>
            <div class="data-box">
                <h1>Update items</h1>
                <div class="table-box">
                    <form action="" method="POST">
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
                                        <button type="button" onclick="more()">Chi tiết</button>
                                        <input type="checkbox" name="delete['.$items['pro_id'].']" value="username">
                                    </td>
                                </tr>
                                    ';
                                }
                            }
                            ?>
                        </table>
                    </form>
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
                    <button type="button" onclick="xoa()"><i class="far fa-trash-alt"></i></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="Admin-items.js"></script>
</body>

</html>