

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
            <form class="input-group" action="" method="POST">
                <table class="table-update">
                    <tr>
                        <th><label for="Username">Username</label></th>
                        <td>
                            <input type="text" class="input-field" id="Username" placeholder="Username">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Password">Password</label></th>
                        <td>
                            <input type="text" class="input-field" id="Password" placeholder="Password">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="First name">Name</label></th>
                        <td class="input-name">
                            <input type="text" class="input-field" id="First name" placeholder="First name">
                            <input type="text" class="input-field" placeholder="Last name">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Email">Email</label></th>
                        <td>
                            <input type="email" class="input-field" id="Email" placeholder="Email">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Date">Date</label></th>
                        <td>
                            <input type="date" class="input-field" id="Date">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Phone number">Number</label></th>
                        <td>
                            <input type="number" class="input-field" id="Phone number" placeholder="Phone number">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Address">Address</label></th>
                        <td>
                            <input type="text" class="input-field" id="Address" placeholder="Address">
                        </td>
                    </tr>
                    <tr>
                        <th><label>Gender</label></th>
                        <td class="input-gender">
                            <input type="radio" name="gender" id="Male" value="Male">
                            <label for="Male">Male</label>
                            <input type="radio" name="gender" id="Female" value="Female">
                            <label for="Female">Female</label>
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

    </div>
    <script type="text/javascript" src="Admin-user.js"></script>
</body>

</html>
?>