
<?php include 'session.php'?>

<?php include"header.php" ?>

<style type="text/css">
	.box
	{

		border:4   px;
		box-shadow: 0 5px 20px;	
	}

	.but{
		margin-left: 240px;

	}
	@media{
		.but{
			margin-left: 106px;
		}
	}
.as-btn{
	font-size: 20px;
	margin-left: 233px;
}
@media(max-width: 1200px){
	.as-btn{
		font-size: 11px;
		margin-left: 120px;
	}

}


</style>

	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 ">

				 	<div class="card"style="width: 300px">
				<h2 class="text-center text-light " style="background: #67666f;">Employees List</h2>
					<div class="card-body">
						<form method="post">
				 	
				 	
				 	<br><br>
				 	<?php include"dbcon.php";

					$s="SELECT*FROM user where role='employee' order by id desc";
					$q=mysqli_query($con,$s);
					while($r=mysqli_fetch_array($q))
					{
					 ?>
					 <input type="checkbox" value="<?php echo $r['id']?>" name="employee[]"><?php echo $r['username']?><br><br>
					

				 	<?php } ?>
				 	 <input type="text" name="assign_by" value="<?php echo $_SESSION['id']?>">

</div>
</div>

				
				 	
			</div>
			<div class="col-md-1">
				
			</div>


			<div class="col-md-7">
			
				<a <button class="btn btn-secondary as-btn" href="allasigntask.php" >All Assign Task</button></b>	</a>

				<form>
					<textarea cols="10" rows="10" class="form-control" name="message">To assign a task - Write your message here</textarea>
					<br>
				 <button type="submit"  class="btn btn-secondary " name="assign" style="font-size: 20p;"><b>Assign Task</button></b>

			
			</form>
			</div>
		</form>
		</div>
	</div>
	<br><br>


	<?php include 'footer.php';?>

	<?php
	include 'dbcon.php';
	if (isset($_POST['assign'])){
		$e=$_POST['employee'];
		 $a=$_POST['assign_by'];
		 $m=$_POST['message'];
		 
		 foreach($e as $employeelist){

		 	$data="INSERT into task (employee,assign_by,message)values('$employeelist','$a','$m')";
		 	$query=mysqli_query($con,$data);
 
		 	if($query){
		 		  echo"<script>alert('successfull')</script>";	
		 		  	 	}
		 		  else{
		 		  	echo" <script>alert('not submitted')</script>";
		 		  }
}


	}
	?>