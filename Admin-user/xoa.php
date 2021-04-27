<?php
require_once '../config/config.php';

if(isset($_POST['delete'])){
    $index = $_POST['delete'];
    foreach($index as $deleteid){
        $sql = "DELETE from user WHERE user_id=".$deleteid;
        mysqli_query($con,$sql);
        header('location: Admin-user.php');
        
    }

}

?>