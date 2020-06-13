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
					<li class="active"><strong>Clientmast</strong></li>
					</ol>
					
		<h2>Clientmast</h2>
		
		<br />
		
	 <?php
		$q="select s1.client_id,concat(s1.first_name,' ',s1.last_name),s1.email_id,s1.contact_no,c1.city_name,s1.address,s1.username,s1.password
			from clientmast as s1,citymast as c1 WHERE s1.city_id=c1.city_id";
		$arr=array("NAME","Email Id","Contact No","city","address");
		echo singlebuttondisplay($arr,$q,"clientmast_report_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>