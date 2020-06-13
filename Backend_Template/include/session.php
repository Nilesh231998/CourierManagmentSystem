<?php
session_start();
if(isset($_SESSION['userId']))
{
	$userId = $_SESSION['userId'];
	$userName = $_SESSION['userName'];
	$loginTime=$_SESSION["loginTime"];
	if(isset($_SESSION['userId']))
	{
		$userImage= $_SESSION["userImage"];
	}
	if(isset($_SESSION['userType']))
	{
		$userType= $_SESSION["userType"];
	}
}
else if(isset($_SESSION['clientId']))
{
	$clientId = $_SESSION['clientId'];
	$clientName = $_SESSION['clientName'];
}
else
{
	header("location:index.php");
}
	
?>
