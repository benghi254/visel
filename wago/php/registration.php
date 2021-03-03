<?php

require 'config.php';


 
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
    <div class="register">
        
        <h2>Sign Up</h2>
        <form class="form" action="/wago/php/register.php" method='POST'>
         
            <input type="email" placeholder="email" name="email" echo $emailErr><br>
            <input type="phone" placeholder="phone" name="phone"><br>
            <input type="password" placeholder="password" name="password-1"><br>
            <input type="password" placeholder="confirm password" name="password-2"><br>

           
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>