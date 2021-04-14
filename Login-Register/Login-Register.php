<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProjectF</title>
    <link rel="icon" href="../Img/manager.ico">
    <link rel="stylesheet" href="Login-Register.css">
    <script src="https://kit.fontawesome.com/1fdc2deffc.js" crossorigin="anonymous"></script>
</header>

<body>
    <div class="all">
        <div class="form-box">
            <div class="btn-box">
                <div id="btn"></div>
                <button type="button" class="log-reg" id="btn-log" onclick="login()">Sign in</button>
                <button type="button" class="log-reg" id="btn-reg" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="Username">
                <input type="password" class="input-field" placeholder="Password">
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <a href="#">Forgot password?</a>
                <button type="submit" class="sub-btn">Log in</button>
            </form>
            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="Username">
                <input type="email" class="input-field" placeholder="Email">
                <input type="password" class="input-field" placeholder="Password">
                <input type="password" class="input-field" placeholder="Confirm Password">
                <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" class="sub-btn">Register</button>
            </form>
            <div class="icon">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="Login-Register.js"></script>
</body>

</html>