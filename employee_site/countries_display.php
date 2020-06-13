<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM countries WHERE country_id=".$id;
	executeQuery($q);
	header("location:countries_display.php");
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
					<li class="active"><strong>Countries</strong></li>
					</ol>
					
		<h2>Countries Information</h2>
		
		<br />
		
	 <?php
		$q="SELECT country_id,sortname,name from countries";
		$arr=array("SORT NAME","FULL NAME");
		echo display($arr,$q);?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>