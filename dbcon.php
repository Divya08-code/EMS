<?php
$con=mysqli_connect('localhost' ,'root','','ems');
if($con){
	echo "connected";
}
else{
	echo "not connected";
}
?>