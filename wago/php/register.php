<?php
require 'config.php';


$email= $phone= $password= $passwordErr= $emailErr="";

if($_SERVER['REQUEST_METHOD'] == "POST"){


    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $password= $_POST['password'];
    
    $conn =  mysqli_connect('localhost', 'root', '', 'visel') or die;
    $sql = "INSERT INTO `register`(`id`, `email`, `phone`, `password`) VALUES ('', $email, $phone, $password)";
    mysqli_query($conn, $sql);
    if (empty($email)) {
        $emailErr ="email is required";
    }
    # code...
    if(empty($password)){
        $passwordErr  ="password is required";
    }
    if ($emailErr="" && $passwordErr=""){
        if ($email==  "natty@rong" && $password== "nattyrong") {
            $loginsuccessfulUrl = $base_url."homepage.html";
            header('location: .$loginsuccessfulUrl');
        }
        else {
            echo "username or passwword is incorrect";
        }
    }
    echo "connection [$conn]<br>";
    echo "your email is [$email]<br>";
    echo "your phone no is [$phone]<br>";
    echo "your password is [$password]";
   
  
}
?>