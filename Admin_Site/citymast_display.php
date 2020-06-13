<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM citymast WHERE city_id=".$id;
	executeQuery($q);
	header("location:citymast_display.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Management System</title>
<?php include('link_display.php');?>
</head>

	<?php include('header.php');?>
		<hr />
		
					<ol class="breadcrumb bc-3" >
					<li><a href=""><i class="fa-home"></i>Home</a></li>
					<li><a href="">Tables</a></li>
					<li class="active"><strong>City</strong></li>
					</ol>
					
		<h2>City Information</h2>
		
		<br />
		
	 <?php

		/*$q="SELECT s1.emp_id,CONCAT(s1.first_name,' ',s1.last_name),s1.email_id,s1.contact_no,s1.address,s1.employee_type,c1.suboffice_id,s1.usemame,s1.password 
								FROM employee as s1,sub_branch as c1 
								WHERE s1.suboffice_id= c1.suboffice_id";*/
		$q="select s1.city_id,s1.city_name,c1.name from citymast as s1,states as c1 WHERE s1.states_id=c1.id";
		//echo $q;
		$arr=array("CITY NAME","STATES NAME");
		echo displayData($arr,$q,"citymast_update.php","citymast_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>