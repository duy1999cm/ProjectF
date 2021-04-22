<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    $con = new mysqli('localhost','root','','sale_web');    
    $con->set_charset("utf8");
?>

