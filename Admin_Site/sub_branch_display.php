<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM sub_branch WHERE suboffice_id=".$id;
	executeQuery($q);
	header("location:sub_branch_display.php");
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
					<li class="active"><strong>Sub Branch</strong></li>
					</ol>
					
		<h2>Sub Branch</h2>
		
		<br />
		
	 <?php
		$q="SELECT m1.suboffice_id,m1.suboffice_name,m1.contact_no,m1.address,m2.office_name,c1.city_name from sub_branch as m1,main_branch as m2,citymast as c1 WHERE
		m1.city_id=c1.city_id AND m1.office_id=m2.office_id";
		$arr=array("OFFICE_NAME","CONTACT_NO","ADDRESS","MAIN_OFFICE_NAME","CITY_NAME");
		echo displayData($arr,$q,"sub_branch_update.php","sub_branch_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>