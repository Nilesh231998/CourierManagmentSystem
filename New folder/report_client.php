<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM clientmast WHERE client_id=".$id;
	exenonQuery($q);
	header("location:client_display.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Management System|Client</title>
<?php include('link_display.php');?>
</head>

	<?php include('header.php');?>
		<hr />
		<h2>Client</h2>
		
		<br />
		
		                                      <?php
		$q="SELECT c1.client_id, c1.first_name, c1.last_name, c1.email_id, c1.contact_no,ct1.city_name, c1.address, c1.username from clientmast as c1, citymast as ct1 WHERE ct1.city_id = c1.city_id";
		echo $q;
		$arr=array("FIRST NAME","LAST NAME","EMAIL ID","CONTACT NO","CITY NAME","ADDRESS","USEERNAME");
		echo displayclient($arr,$q,"client_update.php","client_display.php");?>
		
		<?php include('footer.php');?>
	</div>

</div>

</body>
</html>