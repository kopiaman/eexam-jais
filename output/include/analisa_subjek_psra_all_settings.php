<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalisa_subjek_psra_all = array();
	$tdataanalisa_subjek_psra_all[".truncateText"] = true;
	$tdataanalisa_subjek_psra_all[".NumberOfChars"] = 80;
	$tdataanalisa_subjek_psra_all[".ShortName"] = "analisa_subjek_psra_all";
	$tdataanalisa_subjek_psra_all[".OwnerID"] = "";
	$tdataanalisa_subjek_psra_all[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsanalisa_subjek_psra_all = array();
$fieldToolTipsanalisa_subjek_psra_all = array();
$pageTitlesanalisa_subjek_psra_all = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalisa_subjek_psra_all["English"] = array();
	$fieldToolTipsanalisa_subjek_psra_all["English"] = array();
	$pageTitlesanalisa_subjek_psra_all["English"] = array();
	$fieldLabelsanalisa_subjek_psra_all["English"]["eYear"] = "Tahun";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["eYear"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1TH"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1DF"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1JD"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1calon"] = "AS";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1calon"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s1gagal"] = "GAGAL %    ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s1gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2TH"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2DF"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2JD"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2calon"] = "BA";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2calon"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2lulus"] = "LULUS  %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s2gagal"] = "GAGAL %    ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s2gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3TH"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3DF"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3JD"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3calon"] = "JIK";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3calon"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s3gagal"] = "GAGAL %    ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s3gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4TH"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4DF"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4JD"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4calon"] = "TF";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4calon"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s4gagal"] = "GAGAL %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s4gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5TH"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5DF"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5JD"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5calon"] = "TJ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5calon"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s5gagal"] = "GAGAL %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s5gagal"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6TH"] = "TH";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6TH"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6DF"] = "MS";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6DF"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6MQ"] = "MQ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6MQ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6JD"] = "J";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6JD"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6JJ"] = "JJ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6JJ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6MZ"] = "MZ";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6MZ"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6calon"] = "UTH";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6calon"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6lulus"] = "LULUS %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6lulus"] = "";
	$fieldLabelsanalisa_subjek_psra_all["English"]["s6gagal"] = "GAGAL %";
	$fieldToolTipsanalisa_subjek_psra_all["English"]["s6gagal"] = "";
	if (count($fieldToolTipsanalisa_subjek_psra_all["English"]))
		$tdataanalisa_subjek_psra_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalisa_subjek_psra_all[""] = array();
	$fieldToolTipsanalisa_subjek_psra_all[""] = array();
	$pageTitlesanalisa_subjek_psra_all[""] = array();
	if (count($fieldToolTipsanalisa_subjek_psra_all[""]))
		$tdataanalisa_subjek_psra_all[".isUseToolTips"] = true;
}


	$tdataanalisa_subjek_psra_all[".NCSearch"] = true;



$tdataanalisa_subjek_psra_all[".shortTableName"] = "analisa_subjek_psra_all";
$tdataanalisa_subjek_psra_all[".nSecOptions"] = 0;
$tdataanalisa_subjek_psra_all[".recsPerRowList"] = 1;
$tdataanalisa_subjek_psra_all[".recsPerRowPrint"] = 1;
$tdataanalisa_subjek_psra_all[".mainTableOwnerID"] = "";
$tdataanalisa_subjek_psra_all[".moveNext"] = 1;
$tdataanalisa_subjek_psra_all[".entityType"] = 1;

$tdataanalisa_subjek_psra_all[".strOriginalTableName"] = "exam_marking";




$tdataanalisa_subjek_psra_all[".showAddInPopup"] = false;

$tdataanalisa_subjek_psra_all[".showEditInPopup"] = false;

$tdataanalisa_subjek_psra_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalisa_subjek_psra_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalisa_subjek_psra_all[".fieldsForRegister"] = array();

$tdataanalisa_subjek_psra_all[".listAjax"] = false;

	$tdataanalisa_subjek_psra_all[".audit"] = false;

	$tdataanalisa_subjek_psra_all[".locking"] = false;



$tdataanalisa_subjek_psra_all[".list"] = true;



$tdataanalisa_subjek_psra_all[".exportTo"] = true;



$tdataanalisa_subjek_psra_all[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataanalisa_subjek_psra_all[".searchSaving"] = false;
//

$tdataanalisa_subjek_psra_all[".showSearchPanel"] = true;
		$tdataanalisa_subjek_psra_all[".flexibleSearch"] = true;

if (isMobile())
	$tdataanalisa_subjek_psra_all[".isUseAjaxSuggest"] = false;
else
	$tdataanalisa_subjek_psra_all[".isUseAjaxSuggest"] = true;

$tdataanalisa_subjek_psra_all[".rowHighlite"] = true;


																				
$tdataanalisa_subjek_psra_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalisa_subjek_psra_all[".isUseTimeForSearch"] = false;





$tdataanalisa_subjek_psra_all[".allSearchFields"] = array();
$tdataanalisa_subjek_psra_all[".filterFields"] = array();
$tdataanalisa_subjek_psra_all[".requiredSearchFields"] = array();



$tdataanalisa_subjek_psra_all[".googleLikeFields"] = array();
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1TH";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1DF";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1MQ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1JD";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1JJ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1MZ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1calon";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1lulus";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s1gagal";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2TH";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2DF";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2MQ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2JD";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2JJ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2MZ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2calon";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2lulus";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s2gagal";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3TH";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3DF";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3MQ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3JD";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3JJ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3MZ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3calon";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3lulus";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s3gagal";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4TH";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4DF";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4MQ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4JD";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4JJ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4MZ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4calon";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4lulus";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s4gagal";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5TH";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5DF";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5MQ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5JD";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5JJ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5MZ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5calon";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5lulus";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s5gagal";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6TH";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6DF";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6JD";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6calon";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_all[".googleLikeFields"][] = "s6gagal";

$tdataanalisa_subjek_psra_all[".panelSearchFields"] = array();
$tdataanalisa_subjek_psra_all[".searchPanelOptions"] = array();
$tdataanalisa_subjek_psra_all[".panelSearchFields"][] = "eYear";
	

$tdataanalisa_subjek_psra_all[".tableType"] = "list";

$tdataanalisa_subjek_psra_all[".printerPageOrientation"] = 0;
$tdataanalisa_subjek_psra_all[".nPrinterPageScale"] = 100;

$tdataanalisa_subjek_psra_all[".nPrinterSplitRecords"] = 40;

$tdataanalisa_subjek_psra_all[".nPrinterPDFSplitRecords"] = 40;



$tdataanalisa_subjek_psra_all[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataanalisa_subjek_psra_all[".pageSize"] = 20;

$tdataanalisa_subjek_psra_all[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalisa_subjek_psra_all[".strOrderBy"] = $tstrOrderBy;

$tdataanalisa_subjek_psra_all[".orderindexes"] = array();

$tdataanalisa_subjek_psra_all[".sqlHead"] = "SELECT eYear,  s1TH,  s1DF,  s1MQ,  s1JD,  s1JJ,  s1MZ,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  (s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1lulus,  1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1gagal,  s2TH,  s2DF,  s2MQ,  s2JD,  s2JJ,  s2MZ,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  (s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2lulus,  1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2gagal,  s3TH,  s3DF,  s3MQ,  s3JD,  s3JJ,  s3MZ,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  (s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3lulus,  1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3gagal,  s4TH,  s4DF,  s4MQ,  s4JD,  s4JJ,  s4MZ,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  (s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4lulus,  1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4gagal,  s5TH,  s5DF,  s5MQ,  s5JD,  s5JJ,  s5MZ,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  (s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5lulus,  1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5gagal,  s6TH,  s6DF,  s6MQ,  s6JD,  s6JJ,  s6MZ,  (s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6calon,  (s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6lulus,  1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6gagal";
$tdataanalisa_subjek_psra_all[".sqlFrom"] = "FROM (  		SELECT  eYear,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL)) AS s6TH,  COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL)) AS s6DF,  COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL)) AS s6MQ,  COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL)) AS s6JD,  COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL)) AS s6JJ,  COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL)) AS s6MZ  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode  GROUP BY eYear  ORDER BY eYear DESC  ) AS Sub1";
$tdataanalisa_subjek_psra_all[".sqlWhereExpr"] = "";
$tdataanalisa_subjek_psra_all[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalisa_subjek_psra_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalisa_subjek_psra_all[".arrGroupsPerPage"] = $arrGPP;

$tdataanalisa_subjek_psra_all[".highlightSearchResults"] = true;

$tableKeysanalisa_subjek_psra_all = array();
$tableKeysanalisa_subjek_psra_all[] = "eYear";
$tdataanalisa_subjek_psra_all[".Keys"] = $tableKeysanalisa_subjek_psra_all;

$tdataanalisa_subjek_psra_all[".listFields"] = array();
$tdataanalisa_subjek_psra_all[".listFields"][] = "eYear";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1calon";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1TH";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1DF";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1MQ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1JD";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1JJ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1MZ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1lulus";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s1gagal";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2calon";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2TH";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2DF";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2MQ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2JD";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2JJ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2MZ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2lulus";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s2gagal";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3calon";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3TH";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3DF";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3MQ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3JD";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3JJ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3MZ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3lulus";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s3gagal";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4calon";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4TH";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4DF";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4MQ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4JD";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4JJ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4MZ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4lulus";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s4gagal";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5calon";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5TH";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5DF";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5MQ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5JD";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5JJ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5MZ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5lulus";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s5gagal";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6calon";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6TH";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6DF";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6JD";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_all[".listFields"][] = "s6gagal";

$tdataanalisa_subjek_psra_all[".hideMobileList"] = array();


$tdataanalisa_subjek_psra_all[".viewFields"] = array();

$tdataanalisa_subjek_psra_all[".addFields"] = array();

$tdataanalisa_subjek_psra_all[".masterListFields"] = array();
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "eYear";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1calon";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1TH";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1DF";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1MQ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1JD";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1JJ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1MZ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1lulus";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s1gagal";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2calon";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2TH";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2DF";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2MQ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2JD";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2JJ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2MZ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2lulus";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s2gagal";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3calon";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3TH";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3DF";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3MQ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3JD";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3JJ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3MZ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3lulus";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s3gagal";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4calon";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4TH";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4DF";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4MQ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4JD";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4JJ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4MZ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4lulus";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s4gagal";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5calon";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5TH";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5DF";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5MQ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5JD";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5JJ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5MZ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5lulus";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s5gagal";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6calon";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6TH";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6DF";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6JD";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_all[".masterListFields"][] = "s6gagal";

$tdataanalisa_subjek_psra_all[".inlineAddFields"] = array();

$tdataanalisa_subjek_psra_all[".editFields"] = array();

$tdataanalisa_subjek_psra_all[".inlineEditFields"] = array();

$tdataanalisa_subjek_psra_all[".exportFields"] = array();
$tdataanalisa_subjek_psra_all[".exportFields"][] = "eYear";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1calon";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1TH";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1DF";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1MQ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1JD";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1JJ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1MZ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1lulus";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s1gagal";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2calon";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2TH";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2DF";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2MQ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2JD";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2JJ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2MZ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2lulus";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s2gagal";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3calon";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3TH";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3DF";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3MQ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3JD";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3JJ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3MZ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3lulus";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s3gagal";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4calon";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4TH";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4DF";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4MQ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4JD";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4JJ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4MZ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4lulus";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s4gagal";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5calon";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5TH";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5DF";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5MQ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5JD";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5JJ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5MZ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5lulus";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s5gagal";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6calon";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6TH";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6DF";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6MQ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6JD";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6JJ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6MZ";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6lulus";
$tdataanalisa_subjek_psra_all[".exportFields"][] = "s6gagal";

$tdataanalisa_subjek_psra_all[".importFields"] = array();

$tdataanalisa_subjek_psra_all[".printFields"] = array();

//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["eYear"] = $fdata;
//	s1TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "s1TH";
	$fdata["GoodName"] = "s1TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1TH");
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








	$tdataanalisa_subjek_psra_all["s1TH"] = $fdata;
//	s1DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "s1DF";
	$fdata["GoodName"] = "s1DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1DF");
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








	$tdataanalisa_subjek_psra_all["s1DF"] = $fdata;
//	s1MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "s1MQ";
	$fdata["GoodName"] = "s1MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1MQ");
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








	$tdataanalisa_subjek_psra_all["s1MQ"] = $fdata;
//	s1JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "s1JD";
	$fdata["GoodName"] = "s1JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1JD");
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








	$tdataanalisa_subjek_psra_all["s1JD"] = $fdata;
//	s1JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "s1JJ";
	$fdata["GoodName"] = "s1JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1JJ");
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








	$tdataanalisa_subjek_psra_all["s1JJ"] = $fdata;
//	s1MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "s1MZ";
	$fdata["GoodName"] = "s1MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1MZ");
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








	$tdataanalisa_subjek_psra_all["s1MZ"] = $fdata;
//	s1calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "s1calon";
	$fdata["GoodName"] = "s1calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1calon");
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








	$tdataanalisa_subjek_psra_all["s1calon"] = $fdata;
//	s1lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s1lulus";
	$fdata["GoodName"] = "s1lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1lulus");
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








	$tdataanalisa_subjek_psra_all["s1lulus"] = $fdata;
//	s1gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "s1gagal";
	$fdata["GoodName"] = "s1gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s1gagal");
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








	$tdataanalisa_subjek_psra_all["s1gagal"] = $fdata;
//	s2TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s2TH";
	$fdata["GoodName"] = "s2TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2TH");
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








	$tdataanalisa_subjek_psra_all["s2TH"] = $fdata;
//	s2DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s2DF";
	$fdata["GoodName"] = "s2DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2DF");
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








	$tdataanalisa_subjek_psra_all["s2DF"] = $fdata;
//	s2MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s2MQ";
	$fdata["GoodName"] = "s2MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2MQ");
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








	$tdataanalisa_subjek_psra_all["s2MQ"] = $fdata;
//	s2JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s2JD";
	$fdata["GoodName"] = "s2JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2JD");
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








	$tdataanalisa_subjek_psra_all["s2JD"] = $fdata;
//	s2JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s2JJ";
	$fdata["GoodName"] = "s2JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2JJ");
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








	$tdataanalisa_subjek_psra_all["s2JJ"] = $fdata;
//	s2MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "s2MZ";
	$fdata["GoodName"] = "s2MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2MZ");
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








	$tdataanalisa_subjek_psra_all["s2MZ"] = $fdata;
//	s2calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "s2calon";
	$fdata["GoodName"] = "s2calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2calon");
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








	$tdataanalisa_subjek_psra_all["s2calon"] = $fdata;
//	s2lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "s2lulus";
	$fdata["GoodName"] = "s2lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2lulus");
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








	$tdataanalisa_subjek_psra_all["s2lulus"] = $fdata;
//	s2gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "s2gagal";
	$fdata["GoodName"] = "s2gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s2gagal");
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








	$tdataanalisa_subjek_psra_all["s2gagal"] = $fdata;
//	s3TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "s3TH";
	$fdata["GoodName"] = "s3TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3TH");
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








	$tdataanalisa_subjek_psra_all["s3TH"] = $fdata;
//	s3DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "s3DF";
	$fdata["GoodName"] = "s3DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3DF");
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








	$tdataanalisa_subjek_psra_all["s3DF"] = $fdata;
//	s3MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "s3MQ";
	$fdata["GoodName"] = "s3MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3MQ");
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








	$tdataanalisa_subjek_psra_all["s3MQ"] = $fdata;
//	s3JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "s3JD";
	$fdata["GoodName"] = "s3JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3JD");
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








	$tdataanalisa_subjek_psra_all["s3JD"] = $fdata;
//	s3JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "s3JJ";
	$fdata["GoodName"] = "s3JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3JJ");
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








	$tdataanalisa_subjek_psra_all["s3JJ"] = $fdata;
//	s3MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "s3MZ";
	$fdata["GoodName"] = "s3MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3MZ");
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








	$tdataanalisa_subjek_psra_all["s3MZ"] = $fdata;
//	s3calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "s3calon";
	$fdata["GoodName"] = "s3calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3calon");
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








	$tdataanalisa_subjek_psra_all["s3calon"] = $fdata;
//	s3lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "s3lulus";
	$fdata["GoodName"] = "s3lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3lulus");
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








	$tdataanalisa_subjek_psra_all["s3lulus"] = $fdata;
//	s3gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "s3gagal";
	$fdata["GoodName"] = "s3gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s3gagal");
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








	$tdataanalisa_subjek_psra_all["s3gagal"] = $fdata;
//	s4TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "s4TH";
	$fdata["GoodName"] = "s4TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4TH");
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








	$tdataanalisa_subjek_psra_all["s4TH"] = $fdata;
//	s4DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "s4DF";
	$fdata["GoodName"] = "s4DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4DF");
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








	$tdataanalisa_subjek_psra_all["s4DF"] = $fdata;
//	s4MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "s4MQ";
	$fdata["GoodName"] = "s4MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4MQ");
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








	$tdataanalisa_subjek_psra_all["s4MQ"] = $fdata;
//	s4JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "s4JD";
	$fdata["GoodName"] = "s4JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4JD");
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








	$tdataanalisa_subjek_psra_all["s4JD"] = $fdata;
//	s4JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "s4JJ";
	$fdata["GoodName"] = "s4JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4JJ");
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








	$tdataanalisa_subjek_psra_all["s4JJ"] = $fdata;
//	s4MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "s4MZ";
	$fdata["GoodName"] = "s4MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4MZ");
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








	$tdataanalisa_subjek_psra_all["s4MZ"] = $fdata;
//	s4calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "s4calon";
	$fdata["GoodName"] = "s4calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4calon");
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








	$tdataanalisa_subjek_psra_all["s4calon"] = $fdata;
//	s4lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "s4lulus";
	$fdata["GoodName"] = "s4lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4lulus");
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








	$tdataanalisa_subjek_psra_all["s4lulus"] = $fdata;
//	s4gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "s4gagal";
	$fdata["GoodName"] = "s4gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s4gagal");
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








	$tdataanalisa_subjek_psra_all["s4gagal"] = $fdata;
//	s5TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "s5TH";
	$fdata["GoodName"] = "s5TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5TH");
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








	$tdataanalisa_subjek_psra_all["s5TH"] = $fdata;
//	s5DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "s5DF";
	$fdata["GoodName"] = "s5DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5DF");
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








	$tdataanalisa_subjek_psra_all["s5DF"] = $fdata;
//	s5MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "s5MQ";
	$fdata["GoodName"] = "s5MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5MQ");
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








	$tdataanalisa_subjek_psra_all["s5MQ"] = $fdata;
//	s5JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "s5JD";
	$fdata["GoodName"] = "s5JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5JD");
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








	$tdataanalisa_subjek_psra_all["s5JD"] = $fdata;
//	s5JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "s5JJ";
	$fdata["GoodName"] = "s5JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5JJ");
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








	$tdataanalisa_subjek_psra_all["s5JJ"] = $fdata;
//	s5MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "s5MZ";
	$fdata["GoodName"] = "s5MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5MZ");
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








	$tdataanalisa_subjek_psra_all["s5MZ"] = $fdata;
//	s5calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "s5calon";
	$fdata["GoodName"] = "s5calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5calon");
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








	$tdataanalisa_subjek_psra_all["s5calon"] = $fdata;
//	s5lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "s5lulus";
	$fdata["GoodName"] = "s5lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5lulus");
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








	$tdataanalisa_subjek_psra_all["s5lulus"] = $fdata;
//	s5gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "s5gagal";
	$fdata["GoodName"] = "s5gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s5gagal");
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








	$tdataanalisa_subjek_psra_all["s5gagal"] = $fdata;
//	s6TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "s6TH";
	$fdata["GoodName"] = "s6TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6TH");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6TH"] = $fdata;
//	s6DF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "s6DF";
	$fdata["GoodName"] = "s6DF";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6DF");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6DF"] = $fdata;
//	s6MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "s6MQ";
	$fdata["GoodName"] = "s6MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6MQ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6MQ"] = $fdata;
//	s6JD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "s6JD";
	$fdata["GoodName"] = "s6JD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6JD");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6JD"] = $fdata;
//	s6JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "s6JJ";
	$fdata["GoodName"] = "s6JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6JJ"] = $fdata;
//	s6MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "s6MZ";
	$fdata["GoodName"] = "s6MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6MZ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6MZ"] = $fdata;
//	s6calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "s6calon";
	$fdata["GoodName"] = "s6calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6calon"] = $fdata;
//	s6lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "s6lulus";
	$fdata["GoodName"] = "s6lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6lulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6lulus"] = $fdata;
//	s6gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "s6gagal";
	$fdata["GoodName"] = "s6gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_subjek_psra_all","s6gagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
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








	$tdataanalisa_subjek_psra_all["s6gagal"] = $fdata;


$tables_data["analisa_subjek_psra_all"]=&$tdataanalisa_subjek_psra_all;
$field_labels["analisa_subjek_psra_all"] = &$fieldLabelsanalisa_subjek_psra_all;
$fieldToolTips["analisa_subjek_psra_all"] = &$fieldToolTipsanalisa_subjek_psra_all;
$page_titles["analisa_subjek_psra_all"] = &$pageTitlesanalisa_subjek_psra_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analisa_subjek_psra_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["analisa_subjek_psra_all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analisa_subjek_psra_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eYear,  s1TH,  s1DF,  s1MQ,  s1JD,  s1JJ,  s1MZ,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  (s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1lulus,  1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1gagal,  s2TH,  s2DF,  s2MQ,  s2JD,  s2JJ,  s2MZ,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  (s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2lulus,  1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2gagal,  s3TH,  s3DF,  s3MQ,  s3JD,  s3JJ,  s3MZ,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  (s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3lulus,  1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3gagal,  s4TH,  s4DF,  s4MQ,  s4JD,  s4JJ,  s4MZ,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  (s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4lulus,  1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4gagal,  s5TH,  s5DF,  s5MQ,  s5JD,  s5JJ,  s5MZ,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  (s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5lulus,  1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5gagal,  s6TH,  s6DF,  s6MQ,  s6JD,  s6JJ,  s6MZ,  (s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6calon,  (s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6lulus,  1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ) AS s6gagal";
$proto0["m_strFrom"] = "FROM (  		SELECT  eYear,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL)) AS s6TH,  COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL)) AS s6DF,  COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL)) AS s6MQ,  COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL)) AS s6JD,  COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL)) AS s6JJ,  COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL)) AS s6MZ  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode  GROUP BY eYear  ORDER BY eYear DESC  ) AS Sub1";
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
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto5["m_sql"] = "eYear";
$proto5["m_srcTableName"] = "analisa_subjek_psra_all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "s1TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto7["m_sql"] = "s1TH";
$proto7["m_srcTableName"] = "analisa_subjek_psra_all";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "s1DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto9["m_sql"] = "s1DF";
$proto9["m_srcTableName"] = "analisa_subjek_psra_all";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto11["m_sql"] = "s1MQ";
$proto11["m_srcTableName"] = "analisa_subjek_psra_all";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto13["m_sql"] = "s1JD";
$proto13["m_srcTableName"] = "analisa_subjek_psra_all";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto15["m_sql"] = "s1JJ";
$proto15["m_srcTableName"] = "analisa_subjek_psra_all";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto17["m_sql"] = "s1MZ";
$proto17["m_srcTableName"] = "analisa_subjek_psra_all";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto19["m_sql"] = "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto19["m_srcTableName"] = "analisa_subjek_psra_all";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "s1calon";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto21["m_sql"] = "(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto21["m_srcTableName"] = "analisa_subjek_psra_all";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "s1lulus";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto23["m_sql"] = "1-(s1MQ+s1JD+s1JJ+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto23["m_srcTableName"] = "analisa_subjek_psra_all";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "s1gagal";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "s2TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto25["m_sql"] = "s2TH";
$proto25["m_srcTableName"] = "analisa_subjek_psra_all";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "s2DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto27["m_sql"] = "s2DF";
$proto27["m_srcTableName"] = "analisa_subjek_psra_all";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto29["m_sql"] = "s2MQ";
$proto29["m_srcTableName"] = "analisa_subjek_psra_all";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto31["m_sql"] = "s2JD";
$proto31["m_srcTableName"] = "analisa_subjek_psra_all";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto33["m_sql"] = "s2JJ";
$proto33["m_srcTableName"] = "analisa_subjek_psra_all";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto35["m_sql"] = "s2MZ";
$proto35["m_srcTableName"] = "analisa_subjek_psra_all";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto37["m_sql"] = "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto37["m_srcTableName"] = "analisa_subjek_psra_all";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "s2calon";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto39["m_sql"] = "(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto39["m_srcTableName"] = "analisa_subjek_psra_all";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "s2lulus";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto41["m_sql"] = "1-(s2MQ+s2JD+s2JJ+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto41["m_srcTableName"] = "analisa_subjek_psra_all";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "s2gagal";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "s3TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto43["m_sql"] = "s3TH";
$proto43["m_srcTableName"] = "analisa_subjek_psra_all";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "s3DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto45["m_sql"] = "s3DF";
$proto45["m_srcTableName"] = "analisa_subjek_psra_all";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto47["m_sql"] = "s3MQ";
$proto47["m_srcTableName"] = "analisa_subjek_psra_all";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto49["m_sql"] = "s3JD";
$proto49["m_srcTableName"] = "analisa_subjek_psra_all";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto51["m_sql"] = "s3JJ";
$proto51["m_srcTableName"] = "analisa_subjek_psra_all";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto53["m_sql"] = "s3MZ";
$proto53["m_srcTableName"] = "analisa_subjek_psra_all";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto55["m_sql"] = "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto55["m_srcTableName"] = "analisa_subjek_psra_all";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "s3calon";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto57["m_sql"] = "(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto57["m_srcTableName"] = "analisa_subjek_psra_all";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "s3lulus";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto59["m_sql"] = "1-(s3MQ+s3JD+s3JJ+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto59["m_srcTableName"] = "analisa_subjek_psra_all";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "s3gagal";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "s4TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto61["m_sql"] = "s4TH";
$proto61["m_srcTableName"] = "analisa_subjek_psra_all";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "s4DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto63["m_sql"] = "s4DF";
$proto63["m_srcTableName"] = "analisa_subjek_psra_all";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto65["m_sql"] = "s4MQ";
$proto65["m_srcTableName"] = "analisa_subjek_psra_all";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto67["m_sql"] = "s4JD";
$proto67["m_srcTableName"] = "analisa_subjek_psra_all";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto69["m_sql"] = "s4JJ";
$proto69["m_srcTableName"] = "analisa_subjek_psra_all";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto71["m_sql"] = "s4MZ";
$proto71["m_srcTableName"] = "analisa_subjek_psra_all";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto73["m_sql"] = "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto73["m_srcTableName"] = "analisa_subjek_psra_all";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "s4calon";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto75["m_sql"] = "(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto75["m_srcTableName"] = "analisa_subjek_psra_all";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "s4lulus";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto77["m_sql"] = "1-(s4MQ+s4JD+s4JJ+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto77["m_srcTableName"] = "analisa_subjek_psra_all";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "s4gagal";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "s5TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto79["m_sql"] = "s5TH";
$proto79["m_srcTableName"] = "analisa_subjek_psra_all";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "s5DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto81["m_sql"] = "s5DF";
$proto81["m_srcTableName"] = "analisa_subjek_psra_all";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto83["m_sql"] = "s5MQ";
$proto83["m_srcTableName"] = "analisa_subjek_psra_all";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto85["m_sql"] = "s5JD";
$proto85["m_srcTableName"] = "analisa_subjek_psra_all";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto87["m_sql"] = "s5JJ";
$proto87["m_srcTableName"] = "analisa_subjek_psra_all";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto89["m_sql"] = "s5MZ";
$proto89["m_srcTableName"] = "analisa_subjek_psra_all";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto91["m_sql"] = "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto91["m_srcTableName"] = "analisa_subjek_psra_all";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "s5calon";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto93["m_sql"] = "(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto93["m_srcTableName"] = "analisa_subjek_psra_all";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "s5lulus";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto95["m_sql"] = "1-(s5MQ+s5JD+s5JJ+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto95["m_srcTableName"] = "analisa_subjek_psra_all";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "s5gagal";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "s6TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto97["m_sql"] = "s6TH";
$proto97["m_srcTableName"] = "analisa_subjek_psra_all";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "s6DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto99["m_sql"] = "s6DF";
$proto99["m_srcTableName"] = "analisa_subjek_psra_all";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "s6MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto101["m_sql"] = "s6MQ";
$proto101["m_srcTableName"] = "analisa_subjek_psra_all";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "s6JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto103["m_sql"] = "s6JD";
$proto103["m_srcTableName"] = "analisa_subjek_psra_all";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "s6JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto105["m_sql"] = "s6JJ";
$proto105["m_srcTableName"] = "analisa_subjek_psra_all";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "s6MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto107["m_sql"] = "s6MZ";
$proto107["m_srcTableName"] = "analisa_subjek_psra_all";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s6DF+s6MQ+s6JD+s6JJ+s6MZ)"
));

$proto109["m_sql"] = "(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";
$proto109["m_srcTableName"] = "analisa_subjek_psra_all";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "s6calon";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)"
));

$proto111["m_sql"] = "(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";
$proto111["m_srcTableName"] = "analisa_subjek_psra_all";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "s6lulus";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)"
));

$proto113["m_sql"] = "1-(s6MQ+s6JD+s6JJ+s6MZ)/(s6DF+s6MQ+s6JD+s6JJ+s6MZ)";
$proto113["m_srcTableName"] = "analisa_subjek_psra_all";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "s6gagal";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto115=array();
$proto115["m_link"] = "SQLL_MAIN";
			$proto116=array();
$proto116["m_strHead"] = "  		SELECT";
$proto116["m_strFieldList"] = "eYear,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL)) AS s6TH,  COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL)) AS s6DF,  COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL)) AS s6MQ,  COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL)) AS s6JD,  COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL)) AS s6JJ,  COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL)) AS s6MZ";
$proto116["m_strFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$proto116["m_strWhere"] = "";
$proto116["m_strOrderBy"] = "ORDER BY eYear DESC";
$proto116["m_strTail"] = "";
			$proto116["cipherer"] = null;
$proto117=array();
$proto117["m_sql"] = "";
$proto117["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto117["m_column"]=$obj;
$proto117["m_contained"] = array();
$proto117["m_strCase"] = "";
$proto117["m_havingmode"] = false;
$proto117["m_inBrackets"] = false;
$proto117["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto117);

$proto116["m_where"] = $obj;
$proto119=array();
$proto119["m_sql"] = "";
$proto119["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto119["m_column"]=$obj;
$proto119["m_contained"] = array();
$proto119["m_strCase"] = "";
$proto119["m_havingmode"] = false;
$proto119["m_inBrackets"] = false;
$proto119["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto119);

$proto116["m_having"] = $obj;
$proto116["m_fieldlist"] = array();
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto121["m_sql"] = "eYear";
$proto121["m_srcTableName"] = "analisa_subjek_psra_all";
$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto116["m_fieldlist"][]=$obj;
						$proto123=array();
			$proto124=array();
$proto124["m_functiontype"] = "SQLF_COUNT";
$proto124["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto124["m_arguments"][]=$obj;
$proto124["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto124);

$proto123["m_sql"] = "COUNT(sid)";
$proto123["m_srcTableName"] = "analisa_subjek_psra_all";
$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "totalCalon";
$obj = new SQLFieldListItem($proto123);

$proto116["m_fieldlist"][]=$obj;
						$proto126=array();
			$proto127=array();
$proto127["m_functiontype"] = "SQLF_COUNT";
$proto127["m_arguments"] = array();
						$proto128=array();
$proto128["m_functiontype"] = "SQLF_CUSTOM";
$proto128["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1 LIKE '%TH%'"
));

$proto128["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto128["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto128["m_arguments"][]=$obj;
$proto128["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto128);

$proto127["m_arguments"][]=$obj;
$proto127["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto127);

$proto126["m_sql"] = "COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL))";
$proto126["m_srcTableName"] = "analisa_subjek_psra_all";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "s1TH";
$obj = new SQLFieldListItem($proto126);

$proto116["m_fieldlist"][]=$obj;
						$proto132=array();
			$proto133=array();
$proto133["m_functiontype"] = "SQLF_COUNT";
$proto133["m_arguments"] = array();
						$proto134=array();
$proto134["m_functiontype"] = "SQLF_CUSTOM";
$proto134["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40"
));

$proto134["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto134["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto134["m_arguments"][]=$obj;
$proto134["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto134);

$proto133["m_arguments"][]=$obj;
$proto133["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto133);

$proto132["m_sql"] = "COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL))";
$proto132["m_srcTableName"] = "analisa_subjek_psra_all";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "s1DF";
$obj = new SQLFieldListItem($proto132);

$proto116["m_fieldlist"][]=$obj;
						$proto138=array();
			$proto139=array();
$proto139["m_functiontype"] = "SQLF_COUNT";
$proto139["m_arguments"] = array();
						$proto140=array();
$proto140["m_functiontype"] = "SQLF_CUSTOM";
$proto140["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=40 AND exam_marking.s1<60"
));

$proto140["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto140["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto140["m_arguments"][]=$obj;
$proto140["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto140);

$proto139["m_arguments"][]=$obj;
$proto139["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto139);

$proto138["m_sql"] = "COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL))";
$proto138["m_srcTableName"] = "analisa_subjek_psra_all";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "s1MQ";
$obj = new SQLFieldListItem($proto138);

$proto116["m_fieldlist"][]=$obj;
						$proto144=array();
			$proto145=array();
$proto145["m_functiontype"] = "SQLF_COUNT";
$proto145["m_arguments"] = array();
						$proto146=array();
$proto146["m_functiontype"] = "SQLF_CUSTOM";
$proto146["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=60 AND exam_marking.s1<75"
));

$proto146["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto146["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto146["m_arguments"][]=$obj;
$proto146["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto146);

$proto145["m_arguments"][]=$obj;
$proto145["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto145);

$proto144["m_sql"] = "COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL))";
$proto144["m_srcTableName"] = "analisa_subjek_psra_all";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "s1JD";
$obj = new SQLFieldListItem($proto144);

$proto116["m_fieldlist"][]=$obj;
						$proto150=array();
			$proto151=array();
$proto151["m_functiontype"] = "SQLF_COUNT";
$proto151["m_arguments"] = array();
						$proto152=array();
$proto152["m_functiontype"] = "SQLF_CUSTOM";
$proto152["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=75 AND exam_marking.s1<90"
));

$proto152["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto152["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto152["m_arguments"][]=$obj;
$proto152["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto152);

$proto151["m_arguments"][]=$obj;
$proto151["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto151);

$proto150["m_sql"] = "COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL))";
$proto150["m_srcTableName"] = "analisa_subjek_psra_all";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "s1JJ";
$obj = new SQLFieldListItem($proto150);

$proto116["m_fieldlist"][]=$obj;
						$proto156=array();
			$proto157=array();
$proto157["m_functiontype"] = "SQLF_COUNT";
$proto157["m_arguments"] = array();
						$proto158=array();
$proto158["m_functiontype"] = "SQLF_CUSTOM";
$proto158["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=90"
));

$proto158["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto158["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto158["m_arguments"][]=$obj;
$proto158["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto158);

$proto157["m_arguments"][]=$obj;
$proto157["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto157);

$proto156["m_sql"] = "COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL))";
$proto156["m_srcTableName"] = "analisa_subjek_psra_all";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "s1MZ";
$obj = new SQLFieldListItem($proto156);

$proto116["m_fieldlist"][]=$obj;
						$proto162=array();
			$proto163=array();
$proto163["m_functiontype"] = "SQLF_COUNT";
$proto163["m_arguments"] = array();
						$proto164=array();
$proto164["m_functiontype"] = "SQLF_CUSTOM";
$proto164["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2 LIKE '%TH%'"
));

$proto164["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto164["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto164["m_arguments"][]=$obj;
$proto164["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto164);

$proto163["m_arguments"][]=$obj;
$proto163["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto163);

$proto162["m_sql"] = "COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL))";
$proto162["m_srcTableName"] = "analisa_subjek_psra_all";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "s2TH";
$obj = new SQLFieldListItem($proto162);

$proto116["m_fieldlist"][]=$obj;
						$proto168=array();
			$proto169=array();
$proto169["m_functiontype"] = "SQLF_COUNT";
$proto169["m_arguments"] = array();
						$proto170=array();
$proto170["m_functiontype"] = "SQLF_CUSTOM";
$proto170["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40"
));

$proto170["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto170["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto170["m_arguments"][]=$obj;
$proto170["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto170);

$proto169["m_arguments"][]=$obj;
$proto169["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto169);

$proto168["m_sql"] = "COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL))";
$proto168["m_srcTableName"] = "analisa_subjek_psra_all";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "s2DF";
$obj = new SQLFieldListItem($proto168);

$proto116["m_fieldlist"][]=$obj;
						$proto174=array();
			$proto175=array();
$proto175["m_functiontype"] = "SQLF_COUNT";
$proto175["m_arguments"] = array();
						$proto176=array();
$proto176["m_functiontype"] = "SQLF_CUSTOM";
$proto176["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=40 AND exam_marking.s2<60"
));

$proto176["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto176["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto176["m_arguments"][]=$obj;
$proto176["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto176);

$proto175["m_arguments"][]=$obj;
$proto175["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto175);

$proto174["m_sql"] = "COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL))";
$proto174["m_srcTableName"] = "analisa_subjek_psra_all";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "s2MQ";
$obj = new SQLFieldListItem($proto174);

$proto116["m_fieldlist"][]=$obj;
						$proto180=array();
			$proto181=array();
$proto181["m_functiontype"] = "SQLF_COUNT";
$proto181["m_arguments"] = array();
						$proto182=array();
$proto182["m_functiontype"] = "SQLF_CUSTOM";
$proto182["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=60 AND exam_marking.s2<75"
));

$proto182["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto182["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto182["m_arguments"][]=$obj;
$proto182["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto182);

$proto181["m_arguments"][]=$obj;
$proto181["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto181);

$proto180["m_sql"] = "COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL))";
$proto180["m_srcTableName"] = "analisa_subjek_psra_all";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "s2JD";
$obj = new SQLFieldListItem($proto180);

$proto116["m_fieldlist"][]=$obj;
						$proto186=array();
			$proto187=array();
$proto187["m_functiontype"] = "SQLF_COUNT";
$proto187["m_arguments"] = array();
						$proto188=array();
$proto188["m_functiontype"] = "SQLF_CUSTOM";
$proto188["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=75 AND exam_marking.s2<90"
));

$proto188["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto188["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto188["m_arguments"][]=$obj;
$proto188["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto188);

$proto187["m_arguments"][]=$obj;
$proto187["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto187);

$proto186["m_sql"] = "COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL))";
$proto186["m_srcTableName"] = "analisa_subjek_psra_all";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "s2JJ";
$obj = new SQLFieldListItem($proto186);

$proto116["m_fieldlist"][]=$obj;
						$proto192=array();
			$proto193=array();
$proto193["m_functiontype"] = "SQLF_COUNT";
$proto193["m_arguments"] = array();
						$proto194=array();
$proto194["m_functiontype"] = "SQLF_CUSTOM";
$proto194["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=90"
));

$proto194["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto194["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto194["m_arguments"][]=$obj;
$proto194["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto194);

$proto193["m_arguments"][]=$obj;
$proto193["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto193);

$proto192["m_sql"] = "COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL))";
$proto192["m_srcTableName"] = "analisa_subjek_psra_all";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "s2MZ";
$obj = new SQLFieldListItem($proto192);

$proto116["m_fieldlist"][]=$obj;
						$proto198=array();
			$proto199=array();
$proto199["m_functiontype"] = "SQLF_COUNT";
$proto199["m_arguments"] = array();
						$proto200=array();
$proto200["m_functiontype"] = "SQLF_CUSTOM";
$proto200["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3 LIKE '%TH%'"
));

$proto200["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto200["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto200["m_arguments"][]=$obj;
$proto200["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto200);

$proto199["m_arguments"][]=$obj;
$proto199["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto199);

$proto198["m_sql"] = "COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL))";
$proto198["m_srcTableName"] = "analisa_subjek_psra_all";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "s3TH";
$obj = new SQLFieldListItem($proto198);

$proto116["m_fieldlist"][]=$obj;
						$proto204=array();
			$proto205=array();
$proto205["m_functiontype"] = "SQLF_COUNT";
$proto205["m_arguments"] = array();
						$proto206=array();
$proto206["m_functiontype"] = "SQLF_CUSTOM";
$proto206["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40"
));

$proto206["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto206["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto206["m_arguments"][]=$obj;
$proto206["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto206);

$proto205["m_arguments"][]=$obj;
$proto205["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto205);

$proto204["m_sql"] = "COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL))";
$proto204["m_srcTableName"] = "analisa_subjek_psra_all";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "s3DF";
$obj = new SQLFieldListItem($proto204);

$proto116["m_fieldlist"][]=$obj;
						$proto210=array();
			$proto211=array();
$proto211["m_functiontype"] = "SQLF_COUNT";
$proto211["m_arguments"] = array();
						$proto212=array();
$proto212["m_functiontype"] = "SQLF_CUSTOM";
$proto212["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=40 AND exam_marking.s3<60"
));

$proto212["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto212["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto212["m_arguments"][]=$obj;
$proto212["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto212);

$proto211["m_arguments"][]=$obj;
$proto211["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto211);

$proto210["m_sql"] = "COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL))";
$proto210["m_srcTableName"] = "analisa_subjek_psra_all";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "s3MQ";
$obj = new SQLFieldListItem($proto210);

$proto116["m_fieldlist"][]=$obj;
						$proto216=array();
			$proto217=array();
$proto217["m_functiontype"] = "SQLF_COUNT";
$proto217["m_arguments"] = array();
						$proto218=array();
$proto218["m_functiontype"] = "SQLF_CUSTOM";
$proto218["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=60 AND exam_marking.s3<75"
));

$proto218["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto218["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto218["m_arguments"][]=$obj;
$proto218["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto218);

$proto217["m_arguments"][]=$obj;
$proto217["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto217);

$proto216["m_sql"] = "COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL))";
$proto216["m_srcTableName"] = "analisa_subjek_psra_all";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "s3JD";
$obj = new SQLFieldListItem($proto216);

$proto116["m_fieldlist"][]=$obj;
						$proto222=array();
			$proto223=array();
$proto223["m_functiontype"] = "SQLF_COUNT";
$proto223["m_arguments"] = array();
						$proto224=array();
$proto224["m_functiontype"] = "SQLF_CUSTOM";
$proto224["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=75 AND exam_marking.s3<90"
));

$proto224["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto224["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto224["m_arguments"][]=$obj;
$proto224["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto224);

$proto223["m_arguments"][]=$obj;
$proto223["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto223);

$proto222["m_sql"] = "COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL))";
$proto222["m_srcTableName"] = "analisa_subjek_psra_all";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "s3JJ";
$obj = new SQLFieldListItem($proto222);

$proto116["m_fieldlist"][]=$obj;
						$proto228=array();
			$proto229=array();
$proto229["m_functiontype"] = "SQLF_COUNT";
$proto229["m_arguments"] = array();
						$proto230=array();
$proto230["m_functiontype"] = "SQLF_CUSTOM";
$proto230["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=90"
));

$proto230["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto230["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto230["m_arguments"][]=$obj;
$proto230["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto230);

$proto229["m_arguments"][]=$obj;
$proto229["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto229);

$proto228["m_sql"] = "COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL))";
$proto228["m_srcTableName"] = "analisa_subjek_psra_all";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "s3MZ";
$obj = new SQLFieldListItem($proto228);

$proto116["m_fieldlist"][]=$obj;
						$proto234=array();
			$proto235=array();
$proto235["m_functiontype"] = "SQLF_COUNT";
$proto235["m_arguments"] = array();
						$proto236=array();
$proto236["m_functiontype"] = "SQLF_CUSTOM";
$proto236["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4 LIKE '%TH%'"
));

$proto236["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto236["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto236["m_arguments"][]=$obj;
$proto236["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto236);

$proto235["m_arguments"][]=$obj;
$proto235["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto235);

$proto234["m_sql"] = "COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL))";
$proto234["m_srcTableName"] = "analisa_subjek_psra_all";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "s4TH";
$obj = new SQLFieldListItem($proto234);

$proto116["m_fieldlist"][]=$obj;
						$proto240=array();
			$proto241=array();
$proto241["m_functiontype"] = "SQLF_COUNT";
$proto241["m_arguments"] = array();
						$proto242=array();
$proto242["m_functiontype"] = "SQLF_CUSTOM";
$proto242["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40"
));

$proto242["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto242["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto242["m_arguments"][]=$obj;
$proto242["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto242);

$proto241["m_arguments"][]=$obj;
$proto241["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto241);

$proto240["m_sql"] = "COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL))";
$proto240["m_srcTableName"] = "analisa_subjek_psra_all";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "s4DF";
$obj = new SQLFieldListItem($proto240);

$proto116["m_fieldlist"][]=$obj;
						$proto246=array();
			$proto247=array();
$proto247["m_functiontype"] = "SQLF_COUNT";
$proto247["m_arguments"] = array();
						$proto248=array();
$proto248["m_functiontype"] = "SQLF_CUSTOM";
$proto248["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=40 AND exam_marking.s4<60"
));

$proto248["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto248["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto248["m_arguments"][]=$obj;
$proto248["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto248);

$proto247["m_arguments"][]=$obj;
$proto247["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto247);

$proto246["m_sql"] = "COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL))";
$proto246["m_srcTableName"] = "analisa_subjek_psra_all";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "s4MQ";
$obj = new SQLFieldListItem($proto246);

$proto116["m_fieldlist"][]=$obj;
						$proto252=array();
			$proto253=array();
$proto253["m_functiontype"] = "SQLF_COUNT";
$proto253["m_arguments"] = array();
						$proto254=array();
$proto254["m_functiontype"] = "SQLF_CUSTOM";
$proto254["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=60 AND exam_marking.s4<75"
));

$proto254["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto254["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto254["m_arguments"][]=$obj;
$proto254["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto254);

$proto253["m_arguments"][]=$obj;
$proto253["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto253);

$proto252["m_sql"] = "COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL))";
$proto252["m_srcTableName"] = "analisa_subjek_psra_all";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "s4JD";
$obj = new SQLFieldListItem($proto252);

$proto116["m_fieldlist"][]=$obj;
						$proto258=array();
			$proto259=array();
$proto259["m_functiontype"] = "SQLF_COUNT";
$proto259["m_arguments"] = array();
						$proto260=array();
$proto260["m_functiontype"] = "SQLF_CUSTOM";
$proto260["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=75 AND exam_marking.s4<90"
));

$proto260["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto260["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto260["m_arguments"][]=$obj;
$proto260["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto260);

$proto259["m_arguments"][]=$obj;
$proto259["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto259);

$proto258["m_sql"] = "COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL))";
$proto258["m_srcTableName"] = "analisa_subjek_psra_all";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "s4JJ";
$obj = new SQLFieldListItem($proto258);

$proto116["m_fieldlist"][]=$obj;
						$proto264=array();
			$proto265=array();
$proto265["m_functiontype"] = "SQLF_COUNT";
$proto265["m_arguments"] = array();
						$proto266=array();
$proto266["m_functiontype"] = "SQLF_CUSTOM";
$proto266["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=90 AND exam_marking.s4<=100"
));

$proto266["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto266["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto266["m_arguments"][]=$obj;
$proto266["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto266);

$proto265["m_arguments"][]=$obj;
$proto265["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto265);

$proto264["m_sql"] = "COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL))";
$proto264["m_srcTableName"] = "analisa_subjek_psra_all";
$proto264["m_expr"]=$obj;
$proto264["m_alias"] = "s4MZ";
$obj = new SQLFieldListItem($proto264);

$proto116["m_fieldlist"][]=$obj;
						$proto270=array();
			$proto271=array();
$proto271["m_functiontype"] = "SQLF_COUNT";
$proto271["m_arguments"] = array();
						$proto272=array();
$proto272["m_functiontype"] = "SQLF_CUSTOM";
$proto272["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5 LIKE '%TH%'"
));

$proto272["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto272["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto272["m_arguments"][]=$obj;
$proto272["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto272);

$proto271["m_arguments"][]=$obj;
$proto271["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto271);

$proto270["m_sql"] = "COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL))";
$proto270["m_srcTableName"] = "analisa_subjek_psra_all";
$proto270["m_expr"]=$obj;
$proto270["m_alias"] = "s5TH";
$obj = new SQLFieldListItem($proto270);

$proto116["m_fieldlist"][]=$obj;
						$proto276=array();
			$proto277=array();
$proto277["m_functiontype"] = "SQLF_COUNT";
$proto277["m_arguments"] = array();
						$proto278=array();
$proto278["m_functiontype"] = "SQLF_CUSTOM";
$proto278["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40"
));

$proto278["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto278["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto278["m_arguments"][]=$obj;
$proto278["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto278);

$proto277["m_arguments"][]=$obj;
$proto277["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto277);

$proto276["m_sql"] = "COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL))";
$proto276["m_srcTableName"] = "analisa_subjek_psra_all";
$proto276["m_expr"]=$obj;
$proto276["m_alias"] = "s5DF";
$obj = new SQLFieldListItem($proto276);

$proto116["m_fieldlist"][]=$obj;
						$proto282=array();
			$proto283=array();
$proto283["m_functiontype"] = "SQLF_COUNT";
$proto283["m_arguments"] = array();
						$proto284=array();
$proto284["m_functiontype"] = "SQLF_CUSTOM";
$proto284["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=40 AND exam_marking.s5<60"
));

$proto284["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto284["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto284["m_arguments"][]=$obj;
$proto284["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto284);

$proto283["m_arguments"][]=$obj;
$proto283["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto283);

$proto282["m_sql"] = "COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL))";
$proto282["m_srcTableName"] = "analisa_subjek_psra_all";
$proto282["m_expr"]=$obj;
$proto282["m_alias"] = "s5MQ";
$obj = new SQLFieldListItem($proto282);

$proto116["m_fieldlist"][]=$obj;
						$proto288=array();
			$proto289=array();
$proto289["m_functiontype"] = "SQLF_COUNT";
$proto289["m_arguments"] = array();
						$proto290=array();
$proto290["m_functiontype"] = "SQLF_CUSTOM";
$proto290["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=60 AND exam_marking.s5<75"
));

$proto290["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto290["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto290["m_arguments"][]=$obj;
$proto290["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto290);

$proto289["m_arguments"][]=$obj;
$proto289["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto289);

$proto288["m_sql"] = "COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL))";
$proto288["m_srcTableName"] = "analisa_subjek_psra_all";
$proto288["m_expr"]=$obj;
$proto288["m_alias"] = "s5JD";
$obj = new SQLFieldListItem($proto288);

$proto116["m_fieldlist"][]=$obj;
						$proto294=array();
			$proto295=array();
$proto295["m_functiontype"] = "SQLF_COUNT";
$proto295["m_arguments"] = array();
						$proto296=array();
$proto296["m_functiontype"] = "SQLF_CUSTOM";
$proto296["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=75 AND exam_marking.s5<90"
));

$proto296["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto296["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto296["m_arguments"][]=$obj;
$proto296["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto296);

$proto295["m_arguments"][]=$obj;
$proto295["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto295);

$proto294["m_sql"] = "COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL))";
$proto294["m_srcTableName"] = "analisa_subjek_psra_all";
$proto294["m_expr"]=$obj;
$proto294["m_alias"] = "s5JJ";
$obj = new SQLFieldListItem($proto294);

$proto116["m_fieldlist"][]=$obj;
						$proto300=array();
			$proto301=array();
$proto301["m_functiontype"] = "SQLF_COUNT";
$proto301["m_arguments"] = array();
						$proto302=array();
$proto302["m_functiontype"] = "SQLF_CUSTOM";
$proto302["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=90"
));

$proto302["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto302["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto302["m_arguments"][]=$obj;
$proto302["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto302);

$proto301["m_arguments"][]=$obj;
$proto301["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto301);

$proto300["m_sql"] = "COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL))";
$proto300["m_srcTableName"] = "analisa_subjek_psra_all";
$proto300["m_expr"]=$obj;
$proto300["m_alias"] = "s5MZ";
$obj = new SQLFieldListItem($proto300);

$proto116["m_fieldlist"][]=$obj;
						$proto306=array();
			$proto307=array();
$proto307["m_functiontype"] = "SQLF_COUNT";
$proto307["m_arguments"] = array();
						$proto308=array();
$proto308["m_functiontype"] = "SQLF_CUSTOM";
$proto308["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6 LIKE '%TH%'"
));

$proto308["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto308["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto308["m_arguments"][]=$obj;
$proto308["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto308);

$proto307["m_arguments"][]=$obj;
$proto307["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto307);

$proto306["m_sql"] = "COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL))";
$proto306["m_srcTableName"] = "analisa_subjek_psra_all";
$proto306["m_expr"]=$obj;
$proto306["m_alias"] = "s6TH";
$obj = new SQLFieldListItem($proto306);

$proto116["m_fieldlist"][]=$obj;
						$proto312=array();
			$proto313=array();
$proto313["m_functiontype"] = "SQLF_COUNT";
$proto313["m_arguments"] = array();
						$proto314=array();
$proto314["m_functiontype"] = "SQLF_CUSTOM";
$proto314["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40"
));

$proto314["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto314["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto314["m_arguments"][]=$obj;
$proto314["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto314);

$proto313["m_arguments"][]=$obj;
$proto313["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto313);

$proto312["m_sql"] = "COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL))";
$proto312["m_srcTableName"] = "analisa_subjek_psra_all";
$proto312["m_expr"]=$obj;
$proto312["m_alias"] = "s6DF";
$obj = new SQLFieldListItem($proto312);

$proto116["m_fieldlist"][]=$obj;
						$proto318=array();
			$proto319=array();
$proto319["m_functiontype"] = "SQLF_COUNT";
$proto319["m_arguments"] = array();
						$proto320=array();
$proto320["m_functiontype"] = "SQLF_CUSTOM";
$proto320["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6>=40 AND exam_marking.s6<60"
));

$proto320["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto320["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto320["m_arguments"][]=$obj;
$proto320["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto320);

$proto319["m_arguments"][]=$obj;
$proto319["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto319);

$proto318["m_sql"] = "COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL))";
$proto318["m_srcTableName"] = "analisa_subjek_psra_all";
$proto318["m_expr"]=$obj;
$proto318["m_alias"] = "s6MQ";
$obj = new SQLFieldListItem($proto318);

$proto116["m_fieldlist"][]=$obj;
						$proto324=array();
			$proto325=array();
$proto325["m_functiontype"] = "SQLF_COUNT";
$proto325["m_arguments"] = array();
						$proto326=array();
$proto326["m_functiontype"] = "SQLF_CUSTOM";
$proto326["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6>=60 AND exam_marking.s6<75"
));

$proto326["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto326["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto326["m_arguments"][]=$obj;
$proto326["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto326);

$proto325["m_arguments"][]=$obj;
$proto325["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto325);

$proto324["m_sql"] = "COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL))";
$proto324["m_srcTableName"] = "analisa_subjek_psra_all";
$proto324["m_expr"]=$obj;
$proto324["m_alias"] = "s6JD";
$obj = new SQLFieldListItem($proto324);

$proto116["m_fieldlist"][]=$obj;
						$proto330=array();
			$proto331=array();
$proto331["m_functiontype"] = "SQLF_COUNT";
$proto331["m_arguments"] = array();
						$proto332=array();
$proto332["m_functiontype"] = "SQLF_CUSTOM";
$proto332["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6>=75 AND exam_marking.s6<90"
));

$proto332["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto332["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto332["m_arguments"][]=$obj;
$proto332["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto332);

$proto331["m_arguments"][]=$obj;
$proto331["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto331);

$proto330["m_sql"] = "COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL))";
$proto330["m_srcTableName"] = "analisa_subjek_psra_all";
$proto330["m_expr"]=$obj;
$proto330["m_alias"] = "s6JJ";
$obj = new SQLFieldListItem($proto330);

$proto116["m_fieldlist"][]=$obj;
						$proto336=array();
			$proto337=array();
$proto337["m_functiontype"] = "SQLF_COUNT";
$proto337["m_arguments"] = array();
						$proto338=array();
$proto338["m_functiontype"] = "SQLF_CUSTOM";
$proto338["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6>=90"
));

$proto338["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto338["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto338["m_arguments"][]=$obj;
$proto338["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto338);

$proto337["m_arguments"][]=$obj;
$proto337["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto337);

$proto336["m_sql"] = "COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL))";
$proto336["m_srcTableName"] = "analisa_subjek_psra_all";
$proto336["m_expr"]=$obj;
$proto336["m_alias"] = "s6MZ";
$obj = new SQLFieldListItem($proto336);

$proto116["m_fieldlist"][]=$obj;
$proto116["m_fromlist"] = array();
												$proto342=array();
$proto342["m_link"] = "SQLL_MAIN";
			$proto343=array();
$proto343["m_strName"] = "exam_marking";
$proto343["m_srcTableName"] = "analisa_subjek_psra_all";
$proto343["m_columns"] = array();
$proto343["m_columns"][] = "sid";
$proto343["m_columns"][] = "name";
$proto343["m_columns"][] = "gender";
$proto343["m_columns"][] = "birthdate";
$proto343["m_columns"][] = "birthCert";
$proto343["m_columns"][] = "nationality";
$proto343["m_columns"][] = "sCode";
$proto343["m_columns"][] = "eNo";
$proto343["m_columns"][] = "eYear";
$proto343["m_columns"][] = "eType";
$proto343["m_columns"][] = "s1";
$proto343["m_columns"][] = "s2";
$proto343["m_columns"][] = "s3";
$proto343["m_columns"][] = "s4";
$proto343["m_columns"][] = "s5";
$proto343["m_columns"][] = "s6";
$proto343["m_columns"][] = "s7";
$obj = new SQLTable($proto343);

$proto342["m_table"] = $obj;
$proto342["m_sql"] = "exam_marking";
$proto342["m_alias"] = "";
$proto342["m_srcTableName"] = "analisa_subjek_psra_all";
$proto344=array();
$proto344["m_sql"] = "";
$proto344["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto344["m_column"]=$obj;
$proto344["m_contained"] = array();
$proto344["m_strCase"] = "";
$proto344["m_havingmode"] = false;
$proto344["m_inBrackets"] = false;
$proto344["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto344);

$proto342["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto342);

$proto116["m_fromlist"][]=$obj;
												$proto346=array();
$proto346["m_link"] = "SQLL_LEFTJOIN";
			$proto347=array();
$proto347["m_strName"] = "school";
$proto347["m_srcTableName"] = "analisa_subjek_psra_all";
$proto347["m_columns"] = array();
$proto347["m_columns"][] = "sno";
$proto347["m_columns"][] = "sName";
$proto347["m_columns"][] = "sCenter";
$proto347["m_columns"][] = "sCode";
$proto347["m_columns"][] = "sZone";
$proto347["m_columns"][] = "sType";
$obj = new SQLTable($proto347);

$proto346["m_table"] = $obj;
$proto346["m_sql"] = "LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$proto346["m_alias"] = "";
$proto346["m_srcTableName"] = "analisa_subjek_psra_all";
$proto348=array();
$proto348["m_sql"] = "exam_marking.sCode = school.sCode";
$proto348["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto348["m_column"]=$obj;
$proto348["m_contained"] = array();
$proto348["m_strCase"] = "= school.sCode";
$proto348["m_havingmode"] = false;
$proto348["m_inBrackets"] = false;
$proto348["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto348);

$proto346["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto346);

$proto116["m_fromlist"][]=$obj;
$proto116["m_groupby"] = array();
												$proto350=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto350["m_column"]=$obj;
$obj = new SQLGroupByItem($proto350);

$proto116["m_groupby"][]=$obj;
$proto116["m_orderby"] = array();
												$proto352=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_subjek_psra_all"
));

$proto352["m_column"]=$obj;
$proto352["m_bAsc"] = 0;
$proto352["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto352);

$proto116["m_orderby"][]=$obj;					
$proto116["m_srcTableName"]="analisa_subjek_psra_all";		
$obj = new SQLQuery($proto116);

$proto115["m_table"] = $obj;
$proto115["m_sql"] = "(  		SELECT  eYear,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1 LIKE '%TH%', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1 NOT LIKE '%TH%' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2 LIKE '%TH%', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2 NOT LIKE '%TH%' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3 LIKE '%TH%', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3 NOT LIKE '%TH%' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4 LIKE '%TH%', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4 NOT LIKE '%TH%' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90 AND exam_marking.s4<=100, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5 LIKE '%TH%', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5 NOT LIKE '%TH%'AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  COUNT(if(exam_marking.s6 LIKE '%TH%', exam_marking.sid, NULL)) AS s6TH,  COUNT(if(exam_marking.s6 NOT LIKE '%TH%' AND exam_marking.s6<40, exam_marking.sid, NULL)) AS s6DF,  COUNT(if(exam_marking.s6>=40 AND exam_marking.s6<60, exam_marking.sid, NULL)) AS s6MQ,  COUNT(if(exam_marking.s6>=60 AND exam_marking.s6<75, exam_marking.sid, NULL)) AS s6JD,  COUNT(if(exam_marking.s6>=75 AND exam_marking.s6<90, exam_marking.sid, NULL)) AS s6JJ,  COUNT(if(exam_marking.s6>=90, exam_marking.sid, NULL)) AS s6MZ  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode  GROUP BY eYear  ORDER BY eYear DESC  ) AS Sub1";
$proto115["m_alias"] = "Sub1";
$proto115["m_srcTableName"] = "analisa_subjek_psra_all";
$proto354=array();
$proto354["m_sql"] = "";
$proto354["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto354["m_column"]=$obj;
$proto354["m_contained"] = array();
$proto354["m_strCase"] = "";
$proto354["m_havingmode"] = false;
$proto354["m_inBrackets"] = false;
$proto354["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto354);

$proto115["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto115);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="analisa_subjek_psra_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analisa_subjek_psra_all = createSqlQuery_analisa_subjek_psra_all();



																																																							

$tdataanalisa_subjek_psra_all[".sqlquery"] = $queryData_analisa_subjek_psra_all;

include_once(getabspath("include/analisa_subjek_psra_all_events.php"));
$tableEvents["analisa_subjek_psra_all"] = new eventclass_analisa_subjek_psra_all;
$tdataanalisa_subjek_psra_all[".hasEvents"] = true;

?>