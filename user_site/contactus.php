<?php
include('include/connection.php');
$loginmsg = "";
session_start();
if(isset($_REQUEST['btnsubmit']))
{
	//$id = $_SESSION['clientid'];
	insertData("feedbackmast","fid","");
	$loginmsg = "Success..!!";
	header("location:contactus.php");
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
<title>Courier Management System | Contact Us</title>


<link href="style.css" media="screen" rel="stylesheet">
<link href="screen.css" media="screen" rel="stylesheet">
<!-- custom CSS -->
<link rel="stylesheet" href="custom.css">
<link href="css/flexslider.css" media="screen" rel="stylesheet" type="text/css">
<!-- favicon.ico and apple-touch-icon.png -->
<link rel="shortcut icon" href="favicon.html">
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57-iphone.html">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72-ipad.html">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114-iphone4.html">
<!-- Mobile optimized -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/respond.min.js"></script>
<script src="js/libs/jquery.min.js"></script>
<script src="js/validation.js"></script>
<!-- scripts -->
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/general.js"></script>

<!-- carousel -->
<script src="js/jquery.carouFredSel.packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<!-- lightbox prettyPhoto -->
<link rel="stylesheet" href="css/prettyPhoto.css">
<script src="js/jquery.prettyPhoto.js"></script>
<!-- top slider -->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/search-input.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery.gmap.min.js"></script>
<script type="text/javascript">
    $(window).load(function(){
							$("#map1").gMap({ 
								markers: [{ 
									latitude: 21.1835309, 
									longitude: 72.8306682}],
                                    zoom: 14
								});								
						});
                        
      $(window).load(function() {
      $('.tf-footer-carousel').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 140,
        itemMargin: 15,
        minItems: 1,
        maxItems: 6,
        move:1
      });
    });
</script>

<script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>
<?php include('header.php');?>
                 <!--header title-->
                    <div class="header-title box_white">
                        <div class="header-title-content text-left">
                            <h1>Get in touch</h1>
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
                        </div>
                        <div class="title-corner-white"></div>
                        <!--/top search-->
                    </div>
                    <!--/header title-->
            </div>
                <div class="clear"></div>
        </div>
        <!--/header-->
        
        
        <div class="black-background">
            <div class="container">
                 <!--header slider-->
            <div class="header-slider">
				<div id="map1" class="map" style="width: 100%; height: 350px; overflow: hidden;"> </div>
			</div>
                    <!--/header slider-->
            </div>
        </div>
        <div class="white-background">
            </div>
<!-- middle -->
<div class="white-background">
    <div class="container ">
        <div id="middle" class="cols2 sidebar_left box_white">
            <!-- content -->
            <div class="content" role="main">
            
                <article class="post-detail">            
                    <div class="entry">
                        <div class="add-comment" id="addcomments">
                            <h3>Feel free to contact us</h3>
                           
                                <div class="clear"></div>
                                
                            <div class="comment-form">
                            <form method="post" id="commentForm"  onSubmit="return validate(this);">
                                <div class="row">
                                <div class="col col_1_2">
                                <div class="inner">
                                <div class="row field_text  infieldlabel">
                                    <input type="text" name="txtname" id="txtname"  class="inputtext input_middle required"  placeholder="Your Name">
									<div id="txtname1"></div>
                                </div>
                                
                                <div class="row field_text omega infieldlabel">
                                    <input type="text" name="txxemail_id" id="txxemail_id" class="inputtext input_middle required" placeholder="Email Id" >
                                </div>
									<div id="txxemail_id1"></div>                                
                                <div class="row field_text  omega infieldlabel">
                                    <input type="text" name="ttxcontact_no" id="ttxcontact_no" class="inputtext input_middle required" placeholder="Contact No">
									<div id="ttxcontact_no1"></div>
                                </div>
								</div>
                                </div>
                                

                                <div class="col col_1_2">
                                <div class="inner">
                                <div class="row field_textarea infieldlabel">
                                    <textarea cols="30" rows="10" name="xxxdescription" id="xxxdescription" class="textarea textarea_middle required" placeholder="Description"></textarea>
									<div id="xxxdescription1"></div>
                                </div>
                                
                                <div class="row rowSubmit">
                                <input type="reset" value="Reset" class="btn button_link_medium btn_gray text-semibold alignright">
                                <input type="submit"  value="Submit" class="btn button_link_medium btn_pink text-semibold alignright" name="btnsubmit">
                                <?php echo $loginmsg;?>
                                </div>
                                </div>
                                </div>
                               
                            </div>
                            </form>
                            </div>
                            
                        </div>
                        <div class="clear"></div>
                    </div>
                </article>
                
            </div>
            <!--/content-->
            <div class="sidebar">
                <div class=" widget_contact">   
            	<h3 class="widget-title">Contact details:</h3>
	            	<div class="contact-address">
						<div class="address"><em>Adress :</em>
                            <p>Webby Infotech<br /> 405, Shyam Market<br />
							Ringroad, Surat, Gujarat.
							</p>
                        </div>
						<div class="phone"><em>Phone:</em> <span>099 78 78 5671</span></div>
		                <div class="mail"><em>Email:</em> <a href="mailto:info@webbyinfotech.in">info@webbyinfotech.in</a></div>
					</div>  
			</div>
            </div>
            <div class="clear"></div>
        </div>
         <div class="clear"></div>
    </div>
<div class="clear">            
</div>
<!--/middle-->
<?php 
include('footer.php');
?>
</div>
       

</div>  
</body>
</html>
