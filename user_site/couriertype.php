<?php
include("../Backend_Template/include/connection.php");
session_start();
$cn = getCon();
$id = "";
if(isset($_GET['couriertypeid']))
{
	$id = $_GET['couriertypeid'];
}
$q = "SELECT * FROM couriertype WHERE courier_type_id = $id";
$rs = mysqli_query($cn,$q);
$typerow = mysqli_fetch_array($rs);
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
<title>Courier Management System | Courier Type</title>


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
<!-- carousel -->
<script src="js/jquery.carouFredSel.packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<!-- lightbox prettyPhoto -->
<link rel="stylesheet" href="css/prettyPhoto.css">
<script src="js/jquery.prettyPhoto.js"></script>
<!-- shortcodes: slideshows -->
<script src="js/slides.min.jquery.js"></script>
<!-- SyntaxHighlighter -->
<link href="css/shCore.css" rel="stylesheet">
<link href="css/shThemeDefault.css" rel="stylesheet">
<script src="js/shCore.js"></script>
<script src="js/shBrushPlain.js"></script>
<script src="js/search-input.js"></script>
<script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>
<?php
include('header.php');
?>
        <div class="black-background">
            <div class="container">
                 <!--header title-->
                    <div class="header-title box_orange">
                        <div class="header-title-content text-left">
                            <h1 class="text-white">Courier Type</h1>
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
        
        <div class="title">
		<h1>Courier Type :  <?php echo $typerow['courier_type_name'];?></h1>	    
	    </div> 
        
        <script>
	    SyntaxHighlighter.defaults['gutter'] = false;
	    SyntaxHighlighter.defaults['toolbar'] = true;
	    SyntaxHighlighter.all();
		</script>
        
        <article class="post-detail">            
			<div class="entry">
            					                               
              	<h2><?php echo $typerow['discription'];?></h2>

					<div class="styled_table">
                    <table>
                        <thead>
                            <tr>
                                <th style="width:35%">Source</th>
                                <th style="width:35%">Destination</th>
                                <th style="width:30%">Price</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						$q1 = "SELECT c1.city_name,c2.city_name,p1.price FROM citymast as c1, citymast as c2, pricemast as p1 WHERE c1.city_id = p1.source_city_id AND c2.city_id = p1.destination_city_id AND p1.courier_type_id = $id";
						$rs1 = mysqli_query($cn,$q1);
						while($row1 = mysqli_fetch_array($rs1))
						{
						?>
                            <tr>
                                <td><?php echo $row1[0];?></td>
                                <td><?php echo $row1[1];?></td>
                                <td><?php echo $row1[2];?></td>
                            </tr>
						<?php
						}
						?>
                        </tbody>
                    </table>
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
<?php include("footer.php");?>
</div>
</body>
</html>
