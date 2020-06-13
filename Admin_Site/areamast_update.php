<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM areamast WHERE area_id=".$id;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("areamast","$id","area_id");
	header("location:areamast_display.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Management System</title>
<?php include('link.php');?>
</head>
<?php include('header.php');?>
    	
		<hr />
				<ol class="breadcrumb bc-3" >
					<li><a href="#"><i class="fa-home"></i>Home</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active"><strong>Area</strong></li>
				</ol>
					
		<h2>Area Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Area Update Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
					<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Area Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_area_name" name="aph_area_name" value="<?php echo $row['area_name']?>">
                                    <div id="aph_area_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">City Name</label>
								
								<div class="col-sm-5">
									<?php $query="select city_id,city_name from citymast";?>
									<select class="form-control"name="cmb_city_id" id="cmb_city_id">
                       					<?php echo FillComboBoxUpdate($query,$row['city_id']);?>
									</select>
                                    <div id="cmb_city_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Pincode</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_pincode" name="num_pincode" value="<?php echo $row['pincode']?>">
                                    <div id="num_pincode1"></div>
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