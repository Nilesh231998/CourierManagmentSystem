<?php
include("../Backend_Template/include/connection.php");
//include("../Backend_Template/include/session.php");
session_start();
if(isset($_REQUEST['submit']))
{
	
	$newPassword = $_POST['pwd_newpassword'];
		$q1 = "UPDATE clientmast SET password = '".$newPassword."' WHERE client_id = ".$_SESSION['clientId'];
		echo $q1;
		executeQuery($q1);
		$loginmsg = "<div style=\"color:#00CC66;font-style:oblique;font-size:14px\">Password Change Successfully..!!</div>";
}
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
						<h2>Change Password</h2>
					</div>
					<form  method="post" onSubmit="return validate(this);">
						<input name="pwd_oldpassword" type="text" class="form-control" id="pwd_oldpassword" placeholder="Please Enter Old Password">
						<div id="pwd_oldpassword1"></div>
						
					  	<input name="pwd_newpassword" type="text" class="form-control" id="pwd_newpassword" placeholder="Please Enter New Password">
						<div id="pwd_newpassword1"></div>
						
						<input name="cmf_newpassword" type="text" class="form-control" id="cmf_newpassword" placeholder="Please Enter Conform Password" >
						<div id="cmf_newpassword1"></div>
						
					  	
						
						<div class="col-md-6 col-sm-10">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include("footer.php"); ?>
<script src="jquery-3.2.1.min.js"></script>
	<script>
		$("#pwd_oldpassword").blur(function(){
		var oldpassword=$("#pwd_oldpassword").val();
		var datastring="oldpassword="+oldpassword;
		//alert(datastring);
			jQuery.ajax({
				url:"myajax_change_password.php",
				data:datastring,
				type:"POST",
				success:function(data){
						//alert(data);
						
						if(data == "not match")
						{
							$("#pwd_oldpassword1").html("Old Password Not Mtach");
						}
						
						
				}												
			});
									
		});
								
	</script>



</body>
</html>