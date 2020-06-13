<?php
session_start();
if(isset($_SESSION['clientid']) && $_SESSION['clientid'] != '')
{
	
}
else{
	header("location:login.php");
}

?>