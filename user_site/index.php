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
<title>Courier Management System</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
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

    <script type="text/javascript" charset="utf-8">
  
    $(window).load(function() {
      $('.tf-header-slider').flexslider({
        animation: "fade",
        maxItems: 11,
        controlNav: true
      });
    });
    
    $(window).load(function() {
      $('.tf-work-carousel').flexslider({
        animation: "slade",
        animationLoop: false,
        itemWidth: 280,
        itemMargin: 30,
        move: 1,
        start: function(slider){
          $('body').removeClass('loading');
        }
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
    
    jQuery(document).ready(function($) {
				$('#work-carousel').carouFredSel({
					next : "#work-carousel-next",
					prev : "#work-carousel-prev",
					auto: false,
					circular: false,
					infinite: true,	
					width: '100%',		
					scroll: {
						items : 1					
					}		
				});
			});
  </script>
  <script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>
<?php include('header.php');?>
                 <!--header title-->
                    <div class="header-title box_white">
                        <div class="header-title-content text-center">
                            <h1><span class="text-orange">We Move products</span>   </h1>
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
                    <!--/header title-->
                    
            </div>
                <div class="clear"></div>
        </div>
        <!--/header-->
        
        <div class="black-background">
            <div class="container">
            <div class="tf-header-slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <a href="#"> <img src="images/img/s2.jpg" alt="" /></a>
                        <div class="details">
                            <div class="text-details">
                                <h2 class="text-bold text-white">Vision</h2> 
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <a href="work-details.html"><img src="images/img/s3.jpg" alt="" /></a>
                        <div class="details">
                            <div class="text-details">
                                <h2 class="text-bold text-white">Services</h2>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <a href="work-details.html"><img src="images/img/s4.jpg" alt="" /></a>
                        <div class="details">
                            <div class="text-details">
                                <h2 class="text-bold text-white">Fetures</h2>

                            </div>
                        </div>
                        
                    </li>
                   
                  
                    
                   
                  </ul>
                </div>
            </div>
            </div>
        </div>
        
<!-- middle -->
        <div class="white-background">
            <div class="container ">
                <div class="our-work">
                    <div class="content">
                        <div class="row">
                            <div class="col col_1_3">
                            <div class="inner">
                                <img src="images/tuts/ico1.jpg" alt="" />
                                <h2 class="text-bold text-white">VISION</h2>
                                <p>
                                To create an organization which could provide employment to thousands of educated youngsters.
                                </p>
                            </div>
                            </div>
                                    
                                    <div class="col col_1_3">
                                        <div class="inner">
                                        <img src="images/tuts/ico2.jpg" alt="" />
                                        <h2 class="text-bold text-white">SERVICES</h2>
                                        <p>The Professional Couriers offers a comprehensive range of solutions to the requirements of delivery of Documents/Non-Documents, all types of cargo – high value, critical and urgent shipments all over India and any part of the World.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col col_1_3">
                                        <div class="inner">
                                        <img src="images/tuts/ico3.jpg" alt="" />
                                        <h2 class="text-bold text-white">FETURES</h2>
                                        <p>	Well co-ordinate own fleet of transport system of vehicles, leased Rail Wagons, bus and train On Travel Couriers, inter connecting all destinations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
    <div id="middle" class="cols2 sidebar_left box_white">
    
        <div class="clear"></div>
		<center>
		<h1>Courier Management</h1>
		</center>
        <div class="divider-space"></div>
        
        <div class="widget-more">
             <div class="post-more">
			 <img src="images/img/s5.jpg" >
            </div>
            
            <div class="row">
<p>
To create an organization which could provide employment to thousands of educated youngsters.

To create an organisation with opportunities to the deserving in owning their own business at their local area, thereby ensuring a Customer Courier bonding with the best of services.

Be always advancing and outperforming in an on guard & systematic manner.

Be more customer friendly and achieve brand enhancement by the exploitation of IT and other technologies for sustained quality standards, training and motivation.

To be identified as the largest Courier in the Country with the presence felt in every nook and corner of India.

To be identified as an economical and effective Courier Service.
<br>
<br>
<h5>Vision of today:</h5>
Being the guiding light - for proactive application of technology and changing with the times.

Being the medium - always advancing, organised, systematic and outperforming.

Being the methodology - aimed at Brand enhancement by exploitation of I.T. and other technologies with sustained quality standard, training and motivation
<br>
<br>
<h5>Vision of tommorrow:</h5>
To stay well ahead of the others and be the Courier with a vision. Opt for value addition in all aspects of services.

</p>                                
                                </div>
            
        </div>
        <div class="clear"></div>
    </div>
                
                    </div>
<!--/middle-->
<?php include('footer.php');?>
</div>
       
         
</body>
</html>
