<?php include 'session.php'?>
            <?php include"header.php" ?>
  
          <div class="content-wrapper" >
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>

                      <th style="width: 10px">#</th>
                      <th>Employee's Name</th>
                      <th>Assigned by</th>
                      <th>Task</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "dbcon.php";
                    
                    $v="SELECT * FROM task join user on user.id=task.employee";

                    $i=0;

                    $q=mysqli_query($con,$v);
                    while($res=mysqli_fetch_array($q))

                    {
                    ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $res['username'] ?></td>
                      <td><?php echo $res['assign_by'] ?></td>
                      <td><?php echo $res['message'] ?></td>
                      <td> <a href="showtask.php?id=<?php echo $res['tid']?>" class="btn btn-info">show</a>
                    </tr>
                  <?php  } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>