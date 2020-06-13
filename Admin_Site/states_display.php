<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM states WHERE id=".$id;
	executeQuery($q);
	header("location:states_display.php");
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
					<li class="active"><strong>States</strong></li>
					</ol>
					
		<h2>States Information</h2>
		
		<br />
		
	 <?php
		$q="select s1.id,s1.name,c1.name from states as s1,countries as c1 WHERE s1.country_id=c1.country_id";
		//echo $q;
		$arr=array("NAME","country");
		echo displayData($arr,$q,"states_update.php","states_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>