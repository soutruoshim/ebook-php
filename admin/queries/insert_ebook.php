<?php 
    include(__DIR__ . "/../../config/database.php");
    include(__DIR__ . "/../../config/upload.php");
    

    if (isset($_POST['submit'])) {
       
        $a = new database();
        $data = [];
        $data['title'] =  $_POST['title'];
        $data['author'] =  $_POST['author'];
        $data['ISBN'] =  $_POST['ISBN'];
        $data['category_id'] =  $_POST['category_id'];
        $data['publication_year'] =  $_POST['publication_year'];
        $data['detail'] =  $_POST['detail'];

        //==============image======================
        $upload = Upload::factory('images/ebook');
        $upload->file($_FILES['image']);
        $results = $upload->upload();

        $data['image'] =  $results['filename'];
        //==============file=======================
        $upload = Upload::factory('files/ebook');
        $upload->file($_FILES['book_file']);
        $results2 = $upload->upload();
        $data['book_file'] =  $results2['filename'];

        $a->insert('books',$data);
        if ($a == true) {
            header('location:../ebook.php');
        }
    }
?>