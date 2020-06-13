<?php
include("../Backend_Template/include/connection.php");
session_start();
if(session_destroy())
{
	$s=$_SESSION["userId"];
	$q="insert into log (Emp_id,User_Type) values ('$s','admin')";
	echo $q;
	mysqli_query($cn,$q);
}
header("Location:index.php");
?>