<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("sub_branch","suboffice_id");
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
					<li class="active"><strong>Sub Branch</strong></li>
				</ol>
					
		<h2>Sub Branch Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Sub Branch Detail Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							<div class="form-group">
								<label class="col-sm-3 control-label">Sub Branch Name</label>
						
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_suboffice_name" name="aph_suboffice_name">
                                    <div id="aph_suboffice_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact No</label>
						
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_contact_no" name="num_contact_no">
                                    <div id="num_contact_no1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="blank_address" name="blank_address" ></textarea>
                                     <div id="blank_address1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Main Branch NAME</label>
								
								<div class="col-sm-5">
                                <?php $query="select office_id,office_name from main_branch";?>
									<select class="form-control"name="cmb_office_id" id="cmb_office_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_office_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">City Name</label>
								
								<div class="col-sm-5">
                                <?php $query="select city_id,city_name from citymast";?>
									<select class="form-control"name="cmb_city_id" id="cmb_city_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_city_id1"></div>
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