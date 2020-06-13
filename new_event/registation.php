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



<!-- =========================
     NAVIGATION LINKS     
============================== -->
		<?php include("header.php"); ?>




<section id="register" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				
			</div>
<?php
$msg="";
if(isset($_REQUEST['submit']))
{
	insertData("clientmast","client_id");
	$msg="<div class=\"alert alert-success\"><strong>Success!</strong> Data save successfully</div>";
}
?>
			<div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
			<?php echo $msg;?>
			<h2>Register Here</h2>
				<form  method="post"  onSubmit="return validate(this);">
				
					<input  type="text" class="form-control" id="aph_first_name" name="aph_first_name" placeholder="First Name">
					<div id="aph_first_name1"></div>
					<input  type="text" class="form-control" id="aph_last_name" name="aph_last_name" placeholder="Last Name">
					<div id="aph_last_name1"></div>
					<input type="email" class="form-control" id="eml_email_id" name="eml_email_id" placeholder="Email Address">
					<div id="eml_email_id1"></div>
					<input type="text" class="form-control" id="aphnums_username" name="aphnums_username" placeholder="User Name">
					<div id="aphnums_username1"></div>
					<input  type="password" class="form-control" id="pwd_password" name="pwd_password" placeholder="Password">
					<div id="pwd_password1"></div>
					<div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
						<input name="submit" type="submit" class="form-control" id="submit" value="REGISTER">
					</div>
				</form>
			</div>

			<div class="col-md-1"></div>

		</div>
		<?php include("script.php"); ?>
	</div>
</section>
</body>
</html>


