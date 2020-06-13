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
	header("location:couriermast_report.php");
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
					<li class="active"><strong>courier</strong></li>
				</ol>
					
		<h2>courier Infromation</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Courier Detail
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">
			
							
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Consignment no</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_consignment_no" name="num_consignment_no" value="<?php echo $row['consignment_no']?>" readonly>
                                    <div id="cmb_consignment_no1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Client Name</label>
								
								<div class="col-sm-5">
									<?php $query="select client_id,first_name,last_name from clientmast as c1 where client_id=".$row['client_id'];
									//echo $query;
									$row1=fectchRecored($query);?>
									<input type="text" class="form-control" id="num_client_id" name="num_client_id" value="<?php echo $row1['first_name']; echo " " ;echo $row1['last_name']?>" readonly>
                                    <div id="num_client_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Courier type</label>
								
								<div class="col-sm-5">
									<?php $query="select courier_type_id,courier_type_name from couriertype where courier_type_id=".$row['courier_type_id'];
									//echo $query;
									$row2=fectchRecored($query);?>
									<input type="text" class="form-control" id="num_courier_type_id" name="num_courier_type_id" value="<?php echo $row2['courier_type_name'];?>" readonly>
                                    <div id="num_courier_type_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Price</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="num_price" id="num_price" value="<?php echo $row['price']?>" readonly>
                                    <div id="num_price1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Weight</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aphnum_weight" name="aphnum_weight" value="<?php echo $row['weight']?>" readonly>
                                    <div id="aphnum_weight1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Suboffice Name</label>
								
								<div class="col-sm-5">
									<?php $query="select suboffice_id,suboffice_name from sub_branch where 
									suboffice_id=".$row['suboffice_id'];
									$row3=fectchRecored($query);?>
									<input type="text" class="form-control" id="num_suboffice_id" name="num_suboffice_id" value="<?php echo $row3['suboffice_name'];?>" readonly>
                                    <div id="num_suboffice_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Source city Name</label>
								
								<div class="col-sm-5">
									
									<?php $query="select city_id,city_name from citymast where 
									city_id=".$row['source_city_id'];
									$row4=fectchRecored($query);?>
									<input type="text" class="form-control" id="num_source_city_id" name="num_source_city_id" value="<?php echo $row4['city_name'];?>" readonly>
                                    <div id="num_source_city_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Destination city Name</label>
								
								<div class="col-sm-5">
									<?php $query="select city_id,city_name from citymast where 
									city_id=".$row['destination_city_id'];
									$row4=fectchRecored($query);?>
									<input type="text" class="form-control" id="num_destination_city_id" name="num_destination_city_id" value="<?php echo $row4['city_name'];?>" readonly>
                                    <div id="num_destination_city_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Area Name</label>
								
								<div class="col-sm-5">
									
									<?php $query="select area_id,area_name from areamast where 
									area_id=".$row['area_id'];
									$row5=fectchRecored($query);?>
									<input type="text" class="form-control" id="num_area_id" name="num_area_id" value="<?php echo $row5['area_name'];?>" readonly>
                                    <div id="num_area_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Receiver name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_receiver_name" id="aph_receiver_name" value="<?php echo $row['receiver_name']?>" readonly>
                                    <div id="aph_receiver_name1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Receiver phno</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_receiver_phno" name="num_receiver_phno" value="<?php echo $row['receiver_phno']?>" readonly>
                                    <div id="num_receiver_phno1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" >Receiver Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="blank_receiver_address" name="blank_receiver_address" readonly><?php echo $row['receiver_address']?></textarea>
                                     <div id="blank_receiver_address1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Courier date</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" data-mask="date" name="aphnums_courier_date" id="aphnums_courier_date" value="<?php echo $row['courier_date']?>" readonly/>
                                    <div id="aphnums_courier_date1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Delivery date</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" data-mask="date" name="aphnums_delivery_date" id="aphnums_delivery_date" value="<?php echo $row['delivery_date']?>" readonly/>
                                    <div id="aphnums_delivery_date1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Status</label>
								
								<div class="col-sm-5">
								
									<?php $query="select status_id,status from statusmast where status_id=".$row['status_id'];
									//echo $query;
									$row6=fectchRecored($query);?>
									<input type="text" class="form-control" id="aph_status_id" name="num_status_id" value="<?php echo $row6['status'];?>" readonly>
                                    <div id="num_status_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Employee Name</label>
								
								<div class="col-sm-5">
									
									<?php $query="select emp_id,first_name,last_name from employee where emp_id=".$row['emp_id'];
									//echo $query;
									$row7=fectchRecored($query);?>
									<input type="text" class="form-control" id="num_emp_id" name="num_emp_id" value="<?php echo $row7['first_name']; echo " " ;echo $row7['last_name']?>" readonly>
                                    <div id="num_emp_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-default" name="btnsubmit">BACK</button>
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