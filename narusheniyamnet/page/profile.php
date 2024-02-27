<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../index.php");
}
if(isset($_POST['sessionDestr'])){
    session_destroy();
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/profile.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>НАРУШЕНИЙ</h1>
            <h1 id="nameLog">НЕТ</h1>
        </div>
            <nav>
                <a href="profile.php">Профиль</a>
                <a href="zayavka.php">Заявление</a>
                <a href="zayavki.php">Оставленные заявления</a>
            </nav>
            <form action="" method="post">
                <input name="sessionDestr" type="submit" id="destrSess" value="Выход">
            </form>
    </header>
    <div class="main-window">
        <div class="content">
            <?php
            echo "<p>ФИО: ".$_SESSION['fullName']."</p>
                <p>Логин: ".$_SESSION['login']."</p>
                <p>Ваш номер: ".$_SESSION['number']."</p>
                <p>Ваша почта: ".$_SESSION['email']."</p>"
            ?>
            
            
        </div>
    </div>
</body>
</html>