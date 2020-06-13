<?php session_start();
ini_set("display_errors",0);
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


<!-- =========================
    INTRO SECTION   
============================== -->
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">JOIN WITH US</h1>
				<a href="login.php" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">LOGIN NOW</a>
				<a href="registation.php" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGISTER NOW</a>
			</div>


		</div>
	</div>
</section>


<!-- =========================
    OVERVIEW SECTION   
============================== -->
<!--<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
				<h3>New Event is a fully responsive one-page template for events, conferences or workshops.</h3>
				<p>This is a Bootstrap v3.3.6 layout that is responsive and mobile friendly. You may download and modify this template for your website. Please tell your friends about templatemo.</p>
				<p>Quisque facilisis scelerisque venenatis. Nam vulputate ultricies luctus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
			</div>
					
			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
			</div>

		</div>
	</div>
</section>-->


<!-- =========================
    DETAIL SECTION   
============================== -->
<!--<section id="detail" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-group"></i>
				<h3>650 Participants</h3>
				<p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<i class="fa fa-clock-o"></i>
				<h3>24 Programs</h3>
				<p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
			</div>

			<div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-microphone"></i>
				<h3>11 Speakers</h3>
				<p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
			</div>

		</div>
	</div>
</section>-->


<!-- =========================
    VIDEO SECTION   
============================== -->
<!--<section id="video" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.3s">
				<h2>Watch Video</h2>
				<h3>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet consectetuer diam nonummy.</p>
			</div>
			<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.6s">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XDPwXQjAlB0" allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</div>
</section>-->


<!-- =========================
    SPEAKERS SECTION   
============================== -->
<!--<section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="section-title">
					<h2>Creative Speakers</h2>
					<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
				</div>
			</div>-->

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<!--<div id="owl-speakers" class="owl-carousel">

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
					<div class="speakers-wrapper">
						<img src="images/speakers-img1.jpg" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>Jenny Green</h3>
								<h6>UI Designer</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<img src="images/speakers-img2.jpg" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>David Yoon</h3>
								<h6>Creative Director</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
					<div class="speakers-wrapper">
						<img src="images/speakers-img3.jpg" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>Je Mary Lee</h3>
								<h6>Web Specialist</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<img src="images/speakers-img4.jpg" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>Johnathan Doe</h3>
								<h6>Frontend Dev</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<img src="images/speakers-img5.jpg" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>Elite Hamilton</h3>
								<h6>Marketing Guru</h6>
							</div>
					</div>
				</div>
				
			</div>

		</div>
	</div>
</section>-->


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
			</div>-->

			<!--<div class="wow fadeInUp col-md-10 col-sm-10" data-wow-delay="0.9s">-->
				<!-- Nav tabs -->
				<!--<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#fday" aria-controls="fday" role="tab" data-toggle="tab">About</a></li>
					<li><a href="#sday" aria-controls="sday" role="tab" data-toggle="tab">Vision</a></li>
					<li><a href="#tday" aria-controls="tday" role="tab" data-toggle="tab">Vision of today</a></li>
					<li><a href="#foday" aria-controls="foday" role="tab" data-toggle="tab">Vision of tommorrow</a></li>
					<li><a href="#fiday" aria-controls="fiday" role="tab" data-toggle="tab">Services</a></li>
				</ul>-->
				<!-- tab panes -->
				<!--<div class="tab-content">

					<div role="tabpanel" class="tab-pane active" id="fday">-->
						<!-- program speaker here -->
						
						<!--<div class="col-md-10 col-sm-10">
							
							<p>1With the rapid strides in technology and telecommunication, the world has shrunk to such an extent that what was unheard of or incommunicado has become possible. However technological advancements without effective backing ends, infrastructure, leave a wide gap in effective communication.
                    </p>
						</div>

						
					</div>

					<div role="tabpanel" class="tab-pane" id="sday">-->
						<!-- program speaker here -->
						<!--<div class="col-md-10 col-sm-10">
							
					<p>2To create an organisation with opportunities to the deserving in owning their own business at their local area, thereby ensuring a Customer Courier bonding with the best of services.</p>
					<p>Be always advancing and outperforming in an on guard & systematic manner.</p>
					<p>Be more customer friendly and achieve brand enhancement by the exploitation of IT and other technologies for sustained quality standards, training and motivation.</p>
					<p>To be identified as the largest Courier in the Country with the presence felt in every nook and corner of India.</p>
					<p>To be identified as an economical and effective Courier Service.</p>
						</div>

						
					</div>

					<div role="tabpanel" class="tab-pane" id="tday">-->
						<!-- program speaker here -->
						
						<!--<div class="col-md-10 col-sm-10">
							
							<p>3Being the guiding light - for proactive application of technology and changing with the times.
							<p>Being the medium - always advancing, organised, systematic and outperforming.</p>
							<p>Being the methodology - aimed at Brand enhancement by exploitation of I.T. and other technologies with sustained quality standard, training and motivation</p>

						</div>

					
					</div>

					<div role="tabpanel" class="tab-pane" id="foday">-->
						<!-- program speaker here -->
						
						<!--<div class="col-md-10 col-sm-10">
							
							<p>4To stay well ahead of the others and be the Courier with a vision. Opt for value addition in all aspects of services.</p>

						</div>

					
					</div>
					
					<div role="tabpanel" class="tab-pane" id="fiday">-->
						<!-- program speaker here -->
						
						<!--<div class="col-md-10 col-sm-10">
							
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
<!--<section id="faq" class="parallax-section">
	<div class="container">
		<div class="row">-->

			<!-- Section title
			================================================== -->
			<!--<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
				<div class="section-title">
					<h2>Do you have Questions?</h2>
					<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          							 What is Responsive Design?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
								<p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
      						</div>
   						 </div>
 					</div>

    				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          							What are latest UX Developments?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
                            	<p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
        						<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
      						</div>
   						 </div>
 					</div>

 					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          							What things about Social Media will be discussed?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
                            	<p>Aenean vulputate finibus justo et feugiat. Ut turpis lacus, dapibus quis justo id, porttitor tempor justo. Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa.</p>
        						<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div>

		</div>
	</div>
</section>-->


<!-- =========================
    VENUE SECTION   
============================== -->
<section id="venue" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-offset-1 col-md-8 col-sm-5 text-justify" data-wow-delay="0.9s">
				<h2>Courier Management</h2>

				<p>
				<h3>Our Begining</h3>
					To create an organization which could provide employment to thousands of educated youngsters.

					To create an organisation with opportunities to the deserving in owning their own business at their local area, thereby ensuring a Customer Courier bonding with the best of services.

					Be always advancing and outperforming in an on guard & systematic manner.

					Be more customer friendly and achieve brand enhancement by the exploitation of IT and other technologies for sustained quality standards, training and motivation.

					To be identified as the largest Courier in the Country with the presence felt in every nook and corner of India.

					To be identified as an economical and effective Courier Service.</p>
				<p>
				<h3>Our Services</h3>
					To stay well ahead of the others and be the Courier with a vision. Opt for value addition in all aspects of services.</p>
						
			</div>

		</div>
	</div>
</section>


<!-- =========================
    SPONSORS SECTION   
============================== -->
<!--<section id="sponsors" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title">
					<h2>Our Sponsors</h2>
					<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.3s">
				<img src="images/sponsor-img1.jpg" class="img-responsive" alt="sponsors">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.6s">
				<img src="images/sponsor-img2.jpg" class="img-responsive" alt="sponsors">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.9s">
				<img src="images/sponsor-img3.jpg" class="img-responsive" alt="sponsors">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="1s">
				<img src="images/sponsor-img4.jpg" class="img-responsive" alt="sponsors">	
			</div>

		</div>
	</div>
</section>-->


<!-- =========================
    CONTACT SECTION   
============================== -->
<!--<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
					<h3>Contact Details:</h3>
					<p>ADDRESS:  Webby infotech</p>
					<p>405,Shyan Market</p>
					<p>Ringroad,Surat,Gujarat</p><br>
					<p>Phone No: 7043644754</p>
					<p>Email : info@webbyinfotech.in</p>
					
				</div>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>Contact Us</h2>
					</div>
					<form action="#" method="post">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
					  	<input name="email" type="email" class="form-control" id="email" placeholder="Email">
						<input name="contact1" type="text" class="form-control" id="contact1" placeholder="Contact No">
					  	<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
						<div class="col-md-6 col-sm-10">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>-->


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