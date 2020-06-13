<?php
include("../Backend_Template/include/connection.php");
session_start();
$cn = getCon();
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
<title>Courier Management System | Price List</title>


<link href="style.css" media="screen" rel="stylesheet">
<link href="screen.css" media="screen" rel="stylesheet">
<!-- custom CSS -->
<link rel="stylesheet" href="custom.css">

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
<!-- shortcodes: Tabs -->
<script src="js/jquery.tools.min.js"></script>
<!-- SyntaxHighlighter -->
<link href="css/shCore.css" rel="stylesheet">
<link href="css/shThemeDefault.css" rel="stylesheet">
<script src="js/shCore.js"></script>
<script src="js/shBrushPlain.js"></script>
<script src="js/search-input.js"></script>
<script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>

<?php include('header.php');?>
        <div class="black-background">
            <div class="container">
                 <!--header title-->
                    <div class="header-title box_orange">
                        <div class="header-title-content text-left">
                            <h1 class="text-white">Price List</h1>
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
    <div id="middle" class="full_width box_white">
        
        <!-- content -->
    <div class="content" role="main">
        
        <div class="title">
            <h1 class="alignleft">Courier type wise price list</h1>
            <a href="contactus.php" class="btn button_link_medium btn_gray alignright">Contact Us</a>
             <div class="clear"></div>
	    </div>
        
            
        <script>
	    SyntaxHighlighter.defaults['gutter'] = false;
	    SyntaxHighlighter.defaults['toolbar'] = true;
	    SyntaxHighlighter.all();
		</script>
        
        <article class="post-detail">            
			<div class="entry">
            
                <div class="pricing_box">
                    <ul>
                        <li class="price_col">
                            <div class="price_item">
                                <div class="price_col_head">
                                    <h4>Courier Type</h4>
                                    <img src="images/money.png" alt="">
                                </div>
                                <div class="price_col_body">
                                    <ul>
									<?php
						$q1 = "SELECT * FROM couriertype";
						$rs1 = mysqli_query($cn,$q1);
						$cnt = 0;
						while($row1 = mysqli_fetch_array($rs1))
						{
						$cnt++;
						?>
                                        <li <?php if($cnt % 2 == 0){?>class="box_light_gray"<?php }?>><?php echo $row1['courier_type_name'];?></li>
										<?php
										}
										?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                        <li class="price_col">
                            <div class="price_item">
                                <div class="price_col_head">
                                    <h3 class="text-bold">Within Country</h3>
                                    <h2>Price<span>Rs.</span></h2>
                                </div>
                                <div class="price_col_body">
                                    <ul>
									<?php
						$q1 = "SELECT * FROM couriertype";
						$rs1 = mysqli_query($cn,$q1);
						$cnt = 0;
						while($row1 = mysqli_fetch_array($rs1))
						{
						$cnt++;
						?>
                                        <li <?php if($cnt % 2 == 0){?>class="box_light_gray"<?php }?>><?php echo $row1['country_price'];?></li>
										<?php
										}
										?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                        <li class="price_col">
                           <div class="price_item">
                                <div class="price_col_head">
                                    <h3 class="text-bold">Out Side Country</h3>
                                    <h2>Price<span>Rs.</span></h2>
                                </div>
                                <div class="price_col_body">
                                    <ul>
									<?php
						$q1 = "SELECT * FROM couriertype";
						$rs1 = mysqli_query($cn,$q1);
						$cnt = 0;
						while($row1 = mysqli_fetch_array($rs1))
						{
						$cnt++;
						?>
                                        <li <?php if($cnt % 2 == 0){?>class="box_light_gray"<?php }?>><?php echo $row1['out_country_price'];?></li>
										<?php
										}
										?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                        <li class="price_col">
                            <div class="price_item">
                                <div class="price_col_head">
                                    <h3 class="text-bold">Details Of</h3>
                                    <h2>Price<span>Rs.</span></h2>
                                </div>
                                <div class="price_col_body">
                                    <ul>
									<?php
						$q1 = "SELECT * FROM couriertype";
						$rs1 = mysqli_query($cn,$q1);
						$cnt = 0;
						while($row1 = mysqli_fetch_array($rs1))
						{
						$cnt++;
						?>
                                        <li <?php if($cnt % 2 == 0){?>class="box_light_gray"<?php }?>><a href="couriertype.php?couriertypeid=<?php echo $row1['courier_type_id'];?>" class="aligncenter">More</a></li>
										<?php
										}
										?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>               
            </div>
        </article>
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
