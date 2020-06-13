<?php
//ini_set("display_errors",0);
$upd_student="../Backend_Template/images/student";//Admin Site Insert, Display
$upd_admin="../Backend_Template/images/admin";
$upd_employee="../Backend_Template/images/employee";
function getCon()
{
		$con=mysqli_connect("localhost","root","","courier_db") or die("Connection Error : ".mysqli_error());
		mysqli_set_charset( $con, 'utf8');
		return $con;
}
function executeQuery($query)
{
		$con=getCon();
		$rslt = mysqli_query($con,$query) or die("exeNonQuery Error : ".mysqli_error());
		return $rslt;
}
function executeScaller($query)
{
	$con=getCon();
	$rslt = mysqli_query($con,$query) or die("exeScaller mysqli_query Error : ".mysqli_error());
	$row = mysqli_fetch_array($rslt) or die("exeScaller mysqli_fetch_array Error : ".mysqli_error());
	return $row[0];
}
function fectchRecored($query)
{
	$con=getCon();
	$rslt = mysqli_query($con,$query) or die("fetchRecored mysqli_query Error : ".mysqli_error());
	$row = mysqli_fetch_array($rslt) or die("fetchRecored mysqli_fetch_array Error : ".mysqli_error());
	return $row;
}
function fetchAll($rslt)
{
	$row = mysqli_fetch_array($rslt);
	return $row;
}
function getEffectedRow($query)
{
	$rslt = executeQuery($query);
	$row = mysqli_num_rows($rslt);
	return $row;
}
function fillComboBox($query,$selectValue="Select")
{
	$cn=getCon();
	$cmbStr="<option value='select'>$selectValue</option>";
	$cmbRS=mysqli_query($cn,$query) or die(mysqli_error());
	while($cmbRow=mysqli_fetch_array($cmbRS))
	{
		$cmbStr=$cmbStr."<option value=".$cmbRow[0].">".$cmbRow[1]."</option>";
	}
	return $cmbStr;
}
function fillComboBoxUpdate($query,$id,$selectValue="Select")
{
	$cn=getCon();
	$cmbStr="<option value='select'>$selectValue</option>";
	$cmbRS=mysqli_query($cn,$query) or die(mysqli_error());
	while($cmbRow=mysqli_fetch_array($cmbRS))
	{
		if($cmbRow[0]==$id)
			$cmbStr=$cmbStr."<option selected='selected' value=".$cmbRow[0].">".$cmbRow[1]."</option>";
		else
			$cmbStr=$cmbStr."<option value=".$cmbRow[0].">".$cmbRow[1]."</option>";
	}
	return $cmbStr;
}
function generateComboBox($valueArray,$optionArray)
{
	for($i=0;$i< sizeof($valueArray);$i++)
	{
		$cmbStr=$cmbStr."<option value=".$valueArray[$i].">".$optionArray[$i]."</option>";
	}
	return $cmbStr;
}
function generateComboBoxUpdate($valueArray,$optionArray,$selectedValue)
{
	for($i=0;$i< sizeof($valueArray);$i++)
	{
		if($valueArray[$i]==$selectedValue)
			$cmbStr=$cmbStr."<option selected='selected' value=".$valueArray[$i].">".$optionArray[$i]."</option>";
		else
			$cmbStr=$cmbStr."<option value=".$valueArray[$i].">".$optionArray[$i]."</option>";
	}
	return $cmbStr;
}
function display($arr,$query)
{
	$cnt=1;
	$cn=getCon();
	$rs=mysqli_query($cn,$query) or die(mysqli_error());
	
	$table="<table class=\"table table-bordered datatable\" id=\"table-1\"><thead><tr><th>#</th>";
	for($i=0;$i< sizeof($arr);$i++)
	{ 
		$table=$table."<th>$arr[$i]</th>";
	}
	$table=$table."</tr></thead><tbody>";	
	while($row=mysqli_fetch_array($rs))
	{
			$table=$table."<tr class='' ><td> $cnt</td>";
			for($i=1;$i<= sizeof($arr);$i++)
			{
					$table=$table."<td>$row[$i]</td>";
			}
			$table=$table."</tr>";
	$cnt++;
	}
	$table=$table."</tbody></table>";
	echo $table;
}
function displayData($arr,$query,$pgEdit,$pgDelete,$folder="")
{
	//echo $folder;
	$cnt=1;
	$cn=getCon();
	$rs=mysqli_query($cn,$query) or die(mysqli_error());

	$table="<table class=\"table table-bordered datatable\" id=\"table-1\"><thead><tr><th>#</th>";
	for($i=0;$i< sizeof($arr);$i++)
	{ 
		$table=$table."<th>$arr[$i]</th>";
	}
	$table=$table."<th width=\"150px\">Action</th></tr></thead><tbody>";	
	while($row=mysqli_fetch_array($rs))
	{
			$table=$table."<tr class=\"odd gradeX\"><td> $cnt</td>";
			for($i=1;$i<= sizeof($arr);$i++)
			{
				if($i==3 && $folder!="")
				{ 
					$table=$table."<td class=\"\"><img src=\"$folder/$row[$i]\" title=\"Image\" width=\"150px\" height=\"100px\" style=\"width:100px;height:100px\" /></td>";
				}
				else
					$table=$table."<td>$row[$i]</td>";
			}
			$table=$table."<td>
			<a href=\"$pgEdit?id=$row[0]\" class=\"btn btn-default btn-sm btn-icon icon-left\"><i class=\"entypo-pencil\"></i>Edit</a> 
			<a  class=\"btn btn-danger btn-sm btn-icon icon-left\" href=\"$pgDelete?id=$row[0]\" onclick=\"if(!confirm('Are you sure that you want to permanently delete the selected element?'))return false\"><i class=\"entypo-cancel\"></i>Delete</a>
			</td></tr>";
	$cnt++;
	}
	$table=$table."</tbody></table>";
	echo $table;
}
function singlebuttondisplay($arr,$query,$pgEdit,$folder="")
{
	echo $folder;
	$cnt=1;
	$cn=getCon();
	$rs=mysqli_query($cn,$query) or die(mysqli_error());
	$table="<table class=\"table table-bordered datatable\" id=\"table-1\"><thead><tr><th>#</th>";
	for($i=0;$i< sizeof($arr);$i++)
	{ 
		$table=$table."<th>$arr[$i]</th>";
	}
	$table=$table."<th width=\"150px\">Action</th></tr></thead><tbody>";	
	while($row=mysqli_fetch_array($rs))
	{
			$table=$table."<tr class=\"odd gradeX\"><td> $cnt</td>";
			for($i=1;$i<= sizeof($arr);$i++)
			{
				if($i==3 && $folder!="")
				{ 
					$table=$table."<td class=\"\"><img src=\"$folder/$row[$i]\" title=\"Image\" width=\"150px\" height=\"100px\" style=\"width:100px;height:100px\" /></td>";
				}
				else
					$table=$table."<td>$row[$i]</td>";
			}
			$table=$table."<td>
			<a href=\"$pgEdit?id=$row[0]\" class=\"btn btn-default btn-sm btn-icon icon-left\"><i class=\"entypo-pencil\"></i>More</a> 
			
			</td></tr>";
	$cnt++;
	}
	$table=$table."</tbody></table>";
	echo $table;
}


function insertData($tableName,$id,$folder="")
{
	$cn=getCon();
	$result1 = '';
	$result2 = '';

	foreach ($_POST as $key => $value) 
	{
		if($value!=NULL)
		{
				list($prefixValue,$fieldName)=getPrefixValueAndFieldName($key);
				
				if($prefixValue =="num" || $prefixValue =="cmb" || $prefixValue =="aph" || $prefixValue =="eml" || $prefixValue =="pwd" || $prefixValue =="rbt" || $prefixValue == "aphnum" || $prefixValue == "aphnums" || $prefixValue == "blank" || $prefixValue == "phno")
				{
					$result1 .= $fieldName.",";
					$result2 .= "'$value',";
				}
		}
	}
	foreach ($_FILES as $key => $value) 
	{
		list($prefixValue,$fieldName)=getPrefixValueAndFieldName($key);
		
		if($prefixValue =="img" || $prefixValue =="pdf" || $prefixValue =="sht")
		{
			if($prefixValue =="img"){ $fileName="image"; $extension=".jpg";}
			if($prefixValue =="pdf"){ $fileName="pdfdoc"; $extension=".pdf";}
			if($prefixValue =="sht"){ $fileName="spreadSheet"; $extension=".csv";}
			
			if($_FILES[$key]["size"]>0)
			{
					$result1 .= $fieldName.",";
					$result2 .= "'".uploadFile($key,$id,$tableName,$folder,$fileName,$extension)."',";
			}
		}
	}
	$result1=substr($result1,0,strlen($result1)-1);
	$result2=substr($result2,0,strlen($result2)-1);
	$q="INSERT INTO $tableName ($result1) VALUES ($result2)";
	//echo $q;
	mysqli_query($cn,$q) or die(mysqli_error());
}

function updateData($tableName,$id,$strid,$folder="")
{
	$cn=getCon();
	$result = '';
	foreach ($_POST as $key => $value) 
	{
			list($prefixValue,$fieldName)=getPrefixValueAndFieldName($key);
			
			if($prefixValue =="num" || $prefixValue =="cmb" || $prefixValue =="aph" || $prefixValue =="eml" || $prefixValue =="pwd" || $prefixValue =="rbt" || $prefixValue == "aphnum"|| $prefixValue == "aphnums" || $prefixValue == "blank")
			{
					$result .= $fieldName."='$value',";
			}
	}
	foreach ($_FILES as $key => $value)
	{
		list($prefixValue,$fieldName)=getPrefixValueAndFieldName($key);
		
		if($prefixValue =="img" || $prefixValue =="pdf" || $prefixValue =="sht")
		{
			if($prefixValue =="img"){ $fileName="image"; $extension=".jpg";}
			if($prefixValue =="pdf"){ $fileName="pdfdoc"; $extension=".pdf";}
			if($prefixValue =="sht"){ $fileName="spreadSheet"; $extension=".csv";}
			
			if($_FILES[$key]["size"]>0)
			{
					$result .= $fieldName."='".uploadFileUpdate($key,$id,$tableName,$folder, $fileName, $extension)."',";
					//$result1 .= $fieldName.",";
					//$result2 .= "'".uploadFileUpdate($key,$id,$tableName,$folder, $fileName, $extension)."',";
			}
		}
	}
	$result=substr($result,0,strlen($result)-1);
	$q="UPDATE $tableName SET $result WHERE $strid=$id";
	//echo $q;	
	mysqli_query($cn,$q) or die(mysqli_error());
}

function uploadFile($key,$id,$tableName,$folder,$fileName,$extension)
{
	$selectQuery="SELECT MAX($id) FROM $tableName";
	$cnt=((int)executeScaller($selectQuery)+1);
	$imgName=$fileName.$cnt.$extension;
	move_uploaded_file($_FILES[$key]["tmp_name"],$folder."//".$imgName);
	return $imgName;
}
function uploadFileUpdate($key,$id,$tableName,$folder,$fileName,$extension)
{
	$imgName=$fileName.$id.$extension;
	move_uploaded_file($_FILES[$key]["tmp_name"],$folder."//".$imgName);
	return $imgName;
}
function getPrefixValueAndFieldName($key)
{
	$pos_of_underscore = strpos($key, "_");
	$keyLength = strlen($key);
	$prefixValue="";
	$fieldName="";
	if($pos_of_underscore>0)
	{
			$prefixValue = substr($key, 0, $pos_of_underscore);
			$fieldName =  substr($key, $pos_of_underscore+1, $keyLength);
			//echo $prefixValue."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$fieldName."<br><br>";
	}
	return array($prefixValue,$fieldName);
}
?>
