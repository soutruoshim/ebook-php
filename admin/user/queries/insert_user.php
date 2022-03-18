<?php 
    include(__DIR__ . "/../../../config/database.php");
    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email  = $_POST['email'];
        $password  = $_POST['password'];
      
        $a = new database();
        $data = ['firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email,'password'=>$password];
        $a->insert('users',$data);
        if ($a == true) {
            header('location:../user.php');
        }
    }
?>