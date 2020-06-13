<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM transportation WHERE transport_id=".$id;
	executeQuery($q);
	header("location:transportation_display.php");
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
					<li class="active"><strong>Transportation</strong></li>
					</ol>
					
		<h2>Transportation Information</h2>
		
		<br />
		
	 <?php

		$q="SELECT transport_id,transport_name FROM transportation";
		$arr=array("TRANSPORTATION_NAME");
		echo displayData($arr,$q,"transportation_update.php","transportation_display.php",$upd_student);?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>