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
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdashboard_utama[""] = array();
}

//	search fields
$tdatadashboard_utama[".searchFields"] = array();

// all search fields
$tdatadashboard_utama[".allSearchFields"] = array();

// good like search fields
$tdatadashboard_utama[".googleLikeFields"] = array();

$tdatadashboard_utama[".dashElements"] = array();


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