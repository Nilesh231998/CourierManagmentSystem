<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM countries WHERE country_id=".$id;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("countries",$id,"country_id");
	header("location:countries_display.php");
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
					<li class="active"><strong>countries</strong></li>
				</ol>
					
		<h2>countries Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							countriy Update Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Sort name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_sortname" name="aph_sortname" value="<?php echo $row['sortname']?>">
                                    <div id="aph_sortname1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Full Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_name" name="aph_name" value="<?php echo $row['name']?>">
                                    <div id="aph_name1"></div>
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