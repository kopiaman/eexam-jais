<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagps_psra_sek = array();
	$tdatagps_psra_sek[".truncateText"] = true;
	$tdatagps_psra_sek[".NumberOfChars"] = 80;
	$tdatagps_psra_sek[".ShortName"] = "gps_psra_sek";
	$tdatagps_psra_sek[".OwnerID"] = "";
	$tdatagps_psra_sek[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsgps_psra_sek = array();
$fieldToolTipsgps_psra_sek = array();
$pageTitlesgps_psra_sek = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgps_psra_sek["English"] = array();
	$fieldToolTipsgps_psra_sek["English"] = array();
	$pageTitlesgps_psra_sek["English"] = array();
	$fieldLabelsgps_psra_sek["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsgps_psra_sek["English"]["sCode"] = "";
	$fieldLabelsgps_psra_sek["English"]["eYear"] = "Tahun";
	$fieldToolTipsgps_psra_sek["English"]["eYear"] = "";
	$fieldLabelsgps_psra_sek["English"]["sZone"] = "Zon";
	$fieldToolTipsgps_psra_sek["English"]["sZone"] = "";
	$fieldLabelsgps_psra_sek["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipsgps_psra_sek["English"]["sName"] = "";
	$fieldLabelsgps_psra_sek["English"]["GPSs1"] = "AS";
	$fieldToolTipsgps_psra_sek["English"]["GPSs1"] = "";
	$fieldLabelsgps_psra_sek["English"]["GPSs2"] = "BA";
	$fieldToolTipsgps_psra_sek["English"]["GPSs2"] = "";
	$fieldLabelsgps_psra_sek["English"]["GPSs3"] = "JIK";
	$fieldToolTipsgps_psra_sek["English"]["GPSs3"] = "";
	$fieldLabelsgps_psra_sek["English"]["GPSs4"] = "TF";
	$fieldToolTipsgps_psra_sek["English"]["GPSs4"] = "";
	$fieldLabelsgps_psra_sek["English"]["GPSs5"] = "TJ";
	$fieldToolTipsgps_psra_sek["English"]["GPSs5"] = "";
	$fieldLabelsgps_psra_sek["English"]["GPSchool"] = "GPS";
	$fieldToolTipsgps_psra_sek["English"]["GPSchool"] = "";
	$fieldLabelsgps_psra_sek["English"]["skor"] = "Skor";
	$fieldToolTipsgps_psra_sek["English"]["skor"] = "";
	if (count($fieldToolTipsgps_psra_sek["English"]))
		$tdatagps_psra_sek[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgps_psra_sek[""] = array();
	$fieldToolTipsgps_psra_sek[""] = array();
	$pageTitlesgps_psra_sek[""] = array();
	if (count($fieldToolTipsgps_psra_sek[""]))
		$tdatagps_psra_sek[".isUseToolTips"] = true;
}


	$tdatagps_psra_sek[".NCSearch"] = true;



$tdatagps_psra_sek[".shortTableName"] = "gps_psra_sek";
$tdatagps_psra_sek[".nSecOptions"] = 0;
$tdatagps_psra_sek[".recsPerRowList"] = 1;
$tdatagps_psra_sek[".recsPerRowPrint"] = 1;
$tdatagps_psra_sek[".mainTableOwnerID"] = "";
$tdatagps_psra_sek[".moveNext"] = 1;
$tdatagps_psra_sek[".entityType"] = 1;

$tdatagps_psra_sek[".strOriginalTableName"] = "exam_marking";




$tdatagps_psra_sek[".showAddInPopup"] = false;

$tdatagps_psra_sek[".showEditInPopup"] = false;

$tdatagps_psra_sek[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagps_psra_sek[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagps_psra_sek[".fieldsForRegister"] = array();

$tdatagps_psra_sek[".listAjax"] = false;

	$tdatagps_psra_sek[".audit"] = false;

	$tdatagps_psra_sek[".locking"] = false;



$tdatagps_psra_sek[".list"] = true;



$tdatagps_psra_sek[".exportTo"] = true;



$tdatagps_psra_sek[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagps_psra_sek[".searchSaving"] = false;
//

$tdatagps_psra_sek[".showSearchPanel"] = true;
		$tdatagps_psra_sek[".flexibleSearch"] = true;

if (isMobile())
	$tdatagps_psra_sek[".isUseAjaxSuggest"] = false;
else
	$tdatagps_psra_sek[".isUseAjaxSuggest"] = true;

$tdatagps_psra_sek[".rowHighlite"] = true;


																			
$tdatagps_psra_sek[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagps_psra_sek[".isUseTimeForSearch"] = false;





$tdatagps_psra_sek[".allSearchFields"] = array();
$tdatagps_psra_sek[".filterFields"] = array();
$tdatagps_psra_sek[".requiredSearchFields"] = array();

$tdatagps_psra_sek[".allSearchFields"][] = "sZone";
	$tdatagps_psra_sek[".allSearchFields"][] = "sName";
	$tdatagps_psra_sek[".allSearchFields"][] = "sCode";
	$tdatagps_psra_sek[".allSearchFields"][] = "eYear";
	$tdatagps_psra_sek[".allSearchFields"][] = "GPSs1";
	$tdatagps_psra_sek[".allSearchFields"][] = "GPSs2";
	$tdatagps_psra_sek[".allSearchFields"][] = "GPSs3";
	$tdatagps_psra_sek[".allSearchFields"][] = "GPSs4";
	$tdatagps_psra_sek[".allSearchFields"][] = "GPSs5";
	$tdatagps_psra_sek[".allSearchFields"][] = "GPSchool";
	

$tdatagps_psra_sek[".googleLikeFields"] = array();
$tdatagps_psra_sek[".googleLikeFields"][] = "sName";
$tdatagps_psra_sek[".googleLikeFields"][] = "GPSs1";
$tdatagps_psra_sek[".googleLikeFields"][] = "GPSs2";
$tdatagps_psra_sek[".googleLikeFields"][] = "GPSs3";
$tdatagps_psra_sek[".googleLikeFields"][] = "GPSs4";
$tdatagps_psra_sek[".googleLikeFields"][] = "GPSs5";
$tdatagps_psra_sek[".googleLikeFields"][] = "GPSchool";

$tdatagps_psra_sek[".panelSearchFields"] = array();
$tdatagps_psra_sek[".searchPanelOptions"] = array();
$tdatagps_psra_sek[".panelSearchFields"][] = "sZone";
	$tdatagps_psra_sek[".panelSearchFields"][] = "sCode";
	$tdatagps_psra_sek[".panelSearchFields"][] = "eYear";
	
$tdatagps_psra_sek[".advSearchFields"] = array();
$tdatagps_psra_sek[".advSearchFields"][] = "sZone";
$tdatagps_psra_sek[".advSearchFields"][] = "sName";
$tdatagps_psra_sek[".advSearchFields"][] = "sCode";
$tdatagps_psra_sek[".advSearchFields"][] = "eYear";
$tdatagps_psra_sek[".advSearchFields"][] = "GPSs1";
$tdatagps_psra_sek[".advSearchFields"][] = "GPSs2";
$tdatagps_psra_sek[".advSearchFields"][] = "GPSs3";
$tdatagps_psra_sek[".advSearchFields"][] = "GPSs4";
$tdatagps_psra_sek[".advSearchFields"][] = "GPSs5";
$tdatagps_psra_sek[".advSearchFields"][] = "GPSchool";

$tdatagps_psra_sek[".tableType"] = "list";

$tdatagps_psra_sek[".printerPageOrientation"] = 0;
$tdatagps_psra_sek[".nPrinterPageScale"] = 100;

$tdatagps_psra_sek[".nPrinterSplitRecords"] = 40;

$tdatagps_psra_sek[".nPrinterPDFSplitRecords"] = 40;



$tdatagps_psra_sek[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatagps_psra_sek[".pageSize"] = 20;

$tdatagps_psra_sek[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY GPSchool";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagps_psra_sek[".strOrderBy"] = $tstrOrderBy;

$tdatagps_psra_sek[".orderindexes"] = array();
$tdatagps_psra_sek[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "GPSchool");

$tdatagps_psra_sek[".sqlHead"] = "SELECT sCode,  sZone,  eYear,  sName,  GPSs1,  GPSs2,  GPSs3,  GPSs4,  GPSs5,  GPSchool,  skor";
$tdatagps_psra_sek[".sqlFrom"] = "FROM (  SELECT  sCode,  sZone,  eYear,  eType,  sName,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY sCode, eYear  ) AS Sub1  ) AS Sub2";
$tdatagps_psra_sek[".sqlWhereExpr"] = "";
$tdatagps_psra_sek[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagps_psra_sek[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagps_psra_sek[".arrGroupsPerPage"] = $arrGPP;

$tdatagps_psra_sek[".highlightSearchResults"] = true;

$tableKeysgps_psra_sek = array();
$tableKeysgps_psra_sek[] = "sCode";
$tdatagps_psra_sek[".Keys"] = $tableKeysgps_psra_sek;

$tdatagps_psra_sek[".listFields"] = array();
$tdatagps_psra_sek[".listFields"][] = "sName";
$tdatagps_psra_sek[".listFields"][] = "sCode";
$tdatagps_psra_sek[".listFields"][] = "eYear";
$tdatagps_psra_sek[".listFields"][] = "GPSs1";
$tdatagps_psra_sek[".listFields"][] = "GPSs2";
$tdatagps_psra_sek[".listFields"][] = "GPSs3";
$tdatagps_psra_sek[".listFields"][] = "GPSs4";
$tdatagps_psra_sek[".listFields"][] = "GPSs5";
$tdatagps_psra_sek[".listFields"][] = "GPSchool";
$tdatagps_psra_sek[".listFields"][] = "skor";

$tdatagps_psra_sek[".hideMobileList"] = array();


$tdatagps_psra_sek[".viewFields"] = array();

$tdatagps_psra_sek[".addFields"] = array();

$tdatagps_psra_sek[".masterListFields"] = array();
$tdatagps_psra_sek[".masterListFields"][] = "sZone";
$tdatagps_psra_sek[".masterListFields"][] = "sName";
$tdatagps_psra_sek[".masterListFields"][] = "sCode";
$tdatagps_psra_sek[".masterListFields"][] = "eYear";
$tdatagps_psra_sek[".masterListFields"][] = "GPSs1";
$tdatagps_psra_sek[".masterListFields"][] = "GPSs2";
$tdatagps_psra_sek[".masterListFields"][] = "GPSs3";
$tdatagps_psra_sek[".masterListFields"][] = "GPSs4";
$tdatagps_psra_sek[".masterListFields"][] = "GPSs5";
$tdatagps_psra_sek[".masterListFields"][] = "GPSchool";
$tdatagps_psra_sek[".masterListFields"][] = "skor";

$tdatagps_psra_sek[".inlineAddFields"] = array();

$tdatagps_psra_sek[".editFields"] = array();

$tdatagps_psra_sek[".inlineEditFields"] = array();

$tdatagps_psra_sek[".exportFields"] = array();
$tdatagps_psra_sek[".exportFields"][] = "sName";
$tdatagps_psra_sek[".exportFields"][] = "sCode";
$tdatagps_psra_sek[".exportFields"][] = "eYear";
$tdatagps_psra_sek[".exportFields"][] = "GPSs1";
$tdatagps_psra_sek[".exportFields"][] = "GPSs2";
$tdatagps_psra_sek[".exportFields"][] = "GPSs3";
$tdatagps_psra_sek[".exportFields"][] = "GPSs4";
$tdatagps_psra_sek[".exportFields"][] = "GPSs5";
$tdatagps_psra_sek[".exportFields"][] = "GPSchool";
$tdatagps_psra_sek[".exportFields"][] = "skor";

$tdatagps_psra_sek[".importFields"] = array();

$tdatagps_psra_sek[".printFields"] = array();

//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sCode";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatagps_psra_sek["sCode"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatagps_psra_sek["sZone"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","eYear");
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




	$tdatagps_psra_sek["eYear"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sName";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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




	$tdatagps_psra_sek["sName"] = $fdata;
//	GPSs1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GPSs1";
	$fdata["GoodName"] = "GPSs1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","GPSs1");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatagps_psra_sek["GPSs1"] = $fdata;
//	GPSs2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "GPSs2";
	$fdata["GoodName"] = "GPSs2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","GPSs2");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatagps_psra_sek["GPSs2"] = $fdata;
//	GPSs3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GPSs3";
	$fdata["GoodName"] = "GPSs3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","GPSs3");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatagps_psra_sek["GPSs3"] = $fdata;
//	GPSs4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "GPSs4";
	$fdata["GoodName"] = "GPSs4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","GPSs4");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatagps_psra_sek["GPSs4"] = $fdata;
//	GPSs5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GPSs5";
	$fdata["GoodName"] = "GPSs5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","GPSs5");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatagps_psra_sek["GPSs5"] = $fdata;
//	GPSchool
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "GPSchool";
	$fdata["GoodName"] = "GPSchool";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","GPSchool");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatagps_psra_sek["GPSchool"] = $fdata;
//	skor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "skor";
	$fdata["GoodName"] = "skor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_sek","skor");
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








	$tdatagps_psra_sek["skor"] = $fdata;


$tables_data["gps_psra_sek"]=&$tdatagps_psra_sek;
$field_labels["gps_psra_sek"] = &$fieldLabelsgps_psra_sek;
$fieldToolTips["gps_psra_sek"] = &$fieldToolTipsgps_psra_sek;
$page_titles["gps_psra_sek"] = &$pageTitlesgps_psra_sek;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["gps_psra_sek"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["gps_psra_sek"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_gps_psra_sek()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sCode,  sZone,  eYear,  sName,  GPSs1,  GPSs2,  GPSs3,  GPSs4,  GPSs5,  GPSchool,  skor";
$proto0["m_strFrom"] = "FROM (  SELECT  sCode,  sZone,  eYear,  eType,  sName,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY sCode, eYear  ) AS Sub1  ) AS Sub2";
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
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto5["m_sql"] = "sCode";
$proto5["m_srcTableName"] = "gps_psra_sek";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto7["m_sql"] = "sZone";
$proto7["m_srcTableName"] = "gps_psra_sek";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto9["m_sql"] = "eYear";
$proto9["m_srcTableName"] = "gps_psra_sek";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto11["m_sql"] = "sName";
$proto11["m_srcTableName"] = "gps_psra_sek";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs1",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto13["m_sql"] = "GPSs1";
$proto13["m_srcTableName"] = "gps_psra_sek";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs2",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto15["m_sql"] = "GPSs2";
$proto15["m_srcTableName"] = "gps_psra_sek";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs3",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto17["m_sql"] = "GPSs3";
$proto17["m_srcTableName"] = "gps_psra_sek";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs4",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto19["m_sql"] = "GPSs4";
$proto19["m_srcTableName"] = "gps_psra_sek";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs5",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto21["m_sql"] = "GPSs5";
$proto21["m_srcTableName"] = "gps_psra_sek";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSchool",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto23["m_sql"] = "GPSchool";
$proto23["m_srcTableName"] = "gps_psra_sek";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "skor",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto25["m_sql"] = "skor";
$proto25["m_srcTableName"] = "gps_psra_sek";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strHead"] = "  SELECT";
$proto28["m_strFieldList"] = "sCode,  sZone,  eYear,  eType,  sName,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor";
$proto28["m_strFrom"] = "FROM (  		SELECT  sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY sCode, eYear  ) AS Sub1";
$proto28["m_strWhere"] = "";
$proto28["m_strOrderBy"] = "";
$proto28["m_strTail"] = "";
			$proto28["cipherer"] = null;
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto28["m_where"] = $obj;
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto28["m_having"] = $obj;
$proto28["m_fieldlist"] = array();
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto33["m_sql"] = "sCode";
$proto33["m_srcTableName"] = "gps_psra_sek";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto28["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto35["m_sql"] = "sZone";
$proto35["m_srcTableName"] = "gps_psra_sek";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto28["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto37["m_sql"] = "eYear";
$proto37["m_srcTableName"] = "gps_psra_sek";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto28["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto39["m_sql"] = "eType";
$proto39["m_srcTableName"] = "gps_psra_sek";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto28["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto41["m_sql"] = "sName";
$proto41["m_srcTableName"] = "gps_psra_sek";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto28["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "s1TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto43["m_sql"] = "s1TH";
$proto43["m_srcTableName"] = "gps_psra_sek";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto28["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "s1DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto45["m_sql"] = "s1DF";
$proto45["m_srcTableName"] = "gps_psra_sek";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto28["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF*5)"
));

$proto47["m_sql"] = "(s1DF*5)";
$proto47["m_srcTableName"] = "gps_psra_sek";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "s1DFn";
$obj = new SQLFieldListItem($proto47);

$proto28["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto49["m_sql"] = "s1MQ";
$proto49["m_srcTableName"] = "gps_psra_sek";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto28["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1MQ*4)"
));

$proto51["m_sql"] = "(s1MQ*4)";
$proto51["m_srcTableName"] = "gps_psra_sek";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "s1MQn";
$obj = new SQLFieldListItem($proto51);

$proto28["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto53["m_sql"] = "s1JD";
$proto53["m_srcTableName"] = "gps_psra_sek";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto28["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1JD*3)"
));

$proto55["m_sql"] = "(s1JD*3)";
$proto55["m_srcTableName"] = "gps_psra_sek";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "s1JDn";
$obj = new SQLFieldListItem($proto55);

$proto28["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto57["m_sql"] = "s1JJ";
$proto57["m_srcTableName"] = "gps_psra_sek";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto28["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1JJ*2)"
));

$proto59["m_sql"] = "(s1JJ*2)";
$proto59["m_srcTableName"] = "gps_psra_sek";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "s1JJn";
$obj = new SQLFieldListItem($proto59);

$proto28["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto61["m_sql"] = "s1MZ";
$proto61["m_srcTableName"] = "gps_psra_sek";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto28["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1MZ*1)"
));

$proto63["m_sql"] = "(s1MZ*1)";
$proto63["m_srcTableName"] = "gps_psra_sek";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "s1MZn";
$obj = new SQLFieldListItem($proto63);

$proto28["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)"
));

$proto65["m_sql"] = "(s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)";
$proto65["m_srcTableName"] = "gps_psra_sek";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "s1ngpm";
$obj = new SQLFieldListItem($proto65);

$proto28["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto67["m_sql"] = "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto67["m_srcTableName"] = "gps_psra_sek";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "s1calon";
$obj = new SQLFieldListItem($proto67);

$proto28["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ))"
));

$proto69["m_sql"] = "((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ))";
$proto69["m_srcTableName"] = "gps_psra_sek";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "GPSs1";
$obj = new SQLFieldListItem($proto69);

$proto28["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "s2TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto71["m_sql"] = "s2TH";
$proto71["m_srcTableName"] = "gps_psra_sek";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto28["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "s2DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto73["m_sql"] = "s2DF";
$proto73["m_srcTableName"] = "gps_psra_sek";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto28["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF*5)"
));

$proto75["m_sql"] = "(s2DF*5)";
$proto75["m_srcTableName"] = "gps_psra_sek";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "s2DFn";
$obj = new SQLFieldListItem($proto75);

$proto28["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto77["m_sql"] = "s2MQ";
$proto77["m_srcTableName"] = "gps_psra_sek";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto28["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2MQ*4)"
));

$proto79["m_sql"] = "(s2MQ*4)";
$proto79["m_srcTableName"] = "gps_psra_sek";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "s2MQn";
$obj = new SQLFieldListItem($proto79);

$proto28["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto81["m_sql"] = "s2JD";
$proto81["m_srcTableName"] = "gps_psra_sek";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto28["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2JD*3)"
));

$proto83["m_sql"] = "(s2JD*3)";
$proto83["m_srcTableName"] = "gps_psra_sek";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "s2JDn";
$obj = new SQLFieldListItem($proto83);

$proto28["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto85["m_sql"] = "s2JJ";
$proto85["m_srcTableName"] = "gps_psra_sek";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto28["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2JJ*2)"
));

$proto87["m_sql"] = "(s2JJ*2)";
$proto87["m_srcTableName"] = "gps_psra_sek";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "s2JJn";
$obj = new SQLFieldListItem($proto87);

$proto28["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto89["m_sql"] = "s2MZ";
$proto89["m_srcTableName"] = "gps_psra_sek";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto28["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2MZ*1)"
));

$proto91["m_sql"] = "(s2MZ*1)";
$proto91["m_srcTableName"] = "gps_psra_sek";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "s2MZn";
$obj = new SQLFieldListItem($proto91);

$proto28["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)"
));

$proto93["m_sql"] = "(s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)";
$proto93["m_srcTableName"] = "gps_psra_sek";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "s2ngpm";
$obj = new SQLFieldListItem($proto93);

$proto28["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto95["m_sql"] = "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto95["m_srcTableName"] = "gps_psra_sek";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "s2calon";
$obj = new SQLFieldListItem($proto95);

$proto28["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ))"
));

$proto97["m_sql"] = "((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ))";
$proto97["m_srcTableName"] = "gps_psra_sek";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "GPSs2";
$obj = new SQLFieldListItem($proto97);

$proto28["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "s3TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto99["m_sql"] = "s3TH";
$proto99["m_srcTableName"] = "gps_psra_sek";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto28["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "s3DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto101["m_sql"] = "s3DF";
$proto101["m_srcTableName"] = "gps_psra_sek";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto28["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF*5)"
));

$proto103["m_sql"] = "(s3DF*5)";
$proto103["m_srcTableName"] = "gps_psra_sek";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "s3DFn";
$obj = new SQLFieldListItem($proto103);

$proto28["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto105["m_sql"] = "s3MQ";
$proto105["m_srcTableName"] = "gps_psra_sek";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto28["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3MQ*4)"
));

$proto107["m_sql"] = "(s3MQ*4)";
$proto107["m_srcTableName"] = "gps_psra_sek";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "s3MQn";
$obj = new SQLFieldListItem($proto107);

$proto28["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto109["m_sql"] = "s3JD";
$proto109["m_srcTableName"] = "gps_psra_sek";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto28["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3JD*3)"
));

$proto111["m_sql"] = "(s3JD*3)";
$proto111["m_srcTableName"] = "gps_psra_sek";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "s3JDn";
$obj = new SQLFieldListItem($proto111);

$proto28["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto113["m_sql"] = "s3JJ";
$proto113["m_srcTableName"] = "gps_psra_sek";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto28["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3JJ*2)"
));

$proto115["m_sql"] = "(s3JJ*2)";
$proto115["m_srcTableName"] = "gps_psra_sek";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "s3JJn";
$obj = new SQLFieldListItem($proto115);

$proto28["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto117["m_sql"] = "s3MZ";
$proto117["m_srcTableName"] = "gps_psra_sek";
$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto28["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3MZ*1)"
));

$proto119["m_sql"] = "(s3MZ*1)";
$proto119["m_srcTableName"] = "gps_psra_sek";
$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "s3MZn";
$obj = new SQLFieldListItem($proto119);

$proto28["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)"
));

$proto121["m_sql"] = "(s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)";
$proto121["m_srcTableName"] = "gps_psra_sek";
$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "s3ngpm";
$obj = new SQLFieldListItem($proto121);

$proto28["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto123["m_sql"] = "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto123["m_srcTableName"] = "gps_psra_sek";
$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "s3calon";
$obj = new SQLFieldListItem($proto123);

$proto28["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ))"
));

$proto125["m_sql"] = "((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ))";
$proto125["m_srcTableName"] = "gps_psra_sek";
$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "GPSs3";
$obj = new SQLFieldListItem($proto125);

$proto28["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "s4TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto127["m_sql"] = "s4TH";
$proto127["m_srcTableName"] = "gps_psra_sek";
$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto28["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "s4DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto129["m_sql"] = "s4DF";
$proto129["m_srcTableName"] = "gps_psra_sek";
$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto28["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF*5)"
));

$proto131["m_sql"] = "(s4DF*5)";
$proto131["m_srcTableName"] = "gps_psra_sek";
$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "s4DFn";
$obj = new SQLFieldListItem($proto131);

$proto28["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto133["m_sql"] = "s4MQ";
$proto133["m_srcTableName"] = "gps_psra_sek";
$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto28["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4MQ*4)"
));

$proto135["m_sql"] = "(s4MQ*4)";
$proto135["m_srcTableName"] = "gps_psra_sek";
$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "s4MQn";
$obj = new SQLFieldListItem($proto135);

$proto28["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto137["m_sql"] = "s4JD";
$proto137["m_srcTableName"] = "gps_psra_sek";
$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "";
$obj = new SQLFieldListItem($proto137);

$proto28["m_fieldlist"][]=$obj;
						$proto139=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4JD*3)"
));

$proto139["m_sql"] = "(s4JD*3)";
$proto139["m_srcTableName"] = "gps_psra_sek";
$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "s4JDn";
$obj = new SQLFieldListItem($proto139);

$proto28["m_fieldlist"][]=$obj;
						$proto141=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto141["m_sql"] = "s4JJ";
$proto141["m_srcTableName"] = "gps_psra_sek";
$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "";
$obj = new SQLFieldListItem($proto141);

$proto28["m_fieldlist"][]=$obj;
						$proto143=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4JJ*2)"
));

$proto143["m_sql"] = "(s4JJ*2)";
$proto143["m_srcTableName"] = "gps_psra_sek";
$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "s4JJn";
$obj = new SQLFieldListItem($proto143);

$proto28["m_fieldlist"][]=$obj;
						$proto145=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto145["m_sql"] = "s4MZ";
$proto145["m_srcTableName"] = "gps_psra_sek";
$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "";
$obj = new SQLFieldListItem($proto145);

$proto28["m_fieldlist"][]=$obj;
						$proto147=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4MZ*1)"
));

$proto147["m_sql"] = "(s4MZ*1)";
$proto147["m_srcTableName"] = "gps_psra_sek";
$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "s4MZn";
$obj = new SQLFieldListItem($proto147);

$proto28["m_fieldlist"][]=$obj;
						$proto149=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)"
));

$proto149["m_sql"] = "(s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)";
$proto149["m_srcTableName"] = "gps_psra_sek";
$proto149["m_expr"]=$obj;
$proto149["m_alias"] = "s4ngpm";
$obj = new SQLFieldListItem($proto149);

$proto28["m_fieldlist"][]=$obj;
						$proto151=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto151["m_sql"] = "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto151["m_srcTableName"] = "gps_psra_sek";
$proto151["m_expr"]=$obj;
$proto151["m_alias"] = "s4calon";
$obj = new SQLFieldListItem($proto151);

$proto28["m_fieldlist"][]=$obj;
						$proto153=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ))"
));

$proto153["m_sql"] = "((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ))";
$proto153["m_srcTableName"] = "gps_psra_sek";
$proto153["m_expr"]=$obj;
$proto153["m_alias"] = "GPSs4";
$obj = new SQLFieldListItem($proto153);

$proto28["m_fieldlist"][]=$obj;
						$proto155=array();
			$obj = new SQLField(array(
	"m_strName" => "s5TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto155["m_sql"] = "s5TH";
$proto155["m_srcTableName"] = "gps_psra_sek";
$proto155["m_expr"]=$obj;
$proto155["m_alias"] = "";
$obj = new SQLFieldListItem($proto155);

$proto28["m_fieldlist"][]=$obj;
						$proto157=array();
			$obj = new SQLField(array(
	"m_strName" => "s5DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto157["m_sql"] = "s5DF";
$proto157["m_srcTableName"] = "gps_psra_sek";
$proto157["m_expr"]=$obj;
$proto157["m_alias"] = "";
$obj = new SQLFieldListItem($proto157);

$proto28["m_fieldlist"][]=$obj;
						$proto159=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF*5)"
));

$proto159["m_sql"] = "(s5DF*5)";
$proto159["m_srcTableName"] = "gps_psra_sek";
$proto159["m_expr"]=$obj;
$proto159["m_alias"] = "s5DFn";
$obj = new SQLFieldListItem($proto159);

$proto28["m_fieldlist"][]=$obj;
						$proto161=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto161["m_sql"] = "s5MQ";
$proto161["m_srcTableName"] = "gps_psra_sek";
$proto161["m_expr"]=$obj;
$proto161["m_alias"] = "";
$obj = new SQLFieldListItem($proto161);

$proto28["m_fieldlist"][]=$obj;
						$proto163=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5MQ*4)"
));

$proto163["m_sql"] = "(s5MQ*4)";
$proto163["m_srcTableName"] = "gps_psra_sek";
$proto163["m_expr"]=$obj;
$proto163["m_alias"] = "s5MQn";
$obj = new SQLFieldListItem($proto163);

$proto28["m_fieldlist"][]=$obj;
						$proto165=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto165["m_sql"] = "s5JD";
$proto165["m_srcTableName"] = "gps_psra_sek";
$proto165["m_expr"]=$obj;
$proto165["m_alias"] = "";
$obj = new SQLFieldListItem($proto165);

$proto28["m_fieldlist"][]=$obj;
						$proto167=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5JD*3)"
));

$proto167["m_sql"] = "(s5JD*3)";
$proto167["m_srcTableName"] = "gps_psra_sek";
$proto167["m_expr"]=$obj;
$proto167["m_alias"] = "s5JDn";
$obj = new SQLFieldListItem($proto167);

$proto28["m_fieldlist"][]=$obj;
						$proto169=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto169["m_sql"] = "s5JJ";
$proto169["m_srcTableName"] = "gps_psra_sek";
$proto169["m_expr"]=$obj;
$proto169["m_alias"] = "";
$obj = new SQLFieldListItem($proto169);

$proto28["m_fieldlist"][]=$obj;
						$proto171=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5JJ*2)"
));

$proto171["m_sql"] = "(s5JJ*2)";
$proto171["m_srcTableName"] = "gps_psra_sek";
$proto171["m_expr"]=$obj;
$proto171["m_alias"] = "s5JJn";
$obj = new SQLFieldListItem($proto171);

$proto28["m_fieldlist"][]=$obj;
						$proto173=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_sek"
));

$proto173["m_sql"] = "s5MZ";
$proto173["m_srcTableName"] = "gps_psra_sek";
$proto173["m_expr"]=$obj;
$proto173["m_alias"] = "";
$obj = new SQLFieldListItem($proto173);

$proto28["m_fieldlist"][]=$obj;
						$proto175=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5MZ*1)"
));

$proto175["m_sql"] = "(s5MZ*1)";
$proto175["m_srcTableName"] = "gps_psra_sek";
$proto175["m_expr"]=$obj;
$proto175["m_alias"] = "s5MZn";
$obj = new SQLFieldListItem($proto175);

$proto28["m_fieldlist"][]=$obj;
						$proto177=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)"
));

$proto177["m_sql"] = "(s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)";
$proto177["m_srcTableName"] = "gps_psra_sek";
$proto177["m_expr"]=$obj;
$proto177["m_alias"] = "s5ngpm";
$obj = new SQLFieldListItem($proto177);

$proto28["m_fieldlist"][]=$obj;
						$proto179=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto179["m_sql"] = "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto179["m_srcTableName"] = "gps_psra_sek";
$proto179["m_expr"]=$obj;
$proto179["m_alias"] = "s5calon";
$obj = new SQLFieldListItem($proto179);

$proto28["m_fieldlist"][]=$obj;
						$proto181=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ))"
));

$proto181["m_sql"] = "((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ))";
$proto181["m_srcTableName"] = "gps_psra_sek";
$proto181["m_expr"]=$obj;
$proto181["m_alias"] = "GPSs5";
$obj = new SQLFieldListItem($proto181);

$proto28["m_fieldlist"][]=$obj;
						$proto183=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5"
));

$proto183["m_sql"] = "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5";
$proto183["m_srcTableName"] = "gps_psra_sek";
$proto183["m_expr"]=$obj;
$proto183["m_alias"] = "GPSchool";
$obj = new SQLFieldListItem($proto183);

$proto28["m_fieldlist"][]=$obj;
						$proto185=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5"
));

$proto185["m_sql"] = "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5";
$proto185["m_srcTableName"] = "gps_psra_sek";
$proto185["m_expr"]=$obj;
$proto185["m_alias"] = "skor";
$obj = new SQLFieldListItem($proto185);

$proto28["m_fieldlist"][]=$obj;
$proto28["m_fromlist"] = array();
												$proto187=array();
$proto187["m_link"] = "SQLL_MAIN";
			$proto188=array();
$proto188["m_strHead"] = "  		SELECT";
$proto188["m_strFieldList"] = "sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName";
$proto188["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto188["m_strWhere"] = "eType ='PSRA'";
$proto188["m_strOrderBy"] = "";
$proto188["m_strTail"] = "";
			$proto188["cipherer"] = null;
$proto189=array();
$proto189["m_sql"] = "eType ='PSRA'";
$proto189["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto189["m_column"]=$obj;
$proto189["m_contained"] = array();
$proto189["m_strCase"] = "='PSRA'";
$proto189["m_havingmode"] = false;
$proto189["m_inBrackets"] = false;
$proto189["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto189);

$proto188["m_where"] = $obj;
$proto191=array();
$proto191["m_sql"] = "";
$proto191["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto191["m_column"]=$obj;
$proto191["m_contained"] = array();
$proto191["m_strCase"] = "";
$proto191["m_havingmode"] = false;
$proto191["m_inBrackets"] = false;
$proto191["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto191);

$proto188["m_having"] = $obj;
$proto188["m_fieldlist"] = array();
						$proto193=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto193["m_sql"] = "sid";
$proto193["m_srcTableName"] = "gps_psra_sek";
$proto193["m_expr"]=$obj;
$proto193["m_alias"] = "";
$obj = new SQLFieldListItem($proto193);

$proto188["m_fieldlist"][]=$obj;
						$proto195=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto195["m_sql"] = "exam_marking.sCode";
$proto195["m_srcTableName"] = "gps_psra_sek";
$proto195["m_expr"]=$obj;
$proto195["m_alias"] = "";
$obj = new SQLFieldListItem($proto195);

$proto188["m_fieldlist"][]=$obj;
						$proto197=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto197["m_sql"] = "exam_marking.eYear";
$proto197["m_srcTableName"] = "gps_psra_sek";
$proto197["m_expr"]=$obj;
$proto197["m_alias"] = "";
$obj = new SQLFieldListItem($proto197);

$proto188["m_fieldlist"][]=$obj;
						$proto199=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto199["m_sql"] = "exam_marking.eType";
$proto199["m_srcTableName"] = "gps_psra_sek";
$proto199["m_expr"]=$obj;
$proto199["m_alias"] = "";
$obj = new SQLFieldListItem($proto199);

$proto188["m_fieldlist"][]=$obj;
						$proto201=array();
			$proto202=array();
$proto202["m_functiontype"] = "SQLF_COUNT";
$proto202["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto202["m_arguments"][]=$obj;
$proto202["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto202);

$proto201["m_sql"] = "COUNT(sid)";
$proto201["m_srcTableName"] = "gps_psra_sek";
$proto201["m_expr"]=$obj;
$proto201["m_alias"] = "totalCalon";
$obj = new SQLFieldListItem($proto201);

$proto188["m_fieldlist"][]=$obj;
						$proto204=array();
			$proto205=array();
$proto205["m_functiontype"] = "SQLF_COUNT";
$proto205["m_arguments"] = array();
						$proto206=array();
$proto206["m_functiontype"] = "SQLF_CUSTOM";
$proto206["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1='TH'"
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

$proto204["m_sql"] = "COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL))";
$proto204["m_srcTableName"] = "gps_psra_sek";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "s1TH";
$obj = new SQLFieldListItem($proto204);

$proto188["m_fieldlist"][]=$obj;
						$proto210=array();
			$proto211=array();
$proto211["m_functiontype"] = "SQLF_COUNT";
$proto211["m_arguments"] = array();
						$proto212=array();
$proto212["m_functiontype"] = "SQLF_CUSTOM";
$proto212["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1!='TH' AND exam_marking.s1<40"
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

$proto210["m_sql"] = "COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL))";
$proto210["m_srcTableName"] = "gps_psra_sek";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "s1DF";
$obj = new SQLFieldListItem($proto210);

$proto188["m_fieldlist"][]=$obj;
						$proto216=array();
			$proto217=array();
$proto217["m_functiontype"] = "SQLF_COUNT";
$proto217["m_arguments"] = array();
						$proto218=array();
$proto218["m_functiontype"] = "SQLF_CUSTOM";
$proto218["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=40 AND exam_marking.s1<60"
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

$proto216["m_sql"] = "COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL))";
$proto216["m_srcTableName"] = "gps_psra_sek";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "s1MQ";
$obj = new SQLFieldListItem($proto216);

$proto188["m_fieldlist"][]=$obj;
						$proto222=array();
			$proto223=array();
$proto223["m_functiontype"] = "SQLF_COUNT";
$proto223["m_arguments"] = array();
						$proto224=array();
$proto224["m_functiontype"] = "SQLF_CUSTOM";
$proto224["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=60 AND exam_marking.s1<75"
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

$proto222["m_sql"] = "COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL))";
$proto222["m_srcTableName"] = "gps_psra_sek";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "s1JD";
$obj = new SQLFieldListItem($proto222);

$proto188["m_fieldlist"][]=$obj;
						$proto228=array();
			$proto229=array();
$proto229["m_functiontype"] = "SQLF_COUNT";
$proto229["m_arguments"] = array();
						$proto230=array();
$proto230["m_functiontype"] = "SQLF_CUSTOM";
$proto230["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=75 AND exam_marking.s1<90"
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

$proto228["m_sql"] = "COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL))";
$proto228["m_srcTableName"] = "gps_psra_sek";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "s1JJ";
$obj = new SQLFieldListItem($proto228);

$proto188["m_fieldlist"][]=$obj;
						$proto234=array();
			$proto235=array();
$proto235["m_functiontype"] = "SQLF_COUNT";
$proto235["m_arguments"] = array();
						$proto236=array();
$proto236["m_functiontype"] = "SQLF_CUSTOM";
$proto236["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=90"
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

$proto234["m_sql"] = "COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL))";
$proto234["m_srcTableName"] = "gps_psra_sek";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "s1MZ";
$obj = new SQLFieldListItem($proto234);

$proto188["m_fieldlist"][]=$obj;
						$proto240=array();
			$proto241=array();
$proto241["m_functiontype"] = "SQLF_COUNT";
$proto241["m_arguments"] = array();
						$proto242=array();
$proto242["m_functiontype"] = "SQLF_CUSTOM";
$proto242["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2='TH'"
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

$proto240["m_sql"] = "COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL))";
$proto240["m_srcTableName"] = "gps_psra_sek";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "s2TH";
$obj = new SQLFieldListItem($proto240);

$proto188["m_fieldlist"][]=$obj;
						$proto246=array();
			$proto247=array();
$proto247["m_functiontype"] = "SQLF_COUNT";
$proto247["m_arguments"] = array();
						$proto248=array();
$proto248["m_functiontype"] = "SQLF_CUSTOM";
$proto248["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2!='TH' AND exam_marking.s2<40"
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

$proto246["m_sql"] = "COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL))";
$proto246["m_srcTableName"] = "gps_psra_sek";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "s2DF";
$obj = new SQLFieldListItem($proto246);

$proto188["m_fieldlist"][]=$obj;
						$proto252=array();
			$proto253=array();
$proto253["m_functiontype"] = "SQLF_COUNT";
$proto253["m_arguments"] = array();
						$proto254=array();
$proto254["m_functiontype"] = "SQLF_CUSTOM";
$proto254["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=40 AND exam_marking.s2<60"
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

$proto252["m_sql"] = "COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL))";
$proto252["m_srcTableName"] = "gps_psra_sek";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "s2MQ";
$obj = new SQLFieldListItem($proto252);

$proto188["m_fieldlist"][]=$obj;
						$proto258=array();
			$proto259=array();
$proto259["m_functiontype"] = "SQLF_COUNT";
$proto259["m_arguments"] = array();
						$proto260=array();
$proto260["m_functiontype"] = "SQLF_CUSTOM";
$proto260["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=60 AND exam_marking.s2<75"
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

$proto258["m_sql"] = "COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL))";
$proto258["m_srcTableName"] = "gps_psra_sek";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "s2JD";
$obj = new SQLFieldListItem($proto258);

$proto188["m_fieldlist"][]=$obj;
						$proto264=array();
			$proto265=array();
$proto265["m_functiontype"] = "SQLF_COUNT";
$proto265["m_arguments"] = array();
						$proto266=array();
$proto266["m_functiontype"] = "SQLF_CUSTOM";
$proto266["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=75 AND exam_marking.s2<90"
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

$proto264["m_sql"] = "COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL))";
$proto264["m_srcTableName"] = "gps_psra_sek";
$proto264["m_expr"]=$obj;
$proto264["m_alias"] = "s2JJ";
$obj = new SQLFieldListItem($proto264);

$proto188["m_fieldlist"][]=$obj;
						$proto270=array();
			$proto271=array();
$proto271["m_functiontype"] = "SQLF_COUNT";
$proto271["m_arguments"] = array();
						$proto272=array();
$proto272["m_functiontype"] = "SQLF_CUSTOM";
$proto272["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=90"
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

$proto270["m_sql"] = "COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL))";
$proto270["m_srcTableName"] = "gps_psra_sek";
$proto270["m_expr"]=$obj;
$proto270["m_alias"] = "s2MZ";
$obj = new SQLFieldListItem($proto270);

$proto188["m_fieldlist"][]=$obj;
						$proto276=array();
			$proto277=array();
$proto277["m_functiontype"] = "SQLF_COUNT";
$proto277["m_arguments"] = array();
						$proto278=array();
$proto278["m_functiontype"] = "SQLF_CUSTOM";
$proto278["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3='TH'"
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

$proto276["m_sql"] = "COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL))";
$proto276["m_srcTableName"] = "gps_psra_sek";
$proto276["m_expr"]=$obj;
$proto276["m_alias"] = "s3TH";
$obj = new SQLFieldListItem($proto276);

$proto188["m_fieldlist"][]=$obj;
						$proto282=array();
			$proto283=array();
$proto283["m_functiontype"] = "SQLF_COUNT";
$proto283["m_arguments"] = array();
						$proto284=array();
$proto284["m_functiontype"] = "SQLF_CUSTOM";
$proto284["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3!='TH' AND exam_marking.s3<40"
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

$proto282["m_sql"] = "COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL))";
$proto282["m_srcTableName"] = "gps_psra_sek";
$proto282["m_expr"]=$obj;
$proto282["m_alias"] = "s3DF";
$obj = new SQLFieldListItem($proto282);

$proto188["m_fieldlist"][]=$obj;
						$proto288=array();
			$proto289=array();
$proto289["m_functiontype"] = "SQLF_COUNT";
$proto289["m_arguments"] = array();
						$proto290=array();
$proto290["m_functiontype"] = "SQLF_CUSTOM";
$proto290["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=40 AND exam_marking.s3<60"
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

$proto288["m_sql"] = "COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL))";
$proto288["m_srcTableName"] = "gps_psra_sek";
$proto288["m_expr"]=$obj;
$proto288["m_alias"] = "s3MQ";
$obj = new SQLFieldListItem($proto288);

$proto188["m_fieldlist"][]=$obj;
						$proto294=array();
			$proto295=array();
$proto295["m_functiontype"] = "SQLF_COUNT";
$proto295["m_arguments"] = array();
						$proto296=array();
$proto296["m_functiontype"] = "SQLF_CUSTOM";
$proto296["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=60 AND exam_marking.s3<75"
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

$proto294["m_sql"] = "COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL))";
$proto294["m_srcTableName"] = "gps_psra_sek";
$proto294["m_expr"]=$obj;
$proto294["m_alias"] = "s3JD";
$obj = new SQLFieldListItem($proto294);

$proto188["m_fieldlist"][]=$obj;
						$proto300=array();
			$proto301=array();
$proto301["m_functiontype"] = "SQLF_COUNT";
$proto301["m_arguments"] = array();
						$proto302=array();
$proto302["m_functiontype"] = "SQLF_CUSTOM";
$proto302["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=75 AND exam_marking.s3<90"
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

$proto300["m_sql"] = "COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL))";
$proto300["m_srcTableName"] = "gps_psra_sek";
$proto300["m_expr"]=$obj;
$proto300["m_alias"] = "s3JJ";
$obj = new SQLFieldListItem($proto300);

$proto188["m_fieldlist"][]=$obj;
						$proto306=array();
			$proto307=array();
$proto307["m_functiontype"] = "SQLF_COUNT";
$proto307["m_arguments"] = array();
						$proto308=array();
$proto308["m_functiontype"] = "SQLF_CUSTOM";
$proto308["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=90"
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

$proto306["m_sql"] = "COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL))";
$proto306["m_srcTableName"] = "gps_psra_sek";
$proto306["m_expr"]=$obj;
$proto306["m_alias"] = "s3MZ";
$obj = new SQLFieldListItem($proto306);

$proto188["m_fieldlist"][]=$obj;
						$proto312=array();
			$proto313=array();
$proto313["m_functiontype"] = "SQLF_COUNT";
$proto313["m_arguments"] = array();
						$proto314=array();
$proto314["m_functiontype"] = "SQLF_CUSTOM";
$proto314["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4='TH'"
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

$proto312["m_sql"] = "COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL))";
$proto312["m_srcTableName"] = "gps_psra_sek";
$proto312["m_expr"]=$obj;
$proto312["m_alias"] = "s4TH";
$obj = new SQLFieldListItem($proto312);

$proto188["m_fieldlist"][]=$obj;
						$proto318=array();
			$proto319=array();
$proto319["m_functiontype"] = "SQLF_COUNT";
$proto319["m_arguments"] = array();
						$proto320=array();
$proto320["m_functiontype"] = "SQLF_CUSTOM";
$proto320["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4!='TH' AND exam_marking.s4<40"
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

$proto318["m_sql"] = "COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL))";
$proto318["m_srcTableName"] = "gps_psra_sek";
$proto318["m_expr"]=$obj;
$proto318["m_alias"] = "s4DF";
$obj = new SQLFieldListItem($proto318);

$proto188["m_fieldlist"][]=$obj;
						$proto324=array();
			$proto325=array();
$proto325["m_functiontype"] = "SQLF_COUNT";
$proto325["m_arguments"] = array();
						$proto326=array();
$proto326["m_functiontype"] = "SQLF_CUSTOM";
$proto326["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=40 AND exam_marking.s4<60"
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

$proto324["m_sql"] = "COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL))";
$proto324["m_srcTableName"] = "gps_psra_sek";
$proto324["m_expr"]=$obj;
$proto324["m_alias"] = "s4MQ";
$obj = new SQLFieldListItem($proto324);

$proto188["m_fieldlist"][]=$obj;
						$proto330=array();
			$proto331=array();
$proto331["m_functiontype"] = "SQLF_COUNT";
$proto331["m_arguments"] = array();
						$proto332=array();
$proto332["m_functiontype"] = "SQLF_CUSTOM";
$proto332["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=60 AND exam_marking.s4<75"
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

$proto330["m_sql"] = "COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL))";
$proto330["m_srcTableName"] = "gps_psra_sek";
$proto330["m_expr"]=$obj;
$proto330["m_alias"] = "s4JD";
$obj = new SQLFieldListItem($proto330);

$proto188["m_fieldlist"][]=$obj;
						$proto336=array();
			$proto337=array();
$proto337["m_functiontype"] = "SQLF_COUNT";
$proto337["m_arguments"] = array();
						$proto338=array();
$proto338["m_functiontype"] = "SQLF_CUSTOM";
$proto338["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=75 AND exam_marking.s4<90"
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

$proto336["m_sql"] = "COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL))";
$proto336["m_srcTableName"] = "gps_psra_sek";
$proto336["m_expr"]=$obj;
$proto336["m_alias"] = "s4JJ";
$obj = new SQLFieldListItem($proto336);

$proto188["m_fieldlist"][]=$obj;
						$proto342=array();
			$proto343=array();
$proto343["m_functiontype"] = "SQLF_COUNT";
$proto343["m_arguments"] = array();
						$proto344=array();
$proto344["m_functiontype"] = "SQLF_CUSTOM";
$proto344["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=90"
));

$proto344["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto344["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto344["m_arguments"][]=$obj;
$proto344["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto344);

$proto343["m_arguments"][]=$obj;
$proto343["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto343);

$proto342["m_sql"] = "COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL))";
$proto342["m_srcTableName"] = "gps_psra_sek";
$proto342["m_expr"]=$obj;
$proto342["m_alias"] = "s4MZ";
$obj = new SQLFieldListItem($proto342);

$proto188["m_fieldlist"][]=$obj;
						$proto348=array();
			$proto349=array();
$proto349["m_functiontype"] = "SQLF_COUNT";
$proto349["m_arguments"] = array();
						$proto350=array();
$proto350["m_functiontype"] = "SQLF_CUSTOM";
$proto350["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5='TH'"
));

$proto350["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto350["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto350["m_arguments"][]=$obj;
$proto350["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto350);

$proto349["m_arguments"][]=$obj;
$proto349["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto349);

$proto348["m_sql"] = "COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL))";
$proto348["m_srcTableName"] = "gps_psra_sek";
$proto348["m_expr"]=$obj;
$proto348["m_alias"] = "s5TH";
$obj = new SQLFieldListItem($proto348);

$proto188["m_fieldlist"][]=$obj;
						$proto354=array();
			$proto355=array();
$proto355["m_functiontype"] = "SQLF_COUNT";
$proto355["m_arguments"] = array();
						$proto356=array();
$proto356["m_functiontype"] = "SQLF_CUSTOM";
$proto356["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5!='TH' AND exam_marking.s5<40"
));

$proto356["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto356["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto356["m_arguments"][]=$obj;
$proto356["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto356);

$proto355["m_arguments"][]=$obj;
$proto355["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto355);

$proto354["m_sql"] = "COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL))";
$proto354["m_srcTableName"] = "gps_psra_sek";
$proto354["m_expr"]=$obj;
$proto354["m_alias"] = "s5DF";
$obj = new SQLFieldListItem($proto354);

$proto188["m_fieldlist"][]=$obj;
						$proto360=array();
			$proto361=array();
$proto361["m_functiontype"] = "SQLF_COUNT";
$proto361["m_arguments"] = array();
						$proto362=array();
$proto362["m_functiontype"] = "SQLF_CUSTOM";
$proto362["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=40 AND exam_marking.s5<60"
));

$proto362["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto362["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto362["m_arguments"][]=$obj;
$proto362["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto362);

$proto361["m_arguments"][]=$obj;
$proto361["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto361);

$proto360["m_sql"] = "COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL))";
$proto360["m_srcTableName"] = "gps_psra_sek";
$proto360["m_expr"]=$obj;
$proto360["m_alias"] = "s5MQ";
$obj = new SQLFieldListItem($proto360);

$proto188["m_fieldlist"][]=$obj;
						$proto366=array();
			$proto367=array();
$proto367["m_functiontype"] = "SQLF_COUNT";
$proto367["m_arguments"] = array();
						$proto368=array();
$proto368["m_functiontype"] = "SQLF_CUSTOM";
$proto368["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=60 AND exam_marking.s5<75"
));

$proto368["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto368["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto368["m_arguments"][]=$obj;
$proto368["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto368);

$proto367["m_arguments"][]=$obj;
$proto367["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto367);

$proto366["m_sql"] = "COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL))";
$proto366["m_srcTableName"] = "gps_psra_sek";
$proto366["m_expr"]=$obj;
$proto366["m_alias"] = "s5JD";
$obj = new SQLFieldListItem($proto366);

$proto188["m_fieldlist"][]=$obj;
						$proto372=array();
			$proto373=array();
$proto373["m_functiontype"] = "SQLF_COUNT";
$proto373["m_arguments"] = array();
						$proto374=array();
$proto374["m_functiontype"] = "SQLF_CUSTOM";
$proto374["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=75 AND exam_marking.s5<90"
));

$proto374["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto374["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto374["m_arguments"][]=$obj;
$proto374["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto374);

$proto373["m_arguments"][]=$obj;
$proto373["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto373);

$proto372["m_sql"] = "COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL))";
$proto372["m_srcTableName"] = "gps_psra_sek";
$proto372["m_expr"]=$obj;
$proto372["m_alias"] = "s5JJ";
$obj = new SQLFieldListItem($proto372);

$proto188["m_fieldlist"][]=$obj;
						$proto378=array();
			$proto379=array();
$proto379["m_functiontype"] = "SQLF_COUNT";
$proto379["m_arguments"] = array();
						$proto380=array();
$proto380["m_functiontype"] = "SQLF_CUSTOM";
$proto380["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=90"
));

$proto380["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto380["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto380["m_arguments"][]=$obj;
$proto380["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto380);

$proto379["m_arguments"][]=$obj;
$proto379["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto379);

$proto378["m_sql"] = "COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL))";
$proto378["m_srcTableName"] = "gps_psra_sek";
$proto378["m_expr"]=$obj;
$proto378["m_alias"] = "s5MZ";
$obj = new SQLFieldListItem($proto378);

$proto188["m_fieldlist"][]=$obj;
						$proto384=array();
			$proto385=array();
$proto385["m_functiontype"] = "SQLF_SUM";
$proto385["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5"
));

$proto385["m_arguments"][]=$obj;
$proto385["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto385);

$proto384["m_sql"] = "SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5)";
$proto384["m_srcTableName"] = "gps_psra_sek";
$proto384["m_expr"]=$obj;
$proto384["m_alias"] = "totalMark";
$obj = new SQLFieldListItem($proto384);

$proto188["m_fieldlist"][]=$obj;
						$proto387=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto387["m_sql"] = "sZone";
$proto387["m_srcTableName"] = "gps_psra_sek";
$proto387["m_expr"]=$obj;
$proto387["m_alias"] = "";
$obj = new SQLFieldListItem($proto387);

$proto188["m_fieldlist"][]=$obj;
						$proto389=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto389["m_sql"] = "sName";
$proto389["m_srcTableName"] = "gps_psra_sek";
$proto389["m_expr"]=$obj;
$proto389["m_alias"] = "";
$obj = new SQLFieldListItem($proto389);

$proto188["m_fieldlist"][]=$obj;
$proto188["m_fromlist"] = array();
												$proto391=array();
$proto391["m_link"] = "SQLL_MAIN";
			$proto392=array();
$proto392["m_strName"] = "exam_marking";
$proto392["m_srcTableName"] = "gps_psra_sek";
$proto392["m_columns"] = array();
$proto392["m_columns"][] = "sid";
$proto392["m_columns"][] = "name";
$proto392["m_columns"][] = "gender";
$proto392["m_columns"][] = "birthdate";
$proto392["m_columns"][] = "birthCert";
$proto392["m_columns"][] = "nationality";
$proto392["m_columns"][] = "sCode";
$proto392["m_columns"][] = "eNo";
$proto392["m_columns"][] = "eYear";
$proto392["m_columns"][] = "eType";
$proto392["m_columns"][] = "s1";
$proto392["m_columns"][] = "s2";
$proto392["m_columns"][] = "s3";
$proto392["m_columns"][] = "s4";
$proto392["m_columns"][] = "s5";
$proto392["m_columns"][] = "s6";
$proto392["m_columns"][] = "s7";
$obj = new SQLTable($proto392);

$proto391["m_table"] = $obj;
$proto391["m_sql"] = "exam_marking";
$proto391["m_alias"] = "";
$proto391["m_srcTableName"] = "gps_psra_sek";
$proto393=array();
$proto393["m_sql"] = "";
$proto393["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto393["m_column"]=$obj;
$proto393["m_contained"] = array();
$proto393["m_strCase"] = "";
$proto393["m_havingmode"] = false;
$proto393["m_inBrackets"] = false;
$proto393["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto393);

$proto391["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto391);

$proto188["m_fromlist"][]=$obj;
												$proto395=array();
$proto395["m_link"] = "SQLL_INNERJOIN";
			$proto396=array();
$proto396["m_strName"] = "school";
$proto396["m_srcTableName"] = "gps_psra_sek";
$proto396["m_columns"] = array();
$proto396["m_columns"][] = "sno";
$proto396["m_columns"][] = "sName";
$proto396["m_columns"][] = "sCenter";
$proto396["m_columns"][] = "sCode";
$proto396["m_columns"][] = "sZone";
$proto396["m_columns"][] = "sType";
$obj = new SQLTable($proto396);

$proto395["m_table"] = $obj;
$proto395["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto395["m_alias"] = "";
$proto395["m_srcTableName"] = "gps_psra_sek";
$proto397=array();
$proto397["m_sql"] = "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto397["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType"
));

$proto397["m_column"]=$obj;
$proto397["m_contained"] = array();
						$proto399=array();
$proto399["m_sql"] = "exam_marking.sCode = school.sCode";
$proto399["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto399["m_column"]=$obj;
$proto399["m_contained"] = array();
$proto399["m_strCase"] = "= school.sCode";
$proto399["m_havingmode"] = false;
$proto399["m_inBrackets"] = false;
$proto399["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto399);

			$proto397["m_contained"][]=$obj;
						$proto401=array();
$proto401["m_sql"] = "exam_marking.eType = school.sType";
$proto401["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto401["m_column"]=$obj;
$proto401["m_contained"] = array();
$proto401["m_strCase"] = "= school.sType";
$proto401["m_havingmode"] = false;
$proto401["m_inBrackets"] = false;
$proto401["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto401);

			$proto397["m_contained"][]=$obj;
$proto397["m_strCase"] = "";
$proto397["m_havingmode"] = false;
$proto397["m_inBrackets"] = false;
$proto397["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto397);

$proto395["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto395);

$proto188["m_fromlist"][]=$obj;
$proto188["m_groupby"] = array();
												$proto403=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto403["m_column"]=$obj;
$obj = new SQLGroupByItem($proto403);

$proto188["m_groupby"][]=$obj;
												$proto405=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_sek"
));

$proto405["m_column"]=$obj;
$obj = new SQLGroupByItem($proto405);

$proto188["m_groupby"][]=$obj;
$proto188["m_orderby"] = array();
$proto188["m_srcTableName"]="gps_psra_sek";		
$obj = new SQLQuery($proto188);

$proto187["m_table"] = $obj;
$proto187["m_sql"] = "(  		SELECT  sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY sCode, eYear  ) AS Sub1";
$proto187["m_alias"] = "Sub1";
$proto187["m_srcTableName"] = "gps_psra_sek";
$proto407=array();
$proto407["m_sql"] = "";
$proto407["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto407["m_column"]=$obj;
$proto407["m_contained"] = array();
$proto407["m_strCase"] = "";
$proto407["m_havingmode"] = false;
$proto407["m_inBrackets"] = false;
$proto407["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto407);

$proto187["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto187);

$proto28["m_fromlist"][]=$obj;
$proto28["m_groupby"] = array();
$proto28["m_orderby"] = array();
$proto28["m_srcTableName"]="gps_psra_sek";		
$obj = new SQLQuery($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "(  SELECT  sCode,  sZone,  eYear,  eType,  sName,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY sCode, eYear  ) AS Sub1  ) AS Sub2";
$proto27["m_alias"] = "Sub2";
$proto27["m_srcTableName"] = "gps_psra_sek";
$proto409=array();
$proto409["m_sql"] = "";
$proto409["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto409["m_column"]=$obj;
$proto409["m_contained"] = array();
$proto409["m_strCase"] = "";
$proto409["m_havingmode"] = false;
$proto409["m_inBrackets"] = false;
$proto409["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto409);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto411=array();
						$obj = new SQLField(array(
	"m_strName" => "GPSchool",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_sek"
));

$proto411["m_column"]=$obj;
$proto411["m_bAsc"] = 1;
$proto411["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto411);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="gps_psra_sek";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gps_psra_sek = createSqlQuery_gps_psra_sek();



											

$tdatagps_psra_sek[".sqlquery"] = $queryData_gps_psra_sek;

include_once(getabspath("include/gps_psra_sek_events.php"));
$tableEvents["gps_psra_sek"] = new eventclass_gps_psra_sek;
$tdatagps_psra_sek[".hasEvents"] = true;

$query = &$queryData_gps_psra_sek;
$table = "gps_psra_sek";
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