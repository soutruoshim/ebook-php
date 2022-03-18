<?php 
    include(__DIR__ . "/../../../config/database.php");
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email  = $_POST['email'];
        $password  = $_POST['password'];
      
        $a = new database();
        $data = ['firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email,'password'=>$password];
        $a->update('users',$data, "id='$id'");
        if ($a == true) {
            header('location:../user.php');
        }
    }
?>