<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("employee","emp_id",$upd_employee);
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
								<label class="col-sm-3 control-label">First name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_first_name" id="aph_first_name">
                                    <div id="aph_first_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Last name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_last_name" id="aph_last_name">
                                    <div id="aph_last_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Image</label>
								
								<div class="col-sm-5">
									<input type="file"  id="img_image_name" name="img_image_name" >
                                    <div id="img_image_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email id</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="eml_email_id" name="eml_email_id" >
                                    <div id="eml_email_id1"></div>
								</div>
								<script src="jquery-3.2.1.min.js"></script>
							<script>
								$("#eml_email_id").blur(function(){
									var emailid=$("#eml_email_id").val();
									var datastring="emailid="+emailid;
									//alert(datastring);
									jQuery.ajax({
										url:"myajax_data.php",
										data:datastring,
										type:"POST",
										success:function(data){
											alert(data);
										//$("#cmb_area_id").html(data);
										}
										
									});
									
								});
								
							</script>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact no</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="phno_contact_no" name="phno_contact_no">
                                    <div id="phno_contact_no1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label" >Address</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="aphnums_address" name="aphnums_address" ></textarea>
                                     <div id="aphnums_address1"></div>
								</div>
							</div>
		
							<div class="form-group">
								<label class="col-sm-3 control-label">Employee type</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_employee_type" name="aph_employee_type">
                                    <div id="aph_employee_type1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Suboffice Name</label>
								
								<div class="col-sm-5">
                                <?php $query="select suboffice_id,suboffice_name from sub_branch";?>
									<select class="form-control"name="cmb_suboffice_id" id="cmb_suboffice_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_suboffice_id1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">User name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aphnum_username" id="aphnum_username">
                                    <div id="aphnum_username1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								
								<div class="col-sm-5">
									<input type="password" class="form-control" name="pwd_password" id="pwd_password" data-toggle="password">
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