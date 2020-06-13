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
					<h2>Tracking History</h2>
					<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
				</div>
			</div>
					
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<table class="table" >
    <thead>
      <tr>
								<th>Consignment No</th>
                                <th>COURIER TYPE</th>
                                <th>FROM CITY</th>
                                <th>TO CITY</th>
                                <th>DATE</th>
                                <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php
			$q1 = "select * from couriermast where client_id=".$_SESSION['clientId'];
			//echo $q1;
			$rs1 = mysqli_query($cn,$q1);
			$cnt = mysqli_num_rows($rs1);
			while($row1 = mysqli_fetch_array($rs1))
						{
		?>
	  <tr>
					<td><?php echo $row1['consignment_no'];?></td>
                    <td><?php $q="select * from couriertype where courier_type_id=".$row1['courier_type_id']; 
						$row=fectchRecored($q);
						echo $row['courier_type_name']?></td>
						
					<td><?php $q="select * from citymast where city_id=".$row1['source_city_id'];
						$row=fectchRecored($q);
						echo $row['city_name'];?></td>
						
                    <td><?php $q="select * from citymast where city_id=".$row1['destination_city_id'];
						$row=fectchRecored($q);
						echo $row['city_name'];?></td>
						
					<td><?php echo $row1['delivery_date'];?></td>
					
					<td><a href="track.php?tracknumber=<?php echo $row1['consignment_no'];?>">VIEW MORE</a></td>
      </tr>
	  <?php
	  
						}
	  ?>
    </tbody>
  </table>

			
			</div>

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