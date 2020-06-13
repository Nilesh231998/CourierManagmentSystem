<?php
include("../Backend_Template/include/connection.php");
//include("../Backend_Template/include/session.php");
session_start();
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
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title text-center">
						<h2>Track Your Shipment</h2>
					</div>
					<form  method="post">					
						<div class="col-md-12 col-sm-12 text-center">
							<div class="col-md-6 col-sm-6">
								<input class="form-control" type="text" name="consignment_no" id="consignment_no" placeholder="Enter Consignment No">
								
							</div>						
							<div class="col-md-3 col-sm-3">
								<input name="button" type="submit" class="form-control" id="submit" value="Track">
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<ul class="progressbar" id="progressBar">
				
				</ul>
			</div>
			
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
			<hr>
			<table class="table">
				<thead>
						<tr>
								<th>Consignment No</th>
                                <th>Status</th>
                                <th>Date-Time</th>
						</tr>
				</thead>
				<tbody id="tableBody">
				
			    </tbody>
			</table>
	
			</div>

		</div>
	</div>
	<script>
	progressJs("#consignment_no"); 
	progressJs().start();
	progressJs().set(20); //set progress to 20%
	progressJs().setOption("theme", "black");
	</script>
</section>
<?php include("footer.php"); ?>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<?php include("script.php"); ?>

<script src="jquery-3.2.1.min.js"></script>
	<script>
		$(document).on("submit", "form", function(e){
			e.preventDefault();
			//alert('it works!');
			return  false;
		});
		
		$("#submit").click(function(){
			var consignmentNo = $("#consignment_no").val();
			//var datastring="track="+consignmentNo;
			//alert(consignmentNo);
			jQuery.ajax({
				dataType: "json",
				url:"ajax_track.php",
				data:{consignmentNo:consignmentNo},
				type:"POST",
				success:function(data){
						//alert(data);
						$("#tableBody").html(data['tableData']);
						$("#progressBar").html(data['progressList']);
						
				}												
			});
									
		});
								
	</script>

</body>
</html>