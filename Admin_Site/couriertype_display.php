<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM couriertype WHERE courier_type_id=".$id;
	executeQuery($q);
	header("location:couriertype_display.php");
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
					<li class="active"><strong>couriertype</strong></li>
					</ol>
					
		<h2>couriertype</h2>
		
		<br />
		
	 <?php
		$q="SELECT courier_type_id,courier_type_name,discription,country_price,out_country_price from couriertype";
		$arr=array("COURIER_TYPE_NAME","DISCRIPTION","COUNTRY_PRICE","OUT_COUNTRY_PRICE");
		echo displayData($arr,$q,"couriertype_update.php","couriertype_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>