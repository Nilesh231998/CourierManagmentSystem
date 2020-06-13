<?php
include('../Backend_Template/include/connection.php');
include("../Backend_Template/include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	$selectQuery="SELECT consignment_no,client_id FROM couriermast WHERE courier_id=".$id;
	$row=fectchRecored($selectQuery);
}
if(isset($_REQUEST['btnsubmit']))
{
	header("location:couriermast_display.php");
}
if(isset($_REQUEST['back']))
	{
			header("location:client_courier_traking.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courier Management System</title>
<?php include('link.php');?>
</head>
<?php include('header.php');?>
    	
		<hr />
				<ol class="breadcrumb bc-3" >
					<li><a href="#"><i class="fa-home"></i>Home</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active"><strong>client courier</strong></li>
				</ol>
					
		<h2>Client Courier Information</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Client COurier Details
						</div>
						</div>
					
					<div class="panel-body">
				<table class="table" >
				<thead>
						<tr>
								<th>CONSIGNMENT NO</th>
								<th>STATUS</th>
                                <th>TRANSPORT</th>
                                <th>CITY</th>
								<th>DATE</th>
                             
						</tr>
				</thead>
    <tbody>
      <?php
				$q1 = "select * from trackmast where consignment_no=".$row['consignment_no'];
				//echo $q1;
			$rs1 = mysqli_query($cn,$q1);
				$rs2=mysqli_num_rows($rs1);
					if($rs2!=0)
					{
						while($row2 = mysqli_fetch_array($rs1))
						{
		?>
	  <tr>
					<td><?php echo $row2['consignment_no']?></td>
					<td><?php $q="select * from statusmast where status_id=".$row2['status_id'];
						$row=fectchRecored($q);
						echo $row['status'];?></td>
                    <td><?php $q="select * from transportation where transport_id=".$row2['transport_id'];
						$row=fectchRecored($q);
						echo $row['transport_name'];?></td>
					<td><?php $q="select * from areamast where area_id=".$row2['area_id'];
						$row=fectchRecored($q);
						$q1="select * from citymast where city_id=".$row['city_id'];
						$row1=fectchRecored($q1);
						echo $row1['city_name'];?></td>
					<td><?php echo $row2['datetime'];?></td>
						
                  
      </tr>
	  <?php
		}
		?>
    </tbody>
  </table>
			
			
			<?php
					}
					else{
					?>
				<div class="clear"></div>
				<div style="font-size:14px;color:#009966;font-weight:bold">No Tracking Information Found...!!!</div>
					<?php
					}
					?>

						
						
					</div>
				
				</div>
			
			</div>
			<form>
						<button type="submit" align="right" name="back" id="back" action="">BACK</button>
						</form>
		</div>
	<?php include('footer.php');?>
	</div>
</div>


</body>
</html>