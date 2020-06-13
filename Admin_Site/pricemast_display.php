<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM pricemast WHERE price_id=".$id;
	executeQuery($q);
	header("location:pricemast_display.php");
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
					<li class="active"><strong>Price</strong></li>
					</ol>
					
		<h2>Price Information</h2>
		
		<br />
		
	 <?php
		$q="SELECT p1.price_id,c1.courier_type_name,c2.city_name,c3.city_name,p1.price from pricemast as p1,couriertype as c1,citymast as c2,citymast as c3 where
			p1.courier_type_id=c1.courier_type_id and p1.source_city_id=c2.city_id and  p1.destination_city_id=c3.city_id";
		//echo $q;
		$arr=array("Courier_Type_Name","Source_City_Name","Destination_City_Name","Price");
		echo displayData($arr,$q,"pricemast_update.php","pricemast_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>