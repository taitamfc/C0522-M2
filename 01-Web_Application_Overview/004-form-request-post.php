<?php
    echo '<pre>';
    print_r($_REQUEST);
    print_r($_SERVER['REQUEST_METHOD']);//GET || POST
    echo '</pre>';

    if( $_SERVER['REQUEST_METHOD'] == "POST" ){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
    
        echo 'Ten dang nhap la: ' . $username;
        echo '<br>';
        echo 'Mat khau la: ' . $password;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username" id=""> <br>
        Password: <input type="password" name="password" id=""> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>