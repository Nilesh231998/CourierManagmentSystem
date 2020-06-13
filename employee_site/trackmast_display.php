<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM trackmast WHERE track_id=".$id;
	echo $q;
	executeQuery($q);
	header("location:trackmast_display.php");
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
					<li class="active"><strong>Track Courier</strong></li>
					</ol>
					
		<h2>Track Information</h2>
		
		<br />
		
		<?php
		
		$q="SELECT t1.track_id,t1.consignment_no,s1.status,t2.transport_name,t1.area_id FROM trackmast
				as t1,statusmast as s1,transportation as t2
				WHERE  t1.status_id=s1.status_id AND
				 t1.transport_id=t2.transport_id  ";
		
		//echo $q;
		$arr=array("consignment_no","STATUS","TRANSPORT_NAME","SUB_OFFICE_ADDRESS");
		echo displayData($arr,$q,"trackmast_update.php","trackmast_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>