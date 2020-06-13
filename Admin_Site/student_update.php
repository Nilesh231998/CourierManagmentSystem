<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT * FROM student WHERE student_id=".$id;
	$row=fetchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("student","$id","student_id",$updstudent1);
	header("location:student_display.php");
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
									<input type="text" class="form-control" name="aph_student_name" id="aph_student_name" value="<?php echo $row['student_name']?>">
                                    <div id="aph_student_name1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Birth Date</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" data-mask="date" name="aphnums_birthdate" id="aphnums_birthdate" value="<?php echo $row['birthdate']?>" />
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
											echo generateComboBoxUpdate($valueArray,$optionArray,$row['gender']);
									  ?>
                                    <div id="cmb_gender1"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact No</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="num_contact_no" name="num_contact_no" value="<?php echo $row['contact_no']?>">
                                    <div id="num_contact_no1"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email Id</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="eml_email_id" name="eml_email_id" value="<?php echo $row['email_id']?>">
                                    <div id="eml_email_id1"></div>
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-3 control-label">Course</label>
								
								<div class="col-sm-5">
                                <?php $query="select course_id,course_name from course";?>
									<select class="form-control"name="cmb_course_id" id="cmb_course_id">
                       					 <?php echo FillComboBoxUpdate($query,$row['course_id']);?>
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
									<textarea class="form-control" id="blank_description" name="blank_description" ><?php echo $row['description']?></textarea>
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