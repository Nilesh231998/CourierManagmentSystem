<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM couriermast WHERE courier_id=".$id;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("couriermast","$id","courier_id",$updstudent1);
	header("location:couriermast_display.php");
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
					<li class="active"><strong>Student</strong></li>
				</ol>
					
		<h2>Student Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Student
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Consignment no</label>
								
								<div class="col-sm-5">
									<?php $query="select consignment_no,consignment_no from trackmast";?>
									<select class="form-control"name="cmb_consignment_no" id="cmb_consignment_no">
                       					<?php echo FillComboBoxUpdate($query,$row['consignment_no']);?>
									</select>
                                    <div id="cmb_consignment_no1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Client id</label>
								
								<div class="col-sm-5">
									<?php $query="select client_id,concat(first_name,' ',last_name) from clientmast";?>
									<select class="form-control"name="cmb_client_id" id="cmb_client_id">
                       					<?php echo FillComboBoxUpdate($query,$row['client_id']);?>
									</select>
                                    <div id="cmb_client_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Courier type id</label>
								
								<div class="col-sm-5">
									<?php $query="select courier_type_id,courier_type_name from couriertype";?>
									<select class="form-control"name="cmb_courier_type_id" id="cmb_courier_type_id">
                       					<?php echo FillComboBoxUpdate($query,$row['courier_type_id']);?>
									</select>
                                    <div id="cmb_courier_type_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Price</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="num_price" id="num_price" value="<?php echo $row['price']?>">
                                    <div id="num_price1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Weight</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aphnum_weight" name="aphnum_weight" value="<?php echo $row['weight']?>">
                                    <div id="aphnum_weight1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Suboffice id</label>
								
								<div class="col-sm-5">
									<?php $query="select suboffice_id,suboffice_name from sub_branch";?>
									<select class="form-control"name="cmb_suboffice_id" id="cmb_suboffice_id">
                       					<?php echo FillComboBoxUpdate($query,$row['suboffice_id']);?>
									</select>
                                    <div id="cmb_suboffice_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Source city id</label>
								
								<div class="col-sm-5">
									<?php $query="select city_id,city_name from citymast";?>
									<select class="form-control"name="cmb_source_city_id" id="cmb_source_city_id">
                       					<?php echo FillComboBoxUpdate($query,$row['source_city_id']);?>
									</select>
                                    <div id="cmb_source_city_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Destination city id</label>
								
								<div class="col-sm-5">
									<?php $query="select city_id,city_name from citymast";?>
									<select class="form-control"name="cmb_destination_city_id" id="cmb_destination_city_id">
                       					<?php echo FillComboBoxUpdate($query,$row['destination_city_id']);?>
									</select>
                                    <div id="cmb_destination_city_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Area id</label>
								
								<div class="col-sm-5">
									<?php $query="select area_id,area_name from areamast";?>
									<select class="form-control"name="cmb_area_id" id="cmb_area_id">
                       					<?php echo FillComboBoxUpdate($query,$row['area_id']);?>
									</select>
                                    <div id="cmb_area_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Receiver name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_receiver_name" id="aph_receiver_name" value="<?php echo $row['receiver_name']?>">
                                    <div id="aph_receiver_name1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Receiver phno</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="phno_receiver_phno" name="phno_receiver_phno" value="<?php echo $row['receiver_phno']?>">
                                    <div id="phno_receiver_phno1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" >Receiver Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="aphnums_receiver_address" name="aphnums_receiver_address" ><?php echo $row['receiver_address']?></textarea>
                                     <div id="aphnums_receiver_address1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Courier date</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" data-mask="date" name="aphnums_courier_date" id="aphnums_courier_date" value="<?php echo $row['courier_date']?>"/>
                                    <div id="aphnums_courier_date1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Delivery date</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" data-mask="date" name="aphnums_delivery_date" id="aphnums_delivery_date" value="<?php echo $row['delivery_date']?>"/>
                                    <div id="aphnums_delivery_date1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Status id</label>
								
								<div class="col-sm-5">
									<?php $query="select status_id,status from statusmast";?>
									<select class="form-control"name="cmb_status_id" id="cmb_status_id">
                       					<?php echo FillComboBoxUpdate($query,$row['status_id']);?>
									</select>
                                    <div id="cmb_status_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Emp id</label>
								
								<div class="col-sm-5">
									<?php $query="select emp_id,concat(first_name,' ',last_name) from employee";?>
									<select class="form-control"name="cmb_emp_id" id="cmb_emp_id">
                       					<?php echo FillComboBoxUpdate($query,$row['emp_id']);?>
									</select>
                                    <div id="cmb_emp_id1"></div>
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