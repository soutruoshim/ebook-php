<?php 
    include(__DIR__ . "/../../config/database.php");
    

    $id = $_POST['id'];

    $a = new database();
    // $a->select('books',$rows="*",$where = "id='$id'");
    // while ($row = mysqli_fetch_assoc($result)){
    //     $image = $row['image'];
    //     $file = $row['book_file'];
    //     unlink(WEB_URL.'images/ebook/'.$image);
    //     unlink(WEB_URL. 'files/ebook/'.$file);
    // }
    $a->delete('books',"id='$id'");
    if ($a == true) {
        header('location:../ebook.php');
    }
?>