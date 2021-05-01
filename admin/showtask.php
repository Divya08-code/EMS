<?php include 'session.php'?>
 <?php include 'header.php'?> 

<?php
session_start();

 include "dbcon.php";
 $id=$_GET['id'];
 $s="SELECT * from task where tid=$id";
 $query=mysqli_query($con,$s);
 while($r=mysqli_fetch_array($query))
 {

  ?>
<br><br>
<div class="container">

  <div class="row">
    <div class="col-md-4">
    </div>

    <div class="col-md-4">
    
      <div class="card" style="width: 333px;">
        <div class="card-body"style=" background: #c5c5b8;">
          <h3 style="text-align: center; color: #615e57;"> Task Details</h3>
      <br><br>
      <label>Employee's Name:&nbsp;&nbsp;&nbsp;<?php echo $r['employee']; ?></label><br><br>
      Assigning Date:&nbsp;&nbsp;&nbsp;<?php echo $r['created_at']; ?><br><br>
      Assigned by:&nbsp;&nbsp;&nbsp;<?php echo $r['assign_by']; ?><br><br>
      
    </div>
  </div>
</div>
<div class="col-md-4">
    </div>
  
</div>
</div>
<!-----1div end---->


<!----2 div start---->
<br><br>
<div class="container"> 
<div class="row">
<div class="col-md-3">
</div> 

    <div class="col-md-6">
      <h3 style="text-align: center; color: #615e57;">Assigned Task<textarea cols="6" rows="6" name="message" class="form-control" readonly="readonly" style="background: #c5c5b8;"><?php echo $r['message']; ?></textarea><br><br></h3>
    
  <?php
}
?>  
</div>
<div class="col-md-3">
</div>
</div>
</div>

<!----3 div start-->
<center>
<h3 style="color: #615e57;">Employee's Reply</h3>
<?php

    include 'dbcon.php';

    $id=$_GET['id'];

    $s="SELECT*FROM task_reply where tid=$id";
    $query=mysqli_query($con,$s);
    while($res=mysqli_fetch_array($query))
    {
    ?>
    <div style="width:500px;" >
    <h3 class="alert alert-secondary"><?php echo $res['m_reply']; ?></h3>
    </div>
    <?php } ?>
    <br><br>

</center>


<?php include 'footer.php'?>






