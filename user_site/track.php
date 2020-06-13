<?php
include("../Backend_Template/include/connection.php");
$cn = getCon();
$loginmsg = "";
session_start();
$cid = "0";
if(isset($_GET['tracknumber']))
{
	$cid = $_GET['tracknumber'];
}
if(isset($_REQUEST['btnsubmit']))
{
	$cn=getCon();
	$cid = $_REQUEST['ttxconsignment_Number'];
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
<title>Courier Management System | Track Package</title>


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

<script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>
<?php include('header.php');?>
                 <!--header title-->
                    <div class="header-title box_white">
                        <div class="header-title-content text-left">
                            <h1>Get in touch</h1>
                        </div>
                        </div>
                        <div class="title-corner-white"></div>
                        <!--/top search-->
                    </div>
                    <!--/header title-->
            </div>
                <div class="clear"></div>
        </div>
        <!--/header-->
        
        
<!-- middle -->
<div class="white-background">
    <div class="container ">
        <div id="middle" class="cols2 sidebar_left box_white">
            <!-- content -->
            <div class="content" role="main">
            
                <article class="post-detail">            
                    <div class="entry">
                        <div class="add-comment" id="addcomments">
                            <h3>Tracking Information</h3>
                           
                                <div class="clear"></div>
                                
                            <div class="comment-form">
                            <form method="post" id="commentForm"  onSubmit="return validate(this);">
                                <div class="row">
                                <div class="col col_1">
                                <div class="inner">
                                <div class="row field_text  infieldlabel">
                                    <input type="text" name="ttxconsignment_Number" id="ttxconsignment_Number"  class="inputtext input_middle required"  placeholder="Consignment Number">
									<div id="ttxconsignment_Number"></div>
                                </div>
								</div>
                                </div>
                                

                                <div class="col col_1_2">
                                <div class="inner">                                
                                <div class="row rowSubmit">
                                <input type="submit"  value="Submit" class="btn button_link_medium btn_pink text-semibold alignright" name="btnsubmit">
                                <?php echo $loginmsg;?>
                                </div>
                                </div>
                                </div>
                               
                            </div>
                            </form>
                            </div>
							<div class="clear"></div>
<?php
	$q2 =  "select * from couriermast where consignment_no = ". $cid;
	echo $q2;
	$res1=mysqli_query($cn,$q2);
	$row1=mysqli_fetch_array($res1);
	//echo $row1['receiver_name'];
	$count = mysqli_num_rows($res1);
	$q1 = "select s.status , t.transport_name , sb.address ,ct.city_name , c.datetime from  trackmast as c  , transportation as t , statusmast as s ,sub_branch as sb , citymast as ct where s.status_id=  c.status_id and t.transport_id  = c.transport_id and c.suboffice_id=sb.suboffice_id AND  sb.city_id= ct.city_id and consignment_no =". $cid;
	$rs1 = mysqli_query($cn,$q1);
	$cnt = mysqli_num_rows($rs1);
	if($cnt > 0)
	{	
?>
<br><br>
								<table width = "50%">
	<tr>
	<td height = "30px"> Consignment No : </td> <td> <?php echo $cid; ?> </td>
	</tr>
</tr>
<td>
Receiver Name : </td>
 <td height = "30px"><?php echo $row1['receiver_name'];?>
</td>
<tr><td>
Receiver Address :</td>
 <td><?php echo $row1['receiver_address'];?>
</td>
</table>
<h2>Tracking Details</h2>
                     <div class="styled_table table_orange">
                    <table>
                        <thead>
                            <tr>
                                <th style="width:25%">STATUS</th>
                                <th style="width:25%">TRANSPORT</th>
                                <th style="width:25%">CITY</th>
                                <th style="width:25%">DATE</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php


						while($row1 = mysqli_fetch_array($rs1))
						{
						?>
                            <tr>
                                <td><?php echo $row1['status'];?></td>
                                <td><?php echo $row1['transport_name'];?></td>
                                <td><?php echo $row1['city_name'];?></td>
                                <td><?php echo $row1['datetime'];?></td>
                            </tr>
						<?php
						}
						?>
                        </tbody>
                    </table>
                    </div>
					<?php
					}
					else{
					?>
				<div class="clear"></div>
				<div style="font-size:14px;color:#009966;font-weight:bold">No Tracking Information Found...!!!</div>
					<?php
					}
					?>
                    </div>
                </article>
                
            </div>
            <!--/content-->
            <div class="sidebar">
                <div class=" widget_contact">   
            	<h3 class="widget-title">Contact details:</h3>
	            	<div class="contact-address">
						<div class="address"><em>Adress :</em>
                            <p>Webby Infotech<br /> 1 Nilkamal Society<br />Nr. Sahaj Super Store<br>
							Anad Mahal Road<br>Adajan, Surat, Gujarat.
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
