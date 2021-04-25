<?php
require_once '../config/config.php';
unset($_SESSION['user_id']);
unset($_SESSION['role']);
header("location: Login-Register.html")
?>