<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> employee management system</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="icon" type="" href="image/fi.png" />

<!-- JS, Popper.js, and jQuery -->
 <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/first.css">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
<style >

.nav{
	height: 150px;
	width: 100%;
	background: linear-gradient(#b3b6b9,#1e1e23);
}

.login{
	 width:80px; 
	 margin-left:180px;
}
@media(max-width: 1200px){
	.login{
		 width:80px;
		 margin-left:112px;
	}
}
.img{
	width: 400px;
	height: 400px;
}
@media(max-width: 1200px){
	.img{
		width: 293px;
		height: 400px;
	}
}

 </style>

</head>
<body>
	<!----nav start-->
	 <nav class="navbar navbar-expand-md nav"  >
  
 <a href="" class="navbar-brand" >
   <img src="image/fi.png" width="150px" >

  
 </a>
</nav>
<!----- nav end--->
<!----form start--->
<div class="container-fluid">
<div class="container">
	<div class="row">
	

		<div class="col-md-5">
		
		<div class="card "  >
			<h2 class="text-center" style="color:#67666f; ">WELCOME </h2>
			<?php 
   if(isset($_SESSION['id']))
   {
     echo $_SESSION['id'];
     unset( $_SESSION['id']);
   }

   if(isset($_SESSION['error']))
   {
     echo $_SESSION['error'];
     unset( $_SESSION['error']);
   }

  ?>
			<br>
			<div class="card body" style="background: #67666f; height: 350px;">
				<form method="post" action="login.php">
					<br>
					<div class="form-group ">
						<label style=" font-size:19px;"><b>Email Id:</b></label>
					<input type="text" name="email" class="form-control" >
					</div>
					
					<div class="form-group">
						<label style="font-size: 19px;"><b>Password:</b></label>
		            <input type="password" name="password" class="form-control">
					</div>
				
		  <button type="submit" class="btn btn-block" name="login" style="font-size: 30px;" ><b>Log In</button></b>		
		  <img src="image/pn4.png" class="login">

		

                

	</form>
	
</div>
	</div>
</div>
	<div class="col-md-2">
	</div>

		<div class="col-md-5">
			
			<img src="image/l1.png" class="img">
		</div>
		</div>
		</div>
	 
</div>
</div>
		


</body>
</html>