<body class="page-body skin-red  " >
<div class="page-container"><!-- ADD class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
<div class="sidebar-menu">	

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="dashbord.php">
					<style>
						#ae
						{
							color:white;
						}
					</style>
					<h1 id="ae"><b>CMS</b></h1>
						<!--<img src="../Backend_Template/assets/images/logo@2x.png" width="120" alt="" />-->
					</a>
				</div>
		
			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<li><a href="#"><span class="title">ADMIN</span></a>
					<ul>
						<li><a href="admin.php"><span class="title">ADD ADMIN</span></a></li>
                        <li><a href="admin_display.php"><span class="title">VIEW ADMIN</span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="title">EMPLOYEE</span></a>
					<ul>
						<li><a href="employee.php"><span class="title">ADD EMPLOYEE</span></a></li>
                        <li><a href="employee_display.php"><span class="title">VIEW EMPLOYEE</span></a></li>
					</ul>
				</li>
                <li><a href="#"><span class="title">LOCATION</span></a>
					<ul>
					<li><a href="#"><span class="title">COUNTRY</span></a>
						<ul>
						<li><a href="countries.php"><span class="title">ADD COUNTRY</span></a></li>
						<li><a href="countries_display.php"><span class="title">VIEW COUNTRY</span></a></li>
						</ul>
					</li>
					<li><a href="#"><span class="title">STATES</span></a>
						<ul>
						<li><a href="states.php"><span class="title">ADD STATES</span></a></li>
						<li><a href="states_display.php"><span class="title">VIEW STATES</span></a></li>
						</ul>
					</li>
					<li><a href="#"><span class="title">CITY</span></a>
						<ul>
						<li><a href="citymast.php"><span class="title">ADD CITY</span></a></li>
						<li><a href="citymast_display.php"><span class="title">VIEW CITY</span></a></li>
						</ul>
					</li>
					<li><a href="#"><span class="title">AREA</span></a>
						<ul>
						<li><a href="areamast.php"><span class="title">ADD AREA</span></a></li>
						<li><a href="areamast_display.php"><span class="title">VIEW AREA</span></a></li>
						</ul>
					</li>   
					</ul>
				</li>
				<li><a href="#"><span class="title">CLIENT</span></a>
					<ul>
						<li><a href="clientmast.php"><span class="title">ADD CLIENT</span></a></li>
                        <li><a href="clientmast_display.php"><span class="title">VIEW CLIENT</span></a></li>
					</ul>
				</li>
				<!--<li><a href="#"><span class="title">Cms</span></a>
					<ul>
						<li><a href="cmsmast.php"><span class="title">ADD Cms</span></a></li>
                        <li><a href="cmsmast_display.php"><span class="title">VIEW Cms</span></a></li>
					</ul>
				</li>-->
				
				<li><a href="#"><span class="title">COURIER TYPE</span></a>
					<ul>
						<li><a href="couriertype.php"><span class="title">ADD COURIER TYPE</span></a></li>
                        <li><a href="couriertype_display.php"><span class="title">VIEW COURIER TYPE</span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="title">MAIN BRANCH</span></a>
					<ul>
						<li><a href="main_branch.php"><span class="title">ADD MAIN BRANCH</span></a></li>
                        <li><a href="main_branch_display.php"><span class="title">VIEW MAIN BRANCH</span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="title">SUB BRANCH</span></a>
					<ul>
						<li><a href="sub_branch.php"><span class="title">ADD SUB BRANCH</span></a></li>
                        <li><a href="sub_branch_display.php"><span class="title">VIEW SUB BRANCH</span></a></li>
					</ul>
				</li>
				
				<li><a href="#"><span class="title">PRICE</span></a>
					<ul>
						<li><a href="pricemast.php"><span class="title">ADD PRICE</span></a></li>
                        <li><a href="pricemast_display.php"><span class="title">VIEW PRICE</span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="title">STATUS</span></a>
					<ul>
						<li><a href="statusmast.php"><span class="title">ADD STATUS</span></a></li>
                        <li><a href="statusmast_display.php"><span class="title">VIEW STATUS</span></a></li>
					</ul>
				</li>
				
				<li><a href="#"><span class="title">TRANSPORT</span></a>
					<ul>
						<li><a href="transportation.php"><span class="title">ADD TRANSPORT</span></a></li>
                        <li><a href="transportation_display.php"><span class="title">VIEW TRANSPORT</span></a></li>
					</ul>
				</li>
				
				<li><a href="#"><span class="title">REPORTS</span></a>
					<ul>
						<li><a href="couriermast_display.php"><span class="title">VIEW COURIER</span></a></li>
						<li><a href="report_log.php"><span class="title">VIEW LOG REPORT</span></a></li>
                        <li><a href="contactmast_display.php"><span class="title">VIEW CONTACT</span></a></li>
						<li><a href="report_type_month.php"><span class="title">MONTHLY REPORT</span></a></li>
						<li><a href="feedbackmast_display.php"><span class="title">VIEW FEEDBACK</span></a></li>
					</ul>
				</li>
			</ul>
			
		</div>

	</div>
    <div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- ADD class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo $upd_admin."/".$userImage;?>" alt="" class="img-circle" width="70" height="70" style="width: 70px;height: 70px;" />
							<?php echo $_SESSION['userName'];?>
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="admin_update.php?id=<?php echo $_SESSION['userId'];?>">
									<i class="entypo-user"></i>
									My Profile
								</a>
							</li>
		
							<li>
								<a href="logout.php">
									<i class="entypo-logout right"></i>
									Logout
								</a>
							</li>
		
							
						</ul>
					</li>
		
				</ul>
				
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
					<li>
						<a href="logout.php">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
	