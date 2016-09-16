<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "exam_marking";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("exam_marking", " " . "Pemarkahan");
$table = "semakan";
$mask="";
		$mask .= "E";
		$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("semakan", " " . "Semakan Markah");
$table = "sijil_psra";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("sijil_psra", " " . "Sijil & Siudul");
$table = "school";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("school", " " . "Senarai Sekolah");
$table = "setting";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("setting", " " . "Setting");
$table = "setting_category";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("setting_category", " " . "Set Label");
$table = "user";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("user", " " . "User");
$table = "analisa_kelulusan_psra_sek";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("analisa_kelulusan_psra_sek", " " . "Analisa Kelulusan Psra Sek");
$table = "gps_psra_sek";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("gps_psra_sek", " " . "Gps Psra Sek");
$table = "analisa_subjek_psra_sek";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("analisa_subjek_psra_sek", " " . "Analisa Subjek Psra Sek");
$table = "purata_psra_sek";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("purata_psra_sek", " " . "Purata Psra Sek");
$table = "analisa_kelulusan_psra_daerah";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("analisa_kelulusan_psra_daerah", " " . "Analisa Kelulusan Psra Daerah");
$table = "gps_psra_daerah";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("gps_psra_daerah", " " . "Gps Psra Daerah");
$table = "analisa_subjek_psra_daerah";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("analisa_subjek_psra_daerah", " " . "Analisa Subjek Psra Daerah");
$table = "purata_psra_daerah";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("purata_psra_daerah", " " . "Purata Psra Daerah");
$table = "analisa_kelulusan_psra_all";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("analisa_kelulusan_psra_all", " " . "Analisa Kelulusan Psra All");
$table = "gps_psra_all";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("gps_psra_all", " " . "Gps Psra All");
$table = "analisa_subjek_psra_all";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("analisa_subjek_psra_all", " " . "Analisa Subjek Psra All");
$table = "purata_psra_all";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("purata_psra_all", " " . "Purata Psra All");
$table = "carta_kelulusan_psra_all";
$mask="";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("carta_kelulusan_psra_all", " " . "Carta Kelulusan Psra All");
$table = "carta_pangkat_psra_all";
$mask="";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("carta_pangkat_psra_all", " " . "Carta Pangkat Psra All");
$table = "dashboard_utama";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("dashboard_utama", " " . "Dashboard Utama");
$table = "archive_exam_marking";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("archive_exam_marking", " " . "Archive Exam Marking");
$table = "result_psra";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("result_psra", " " . "Keputusan");
$table = "semakan_duplicate";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("semakan_duplicate", " " . "Semakan Duplicate");
$table = "daftar_sek";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("daftar_sek", " " . "Daftar Sek");
$table = "daftar_daerah";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("daftar_daerah", " " . "Daftar Daerah");
$table = "daftar_all";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("daftar_all", " " . "Daftar All");
$table = "pendaftaran_murid";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("pendaftaran_murid", " " . "Pendaftaran Murid");
$table = "pendaftaran_sekolah";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("pendaftaran_sekolah", " " . "Pendaftaran Sekolah");
$table = "marking_AS";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("marking_AS", " " . "Marking AS");
$table = "marking_BA";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("marking_BA", " " . "Marking BA");
$table = "marking_JIK";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("marking_JIK", " " . "Marking JIK");
$table = "marking_TF";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("marking_TF", " " . "Marking TF");
$table = "marking_TJ";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("marking_TJ", " " . "Marking TJ");
$table = "marking_UTH";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("marking_UTH", " " . "Marking UTH");




$layout = new TLayout("ug_rights2", "Coral1Coral1", "MobileCoral1");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugrightbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols"] = "1";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "1";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugrightsblock", 
	"block"=>"rights_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();
$layout->container_properties["uggroup"] = array(  );
$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup", 
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroup"] = "1";

$layout->blocks["left"][] = "uggroup";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();
$layout->container_properties["hmenu"] = array(  );
$layout->containers["hmenu"][] = array("name"=>"hmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["hmenu"] = "hmenu";

$layout->blocks["top"][] = "hmenu";
$page_layouts["admin_rights_list"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button1");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
