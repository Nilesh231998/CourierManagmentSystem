<?php
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM feedbackmast WHERE fid=".$id;
	executeQuery($q);
	header("location:feedbackmast_display.php");
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
					<li class="active"><strong>Feedbackmast</strong></li>
					</ol>
					
		<h2>Feedbackmast</h2>
		
		<br />
		
	 <?php
		$q="SELECT fid,name,email_id,contact_no,description from feedbackmast";
		$arr=array("NAME","EMAIL_ID","CONTACT_NO","DESCRIPTION");
		echo display($arr,$q);?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>