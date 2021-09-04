<?php
session_start();

if (!$_SESSION['berhasil']) {
    header("Location: index.php");
    die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>
    <div class="container">
        <div class="admin">
            <h1>selamat datang admin </h1>
            <a href="logout.php"> Logout Here! </a>
        </div>

    </div>


</body>

</html>