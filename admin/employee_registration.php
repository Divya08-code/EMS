
<?php include 'session.php'?>
<?php include 'header.php'?>
	<br><br>
	<!-- div start--->
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="background: #67666f;">
				<form method="post" action="in_empre.php">
					<h2 style="color: black; font-size: 40px; text-align: center;">Registration Form</h2>
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label>Email Id:</label>
						<input type="text" name="email" class="form-control" placeholder="Enter Email Id">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password">
					</div>
					<div class="form-group">
						<label>Department</label>
						<select class="form-control" name="department">
							<option>Select</option>
							<option>Frontend</option>
							<option>Backend</option>
						</select>
					</div>
					<div class="form-group">
						<label>Role</label>
						<select class="form-control" name="role">
							<option>Select</option>
							<option>Admin</option>
							<option>HR</option>
							<option>Employee</option>
						</select>
					</div>
					 <input type="Submit"  class="btn btn-secondary" name="signup"   value="signup">
				</form>
			</div>

				<div class="col-md-6">
					<img src="../image/im5.png" class="img">
				</div>
			</div>
		</div>
<br><br>
<!--- div end--->

<!---footer start-->
<?php include 'footer.php'?>