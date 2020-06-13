<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("trackmast","track_id");
	$msg="<div class=\"alert alert-success\"><strong>Success!</strong> Data save successfully</div>";
}
$cn=getcon();
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
					<li class="active"><strong>Track Courier</strong></li>
				</ol>
					
		<h2>Track Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Track Detail Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Consignment no</label>
								
								<div class="col-sm-5">
									<?php $query="select consignment_no,consignment_no from couriermast";?>
									<select class="form-control"name="cmb_consignment_no" id="cmb_consignment_no" >
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_consignment_no1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Status </label>
								
								<div class="col-sm-5">
                                <?php $query="select status_id,status from statusmast";?>
									<select class="form-control" name="cmb_status_id" id="cmb_status_id">
                       					<option value="select">Select</option>
									</select>
                                    <div id="cmb_status_id1"></div>
								</div>
							</div>
							
							<script src="jquery-3.2.1.min.js"></script>
							<script>
								$("#cmb_consignment_no").change(function(){
									$("#cmb_status_id1").html("");
									var con_no=$("#cmb_consignment_no").val();
									var datastring="con_no="+con_no;
									//alert(datastring);
									jQuery.ajax({
										url:"myajax_data.php",
										data:datastring,
										type:"POST",
										success:function(data){
											if(data!=0)
												$("#cmb_status_id").html(data);
												
											else
												$("#cmb_status_id1").html("Courie is already delivered");
										}
										
									});
									
								});
								
							</script>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Employee Name</label>
								
								<div class="col-sm-5">
                                
									<input type="text" class="form-control" name="emp_id" id="emp_id" value="<?php echo $_SESSION['userName'];?>" readonly>
                                    
									<input type="hidden" class="form-control" name="num_emp_id" id="num_emp_id" value="<?php echo $_SESSION['userId'];?>" readonly>
                                    <div id="num_emp_id1"></div>
								</div>
								
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Transportation Name</label>
								
								<div class="col-sm-5">
                                <?php $query="select transport_id,transport_name from transportation";?>
									<select class="form-control"name="cmb_transport_id" id="cmb_transport_id">
                       					<?php echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_transport_id1"></div>
								</div>
								
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Suboffice Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="suboffice_id" id="suboffice_id" value="<?php $q="select * from employee where first_name='".$_SESSION['userName']."'"; 
									//echo $q;
									$result=fectchRecored($q);  
									$q1="select * from sub_branch where suboffice_id=".$result[8];  
									$result2=fectchRecored($q1); 
									echo $result2[1];?>" readonly>
									
									<input type="hidden" class="form-control" name="num_suboffice_id" id="num_suboffice_id" value="<?php echo $result2[0];?>">
                                    <div id="num_suboffice_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Area Name</label>
								
								<div class="col-sm-5">
                                
									<input type="text" class="form-control" name="area_id" id="area_id" value="<?php $q="select * from employee where first_name='".$_SESSION['userName']."'"; 
									//echo $q;
									$result=fectchRecored($q);  
									$q1="select * from sub_branch where suboffice_id=".$result[8]; 
									//echo $q1;
									$result2=fectchRecored($q1); 
									$q2="select * from areamast where city_id=".$result2[5]; 
									$result3=fectchRecored($q2); 
									echo $result3[1];?>" readonly>
                                   
									<input type="hidden" class="form-control" name="num_area_id" id="num_area_id" value="<?php echo $result3[0];?>" >
									<div id="num_area_id1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label"></label>
								
								<div class="col-sm-5">
									
									<input type="hidden" class="form-control" name="blank_datetime" id="blank_datetime" value="<?php  echo date("d-m-Y h:i:s A");?>">
                                    <div id="blank_datetime1"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-default" name="btnsubmit" >Save</button>
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
		
		
							
							
							