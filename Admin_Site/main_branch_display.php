<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM main_branch WHERE office_id=".$id;
	executeQuery($q);
	header("location:main_branch_display.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Managemnet System</title>
<?php include('link_display.php');?>
</head>

	<?php include('header.php');?>
		<hr />
		
					<ol class="breadcrumb bc-3" >
					<li><a href=""><i class="fa-home"></i>Home</a></li>
					<li><a href="">Tables</a></li>
					<li class="active"><strong>Main Branch</strong></li>
					</ol>
					
		<h2>Main Branch Information</h2>
		
		<br />
		
	 <?php
		$q="SELECT m1.office_id,m1.office_name,m1.contact_no,m1.address,c1.city_Name from main_branch as m1,citymast as c1 WHERE
		m1.city_id=c1.city_id";
		$arr=array("OFFICE_NAME","CONTACT_NO","ADDRESS","CITY_NAME");
		echo displayData($arr,$q,"main_branch_update.php","main_branch_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>