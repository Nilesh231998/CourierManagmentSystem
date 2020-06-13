<?php 
//include("../Backend_Template/include/session.php");
session_start();
include("../Backend_Template/include/connection.php");
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

<!-- ===========
======-->

<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			
			<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-8 text-center">
				<div class="section-title">
					<h2>Do you have Questions?</h2>
				
				</div>
			</div>
					
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<table class="table table-striped table-bordered table-hover table-condensed" >
			<tr>
				<th>Sr.NO</th>
				<th>City Name</th>
				<th>Main Branch</th>
				<th>Address</th>
				<th>Contact No</th>
				<th>Sub Branch</th>
			</tr>
			
		
			<?php
			$q1 = "SELECT c1.city_id,c1.city_name FROM citymast as c1, sub_branch as s1 WHERE s1.city_id=c1.city_id GROUP BY c1.city_id";
			
			$cn=getcon();
			$rs1 = mysqli_query($cn,$q1);
			$cnt = 1;
			while($row1 = mysqli_fetch_array($rs1))
			{
			?>
			<tr>
				<td><?php echo $cnt;?></td>
				<td><?php echo $row1['city_name'];?></td>
				<?php 
				$q3 = "SELECT * FROM main_branch WHERE city_id=".$row1['city_id'];
				$rs2 = mysqli_query($cn,$q3);
				while($row3 = mysqli_fetch_array($rs2))
				{
				?>
				<td><?php echo $row3['office_name'];?></td>
				<td><?php echo $row3['address'];?></td>
				<td><?php echo $row3['contact_no'];?></td>
				<td><a href="sub_branch.php?soid=<?php echo $row3['office_id'];?>">MORE</a></td>
				<?php
				}
				?>
				
			</tr>
			<?php
			$cnt ++;
			}
			?>
			</table>
			
			</div>

		</div>
	</div>
</section>

	
<!-- =========================
    PROGRAM SECTION   
============================== -->
<!--<section id="program" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
				<div class="section-title">
					<h2>About Us</h2>
					<p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-10 col-sm-10" data-wow-delay="0.9s">
				<!-- Nav tabs
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#fday" aria-controls="fday" role="tab" data-toggle="tab">About</a></li>
					<li><a href="#sday" aria-controls="sday" role="tab" data-toggle="tab">Vision</a></li>
					<li><a href="#tday" aria-controls="tday" role="tab" data-toggle="tab">Vision of today</a></li>
					<li><a href="#foday" aria-controls="foday" role="tab" data-toggle="tab">Vision of tommorrow</a></li>
					<li><a href="#fiday" aria-controls="fiday" role="tab" data-toggle="tab">Services</a></li>
				</ul>
				<!-- tab panes 
				<div class="tab-content">

					<div role="tabpanel" class="tab-pane active" id="fday">
						<!-- program speaker here 
						
						<div class="col-md-10 col-sm-10">
							
							<p>1With the rapid strides in technology and telecommunication, the world has shrunk to such an extent that what was unheard of or incommunicado has become possible. However technological advancements without effective backing ends, infrastructure, leave a wide gap in effective communication.
                    </p>
						</div>

						
					</div>

					<div role="tabpanel" class="tab-pane" id="sday">
						<!-- program speaker here 
						<div class="col-md-10 col-sm-10">
							
					<p>2To create an organisation with opportunities to the deserving in owning their own business at their local area, thereby ensuring a Customer Courier bonding with the best of services.</p>
					<p>Be always advancing and outperforming in an on guard & systematic manner.</p>
					<p>Be more customer friendly and achieve brand enhancement by the exploitation of IT and other technologies for sustained quality standards, training and motivation.</p>
					<p>To be identified as the largest Courier in the Country with the presence felt in every nook and corner of India.</p>
					<p>To be identified as an economical and effective Courier Service.</p>
						</div>

						
					</div>

					<div role="tabpanel" class="tab-pane" id="tday">
						<!-- program speaker here
						
						<div class="col-md-10 col-sm-10">
							
							<p>3Being the guiding light - for proactive application of technology and changing with the times.
							<p>Being the medium - always advancing, organised, systematic and outperforming.</p>
							<p>Being the methodology - aimed at Brand enhancement by exploitation of I.T. and other technologies with sustained quality standard, training and motivation</p>

						</div>

					
					</div>

					<div role="tabpanel" class="tab-pane" id="foday">
						<!-- program speaker here
						
						<div class="col-md-10 col-sm-10">
							
							<p>4To stay well ahead of the others and be the Courier with a vision. Opt for value addition in all aspects of services.</p>

						</div>

					
					</div>
					
					<div role="tabpanel" class="tab-pane" id="fiday">
						<!-- program speaker here 
						
						<div class="col-md-10 col-sm-10">
							
							<p>5The Professional Couriers offers a comprehensive range of solutions to the requirements of delivery of Documents/Non-Documents, all types of cargo – high value, critical and urgent shipments all over India and any part of the World. </p>
							<p>Based on the specific requirements of each individual or corporate the company provides customized services with the application of multi-modal distribution systems integrated by Surface Transport and by Air Freight/Sea Freight.</p>

						</div>

					
					</div>

				</div>

		</div>
	</div>
</section>-->



<!-- =========================
   REGISTER SECTION   
============================== -->

<!-- =========================
    FAQ SECTION   
============================== -->

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