<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");
	
$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];

// proccess table events
if($buttId=='IMPORT_PENDAFTARAN')
{
	require_once("include/pendaftaran_sekolah_variables.php");
	$cipherer = new RunnerCipherer("pendaftaran_sekolah");
	buttonHandler_IMPORT_PENDAFTARAN($params);
}
if($buttId=='SENARAI')
{
	require_once("include/pendaftaran_sekolah_variables.php");
	$cipherer = new RunnerCipherer("pendaftaran_sekolah");
	buttonHandler_SENARAI($params);
}
if($buttId=='SLIP')
{
	require_once("include/pendaftaran_sekolah_variables.php");
	$cipherer = new RunnerCipherer("pendaftaran_sekolah");
	buttonHandler_SLIP($params);
}
if($buttId=='KEHADIRAN')
{
	require_once("include/pendaftaran_sekolah_variables.php");
	$cipherer = new RunnerCipherer("pendaftaran_sekolah");
	buttonHandler_KEHADIRAN($params);
}
if($buttId=='Import_AS')
{
	require_once("include/exam_marking_variables.php");
	$cipherer = new RunnerCipherer("exam_marking");
	buttonHandler_Import_AS($params);
}
if($buttId=='CLOSE')
{
	require_once("include/marking_AS_variables.php");
	$cipherer = new RunnerCipherer("marking_AS");
	buttonHandler_CLOSE($params);
}
if($buttId=='CLOSE_WINDOW')
{
	require_once("include/marking_BA_variables.php");
	$cipherer = new RunnerCipherer("marking_BA");
	buttonHandler_CLOSE_WINDOW($params);
}
if($buttId=='CLOSE_WINDOW1')
{
	require_once("include/marking_JIK_variables.php");
	$cipherer = new RunnerCipherer("marking_JIK");
	buttonHandler_CLOSE_WINDOW1($params);
}
if($buttId=='CLOSE_WINDOW2')
{
	require_once("include/marking_TF_variables.php");
	$cipherer = new RunnerCipherer("marking_TF");
	buttonHandler_CLOSE_WINDOW2($params);
}
if($buttId=='CLOSE_WINDOW3')
{
	require_once("include/marking_TJ_variables.php");
	$cipherer = new RunnerCipherer("marking_TJ");
	buttonHandler_CLOSE_WINDOW3($params);
}
if($buttId=='CLOSE_WINDOW4')
{
	require_once("include/marking_UTH_variables.php");
	$cipherer = new RunnerCipherer("marking_UTH");
	buttonHandler_CLOSE_WINDOW4($params);
}
if($buttId=='BA')
{
	require_once("include/exam_marking_variables.php");
	$cipherer = new RunnerCipherer("exam_marking");
	buttonHandler_BA($params);
}
if($buttId=='JIK')
{
	require_once("include/exam_marking_variables.php");
	$cipherer = new RunnerCipherer("exam_marking");
	buttonHandler_JIK($params);
}
if($buttId=='TF')
{
	require_once("include/exam_marking_variables.php");
	$cipherer = new RunnerCipherer("exam_marking");
	buttonHandler_TF($params);
}
if($buttId=='TJ')
{
	require_once("include/exam_marking_variables.php");
	$cipherer = new RunnerCipherer("exam_marking");
	buttonHandler_TJ($params);
}
if($buttId=='UTH')
{
	require_once("include/exam_marking_variables.php");
	$cipherer = new RunnerCipherer("exam_marking");
	buttonHandler_UTH($params);
}
if($buttId=='SijilPsra1')
{
	require_once("include/sijil_psra1_variables.php");
	$cipherer = new RunnerCipherer("sijil_psra1");
	buttonHandler_SijilPsra1($params);
}
if($buttId=='SidulJbtn1')
{
	require_once("include/sijil_psra1_variables.php");
	$cipherer = new RunnerCipherer("sijil_psra1");
	buttonHandler_SidulJbtn1($params);
}
if($buttId=='SidulSek1')
{
	require_once("include/sijil_psra1_variables.php");
	$cipherer = new RunnerCipherer("sijil_psra1");
	buttonHandler_SidulSek1($params);
}
if($buttId=='Reset_Password')
{
	require_once("include/admin_users_variables.php");
	$cipherer = new RunnerCipherer("admin_users");
	buttonHandler_Reset_Password($params);
}

// proccess non table events


// create table and non table handlers
function buttonHandler_IMPORT_PENDAFTARAN($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$data = $button->getCurrentRecord();
$result['sCode']=$data['sCode'] ;
$_SESSION['sCode']=$data['sCode'] ;;
	echo my_json_encode($result);
}
function buttonHandler_SENARAI($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$data = $button->getCurrentRecord();
$result['sCode']=$data['sCode'] ;
$result['eYear']=date('Y');
;
	echo my_json_encode($result);
}
function buttonHandler_SLIP($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$data = $button->getCurrentRecord();
$result['sCode']=$data['sCode'] ;
$result['eYear']=date('Y');
;
	echo my_json_encode($result);
}
function buttonHandler_KEHADIRAN($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$data = $button->getCurrentRecord();
$result['sCode']=$data['sCode'] ;
$result['eYear']=date('Y');
;
	echo my_json_encode($result);
}
function buttonHandler_Import_AS($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_CLOSE($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_CLOSE_WINDOW($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_CLOSE_WINDOW1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_CLOSE_WINDOW2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_CLOSE_WINDOW3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_CLOSE_WINDOW4($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_BA($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_JIK($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_TF($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_TJ($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_UTH($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_SijilPsra1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['sCode']=$data['sCode'] ;
$result['eYear']=$data['eYear'] ;
;
	echo my_json_encode($result);
}
function buttonHandler_SidulJbtn1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['sCode']=$data['sCode'] ;
$result['eYear']=$data['eYear'] ;;
	echo my_json_encode($result);
}
function buttonHandler_SidulSek1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['sCode']=$data['sCode'] ;
$result['eYear']=$data['eYear'] ;;
	echo my_json_encode($result);
}
function buttonHandler_Reset_Password($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $dal;


$data = $button->getCurrentRecord();

//random pass
//$rand = substr(md5(microtime()),rand(0,26),5);

$tblUsers = $dal->Table("user");
$tblUsers->Param["uid"]= $data['uid'];
$tblUsers->Value["password"]= md5('user123');
$tblUsers->Update();


;
	echo my_json_encode($result);
}
?>
