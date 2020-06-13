<?php
include("../Backend_Template/include/connection.php");
session_start();
if(session_destroy())
{
	$cn=getcon();
	$s=$_SESSION["userId"];
	$logintime=$_SESSION["loginTime"];
	$ip= $_SERVER['REMOTE_ADDR'];
	$logouttime=date(" h:i:s A");
	$q="insert into log (Emp_id,Remote_IP,User_Type,Login_Time,Logout_Time) values ('$s','$ip','ADMIN','$logintime','$logouttime')";
	echo $q;
	mysqli_query($cn,$q);
}
header("Location:index.php");
?>