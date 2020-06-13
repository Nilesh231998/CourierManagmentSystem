<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM employee WHERE emp_id=".$id;
	executeQuery($q);
	header("location:employee_display.php");
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
					<li class="active"><strong>Employee</strong></li>
					</ol>
					
		<h2>Employee Information</h2>
		
		<br />
		
	 <?php

		$q="SELECT s1.emp_id,s1.first_name,s1.last_name,s1.image_name,s1.email_id,s1.employee_type,c1.suboffice_name,s1.username,s1.password 
								FROM employee as s1,sub_branch as c1 
								WHERE s1.suboffice_id= c1.suboffice_id";
		//echo $q;
		$arr=array("FIRST_NAME","LAST_NAME","IMAGE","EMAIL_ID","EMPLOYEE_TYPE","SUB_OFFICE_ID","USERNAME","PASSWORD");
		echo displayData($arr,$q,"employee_update.php","employee_display.php",$upd_employee);?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>