<?php

session_start();
require('connect.php');

$login=$_POST['login'];
$password=$_POST['password'];

$sql="SELECT * FROM admins WHERE login='$login' AND password='$password'";

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($rows == 1){
    $_SESSION['ID'] = $row['id'];
    $_SESSION['login'] = $row['login'];
    header("Location: ../page/adminpage.php");
}

?>