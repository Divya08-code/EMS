<?php
include 'dbcon.php';
$id=$_GET['id'];
$del="DELETE from user where id=$id";
mysqli_query($con,$del);
header('location:addashboard.php');
?>