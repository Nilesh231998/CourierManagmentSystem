<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("include/session.php");
$cn=getCon();
if(!isset($_SESSION["clientid"]))
header("Location:index.php");
	if(isset($_REQUEST['task']))
	{
		if($_REQUEST['task'] == "loadCountry")
		{
			$cou = '';
			$query = mysqli_query("select * from countries order by id");
			while($clientrow = mysqli_fetch_array($query))
			{
				$cou .= '<option value="'.$clientrow['id'].'">'.$clientrow['name'].'</option>';
			}
			echo $cou;
		}
		else if($_REQUEST['task'] == "loadState")
		{
			if(isset($_REQUEST['cou']))
			{
				$state = '<option id="select">Select State</option>';
				$query = mysqli_query("select * from states where country_id = ".$_REQUEST['cou']);
				while($clientrow = mysqli_fetch_array($query))
				{
					$state .= '<option value="'.$clientrow['id'].'">'.$clientrow['name'].'</option>';
				}
				echo $state;
			}	
		}
		else if($_REQUEST['task'] == "loadCity")
		{
			if(isset($_REQUEST['state']))
			{
				$city = '<option id="select">Select City</option>';
				$query = mysqli_query("select * from citymast where state_id = ".$_REQUEST['state']);
				while($clientrow = mysqli_fetch_array($query))
				{
					$city .= '<option value="'.$clientrow['city_id'].'">'.$clientrow['city_name'].'</option>';
				}
				echo $city;
					
			}	
		}
	}
?>