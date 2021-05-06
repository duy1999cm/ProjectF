<?php
require_once '../config/config.php';
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    foreach($id as $deleteid){
        $sql = "DELETE from user WHERE user_id=".$deleteid;
        $con->query($sql);
    }
    header('location: Admin-user.php');
}
?>