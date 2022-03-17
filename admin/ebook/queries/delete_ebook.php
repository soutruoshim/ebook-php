<?php 
    include(__DIR__ . "/../../config/database.php");
    

    $id = $_POST['id'];

    $a = new database();
    
    $a->select("books","*","id='$id'");
    $result = $a->sql;

    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];
    $file = $row['book_file'];
    unlink(__DIR__ . "/../../images/ebook/".$image);
    unlink(__DIR__ . "/../../files/ebook/".$file);
   

    $a->delete('books',"id='$id'");
    if ($a == true) {
        header('location:../ebook.php');
    }
?>