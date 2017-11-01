<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalisa_subjek_psra_daerah = array();
	$tdataanalisa_subjek_psra_daerah[".truncateText"] = true;
	$tdataanalisa_subjek_psra_daerah[".NumberOfChars"] = 80;
	$tdataanalisa_subjek_psra_daerah[".ShortName"] = "analisa_subjek_psra_daerah";
	$tdataanalisa_subjek_psra_daerah[".OwnerID"] = "";
	$tdataanalisa_subjek_psra_daerah[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsanalisa_subjek_psra_daerah = array();
$fieldToolTipsanalisa_subjek_psra_daerah = array();
$pageTitlesanalisa_subjek_psra_daerah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalisa_subjek_psra_daerah["English"] = array();
	$fieldToolTipsanalisa_subjek_psra_daerah["English"] = array();
	$pageTitlesanalisa_subjek_psra_daerah["English"] = array();
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["eYear"] = "Tahun";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["eYear"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["eType"] = "Peperiksaan";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["eType"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["sZone"] = "Zon";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["sZone"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1TH"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1DF"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1JD"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1calon"] = "AS";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1calon"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s1gagal"] = "GAGAL %    ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s1gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2TH"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2DF"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2JD"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2calon"] = "BA";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2calon"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2lulus"] = "LULUS  %";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s2gagal"] = "GAGAL %    ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s2gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3TH"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3DF"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3JD"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3calon"] = "JIK";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3calon"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s3gagal"] = "GAGAL %    ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s3gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4TH"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4DF"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4JD"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4calon"] = "TF";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4calon"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s4gagal"] = "GAGAL %";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s4gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5TH"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5DF"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5JD"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5calon"] = "TJ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5calon"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s5gagal"] = "GAGAL %     ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s5gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6TH"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6DF"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6JD"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6calon"] = "UTH";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6calon"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["s6gagal"] = "GAGAL %";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["s6gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_daerah["English"]["sid"] = "Sid";
	$fieldToolTipsanalisa_subjek_psra_daerah["English"]["sid"] = "";
	if (count($fieldToolTipsanalisa_subjek_psra_daerah["English"]))
		$tdataanalisa_subjek_psra_daerah[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalisa_subjek_psra_daerah[""] = array();
	$fieldToolTipsanalisa_subjek_psra_daerah[""] = array();
	$pageTitlesanalisa_subjek_psra_daerah[""] = array();
	if (count($fieldToolTipsanalisa_subjek_psra_daerah[""]))
		$tdataanalisa_subjek_psra_daerah[".isUseToolTips"] = true;
}


	$tdataanalisa_subjek_psra_daerah[".NCSearch"] = true;



$tdataanalisa_subjek_psra_daerah[".shortTableName"] = "analisa_subjek_psra_daerah";
$tdataanalisa_subjek_psra_daerah[".nSecOptions"] = 0;
$tdataanalisa_subjek_psra_daerah[".recsPerRowList"] = 1;
$tdataanalisa_subjek_psra_daerah[".recsPerRowPrint"] = 1;
$tdataanalisa_subjek_psra_daerah[".mainTableOwnerID"] = "";
$tdataanalisa_subjek_psra_daerah[".moveNext"] = 1;
$tdataanalisa_subjek_psra_daerah[".entityType"] = 1;

$tdataanalisa_subjek_psra_daerah[".strOriginalTableName"] = "exam_marking";




$tdataanalisa_subjek_psra_daerah[".showAddInPopup"] = false;

$tdataanalisa_subjek_psra_daerah[".showEditInPopup"] = false;

$tdataanalisa_subjek_psra_daerah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalisa_subjek_psra_daerah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalisa_subjek_psra_daerah[".fieldsForRegister"] = array();

$tdataanalisa_subjek_psra_daerah[".listAjax"] = false;

	$tdataanalisa_subjek_psra_daerah[".audit"] = false;

	$tdataanalisa_subjek_psra_daerah[".locking"] = false;



$tdataanalisa_subjek_psra_daerah[".list"] = true;



$tdataanalisa_subjek_psra_daerah[".exportTo"] = true;



$tdataanalisa_subjek_psra_daerah[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataanalisa_subjek_psra_daerah[".searchSaving"] = false;
//

$tdataanalisa_subjek_psra_daerah[".showSearchPanel"] = true;
		$tdataanalisa_subjek_psra_daerah[".flexibleSearch"] = true;

if (isMobile())
	$tdataanalisa_subjek_psra_daerah[".isUseAjaxSuggest"] = false;
else
	$tdataanalisa_subjek_psra_daerah[".isUseAjaxSuggest"] = true;

$tdataanalisa_subjek_psra_daerah[".rowHighlite"] = true;


																				
$tdataanalisa_subjek_psra_daerah[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalisa_subjek_psra_daerah[".isUseTimeForSearch"] = false;





$tdataanalisa_subjek_psra_daerah[".allSearchFields"] = array();
$tdataanalisa_subjek_psra_daerah[".filterFields"] = array();
$tdataanalisa_subjek_psra_daerah[".requiredSearchFields"] = array();

$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6JD";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6lulus";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6TH";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6DF";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6MQ";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6gagal";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6JJ";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6MZ";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "s6calon";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "sZone";
	$tdataanalisa_subjek_psra_daerah[".allSearchFields"][] = "eYear";
	

$tdataanalisa_subjek_psra_daerah[".googleLikeFields"] = array();
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "sid";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1TH";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1DF";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1MQ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1JD";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1JJ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1MZ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1calon";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1lulus";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s1gagal";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2TH";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2DF";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2MQ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2JD";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2JJ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2MZ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2calon";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2lulus";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s2gagal";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3TH";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3DF";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3MQ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3JD";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3JJ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3MZ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3calon";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3lulus";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s3gagal";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4TH";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4DF";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4MQ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4JD";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4JJ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4MZ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4calon";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4lulus";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s4gagal";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5TH";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5DF";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5MQ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5JD";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5JJ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5MZ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5calon";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5lulus";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s5gagal";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6TH";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6DF";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6JD";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6calon";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_daerah[".googleLikeFields"][] = "s6gagal";

$tdataanalisa_subjek_psra_daerah[".panelSearchFields"] = array();
$tdataanalisa_subjek_psra_daerah[".searchPanelOptions"] = array();
$tdataanalisa_subjek_psra_daerah[".panelSearchFields"][] = "sZone";
	$tdataanalisa_subjek_psra_daerah[".panelSearchFields"][] = "eYear";
	
$tdataanalisa_subjek_psra_daerah[".advSearchFields"] = array();
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6JD";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6TH";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6DF";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6gagal";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "s6calon";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "sZone";
$tdataanalisa_subjek_psra_daerah[".advSearchFields"][] = "eYear";

$tdataanalisa_subjek_psra_daerah[".tableType"] = "list";

$tdataanalisa_subjek_psra_daerah[".printerPageOrientation"] = 0;
$tdataanalisa_subjek_psra_daerah[".nPrinterPageScale"] = 100;

$tdataanalisa_subjek_psra_daerah[".nPrinterSplitRecords"] = 40;

$tdataanalisa_subjek_psra_daerah[".nPrinterPDFSplitRecords"] = 40;



$tdataanalisa_subjek_psra_daerah[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataanalisa_subjek_psra_daerah[".pageSize"] = 20;

$tdataanalisa_subjek_psra_daerah[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalisa_subjek_psra_daerah[".strOrderBy"] = $tstrOrderBy;

$tdataanalisa_subjek_psra_daerah[".orderindexes"] = array();

$tdataanalisa_subjek_psra_daerah[".sqlHead"] = "SELECT sid,  sZone,  eYear,  eType,  s1TH,  s1DF,  s1MQ,  s1JD,  s1JJ,  s1MZ,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  (s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1lulus,  1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1gagal,  s2TH,  s2DF,  s2MQ,  s2JD,  s2JJ,  s2MZ,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  (s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2lulus,  1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2gagal,  s3TH,  s3DF,  s3MQ,  s3JD,  s3JJ,  s3MZ,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  (s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3lulus,  1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3gagal,  s4TH,  s4DF,  s4MQ,  s4JD,  s4JJ,  s4MZ,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  (s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4lulus,  1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4gagal,  s5TH,  s5DF,  s5MQ,  s5JD,  s5JJ,  s5MZ,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  (s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5lulus,  1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5gagal,  s6TH,  s6DF,  s6MQ,  s6JD,  s6JJ,  s6MZ,  (s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6calon,  (s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6lulus,  1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6gagal";
$tdataanalisa_subjek_psra_daerah[".sqlFrom"] = "FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL)) AS s6TH,  COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL)) AS s6DF,  COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL)) AS s6MQ,  COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL)) AS s6JD,  COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL)) AS s6JJ,  COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL)) AS s6MZ,  sZone  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode  GROUP BY sZone, eYear  ) AS Sub1";
$tdataanalisa_subjek_psra_daerah[".sqlWhereExpr"] = "";
$tdataanalisa_subjek_psra_daerah[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalisa_subjek_psra_daerah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalisa_subjek_psra_daerah[".arrGroupsPerPage"] = $arrGPP;

$tdataanalisa_subjek_psra_daerah[".highlightSearchResults"] = true;

$tableKeysanalisa_subjek_psra_daerah = array();
$tableKeysanalisa_subjek_psra_daerah[] = "sid";
$tdataanalisa_subjek_psra_daerah[".Keys"] = $tableKeysanalisa_subjek_psra_daerah;

$tdataanalisa_subjek_psra_daerah[".listFields"] = array();
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "sZone";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "eYear";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1calon";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1TH";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1DF";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1MQ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1JD";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1JJ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1MZ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1lulus";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s1gagal";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2calon";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2TH";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2DF";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2MQ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2JD";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2JJ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2MZ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2lulus";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s2gagal";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3calon";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3TH";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3DF";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3MQ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3JD";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3JJ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3MZ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3lulus";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s3gagal";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4calon";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4TH";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4DF";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4MQ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4JD";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4JJ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4MZ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4lulus";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s4gagal";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5calon";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5TH";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5DF";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5MQ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5JD";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5JJ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5MZ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5lulus";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s5gagal";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6calon";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6TH";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6DF";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6JD";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_daerah[".listFields"][] = "s6gagal";

$tdataanalisa_subjek_psra_daerah[".hideMobileList"] = array();


$tdataanalisa_subjek_psra_daerah[".viewFields"] = array();

$tdataanalisa_subjek_psra_daerah[".addFields"] = array();

$tdataanalisa_subjek_psra_daerah[".masterListFields"] = array();
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "sid";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "sZone";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6calon";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1TH";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1DF";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1MQ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1JD";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1JJ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1MZ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1calon";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1lulus";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s1gagal";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2TH";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2DF";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2MQ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2JD";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2JJ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2MZ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2calon";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2lulus";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s2gagal";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3TH";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3DF";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3MQ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3JD";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3JJ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3MZ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3calon";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3lulus";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s3gagal";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4TH";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4DF";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4MQ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4JD";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4JJ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4MZ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4calon";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4lulus";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s4gagal";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5TH";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5DF";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5MQ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5JD";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5JJ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5MZ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5calon";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5lulus";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s5gagal";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6TH";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6DF";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6JD";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "s6gagal";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "eYear";
$tdataanalisa_subjek_psra_daerah[".masterListFields"][] = "eType";

$tdataanalisa_subjek_psra_daerah[".inlineAddFields"] = array();

$tdataanalisa_subjek_psra_daerah[".editFields"] = array();

$tdataanalisa_subjek_psra_daerah[".inlineEditFields"] = array();

$tdataanalisa_subjek_psra_daerah[".exportFields"] = array();
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "sZone";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1TH";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1DF";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1MQ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1JD";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1JJ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1MZ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1calon";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1lulus";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s1gagal";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2TH";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2DF";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2MQ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2JD";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2JJ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2MZ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2calon";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2lulus";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s2gagal";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3TH";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3DF";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3MQ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3JD";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3JJ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3MZ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3calon";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3lulus";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s3gagal";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4TH";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4DF";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4MQ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4JD";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4JJ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4MZ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4calon";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4lulus";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s4gagal";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5TH";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5DF";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5MQ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5JD";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5JJ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5MZ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5calon";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5lulus";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s5gagal";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6TH";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6DF";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6JD";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6calon";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "s6gagal";
$tdataanalisa_subjek_psra_daerah[".exportFields"][] = "eYear";

$tdataanalisa_subjek_psra_daerah[".importFields"] = array();

$tdataanalisa_subjek_psra_daerah[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sid";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["sid"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sZone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sZone";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "setting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
		
	$edata["LinkField"] = "fieldValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["sZone"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eYear";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","eType");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "eType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eType";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=8";

		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["eType"] = $fdata;
//	s1TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "s1TH";
	$fdata["GoodName"] = "s1TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1TH");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1TH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s1TH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1TH"] = $fdata;
//	s1DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "s1DF";
	$fdata["GoodName"] = "s1DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1DF");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1DF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s1DF";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1DF"] = $fdata;
//	s1MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "s1MQ";
	$fdata["GoodName"] = "s1MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1MQ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1MQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s1MQ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1MQ"] = $fdata;
//	s1JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "s1JD";
	$fdata["GoodName"] = "s1JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1JD");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1JD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s1JD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1JD"] = $fdata;
//	s1JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s1JJ";
	$fdata["GoodName"] = "s1JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s1JJ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1JJ"] = $fdata;
//	s1MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "s1MZ";
	$fdata["GoodName"] = "s1MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1MZ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1MZ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s1MZ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1MZ"] = $fdata;
//	s1calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s1calon";
	$fdata["GoodName"] = "s1calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1calon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1calon"] = $fdata;
//	s1lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s1lulus";
	$fdata["GoodName"] = "s1lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1lulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1lulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1lulus"] = $fdata;
//	s1gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s1gagal";
	$fdata["GoodName"] = "s1gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s1gagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1gagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s1gagal"] = $fdata;
//	s2TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s2TH";
	$fdata["GoodName"] = "s2TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2TH");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2TH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s2TH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2TH"] = $fdata;
//	s2DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s2DF";
	$fdata["GoodName"] = "s2DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2DF");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2DF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s2DF";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2DF"] = $fdata;
//	s2MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "s2MQ";
	$fdata["GoodName"] = "s2MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2MQ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2MQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s2MQ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2MQ"] = $fdata;
//	s2JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "s2JD";
	$fdata["GoodName"] = "s2JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2JD");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2JD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s2JD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2JD"] = $fdata;
//	s2JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "s2JJ";
	$fdata["GoodName"] = "s2JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s2JJ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2JJ"] = $fdata;
//	s2MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "s2MZ";
	$fdata["GoodName"] = "s2MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2MZ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2MZ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s2MZ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2MZ"] = $fdata;
//	s2calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "s2calon";
	$fdata["GoodName"] = "s2calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2calon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2calon"] = $fdata;
//	s2lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "s2lulus";
	$fdata["GoodName"] = "s2lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2lulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2lulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2lulus"] = $fdata;
//	s2gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "s2gagal";
	$fdata["GoodName"] = "s2gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s2gagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2gagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s2gagal"] = $fdata;
//	s3TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "s3TH";
	$fdata["GoodName"] = "s3TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3TH");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3TH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s3TH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3TH"] = $fdata;
//	s3DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "s3DF";
	$fdata["GoodName"] = "s3DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3DF");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3DF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s3DF";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3DF"] = $fdata;
//	s3MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "s3MQ";
	$fdata["GoodName"] = "s3MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3MQ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3MQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s3MQ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3MQ"] = $fdata;
//	s3JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "s3JD";
	$fdata["GoodName"] = "s3JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3JD");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3JD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s3JD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3JD"] = $fdata;
//	s3JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "s3JJ";
	$fdata["GoodName"] = "s3JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s3JJ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3JJ"] = $fdata;
//	s3MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "s3MZ";
	$fdata["GoodName"] = "s3MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3MZ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3MZ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s3MZ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3MZ"] = $fdata;
//	s3calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "s3calon";
	$fdata["GoodName"] = "s3calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3calon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3calon"] = $fdata;
//	s3lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "s3lulus";
	$fdata["GoodName"] = "s3lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3lulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3lulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3lulus"] = $fdata;
//	s3gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "s3gagal";
	$fdata["GoodName"] = "s3gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s3gagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3gagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s3gagal"] = $fdata;
//	s4TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "s4TH";
	$fdata["GoodName"] = "s4TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4TH");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4TH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s4TH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4TH"] = $fdata;
//	s4DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "s4DF";
	$fdata["GoodName"] = "s4DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4DF");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4DF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s4DF";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4DF"] = $fdata;
//	s4MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "s4MQ";
	$fdata["GoodName"] = "s4MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4MQ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4MQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s4MQ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4MQ"] = $fdata;
//	s4JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "s4JD";
	$fdata["GoodName"] = "s4JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4JD");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4JD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s4JD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4JD"] = $fdata;
//	s4JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "s4JJ";
	$fdata["GoodName"] = "s4JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s4JJ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4JJ"] = $fdata;
//	s4MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "s4MZ";
	$fdata["GoodName"] = "s4MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4MZ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4MZ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s4MZ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4MZ"] = $fdata;
//	s4calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "s4calon";
	$fdata["GoodName"] = "s4calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4calon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4calon"] = $fdata;
//	s4lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "s4lulus";
	$fdata["GoodName"] = "s4lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4lulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4lulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4lulus"] = $fdata;
//	s4gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "s4gagal";
	$fdata["GoodName"] = "s4gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s4gagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4gagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s4gagal"] = $fdata;
//	s5TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "s5TH";
	$fdata["GoodName"] = "s5TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5TH");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5TH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s5TH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5TH"] = $fdata;
//	s5DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "s5DF";
	$fdata["GoodName"] = "s5DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5DF");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5DF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s5DF";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5DF"] = $fdata;
//	s5MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "s5MQ";
	$fdata["GoodName"] = "s5MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5MQ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5MQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s5MQ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5MQ"] = $fdata;
//	s5JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "s5JD";
	$fdata["GoodName"] = "s5JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5JD");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5JD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s5JD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5JD"] = $fdata;
//	s5JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "s5JJ";
	$fdata["GoodName"] = "s5JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s5JJ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5JJ"] = $fdata;
//	s5MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "s5MZ";
	$fdata["GoodName"] = "s5MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5MZ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5MZ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s5MZ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5MZ"] = $fdata;
//	s5calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "s5calon";
	$fdata["GoodName"] = "s5calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5calon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5calon"] = $fdata;
//	s5lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "s5lulus";
	$fdata["GoodName"] = "s5lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5lulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5lulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5lulus"] = $fdata;
//	s5gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "s5gagal";
	$fdata["GoodName"] = "s5gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s5gagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5gagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_subjek_psra_daerah["s5gagal"] = $fdata;
//	s6TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "s6TH";
	$fdata["GoodName"] = "s6TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6TH");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6TH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s6TH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6TH"] = $fdata;
//	s6DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "s6DF";
	$fdata["GoodName"] = "s6DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6DF");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6DF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s6DF";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6DF"] = $fdata;
//	s6MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "s6MQ";
	$fdata["GoodName"] = "s6MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6MQ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6MQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s6MQ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6MQ"] = $fdata;
//	s6JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "s6JD";
	$fdata["GoodName"] = "s6JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6JD");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6JD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s6JD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6JD"] = $fdata;
//	s6JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "s6JJ";
	$fdata["GoodName"] = "s6JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s6JJ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6JJ"] = $fdata;
//	s6MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "s6MZ";
	$fdata["GoodName"] = "s6MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6MZ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6MZ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s6MZ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6MZ"] = $fdata;
//	s6calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "s6calon";
	$fdata["GoodName"] = "s6calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6calon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6calon"] = $fdata;
//	s6lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "s6lulus";
	$fdata["GoodName"] = "s6lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6lulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6lulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6lulus"] = $fdata;
//	s6gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "s6gagal";
	$fdata["GoodName"] = "s6gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_daerah","s6gagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6gagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataanalisa_subjek_psra_daerah["s6gagal"] = $fdata;


$tables_data["analisa_subjek_psra_daerah"]=&$tdataanalisa_subjek_psra_daerah;
$field_labels["analisa_subjek_psra_daerah"] = &$fieldLabelsanalisa_subjek_psra_daerah;
$fieldToolTips["analisa_subjek_psra_daerah"] = &$fieldToolTipsanalisa_subjek_psra_daerah;
$page_titles["analisa_subjek_psra_daerah"] = &$pageTitlesanalisa_subjek_psra_daerah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analisa_subjek_psra_daerah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["analisa_subjek_psra_daerah"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analisa_subjek_psra_daerah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  sZone,  eYear,  eType,  s1TH,  s1DF,  s1MQ,  s1JD,  s1JJ,  s1MZ,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  (s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1lulus,  1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1gagal,  s2TH,  s2DF,  s2MQ,  s2JD,  s2JJ,  s2MZ,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  (s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2lulus,  1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2gagal,  s3TH,  s3DF,  s3MQ,  s3JD,  s3JJ,  s3MZ,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  (s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3lulus,  1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3gagal,  s4TH,  s4DF,  s4MQ,  s4JD,  s4JJ,  s4MZ,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  (s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4lulus,  1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4gagal,  s5TH,  s5DF,  s5MQ,  s5JD,  s5JJ,  s5MZ,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  (s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5lulus,  1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5gagal,  s6TH,  s6DF,  s6MQ,  s6JD,  s6JJ,  s6MZ,  (s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6calon,  (s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6lulus,  1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6gagal";
$proto0["m_strFrom"] = "FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL)) AS s6TH,  COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL)) AS s6DF,  COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL)) AS s6MQ,  COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL)) AS s6JD,  COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL)) AS s6JJ,  COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL)) AS s6MZ,  sZone  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode  GROUP BY sZone, eYear  ) AS Sub1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto7["m_sql"] = "sZone";
$proto7["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto9["m_sql"] = "eYear";
$proto9["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto11["m_sql"] = "eType";
$proto11["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "s1TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto13["m_sql"] = "s1TH";
$proto13["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "s1DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto15["m_sql"] = "s1DF";
$proto15["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto17["m_sql"] = "s1MQ";
$proto17["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto19["m_sql"] = "s1JD";
$proto19["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto21["m_sql"] = "s1JJ";
$proto21["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto23["m_sql"] = "s1MZ";
$proto23["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto25["m_sql"] = "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto25["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "s1calon";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto27["m_sql"] = "(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto27["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "s1lulus";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto29["m_sql"] = "1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto29["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "s1gagal";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "s2TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto31["m_sql"] = "s2TH";
$proto31["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "s2DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto33["m_sql"] = "s2DF";
$proto33["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto35["m_sql"] = "s2MQ";
$proto35["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto37["m_sql"] = "s2JD";
$proto37["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto39["m_sql"] = "s2JJ";
$proto39["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto41["m_sql"] = "s2MZ";
$proto41["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto43["m_sql"] = "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto43["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "s2calon";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto45["m_sql"] = "(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto45["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "s2lulus";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto47["m_sql"] = "1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto47["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "s2gagal";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "s3TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto49["m_sql"] = "s3TH";
$proto49["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "s3DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto51["m_sql"] = "s3DF";
$proto51["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto53["m_sql"] = "s3MQ";
$proto53["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto55["m_sql"] = "s3JD";
$proto55["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto57["m_sql"] = "s3JJ";
$proto57["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto59["m_sql"] = "s3MZ";
$proto59["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto61["m_sql"] = "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto61["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "s3calon";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto63["m_sql"] = "(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto63["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "s3lulus";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto65["m_sql"] = "1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto65["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "s3gagal";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "s4TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto67["m_sql"] = "s4TH";
$proto67["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "s4DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto69["m_sql"] = "s4DF";
$proto69["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto71["m_sql"] = "s4MQ";
$proto71["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto73["m_sql"] = "s4JD";
$proto73["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto75["m_sql"] = "s4JJ";
$proto75["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto77["m_sql"] = "s4MZ";
$proto77["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto79["m_sql"] = "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto79["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "s4calon";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto81["m_sql"] = "(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto81["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "s4lulus";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto83["m_sql"] = "1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto83["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "s4gagal";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "s5TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto85["m_sql"] = "s5TH";
$proto85["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "s5DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto87["m_sql"] = "s5DF";
$proto87["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto89["m_sql"] = "s5MQ";
$proto89["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto91["m_sql"] = "s5JD";
$proto91["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto93["m_sql"] = "s5JJ";
$proto93["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto95["m_sql"] = "s5MZ";
$proto95["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto97["m_sql"] = "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto97["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "s5calon";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto99["m_sql"] = "(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto99["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "s5lulus";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto101["m_sql"] = "1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto101["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "s5gagal";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "s6TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto103["m_sql"] = "s6TH";
$proto103["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "s6DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto105["m_sql"] = "s6DF";
$proto105["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "s6MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto107["m_sql"] = "s6MQ";
$proto107["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "s6JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto109["m_sql"] = "s6JD";
$proto109["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "s6JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto111["m_sql"] = "s6JJ";
$proto111["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "s6MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto113["m_sql"] = "s6MZ";
$proto113["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s6DF+s6MQ+s6JD+s6JJ+s6MZ)"
));

$proto115["m_sql"] = "(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";
$proto115["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "s6calon";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)"
));

$proto117["m_sql"] = "(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";
$proto117["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "s6lulus";
$obj = new SQLFieldListItem($proto117);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)"
));

$proto119["m_sql"] = "1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";
$proto119["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "s6gagal";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto121=array();
$proto121["m_link"] = "SQLL_MAIN";
			$proto122=array();
$proto122["m_strHead"] = "  		SELECT";
$proto122["m_strFieldList"] = "sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL)) AS s6TH,  COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL)) AS s6DF,  COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL)) AS s6MQ,  COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL)) AS s6JD,  COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL)) AS s6JJ,  COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL)) AS s6MZ,  sZone";
$proto122["m_strFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$proto122["m_strWhere"] = "";
$proto122["m_strOrderBy"] = "";
$proto122["m_strTail"] = "";
			$proto122["cipherer"] = null;
$proto123=array();
$proto123["m_sql"] = "";
$proto123["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto123["m_column"]=$obj;
$proto123["m_contained"] = array();
$proto123["m_strCase"] = "";
$proto123["m_havingmode"] = false;
$proto123["m_inBrackets"] = false;
$proto123["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto123);

$proto122["m_where"] = $obj;
$proto125=array();
$proto125["m_sql"] = "";
$proto125["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto125["m_column"]=$obj;
$proto125["m_contained"] = array();
$proto125["m_strCase"] = "";
$proto125["m_havingmode"] = false;
$proto125["m_inBrackets"] = false;
$proto125["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto125);

$proto122["m_having"] = $obj;
$proto122["m_fieldlist"] = array();
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto127["m_sql"] = "sid";
$proto127["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto122["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto129["m_sql"] = "eYear";
$proto129["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto122["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto131["m_sql"] = "eType";
$proto131["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "";
$obj = new SQLFieldListItem($proto131);

$proto122["m_fieldlist"][]=$obj;
						$proto133=array();
			$proto134=array();
$proto134["m_functiontype"] = "SQLF_COUNT";
$proto134["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto134["m_arguments"][]=$obj;
$proto134["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto134);

$proto133["m_sql"] = "COUNT(sid)";
$proto133["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "totalCalon";
$obj = new SQLFieldListItem($proto133);

$proto122["m_fieldlist"][]=$obj;
						$proto136=array();
			$proto137=array();
$proto137["m_functiontype"] = "SQLF_COUNT";
$proto137["m_arguments"] = array();
						$proto138=array();
$proto138["m_functiontype"] = "SQLF_CUSTOM";
$proto138["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1 LIKE '%TH%'"
));

$proto138["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto138["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto138["m_arguments"][]=$obj;
$proto138["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto138);

$proto137["m_arguments"][]=$obj;
$proto137["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto137);

$proto136["m_sql"] = "COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL))";
$proto136["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "s1TH";
$obj = new SQLFieldListItem($proto136);

$proto122["m_fieldlist"][]=$obj;
						$proto142=array();
			$proto143=array();
$proto143["m_functiontype"] = "SQLF_COUNT";
$proto143["m_arguments"] = array();
						$proto144=array();
$proto144["m_functiontype"] = "SQLF_CUSTOM";
$proto144["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40"
));

$proto144["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto144["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto144["m_arguments"][]=$obj;
$proto144["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto144);

$proto143["m_arguments"][]=$obj;
$proto143["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto143);

$proto142["m_sql"] = "COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL))";
$proto142["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "s1DF";
$obj = new SQLFieldListItem($proto142);

$proto122["m_fieldlist"][]=$obj;
						$proto148=array();
			$proto149=array();
$proto149["m_functiontype"] = "SQLF_COUNT";
$proto149["m_arguments"] = array();
						$proto150=array();
$proto150["m_functiontype"] = "SQLF_CUSTOM";
$proto150["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=40 AND exam_marking.s1<60"
));

$proto150["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto150["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto150["m_arguments"][]=$obj;
$proto150["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto150);

$proto149["m_arguments"][]=$obj;
$proto149["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto149);

$proto148["m_sql"] = "COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL))";
$proto148["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "s1MQ";
$obj = new SQLFieldListItem($proto148);

$proto122["m_fieldlist"][]=$obj;
						$proto154=array();
			$proto155=array();
$proto155["m_functiontype"] = "SQLF_COUNT";
$proto155["m_arguments"] = array();
						$proto156=array();
$proto156["m_functiontype"] = "SQLF_CUSTOM";
$proto156["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=60 AND exam_marking.s1<75"
));

$proto156["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto156["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto156["m_arguments"][]=$obj;
$proto156["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto156);

$proto155["m_arguments"][]=$obj;
$proto155["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto155);

$proto154["m_sql"] = "COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL))";
$proto154["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "s1JD";
$obj = new SQLFieldListItem($proto154);

$proto122["m_fieldlist"][]=$obj;
						$proto160=array();
			$proto161=array();
$proto161["m_functiontype"] = "SQLF_COUNT";
$proto161["m_arguments"] = array();
						$proto162=array();
$proto162["m_functiontype"] = "SQLF_CUSTOM";
$proto162["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=75 AND exam_marking.s1<90"
));

$proto162["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto162["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto162["m_arguments"][]=$obj;
$proto162["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto162);

$proto161["m_arguments"][]=$obj;
$proto161["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto161);

$proto160["m_sql"] = "COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL))";
$proto160["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "s1JJ";
$obj = new SQLFieldListItem($proto160);

$proto122["m_fieldlist"][]=$obj;
						$proto166=array();
			$proto167=array();
$proto167["m_functiontype"] = "SQLF_COUNT";
$proto167["m_arguments"] = array();
						$proto168=array();
$proto168["m_functiontype"] = "SQLF_CUSTOM";
$proto168["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=90"
));

$proto168["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto168["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto168["m_arguments"][]=$obj;
$proto168["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto168);

$proto167["m_arguments"][]=$obj;
$proto167["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto167);

$proto166["m_sql"] = "COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL))";
$proto166["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "s1MZ";
$obj = new SQLFieldListItem($proto166);

$proto122["m_fieldlist"][]=$obj;
						$proto172=array();
			$proto173=array();
$proto173["m_functiontype"] = "SQLF_COUNT";
$proto173["m_arguments"] = array();
						$proto174=array();
$proto174["m_functiontype"] = "SQLF_CUSTOM";
$proto174["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2 LIKE '%TH%'"
));

$proto174["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto174["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto174["m_arguments"][]=$obj;
$proto174["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto174);

$proto173["m_arguments"][]=$obj;
$proto173["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto173);

$proto172["m_sql"] = "COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL))";
$proto172["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "s2TH";
$obj = new SQLFieldListItem($proto172);

$proto122["m_fieldlist"][]=$obj;
						$proto178=array();
			$proto179=array();
$proto179["m_functiontype"] = "SQLF_COUNT";
$proto179["m_arguments"] = array();
						$proto180=array();
$proto180["m_functiontype"] = "SQLF_CUSTOM";
$proto180["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40"
));

$proto180["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto180["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto180["m_arguments"][]=$obj;
$proto180["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto180);

$proto179["m_arguments"][]=$obj;
$proto179["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto179);

$proto178["m_sql"] = "COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL))";
$proto178["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "s2DF";
$obj = new SQLFieldListItem($proto178);

$proto122["m_fieldlist"][]=$obj;
						$proto184=array();
			$proto185=array();
$proto185["m_functiontype"] = "SQLF_COUNT";
$proto185["m_arguments"] = array();
						$proto186=array();
$proto186["m_functiontype"] = "SQLF_CUSTOM";
$proto186["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=40 AND exam_marking.s2<60"
));

$proto186["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto186["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto186["m_arguments"][]=$obj;
$proto186["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto186);

$proto185["m_arguments"][]=$obj;
$proto185["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto185);

$proto184["m_sql"] = "COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL))";
$proto184["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "s2MQ";
$obj = new SQLFieldListItem($proto184);

$proto122["m_fieldlist"][]=$obj;
						$proto190=array();
			$proto191=array();
$proto191["m_functiontype"] = "SQLF_COUNT";
$proto191["m_arguments"] = array();
						$proto192=array();
$proto192["m_functiontype"] = "SQLF_CUSTOM";
$proto192["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=60 AND exam_marking.s2<75"
));

$proto192["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto192["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto192["m_arguments"][]=$obj;
$proto192["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto192);

$proto191["m_arguments"][]=$obj;
$proto191["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto191);

$proto190["m_sql"] = "COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL))";
$proto190["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "s2JD";
$obj = new SQLFieldListItem($proto190);

$proto122["m_fieldlist"][]=$obj;
						$proto196=array();
			$proto197=array();
$proto197["m_functiontype"] = "SQLF_COUNT";
$proto197["m_arguments"] = array();
						$proto198=array();
$proto198["m_functiontype"] = "SQLF_CUSTOM";
$proto198["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=75 AND exam_marking.s2<90"
));

$proto198["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto198["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto198["m_arguments"][]=$obj;
$proto198["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto198);

$proto197["m_arguments"][]=$obj;
$proto197["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto197);

$proto196["m_sql"] = "COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL))";
$proto196["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "s2JJ";
$obj = new SQLFieldListItem($proto196);

$proto122["m_fieldlist"][]=$obj;
						$proto202=array();
			$proto203=array();
$proto203["m_functiontype"] = "SQLF_COUNT";
$proto203["m_arguments"] = array();
						$proto204=array();
$proto204["m_functiontype"] = "SQLF_CUSTOM";
$proto204["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=90"
));

$proto204["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto204["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto204["m_arguments"][]=$obj;
$proto204["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto204);

$proto203["m_arguments"][]=$obj;
$proto203["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto203);

$proto202["m_sql"] = "COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL))";
$proto202["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "s2MZ";
$obj = new SQLFieldListItem($proto202);

$proto122["m_fieldlist"][]=$obj;
						$proto208=array();
			$proto209=array();
$proto209["m_functiontype"] = "SQLF_COUNT";
$proto209["m_arguments"] = array();
						$proto210=array();
$proto210["m_functiontype"] = "SQLF_CUSTOM";
$proto210["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3 LIKE '%TH%'"
));

$proto210["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto210["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto210["m_arguments"][]=$obj;
$proto210["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto210);

$proto209["m_arguments"][]=$obj;
$proto209["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto209);

$proto208["m_sql"] = "COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL))";
$proto208["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "s3TH";
$obj = new SQLFieldListItem($proto208);

$proto122["m_fieldlist"][]=$obj;
						$proto214=array();
			$proto215=array();
$proto215["m_functiontype"] = "SQLF_COUNT";
$proto215["m_arguments"] = array();
						$proto216=array();
$proto216["m_functiontype"] = "SQLF_CUSTOM";
$proto216["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40"
));

$proto216["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto216["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto216["m_arguments"][]=$obj;
$proto216["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto216);

$proto215["m_arguments"][]=$obj;
$proto215["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto215);

$proto214["m_sql"] = "COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL))";
$proto214["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "s3DF";
$obj = new SQLFieldListItem($proto214);

$proto122["m_fieldlist"][]=$obj;
						$proto220=array();
			$proto221=array();
$proto221["m_functiontype"] = "SQLF_COUNT";
$proto221["m_arguments"] = array();
						$proto222=array();
$proto222["m_functiontype"] = "SQLF_CUSTOM";
$proto222["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=40 AND exam_marking.s3<60"
));

$proto222["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto222["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto222["m_arguments"][]=$obj;
$proto222["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto222);

$proto221["m_arguments"][]=$obj;
$proto221["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto221);

$proto220["m_sql"] = "COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL))";
$proto220["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "s3MQ";
$obj = new SQLFieldListItem($proto220);

$proto122["m_fieldlist"][]=$obj;
						$proto226=array();
			$proto227=array();
$proto227["m_functiontype"] = "SQLF_COUNT";
$proto227["m_arguments"] = array();
						$proto228=array();
$proto228["m_functiontype"] = "SQLF_CUSTOM";
$proto228["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=60 AND exam_marking.s3<75"
));

$proto228["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto228["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto228["m_arguments"][]=$obj;
$proto228["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto228);

$proto227["m_arguments"][]=$obj;
$proto227["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto227);

$proto226["m_sql"] = "COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL))";
$proto226["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "s3JD";
$obj = new SQLFieldListItem($proto226);

$proto122["m_fieldlist"][]=$obj;
						$proto232=array();
			$proto233=array();
$proto233["m_functiontype"] = "SQLF_COUNT";
$proto233["m_arguments"] = array();
						$proto234=array();
$proto234["m_functiontype"] = "SQLF_CUSTOM";
$proto234["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=75 AND exam_marking.s3<90"
));

$proto234["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto234["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto234["m_arguments"][]=$obj;
$proto234["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto234);

$proto233["m_arguments"][]=$obj;
$proto233["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto233);

$proto232["m_sql"] = "COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL))";
$proto232["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "s3JJ";
$obj = new SQLFieldListItem($proto232);

$proto122["m_fieldlist"][]=$obj;
						$proto238=array();
			$proto239=array();
$proto239["m_functiontype"] = "SQLF_COUNT";
$proto239["m_arguments"] = array();
						$proto240=array();
$proto240["m_functiontype"] = "SQLF_CUSTOM";
$proto240["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=90"
));

$proto240["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto240["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto240["m_arguments"][]=$obj;
$proto240["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto240);

$proto239["m_arguments"][]=$obj;
$proto239["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto239);

$proto238["m_sql"] = "COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL))";
$proto238["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "s3MZ";
$obj = new SQLFieldListItem($proto238);

$proto122["m_fieldlist"][]=$obj;
						$proto244=array();
			$proto245=array();
$proto245["m_functiontype"] = "SQLF_COUNT";
$proto245["m_arguments"] = array();
						$proto246=array();
$proto246["m_functiontype"] = "SQLF_CUSTOM";
$proto246["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4 LIKE '%TH%'"
));

$proto246["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto246["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto246["m_arguments"][]=$obj;
$proto246["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto246);

$proto245["m_arguments"][]=$obj;
$proto245["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto245);

$proto244["m_sql"] = "COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL))";
$proto244["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "s4TH";
$obj = new SQLFieldListItem($proto244);

$proto122["m_fieldlist"][]=$obj;
						$proto250=array();
			$proto251=array();
$proto251["m_functiontype"] = "SQLF_COUNT";
$proto251["m_arguments"] = array();
						$proto252=array();
$proto252["m_functiontype"] = "SQLF_CUSTOM";
$proto252["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40"
));

$proto252["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto252["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto252["m_arguments"][]=$obj;
$proto252["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto252);

$proto251["m_arguments"][]=$obj;
$proto251["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto251);

$proto250["m_sql"] = "COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL))";
$proto250["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "s4DF";
$obj = new SQLFieldListItem($proto250);

$proto122["m_fieldlist"][]=$obj;
						$proto256=array();
			$proto257=array();
$proto257["m_functiontype"] = "SQLF_COUNT";
$proto257["m_arguments"] = array();
						$proto258=array();
$proto258["m_functiontype"] = "SQLF_CUSTOM";
$proto258["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=40 AND exam_marking.s4<60"
));

$proto258["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto258["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto258["m_arguments"][]=$obj;
$proto258["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto258);

$proto257["m_arguments"][]=$obj;
$proto257["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto257);

$proto256["m_sql"] = "COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL))";
$proto256["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "s4MQ";
$obj = new SQLFieldListItem($proto256);

$proto122["m_fieldlist"][]=$obj;
						$proto262=array();
			$proto263=array();
$proto263["m_functiontype"] = "SQLF_COUNT";
$proto263["m_arguments"] = array();
						$proto264=array();
$proto264["m_functiontype"] = "SQLF_CUSTOM";
$proto264["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=60 AND exam_marking.s4<75"
));

$proto264["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto264["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto264["m_arguments"][]=$obj;
$proto264["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto264);

$proto263["m_arguments"][]=$obj;
$proto263["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto263);

$proto262["m_sql"] = "COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL))";
$proto262["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "s4JD";
$obj = new SQLFieldListItem($proto262);

$proto122["m_fieldlist"][]=$obj;
						$proto268=array();
			$proto269=array();
$proto269["m_functiontype"] = "SQLF_COUNT";
$proto269["m_arguments"] = array();
						$proto270=array();
$proto270["m_functiontype"] = "SQLF_CUSTOM";
$proto270["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=75 AND exam_marking.s4<90"
));

$proto270["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto270["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto270["m_arguments"][]=$obj;
$proto270["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto270);

$proto269["m_arguments"][]=$obj;
$proto269["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto269);

$proto268["m_sql"] = "COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL))";
$proto268["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "s4JJ";
$obj = new SQLFieldListItem($proto268);

$proto122["m_fieldlist"][]=$obj;
						$proto274=array();
			$proto275=array();
$proto275["m_functiontype"] = "SQLF_COUNT";
$proto275["m_arguments"] = array();
						$proto276=array();
$proto276["m_functiontype"] = "SQLF_CUSTOM";
$proto276["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=90 AND exam_marking.s4<=100"
));

$proto276["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto276["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto276["m_arguments"][]=$obj;
$proto276["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto276);

$proto275["m_arguments"][]=$obj;
$proto275["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto275);

$proto274["m_sql"] = "COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL))";
$proto274["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto274["m_expr"]=$obj;
$proto274["m_alias"] = "s4MZ";
$obj = new SQLFieldListItem($proto274);

$proto122["m_fieldlist"][]=$obj;
						$proto280=array();
			$proto281=array();
$proto281["m_functiontype"] = "SQLF_COUNT";
$proto281["m_arguments"] = array();
						$proto282=array();
$proto282["m_functiontype"] = "SQLF_CUSTOM";
$proto282["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5 LIKE '%TH%'"
));

$proto282["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto282["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto282["m_arguments"][]=$obj;
$proto282["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto282);

$proto281["m_arguments"][]=$obj;
$proto281["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto281);

$proto280["m_sql"] = "COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL))";
$proto280["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto280["m_expr"]=$obj;
$proto280["m_alias"] = "s5TH";
$obj = new SQLFieldListItem($proto280);

$proto122["m_fieldlist"][]=$obj;
						$proto286=array();
			$proto287=array();
$proto287["m_functiontype"] = "SQLF_COUNT";
$proto287["m_arguments"] = array();
						$proto288=array();
$proto288["m_functiontype"] = "SQLF_CUSTOM";
$proto288["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40"
));

$proto288["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto288["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto288["m_arguments"][]=$obj;
$proto288["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto288);

$proto287["m_arguments"][]=$obj;
$proto287["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto287);

$proto286["m_sql"] = "COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL))";
$proto286["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto286["m_expr"]=$obj;
$proto286["m_alias"] = "s5DF";
$obj = new SQLFieldListItem($proto286);

$proto122["m_fieldlist"][]=$obj;
						$proto292=array();
			$proto293=array();
$proto293["m_functiontype"] = "SQLF_COUNT";
$proto293["m_arguments"] = array();
						$proto294=array();
$proto294["m_functiontype"] = "SQLF_CUSTOM";
$proto294["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=40 AND exam_marking.s5<60"
));

$proto294["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto294["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto294["m_arguments"][]=$obj;
$proto294["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto294);

$proto293["m_arguments"][]=$obj;
$proto293["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto293);

$proto292["m_sql"] = "COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL))";
$proto292["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto292["m_expr"]=$obj;
$proto292["m_alias"] = "s5MQ";
$obj = new SQLFieldListItem($proto292);

$proto122["m_fieldlist"][]=$obj;
						$proto298=array();
			$proto299=array();
$proto299["m_functiontype"] = "SQLF_COUNT";
$proto299["m_arguments"] = array();
						$proto300=array();
$proto300["m_functiontype"] = "SQLF_CUSTOM";
$proto300["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=60 AND exam_marking.s5<75"
));

$proto300["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto300["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto300["m_arguments"][]=$obj;
$proto300["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto300);

$proto299["m_arguments"][]=$obj;
$proto299["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto299);

$proto298["m_sql"] = "COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL))";
$proto298["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto298["m_expr"]=$obj;
$proto298["m_alias"] = "s5JD";
$obj = new SQLFieldListItem($proto298);

$proto122["m_fieldlist"][]=$obj;
						$proto304=array();
			$proto305=array();
$proto305["m_functiontype"] = "SQLF_COUNT";
$proto305["m_arguments"] = array();
						$proto306=array();
$proto306["m_functiontype"] = "SQLF_CUSTOM";
$proto306["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=75 AND exam_marking.s5<90"
));

$proto306["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto306["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto306["m_arguments"][]=$obj;
$proto306["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto306);

$proto305["m_arguments"][]=$obj;
$proto305["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto305);

$proto304["m_sql"] = "COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL))";
$proto304["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto304["m_expr"]=$obj;
$proto304["m_alias"] = "s5JJ";
$obj = new SQLFieldListItem($proto304);

$proto122["m_fieldlist"][]=$obj;
						$proto310=array();
			$proto311=array();
$proto311["m_functiontype"] = "SQLF_COUNT";
$proto311["m_arguments"] = array();
						$proto312=array();
$proto312["m_functiontype"] = "SQLF_CUSTOM";
$proto312["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=90"
));

$proto312["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto312["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto312["m_arguments"][]=$obj;
$proto312["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto312);

$proto311["m_arguments"][]=$obj;
$proto311["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto311);

$proto310["m_sql"] = "COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL))";
$proto310["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto310["m_expr"]=$obj;
$proto310["m_alias"] = "s5MZ";
$obj = new SQLFieldListItem($proto310);

$proto122["m_fieldlist"][]=$obj;
						$proto316=array();
			$proto317=array();
$proto317["m_functiontype"] = "SQLF_COUNT";
$proto317["m_arguments"] = array();
						$proto318=array();
$proto318["m_functiontype"] = "SQLF_CUSTOM";
$proto318["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6 LIKE '%TH%'"
));

$proto318["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto318["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto318["m_arguments"][]=$obj;
$proto318["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto318);

$proto317["m_arguments"][]=$obj;
$proto317["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto317);

$proto316["m_sql"] = "COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL))";
$proto316["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto316["m_expr"]=$obj;
$proto316["m_alias"] = "s6TH";
$obj = new SQLFieldListItem($proto316);

$proto122["m_fieldlist"][]=$obj;
						$proto322=array();
			$proto323=array();
$proto323["m_functiontype"] = "SQLF_COUNT";
$proto323["m_arguments"] = array();
						$proto324=array();
$proto324["m_functiontype"] = "SQLF_CUSTOM";
$proto324["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40"
));

$proto324["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto324["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto324["m_arguments"][]=$obj;
$proto324["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto324);

$proto323["m_arguments"][]=$obj;
$proto323["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto323);

$proto322["m_sql"] = "COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL))";
$proto322["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto322["m_expr"]=$obj;
$proto322["m_alias"] = "s6DF";
$obj = new SQLFieldListItem($proto322);

$proto122["m_fieldlist"][]=$obj;
						$proto328=array();
			$proto329=array();
$proto329["m_functiontype"] = "SQLF_COUNT";
$proto329["m_arguments"] = array();
						$proto330=array();
$proto330["m_functiontype"] = "SQLF_CUSTOM";
$proto330["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6>=40 AND exam_marking.s6<60"
));

$proto330["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto330["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto330["m_arguments"][]=$obj;
$proto330["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto330);

$proto329["m_arguments"][]=$obj;
$proto329["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto329);

$proto328["m_sql"] = "COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL))";
$proto328["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto328["m_expr"]=$obj;
$proto328["m_alias"] = "s6MQ";
$obj = new SQLFieldListItem($proto328);

$proto122["m_fieldlist"][]=$obj;
						$proto334=array();
			$proto335=array();
$proto335["m_functiontype"] = "SQLF_COUNT";
$proto335["m_arguments"] = array();
						$proto336=array();
$proto336["m_functiontype"] = "SQLF_CUSTOM";
$proto336["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6>=60 AND exam_marking.s6<75"
));

$proto336["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto336["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto336["m_arguments"][]=$obj;
$proto336["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto336);

$proto335["m_arguments"][]=$obj;
$proto335["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto335);

$proto334["m_sql"] = "COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL))";
$proto334["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto334["m_expr"]=$obj;
$proto334["m_alias"] = "s6JD";
$obj = new SQLFieldListItem($proto334);

$proto122["m_fieldlist"][]=$obj;
						$proto340=array();
			$proto341=array();
$proto341["m_functiontype"] = "SQLF_COUNT";
$proto341["m_arguments"] = array();
						$proto342=array();
$proto342["m_functiontype"] = "SQLF_CUSTOM";
$proto342["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6>=75 AND exam_marking.s6<90"
));

$proto342["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto342["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto342["m_arguments"][]=$obj;
$proto342["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto342);

$proto341["m_arguments"][]=$obj;
$proto341["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto341);

$proto340["m_sql"] = "COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL))";
$proto340["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto340["m_expr"]=$obj;
$proto340["m_alias"] = "s6JJ";
$obj = new SQLFieldListItem($proto340);

$proto122["m_fieldlist"][]=$obj;
						$proto346=array();
			$proto347=array();
$proto347["m_functiontype"] = "SQLF_COUNT";
$proto347["m_arguments"] = array();
						$proto348=array();
$proto348["m_functiontype"] = "SQLF_CUSTOM";
$proto348["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6>=90"
));

$proto348["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto348["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto348["m_arguments"][]=$obj;
$proto348["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto348);

$proto347["m_arguments"][]=$obj;
$proto347["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto347);

$proto346["m_sql"] = "COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL))";
$proto346["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto346["m_expr"]=$obj;
$proto346["m_alias"] = "s6MZ";
$obj = new SQLFieldListItem($proto346);

$proto122["m_fieldlist"][]=$obj;
						$proto352=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto352["m_sql"] = "sZone";
$proto352["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto352["m_expr"]=$obj;
$proto352["m_alias"] = "";
$obj = new SQLFieldListItem($proto352);

$proto122["m_fieldlist"][]=$obj;
$proto122["m_fromlist"] = array();
												$proto354=array();
$proto354["m_link"] = "SQLL_MAIN";
			$proto355=array();
$proto355["m_strName"] = "exam_marking";
$proto355["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto355["m_columns"] = array();
$proto355["m_columns"][] = "sid";
$proto355["m_columns"][] = "name";
$proto355["m_columns"][] = "gender";
$proto355["m_columns"][] = "birthdate";
$proto355["m_columns"][] = "birthCert";
$proto355["m_columns"][] = "nationality";
$proto355["m_columns"][] = "sCode";
$proto355["m_columns"][] = "eNo";
$proto355["m_columns"][] = "eYear";
$proto355["m_columns"][] = "eType";
$proto355["m_columns"][] = "s1";
$proto355["m_columns"][] = "s2";
$proto355["m_columns"][] = "s3";
$proto355["m_columns"][] = "s4";
$proto355["m_columns"][] = "s5";
$proto355["m_columns"][] = "s6";
$proto355["m_columns"][] = "s7";
$obj = new SQLTable($proto355);

$proto354["m_table"] = $obj;
$proto354["m_sql"] = "exam_marking";
$proto354["m_alias"] = "";
$proto354["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto356=array();
$proto356["m_sql"] = "";
$proto356["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto356["m_column"]=$obj;
$proto356["m_contained"] = array();
$proto356["m_strCase"] = "";
$proto356["m_havingmode"] = false;
$proto356["m_inBrackets"] = false;
$proto356["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto356);

$proto354["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto354);

$proto122["m_fromlist"][]=$obj;
												$proto358=array();
$proto358["m_link"] = "SQLL_LEFTJOIN";
			$proto359=array();
$proto359["m_strName"] = "school";
$proto359["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto359["m_columns"] = array();
$proto359["m_columns"][] = "sno";
$proto359["m_columns"][] = "sName";
$proto359["m_columns"][] = "sCenter";
$proto359["m_columns"][] = "sCode";
$proto359["m_columns"][] = "sZone";
$proto359["m_columns"][] = "sType";
$obj = new SQLTable($proto359);

$proto358["m_table"] = $obj;
$proto358["m_sql"] = "LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$proto358["m_alias"] = "";
$proto358["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto360=array();
$proto360["m_sql"] = "exam_marking.sCode = school.sCode";
$proto360["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto360["m_column"]=$obj;
$proto360["m_contained"] = array();
$proto360["m_strCase"] = "= school.sCode";
$proto360["m_havingmode"] = false;
$proto360["m_inBrackets"] = false;
$proto360["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto360);

$proto358["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto358);

$proto122["m_fromlist"][]=$obj;
$proto122["m_groupby"] = array();
												$proto362=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto362["m_column"]=$obj;
$obj = new SQLGroupByItem($proto362);

$proto122["m_groupby"][]=$obj;
												$proto364=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_daerah"
));

$proto364["m_column"]=$obj;
$obj = new SQLGroupByItem($proto364);

$proto122["m_groupby"][]=$obj;
$proto122["m_orderby"] = array();
$proto122["m_srcTableName"]="analisa_subjek_psra_daerah";		
$obj = new SQLQuery($proto122);

$proto121["m_table"] = $obj;
$proto121["m_sql"] = "(  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL)) AS s6TH,  COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL)) AS s6DF,  COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL)) AS s6MQ,  COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL)) AS s6JD,  COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL)) AS s6JJ,  COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL)) AS s6MZ,  sZone  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode  GROUP BY sZone, eYear  ) AS Sub1";
$proto121["m_alias"] = "Sub1";
$proto121["m_srcTableName"] = "analisa_subjek_psra_daerah";
$proto366=array();
$proto366["m_sql"] = "";
$proto366["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto366["m_column"]=$obj;
$proto366["m_contained"] = array();
$proto366["m_strCase"] = "";
$proto366["m_havingmode"] = false;
$proto366["m_inBrackets"] = false;
$proto366["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto366);

$proto121["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto121);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="analisa_subjek_psra_daerah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analisa_subjek_psra_daerah = createSqlQuery_analisa_subjek_psra_daerah();



																																																										

$tdataanalisa_subjek_psra_daerah[".sqlquery"] = $queryData_analisa_subjek_psra_daerah;

include_once(getabspath("include/analisa_subjek_psra_daerah_events.php"));
$tableEvents["analisa_subjek_psra_daerah"] = new eventclass_analisa_subjek_psra_daerah;
$tdataanalisa_subjek_psra_daerah[".hasEvents"] = true;

$query = &$queryData_analisa_subjek_psra_daerah;
$table = "analisa_subjek_psra_daerah";
// here goes EVENT_INIT_TABLE event


global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1){
$query->addWhere("sZone='".$zon."'");
}
;
unset($query);
?>