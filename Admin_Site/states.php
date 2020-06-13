<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("states","id",$upd_states);
	$msg="<div class=\"alert alert-success\"><strong>Success!</strong> Data save successfully</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trainee Demo</title>
<?php include('link.php');?>
</head>

	
	<?php include('header.php');?>
    	
		<hr />
				<ol class="breadcrumb bc-3" >
					<li><a href="#"><i class="fa-home"></i>Home</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active"><strong>States</strong></li>
				</ol>
					
		<h2>States Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							States
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							<div class="form-group">
								<label class="col-sm-3 control-label">State Name</label>
						
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_name" name="aph_name">
                                    <div id="aph_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Country Name</label>
								
								<div class="col-sm-5">
                                <?php $query="select country_id,name from countries";?>
									<select class="form-control"name="cmb_country_id" id="cmb_country_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_country_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-default" name="btnsubmit">Save</button>
								</div>
							</div>
						</form>
						
					</div>
				
				</div>
			
			</div>
		</div>
	<?php include('footer.php');?>
	</div>
</div>


</body>
</html>