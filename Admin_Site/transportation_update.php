<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * from transportation WHERE transport_id=".$id;
	echo $selectQuery;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("transportation",$id,"transport_id",$updstudent1);
	header("location:transportation_display.php");
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
					<li class="active"><strong>Transportation</strong></li>
				</ol>
					
		<h2>Transportation Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Transportation Update Form
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Transportation Type</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_transport_name" id="aph_transport_name" value="<?php echo $row['transport_name']?>">
                                    <div id="transport_name1"></div>
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