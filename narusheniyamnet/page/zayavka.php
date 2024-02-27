<?php

session_start();

if(!isset($_SESSION['login']) && $_SESSION['login']!='admin'){
    header("Location: ../index.php");
}
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
        <div class="forms-zayavki">
            <form action="../php/addZayavka.php" method="post">
                <p>Заголовок</p>
                <input type="text" name="title">
                <p>Номер машины</p>
                <input type="text" name="nuvCar">
                <p>Заявление</p>
                <textarea name="zayavka" id="" cols="30" rows="10"></textarea>
                <input id="subInp" type="submit" value="Отправить">
            </form>

        </div>
    </div>
</body>
</html>