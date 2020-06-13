<?php
	//include("../Backend_Template/include/session.php");
	session_start();
	ini_set("display_errors",0);
	include("../Backend_Template/include/connection.php");
?>
<html lang="en">
<head>
		<?php include("link.php"); ?>
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
<!-- =========================
     NAVIGATION LINKS     
============================== -->
		<?php include("header.php"); ?> 

<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
					
				</div>
			</div>
<?php
$msg="";
if(isset($_REQUEST['submit']))
{
	insertData("feedbackmast","fid");
	$msg="<div class=\"alert alert-success\"><strong>Success!</strong> Data save successfully</div>";
}
?>
			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>Feedback</h2>
					</div>
					<?php echo $msg;?>
					<form  method="post" onSubmit="return validate(this);">
						<input name="aph_name" type="text" class="form-control" id="aph_name" placeholder="Name">
						<div id="aph_name1"></div>
					  	<input name="eml_email_id" type="email" class="form-control" id="eml_email_id" placeholder="Email">
						<div id="eml_email_id1"></div>
						<input name="phno_contact_no" type="text" class="form-control" id="phno_contact_no" placeholder="Contact No">
						<div id="phno_contact_no1"></div>
					  	<textarea name="blank_description" rows="5" class="form-control" id="blank_description" placeholder="Message"></textarea>
						<div id="blank_description1"></div>
						<div class="col-md-6 col-sm-10">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>
				</div>
			</div>
			<?php include("script.php"); ?>
		</div>
	</div>
</section>

</body>
</html>
