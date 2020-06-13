<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM couriermast WHERE courier_id=".$id;
	echo $q;
	executeQuery($q);
	header("location:couriermast_display.php");
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
					<li class="active"><strong>Couriermast</strong></li>
					</ol>
					
		<h2></h2>
		
		<br />
		
		<?php
		
		/*$q="SELECT t1.track_id,t1.consignment_no,s1.status_id,e1.emp_id,t2.transport_id,s2.suboffice_id,a1.area_id,t1.datetime FROM trackmast
				as t1,statusmast as s1,employee as e1,transportation as t2,sub_branch as s2,areamast as a1 
				WHERE t1.status_id=s1.status_id AND
				t1.emp_id=e1.emp_id AND
				 t1.transport_id=t2.transport_id AND
			     t1.suboffice_id=s2.suboffice_id AND
				 t1.area_id=a1.area_id
				";*/
			$q="SELECT t1.courier_id,consignment_no,CONCAT(t3.first_name,' ',t3.last_name),t1.price,t1.weight FROM couriermast
				as t1,clientmast as t3 
				WHERE 
				t1.client_id=t3.client_id ";
		//echo $q;
		$arr=array("CONSIGNMENT NO","CLIENT NAME","PRICE","WEIGHT");
		echo singlebuttondisplay($arr,$q,"couriermast_report_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>