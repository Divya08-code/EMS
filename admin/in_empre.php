<?php
include_once 'dbcon.php';
if(isset($_POST['signup'])){

    $u=$_POST['username'];
	$e=$_POST['email'];
	$p=$_POST['password'];
	$d=$_POST['department'];
	$r=$_POST['role'];

	$data="INSERT INTO user(username,email,password,department,role)values('$u','$e','$p','$d','$r')";
	$query=mysqli_query($con,$data);


	if($query){
		echo "<script>alert('Registered Successfully')</script>";

	}

	else{
		echo "<script>alert('Something Went Wrong')</script>";

	}

}
?>