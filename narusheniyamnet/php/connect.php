<?php

$hostname="localhost";
$usr="gulyaev";
$password="50QhEeRd$";
$db="gulyaev";

$conn = mysqli_connect($hostname,$usr,$password,$db);

if ($conn == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    // print("Соединение установлено успешно");
}

?>