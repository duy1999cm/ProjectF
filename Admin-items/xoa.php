<?php
require_once '../config/dbhelper.php';
if(isset($_POST['sub-btn'])){
    $id = $_POST['delete'];
    foreach($id as $deleteid){
        $sql = "DELETE from product WHERE pro_id=".$deleteid;
        execute($sql);
    }
    header('location: Admin-items.php');
}
?>