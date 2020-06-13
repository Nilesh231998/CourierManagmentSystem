<?php
//ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("couriermast","courier_id",$upd_courier);
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
					<li class="active"><strong>Couriermast</strong></li>
				</ol>
					
		<h2>Couriermast Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Consignment no</label>
								
								<div class="col-sm-5">
								<?php $q="select consignment_no from couriermast order by consignment_no DESC LIMIT 1";
									$result=fectchRecored($q);
								?>
									
									<input type="text" class="form-control" id="num_consignment_no" name="num_consignment_no" value="<?php echo $result[0]+1;?>" readonly>
                                    <div id="num_consignment_no1"></div>
								</div>
								
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Client Name</label>
								
								<div class="col-sm-5">
									<?php $query="select client_id,concat(first_name,' ',last_name) from clientmast";?>
									<select class="form-control"name="cmb_client_id" id="cmb_client_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_client_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Courier type Name</label>
								
								<div class="col-sm-5">
									<?php $query="select courier_type_id,courier_type_name from couriertype";?>
									<select class="form-control"name="cmb_courier_type_id" id="cmb_courier_type_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_courier_type_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Price</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="num_price" id="num_price">
                                    <div id="num_price1"></div>
								</div>
							</div>
							<script src="jquery-3.2.1.min.js"></script>
							<script>
								$("#cmb_courier_type_id").change(function(){
									var ctn=$("#cmb_courier_type_id").val();
									var datastring="ctn="+ctn;
									//alert(datastring);
									jQuery.ajax({
										url:"myajax_data.php",
										data:datastring,
										type:"post",
										success:function(data)
										{
											//alert(data);
											$("#num_price").val(data);
										}
									});
								});
							</script>
							<div class="form-group">
								<label class="col-sm-3 control-label">Weight</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aphnum_weight" name="aphnum_weight">
                                    <div id="aphnum_weight1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Suboffice Name</label>
								
								<div class="col-sm-5">
									<?php $query="select suboffice_id from employee where emp_id=".$_SESSION['userId'];
									//echo $query;
									$row=fectchRecored($query);
									$q="select * from sub_branch where suboffice_id=".$row['suboffice_id'];
									//echo $q;
									$row1=fectchRecored($q);?>
									<input type="text" class="form-control" name="suboffice_id" id="suboffice_id" value="<?php echo $row1['suboffice_name']?>" readonly>
                       				<input type="hidden" class="form-control" name="num_suboffice_id" id="num_suboffice_id" value="<?php echo $row1['suboffice_id']?>">	
                                    <div id="num_suboffice_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Source city Name</label>
								
								<div class="col-sm-5">
									<?php $query="select city_id,city_name from citymast";?>
									<select class="form-control"name="cmb_source_city_id" id="cmb_source_city_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_source_city_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Destination city Name</label>
								
								<div class="col-sm-5">
									<?php $query="select city_id,city_name from citymast";?>
									<select class="form-control" name="cmb_destination_city_id" id="cmb_destination_city_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_destination_city_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Area Name</label>
								
								<div class="col-sm-5">
									<select class="form-control" name="cmb_area_id" id="cmb_area_id">
                       					<option value="select">Select</option>
									</select>
                                    <div id="cmb_area_id1"></div>
								</div>
							</div>
							<script src="jquery-3.2.1.min.js"></script>
							<script>
								$("#cmb_destination_city_id").change(function(){
									var cid=$("#cmb_destination_city_id").val();
									var datastring="cid="+cid;
									//alert(datastring);
									jQuery.ajax({
										url:"myajax_data.php",
										data:datastring,
										type:"POST",
										success:function(data){
											//alert(data);
										$("#cmb_area_id").html(data);
										}
										
									});
									
								});
								
							</script>
							<div class="form-group">
								<label class="col-sm-3 control-label">Receiver name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_receiver_name" id="aph_receiver_name">
                                    <div id="aph_receiver_name1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Receiver phno</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_receiver_phno" name="num_receiver_phno" >
                                    <div id="num_receiver_phno1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" >Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="aphnums_receiver_address" name="aphnums_receiver_address" ></textarea>
                                     <div id="aphnums_receiver_address1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Courier date</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" data-mask="date" name="aphnums_courier_date" id="aphnums_courier_date" />
                                    <div id="aphnums_courier_date1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Delivery date</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" data-mask="date" name="aphnums_delivery_date" id="aphnums_delivery_date" />
                                    <div id="aphnums_delivery_date1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Status Of Courier</label>
								
								<div class="col-sm-5">
									<?php $query="select status_id,status from statusmast";?>
									<select class="form-control"name="cmb_status_id" id="cmb_status_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_status_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Emp Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="emp_id" id="emp_id" value="<?php echo $_SESSION['userName'];?>" readonly/>
									<input type="hidden" class="form-control" name="aphnums_emp_id" id="aphnums_emp_id" value="<?php echo $_SESSION['userId'];?>" />
									<div id="aphnums_emp_id1"></div>
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