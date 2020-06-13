<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM statusmast WHERE status_id=".$id;
	executeQuery($q);
	header("location:statusmast_display.php");
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
					<li class="active"><strong>Statu</strong></li>
					</ol>
					
		<h2>Status Information</h2>
		
		<br />
		
		<?php
		$q="SELECT status_id,status FROM statusmast";
		//echo $q;
		$arr=array("status");
		echo displayData($arr,$q,"statusmast_update.php","statusmast_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>