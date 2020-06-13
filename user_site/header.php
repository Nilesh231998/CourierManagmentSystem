<body>
    <div class="body-wrapper">
        <div class="white-background">
            <div class="container">
                <div class="header">
                    <div class="header-nav box_white">
                    <!--logo-->
                       <div class="logo"><a href="index.php"><img src="images/courierlogo4.png" alt="" /></a></div>
                    <!--/logo-->
                    <!--Top Menu-->
                       <div id="topmenu">
                        <ul class="dropdown">
                            <li class="menu-level-0"><a href="office.php">Office <span>What we do</span></a></li>
                            <li class="menu-level-0"><a href="pricelist.php">Price List<span>Pricing &amp; More</span></a></li>            
<?php
if(isset($_SESSION['clientid']) && $_SESSION['clientid'] != '')
{
?>
                            <li class="menu-level-0"><a href="#"><?php echo $_SESSION['clientname'];?> <span>Connect account</span></a>
                            
                                <ul class="submenu-1">
                                    <li class="menu-level-1"><a href="profile.php"><span>My Profile</span></a></li>
									<li class="menu-level-1"><a href="changepassword.php"><span>Change Password</span></a></li>
                                    <li class="menu-level-1"><a href="history.php"><span>History</span></a></li>
                                    <li class="menu-level-1"><a href="logout.php"><span>Logout</span></a></li>
                                </ul>
                            </li>
<?php
}
else{
?>
                       <li class="menu-level-0"><a href="login.php">Client Login <span>Connect account</span></a></li>
<?php
}
?>
                        <li class="menu-level-0"><a href="aboutus.php">About Us <span>Who we are</span></a></li>            

					   <li class="menu-level-0"><a href="contactus.php">Contact Us <span>Connect Us</span></a></li>                        </ul>
                    </div>
                       <!--/top menu-->
                    </div>                    
                    <!--Let's Do It-->
                    <a href="contactus.php"><div class="header-box box_orange"><h2 class=" text-white text-extrabold">LET`S DO IT</h2></div></a>
                    <!--/let's do it-->
                    <div class="clear"></div>
                    
                   
                </div>
