<?php 
	//session_start();
//include("../Backend_Template/include/session.php");
include("../Backend_Template/include/connection.php");
$msg="";

		if(isset($_REQUEST['btnlogin']))
	    {
			$dis = "select email_id,password from admin where email_id='".$_REQUEST['email_id']."'";
			//echo $dis;
			$result = executeQuery($dis);
			$n = mysqli_num_rows($result);
			
			if($n == 1)
			{
				$row = fetchAll($result);
				$otp=rand(1000,5000);
				$q="insert into forget_password(email_id,otp) values ('".$row['email_id']."','$otp')";
				//echo $q;
				executeQuery($q);
				
				$to=$row['email_id'];
				$subject = "OTP";
				$message = "your otp is=<h2>".$otp."</h2>";
				$header = "MIME-Version: 1.0\r\n";
				$header .= "Content-type: text/html\r\n";
         
				$retval = mail ($to,$subject,$message,$header);
				$msg = "OTP Sended to Your Email Id .....!!";
				//echo $_SESSION['clientId'];
				//echo $_SESSION['clientName'];
				header("location:otp.php");
			}
			else
			{
				$msg = "Email Id Not Found.....!!";
		    }
		}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-26">
						Forget Password
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email_id" id="Email_id">
						<span class="focus-input100" data-placeholder="Enter Email Id"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btnlogin">
								SUBMIT
							</button>
						</div>
					</div>
					
					<div class="text-center">
						<span class="txt1" style="color:red;">
							<?php echo $msg; ?>
						</span>
					</div>

					<div class="text-center p-t-115" style="padding-top: 40px;">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="index.php">
							Sign in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>