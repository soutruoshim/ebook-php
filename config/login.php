<?php 
session_start(); 

include "Database.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $b = new database();
        $b->select("users","*","email='$uname' AND password='$pass'");
        $result = $b->sql;
       
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            //var_dump($row);
            if ($row['email'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['firstname'].' '.$row['lastname'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../admin/ebook.php");
                exit();
            }else{
                header("Location: ../login.php?error=Incorect User name or password");
                exit();
            }

        }else{
            header("Location: ../login.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();

}