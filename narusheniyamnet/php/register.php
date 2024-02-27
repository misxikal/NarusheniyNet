<?php

require("connect.php");

$fullName = $_POST['FullName'];
$number = $_POST['number'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

$sqllogin="SELECT login FROM users WHERE login = '$login'";
$sql="INSERT INTO users(FullName, number, email, login, password) VALUES ('$fullName','$number','$email','$login','$password')";

$resLog = mysqli_query($conn,$sqllogin);
$row = mysqli_fetch_array($resLog);

if($row[0] == $login){
    echo "Такой логин уже существует";
}
else{
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Регистрация успешно";
        header("Location: ../index.php");
    }else{
        echo "Чет не так";
    }
}

?>