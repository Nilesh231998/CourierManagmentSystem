<div class="navbar navbar-fixed-top custom-navbar" role="navigation" style="background: #000 0;padding: 0;">
	<div class="container">
		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">CMS</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
			
			<?php
				//echo "samu";
				if(isset($_SESSION['clientName']))
				{
			?>
			
				<!--<li><a href="index.php" class="smoothScroll">Intro</a></li>-->
				<li><a href="branch.php" class="smoothScroll">Office</a></li>
				<li><a href="price_table.php" class="smoothScroll">Price List</a></li>
				<li><a href="tracking.php" class="smoothScroll">Tracking</a></li>
				<li><a href="myprofile.php" class='smoothScroll' class="dropdown-toggle"><?php echo $_SESSION['clientName'] ?></a></li>
				<li><a href="about_us.php" class="smoothScroll">About Us</a></li>
				<li><a href="contact.php" class="smoothScroll">Contact Us</a></li>
				<!--<li><a href='myprofile.php' class='smoothScroll'>My Profile</a></li>--> 
				<li><a href="change_password.php" class="smoothScroll">Change Password</a></li>
				<li><a href='history.php' class='smoothScroll'>History</a></li>
				<li><a href='feedback.php' class='smoothScroll'>Feedback</a></li>
				<li><a href='logout.php' class='smoothScroll'>Logout</a></li>
				
				<?php
				}
				else
				{
				?>
				<li><a href="branch.php" class="smoothScroll">Office</a></li>
				<li><a href="price_table.php" class="smoothScroll">Price List</a></li>
				<li><a href="about_us.php" class="smoothScroll">About Us</a></li>
				<li><a href="tracking.php" class="smoothScroll">Tracking</a></li>
				<!--<li><a href="registation.php" class="smoothScroll">Register</a></li>-->
				<li><a href="contact.php" class="smoothScroll">Contact Us</a></li>
				<li><a href="login.php" class="smoothScroll">Login <i class="fa fa-sign-in"></i></a></li>
				<?php
				}
				?>
				  

			</ul>
		</div>
		<?php include("script.php");?>
	</div>
</div>