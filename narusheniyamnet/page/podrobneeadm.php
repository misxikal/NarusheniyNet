<?php

require('../php/connect.php');

$id=$_POST['id'];
$sql="SELECT * FROM zayavka WHERE id=".$id."";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

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
            <a href="adminpage.php">Не рассмотренные</a>
            <a href="adminodobr.php">Одобренные</a>
            <a href="adminotkaz.php">отказанные</a>
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
                </div>";
                if($row['status']=="Рассматривается"){
                    echo "<form action='../php/odobrene.php' method='post'>
                    <input name='odobrenie-name' type='text' value='Одобрено' hidden>
                    <input name='id-od' type='text' value=".$_POST['id']." hidden>
                    <input class='odobrenie' type='submit' name='odobrenie' value='Одобрить'>
                </form>
                <form action='../php/odobrene.php' method='post'>
                    <input name='odobrenie-name' type='text' value='Отказано' hidden>
                    <input name='id-od' type='text' value=".$row['id']." hidden>
                    <input class='odobrenie' type='submit' name='otkaz' value='Отказать'>
                </form>";
                }else{
                    echo "<form action='../php/odobrene.php' method='post'>
                        <input name='odobrenie-name' type='text' value='Рассматривается' hidden>
                        <input name='id-od' type='text' value=".$row['id']." hidden>
                        <input class='odobrenie' type='submit' name='otkaz' value='На перерассмотрение'>
                    </form>";
                }
                
            ?>
            
        </div>
</body>
</html>