<?php

if(isset($_SESSION['login']) && $_SESSION['login']=='admin'){
    header("Location: ../adminpage.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NARUSHENIYA</title>
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
    <form action="../php/login-admin.php" method="post">
        <h1>ВХОД АДМИНА</h1>
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" id="pass" placeholder="Пароль" required>
        <input type="submit" value="Войти" id="logIn">
    </form>
</body>
</html>