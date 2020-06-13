<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	//$q="DELETE FROM clientmast WHERE client_id=".$id;
	//exenonQuery($q);
	//header("location:client_display.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Management System|Client</title>
<?php include('link_display.php');?>
</head>

	<?php include('header.php');?>
		<hr />
		<h2>Client</h2>
		
		<br />
<?php
		$q1 = "select c.track_id ,consignment_no ,s.status , t.transport_name , sb.address ,ct.city_name , c.datetime , e.first_name from  trackmast as c  , transportation as t , statusmast as s ,sub_branch as sb , citymast as ct, employee as e where s.status_id=  c.status_id and t.transport_id  = c.transport_id and c.suboffice_id=sb.suboffice_id AND  sb.city_id= ct.city_id and e.emp_id = c.emp_id and consignment_no =". $id;

//echo $q1;
		$arr=array("Consignment No","STATUS","TRASPORTAION","OFFICE","CITY","DATE","EMPLOYEE NAME");
		echo display($arr,$q1,"report_client_courier.php","client_display.php");?>
			<A href="report_client.php"  class="btn btn-blue"> 
							 BACK</A>
	
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>