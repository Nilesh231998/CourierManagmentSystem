	<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
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
					<li><a href="dashboard.php"><i class="fa-home"></i>Home</a></li>
					<li class="active"><strong>LOG REPORT</strong></li>
					</ol>
		<h2>LOG REPORT</h2>
		
		<br />
		
		<?php  
		$q="SELECT Log_ID,CONCAT(e1.first_name,' ',e1.last_name) as name,Remote_IP,User_Type,Login_Time,Logout_Time FROM log as l1, employee as e1 WHERE e1.emp_id = l1.emp_id and User_Type='EMPLOYEE'";
		$arr=array("Employee Name","Remote IP","User Type","Login Time","Logout Time");
		echo display($arr,$q);?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>