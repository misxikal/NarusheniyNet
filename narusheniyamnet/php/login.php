<?php

session_start();
require('connect.php');

$login=$_POST['login'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE login='$login' AND password='$password'";

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($rows == 1){
    $_SESSION['ID'] = $row['id'];
    $_SESSION['fullName'] = $row['FullName'];
    $_SESSION['number'] = $row['number'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['login'] = $login;
    header("Location: ../page/profile.php");
}

?>