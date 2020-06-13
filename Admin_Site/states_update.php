<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM states WHERE id=".$id;
	//echo $selectQuery;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("states",$id,"id",$updstudent1);
	header("location:states_display.php");
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
					<li class="active"><strong>States</strong></li>
				</ol>
					
		<h2>States Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							State Update Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							<div class="form-group">
								<label class="col-sm-3 control-label">State Name</label>
						
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_name" name="aph_name" value="<?php echo $row['name']?>">
                                    <div id="aph_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Country Name</label>
								
								<div class="col-sm-5">
									<?php $query="select country_id,name from countries";?>
									<select class="form-control"name="cmb_country_id" id="cmb_country_id">
                       					<?php echo FillComboBoxUpdate($query,$row['country_id']);?>
               						</select>
                                    <div id="cmb_country_id1"></div>
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