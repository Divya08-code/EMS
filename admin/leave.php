
<?php include 'session.php'?>

<style>
	
	.fo{
		border:10 px;
		border-color: black;
	}
</style>


<?php include  'header.php'?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card"style="width: 300px; box-shadow: 2 ">
				<h2 class="text-center text-light " style="background: #67666f;">Employees List</h2>
					<div class="card-body">
						<form method="post">
							<?php 
							include 'dbcon.php';
							$s="SELECT * from user where role='employee' order by id desc";
							$q=mysqli_query($con,$s);
							while($res=mysqli_fetch_array($q)){

								?>
								<input type="checkbox" name="employee[]" value="<?php echo $res['id']?>"><?php echo $res['username']?><br><br>
							<?php
						}
		

							?>
							 <input type="hidden" name="assign_by" value="<?php echo $_SESSION['id']?>">



</div>
</div>
</div>

<div class="col-md-2">
	</div>

	<div class="col-md-6 fo"  >
		
			<div class="form-group">
				<label>Valid From </label>
				<input type="date" name="valid_from" class="form-control" placeholder="Enter Date ">
			</div>
			<div class="form-group">
				<label>Valid To </label>
				<input type="date" name="valid_to" class="form-control" placeholder="Enter Date ">
			</div>
			<div class="form-group">
				<label>Earning Leave </label>
				<input type="text" name="earning_leave" class="form-control" placeholder="Enter Leave ">
			</div>
			<div class="form-group">
				<label>Medical Leave </label>
				<input type="text" name="medical_leave" class="form-control" placeholder="Enter Leave ">
			</div>

			<div class="form-group">
				<label>Casual Leave </label>
				<input type="text" name="casual_leave" class="form-control" placeholder="Enter Leave ">
			</div>
			<button  type="submit" class="btn btn-secondary" name="Assign" value="Assign">Assign</button>
			<a <button class="btn btn-secondary as-btn" href="allleave.php" >All leaves</button></b>	</a>

		</form>
	</div>
</div>
</div>


<?php
include 'dbcon.php';
if(isset($_POST['Assign'])){
	 $vf=$_POST['valid_from'];
	   $vt=$_POST['valid_to'];
	  $el=$_POST['earning_leave'];
	  $m=$_POST['medical_leave'];
	  $cl=$_POST['casual_leave'];
     $a=$_POST['assign_by'];
	 $e=$_POST['employee'];

	foreach($e as $employeelist){
		$data="INSERT into leave_ass(valid_from,valid_to,earning_leave,medical_leave,casual_leave,assign_by,employee)values('$vf','$vt','$el','$m','$cl','$a','$employeelist')";
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