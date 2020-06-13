<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	<title>Login</title>
	<link rel="stylesheet" href="../Backend_Template/assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/bootstrap.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/neon-forms.css">
	<link rel="stylesheet" href="../Backend_Template/assets/css/skins/cafe.css">
</head>
<body class="page-body skin-cafe login-page login-form-fall" >


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>

<div class="login-container">	
	<div class="login-header login-caret">		
		<div class="login-content">			
			<a href="index.php" class="logo">
			<style>
						#ae
						{
							color:white;
						}
					</style>
					<h1 id="ae"><b>CMS</b></h1>
				<!--<img src="../Backend_Template/assets/images/logo@2x.png" width="120" alt="" />-->
			</a>			
			<p class="description">Dear user, log in to access the admin area!</p>			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>		
	</div>	
	<div class="login-progressbar">
		<div></div>
	</div>	
	<div class="login-form">		
		<div class="login-content">			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter proper username and password.</p>
			</div>			
			<form method="post" role="form" id="form_login">				
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>					
				</div>				
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" data-toggle="password"/>
					</div>				
				</div>				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>
			</form>
			<div class="login-bottom-links">				
				<a href="forgetpassword.php" class="link">Forgot your password?</a>				
				<br />				
			</div>			
		</div>		
	</div>	
</div>


	<!-- Bottom scripts (common) -->
	<script src="../Backend_Template/assets/js/jquery-1.11.0.min.js"></script>
	<script>$.noConflict();</script>
	<script src="../Backend_Template/assets/js/gsap/TweenMax.min.js"></script>
	<script src="../Backend_Template/assets/js/bootstrap.js"></script>
	<script src="../Backend_Template/assets/js/jquery.validate.min.js"></script>
	<script src="neon-login.js"></script>
	<script src="../Backend_Template/assets/js/bootstrap-show-password.js"></script>

</body>
</html>