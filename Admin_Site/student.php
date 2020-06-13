<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	//insertData("student","student_id",$upd_student);
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
					<li class="active"><strong>Student</strong></li>
				</ol>
					
		<h2>Student Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Student
						</div>
						</div>
					
					<div class="panel-body">
						<?php echo $msg;?>
						<form role="form" class="form-horizontal form-groups-bordered" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
			
							<div class="form-group">
								<label class="col-sm-3 control-label">Student Name</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="aph_student_name" id="aph_student_name">
                                    <div id="aph_student_name1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Birth Date</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" data-mask="date" name="aphnums_birthdate" id="aphnums_birthdate" />
                                    <div id="aphnums_birthdate1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Gender</label>
								
								<div class="col-sm-5">
									<select class="form-control"name="cmb_gender" id="cmb_gender">
									  <?php
											$valueArray = array('Select','Male','Female');
											$optionArray = array('Select','Male','Female');
											echo generateComboBox($valueArray,$optionArray);
									  ?>
									</select>
                                    <div id="cmb_gender1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact No</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_contact_no" name="num_contact_no">
                                    <div id="num_contact_no1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email Id</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="eml_email_id" name="eml_email_id" >
                                    <div id="eml_email_id1"></div>
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-3 control-label">Course</label>
								
								<div class="col-sm-5">
                                <?php $query="select course_id,course_name from course";?>
									<select class="form-control"name="cmb_course_id" id="cmb_course_id">
                       					<?php //echo FillComboBox($query);?>
									</select>
                                    <div id="cmb_course_id1"></div>
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-3 control-label">Image</label>
								
								<div class="col-sm-5">
									<input type="file" class="form-control" id="img_image_name" name="img_image_name" >
                                    <div id="img_image_name1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" >Textarea</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" id="blank_description" name="blank_description" ></textarea>
                                     <div id="blank_description1"></div>
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