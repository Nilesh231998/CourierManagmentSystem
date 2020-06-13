<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM student WHERE student_id=".$id;
	executeQuery($q);
	header("location:student_display.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trainee Demo</title>
<?php include('link_display.php');?>
</head>

	<?php include('header.php');?>
		<hr />
		
					<ol class="breadcrumb bc-3" >
					<li><a href=""><i class="fa-home"></i>Home</a></li>
					<li><a href="">Tables</a></li>
					<li class="active"><strong>Student</strong></li>
					</ol>
					
		<h2>Student</h2>
		
		<br />
		
	 <?php
		$q="SELECT s1.student_id, s1.student_name, s1.image_name,c1.course_name, s1.date_of_birth, s1.contact_no, s1.email_id, s1.address, s1.gender 
								FROM student as s1, course as c1 
								WHERE s1.course_id = c1.course_id";
		$arr=array("Couse","Image","Student name","Birthdate","Contact No","Email Id","Description","Gender");
		echo displayData($arr,$q,"student_update.php","student_display.php",$upd_student);?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>