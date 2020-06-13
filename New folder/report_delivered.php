<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
$cn=getCon();
if(!isset($_SESSION["userName"]))
header("Location:index.php");

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM admin WHERE admin_id=".$id;
	exenonQuery($q);
	header("location:admin_display.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trainee Demo</title>
<?php include('link_display.php');?>
</head>

	<?php include('header.php');?>
		<hr />
		
		<h2>FEED BACK REPORT </h2>
		
		<br />
		
		                                      <?php
		$q="SELECT * from couriermast where consignment_no In(select consignment_no from trackmast where status_id = 5)";
		echo $q;
		$arr=array("NAME","EMAIL ID" ,"CONTACT NO" , "DESCRIPTION");
		echo display($arr,$q,"admin_update.php","admin_display.php");?>
		<?php include('footer.php');?>
	</div>

</div>

</body>

<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var table = $("#table-4").dataTable({
					"sPaginationType": "bootstrap",
					"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
					"oTableTools": {
					},
					
				});
			});
				
		</script>
</html>