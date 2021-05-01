<?php include 'session.php'?>
<?php include 'header.php'?>

<br><br>
<!---table-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registered Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive">
  
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Username</th>
                      <th>Email Id</th>
                      <th>Password</th>
                      <th>Department</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once 'dbcon.php';
                    $a= "SELECT * from user";
                    $b=mysqli_query($con,$a);
                    while($result=mysqli_fetch_array($b)){

                    ?>

                    
                    <tr>
                      <td><?php echo $result['id']?></td>
                     <td><?php  echo $result['username']?></td>
                     <td><?php  echo $result['email']?></td>
                     <td><?php  echo $result['password']?></td>
                     <td><?php  echo $result['department']?></td>
                     <td><?php echo $result['role']?></td>
                     
                    
                     <td>
        <a href="show_user.php?id=<?php echo $result['id']?>" class="btn btn-info">Show</a>
        <a href="editfood.php?id=<?php echo $result['id']?>" class="btn btn-primary">edit</a>
        <a href="del_user.php?id=<?php echo $result['id']?>" class="btn btn-danger">delete</a>
                     </td>
                    </tr>
                    <?php
                  } 
                  ?>
                    
                  </tbody>
                </table>
              </div>
              </div>
              
          </div>
      </div>
  </div>
</div>
</section>
              <!-- /.card-body -->
     <!---code end--->
</div> <!-- /.content-wrapper -->


<?php include 'footer.php'?>
