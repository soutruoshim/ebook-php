<?php 
    include(__DIR__ . "/../../config/database.php");

    $id = $_POST['id'];

    $a = new database();
    $a->delete('users',"id='$id'");
    if ($a == true) {
        header('location:../user.php');
    }
?>