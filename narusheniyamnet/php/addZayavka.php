<?php
session_start();
require("connect.php");

$title=$_POST['title'];
$nuvCar=$_POST['nuvCar'];
$zayavka=$_POST['zayavka'];
$id_user=$_SESSION['ID'];

$sql="INSERT INTO zayavka (title, numCar, zayavlenie, id_user, status) VALUES ('$title','$nuvCar','$zayavka','$id_user','Рассматривается')";

echo $id_user;

$result = mysqli_query($conn,$sql);

if($result){
    echo"Все норм!";
    header("Location: ../page/profile.php");
}else{
    echo"Чет не то";
}

?>