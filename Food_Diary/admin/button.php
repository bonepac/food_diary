<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['diet_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					include('includes/conn.php');
					$del=mysqli_query($conn,"select * from diet where diet_id='".$row['diet_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Dietname: <strong><?php echo $drow['dietname']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['diet_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->



<!-- Edit modal form-->
    <div class="modal fade" id="edit<?php echo $row['diet_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Diet</h4></center>
                </div>
                <div class="modal-body">
				<?php
					include('includes/conn.php');
					$edit=mysqli_query($conn,"select * from diet where diet_id='".$row['diet_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST"  enctype="multipart/form-data" action="edit.php?id=<?php echo $erow['diet_id']; ?>">
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Dietname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="dietname" class="form-control" value="<?php echo $erow['dietname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">How To Prepre It:</label>
						</div>
						<div class="col-lg-10">
							<textarea rows="4" cols="40" name="howtocook" class="form-control"><?php echo $erow['howtocook']; ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Health Benefit:</label>
						</div>
						<div class="col-lg-10">
							<textarea rows="4" cols="40" name="healthbenefit" class="form-control"><?php echo $erow['healthbenefit']; ?></textarea> 
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Diet Description:</label>
						</div>
						<div class="col-lg-10">
							<textarea cols="40" rows="4" name="description" class="form-control"><?php echo $erow['description']; ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Submitted By:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="submittedby" class="form-control" value="<?php echo $erow['submittedby']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Picture:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="form-control" name="image"  onchange="preview_image(event)">
							<img id="output_image" src="images/<?php echo $erow['image'];?>" alt="image" />
						</div>
					</div>

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->