<?php 
class eventclass_marking_s1  extends eventsBase
{ 
	function eventclass_marking_s1()
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
global $conn;

$eNo=$rawvalues['eNo'];
$s1=$rawvalues['s1'];
$eyear=date('Y');


$sql_check= "SELECT s1 FROM exam_marking WHERE eNo='$eNo' AND eYear='$eYear' ";
$query_check=db_query($sql_check,$conn);
$check=db_fetch_array($query_check);


	$sql_up= "UPDATE exam_marking SET s1='$s1' WHERE eNo='$eNo' AND eYear='$eYear' ";
	$query_up=db_exec($sql_up,$conn);

$message='Data s1 berjaya dikemas kini';*/

return true;

;		
} // function BeforeInsert

		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
