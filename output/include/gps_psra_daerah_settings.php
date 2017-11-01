<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagps_psra_daerah = array();
	$tdatagps_psra_daerah[".truncateText"] = true;
	$tdatagps_psra_daerah[".NumberOfChars"] = 80;
	$tdatagps_psra_daerah[".ShortName"] = "gps_psra_daerah";
	$tdatagps_psra_daerah[".OwnerID"] = "";
	$tdatagps_psra_daerah[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsgps_psra_daerah = array();
$fieldToolTipsgps_psra_daerah = array();
$pageTitlesgps_psra_daerah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgps_psra_daerah["English"] = array();
	$fieldToolTipsgps_psra_daerah["English"] = array();
	$pageTitlesgps_psra_daerah["English"] = array();
	$fieldLabelsgps_psra_daerah["English"]["eYear"] = "Tahun";
	$fieldToolTipsgps_psra_daerah["English"]["eYear"] = "";
	$fieldLabelsgps_psra_daerah["English"]["sZone"] = "Zon";
	$fieldToolTipsgps_psra_daerah["English"]["sZone"] = "";
	$fieldLabelsgps_psra_daerah["English"]["GPSs1"] = "AS";
	$fieldToolTipsgps_psra_daerah["English"]["GPSs1"] = "";
	$fieldLabelsgps_psra_daerah["English"]["GPSs2"] = "BA";
	$fieldToolTipsgps_psra_daerah["English"]["GPSs2"] = "";
	$fieldLabelsgps_psra_daerah["English"]["GPSs3"] = "JIK";
	$fieldToolTipsgps_psra_daerah["English"]["GPSs3"] = "";
	$fieldLabelsgps_psra_daerah["English"]["GPSs4"] = "TF";
	$fieldToolTipsgps_psra_daerah["English"]["GPSs4"] = "";
	$fieldLabelsgps_psra_daerah["English"]["GPSs5"] = "TJ";
	$fieldToolTipsgps_psra_daerah["English"]["GPSs5"] = "";
	$fieldLabelsgps_psra_daerah["English"]["GPSchool"] = "GPS";
	$fieldToolTipsgps_psra_daerah["English"]["GPSchool"] = "";
	$fieldLabelsgps_psra_daerah["English"]["skor"] = "Skor";
	$fieldToolTipsgps_psra_daerah["English"]["skor"] = "";
	if (count($fieldToolTipsgps_psra_daerah["English"]))
		$tdatagps_psra_daerah[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgps_psra_daerah[""] = array();
	$fieldToolTipsgps_psra_daerah[""] = array();
	$pageTitlesgps_psra_daerah[""] = array();
	if (count($fieldToolTipsgps_psra_daerah[""]))
		$tdatagps_psra_daerah[".isUseToolTips"] = true;
}


	$tdatagps_psra_daerah[".NCSearch"] = true;



$tdatagps_psra_daerah[".shortTableName"] = "gps_psra_daerah";
$tdatagps_psra_daerah[".nSecOptions"] = 0;
$tdatagps_psra_daerah[".recsPerRowList"] = 1;
$tdatagps_psra_daerah[".recsPerRowPrint"] = 1;
$tdatagps_psra_daerah[".mainTableOwnerID"] = "";
$tdatagps_psra_daerah[".moveNext"] = 1;
$tdatagps_psra_daerah[".entityType"] = 1;

$tdatagps_psra_daerah[".strOriginalTableName"] = "exam_marking";




$tdatagps_psra_daerah[".showAddInPopup"] = false;

$tdatagps_psra_daerah[".showEditInPopup"] = false;

$tdatagps_psra_daerah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagps_psra_daerah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagps_psra_daerah[".fieldsForRegister"] = array();

$tdatagps_psra_daerah[".listAjax"] = false;

	$tdatagps_psra_daerah[".audit"] = false;

	$tdatagps_psra_daerah[".locking"] = false;



$tdatagps_psra_daerah[".list"] = true;



$tdatagps_psra_daerah[".exportTo"] = true;



$tdatagps_psra_daerah[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagps_psra_daerah[".searchSaving"] = false;
//

$tdatagps_psra_daerah[".showSearchPanel"] = true;
		$tdatagps_psra_daerah[".flexibleSearch"] = true;

if (isMobile())
	$tdatagps_psra_daerah[".isUseAjaxSuggest"] = false;
else
	$tdatagps_psra_daerah[".isUseAjaxSuggest"] = true;

$tdatagps_psra_daerah[".rowHighlite"] = true;


																				
$tdatagps_psra_daerah[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagps_psra_daerah[".isUseTimeForSearch"] = false;





$tdatagps_psra_daerah[".allSearchFields"] = array();
$tdatagps_psra_daerah[".filterFields"] = array();
$tdatagps_psra_daerah[".requiredSearchFields"] = array();

$tdatagps_psra_daerah[".allSearchFields"][] = "sZone";
	$tdatagps_psra_daerah[".allSearchFields"][] = "eYear";
	

$tdatagps_psra_daerah[".googleLikeFields"] = array();
$tdatagps_psra_daerah[".googleLikeFields"][] = "GPSs1";
$tdatagps_psra_daerah[".googleLikeFields"][] = "GPSs2";
$tdatagps_psra_daerah[".googleLikeFields"][] = "GPSs3";
$tdatagps_psra_daerah[".googleLikeFields"][] = "GPSs4";
$tdatagps_psra_daerah[".googleLikeFields"][] = "GPSs5";
$tdatagps_psra_daerah[".googleLikeFields"][] = "GPSchool";
$tdatagps_psra_daerah[".googleLikeFields"][] = "skor";

$tdatagps_psra_daerah[".panelSearchFields"] = array();
$tdatagps_psra_daerah[".searchPanelOptions"] = array();
$tdatagps_psra_daerah[".panelSearchFields"][] = "sZone";
	$tdatagps_psra_daerah[".panelSearchFields"][] = "eYear";
	
$tdatagps_psra_daerah[".advSearchFields"] = array();
$tdatagps_psra_daerah[".advSearchFields"][] = "sZone";
$tdatagps_psra_daerah[".advSearchFields"][] = "eYear";

$tdatagps_psra_daerah[".tableType"] = "list";

$tdatagps_psra_daerah[".printerPageOrientation"] = 0;
$tdatagps_psra_daerah[".nPrinterPageScale"] = 100;

$tdatagps_psra_daerah[".nPrinterSplitRecords"] = 40;

$tdatagps_psra_daerah[".nPrinterPDFSplitRecords"] = 40;



$tdatagps_psra_daerah[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatagps_psra_daerah[".pageSize"] = 20;

$tdatagps_psra_daerah[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY GPSchool";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagps_psra_daerah[".strOrderBy"] = $tstrOrderBy;

$tdatagps_psra_daerah[".orderindexes"] = array();
$tdatagps_psra_daerah[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "GPSchool");

$tdatagps_psra_daerah[".sqlHead"] = "SELECT sZone,  eYear,  GPSs1,  GPSs2,  GPSs3,  GPSs4,  GPSs5,  GPSchool,  skor";
$tdatagps_psra_daerah[".sqlFrom"] = "FROM (  SELECT  sZone,  eYear,  eType,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sZone, eYear  ) AS Sub1  ) AS Sub2";
$tdatagps_psra_daerah[".sqlWhereExpr"] = "";
$tdatagps_psra_daerah[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagps_psra_daerah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagps_psra_daerah[".arrGroupsPerPage"] = $arrGPP;

$tdatagps_psra_daerah[".highlightSearchResults"] = true;

$tableKeysgps_psra_daerah = array();
$tableKeysgps_psra_daerah[] = "eYear";
$tdatagps_psra_daerah[".Keys"] = $tableKeysgps_psra_daerah;

$tdatagps_psra_daerah[".listFields"] = array();
$tdatagps_psra_daerah[".listFields"][] = "sZone";
$tdatagps_psra_daerah[".listFields"][] = "eYear";
$tdatagps_psra_daerah[".listFields"][] = "GPSs1";
$tdatagps_psra_daerah[".listFields"][] = "GPSs2";
$tdatagps_psra_daerah[".listFields"][] = "GPSs3";
$tdatagps_psra_daerah[".listFields"][] = "GPSs4";
$tdatagps_psra_daerah[".listFields"][] = "GPSs5";
$tdatagps_psra_daerah[".listFields"][] = "GPSchool";
$tdatagps_psra_daerah[".listFields"][] = "skor";

$tdatagps_psra_daerah[".hideMobileList"] = array();


$tdatagps_psra_daerah[".viewFields"] = array();

$tdatagps_psra_daerah[".addFields"] = array();

$tdatagps_psra_daerah[".masterListFields"] = array();
$tdatagps_psra_daerah[".masterListFields"][] = "sZone";
$tdatagps_psra_daerah[".masterListFields"][] = "eYear";
$tdatagps_psra_daerah[".masterListFields"][] = "GPSs1";
$tdatagps_psra_daerah[".masterListFields"][] = "GPSs2";
$tdatagps_psra_daerah[".masterListFields"][] = "GPSs3";
$tdatagps_psra_daerah[".masterListFields"][] = "GPSs4";
$tdatagps_psra_daerah[".masterListFields"][] = "GPSs5";
$tdatagps_psra_daerah[".masterListFields"][] = "GPSchool";
$tdatagps_psra_daerah[".masterListFields"][] = "skor";

$tdatagps_psra_daerah[".inlineAddFields"] = array();

$tdatagps_psra_daerah[".editFields"] = array();

$tdatagps_psra_daerah[".inlineEditFields"] = array();

$tdatagps_psra_daerah[".exportFields"] = array();
$tdatagps_psra_daerah[".exportFields"][] = "sZone";
$tdatagps_psra_daerah[".exportFields"][] = "eYear";
$tdatagps_psra_daerah[".exportFields"][] = "GPSs1";
$tdatagps_psra_daerah[".exportFields"][] = "GPSs2";
$tdatagps_psra_daerah[".exportFields"][] = "GPSs3";
$tdatagps_psra_daerah[".exportFields"][] = "GPSs4";
$tdatagps_psra_daerah[".exportFields"][] = "GPSs5";
$tdatagps_psra_daerah[".exportFields"][] = "GPSchool";
$tdatagps_psra_daerah[".exportFields"][] = "skor";

$tdatagps_psra_daerah[".importFields"] = array();

$tdatagps_psra_daerah[".printFields"] = array();

//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","sZone");
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




	$tdatagps_psra_daerah["sZone"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","eYear");
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




	$tdatagps_psra_daerah["eYear"] = $fdata;
//	GPSs1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "GPSs1";
	$fdata["GoodName"] = "GPSs1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","GPSs1");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GPSs1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GPSs1";

	
	
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








	$tdatagps_psra_daerah["GPSs1"] = $fdata;
//	GPSs2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "GPSs2";
	$fdata["GoodName"] = "GPSs2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","GPSs2");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GPSs2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GPSs2";

	
	
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








	$tdatagps_psra_daerah["GPSs2"] = $fdata;
//	GPSs3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GPSs3";
	$fdata["GoodName"] = "GPSs3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","GPSs3");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GPSs3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GPSs3";

	
	
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








	$tdatagps_psra_daerah["GPSs3"] = $fdata;
//	GPSs4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "GPSs4";
	$fdata["GoodName"] = "GPSs4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","GPSs4");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GPSs4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GPSs4";

	
	
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








	$tdatagps_psra_daerah["GPSs4"] = $fdata;
//	GPSs5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GPSs5";
	$fdata["GoodName"] = "GPSs5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","GPSs5");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GPSs5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GPSs5";

	
	
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








	$tdatagps_psra_daerah["GPSs5"] = $fdata;
//	GPSchool
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "GPSchool";
	$fdata["GoodName"] = "GPSchool";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","GPSchool");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GPSchool";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GPSchool";

	
	
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








	$tdatagps_psra_daerah["GPSchool"] = $fdata;
//	skor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "skor";
	$fdata["GoodName"] = "skor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_daerah","skor");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "skor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "skor";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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








	$tdatagps_psra_daerah["skor"] = $fdata;


$tables_data["gps_psra_daerah"]=&$tdatagps_psra_daerah;
$field_labels["gps_psra_daerah"] = &$fieldLabelsgps_psra_daerah;
$fieldToolTips["gps_psra_daerah"] = &$fieldToolTipsgps_psra_daerah;
$page_titles["gps_psra_daerah"] = &$pageTitlesgps_psra_daerah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["gps_psra_daerah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["gps_psra_daerah"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_gps_psra_daerah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sZone,  eYear,  GPSs1,  GPSs2,  GPSs3,  GPSs4,  GPSs5,  GPSchool,  skor";
$proto0["m_strFrom"] = "FROM (  SELECT  sZone,  eYear,  eType,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sZone, eYear  ) AS Sub1  ) AS Sub2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY GPSchool";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto5["m_sql"] = "sZone";
$proto5["m_srcTableName"] = "gps_psra_daerah";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto7["m_sql"] = "eYear";
$proto7["m_srcTableName"] = "gps_psra_daerah";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs1",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto9["m_sql"] = "GPSs1";
$proto9["m_srcTableName"] = "gps_psra_daerah";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs2",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto11["m_sql"] = "GPSs2";
$proto11["m_srcTableName"] = "gps_psra_daerah";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs3",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto13["m_sql"] = "GPSs3";
$proto13["m_srcTableName"] = "gps_psra_daerah";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs4",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto15["m_sql"] = "GPSs4";
$proto15["m_srcTableName"] = "gps_psra_daerah";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs5",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto17["m_sql"] = "GPSs5";
$proto17["m_srcTableName"] = "gps_psra_daerah";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSchool",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto19["m_sql"] = "GPSchool";
$proto19["m_srcTableName"] = "gps_psra_daerah";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "skor",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto21["m_sql"] = "skor";
$proto21["m_srcTableName"] = "gps_psra_daerah";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strHead"] = "  SELECT";
$proto24["m_strFieldList"] = "sZone,  eYear,  eType,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor";
$proto24["m_strFrom"] = "FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sZone, eYear  ) AS Sub1";
$proto24["m_strWhere"] = "";
$proto24["m_strOrderBy"] = "";
$proto24["m_strTail"] = "";
			$proto24["cipherer"] = null;
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto24["m_where"] = $obj;
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto24["m_having"] = $obj;
$proto24["m_fieldlist"] = array();
						$proto29=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto29["m_sql"] = "sZone";
$proto29["m_srcTableName"] = "gps_psra_daerah";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto24["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto31["m_sql"] = "eYear";
$proto31["m_srcTableName"] = "gps_psra_daerah";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto24["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto33["m_sql"] = "eType";
$proto33["m_srcTableName"] = "gps_psra_daerah";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto24["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "s1TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto35["m_sql"] = "s1TH";
$proto35["m_srcTableName"] = "gps_psra_daerah";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto24["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "s1DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto37["m_sql"] = "s1DF";
$proto37["m_srcTableName"] = "gps_psra_daerah";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto24["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF*5)"
));

$proto39["m_sql"] = "(s1DF*5)";
$proto39["m_srcTableName"] = "gps_psra_daerah";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "s1DFn";
$obj = new SQLFieldListItem($proto39);

$proto24["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto41["m_sql"] = "s1MQ";
$proto41["m_srcTableName"] = "gps_psra_daerah";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto24["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1MQ*4)"
));

$proto43["m_sql"] = "(s1MQ*4)";
$proto43["m_srcTableName"] = "gps_psra_daerah";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "s1MQn";
$obj = new SQLFieldListItem($proto43);

$proto24["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto45["m_sql"] = "s1JD";
$proto45["m_srcTableName"] = "gps_psra_daerah";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto24["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1JD*3)"
));

$proto47["m_sql"] = "(s1JD*3)";
$proto47["m_srcTableName"] = "gps_psra_daerah";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "s1JDn";
$obj = new SQLFieldListItem($proto47);

$proto24["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto49["m_sql"] = "s1JJ";
$proto49["m_srcTableName"] = "gps_psra_daerah";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto24["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1JJ*2)"
));

$proto51["m_sql"] = "(s1JJ*2)";
$proto51["m_srcTableName"] = "gps_psra_daerah";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "s1JJn";
$obj = new SQLFieldListItem($proto51);

$proto24["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto53["m_sql"] = "s1MZ";
$proto53["m_srcTableName"] = "gps_psra_daerah";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto24["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1MZ*1)"
));

$proto55["m_sql"] = "(s1MZ*1)";
$proto55["m_srcTableName"] = "gps_psra_daerah";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "s1MZn";
$obj = new SQLFieldListItem($proto55);

$proto24["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)"
));

$proto57["m_sql"] = "(s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)";
$proto57["m_srcTableName"] = "gps_psra_daerah";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "s1ngpm";
$obj = new SQLFieldListItem($proto57);

$proto24["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto59["m_sql"] = "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto59["m_srcTableName"] = "gps_psra_daerah";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "s1calon";
$obj = new SQLFieldListItem($proto59);

$proto24["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ))"
));

$proto61["m_sql"] = "((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ))";
$proto61["m_srcTableName"] = "gps_psra_daerah";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "GPSs1";
$obj = new SQLFieldListItem($proto61);

$proto24["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "s2TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto63["m_sql"] = "s2TH";
$proto63["m_srcTableName"] = "gps_psra_daerah";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto24["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "s2DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto65["m_sql"] = "s2DF";
$proto65["m_srcTableName"] = "gps_psra_daerah";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto24["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF*5)"
));

$proto67["m_sql"] = "(s2DF*5)";
$proto67["m_srcTableName"] = "gps_psra_daerah";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "s2DFn";
$obj = new SQLFieldListItem($proto67);

$proto24["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto69["m_sql"] = "s2MQ";
$proto69["m_srcTableName"] = "gps_psra_daerah";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto24["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2MQ*4)"
));

$proto71["m_sql"] = "(s2MQ*4)";
$proto71["m_srcTableName"] = "gps_psra_daerah";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "s2MQn";
$obj = new SQLFieldListItem($proto71);

$proto24["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto73["m_sql"] = "s2JD";
$proto73["m_srcTableName"] = "gps_psra_daerah";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto24["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2JD*3)"
));

$proto75["m_sql"] = "(s2JD*3)";
$proto75["m_srcTableName"] = "gps_psra_daerah";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "s2JDn";
$obj = new SQLFieldListItem($proto75);

$proto24["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto77["m_sql"] = "s2JJ";
$proto77["m_srcTableName"] = "gps_psra_daerah";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto24["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2JJ*2)"
));

$proto79["m_sql"] = "(s2JJ*2)";
$proto79["m_srcTableName"] = "gps_psra_daerah";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "s2JJn";
$obj = new SQLFieldListItem($proto79);

$proto24["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto81["m_sql"] = "s2MZ";
$proto81["m_srcTableName"] = "gps_psra_daerah";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto24["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2MZ*1)"
));

$proto83["m_sql"] = "(s2MZ*1)";
$proto83["m_srcTableName"] = "gps_psra_daerah";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "s2MZn";
$obj = new SQLFieldListItem($proto83);

$proto24["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)"
));

$proto85["m_sql"] = "(s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)";
$proto85["m_srcTableName"] = "gps_psra_daerah";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "s2ngpm";
$obj = new SQLFieldListItem($proto85);

$proto24["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto87["m_sql"] = "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto87["m_srcTableName"] = "gps_psra_daerah";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "s2calon";
$obj = new SQLFieldListItem($proto87);

$proto24["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ))"
));

$proto89["m_sql"] = "((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ))";
$proto89["m_srcTableName"] = "gps_psra_daerah";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "GPSs2";
$obj = new SQLFieldListItem($proto89);

$proto24["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "s3TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto91["m_sql"] = "s3TH";
$proto91["m_srcTableName"] = "gps_psra_daerah";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto24["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "s3DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto93["m_sql"] = "s3DF";
$proto93["m_srcTableName"] = "gps_psra_daerah";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto24["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF*5)"
));

$proto95["m_sql"] = "(s3DF*5)";
$proto95["m_srcTableName"] = "gps_psra_daerah";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "s3DFn";
$obj = new SQLFieldListItem($proto95);

$proto24["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto97["m_sql"] = "s3MQ";
$proto97["m_srcTableName"] = "gps_psra_daerah";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto24["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3MQ*4)"
));

$proto99["m_sql"] = "(s3MQ*4)";
$proto99["m_srcTableName"] = "gps_psra_daerah";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "s3MQn";
$obj = new SQLFieldListItem($proto99);

$proto24["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto101["m_sql"] = "s3JD";
$proto101["m_srcTableName"] = "gps_psra_daerah";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto24["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3JD*3)"
));

$proto103["m_sql"] = "(s3JD*3)";
$proto103["m_srcTableName"] = "gps_psra_daerah";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "s3JDn";
$obj = new SQLFieldListItem($proto103);

$proto24["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto105["m_sql"] = "s3JJ";
$proto105["m_srcTableName"] = "gps_psra_daerah";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto24["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3JJ*2)"
));

$proto107["m_sql"] = "(s3JJ*2)";
$proto107["m_srcTableName"] = "gps_psra_daerah";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "s3JJn";
$obj = new SQLFieldListItem($proto107);

$proto24["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto109["m_sql"] = "s3MZ";
$proto109["m_srcTableName"] = "gps_psra_daerah";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto24["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3MZ*1)"
));

$proto111["m_sql"] = "(s3MZ*1)";
$proto111["m_srcTableName"] = "gps_psra_daerah";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "s3MZn";
$obj = new SQLFieldListItem($proto111);

$proto24["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)"
));

$proto113["m_sql"] = "(s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)";
$proto113["m_srcTableName"] = "gps_psra_daerah";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "s3ngpm";
$obj = new SQLFieldListItem($proto113);

$proto24["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto115["m_sql"] = "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto115["m_srcTableName"] = "gps_psra_daerah";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "s3calon";
$obj = new SQLFieldListItem($proto115);

$proto24["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ))"
));

$proto117["m_sql"] = "((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ))";
$proto117["m_srcTableName"] = "gps_psra_daerah";
$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "GPSs3";
$obj = new SQLFieldListItem($proto117);

$proto24["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLField(array(
	"m_strName" => "s4TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto119["m_sql"] = "s4TH";
$proto119["m_srcTableName"] = "gps_psra_daerah";
$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "";
$obj = new SQLFieldListItem($proto119);

$proto24["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "s4DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto121["m_sql"] = "s4DF";
$proto121["m_srcTableName"] = "gps_psra_daerah";
$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto24["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF*5)"
));

$proto123["m_sql"] = "(s4DF*5)";
$proto123["m_srcTableName"] = "gps_psra_daerah";
$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "s4DFn";
$obj = new SQLFieldListItem($proto123);

$proto24["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto125["m_sql"] = "s4MQ";
$proto125["m_srcTableName"] = "gps_psra_daerah";
$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto24["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4MQ*4)"
));

$proto127["m_sql"] = "(s4MQ*4)";
$proto127["m_srcTableName"] = "gps_psra_daerah";
$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "s4MQn";
$obj = new SQLFieldListItem($proto127);

$proto24["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto129["m_sql"] = "s4JD";
$proto129["m_srcTableName"] = "gps_psra_daerah";
$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto24["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4JD*3)"
));

$proto131["m_sql"] = "(s4JD*3)";
$proto131["m_srcTableName"] = "gps_psra_daerah";
$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "s4JDn";
$obj = new SQLFieldListItem($proto131);

$proto24["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto133["m_sql"] = "s4JJ";
$proto133["m_srcTableName"] = "gps_psra_daerah";
$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto24["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4JJ*2)"
));

$proto135["m_sql"] = "(s4JJ*2)";
$proto135["m_srcTableName"] = "gps_psra_daerah";
$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "s4JJn";
$obj = new SQLFieldListItem($proto135);

$proto24["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto137["m_sql"] = "s4MZ";
$proto137["m_srcTableName"] = "gps_psra_daerah";
$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "";
$obj = new SQLFieldListItem($proto137);

$proto24["m_fieldlist"][]=$obj;
						$proto139=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4MZ*1)"
));

$proto139["m_sql"] = "(s4MZ*1)";
$proto139["m_srcTableName"] = "gps_psra_daerah";
$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "s4MZn";
$obj = new SQLFieldListItem($proto139);

$proto24["m_fieldlist"][]=$obj;
						$proto141=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)"
));

$proto141["m_sql"] = "(s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)";
$proto141["m_srcTableName"] = "gps_psra_daerah";
$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "s4ngpm";
$obj = new SQLFieldListItem($proto141);

$proto24["m_fieldlist"][]=$obj;
						$proto143=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto143["m_sql"] = "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto143["m_srcTableName"] = "gps_psra_daerah";
$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "s4calon";
$obj = new SQLFieldListItem($proto143);

$proto24["m_fieldlist"][]=$obj;
						$proto145=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ))"
));

$proto145["m_sql"] = "((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ))";
$proto145["m_srcTableName"] = "gps_psra_daerah";
$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "GPSs4";
$obj = new SQLFieldListItem($proto145);

$proto24["m_fieldlist"][]=$obj;
						$proto147=array();
			$obj = new SQLField(array(
	"m_strName" => "s5TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto147["m_sql"] = "s5TH";
$proto147["m_srcTableName"] = "gps_psra_daerah";
$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "";
$obj = new SQLFieldListItem($proto147);

$proto24["m_fieldlist"][]=$obj;
						$proto149=array();
			$obj = new SQLField(array(
	"m_strName" => "s5DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto149["m_sql"] = "s5DF";
$proto149["m_srcTableName"] = "gps_psra_daerah";
$proto149["m_expr"]=$obj;
$proto149["m_alias"] = "";
$obj = new SQLFieldListItem($proto149);

$proto24["m_fieldlist"][]=$obj;
						$proto151=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF*5)"
));

$proto151["m_sql"] = "(s5DF*5)";
$proto151["m_srcTableName"] = "gps_psra_daerah";
$proto151["m_expr"]=$obj;
$proto151["m_alias"] = "s5DFn";
$obj = new SQLFieldListItem($proto151);

$proto24["m_fieldlist"][]=$obj;
						$proto153=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto153["m_sql"] = "s5MQ";
$proto153["m_srcTableName"] = "gps_psra_daerah";
$proto153["m_expr"]=$obj;
$proto153["m_alias"] = "";
$obj = new SQLFieldListItem($proto153);

$proto24["m_fieldlist"][]=$obj;
						$proto155=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5MQ*4)"
));

$proto155["m_sql"] = "(s5MQ*4)";
$proto155["m_srcTableName"] = "gps_psra_daerah";
$proto155["m_expr"]=$obj;
$proto155["m_alias"] = "s5MQn";
$obj = new SQLFieldListItem($proto155);

$proto24["m_fieldlist"][]=$obj;
						$proto157=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto157["m_sql"] = "s5JD";
$proto157["m_srcTableName"] = "gps_psra_daerah";
$proto157["m_expr"]=$obj;
$proto157["m_alias"] = "";
$obj = new SQLFieldListItem($proto157);

$proto24["m_fieldlist"][]=$obj;
						$proto159=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5JD*3)"
));

$proto159["m_sql"] = "(s5JD*3)";
$proto159["m_srcTableName"] = "gps_psra_daerah";
$proto159["m_expr"]=$obj;
$proto159["m_alias"] = "s5JDn";
$obj = new SQLFieldListItem($proto159);

$proto24["m_fieldlist"][]=$obj;
						$proto161=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto161["m_sql"] = "s5JJ";
$proto161["m_srcTableName"] = "gps_psra_daerah";
$proto161["m_expr"]=$obj;
$proto161["m_alias"] = "";
$obj = new SQLFieldListItem($proto161);

$proto24["m_fieldlist"][]=$obj;
						$proto163=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5JJ*2)"
));

$proto163["m_sql"] = "(s5JJ*2)";
$proto163["m_srcTableName"] = "gps_psra_daerah";
$proto163["m_expr"]=$obj;
$proto163["m_alias"] = "s5JJn";
$obj = new SQLFieldListItem($proto163);

$proto24["m_fieldlist"][]=$obj;
						$proto165=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto165["m_sql"] = "s5MZ";
$proto165["m_srcTableName"] = "gps_psra_daerah";
$proto165["m_expr"]=$obj;
$proto165["m_alias"] = "";
$obj = new SQLFieldListItem($proto165);

$proto24["m_fieldlist"][]=$obj;
						$proto167=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5MZ*1)"
));

$proto167["m_sql"] = "(s5MZ*1)";
$proto167["m_srcTableName"] = "gps_psra_daerah";
$proto167["m_expr"]=$obj;
$proto167["m_alias"] = "s5MZn";
$obj = new SQLFieldListItem($proto167);

$proto24["m_fieldlist"][]=$obj;
						$proto169=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)"
));

$proto169["m_sql"] = "(s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)";
$proto169["m_srcTableName"] = "gps_psra_daerah";
$proto169["m_expr"]=$obj;
$proto169["m_alias"] = "s5ngpm";
$obj = new SQLFieldListItem($proto169);

$proto24["m_fieldlist"][]=$obj;
						$proto171=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto171["m_sql"] = "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto171["m_srcTableName"] = "gps_psra_daerah";
$proto171["m_expr"]=$obj;
$proto171["m_alias"] = "s5calon";
$obj = new SQLFieldListItem($proto171);

$proto24["m_fieldlist"][]=$obj;
						$proto173=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ))"
));

$proto173["m_sql"] = "((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ))";
$proto173["m_srcTableName"] = "gps_psra_daerah";
$proto173["m_expr"]=$obj;
$proto173["m_alias"] = "GPSs5";
$obj = new SQLFieldListItem($proto173);

$proto24["m_fieldlist"][]=$obj;
						$proto175=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5"
));

$proto175["m_sql"] = "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5";
$proto175["m_srcTableName"] = "gps_psra_daerah";
$proto175["m_expr"]=$obj;
$proto175["m_alias"] = "GPSchool";
$obj = new SQLFieldListItem($proto175);

$proto24["m_fieldlist"][]=$obj;
						$proto177=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5"
));

$proto177["m_sql"] = "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5";
$proto177["m_srcTableName"] = "gps_psra_daerah";
$proto177["m_expr"]=$obj;
$proto177["m_alias"] = "skor";
$obj = new SQLFieldListItem($proto177);

$proto24["m_fieldlist"][]=$obj;
$proto24["m_fromlist"] = array();
												$proto179=array();
$proto179["m_link"] = "SQLL_MAIN";
			$proto180=array();
$proto180["m_strHead"] = "  		SELECT";
$proto180["m_strFieldList"] = "sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName";
$proto180["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto180["m_strWhere"] = "eType ='PSRA'";
$proto180["m_strOrderBy"] = "";
$proto180["m_strTail"] = "";
			$proto180["cipherer"] = null;
$proto181=array();
$proto181["m_sql"] = "eType ='PSRA'";
$proto181["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto181["m_column"]=$obj;
$proto181["m_contained"] = array();
$proto181["m_strCase"] = "='PSRA'";
$proto181["m_havingmode"] = false;
$proto181["m_inBrackets"] = false;
$proto181["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto181);

$proto180["m_where"] = $obj;
$proto183=array();
$proto183["m_sql"] = "";
$proto183["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto183["m_column"]=$obj;
$proto183["m_contained"] = array();
$proto183["m_strCase"] = "";
$proto183["m_havingmode"] = false;
$proto183["m_inBrackets"] = false;
$proto183["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto183);

$proto180["m_having"] = $obj;
$proto180["m_fieldlist"] = array();
						$proto185=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto185["m_sql"] = "sid";
$proto185["m_srcTableName"] = "gps_psra_daerah";
$proto185["m_expr"]=$obj;
$proto185["m_alias"] = "";
$obj = new SQLFieldListItem($proto185);

$proto180["m_fieldlist"][]=$obj;
						$proto187=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto187["m_sql"] = "eYear";
$proto187["m_srcTableName"] = "gps_psra_daerah";
$proto187["m_expr"]=$obj;
$proto187["m_alias"] = "";
$obj = new SQLFieldListItem($proto187);

$proto180["m_fieldlist"][]=$obj;
						$proto189=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto189["m_sql"] = "eType";
$proto189["m_srcTableName"] = "gps_psra_daerah";
$proto189["m_expr"]=$obj;
$proto189["m_alias"] = "";
$obj = new SQLFieldListItem($proto189);

$proto180["m_fieldlist"][]=$obj;
						$proto191=array();
			$proto192=array();
$proto192["m_functiontype"] = "SQLF_COUNT";
$proto192["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto192["m_arguments"][]=$obj;
$proto192["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto192);

$proto191["m_sql"] = "COUNT(sid)";
$proto191["m_srcTableName"] = "gps_psra_daerah";
$proto191["m_expr"]=$obj;
$proto191["m_alias"] = "totalCalon";
$obj = new SQLFieldListItem($proto191);

$proto180["m_fieldlist"][]=$obj;
						$proto194=array();
			$proto195=array();
$proto195["m_functiontype"] = "SQLF_COUNT";
$proto195["m_arguments"] = array();
						$proto196=array();
$proto196["m_functiontype"] = "SQLF_CUSTOM";
$proto196["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1='TH'"
));

$proto196["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto196["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto196["m_arguments"][]=$obj;
$proto196["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto196);

$proto195["m_arguments"][]=$obj;
$proto195["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto195);

$proto194["m_sql"] = "COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL))";
$proto194["m_srcTableName"] = "gps_psra_daerah";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "s1TH";
$obj = new SQLFieldListItem($proto194);

$proto180["m_fieldlist"][]=$obj;
						$proto200=array();
			$proto201=array();
$proto201["m_functiontype"] = "SQLF_COUNT";
$proto201["m_arguments"] = array();
						$proto202=array();
$proto202["m_functiontype"] = "SQLF_CUSTOM";
$proto202["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1!='TH' AND exam_marking.s1<40"
));

$proto202["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto202["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto202["m_arguments"][]=$obj;
$proto202["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto202);

$proto201["m_arguments"][]=$obj;
$proto201["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto201);

$proto200["m_sql"] = "COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL))";
$proto200["m_srcTableName"] = "gps_psra_daerah";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "s1DF";
$obj = new SQLFieldListItem($proto200);

$proto180["m_fieldlist"][]=$obj;
						$proto206=array();
			$proto207=array();
$proto207["m_functiontype"] = "SQLF_COUNT";
$proto207["m_arguments"] = array();
						$proto208=array();
$proto208["m_functiontype"] = "SQLF_CUSTOM";
$proto208["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=40 AND exam_marking.s1<60"
));

$proto208["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto208["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto208["m_arguments"][]=$obj;
$proto208["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto208);

$proto207["m_arguments"][]=$obj;
$proto207["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto207);

$proto206["m_sql"] = "COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL))";
$proto206["m_srcTableName"] = "gps_psra_daerah";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "s1MQ";
$obj = new SQLFieldListItem($proto206);

$proto180["m_fieldlist"][]=$obj;
						$proto212=array();
			$proto213=array();
$proto213["m_functiontype"] = "SQLF_COUNT";
$proto213["m_arguments"] = array();
						$proto214=array();
$proto214["m_functiontype"] = "SQLF_CUSTOM";
$proto214["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=60 AND exam_marking.s1<75"
));

$proto214["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto214["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto214["m_arguments"][]=$obj;
$proto214["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto214);

$proto213["m_arguments"][]=$obj;
$proto213["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto213);

$proto212["m_sql"] = "COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL))";
$proto212["m_srcTableName"] = "gps_psra_daerah";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "s1JD";
$obj = new SQLFieldListItem($proto212);

$proto180["m_fieldlist"][]=$obj;
						$proto218=array();
			$proto219=array();
$proto219["m_functiontype"] = "SQLF_COUNT";
$proto219["m_arguments"] = array();
						$proto220=array();
$proto220["m_functiontype"] = "SQLF_CUSTOM";
$proto220["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=75 AND exam_marking.s1<90"
));

$proto220["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto220["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto220["m_arguments"][]=$obj;
$proto220["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto220);

$proto219["m_arguments"][]=$obj;
$proto219["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto219);

$proto218["m_sql"] = "COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL))";
$proto218["m_srcTableName"] = "gps_psra_daerah";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "s1JJ";
$obj = new SQLFieldListItem($proto218);

$proto180["m_fieldlist"][]=$obj;
						$proto224=array();
			$proto225=array();
$proto225["m_functiontype"] = "SQLF_COUNT";
$proto225["m_arguments"] = array();
						$proto226=array();
$proto226["m_functiontype"] = "SQLF_CUSTOM";
$proto226["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=90"
));

$proto226["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto226["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto226["m_arguments"][]=$obj;
$proto226["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto226);

$proto225["m_arguments"][]=$obj;
$proto225["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto225);

$proto224["m_sql"] = "COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL))";
$proto224["m_srcTableName"] = "gps_psra_daerah";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "s1MZ";
$obj = new SQLFieldListItem($proto224);

$proto180["m_fieldlist"][]=$obj;
						$proto230=array();
			$proto231=array();
$proto231["m_functiontype"] = "SQLF_COUNT";
$proto231["m_arguments"] = array();
						$proto232=array();
$proto232["m_functiontype"] = "SQLF_CUSTOM";
$proto232["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2='TH'"
));

$proto232["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto232["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto232["m_arguments"][]=$obj;
$proto232["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto232);

$proto231["m_arguments"][]=$obj;
$proto231["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto231);

$proto230["m_sql"] = "COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL))";
$proto230["m_srcTableName"] = "gps_psra_daerah";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "s2TH";
$obj = new SQLFieldListItem($proto230);

$proto180["m_fieldlist"][]=$obj;
						$proto236=array();
			$proto237=array();
$proto237["m_functiontype"] = "SQLF_COUNT";
$proto237["m_arguments"] = array();
						$proto238=array();
$proto238["m_functiontype"] = "SQLF_CUSTOM";
$proto238["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2!='TH' AND exam_marking.s2<40"
));

$proto238["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto238["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto238["m_arguments"][]=$obj;
$proto238["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto238);

$proto237["m_arguments"][]=$obj;
$proto237["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto237);

$proto236["m_sql"] = "COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL))";
$proto236["m_srcTableName"] = "gps_psra_daerah";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "s2DF";
$obj = new SQLFieldListItem($proto236);

$proto180["m_fieldlist"][]=$obj;
						$proto242=array();
			$proto243=array();
$proto243["m_functiontype"] = "SQLF_COUNT";
$proto243["m_arguments"] = array();
						$proto244=array();
$proto244["m_functiontype"] = "SQLF_CUSTOM";
$proto244["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=40 AND exam_marking.s2<60"
));

$proto244["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto244["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto244["m_arguments"][]=$obj;
$proto244["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto244);

$proto243["m_arguments"][]=$obj;
$proto243["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto243);

$proto242["m_sql"] = "COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL))";
$proto242["m_srcTableName"] = "gps_psra_daerah";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "s2MQ";
$obj = new SQLFieldListItem($proto242);

$proto180["m_fieldlist"][]=$obj;
						$proto248=array();
			$proto249=array();
$proto249["m_functiontype"] = "SQLF_COUNT";
$proto249["m_arguments"] = array();
						$proto250=array();
$proto250["m_functiontype"] = "SQLF_CUSTOM";
$proto250["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=60 AND exam_marking.s2<75"
));

$proto250["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto250["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto250["m_arguments"][]=$obj;
$proto250["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto250);

$proto249["m_arguments"][]=$obj;
$proto249["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto249);

$proto248["m_sql"] = "COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL))";
$proto248["m_srcTableName"] = "gps_psra_daerah";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "s2JD";
$obj = new SQLFieldListItem($proto248);

$proto180["m_fieldlist"][]=$obj;
						$proto254=array();
			$proto255=array();
$proto255["m_functiontype"] = "SQLF_COUNT";
$proto255["m_arguments"] = array();
						$proto256=array();
$proto256["m_functiontype"] = "SQLF_CUSTOM";
$proto256["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=75 AND exam_marking.s2<90"
));

$proto256["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto256["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto256["m_arguments"][]=$obj;
$proto256["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto256);

$proto255["m_arguments"][]=$obj;
$proto255["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto255);

$proto254["m_sql"] = "COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL))";
$proto254["m_srcTableName"] = "gps_psra_daerah";
$proto254["m_expr"]=$obj;
$proto254["m_alias"] = "s2JJ";
$obj = new SQLFieldListItem($proto254);

$proto180["m_fieldlist"][]=$obj;
						$proto260=array();
			$proto261=array();
$proto261["m_functiontype"] = "SQLF_COUNT";
$proto261["m_arguments"] = array();
						$proto262=array();
$proto262["m_functiontype"] = "SQLF_CUSTOM";
$proto262["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=90"
));

$proto262["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto262["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto262["m_arguments"][]=$obj;
$proto262["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto262);

$proto261["m_arguments"][]=$obj;
$proto261["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto261);

$proto260["m_sql"] = "COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL))";
$proto260["m_srcTableName"] = "gps_psra_daerah";
$proto260["m_expr"]=$obj;
$proto260["m_alias"] = "s2MZ";
$obj = new SQLFieldListItem($proto260);

$proto180["m_fieldlist"][]=$obj;
						$proto266=array();
			$proto267=array();
$proto267["m_functiontype"] = "SQLF_COUNT";
$proto267["m_arguments"] = array();
						$proto268=array();
$proto268["m_functiontype"] = "SQLF_CUSTOM";
$proto268["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3='TH'"
));

$proto268["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto268["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto268["m_arguments"][]=$obj;
$proto268["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto268);

$proto267["m_arguments"][]=$obj;
$proto267["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto267);

$proto266["m_sql"] = "COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL))";
$proto266["m_srcTableName"] = "gps_psra_daerah";
$proto266["m_expr"]=$obj;
$proto266["m_alias"] = "s3TH";
$obj = new SQLFieldListItem($proto266);

$proto180["m_fieldlist"][]=$obj;
						$proto272=array();
			$proto273=array();
$proto273["m_functiontype"] = "SQLF_COUNT";
$proto273["m_arguments"] = array();
						$proto274=array();
$proto274["m_functiontype"] = "SQLF_CUSTOM";
$proto274["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3!='TH' AND exam_marking.s3<40"
));

$proto274["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto274["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto274["m_arguments"][]=$obj;
$proto274["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto274);

$proto273["m_arguments"][]=$obj;
$proto273["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto273);

$proto272["m_sql"] = "COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL))";
$proto272["m_srcTableName"] = "gps_psra_daerah";
$proto272["m_expr"]=$obj;
$proto272["m_alias"] = "s3DF";
$obj = new SQLFieldListItem($proto272);

$proto180["m_fieldlist"][]=$obj;
						$proto278=array();
			$proto279=array();
$proto279["m_functiontype"] = "SQLF_COUNT";
$proto279["m_arguments"] = array();
						$proto280=array();
$proto280["m_functiontype"] = "SQLF_CUSTOM";
$proto280["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=40 AND exam_marking.s3<60"
));

$proto280["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto280["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto280["m_arguments"][]=$obj;
$proto280["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto280);

$proto279["m_arguments"][]=$obj;
$proto279["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto279);

$proto278["m_sql"] = "COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL))";
$proto278["m_srcTableName"] = "gps_psra_daerah";
$proto278["m_expr"]=$obj;
$proto278["m_alias"] = "s3MQ";
$obj = new SQLFieldListItem($proto278);

$proto180["m_fieldlist"][]=$obj;
						$proto284=array();
			$proto285=array();
$proto285["m_functiontype"] = "SQLF_COUNT";
$proto285["m_arguments"] = array();
						$proto286=array();
$proto286["m_functiontype"] = "SQLF_CUSTOM";
$proto286["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=60 AND exam_marking.s3<75"
));

$proto286["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto286["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto286["m_arguments"][]=$obj;
$proto286["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto286);

$proto285["m_arguments"][]=$obj;
$proto285["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto285);

$proto284["m_sql"] = "COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL))";
$proto284["m_srcTableName"] = "gps_psra_daerah";
$proto284["m_expr"]=$obj;
$proto284["m_alias"] = "s3JD";
$obj = new SQLFieldListItem($proto284);

$proto180["m_fieldlist"][]=$obj;
						$proto290=array();
			$proto291=array();
$proto291["m_functiontype"] = "SQLF_COUNT";
$proto291["m_arguments"] = array();
						$proto292=array();
$proto292["m_functiontype"] = "SQLF_CUSTOM";
$proto292["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=75 AND exam_marking.s3<90"
));

$proto292["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto292["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto292["m_arguments"][]=$obj;
$proto292["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto292);

$proto291["m_arguments"][]=$obj;
$proto291["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto291);

$proto290["m_sql"] = "COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL))";
$proto290["m_srcTableName"] = "gps_psra_daerah";
$proto290["m_expr"]=$obj;
$proto290["m_alias"] = "s3JJ";
$obj = new SQLFieldListItem($proto290);

$proto180["m_fieldlist"][]=$obj;
						$proto296=array();
			$proto297=array();
$proto297["m_functiontype"] = "SQLF_COUNT";
$proto297["m_arguments"] = array();
						$proto298=array();
$proto298["m_functiontype"] = "SQLF_CUSTOM";
$proto298["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=90"
));

$proto298["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto298["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto298["m_arguments"][]=$obj;
$proto298["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto298);

$proto297["m_arguments"][]=$obj;
$proto297["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto297);

$proto296["m_sql"] = "COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL))";
$proto296["m_srcTableName"] = "gps_psra_daerah";
$proto296["m_expr"]=$obj;
$proto296["m_alias"] = "s3MZ";
$obj = new SQLFieldListItem($proto296);

$proto180["m_fieldlist"][]=$obj;
						$proto302=array();
			$proto303=array();
$proto303["m_functiontype"] = "SQLF_COUNT";
$proto303["m_arguments"] = array();
						$proto304=array();
$proto304["m_functiontype"] = "SQLF_CUSTOM";
$proto304["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4='TH'"
));

$proto304["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto304["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto304["m_arguments"][]=$obj;
$proto304["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto304);

$proto303["m_arguments"][]=$obj;
$proto303["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto303);

$proto302["m_sql"] = "COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL))";
$proto302["m_srcTableName"] = "gps_psra_daerah";
$proto302["m_expr"]=$obj;
$proto302["m_alias"] = "s4TH";
$obj = new SQLFieldListItem($proto302);

$proto180["m_fieldlist"][]=$obj;
						$proto308=array();
			$proto309=array();
$proto309["m_functiontype"] = "SQLF_COUNT";
$proto309["m_arguments"] = array();
						$proto310=array();
$proto310["m_functiontype"] = "SQLF_CUSTOM";
$proto310["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4!='TH' AND exam_marking.s4<40"
));

$proto310["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto310["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto310["m_arguments"][]=$obj;
$proto310["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto310);

$proto309["m_arguments"][]=$obj;
$proto309["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto309);

$proto308["m_sql"] = "COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL))";
$proto308["m_srcTableName"] = "gps_psra_daerah";
$proto308["m_expr"]=$obj;
$proto308["m_alias"] = "s4DF";
$obj = new SQLFieldListItem($proto308);

$proto180["m_fieldlist"][]=$obj;
						$proto314=array();
			$proto315=array();
$proto315["m_functiontype"] = "SQLF_COUNT";
$proto315["m_arguments"] = array();
						$proto316=array();
$proto316["m_functiontype"] = "SQLF_CUSTOM";
$proto316["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=40 AND exam_marking.s4<60"
));

$proto316["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto316["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto316["m_arguments"][]=$obj;
$proto316["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto316);

$proto315["m_arguments"][]=$obj;
$proto315["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto315);

$proto314["m_sql"] = "COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL))";
$proto314["m_srcTableName"] = "gps_psra_daerah";
$proto314["m_expr"]=$obj;
$proto314["m_alias"] = "s4MQ";
$obj = new SQLFieldListItem($proto314);

$proto180["m_fieldlist"][]=$obj;
						$proto320=array();
			$proto321=array();
$proto321["m_functiontype"] = "SQLF_COUNT";
$proto321["m_arguments"] = array();
						$proto322=array();
$proto322["m_functiontype"] = "SQLF_CUSTOM";
$proto322["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=60 AND exam_marking.s4<75"
));

$proto322["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto322["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto322["m_arguments"][]=$obj;
$proto322["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto322);

$proto321["m_arguments"][]=$obj;
$proto321["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto321);

$proto320["m_sql"] = "COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL))";
$proto320["m_srcTableName"] = "gps_psra_daerah";
$proto320["m_expr"]=$obj;
$proto320["m_alias"] = "s4JD";
$obj = new SQLFieldListItem($proto320);

$proto180["m_fieldlist"][]=$obj;
						$proto326=array();
			$proto327=array();
$proto327["m_functiontype"] = "SQLF_COUNT";
$proto327["m_arguments"] = array();
						$proto328=array();
$proto328["m_functiontype"] = "SQLF_CUSTOM";
$proto328["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=75 AND exam_marking.s4<90"
));

$proto328["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto328["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto328["m_arguments"][]=$obj;
$proto328["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto328);

$proto327["m_arguments"][]=$obj;
$proto327["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto327);

$proto326["m_sql"] = "COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL))";
$proto326["m_srcTableName"] = "gps_psra_daerah";
$proto326["m_expr"]=$obj;
$proto326["m_alias"] = "s4JJ";
$obj = new SQLFieldListItem($proto326);

$proto180["m_fieldlist"][]=$obj;
						$proto332=array();
			$proto333=array();
$proto333["m_functiontype"] = "SQLF_COUNT";
$proto333["m_arguments"] = array();
						$proto334=array();
$proto334["m_functiontype"] = "SQLF_CUSTOM";
$proto334["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=90"
));

$proto334["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto334["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto334["m_arguments"][]=$obj;
$proto334["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto334);

$proto333["m_arguments"][]=$obj;
$proto333["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto333);

$proto332["m_sql"] = "COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL))";
$proto332["m_srcTableName"] = "gps_psra_daerah";
$proto332["m_expr"]=$obj;
$proto332["m_alias"] = "s4MZ";
$obj = new SQLFieldListItem($proto332);

$proto180["m_fieldlist"][]=$obj;
						$proto338=array();
			$proto339=array();
$proto339["m_functiontype"] = "SQLF_COUNT";
$proto339["m_arguments"] = array();
						$proto340=array();
$proto340["m_functiontype"] = "SQLF_CUSTOM";
$proto340["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5='TH'"
));

$proto340["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto340["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto340["m_arguments"][]=$obj;
$proto340["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto340);

$proto339["m_arguments"][]=$obj;
$proto339["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto339);

$proto338["m_sql"] = "COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL))";
$proto338["m_srcTableName"] = "gps_psra_daerah";
$proto338["m_expr"]=$obj;
$proto338["m_alias"] = "s5TH";
$obj = new SQLFieldListItem($proto338);

$proto180["m_fieldlist"][]=$obj;
						$proto344=array();
			$proto345=array();
$proto345["m_functiontype"] = "SQLF_COUNT";
$proto345["m_arguments"] = array();
						$proto346=array();
$proto346["m_functiontype"] = "SQLF_CUSTOM";
$proto346["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5!='TH' AND exam_marking.s5<40"
));

$proto346["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto346["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto346["m_arguments"][]=$obj;
$proto346["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto346);

$proto345["m_arguments"][]=$obj;
$proto345["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto345);

$proto344["m_sql"] = "COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL))";
$proto344["m_srcTableName"] = "gps_psra_daerah";
$proto344["m_expr"]=$obj;
$proto344["m_alias"] = "s5DF";
$obj = new SQLFieldListItem($proto344);

$proto180["m_fieldlist"][]=$obj;
						$proto350=array();
			$proto351=array();
$proto351["m_functiontype"] = "SQLF_COUNT";
$proto351["m_arguments"] = array();
						$proto352=array();
$proto352["m_functiontype"] = "SQLF_CUSTOM";
$proto352["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=40 AND exam_marking.s5<60"
));

$proto352["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto352["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto352["m_arguments"][]=$obj;
$proto352["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto352);

$proto351["m_arguments"][]=$obj;
$proto351["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto351);

$proto350["m_sql"] = "COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL))";
$proto350["m_srcTableName"] = "gps_psra_daerah";
$proto350["m_expr"]=$obj;
$proto350["m_alias"] = "s5MQ";
$obj = new SQLFieldListItem($proto350);

$proto180["m_fieldlist"][]=$obj;
						$proto356=array();
			$proto357=array();
$proto357["m_functiontype"] = "SQLF_COUNT";
$proto357["m_arguments"] = array();
						$proto358=array();
$proto358["m_functiontype"] = "SQLF_CUSTOM";
$proto358["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=60 AND exam_marking.s5<75"
));

$proto358["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto358["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto358["m_arguments"][]=$obj;
$proto358["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto358);

$proto357["m_arguments"][]=$obj;
$proto357["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto357);

$proto356["m_sql"] = "COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL))";
$proto356["m_srcTableName"] = "gps_psra_daerah";
$proto356["m_expr"]=$obj;
$proto356["m_alias"] = "s5JD";
$obj = new SQLFieldListItem($proto356);

$proto180["m_fieldlist"][]=$obj;
						$proto362=array();
			$proto363=array();
$proto363["m_functiontype"] = "SQLF_COUNT";
$proto363["m_arguments"] = array();
						$proto364=array();
$proto364["m_functiontype"] = "SQLF_CUSTOM";
$proto364["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=75 AND exam_marking.s5<90"
));

$proto364["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto364["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto364["m_arguments"][]=$obj;
$proto364["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto364);

$proto363["m_arguments"][]=$obj;
$proto363["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto363);

$proto362["m_sql"] = "COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL))";
$proto362["m_srcTableName"] = "gps_psra_daerah";
$proto362["m_expr"]=$obj;
$proto362["m_alias"] = "s5JJ";
$obj = new SQLFieldListItem($proto362);

$proto180["m_fieldlist"][]=$obj;
						$proto368=array();
			$proto369=array();
$proto369["m_functiontype"] = "SQLF_COUNT";
$proto369["m_arguments"] = array();
						$proto370=array();
$proto370["m_functiontype"] = "SQLF_CUSTOM";
$proto370["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=90"
));

$proto370["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto370["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto370["m_arguments"][]=$obj;
$proto370["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto370);

$proto369["m_arguments"][]=$obj;
$proto369["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto369);

$proto368["m_sql"] = "COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL))";
$proto368["m_srcTableName"] = "gps_psra_daerah";
$proto368["m_expr"]=$obj;
$proto368["m_alias"] = "s5MZ";
$obj = new SQLFieldListItem($proto368);

$proto180["m_fieldlist"][]=$obj;
						$proto374=array();
			$proto375=array();
$proto375["m_functiontype"] = "SQLF_SUM";
$proto375["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5"
));

$proto375["m_arguments"][]=$obj;
$proto375["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto375);

$proto374["m_sql"] = "SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5)";
$proto374["m_srcTableName"] = "gps_psra_daerah";
$proto374["m_expr"]=$obj;
$proto374["m_alias"] = "totalMark";
$obj = new SQLFieldListItem($proto374);

$proto180["m_fieldlist"][]=$obj;
						$proto377=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto377["m_sql"] = "sZone";
$proto377["m_srcTableName"] = "gps_psra_daerah";
$proto377["m_expr"]=$obj;
$proto377["m_alias"] = "";
$obj = new SQLFieldListItem($proto377);

$proto180["m_fieldlist"][]=$obj;
						$proto379=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto379["m_sql"] = "sName";
$proto379["m_srcTableName"] = "gps_psra_daerah";
$proto379["m_expr"]=$obj;
$proto379["m_alias"] = "";
$obj = new SQLFieldListItem($proto379);

$proto180["m_fieldlist"][]=$obj;
$proto180["m_fromlist"] = array();
												$proto381=array();
$proto381["m_link"] = "SQLL_MAIN";
			$proto382=array();
$proto382["m_strName"] = "exam_marking";
$proto382["m_srcTableName"] = "gps_psra_daerah";
$proto382["m_columns"] = array();
$proto382["m_columns"][] = "sid";
$proto382["m_columns"][] = "name";
$proto382["m_columns"][] = "gender";
$proto382["m_columns"][] = "birthdate";
$proto382["m_columns"][] = "birthCert";
$proto382["m_columns"][] = "nationality";
$proto382["m_columns"][] = "sCode";
$proto382["m_columns"][] = "eNo";
$proto382["m_columns"][] = "eYear";
$proto382["m_columns"][] = "eType";
$proto382["m_columns"][] = "s1";
$proto382["m_columns"][] = "s2";
$proto382["m_columns"][] = "s3";
$proto382["m_columns"][] = "s4";
$proto382["m_columns"][] = "s5";
$proto382["m_columns"][] = "s6";
$proto382["m_columns"][] = "s7";
$obj = new SQLTable($proto382);

$proto381["m_table"] = $obj;
$proto381["m_sql"] = "exam_marking";
$proto381["m_alias"] = "";
$proto381["m_srcTableName"] = "gps_psra_daerah";
$proto383=array();
$proto383["m_sql"] = "";
$proto383["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto383["m_column"]=$obj;
$proto383["m_contained"] = array();
$proto383["m_strCase"] = "";
$proto383["m_havingmode"] = false;
$proto383["m_inBrackets"] = false;
$proto383["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto383);

$proto381["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto381);

$proto180["m_fromlist"][]=$obj;
												$proto385=array();
$proto385["m_link"] = "SQLL_INNERJOIN";
			$proto386=array();
$proto386["m_strName"] = "school";
$proto386["m_srcTableName"] = "gps_psra_daerah";
$proto386["m_columns"] = array();
$proto386["m_columns"][] = "sno";
$proto386["m_columns"][] = "sName";
$proto386["m_columns"][] = "sCenter";
$proto386["m_columns"][] = "sCode";
$proto386["m_columns"][] = "sZone";
$proto386["m_columns"][] = "sType";
$obj = new SQLTable($proto386);

$proto385["m_table"] = $obj;
$proto385["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto385["m_alias"] = "";
$proto385["m_srcTableName"] = "gps_psra_daerah";
$proto387=array();
$proto387["m_sql"] = "exam_marking.sCode = school.sCode AND eType = school.sType";
$proto387["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND eType = school.sType"
));

$proto387["m_column"]=$obj;
$proto387["m_contained"] = array();
						$proto389=array();
$proto389["m_sql"] = "exam_marking.sCode = school.sCode";
$proto389["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto389["m_column"]=$obj;
$proto389["m_contained"] = array();
$proto389["m_strCase"] = "= school.sCode";
$proto389["m_havingmode"] = false;
$proto389["m_inBrackets"] = false;
$proto389["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto389);

			$proto387["m_contained"][]=$obj;
						$proto391=array();
$proto391["m_sql"] = "eType = school.sType";
$proto391["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto391["m_column"]=$obj;
$proto391["m_contained"] = array();
$proto391["m_strCase"] = "= school.sType";
$proto391["m_havingmode"] = false;
$proto391["m_inBrackets"] = false;
$proto391["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto391);

			$proto387["m_contained"][]=$obj;
$proto387["m_strCase"] = "";
$proto387["m_havingmode"] = false;
$proto387["m_inBrackets"] = false;
$proto387["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto387);

$proto385["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto385);

$proto180["m_fromlist"][]=$obj;
$proto180["m_groupby"] = array();
												$proto393=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto393["m_column"]=$obj;
$obj = new SQLGroupByItem($proto393);

$proto180["m_groupby"][]=$obj;
												$proto395=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto395["m_column"]=$obj;
$obj = new SQLGroupByItem($proto395);

$proto180["m_groupby"][]=$obj;
$proto180["m_orderby"] = array();
$proto180["m_srcTableName"]="gps_psra_daerah";		
$obj = new SQLQuery($proto180);

$proto179["m_table"] = $obj;
$proto179["m_sql"] = "(  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sZone, eYear  ) AS Sub1";
$proto179["m_alias"] = "Sub1";
$proto179["m_srcTableName"] = "gps_psra_daerah";
$proto397=array();
$proto397["m_sql"] = "";
$proto397["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto397["m_column"]=$obj;
$proto397["m_contained"] = array();
$proto397["m_strCase"] = "";
$proto397["m_havingmode"] = false;
$proto397["m_inBrackets"] = false;
$proto397["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto397);

$proto179["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto179);

$proto24["m_fromlist"][]=$obj;
$proto24["m_groupby"] = array();
$proto24["m_orderby"] = array();
$proto24["m_srcTableName"]="gps_psra_daerah";		
$obj = new SQLQuery($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "(  SELECT  sZone,  eYear,  eType,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sZone, eYear  ) AS Sub1  ) AS Sub2";
$proto23["m_alias"] = "Sub2";
$proto23["m_srcTableName"] = "gps_psra_daerah";
$proto399=array();
$proto399["m_sql"] = "";
$proto399["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto399["m_column"]=$obj;
$proto399["m_contained"] = array();
$proto399["m_strCase"] = "";
$proto399["m_havingmode"] = false;
$proto399["m_inBrackets"] = false;
$proto399["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto399);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto401=array();
						$obj = new SQLField(array(
	"m_strName" => "GPSchool",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_daerah"
));

$proto401["m_column"]=$obj;
$proto401["m_bAsc"] = 1;
$proto401["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto401);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="gps_psra_daerah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gps_psra_daerah = createSqlQuery_gps_psra_daerah();



									

$tdatagps_psra_daerah[".sqlquery"] = $queryData_gps_psra_daerah;

include_once(getabspath("include/gps_psra_daerah_events.php"));
$tableEvents["gps_psra_daerah"] = new eventclass_gps_psra_daerah;
$tdatagps_psra_daerah[".hasEvents"] = true;

$query = &$queryData_gps_psra_daerah;
$table = "gps_psra_daerah";
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