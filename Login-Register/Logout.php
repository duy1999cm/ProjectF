<?php
require_once '../config/config.php';
unset($_SESSION['user_id']);
header("location: Login-Register.html")
?>