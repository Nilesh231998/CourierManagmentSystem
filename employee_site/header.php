<body class="page-body skin-cafe " >

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
<div class="sidebar-menu">	

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="employee.php">
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
			
			<?php  
			$type=$_SESSION['userType'];
			//echo "type=". $type;
			
			if($type=="manager")
			{
			?>						
			<ul id="main-menu" class="main-menu">
				<li><a href="#"><span class="title">EMPLOYEE</span></a>
					<ul>
						<li><a href="employee.php"><span class="title">ADD EMPLOYEE</span></a></li>
                        <li><a href="employee_display.php"><span class="title">VIEW EMPLOYEE DETAIL</span></a></li>
					</ul>
				</li>
			
				<li><a href="#"><span class="title">CLIENT</span></a>
					<ul>
						<li><a href="clientmast.php"><span class="title">ADD CLIENT</span></a></li>
                        <li><a href="clientmast_display.php"><span class="title">VIEW CLIENTDETAIL</span></a></li>
						
					</ul>
				</li>
			
                <li><a href="#"><span class="title">COURIER</span></a>
					<ul>
						<li><a href="couriermast.php"><span class="title">ADD COURIER</span></a></li>
                        <li><a href="couriermast_display.php"><span class="title">VIEW CCOURIER DETAIL</span></a></li>
					</ul>
				</li>
			
                <li><a href="#"><span class="title">LOCATION</span></a>
					<ul>
						<li><a href="countries_display.php"><span class="title">VIEW COUNTRY</span></a></li>
                        <li><a href="states_display.php"><span class="title">VIEW STATES</span></a></li>
						<li><a href="citymast_display.php"><span class="title">VIEW CITY</span></a></li>
                        <li><a href="areamast_display.php"><span class="title">VIEW AREA</span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="title">TRACK</span></a>
					<ul>
						<li><a href="trackmast.php"><span class="title">ADD TRACK</span></a></li>
                        <li><a href="trackmast_display.php"><span class="title">VIEW TRACK DETAIL</span></a></li>
					</ul>
				</li>
                <li><a href="#"><span class="title">REPORTS</span></a>
					<ul>
						<li><a href="clientmast_report.php"><span class="title">VIEW CLIENT DETAILS</span></a></li>
                        <li><a href="couriermast_report.php"><span class="title">VIEW COURIER DETAILS</span></a></li>
						<li><a href="client_courier_traking.php"><span class="title">CLIENT COURIER TRACKING</span></a></li>
                        <li><a href="feedbackmast_display.php"><span class="title">VIEW FEEDBACK</span></a></li>
					</ul>
				</li>
			</ul>
			<?php
			}
			?>
			<!-- This code for supervisor -->
			<?php  
			
			if($type=="supervisor")
			{
			?>
			<ul id="main-menu" class="main-menu">
				
			
				<li><a href="#"><span class="title">Client</span></a>
					<ul>
						<li><a href="clientmast.php"><span class="title">Add Client</span></a></li>
                        <li><a href="clientmast_display.php"><span class="title">View ClientDetail</span></a></li>
						
					</ul>
				</li>
			
                <li><a href="#"><span class="title">Courier</span></a>
					<ul>
						<li><a href="couriermast.php"><span class="title">Add courier</span></a></li>
                        <li><a href="couriermast_display.php"><span class="title">View Courier Detail</span></a></li>
					</ul>
				</li>
			
				<li><a href="#"><span class="title">Track</span></a>
					<ul>
						<li><a href="trackmast.php"><span class="title">Add Track</span></a></li>
                        <li><a href="trackmast_display.php"><span class="title">View Track Detail</span></a></li>
					</ul>
				</li>
                <li><a href="#"><span class="title">Reports</span></a>
					<ul>
						<li><a href="clientmast_report.php"><span class="title">View Client Details</span></a></li>
                        <li><a href="couriermast_report.php"><span class="title">View Courier Details</span></a></li>
						<li><a href="client_courier_traking.php"><span class="title">Client Courier Tracking</span></a></li>
                        <li><a href="feedbackmast_display.php"><span class="title">View Feedback</span></a></li>
					</ul>
				</li>
			</ul>
			<?php
			}
			?>
			<!-- This code for operator -->
			<?php  
			
			if($type=="operator")
			{
			?>
			<ul id="main-menu" class="main-menu">
			
				<li><a href="#"><span class="title">Client</span></a>
					<ul>
						<li><a href="clientmast.php"><span class="title">Add Client</span></a></li>
                        <li><a href="clientmast_display.php"><span class="title">View ClientDetail</span></a></li>
						
					</ul>
				</li>
			
                <li><a href="#"><span class="title">Courier</span></a>
					<ul>
						<li><a href="couriermast.php"><span class="title">Add courier</span></a></li>
                        <li><a href="couriermast_display.php"><span class="title">View Courier Detail</span></a></li>
					</ul>
				</li>
                <li><a href="#"><span class="title">Reports</span></a>
					<ul>
						<li><a href="clientmast_report.php"><span class="title">View Client Details</span></a></li>
                        <li><a href="couriermast_report.php"><span class="title">View Courier Details</span></a></li>
						<li><a href="client_courier_traking.php"><span class="title">Client Courier Tracking</span></a></li>
                        <li><a href="feedbackmast_display.php"><span class="title">View Feedback</span></a></li>
					</ul>
				</li>
			</ul>
			<?php
			}
			?>
			<!-- This code for courierboy -->
			<?php  
			
			if($type=="courierboy")
			{
			?>
			<ul id="main-menu" class="main-menu">
			
                
				<li><a href="#"><span class="title">Track</span></a>
					<ul>
						<li><a href="trackmast.php"><span class="title">Add Track</span></a></li>
                        <li><a href="trackmast_display.php"><span class="title">View Track Detail</span></a></li>
					</ul>
				</li>
                <li><a href="#"><span class="title">Reports</span></a>
					<ul>
						<li><a href="client_courier_traking.php"><span class="title">Client Courier Tracking</span></a></li>
					</ul>
				</li>
			</ul>
			<?php
			}
			?>
		</div>

	</div>
    <div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo $upd_employee."/".$userImage;?>" alt="" class="img-circle" width="70" height="70" style="width: 70px;height: 70px;" />
							<?php echo $_SESSION['userName'];?><br>
							<?php echo $_SESSION['userType'];?>
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="extra-timeline.html">
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
	