<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM employee WHERE emp_id=".$id;
	//echo $selectQuery;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("employee","$id","emp_id",$upd_employee);
	header("location:employee_display.php");
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
					<li class="active"><strong>Employee</strong></li>
				</ol>
					
		<h2>Employee Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Employee
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							<div class="form-group">
								<label class="col-sm-3 control-label">First Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_first_name" id="aph_first_name" value="<?php echo $row['first_name']?>">
                                    <div id="aph_first_name1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Last Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_last_name" id="aph_last_name" value="<?php echo $row['last_name']?>">
                                    <div id="aph_last_name1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Image</label>
								
								<div class="col-sm-5">
									<input type="file"  id="img_image_name" name="img_image_name">
                                    <div id="img_image_name1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Email Id</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="eml_email_id" name="eml_email_id" value="<?php echo $row['email_id']?>">
                                    <div id="eml_email_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact No</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="phno_contact_no" name="phno_contact_no" value="<?php echo $row['contact_no']?>">
                                    <div id="phno_contact_no1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label" >Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="aphnums_address" name="aphnums_address" ><?php echo $row['address']?></textarea>
                                     <div id="aphnums_address1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Employee Type</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_employee_type" id="aph_employee_type" value="<?php echo $row['employee_type']?>">
                                    <div id="aph_employee_type1"></div>
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
								<label class="col-sm-3 control-label">User Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aphnums_username" id="aphnums_username" value="<?php echo $row['username']?>">
                                    <div id="aphnums_username1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								
								<div class="col-sm-5">
									<input type="password" class="form-control" name="pwd_password" id="pwd_password" value="<?php echo $row['password']?>" data-toggle="password">
                                    <div id="pwd_password1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-default" name="btnsubmit">UPDATE</button>
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