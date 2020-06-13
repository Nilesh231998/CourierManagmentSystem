<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM couriertype WHERE courier_type_id=".$id;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("couriertype",$id,"courier_type_id");
	header("location:couriertype_display.php");
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
					<li class="active"><strong>couriertype</strong></li>
				</ol>
					
		<h2>couriertype Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							couriertype Update Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Courier type name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_courier_type_name" name="aph_courier_type_name" value="<?php echo $row['courier_type_name']?>">
                                    <div id="aph_courier_type_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Discription</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="blank_discription" name="blank_discription" ><?php echo $row['discription']?></textarea>
                                     <div id="blank_discription1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Country price</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_country_price" name="num_country_price" value="<?php echo $row['country_price']?>">
                                    <div id="num_country_price1"></div>
								</div>
							</div>
								<div class="form-group">
								<label class="col-sm-3 control-label">Out Country price</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_out_country_price" name="num_out_country_price" value="<?php echo $row['out_country_price']?>">
                                    <div id="num_out_country_price1"></div>
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