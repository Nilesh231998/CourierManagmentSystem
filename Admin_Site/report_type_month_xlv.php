<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
ini_set("display_errors",0);
include("../Backend_Template/include/connection.php");
include("../Backend_Template/include/session.php");
?>
<table border="1">
    <tr>
    	<th COLSPAN ="3">NO.</th>
	
	</tr>
	
	<tr>
    	<th>NO.</th>
		<th> COURIER TYPE NAME</th>
		<th>NUMBER OF COURIER</th>

	</tr>
	<?php
	
		$cn=getCon();
$q="select ct.courier_type_id, ct.courier_type_name , count(c.courier_type_id) from couriertype as ct , couriermast as c where ct.courier_type_id = c.courier_type_id group by c.courier_type_id";
		
	$sql = mysqli_query($cn,$q);
	$no = 1;
	while($data = mysqli_fetch_array($sql)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$data['courier_type_name'].'</td>
			<td>'.$data[2].'</td>
			</tr>
		';
		$no++;
	}
	?>
</table>
</body>
</html>
