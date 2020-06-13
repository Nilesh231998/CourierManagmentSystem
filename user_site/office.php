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
<title>Courier Management System | Office</title>


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
<!-- SyntaxHighlighter -->
<link href="css/shCore.css" rel="stylesheet">
<link href="css/shThemeDefault.css" rel="stylesheet">
<script src="js/shCore.js"></script>
<script src="js/shBrushPlain.js"></script>
<script src="js/search-input.js"></script>
<script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>

<body>        
       <?php include('header.php');?> 
        <div class="black-background">
            <div class="container">
                 <!--header title-->
                    <div class="header-title box_orange">
                        <div class="header-title-content text-left">
                            <h1 class="text-white">Offices</h1>
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
		<h1>Our Office</h1>	    
	    </div> 
        
        <script>
	    SyntaxHighlighter.defaults['gutter'] = false;
	    SyntaxHighlighter.defaults['toolbar'] = true;
	    SyntaxHighlighter.all();
		</script>
        
        <article class="post-detail">            
			<div class="entry">
			<?php
			$q1 = "SELECT c1.city_id,c1.city_name FROM citymast as c1, sub_branch as s1 WHERE s1.city_id=c1.city_id GROUP BY c1.city_id";
			$rs1 = mysqli_query($cn,$q1);
			$cnt = mysqli_num_rows($rs1);
			$cnt1 = 0;
			while($row1 = mysqli_fetch_array($rs1))
			{
			?>
              	<div class="row">
                    <div class="col col_1_2 ">
                            <h3 class="toggle box"><?php echo $row1['city_name'];?> (Click to Open) <span class="ico"></span></h3>
                            <div class="toggle_content boxed">
							<?php
							$q3 = "SELECT * FROM main_branch WHERE city_id=".$row1['city_id'];
							$rs2 = mysqli_query($cn,$q3);
							while($row3 = mysqli_fetch_array($rs2))
							{
							?>
							<p><b style="font-size:16px;font-weight:bold"><u>Main Branch</u></b>
							<h4 style="color:#666666;font-weight:bold">Address : <?php echo $row3['address'];?></h4>		
							<h5 style="color:#666666;font-weight:bold">Contact No : <?php echo $row3['contact_no'];?></h5>
							<hr>		
							</p>
							<b style="font-size:16px;font-weight:bold"><u>Sub Branch</u></b>
							<?php
							$q2 = "SELECT c1.city_name,s1.contact_no,s1.address FROM citymast as c1, sub_branch as s1 WHERE s1.city_id=c1.city_id AND s1.city_id = ".$row1['city_id']." AND office_id = ".$row3['office_id'];
							$rs2 = mysqli_query($cn,$q2);
							while($row2 = mysqli_fetch_array($rs2))
							{
							?>
                            <p>
							<h4>Address : <?php echo $row2['address'];?></h4>		
							<h5>Contact No : <?php echo $row2['contact_no'];?></h5>
							<hr>		
							</p>
							<?php
							}
							}
							?>
                            </div>

                    </div>
                    <?php
					
					$row1 = mysqli_fetch_array($rs1);
					?>
					<div class="col col_1_2 ">
                            <h3 class="toggle box"><?php echo $row1['city_name'];?> (Click to Open) <span class="ico"></span></h3>
                            <div class="toggle_content boxed">
							<?php
							//if($row1['city_id']=""){echo "h";}
							$q3 = "SELECT * FROM main_branch WHERE city_id=".$row1['city_id'];
							//echo $q3;
							$rs2 = mysqli_query($cn,$q3);
							while($row3 = mysqli_fetch_array($rs2))
							{
							?>
							<p><b style="font-size:16px;font-weight:bold"><u>Main Branch</u></b>
							<h4 style="color:#666666;font-weight:bold">Address : <?php echo $row3['address'];?></h4>		
							<h5 style="color:#666666;font-weight:bold">Contact No : <?php echo $row3['contact_no'];?></h5>
							<hr>		
							</p>
							<b style="font-size:16px;font-weight:bold"><u>Sub Branch</u></b>
							<?php
							$q2 = "SELECT c1.city_name,s1.contact_no,s1.address FROM citymast as c1, sub_branch as s1 WHERE s1.city_id=c1.city_id AND s1.city_id = ".$row1['city_id']." AND office_id = ".$row3['office_id'];
							//echo $q2;
							$rs2 = mysqli_query($cn,$q2);
							while($row2 = mysqli_fetch_array($rs2))
							{
							?>
                            <p>
							<h4>Address : <?php echo $row2['address'];?></h4>		
							<h5>Contact No : <?php echo $row2['contact_no'];?></h5>
							<hr>		
							</p>
							<?php
							}
							}
							?>
                            </div>

					</div>
                </div>
                <div class="clear"></div>
            <?php
			}
			?>
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
