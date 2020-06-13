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
	$q1 = "SELECT c1.consignment_no,c1.consignment_no,c4.courier_type_name, c2.city_name as source_city,c3.city_name as destination_city,c1.delivery_date FROM couriermast as c1, citymast as c2,citymast as c3, couriertype as c4 WHERE c1.source_city_id = c2.city_id AND c1.destination_city_id = c3.city_id AND c4.courier_type_id=c1.courier_type_id AND client_id = ".$id;
	
//echo $q1;
		$arr=array("Consignment No","COURIER TYPE","FROM CITY","TO CITY","DELIVERY DATE");
		echo displaytreak($arr,$q1,"report_client_courier.php","client_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>