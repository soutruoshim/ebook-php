<?php 
    include(__DIR__ . "/../../../config/database.php");
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $slug  = $_POST['slug'];
        $a = new database();
        $data = ['name'=>$name,'slug'=>$slug];
        $a->update('authors',$data, "id='$id'");
        if ($a == true) {
            header('location:../author.php');
        }
    }
?>