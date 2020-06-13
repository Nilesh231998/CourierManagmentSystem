<?php
include("../Backend_Template/include/connection.php");
//include("../Backend_Template/include/session.php");
session_start();
$cn = getCon();
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<?php include("link.php"); ?>
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">
	<div class="sk-rotating-plane"></div>
</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->
		<?php include("header.php"); ?>


<!-- =========================
    INTRO SECTION   
============================== -->

<!-- =========================
    OVERVIEW SECTION   
============================== -->

<!-- =========================
    DETAIL SECTION   
============================== -->
<!-- =========================
    VIDEO SECTION   
============================== -->



<!-- =========================
    SPEAKERS SECTION   
============================== -->


<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			
			<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-8 text-center">
				<div class="section-title">
					<h2>Tracking Information</h2>
					<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
				</div>
			</div>
					
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
	<?php
			$q1 = "select * from couriermast where consignment_no=".$_REQUEST['tracknumber'];
			echo $q1;
			$rs1 = mysqli_query($cn,$q1);
			$cnt = mysqli_num_rows($rs1);
			$row1 = mysqli_fetch_array($rs1);
			$cnt = mysqli_num_rows($rs1);
			if($cnt > 0)
			{
		?>
	
	<table class="table" >
				<thead>
						<tr>
								<th>Consignment No</th>
                                <th>Receiver Name</th>
                                <th>Receiver Address</th>
                             
						</tr>
				</thead>
    <tbody>
      
	  <tr>
					<td><?php echo $row1['consignment_no'];?></td>
                    <td><?php echo $row1['receiver_name'];?></td>
						
					<td><?php echo $row1['receiver_address'];?></td>
						
                  
      </tr>
    </tbody>
  </table>
	<div class="section-title">
					<h2>Tracking Details</h2>
	</div>
			
			<table class="table" >
				<thead>
						<tr>
								<th>STATUS</th>
                                <th>TRANSPORT</th>
                                <th>CITY</th>
								<th>DATE</th>
                             
						</tr>
				</thead>
    <tbody>
      <?php
				$q1 = "select * from trackmast where consignment_no=".$_REQUEST['tracknumber'];
				//echo $q1;
			$rs1 = mysqli_query($cn,$q1);	

						while($row2 = mysqli_fetch_array($rs1))
						{
		?>
	  <tr>
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
			
			</div>
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
</section>

<!-- =========================
    PROGRAM SECTION   
============================== -->

<!-- =========================
   REGISTER SECTION   
============================== -->

<!-- =========================
    FAQ SECTION   
============================== -->

			<!-- Section title
			================================================== -->
			
<!-- =========================
    VENUE SECTION   
============================== -->


<!-- =========================
    SPONSORS SECTION   
============================== -->


<!-- =========================
    CONTACT SECTION   
============================== -->

<!-- =========================
    FOOTER SECTION   
============================== -->
<?php include("footer.php"); ?>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<?php include("script.php"); ?>
</body>
</html>