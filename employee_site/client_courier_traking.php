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
		
		$q="SELECT c1.courier_id,c1.consignment_no,CONCAT(c2.first_name,' ',c2.last_name) FROM couriermast as c1,clientmast as c2 where 
			c1.client_id=c2.client_id";
		//echo $q;
		$arr=array("CONSIGNMENT NO","CLIENT NAME");
		echo singlebuttondisplay($arr,$q,"client_courier_traking_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>