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
					<h2>Price List</h2>
					
				</div>
			</div>
					
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<table class="table" >
    <thead>
      <tr>
        <td><h3>Courier Type</h3></td>
        <td><h3>Price Within Country</h3></td>
        <td><h3>Price Outside Country</h3></td>
		<td><h3>Detail More</h3></td>
      </tr>
    </thead>
    <tbody>
      <?php
						$q1 = "SELECT * FROM couriertype";
						$rs1 = mysqli_query($cn,$q1);
						while($row1 = mysqli_fetch_array($rs1))
						{
		?>
	  <tr>
       <td><?php echo $row1['courier_type_name'];?></td>
        <td><?php echo $row1['country_price'];?></td>
        <td><?php echo $row1['out_country_price'];?></td>
		<td><a href="price_more.php?moreid=<?php echo $row1['courier_type_id']; ?>">More</a></td>
		
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