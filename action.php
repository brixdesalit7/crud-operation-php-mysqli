<!-- MODAL EDIT RECORD-->
<div class="modal fade" id="editRecords<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">

         
<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Update Record</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
<?php
$edit=mysqli_query($conn,"SELECT * FROM table_records WHERE ID='".$row['ID']."'");
$erow=mysqli_fetch_array($edit);
?>
<div class="mt-3">
<form method="POST" action="update-records.php?update=<?php echo $row['ID']; ?>">
<div class="mb-2 mt-2">
<label for="email" class="form-label">Name:</label>
<input type="text" class="form-control"  placeholder="Enter name" value="<?php echo $erow['NAME'];?>" name="name">
</div>
<div class="mb-2">
<label for="pwd" class="form-label">Age:</label>
<input type="number" class="form-control" placeholder="Enter age" value="<?php echo $erow['AGE'];?>" name="age">
</div>
<div class="mb-2">
<label for="pwd" class="form-label">Contact Number:</label>
<input type="number" class="form-control" placeholder="Enter number" value="<?php echo $erow['CONTACT_NUMBER'];?>" name="number">
</div>
<div class="mb-2">
<label for="pwd" class="form-label">Address:</label>
<input type="text" class="form-control"  placeholder="Enter address" value="<?php echo $erow['ADDRESS'];?>" name="address">
</div>
<div class="mb-2">
<label for="pwd" class="form-label">Email:</label>
<input type="email" class="form-control"  placeholder="Enter email"  value="<?php echo $erow['EMAIL'];?>" name="email">
</div>
<button type="submit" class="btn btn-success mt-3" name="submit">Save</button>
</form>
</div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- DELETE -->
<div class="modal fade " id="delRecords<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title" id="myModalLabel">Delete Record</h4>
</div>

<div class="modal-body">
<?php
$del=mysqli_query($conn,"SELECT * FROM table_records WHERE ID='".$row['ID']."'");
$drow=mysqli_fetch_array($del);
?>
	
<div class="container-fluid text-center">
<i style="color:red;font-size:120px;"; class="fas fa-exclamation mx-auto d-block"></i>
<h5><center>Are you sure to delete this from the list? This method cannot be undone.</center></h5> 
</div> 
</div>
                
<div class="modal-footer">
<button type="button" class="btn btn-default" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="index.php?delete=<?php echo $row['ID'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</div>
</div>
</div>
</div>
<!-- /.modal -->


<!--View -->
<div class="modal fade " id="viewRecords<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title" id="myModalLabel">Record Details</h4>
</div>

<div class="modal-body">
<?php
$view=mysqli_query($conn,"SELECT * FROM table_records WHERE ID='".$row['ID']."'");
$erow=mysqli_fetch_array($view);
?>
<h6>Name:</h6>
<p><?php echo $erow['NAME']; ?></p>
<h6>Age:</h6>
<p><?php echo $erow['AGE']; ?></p>
<h6>Contact Number:</h6>
<p><?php echo $erow['CONTACT_NUMBER']; ?></p>
<h6>Address:</h6>
<p><?php echo $erow['ADDRESS']; ?></p>
<h6>Email:</h5>
<p><?php echo $erow['EMAIL']; ?></p>
<h6>Creation Date:</h6>
<p><?php echo $erow['CREATION_DATE']; ?></p>
          
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Close</button>
</div>
</div>
</div>
</div>
<!-- /.modal -->
