<?php 
class eventclass_pendaftaran_murid  extends eventsBase
{ 
	function eventclass_pendaftaran_murid()
	{
	// fill list of events
		$this->events["BeforeInsert"]=true;



//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
				// Before Insert Record
function BeforeInsert(&$rawvalues, &$values, &$pageObject, &$message)
{

		/*
$examNo=$rawvalues['eNo'];
$kodsekolah=substr($examNo,0, -4);
$values['sCode']=$kodsekolah;
*/
$values['eYear']=date('Y');
$eYear=date('Y');

$values['eType']='PSRA';

$values['sCode']=$_SESSION['sCode'];
$sCode=$_SESSION['sCode'];


$sql_count= "SELECT COUNT(sid) AS bil FROM exam_marking WHERE sCode='$sCode' AND eYear=$eYear";
$query_count=db_query($sql_count,$conn);
$count_row=db_fetch_array($query_count);

$count=$count_row['bil']+1;
if($count==0){ $countNew=1;}
elseif($count!=0){ $countNew=$count; };

$countNew=+$countNew;

$countNew=sprintf("%03s",$countNew);

$values['eNo']=$_SESSION['sCode'].'/'.$countNew;
$values['s7']='LULUS';
return true;
;		
} // function BeforeInsert

		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
