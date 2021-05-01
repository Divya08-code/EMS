<?php
session_start();
include 'dbcon.php';

if (isset($_POST['login'])) {


$email= $_POST['email'];
$pass= $_POST['password'];

$a= "SELECT * from user where email='$email' && password='$pass'";

$query =mysqli_query($con,$a);

$total= mysqli_num_rows($query);
$data= mysqli_fetch_array($query);

//echo $data['role'];

if ($total==1) {
  $role=$data['role'];
  if ($role=='Admin') {
$_SESSION['id']=$data['id'];
    header('location:admin/addashboard.php');
    # code...

  }elseif ($role=='Employee') {
    $_SESSION['id']=$data['id'];
  
    header('location:employee/empdashboard.php');
    # code...
  }elseif ($role=='HR') {
    $_SESSION['id']=$data['id'];
  
    header('location:HR/hrdashboard.php');
    # code...
  }else{
    $_SESSION['error']='Invalid Credentials';
    header('location:index.php');
  }
  

  # code...
}else{
  $_SESSION['error']='Invalid Credentials';
  header('location:index.php');
}

}

?>