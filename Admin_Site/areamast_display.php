<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM areamast WHERE area_id=".$id;
	executeQuery($q);
	header("location:areamast_display.php");
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
					<li class="active"><strong>Area</strong></li>
					</ol>
					
		<h2>Area Informaion</h2>
		
		<br />
		
	 <?php
		
		$q="select a1.area_id,a1.area_name,c1.city_name,a1.pincode from areamast as a1,citymast as c1 where
		a1.city_id=c1.city_id";
		$arr=array("Area NAME","CITY","PINCODE");
		echo displayData($arr,$q,"areamast_update.php","areamast_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>