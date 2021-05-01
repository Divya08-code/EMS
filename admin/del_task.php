<?php 
include 'dbcon.php'
$tid=$_GET['tid'];
$del="DELETE from task where tid=$tid";
mysqli_query($con,$del);
header('location:allasigntask.php');
?> 