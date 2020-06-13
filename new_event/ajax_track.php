<?php
include("../Backend_Template/include/connection.php");
$cn=getcon();
  if(isset($_REQUEST['consignmentNo']))
	{ 
			$tableData="";
			$progressList="";
			$no = 0;
			
			$q="select status_id,status from statusmast";
			$r=executeQuery($q);
			
			while($statusRow=fetchAll($r))
			{
				$trackQuery = "select consignment_no,datetime,status_id from trackmast where status_id = ".$statusRow['status_id']." And consignment_no=".$_REQUEST['consignmentNo'];
				//echo $trackQuery;
				$count = getEffectedRow($trackQuery);
				//echo $count;
				$no = $no + $count;
				
				if($count==1){
					$trackRow = fectchRecored($trackQuery);
					$tableData .= "<tr>";
					$tableData .= "<td>".$trackRow['consignment_no']."</td>";
					$tableData .= "<td>".$statusRow['status']."</td>";						
					$tableData .= "<td>". $trackRow['datetime']."</td>";
					$tableData .="</tr>";
					
					if($trackRow['status_id']== $statusRow['status_id'])
						$progressList .="<li class='active'>".$statusRow['status']."</li>";
					else
						$progressList .="<li>".$statusRow['status']."</li>";
				}	
				else{
					$progressList .="<li>".$statusRow['status']."</li>";
				}
					
			
	
			}
			if($no==0){
				$return['tableData']="<tr><td colspan='3' class='text-center text-uppercase' style='font-size:15px;color:red;'> Please Check Your Consignment Number. Thier Is No Record For This Consignment Number. </td></tr>";
			}
			else{
				//echo $progressList;
				//echo $tableData;
				$return['tableData'] = $tableData;
			}
			$return['progressList'] = $progressList;
			echo json_encode($return);
	}
	
	//
?>
