<?php

session_start();
require('../php/connect.php');
if(!isset($_SESSION['login']) && $_SESSION['login']!='admin'){
    header("Location: ../index.php");
}
if(isset($_POST['sessionDestr'])){
    session_destroy();
    header("Location: ../index.php");
}

$sql = "SELECT * FROM zayavka";

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
        <div class="content">
            <?php
            
            $result = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
                if($row['status'] == "Рассматривается"){
                    echo "<form action='podrobneeadm.php' method='post' class='zayavki_one'>
                    <p>".$row['title']."</p>
                    <p>".$row['numCar']."</p>
                    <p>".$row['status']."</p>
                    <p><input name='id' type='text' value='".$row['id']."' hidden>
                    <input type='submit' value='Подробнее'></p>
                </form>";
                }
            }

            ?>
        </div>
    </div>
    
</body>
</html>