<?php 
    include(__DIR__ . "/../../../config/database.php");

    $id = $_POST['id'];

    $a = new database();
    $a->select("slides","*","id='$id'");
    $result = $a->sql;

    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];
    unlink(__DIR__ . "/../../../images/slide/".$image);
 

    $a->delete('slides',"id='$id'");
    if ($a == true) {
        header('location:../slide.php');
    }
?>