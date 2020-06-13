<?php
include("../Backend_Template/include/connection.php");
//include("../Backend_Template/include/session.php");
session_start(); 
	$cn=getCon();
    if(isset($_REQUEST['oldpassword']))
	{
		$id=$_REQUEST['oldpassword'];
		$query="select * from clientmast where client_id=".$_SESSION['clientId']." AND password=".$id;
		//echo $query;
		$r=mysqli_query($cn,$query);
		$result=mysqli_num_rows($r);
		if($result == 1)
		{
			echo "match";
		}
		else
		{
			echo "not match";
		}
		//exit();
	}
