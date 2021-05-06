<?php
require_once '../config/dbhelper.php';
$id=$_GET['id'] ?? "";
$sql="select * from product where pro_id='$id'";
$row = executeSingle($sql);
echo'
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
        <div class="update-box" id="update-box">
            <form class="input-group" action="update.php" method="POST" enctype="multipart/form-data">
                <table class="table-update">
                <tr>
                <th><label for="id">Id</label></th>
                <td>
                    <input type="text" class="input-field" name="id" id="id" readonly placeholder="Name" value="'.$row['pro_id'].'">
                </td>
            </tr>
                    <tr>
                        <th><label for="Nameupdate">Name</label></th>
                        <td>
                            <input type="text" class="input-field" name="name" id="Nameupdate" placeholder="Name" value="'.$row['pro_name'].'">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Priceupdate">Price</label></th>
                        <td>
                            <input type="number" class="input-field" name="price" id="Priceupdate" placeholder="Price" value="'.$row['price'].'">
                        </td>
                    </tr>
                    <tr>
                        <th><label>Avatar</label></th>
                        <td>
                            <img src="../Img/proimg/'.$row['img_link'].'" width="200px" height="180px">
                        </td>
                    </tr>
                    <tr>
                        <th><label>Loại</label></th>
                        <td>
                            <select name="cateid">
                            ';
                            if(isset($_SESSION['user_id'])){
                            $sql = 'select * from category';
                            $abc = executeResult($sql);
                            foreach($abc as $items){
                                echo ' 
                                <option value="'.$items['cate_id'].'">'.$items['cate_name'].'</option>
                                ';
                            }
                        }
                            echo '
                            </select>
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
                            <textarea name="note" id="" cols="50" rows="10">'.$row['pro_content'].'</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td class="btn-save">
                            <button type="submit" name="sub-btn" class="sub-btn"><p>Save</p></button>
                            <button type="button" class="sub-btn" onclick="cancel()"><p>Đóng</p></button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="Admin-items.js"></script>
</body>
</html>
';
?>
