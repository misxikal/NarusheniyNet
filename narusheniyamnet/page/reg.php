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
    <div class="logo">
        <h1>НАРУШЕНИЙ</h1>
        <h1 id="nameLog">НЕТ</h1>
    </div>
    <form action="../php/register.php" method="post">
        <h1>РЕГИСТРАЦИЯ</h1>
        <input type="text" name="FullName" placeholder="ФИО" required>
        <input type="text" name="number" id="" placeholder="Номер" required>
        <input type="email" name="email" id="" placeholder="Почта" required>
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" id="pass" placeholder="Пароль" required>
        <input type="submit" value="Зарегистрироваться" id="reg">
        <a href="../index.php">Вход</a>
    </form>
</body>
</html>