<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NARUSHENIYA</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <div class="logo">
        <h1>НАРУШЕНИЙ</h1>
        <h1 id="nameLog">НЕТ</h1>
    </div>
    <form action="php/login.php" method="post">
    
        <h1>ВХОД</h1>
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" id="pass" placeholder="Пароль" required>
        <input type="submit" value="Войти" id="logIn">
        <a href="page/reg.php">Зарегистрироваться</a>
    </form>
</body>
</html>