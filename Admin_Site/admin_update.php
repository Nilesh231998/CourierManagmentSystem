<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM admin WHERE admin_id=".$id;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("admin",$id,"admin_id",$upd_admin);
	header("location:admin_display.php");
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
					<li class="active"><strong>Admin</strong></li>
				</ol>
					
		<h2>Admin Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Admin Update Form
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
								<label class="col-sm-3 control-label">Email</label>
								
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
								<label class="col-sm-3 control-label">Image</label>
								
								<div class="col-sm-5">
									<input type="file"  id="img_image_name" name="img_image_name">
                                    <div id="img_image_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" >Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="blank_address" name="blank_address" ><?php echo $row['address']?></textarea>
                                     <div id="blank_address1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">User Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aphnum_username" id="aphnum_username" value="<?php echo $row['username']?>">
                                    <div id="aphnum_username1"></div>
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