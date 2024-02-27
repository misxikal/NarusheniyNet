<?php 

require("connect.php");

$otvet=$_POST['odobrenie-name'];
$id=$_POST['id-od'];

$sql1="UPDATE zayavka SET status = '$otvet' WHERE id = '$id'";

$result1 = mysqli_query($conn,$sql1);

if($result1){
    header("Location: ../page/adminpage.php");
}
?>