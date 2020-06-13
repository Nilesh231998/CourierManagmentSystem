<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("cmsmast","page_id",$upd_cms);
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
					<li class="active"><strong>Cmsmast</strong></li>
				</ol>
					
		<h2>Cmsmast Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Cmsmast
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Page name</label>
						
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_page_name" name="aph_page_name">
                                    <div id="aph_page_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Page title</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="aph_page_title" name="aph_page_title" >
                                    <div id="aph_page_title1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Page content</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="aph_page_content" name="aph_page_content" ></textarea>
                                     <div id="aph_page_content1"></div>
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