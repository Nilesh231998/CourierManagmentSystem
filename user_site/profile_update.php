<?php
include("include/session.php");
include("include/connection.php");
$cn = getCon();
$loginmsg = "";
$q1 = "SELECT * FROM clientmast WHERE client_id = ".$_SESSION['clientid'];
$rs = mysqli_query($cn,$q1);
$clientrow = mysqli_fetch_array($rs);
if(isset($_REQUEST['btnsubmit']))
{
	$id = $_SESSION['clientid'];
	updateData("clientmast","$id","client_id","");
	$loginmsg = "Profile Change Successfully..!!";
	header("location:profile.php");
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<meta name="author" content="ThemeFuse">
<meta name="keywords" content="">
<title>Courier Management System | Profile</title>


<link href="style.css" media="screen" rel="stylesheet">
<link href="screen.css" media="screen" rel="stylesheet">
<!-- custom CSS -->
<link rel="stylesheet" href="custom.css">

<!-- favicon.ico and apple-touch-icon.png -->
<link rel="shortcut icon" href="favicon.html">
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57-iphone.html">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72-ipad.html">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114-iphone4.html">
<!--xxx -->
<!-- Mobile optimized -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/respond.min.js"></script>
<script src="js/libs/jquery.min.js"></script>

<!-- scripts -->
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/general.js"></script>
<!-- shortcodes: slideshows -->
<script src="js/slides.min.jquery.js"></script>
<!-- shortcodes: Tabs -->
<script src="js/jquery.tools.min.js"></script>
<!-- custom input -->
<script src="js/jquery.customInput.js"></script>
<!-- infield labels -->
<script src="js/jquery.infieldlabel.min.js"></script>
<!-- SyntaxHighlighter -->
<link href="css/shCore.css" rel="stylesheet">
<link href="css/shThemeDefault.css" rel="stylesheet">
<script src="js/shCore.js"></script>
<script src="js/shBrushPlain.js"></script>
<script src="js/search-input.js"></script>
<script type="text/javascript" language="javascript" src="js/custom.js"></script>
<script src="js/validation.js"></script>
</head>

<?php include('header.php');?>        
        <div class="black-background">
            <div class="container">
                 <!--header title-->
                    <div class="header-title box_orange">
                        <div class="header-title-content text-left">
                            <h1 class="text-white">My Profile</h1>
                        </div>
                                                 <!--top search-->
                        <div class="topsearch">
						<form action="track.php" method="GET" >
							<div class="header-search">
								<input type="text" name="tracknumber" class="s"  autocomplete="off" placeholder="Track Number"/>
							</div>
						</form>
                        </div>
                        <!--/top search-->
                        <div class="title-corner-orange"></div>
                    </div>
                    <!--/header title-->
            </div>
        </div>
        
<!-- middle -->
<div class="white-background">
<div class="container ">
    <div id="middle" class="cols2 box_white">
        
        <!-- content -->
       <div class="content" role="main">
        
        
        <script>
	    SyntaxHighlighter.defaults['gutter'] = false;
	    SyntaxHighlighter.defaults['toolbar'] = true;
	    SyntaxHighlighter.all();
		</script>
        
        <article class="post-detail">            
			<div class="entry">
                    <div class="row">
						<div class="col col_1">
                            <div class="inner">
                        
							<!-- login widget -->
							<div class="widget-container widget_login">
								<h3>Profile</h3>
								
							  	<form  method="post" class="loginform" onSubmit="return validate(this);">								
								<p><label>First Name</label><br>
								<input name="txtfirst_name" id="txtfirst_name" class="input" value="<?php echo $clientrow['first_name'];?>" size="20" tabindex="10" type="text"  ></p>
								<div id="txtfirst_name1"></div>								
								
								<p><label>Last Name</label><br>
								<input name="txtlast_name" id="txtlast_name" class="input" value="<?php echo $clientrow['last_name'];?>" size="20" tabindex="20" type="text"  ></p>								
								<div id="txtlast_name1"></div>								
								
								<p><label>Email Id</label><br><input name="txxemail_id" id="txxemail_id" class="input" value="<?php echo $clientrow['email_id'];?>" size="20" tabindex="20" type="text"  ></p>
								<div id="txxemail_id1"></div>								
								
								<p><label>Contact No</label><br><input name="ttxcontact_no" id="ttxcontact_no" class="input" value="<?php echo $clientrow['contact_no'];?>" size="20" tabindex="20" type="text"  ></p>																						
								<div id="ttxcontact_no1"></div>	
								           	
								<?php
							
							$cn=getCon();
							$city_id = $clientrow['city_id'];
							$data = mysqli_fetch_array(mysqli_query("select state_id from citymast where city_id = ".$clientrow['city_id'],$cn));
							$state_id = $data['state_id'];
							$data = mysqli_fetch_array(mysqli_query("select country_id from states where id = ".$state_id,$cn));
							$country_id = $data['country_id'];
							?>
							
							<p><label>COUNTRY NAME</label><br>	
								<select id="cou" class="input" style="width:520px;height:35px;">
								<option value="select">Select Country</option>
								<?php 
								$query = mysqli_query("select id, name from countries",$cn);								
								while($data = mysqli_fetch_array($query))
								{
									if($data['id'] == $country_id)
										echo '<option selected="selected" value="'.$data['id'].'">'.$data['name'].'</option>';
									else
										echo '<option value="'.$data['id'].'">'.$data['name'].'</option>';
								}
								?>																	
								</select>
								<p><label>STATE NAME</label><br>	
								<select id="state" class="input" style="width:520px;height:35px;">
									<option id="select">Select State</option>
									<?php 
									$query = mysqli_query("select id, name from states where country_id = ".$country_id,$cn);								
									while($data = mysqli_fetch_array($query))
									{
										if($data['id'] == $state_id)
											echo '<option selected="selected" value="'.$data['id'].'">'.$data['name'].'</option>';
										else
											echo '<option value="'.$data['id'].'">'.$data['name'].'</option>';
									}
									?>
								</select>
							<p><label>CITY NAME</label><br>	
								 <select class="input" name="cmbcity_id" id="cmbcity_id" style="width:520px;height:35px;" >
									<option value="select">Select City</option>
								<?php 
								$query=mysqli_query("select city_id, city_name from citymast where state_id = ".$state_id,$cn);
								while($data = mysqli_fetch_array($query))
								{
									if($data['city_id'] == $city_id)
										echo '<option selected="selected" value="'.$data['city_id'].'">'.$data['city_name'].'</option>';
									else
										echo '<option value="'.$data['city_id'].'">'.$data['city_name'].'</option>';
								}
								
								?>
								</select>
								<?php include("select1.html");?>
                                    <div id="cmbcity_id1"></div>
						<p><label>Address</label><br><textarea class="input" name="xxxaddress" id="xxxaddress" ><?php echo $clientrow['address'];?></textarea></p>																						
								<div id="xxxaddress1"></div>	
								<p class="submit">
								<input type="submit" name="btnsubmit" id="btnsubmit" class="btn-submit" value="SAVE" tabindex="100">
								</p>
							  	</form>
							</div>
							<!--/ login widget --> 
                        </div>    
						</div> 
                                           
                    </div>
                   
                <div class="clear"></div>
                
                </div>
        </article>
        <!--/ entry text -->
        
    </div>
    <!--/content-->
    
    <!--Sidebar-->
    <div class="sidebar">
    	
        <!-- widget_nav_menu -->
        <div class="widget-container widget_nav_menu">
			<h3 class="widget-title">Courier Type</h3>
			<ul>
			<?php
			$q1 = "SELECT * FROM couriertype";
			$rs1 = mysqli_query($cn,$q1);
			while($row1 = mysqli_fetch_array($rs1))
			{
			?>
				<li><a href="couriertype.php?couriertypeid=<?php echo $row1['courier_type_id'];?>"><span><?php echo $row1['courier_type_name'];?></span></a></li>
			<?php
			}
			?>
			</ul>
		</div>  
        <!--/ widget_nav_menu -->
       
             
        </div>
    <!--/ sidebar -->
    
    <div class="clear"></div>
    </div>
     <div class="clear"></div>
</div>    
</div>
<!--/middle-->
<?php include('footer.php');?>
</div>
</body>
</html>
