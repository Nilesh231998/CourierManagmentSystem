<?php
include("../Backend_Template/include/connection.php");
	$cn=getcon();
    if(isset($_REQUEST['cid']))
	{
		$id=$_REQUEST['cid'];
		$query="select area_id,area_name from areamast where city_id=".$id;
		//echo $query;
		$str="<option value='select'>SELECT ANY AREA</option>";
		$r=mysqli_query($cn,$query);
		while($row=mysqli_fetch_array($r))
		{
			$str=$str."<option value=".$row[0].">".$row[1]."</option>";
		}
		echo $str;
		//exit();
	}

	if(isset($_REQUEST['ctn']))
	{
		$id=$_REQUEST['ctn'];
		$query="select * from pricemast where courier_type_id=".$id;
		//echo $query;
		
		$r=fetchRecored($query);
		echo $r[4];
		//exit();
	}

	if(isset($_REQUEST['suboffice']))
	{
		$id=$_REQUEST['suboffice'];
		$query="select * from trackmast where consignment_no=".$id;
		//echo $query;
		
		$r1=fetchRecored($query);
		$q="select * from sub_branch where suboffice_id=".$r1[5];
		$r2=fetchRecored($q);
		echo $r2[1];
		//exit();
	}

	if(isset($_REQUEST['area']))
	{
		$id=$_REQUEST['area'];
		$query="select * from trackmast where consignment_no=".$id;
		//echo $query;
		
		$r1=fetchRecored($query);
		$q="select * from areamast where area_id=".$r1[6];
		$r2=fetchRecored($q);
		echo $r2[1];
		//exit();
	}


	if(isset($_REQUEST['emailid']))
	{
		$id=$_REQUEST['emailid'];
		$q="select * from admin where email_id='".$id."'";
		//echo $query;
		$result=mysqli_query($cn,$q);
		$n=mysqli_num_rows($result);

		if($n>=1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	
	if(isset($_REQUEST['username']))
	{
		$id=$_REQUEST['username'];
		$q="select * from admin where username='".$id."'";
		//echo $query;
		$result=mysqli_query($cn,$q);
		$n=mysqli_num_rows($result);

		if($n>=1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	
	//Employee ajax
	
	if(isset($_REQUEST['emp_emailid']))
	{
		$id=$_REQUEST['emp_emailid'];
		$q="select * from employee where email_id='".$id."'";
		//echo $query;
		$result=mysqli_query($cn,$q);
		$n=mysqli_num_rows($result);

		if($n>=1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	
	if(isset($_REQUEST['emp_username']))
	{
		$id=$_REQUEST['emp_username'];
		$q="select * from employee where username='".$id."'";
		//echo $query;
		$result=mysqli_query($cn,$q);
		$n=mysqli_num_rows($result);

		if($n>=1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	
	//client ajax
	
	if(isset($_REQUEST['usr_emailid']))
	{
		$id=$_REQUEST['usr_emailid'];
		$q="select * from clientmast where email_id='".$id."'";
		//echo $query;
		$result=mysqli_query($cn,$q);
		$n=mysqli_num_rows($result);

		if($n>=1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	
	if(isset($_REQUEST['usr_username']))
	{
		$id=$_REQUEST['usr_username'];
		$q="select * from clientmast where username='".$id."'";
		//echo $query;
		$result=mysqli_query($cn,$q);
		$n=mysqli_num_rows($result);

		if($n>=1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
?>