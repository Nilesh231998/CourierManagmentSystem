<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("log","log_id",$upd_log);
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
					<li class="active"><strong>LOG</strong></li>
				</ol>
					
		<h2>LOG Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							LOG
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							<div class="form-group">
								<label class="col-sm-3 control-label">Log ID</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="Log_ID" id="Log_ID">
                                    <div id="Log_ID1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Emp ID</label>
						
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Emp_ID" name="Emp_ID">
                                    <div id="Emp_ID1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Remote IP</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Remote_IP" name="Remote_IP" >
                                    <div id="Remote_IP1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">User Type</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="User_Type" name="User_Type" >
                                    <div id="User_Type1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Login Time</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Login_Time" name="Login_Time">
                                    <div id="Login_Time1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Logout Time</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Logout_Time" name="Logout_Time">
                                    <div id="Logout_Time1"></div>
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