<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Diet</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" enctype="multipart/form-data" action="addnew.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Dietname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="dietname" placeholder="Name of your diet">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">How To Prepre It:</label>
						</div>
						<div class="col-lg-10">
							<textarea rows="4" cols="40" class="form-control" name="howtocook" placeholder="Tell Us how to cook this diet."></textarea>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Health Benefit:</label>
						</div>
						<div class="col-lg-10">
							<textarea rows="4" cols="40" class="form-control" name="healthbenefit" placeholder="Tell us the health benefit of this diet"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Description:</label>
						</div>
						<div class="col-lg-10">
							<textarea rows="4" cols="30" class="form-control" name="description" placeholder="Give brief description of the food please.."></textarea> 
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">submittedby:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="submittedby">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Picture:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="form-control" name="image" onchange="preview_image(event)">
							<img id="output_image">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit"  name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
<script type="text/javascript">
	
	function preview_image(event){
		var reader = new FileReader();
		reader.onload = function(){
			var output = document.getElementById('output_image');
			output.src = reader.result;
		}
		reader.readAsDataURL(event.target.files[0]);
	}
</script>
<style type="text/css">
	#output_image{
		max-width:150px;
		max-height: 150px;
	}
</style>