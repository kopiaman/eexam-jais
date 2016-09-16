<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard_utama = array();
$tdatadashboard_utama[".ShortName"] = "dashboard_utama";

//	field labels
$fieldLabelsdashboard_utama = array();
$pageTitlesdashboard_utama = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard_utama["English"] = array();
	$fieldLabelsdashboard_utama["English"]["carta_kelulusan_psra_all_eYear"] = "Tahun";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdashboard_utama[""] = array();
}

//	search fields
$tdatadashboard_utama[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"carta_kelulusan_psra_all", "field"=>"eYear" );
$tdatadashboard_utama[".searchFields"]["carta_kelulusan_psra_all_eYear"] = $dashField;

// all search fields
$tdatadashboard_utama[".allSearchFields"] = array();
$tdatadashboard_utama[".allSearchFields"][] = "carta_kelulusan_psra_all_eYear";

// good like search fields
$tdatadashboard_utama[".googleLikeFields"] = array();
$tdatadashboard_utama[".googleLikeFields"][] = "carta_kelulusan_psra_all_eYear";

$tdatadashboard_utama[".dashElements"] = array();

	$dbelement = array( "elementName" => "carta_kelulusan_psra_all_chart", "table" => "carta_kelulusan_psra_all", "type" => 1);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdatadashboard_utama[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "carta_pangkat_psra_all_chart", "table" => "carta_pangkat_psra_all", "type" => 1);
	$dbelement["cellName"] = "cell_0_1";

			

	$tdatadashboard_utama[".dashElements"][] = $dbelement;

$tdatadashboard_utama[".shortTableName"] = "dashboard_utama";
$tdatadashboard_utama[".entityType"] = 4;


$tableEvents["dashboard_utama"] = new eventsBase;
$tdatadashboard_utama[".hasEvents"] = false;


$tdatadashboard_utama[".tableType"] = "dashboard";


																				
$tdatadashboard_utama[".addPageEvents"] = false;

$tables_data["dashboard_utama"]=&$tdatadashboard_utama;
$field_labels["dashboard_utama"] = &$fieldLabelsdashboard_utama;
$page_titles["dashboard_utama"] = &$pageTitlesdashboard_utama;

?>