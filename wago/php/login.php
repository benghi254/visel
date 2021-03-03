<?php
require 'config.php';
$email= $password= $passwordErr= $emailErr="";

if ($_SERVER['REQUEST_METHOD'] =="POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($email)) {
        $emailErr ="email is required";
    }
    # code...
    if(empty($password)){
        $passwordErr  ="password is required";
    }
    if ($emailErr="" && $passwordErr=""){
        if ($email==  "natty@rong" && $password== "nattyrong") {
            $loginsuccessfulUrl = $base_url."/php/loginsuccess.php";
            header('location: ../$loginsuccessfulUrl');
        }
        else {
            echo "username or passwword is incorrect";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wago/css/booking.css">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form class="form" action="<?php $_PHP_SELF ?> " method="POST">
        Email:<input type="email" name="email"><br>
        Password:<input type="password" name="password"><br>
            <input type="submit" value="login">

    </form>
</body>
</html>