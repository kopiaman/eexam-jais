<?php 
class eventclass_purata_psra_sek  extends eventsBase
{ 
	function eventclass_purata_psra_sek()
	{
	// fill list of events
		$this->events["BeforeInsert"]=true;



//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
				// Before Insert Record
function BeforeInsert(&$rawvalues, &$values, &$pageObject, &$message)
{

		
$examNo=$rawvalues['eNo'];
$kodsekolah=substr($examNo,0, -4);
$values['sCode']=$kodsekolah;

$values['eYear']=date('Y');
$values['eType']='PSRA';
return true;
;		
} // function BeforeInsert

		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
