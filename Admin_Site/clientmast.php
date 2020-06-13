<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("clientmast","client_id");
	$msg="<div class=\"alert alert-success\"><strong>Success!</strong> Data save successfully</div>";
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
					<li class="active"><strong>Client</strong></li>
				</ol>
					
		<h2>Client Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Client Detail Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
														
							<div class="form-group">
								<label class="col-sm-3 control-label">First Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_first_name" name="aph_first_name">
                                    <div id="aph_first_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Last Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_last_name" name="aph_last_name">
                                    <div id="aph_last_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="eml_email_id" name="eml_email_id">
                                    <div id="eml_email_id1"></div>
								</div>
							</div>
							
							<script src="jquery-3.2.1.min.js"></script>
							<script>
								$("#eml_email_id").blur(function(){
									var usr_emailid=$("#eml_email_id").val();
									var datastring="usr_emailid="+usr_emailid;
									//alert(datastring);
									jQuery.ajax({
										url:"myajax_data.php",
										data:datastring,
										type:"POST",
										success:function(data){
											//alert(data);
											if(data==0)
											{
												$("#btnsubmit").attr('disabled' ,false);
												$("#eml_email_id1").html(" ");
												
											}
											else
											{
												$("#btnsubmit").attr('disabled' ,true);
												$("#eml_email_id1").html("Email Id Already Exited Please Enter New EMail ID");
											}
										}
										
									});
									
								});
								
							</script>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact No</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_contact_no" name="num_contact_no">
                                    <div id="num_contact_no1"></div>
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
								<label class="col-sm-3 control-label">Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="blank_address" name="blank_address" ></textarea>
                                     <div id="blank_address1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">User Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aphnum_username" name="aphnum_username">
                                    <div id="aphnum_username1"></div>
								</div>
							</div>
							
							<script>
								$("#aphnum_username").blur(function(){
									var emp_username=$("#aphnum_username").val();
									var datastring="emp_username="+emp_username;
									//alert(datastring);
									jQuery.ajax({
										url:"myajax_data.php",
										data:datastring,
										type:"POST",
										success:function(data){
											//alert(data);
											if(data==0)
											{
												$("#btnsubmit").attr('disabled' ,false);
												$("#aphnum_username1").html(" ");
												
											}
											else
											{
												$("#btnsubmit").attr('disabled' ,true);
												$("#aphnum_username1").html("User Name Already Exited Please Enter New User Name");
											}
										}
										
									});
									
								});
								
							</script>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								
								<div class="col-sm-5">
									<input type="password" class="form-control" id="pwd_password" name="pwd_password">
                                    <div id="pwd_password1"></div>
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