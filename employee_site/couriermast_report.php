<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
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
		
			$q="SELECT t1.courier_id,consignment_no,CONCAT(t3.first_name,' ',t3.last_name),
			t1.price,t1.weight FROM couriermast as t1,clientmast as t3 
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