<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM clientmast WHERE client_id=".$id;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	header("location:clientmast_report.php");
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
					
		<h2>Client Details</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							clientmast
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
														
							<div class="form-group">
								<label class="col-sm-3 control-label">First name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_first_name" name="aph_first_name" value="<?php echo $row['first_name']?>" readonly>
                                    <div id="aph_first_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Last name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_last_name" name="aph_last_name" value="<?php echo $row['last_name']?>" readonly>
                                    <div id="aph_last_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email id</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="eml_email_id" name="eml_email_id" value="<?php echo $row['email_id']?>" readonly>
                                    <div id="eml_email_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact no</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_contact_no" name="num_contact_no" value="<?php echo $row['contact_no']?>" readonly>
                                    <div id="num_contact_no1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">City Name</label>
								
								<div class="col-sm-5">
                                <?php $query="select city_id,city_name from citymast where city_id=".$row['city_id'];
								$row1=fectchRecored($query);?>
									<input type="text" class="form-control" id="cmb_city_id" name="cmb_city_id" value="<?php echo $row1['city_name']?>" readonly>
                                    <div id="cmb_city_id1"></div>
								</div>
							</div>
		
							<div class="form-group">
								<label class="col-sm-3 control-label">Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="aphnums_address" name="aphnums_address" readonly><?php echo $row['last_name']?></textarea>
                                     <div id="aphnums_address"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">User name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aphnum_username" name="aphnum_username" value="<?php echo $row['username']?>" readonly>
                                    <div id="aphnum_username1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="pwd_password" name="pwd_password" value="<?php echo $row['password']?>" readonly>
                                    <div id="pwd_password1"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-default" name="btnsubmit">Back</button>
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