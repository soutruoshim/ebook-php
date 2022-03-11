<?php 
    include(__DIR__ . "/../../config/database.php");
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $slug  = $_POST['slug'];
        $a = new database();
        $data = ['name'=>$name,'slug'=>$slug];
        $a->insert('categories',$data);
        if ($a == true) {
            header('location:../category.php');
        }
    }
?>