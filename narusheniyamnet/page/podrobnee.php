<?php

require('../php/connect.php');

$id=$_POST['id'];

$sql="SELECT * FROM zayavka WHERE id=".$id."";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

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
        <div class="zayavki">
            
            <?php
                echo "<div class='title_pod'>
                    <p>Название:".$row['title']."</p>
                    <p>Номер машины:".$row['numCar']."</p>
                    <p>Статус:".$row['status']."</p>
                </div>";
                echo "<div class='textAr'>
                    <h1>Описание:</h1>
                    <p>".$row['zayavlenie']."</p>
                </div>"

            ?>
            
        </div>
</body>
</html>