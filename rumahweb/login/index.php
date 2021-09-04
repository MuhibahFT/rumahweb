<?php

error_reporting(0);
session_start();
if (isset($_POST['login'])) {
    $user =  $_POST['username'];
    $pass = $_POST['password'];

    if ($user == 'rumahweb' and $pass == '123') {
        //membuat session
        session_start();
        $_SESSION['berhasil'] = true;

        header("Location: admin.php");
    } else {
        $salah = "<p style='color:red; text-align: center;'>username dan password salah!</p>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="container">
        <div class="formlogin">
            <div class="foto"><img src="user-circle.svg" alt="">
                <h1>silakan login</h1>
            </div>
            <?= $salah; ?>
            <form action="" method="POST">
                <input type="text" name="username" placeholder="username">
                <br><input type="password" name="password" placeholder="password">
                <br><button type="submit" name="login">SUBMIT</button>

            </form>
            <div class="lupa"><a href="#"><span>Lupa Password? </span> </a>
                <a href="#"><span> Belum Punya Akun </span> </a>
            </div>
        </div>
    </div>
</body>

</html>