<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM citymast WHERE city_id=".$id;
	executeQuery($q);
	header("location:citymast_display.php");
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
					<li class="active"><strong>City</strong></li>
					</ol>
					
		<h2>City Information</h2>
		
		<br />
		
	 <?php

		$q="select c1.city_id,c1.city_name,s1.name from citymast as c1,states as s1 WHERE c1.states_id=s1.id";
		//echo $q;
		$arr=array("CITY NAME","STATES NAME");
		echo display($arr,$q);?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>