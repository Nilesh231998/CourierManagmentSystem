<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM admin WHERE admin_id=".$id;
	//echo $q;
	executeQuery($q);
	header("location:admin_display.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Management Systems</title>
<?php include('link_display.php');?>
</head>

	<?php include('header.php');?>
		<hr />
		
					<ol class="breadcrumb bc-3" >
					<li><a href=""><i class="fa-home"></i>Home</a></li>
					<li><a href="">Tables</a></li>
					<li class="active"><strong>Admin</strong></li>
					</ol>
					
		<h2></h2>
		
		<br />
		
		<?php
		
		$q="SELECT admin_id,first_name,last_name,image_name,email_id,contact_no,address,username,password FROM admin";
		//echo $q;
		$arr=array("FIRST_NAME","LAST_NAME","IMAGE","EMAIL_ID","CONTACT_NO","ADDRESS","USERNAME","PASSWORD");
		echo displayData($arr,$q,"admin_update.php","admin_display.php",$upd_admin);?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>