<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("pricemast","price_id",$upd_pricemast);
	$msg="<div class=\"alert alert-success\"><strong>Success!</strong> Data save successfully</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Managemnet System</title>
<?php include('link.php');?>
</head>

	
	<?php include('header.php');?>
    	
		<hr />
				<ol class="breadcrumb bc-3" >
					<li><a href="#"><i class="fa-home"></i>Home</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active"><strong>Price</strong></li>
				</ol>
					
		<h2>Price Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Price Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Courier Type Name</label>
								
								<div class="col-sm-5">
                                <?php $query="select courier_type_id,courier_type_name from couriertype";?>
									<select class="form-control" name="cmb_courier_type_id" id="cmb_courier_type_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_courier_type_id1"></div>
								</div>							
								</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Source City Name</label>
								
								<div class="col-sm-5">
                                <?php $query="select city_id,city_name from citymast";?>
									<select class="form-control"name="cmb_source_city_id" id="cmb_source_city_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_source_city_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Destination City Name</label>
								
								<div class="col-sm-5">
                                <?php $query="select city_id,city_name from citymast";?>
									<select class="form-control"name="cmb_destination_city_id" id="cmb_destination_city_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_destination_city_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Price</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="num_price" id="num_price">
                                    <div id="num_price1"></div>
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