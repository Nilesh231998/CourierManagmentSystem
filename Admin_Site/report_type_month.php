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
	<title>Courier Management System</title>
<?php include('link_display.php');?>
</head>

	<?php include('header.php');?>
		<hr />
		
		<h2>CURRENT MONTH COUNTING </h2>
		
		<br />
		
		                                      <?php
		$q="select ct.courier_type_id, ct.courier_type_name , count(c.courier_type_id) from couriertype as ct , couriermast as c where ct.courier_type_id = c.courier_type_id group by c.courier_type_id";
		$arr=array("COURIER TYPE NAME","NUMBER OF COURIER");
		echo display($arr,$q,"admin_update.php","admin_display.php");?>
		<A href="export.php?page=report_type_month_xlv.php"  class="btn btn-blue"> <i class="entypo-doc-text"></i>
							 EXCEL</A>
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