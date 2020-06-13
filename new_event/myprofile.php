<?php
	//include("../Backend_Template/include/session.php");
	session_start();
	ini_set("display_errors",0);
	include("../Backend_Template/include/connection.php");
	$id="";
$msg="";
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
		
<?php
/*$msg="";
if(isset($_REQUEST['submit']))
{
	insertData("contactmast","id");
	$msg="<div class=\"alert alert-success\"><strong>Success!</strong> Data save successfully</div>";
}*/
if(isset($_SESSION['clientId']))
{
	$cn=getCon();
	$id=$_SESSION['clientId'];
	$q="SELECT * FROM clientmast WHERE client_id=".$_SESSION['clientId'];
	//echo $r;
	$r=mysqli_query($cn,$q);
	$row=mysqli_fetch_array($r);
}
if(isset($_REQUEST['submit']))
{
	updateData("clientmast","$id","client_id");
	header("location:index.php");
}
?>
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title" align="center">
						<h2>My Profile</h2>
					</div>
					<?php echo $msg;?>
					<form  method="post" onSubmit="return validate(this);">
					<label class="col-sm-3 control-label">FIRST NAME</label>
						<input name="aph_first_name" type="text" class="form-control" id="aph_first_name" placeholder="First Name" value="<?php echo $row['first_name']?>">
						<div id="aph_first_name1"></div>
						
						<label class="col-sm-3 control-label">LAST NAME</label>
						<input name="aph_last_name" type="text" class="form-control" id="aph_last_name" placeholder="Last Name" value="<?php echo $row['last_name']?>">
						<div id="aph_last_name1"></div>
						
						<label class="col-sm-3 control-label">EMAIL</label>
					  	<input name="eml_email_id" type="email" class="form-control" id="eml_email_id" placeholder="Email Id" value="<?php echo $row['email_id']?>">
						<div id="eml_email_id1"></div>
						
						<label class="col-sm-3 control-label">CONTCAT NO</label>
						<input name="phno_contact_no" type="text" class="form-control" id="phno_contact_no" placeholder="Contact No" value="<?php echo $row['contact_no']?>">
						<div id="phno_contact_no1"></div>
						
						<label class="col-sm-3 control-label">CITY</label>
                         <?php $query="select city_id,city_name from citymast";?>
						<select class="form-control" name="cmb_city_id" id="cmb_city_id">
                       		<?php echo fillComboBoxUpdate($query,$row['city_id']);?>
						</select>
                          <div id="cmb_city_id1"></div>
						  
						  <label class="col-sm-3 control-label">ADDRESS</label>
					  	<textarea name="blank_address" rows="5" class="form-control" id="blank_address" placeholder="Address"><?php echo $row['address']?></textarea>
						<div id="blank_address1"></div>
						
					
						<div class="col-md-6 col-sm-10">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>
				</div>
			</div>
			<?php include("script.php"); ?>
		
	</div>
</section>

</body>
</html>
