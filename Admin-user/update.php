<?php
require_once '../config/config.php';
$id = $_GET['id'] ?? "";

$sql="SELECT * FROM `user` where user_id='$id'";
$result=$con->query($sql);
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
        <link rel="stylesheet" href="Admin-user.css">
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

                <form class="input-group" action="xulyupdate.php" method="POST">
                    <table class="table-update">
                        <tr>
                            <th><label for="id">ID</label></th>
                            <td>
                            <input type="text" class="input-field" id="id" name="id" placeholder="Username" readonly value="'.$row['user_id'].'">
                             </td>
                        </tr>
                        <tr>
                            <th><label for="Username">Username</label></th>
                            <td>
                                <input type="text" class="input-field" id="Username" placeholder="Username" disabled value="'.$row['username'].'">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="Name">Name</label></th>
                            <td>
                            <input type="text" class="input-field" id="Name" placeholder="Name" disabled value="'.$row['name'].'">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="Email">Email</label></th>
                            <td>
                                <input type="email" class="input-field" id="Email" placeholder="Email" disabled value="'.$row['email'].'">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="Date">Date</label></th>
                            <td>
                                <input type="date" class="input-field" id="Date" disabled value="'.$row['birthday'].'">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="Phone number">Number</label></th>
                            <td>
                                <input type="number" class="input-field" id="Phone number" placeholder="Phone number" disabled value="'.$row['phone'].'">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="Address">Address</label></th>
                            <td>
                                <input type="text" class="input-field" id="Address" placeholder="Address" disabled value="'.$row['address'].'">
                            </td>
                        </tr>
                        <tr>
                            <th><label>Gender</label></th>
                            ';
                            if($row['gender'] == 'Male'){
                            echo'
                            <td class="input-gender">
                            <input disabled checked  type="radio" name="gender" id="Male" value="Male">
                            <label for="Male">Male</label>
                            <input disabled type="radio" name="gender" id="Female" value="Female">
                            <label for="Female">Female</label>
                            ';
                            }if($row['gender'] == 'Female'){
                            echo'
                            <td class="input-gender">
                            <input disabled type="radio" name="gender" id="Male" value="Male">
                            <label for="Male">Male</label>
                            <input disabled checked  type="radio" name="gender" id="Female" value="Female">
                            <label for="Female">Female</label>
                            </td>
                            ';
                            }
                            
                            echo'
                        </tr>
                        <tr>
                        <th><label>Role</label></th>
                        ';
                        if($row['role'] == '0'){
                        echo'
                        <td class="input-gender">
                        <input checked  type="radio" name="role" id="user" value="0">
                        <label for="user">User</label>
                        <input  type="radio" name="role" id="admin" value="1">
                        <label for="admin">Admin</label>
                        ';
                        }if($row['role'] == '1'){
                        echo'
                        <td class="input-gender">
                        <input  type="radio" name="role" id="user" value="0">
                        <label for="user">User</label>
                        <input checked  type="radio" name="role" id="admin" value="1">
                        <label for="admin">Admin</label>
                        </td>
                        ';
                        }
                        
                        echo'
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
    
        </div>
        <script type="text/javascript" src="Admin-user.js"></script>
    </body>
    
    </html>
    ';
}
?>

