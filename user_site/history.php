<?php
include("include/session.php");
include("../Backend_Template/include/connection.php");
$cn = getCon();
$loginmsg = "";
$q1 = "SELECT * FROM clientmast WHERE client_id = ".$_SESSION['clientid'];
$rs = mysqli_query($cn,$q1);
$clientrow = mysqli_fetch_array($rs);
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
<title>Courier Management System | History</title>


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
                            <h1 class="text-white">History</h1>
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
        <div class="content">
    <div class="title">
		<h1>Tracking History</h1>	    
	    </div> 
        
        <script>
	    SyntaxHighlighter.defaults['gutter'] = false;
	    SyntaxHighlighter.defaults['toolbar'] = true;
	    SyntaxHighlighter.all();
		</script>
        
        <article class="post-detail">            
			<div class="entry">
            					                               
              	<div class="row">
                    <div class="col col_1 ">
                    <div class="inner">
	<?php
	/*$q1 = "SELECT c1.courier_id,c1.consignment_no,c4.courier_type_name, c2.city_name as source_city,c3.city_name as destination_city,c1.delivery_date FROM couriermast as c1, citymast as c2,citymast as c3, couriertype as c4 WHERE c1.source_city_id = c2.city_id AND c1.destination_city_id = c3.city_id AND c4.courier_type_id=c1.courier_type_id AND client_id = ".$_SESSION['clientid'];*/
	$q1="select * from couriermast where client_id=".$_SESSION['clientId'];
	$rs1 = mysqli_query($cn,$q1);
	$cnt = mysqli_num_rows($rs1);
				?>
				<div class="styled_table table_orange">
                    <table>
                        <thead>
                            <tr>
                                <th>Consignment No</th>
                                <th>COURIER TYPE</th>
                                <th>FROM CITY</th>
                                <th>TO CITY</th>
                                <th>DATE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						while($row1 = mysqli_fetch_array($rs1))
						{
						?>
                            <tr>
                                <td><?php echo $row1['consignment_no'];?></td>
                                <td><?php echo $row1['courier_type_id'];?></td>
                                <td><?php echo $row1['source_city_id'];?></td>
                                <td><?php echo $row1['destination_city_id'];?></td>
                                <td><?php echo $row1['delivery_date'];?></td>
                                <td><a href="track.php?tracknumber=<?php echo $row1['consignment_no'];?>">VIEW MORE</a></td>
                            </tr>
						<?php
						}
						?>
                        </tbody>
                    </table>
                    </div>
					</div>
                    </div>
                </div>
                     
          		<div class="clear"></div>
			</div>
        </article>
    <!--/article-->
    
    
    <!--/ sidebar -->
    
    <div class="clear"></div>
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
