<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");


if(!isLogged())
{
	HeaderRedirect("login");
	return;
}

if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu2", "Coral1Coral1", "MobileCoral1");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"login_menu", 
	"block"=>"loggedas_block", "substyle"=>2  );

$layout->containers["menu"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu"] = "1";

$layout->blocks["top"][] = "menu";
$page_layouts["menu"] = $layout;

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
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/exam_marking_events.php"));
$tableEvents["exam_marking"] = new eventclass_exam_marking;
include_once(getabspath("include/semakan_events.php"));
$tableEvents["semakan"] = new eventclass_semakan;
include_once(getabspath("include/sijil_psra_events.php"));
$tableEvents["sijil_psra"] = new eventclass_sijil_psra;
include_once(getabspath("include/analisa_kelulusan_psra_sek_events.php"));
$tableEvents["analisa_kelulusan_psra_sek"] = new eventclass_analisa_kelulusan_psra_sek;
include_once(getabspath("include/gps_psra_sek_events.php"));
$tableEvents["gps_psra_sek"] = new eventclass_gps_psra_sek;
include_once(getabspath("include/analisa_subjek_psra_sek_events.php"));
$tableEvents["analisa_subjek_psra_sek"] = new eventclass_analisa_subjek_psra_sek;
include_once(getabspath("include/purata_psra_sek_events.php"));
$tableEvents["purata_psra_sek"] = new eventclass_purata_psra_sek;
include_once(getabspath("include/analisa_kelulusan_psra_daerah_events.php"));
$tableEvents["analisa_kelulusan_psra_daerah"] = new eventclass_analisa_kelulusan_psra_daerah;
include_once(getabspath("include/gps_psra_daerah_events.php"));
$tableEvents["gps_psra_daerah"] = new eventclass_gps_psra_daerah;
include_once(getabspath("include/analisa_subjek_psra_daerah_events.php"));
$tableEvents["analisa_subjek_psra_daerah"] = new eventclass_analisa_subjek_psra_daerah;
include_once(getabspath("include/purata_psra_daerah_events.php"));
$tableEvents["purata_psra_daerah"] = new eventclass_purata_psra_daerah;
include_once(getabspath("include/analisa_kelulusan_psra_all_events.php"));
$tableEvents["analisa_kelulusan_psra_all"] = new eventclass_analisa_kelulusan_psra_all;
include_once(getabspath("include/gps_psra_all_events.php"));
$tableEvents["gps_psra_all"] = new eventclass_gps_psra_all;
include_once(getabspath("include/analisa_subjek_psra_all_events.php"));
$tableEvents["analisa_subjek_psra_all"] = new eventclass_analisa_subjek_psra_all;
include_once(getabspath("include/purata_psra_all_events.php"));
$tableEvents["purata_psra_all"] = new eventclass_purata_psra_all;
include_once(getabspath("include/archive_exam_marking_events.php"));
$tableEvents["archive_exam_marking"] = new eventclass_archive_exam_marking;
include_once(getabspath("include/result_psra_events.php"));
$tableEvents["result_psra"] = new eventclass_result_psra;
include_once(getabspath("include/semakan_duplicate_events.php"));
$tableEvents["semakan_duplicate"] = new eventclass_semakan_duplicate;
include_once(getabspath("include/daftar_sek_events.php"));
$tableEvents["daftar_sek"] = new eventclass_daftar_sek;
include_once(getabspath("include/daftar_daerah_events.php"));
$tableEvents["daftar_daerah"] = new eventclass_daftar_daerah;
include_once(getabspath("include/daftar_all_events.php"));
$tableEvents["daftar_all"] = new eventclass_daftar_all;
include_once(getabspath("include/pendaftaran_murid_events.php"));
$tableEvents["pendaftaran_murid"] = new eventclass_pendaftaran_murid;
include_once(getabspath("include/pendaftaran_sekolah_events.php"));
$tableEvents["pendaftaran_sekolah"] = new eventclass_pendaftaran_sekolah;
include_once(getabspath("include/marking_AS_events.php"));
$tableEvents["marking_AS"] = new eventclass_marking_AS;
include_once(getabspath("include/marking_BA_events.php"));
$tableEvents["marking_BA"] = new eventclass_marking_BA;
include_once(getabspath("include/marking_JIK_events.php"));
$tableEvents["marking_JIK"] = new eventclass_marking_JIK;
include_once(getabspath("include/marking_TF_events.php"));
$tableEvents["marking_TF"] = new eventclass_marking_TF;
include_once(getabspath("include/marking_TJ_events.php"));
$tableEvents["marking_TJ"] = new eventclass_marking_TJ;
include_once(getabspath("include/marking_UTH_events.php"));
$tableEvents["marking_UTH"] = new eventclass_marking_UTH;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params = array();
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();

// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu( $pageObject );

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
$xt->assign("username", $_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

$xt->assign("logoutlink_attrs","onclick=\"window.location.href='".GetTableLink("login", "", "a=logout")."';return false;\"");

$xt->assign("guestloginlink_attrs","onclick=\"window.location.href='".GetTableLink("login")."';return false;\"");

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("loggedas_message", !isLoggedAsGuest());

$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());

if( IsAdmin() )
	$xt->assign("adminarea_link", true);

// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$pageObject->display($pageObject->templatefile);
?>