<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagps_psra_all = array();
	$tdatagps_psra_all[".truncateText"] = true;
	$tdatagps_psra_all[".NumberOfChars"] = 80;
	$tdatagps_psra_all[".ShortName"] = "gps_psra_all";
	$tdatagps_psra_all[".OwnerID"] = "";
	$tdatagps_psra_all[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsgps_psra_all = array();
$fieldToolTipsgps_psra_all = array();
$pageTitlesgps_psra_all = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgps_psra_all["English"] = array();
	$fieldToolTipsgps_psra_all["English"] = array();
	$pageTitlesgps_psra_all["English"] = array();
	$fieldLabelsgps_psra_all["English"]["eYear"] = "Tahun";
	$fieldToolTipsgps_psra_all["English"]["eYear"] = "";
	$fieldLabelsgps_psra_all["English"]["GPSs1"] = "AS";
	$fieldToolTipsgps_psra_all["English"]["GPSs1"] = "";
	$fieldLabelsgps_psra_all["English"]["GPSs2"] = "BA";
	$fieldToolTipsgps_psra_all["English"]["GPSs2"] = "";
	$fieldLabelsgps_psra_all["English"]["GPSs3"] = "JIK";
	$fieldToolTipsgps_psra_all["English"]["GPSs3"] = "";
	$fieldLabelsgps_psra_all["English"]["GPSs4"] = "TF";
	$fieldToolTipsgps_psra_all["English"]["GPSs4"] = "";
	$fieldLabelsgps_psra_all["English"]["GPSs5"] = "TJ";
	$fieldToolTipsgps_psra_all["English"]["GPSs5"] = "";
	$fieldLabelsgps_psra_all["English"]["GPSchool"] = "GPS";
	$fieldToolTipsgps_psra_all["English"]["GPSchool"] = "";
	$fieldLabelsgps_psra_all["English"]["skor"] = "Skor";
	$fieldToolTipsgps_psra_all["English"]["skor"] = "";
	if (count($fieldToolTipsgps_psra_all["English"]))
		$tdatagps_psra_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgps_psra_all[""] = array();
	$fieldToolTipsgps_psra_all[""] = array();
	$pageTitlesgps_psra_all[""] = array();
	if (count($fieldToolTipsgps_psra_all[""]))
		$tdatagps_psra_all[".isUseToolTips"] = true;
}


	$tdatagps_psra_all[".NCSearch"] = true;



$tdatagps_psra_all[".shortTableName"] = "gps_psra_all";
$tdatagps_psra_all[".nSecOptions"] = 0;
$tdatagps_psra_all[".recsPerRowList"] = 1;
$tdatagps_psra_all[".recsPerRowPrint"] = 1;
$tdatagps_psra_all[".mainTableOwnerID"] = "";
$tdatagps_psra_all[".moveNext"] = 1;
$tdatagps_psra_all[".entityType"] = 1;

$tdatagps_psra_all[".strOriginalTableName"] = "exam_marking";




$tdatagps_psra_all[".showAddInPopup"] = false;

$tdatagps_psra_all[".showEditInPopup"] = false;

$tdatagps_psra_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagps_psra_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagps_psra_all[".fieldsForRegister"] = array();

$tdatagps_psra_all[".listAjax"] = false;

	$tdatagps_psra_all[".audit"] = false;

	$tdatagps_psra_all[".locking"] = false;



$tdatagps_psra_all[".list"] = true;



$tdatagps_psra_all[".exportTo"] = true;



$tdatagps_psra_all[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagps_psra_all[".searchSaving"] = false;
//

$tdatagps_psra_all[".showSearchPanel"] = true;
		$tdatagps_psra_all[".flexibleSearch"] = true;

if (isMobile())
	$tdatagps_psra_all[".isUseAjaxSuggest"] = false;
else
	$tdatagps_psra_all[".isUseAjaxSuggest"] = true;

$tdatagps_psra_all[".rowHighlite"] = true;


																				
$tdatagps_psra_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagps_psra_all[".isUseTimeForSearch"] = false;





$tdatagps_psra_all[".allSearchFields"] = array();
$tdatagps_psra_all[".filterFields"] = array();
$tdatagps_psra_all[".requiredSearchFields"] = array();



$tdatagps_psra_all[".googleLikeFields"] = array();
$tdatagps_psra_all[".googleLikeFields"][] = "GPSs1";
$tdatagps_psra_all[".googleLikeFields"][] = "GPSs2";
$tdatagps_psra_all[".googleLikeFields"][] = "GPSs3";
$tdatagps_psra_all[".googleLikeFields"][] = "GPSs4";
$tdatagps_psra_all[".googleLikeFields"][] = "GPSs5";
$tdatagps_psra_all[".googleLikeFields"][] = "GPSchool";
$tdatagps_psra_all[".googleLikeFields"][] = "skor";

$tdatagps_psra_all[".panelSearchFields"] = array();
$tdatagps_psra_all[".searchPanelOptions"] = array();
$tdatagps_psra_all[".panelSearchFields"][] = "eYear";
	

$tdatagps_psra_all[".tableType"] = "list";

$tdatagps_psra_all[".printerPageOrientation"] = 0;
$tdatagps_psra_all[".nPrinterPageScale"] = 100;

$tdatagps_psra_all[".nPrinterSplitRecords"] = 40;

$tdatagps_psra_all[".nPrinterPDFSplitRecords"] = 40;



$tdatagps_psra_all[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatagps_psra_all[".pageSize"] = 20;

$tdatagps_psra_all[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY GPSchool";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagps_psra_all[".strOrderBy"] = $tstrOrderBy;

$tdatagps_psra_all[".orderindexes"] = array();
$tdatagps_psra_all[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "GPSchool");

$tdatagps_psra_all[".sqlHead"] = "SELECT eYear,  GPSs1,  GPSs2,  GPSs3,  GPSs4,  GPSs5,  GPSchool,  skor";
$tdatagps_psra_all[".sqlFrom"] = "FROM (  SELECT  eYear,  eType,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY eYear  ) AS Sub1  ) AS Sub2";
$tdatagps_psra_all[".sqlWhereExpr"] = "";
$tdatagps_psra_all[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagps_psra_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagps_psra_all[".arrGroupsPerPage"] = $arrGPP;

$tdatagps_psra_all[".highlightSearchResults"] = true;

$tableKeysgps_psra_all = array();
$tableKeysgps_psra_all[] = "eYear";
$tdatagps_psra_all[".Keys"] = $tableKeysgps_psra_all;

$tdatagps_psra_all[".listFields"] = array();
$tdatagps_psra_all[".listFields"][] = "eYear";
$tdatagps_psra_all[".listFields"][] = "GPSs1";
$tdatagps_psra_all[".listFields"][] = "GPSs2";
$tdatagps_psra_all[".listFields"][] = "GPSs3";
$tdatagps_psra_all[".listFields"][] = "GPSs4";
$tdatagps_psra_all[".listFields"][] = "GPSs5";
$tdatagps_psra_all[".listFields"][] = "GPSchool";
$tdatagps_psra_all[".listFields"][] = "skor";

$tdatagps_psra_all[".hideMobileList"] = array();


$tdatagps_psra_all[".viewFields"] = array();

$tdatagps_psra_all[".addFields"] = array();

$tdatagps_psra_all[".masterListFields"] = array();
$tdatagps_psra_all[".masterListFields"][] = "eYear";
$tdatagps_psra_all[".masterListFields"][] = "GPSs1";
$tdatagps_psra_all[".masterListFields"][] = "GPSs2";
$tdatagps_psra_all[".masterListFields"][] = "GPSs3";
$tdatagps_psra_all[".masterListFields"][] = "GPSs4";
$tdatagps_psra_all[".masterListFields"][] = "GPSs5";
$tdatagps_psra_all[".masterListFields"][] = "GPSchool";
$tdatagps_psra_all[".masterListFields"][] = "skor";

$tdatagps_psra_all[".inlineAddFields"] = array();

$tdatagps_psra_all[".editFields"] = array();

$tdatagps_psra_all[".inlineEditFields"] = array();

$tdatagps_psra_all[".exportFields"] = array();
$tdatagps_psra_all[".exportFields"][] = "eYear";
$tdatagps_psra_all[".exportFields"][] = "GPSs1";
$tdatagps_psra_all[".exportFields"][] = "GPSs2";
$tdatagps_psra_all[".exportFields"][] = "GPSs3";
$tdatagps_psra_all[".exportFields"][] = "GPSs4";
$tdatagps_psra_all[".exportFields"][] = "GPSs5";
$tdatagps_psra_all[".exportFields"][] = "GPSchool";
$tdatagps_psra_all[".exportFields"][] = "skor";

$tdatagps_psra_all[".importFields"] = array();

$tdatagps_psra_all[".printFields"] = array();

//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_all","eYear");
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








	$tdatagps_psra_all["eYear"] = $fdata;
//	GPSs1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GPSs1";
	$fdata["GoodName"] = "GPSs1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_all","GPSs1");
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








	$tdatagps_psra_all["GPSs1"] = $fdata;
//	GPSs2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "GPSs2";
	$fdata["GoodName"] = "GPSs2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_all","GPSs2");
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








	$tdatagps_psra_all["GPSs2"] = $fdata;
//	GPSs3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "GPSs3";
	$fdata["GoodName"] = "GPSs3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_all","GPSs3");
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








	$tdatagps_psra_all["GPSs3"] = $fdata;
//	GPSs4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GPSs4";
	$fdata["GoodName"] = "GPSs4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_all","GPSs4");
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








	$tdatagps_psra_all["GPSs4"] = $fdata;
//	GPSs5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "GPSs5";
	$fdata["GoodName"] = "GPSs5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_all","GPSs5");
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








	$tdatagps_psra_all["GPSs5"] = $fdata;
//	GPSchool
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GPSchool";
	$fdata["GoodName"] = "GPSchool";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_all","GPSchool");
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








	$tdatagps_psra_all["GPSchool"] = $fdata;
//	skor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "skor";
	$fdata["GoodName"] = "skor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gps_psra_all","skor");
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








	$tdatagps_psra_all["skor"] = $fdata;


$tables_data["gps_psra_all"]=&$tdatagps_psra_all;
$field_labels["gps_psra_all"] = &$fieldLabelsgps_psra_all;
$fieldToolTips["gps_psra_all"] = &$fieldToolTipsgps_psra_all;
$page_titles["gps_psra_all"] = &$pageTitlesgps_psra_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["gps_psra_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["gps_psra_all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_gps_psra_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eYear,  GPSs1,  GPSs2,  GPSs3,  GPSs4,  GPSs5,  GPSchool,  skor";
$proto0["m_strFrom"] = "FROM (  SELECT  eYear,  eType,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY eYear  ) AS Sub1  ) AS Sub2";
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
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto5["m_sql"] = "eYear";
$proto5["m_srcTableName"] = "gps_psra_all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs1",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto7["m_sql"] = "GPSs1";
$proto7["m_srcTableName"] = "gps_psra_all";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs2",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto9["m_sql"] = "GPSs2";
$proto9["m_srcTableName"] = "gps_psra_all";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs3",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto11["m_sql"] = "GPSs3";
$proto11["m_srcTableName"] = "gps_psra_all";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs4",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto13["m_sql"] = "GPSs4";
$proto13["m_srcTableName"] = "gps_psra_all";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSs5",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto15["m_sql"] = "GPSs5";
$proto15["m_srcTableName"] = "gps_psra_all";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSchool",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto17["m_sql"] = "GPSchool";
$proto17["m_srcTableName"] = "gps_psra_all";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "skor",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto19["m_sql"] = "skor";
$proto19["m_srcTableName"] = "gps_psra_all";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strHead"] = "  SELECT";
$proto22["m_strFieldList"] = "eYear,  eType,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor";
$proto22["m_strFrom"] = "FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY eYear  ) AS Sub1";
$proto22["m_strWhere"] = "";
$proto22["m_strOrderBy"] = "";
$proto22["m_strTail"] = "";
			$proto22["cipherer"] = null;
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto22["m_where"] = $obj;
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

$proto22["m_having"] = $obj;
$proto22["m_fieldlist"] = array();
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto27["m_sql"] = "eYear";
$proto27["m_srcTableName"] = "gps_psra_all";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto22["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto29["m_sql"] = "eType";
$proto29["m_srcTableName"] = "gps_psra_all";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto22["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "s1TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto31["m_sql"] = "s1TH";
$proto31["m_srcTableName"] = "gps_psra_all";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto22["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "s1DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto33["m_sql"] = "s1DF";
$proto33["m_srcTableName"] = "gps_psra_all";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto22["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF*5)"
));

$proto35["m_sql"] = "(s1DF*5)";
$proto35["m_srcTableName"] = "gps_psra_all";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "s1DFn";
$obj = new SQLFieldListItem($proto35);

$proto22["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto37["m_sql"] = "s1MQ";
$proto37["m_srcTableName"] = "gps_psra_all";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto22["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1MQ*4)"
));

$proto39["m_sql"] = "(s1MQ*4)";
$proto39["m_srcTableName"] = "gps_psra_all";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "s1MQn";
$obj = new SQLFieldListItem($proto39);

$proto22["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto41["m_sql"] = "s1JD";
$proto41["m_srcTableName"] = "gps_psra_all";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto22["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1JD*3)"
));

$proto43["m_sql"] = "(s1JD*3)";
$proto43["m_srcTableName"] = "gps_psra_all";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "s1JDn";
$obj = new SQLFieldListItem($proto43);

$proto22["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "s1JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto45["m_sql"] = "s1JJ";
$proto45["m_srcTableName"] = "gps_psra_all";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto22["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1JJ*2)"
));

$proto47["m_sql"] = "(s1JJ*2)";
$proto47["m_srcTableName"] = "gps_psra_all";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "s1JJn";
$obj = new SQLFieldListItem($proto47);

$proto22["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "s1MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto49["m_sql"] = "s1MZ";
$proto49["m_srcTableName"] = "gps_psra_all";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto22["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1MZ*1)"
));

$proto51["m_sql"] = "(s1MZ*1)";
$proto51["m_srcTableName"] = "gps_psra_all";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "s1MZn";
$obj = new SQLFieldListItem($proto51);

$proto22["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)"
));

$proto53["m_sql"] = "(s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)";
$proto53["m_srcTableName"] = "gps_psra_all";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "s1ngpm";
$obj = new SQLFieldListItem($proto53);

$proto22["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)"
));

$proto55["m_sql"] = "(s1DF+s1MQ+s1JD+s1JJ+s1MZ)";
$proto55["m_srcTableName"] = "gps_psra_all";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "s1calon";
$obj = new SQLFieldListItem($proto55);

$proto22["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ))"
));

$proto57["m_sql"] = "((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ))";
$proto57["m_srcTableName"] = "gps_psra_all";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "GPSs1";
$obj = new SQLFieldListItem($proto57);

$proto22["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "s2TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto59["m_sql"] = "s2TH";
$proto59["m_srcTableName"] = "gps_psra_all";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto22["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "s2DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto61["m_sql"] = "s2DF";
$proto61["m_srcTableName"] = "gps_psra_all";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto22["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF*5)"
));

$proto63["m_sql"] = "(s2DF*5)";
$proto63["m_srcTableName"] = "gps_psra_all";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "s2DFn";
$obj = new SQLFieldListItem($proto63);

$proto22["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto65["m_sql"] = "s2MQ";
$proto65["m_srcTableName"] = "gps_psra_all";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto22["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2MQ*4)"
));

$proto67["m_sql"] = "(s2MQ*4)";
$proto67["m_srcTableName"] = "gps_psra_all";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "s2MQn";
$obj = new SQLFieldListItem($proto67);

$proto22["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto69["m_sql"] = "s2JD";
$proto69["m_srcTableName"] = "gps_psra_all";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto22["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2JD*3)"
));

$proto71["m_sql"] = "(s2JD*3)";
$proto71["m_srcTableName"] = "gps_psra_all";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "s2JDn";
$obj = new SQLFieldListItem($proto71);

$proto22["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "s2JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto73["m_sql"] = "s2JJ";
$proto73["m_srcTableName"] = "gps_psra_all";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto22["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2JJ*2)"
));

$proto75["m_sql"] = "(s2JJ*2)";
$proto75["m_srcTableName"] = "gps_psra_all";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "s2JJn";
$obj = new SQLFieldListItem($proto75);

$proto22["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "s2MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto77["m_sql"] = "s2MZ";
$proto77["m_srcTableName"] = "gps_psra_all";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto22["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2MZ*1)"
));

$proto79["m_sql"] = "(s2MZ*1)";
$proto79["m_srcTableName"] = "gps_psra_all";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "s2MZn";
$obj = new SQLFieldListItem($proto79);

$proto22["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)"
));

$proto81["m_sql"] = "(s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)";
$proto81["m_srcTableName"] = "gps_psra_all";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "s2ngpm";
$obj = new SQLFieldListItem($proto81);

$proto22["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)"
));

$proto83["m_sql"] = "(s2DF+s2MQ+s2JD+s2JJ+s2MZ)";
$proto83["m_srcTableName"] = "gps_psra_all";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "s2calon";
$obj = new SQLFieldListItem($proto83);

$proto22["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ))"
));

$proto85["m_sql"] = "((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ))";
$proto85["m_srcTableName"] = "gps_psra_all";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "GPSs2";
$obj = new SQLFieldListItem($proto85);

$proto22["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "s3TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto87["m_sql"] = "s3TH";
$proto87["m_srcTableName"] = "gps_psra_all";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto22["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "s3DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto89["m_sql"] = "s3DF";
$proto89["m_srcTableName"] = "gps_psra_all";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto22["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF*5)"
));

$proto91["m_sql"] = "(s3DF*5)";
$proto91["m_srcTableName"] = "gps_psra_all";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "s3DFn";
$obj = new SQLFieldListItem($proto91);

$proto22["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto93["m_sql"] = "s3MQ";
$proto93["m_srcTableName"] = "gps_psra_all";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto22["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3MQ*4)"
));

$proto95["m_sql"] = "(s3MQ*4)";
$proto95["m_srcTableName"] = "gps_psra_all";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "s3MQn";
$obj = new SQLFieldListItem($proto95);

$proto22["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto97["m_sql"] = "s3JD";
$proto97["m_srcTableName"] = "gps_psra_all";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto22["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3JD*3)"
));

$proto99["m_sql"] = "(s3JD*3)";
$proto99["m_srcTableName"] = "gps_psra_all";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "s3JDn";
$obj = new SQLFieldListItem($proto99);

$proto22["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "s3JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto101["m_sql"] = "s3JJ";
$proto101["m_srcTableName"] = "gps_psra_all";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto22["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3JJ*2)"
));

$proto103["m_sql"] = "(s3JJ*2)";
$proto103["m_srcTableName"] = "gps_psra_all";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "s3JJn";
$obj = new SQLFieldListItem($proto103);

$proto22["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "s3MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto105["m_sql"] = "s3MZ";
$proto105["m_srcTableName"] = "gps_psra_all";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto22["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3MZ*1)"
));

$proto107["m_sql"] = "(s3MZ*1)";
$proto107["m_srcTableName"] = "gps_psra_all";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "s3MZn";
$obj = new SQLFieldListItem($proto107);

$proto22["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)"
));

$proto109["m_sql"] = "(s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)";
$proto109["m_srcTableName"] = "gps_psra_all";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "s3ngpm";
$obj = new SQLFieldListItem($proto109);

$proto22["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)"
));

$proto111["m_sql"] = "(s3DF+s3MQ+s3JD+s3JJ+s3MZ)";
$proto111["m_srcTableName"] = "gps_psra_all";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "s3calon";
$obj = new SQLFieldListItem($proto111);

$proto22["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ))"
));

$proto113["m_sql"] = "((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ))";
$proto113["m_srcTableName"] = "gps_psra_all";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "GPSs3";
$obj = new SQLFieldListItem($proto113);

$proto22["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLField(array(
	"m_strName" => "s4TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto115["m_sql"] = "s4TH";
$proto115["m_srcTableName"] = "gps_psra_all";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "";
$obj = new SQLFieldListItem($proto115);

$proto22["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "s4DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto117["m_sql"] = "s4DF";
$proto117["m_srcTableName"] = "gps_psra_all";
$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto22["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF*5)"
));

$proto119["m_sql"] = "(s4DF*5)";
$proto119["m_srcTableName"] = "gps_psra_all";
$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "s4DFn";
$obj = new SQLFieldListItem($proto119);

$proto22["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto121["m_sql"] = "s4MQ";
$proto121["m_srcTableName"] = "gps_psra_all";
$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto22["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4MQ*4)"
));

$proto123["m_sql"] = "(s4MQ*4)";
$proto123["m_srcTableName"] = "gps_psra_all";
$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "s4MQn";
$obj = new SQLFieldListItem($proto123);

$proto22["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto125["m_sql"] = "s4JD";
$proto125["m_srcTableName"] = "gps_psra_all";
$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto22["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4JD*3)"
));

$proto127["m_sql"] = "(s4JD*3)";
$proto127["m_srcTableName"] = "gps_psra_all";
$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "s4JDn";
$obj = new SQLFieldListItem($proto127);

$proto22["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "s4JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto129["m_sql"] = "s4JJ";
$proto129["m_srcTableName"] = "gps_psra_all";
$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto22["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4JJ*2)"
));

$proto131["m_sql"] = "(s4JJ*2)";
$proto131["m_srcTableName"] = "gps_psra_all";
$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "s4JJn";
$obj = new SQLFieldListItem($proto131);

$proto22["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "s4MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto133["m_sql"] = "s4MZ";
$proto133["m_srcTableName"] = "gps_psra_all";
$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto22["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4MZ*1)"
));

$proto135["m_sql"] = "(s4MZ*1)";
$proto135["m_srcTableName"] = "gps_psra_all";
$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "s4MZn";
$obj = new SQLFieldListItem($proto135);

$proto22["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)"
));

$proto137["m_sql"] = "(s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)";
$proto137["m_srcTableName"] = "gps_psra_all";
$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "s4ngpm";
$obj = new SQLFieldListItem($proto137);

$proto22["m_fieldlist"][]=$obj;
						$proto139=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)"
));

$proto139["m_sql"] = "(s4DF+s4MQ+s4JD+s4JJ+s4MZ)";
$proto139["m_srcTableName"] = "gps_psra_all";
$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "s4calon";
$obj = new SQLFieldListItem($proto139);

$proto22["m_fieldlist"][]=$obj;
						$proto141=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ))"
));

$proto141["m_sql"] = "((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ))";
$proto141["m_srcTableName"] = "gps_psra_all";
$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "GPSs4";
$obj = new SQLFieldListItem($proto141);

$proto22["m_fieldlist"][]=$obj;
						$proto143=array();
			$obj = new SQLField(array(
	"m_strName" => "s5TH",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto143["m_sql"] = "s5TH";
$proto143["m_srcTableName"] = "gps_psra_all";
$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "";
$obj = new SQLFieldListItem($proto143);

$proto22["m_fieldlist"][]=$obj;
						$proto145=array();
			$obj = new SQLField(array(
	"m_strName" => "s5DF",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto145["m_sql"] = "s5DF";
$proto145["m_srcTableName"] = "gps_psra_all";
$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "";
$obj = new SQLFieldListItem($proto145);

$proto22["m_fieldlist"][]=$obj;
						$proto147=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF*5)"
));

$proto147["m_sql"] = "(s5DF*5)";
$proto147["m_srcTableName"] = "gps_psra_all";
$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "s5DFn";
$obj = new SQLFieldListItem($proto147);

$proto22["m_fieldlist"][]=$obj;
						$proto149=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MQ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto149["m_sql"] = "s5MQ";
$proto149["m_srcTableName"] = "gps_psra_all";
$proto149["m_expr"]=$obj;
$proto149["m_alias"] = "";
$obj = new SQLFieldListItem($proto149);

$proto22["m_fieldlist"][]=$obj;
						$proto151=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5MQ*4)"
));

$proto151["m_sql"] = "(s5MQ*4)";
$proto151["m_srcTableName"] = "gps_psra_all";
$proto151["m_expr"]=$obj;
$proto151["m_alias"] = "s5MQn";
$obj = new SQLFieldListItem($proto151);

$proto22["m_fieldlist"][]=$obj;
						$proto153=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JD",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto153["m_sql"] = "s5JD";
$proto153["m_srcTableName"] = "gps_psra_all";
$proto153["m_expr"]=$obj;
$proto153["m_alias"] = "";
$obj = new SQLFieldListItem($proto153);

$proto22["m_fieldlist"][]=$obj;
						$proto155=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5JD*3)"
));

$proto155["m_sql"] = "(s5JD*3)";
$proto155["m_srcTableName"] = "gps_psra_all";
$proto155["m_expr"]=$obj;
$proto155["m_alias"] = "s5JDn";
$obj = new SQLFieldListItem($proto155);

$proto22["m_fieldlist"][]=$obj;
						$proto157=array();
			$obj = new SQLField(array(
	"m_strName" => "s5JJ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto157["m_sql"] = "s5JJ";
$proto157["m_srcTableName"] = "gps_psra_all";
$proto157["m_expr"]=$obj;
$proto157["m_alias"] = "";
$obj = new SQLFieldListItem($proto157);

$proto22["m_fieldlist"][]=$obj;
						$proto159=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5JJ*2)"
));

$proto159["m_sql"] = "(s5JJ*2)";
$proto159["m_srcTableName"] = "gps_psra_all";
$proto159["m_expr"]=$obj;
$proto159["m_alias"] = "s5JJn";
$obj = new SQLFieldListItem($proto159);

$proto22["m_fieldlist"][]=$obj;
						$proto161=array();
			$obj = new SQLField(array(
	"m_strName" => "s5MZ",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "gps_psra_all"
));

$proto161["m_sql"] = "s5MZ";
$proto161["m_srcTableName"] = "gps_psra_all";
$proto161["m_expr"]=$obj;
$proto161["m_alias"] = "";
$obj = new SQLFieldListItem($proto161);

$proto22["m_fieldlist"][]=$obj;
						$proto163=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5MZ*1)"
));

$proto163["m_sql"] = "(s5MZ*1)";
$proto163["m_srcTableName"] = "gps_psra_all";
$proto163["m_expr"]=$obj;
$proto163["m_alias"] = "s5MZn";
$obj = new SQLFieldListItem($proto163);

$proto22["m_fieldlist"][]=$obj;
						$proto165=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)"
));

$proto165["m_sql"] = "(s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)";
$proto165["m_srcTableName"] = "gps_psra_all";
$proto165["m_expr"]=$obj;
$proto165["m_alias"] = "s5ngpm";
$obj = new SQLFieldListItem($proto165);

$proto22["m_fieldlist"][]=$obj;
						$proto167=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)"
));

$proto167["m_sql"] = "(s5DF+s5MQ+s5JD+s5JJ+s5MZ)";
$proto167["m_srcTableName"] = "gps_psra_all";
$proto167["m_expr"]=$obj;
$proto167["m_alias"] = "s5calon";
$obj = new SQLFieldListItem($proto167);

$proto22["m_fieldlist"][]=$obj;
						$proto169=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ))"
));

$proto169["m_sql"] = "((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ))";
$proto169["m_srcTableName"] = "gps_psra_all";
$proto169["m_expr"]=$obj;
$proto169["m_alias"] = "GPSs5";
$obj = new SQLFieldListItem($proto169);

$proto22["m_fieldlist"][]=$obj;
						$proto171=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5"
));

$proto171["m_sql"] = "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5";
$proto171["m_srcTableName"] = "gps_psra_all";
$proto171["m_expr"]=$obj;
$proto171["m_alias"] = "GPSchool";
$obj = new SQLFieldListItem($proto171);

$proto22["m_fieldlist"][]=$obj;
						$proto173=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5"
));

$proto173["m_sql"] = "(((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5";
$proto173["m_srcTableName"] = "gps_psra_all";
$proto173["m_expr"]=$obj;
$proto173["m_alias"] = "skor";
$obj = new SQLFieldListItem($proto173);

$proto22["m_fieldlist"][]=$obj;
$proto22["m_fromlist"] = array();
												$proto175=array();
$proto175["m_link"] = "SQLL_MAIN";
			$proto176=array();
$proto176["m_strHead"] = "  		SELECT";
$proto176["m_strFieldList"] = "sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark";
$proto176["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto176["m_strWhere"] = "eType ='PSRA'";
$proto176["m_strOrderBy"] = "";
$proto176["m_strTail"] = "";
			$proto176["cipherer"] = null;
$proto177=array();
$proto177["m_sql"] = "eType ='PSRA'";
$proto177["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_all"
));

$proto177["m_column"]=$obj;
$proto177["m_contained"] = array();
$proto177["m_strCase"] = "='PSRA'";
$proto177["m_havingmode"] = false;
$proto177["m_inBrackets"] = false;
$proto177["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto177);

$proto176["m_where"] = $obj;
$proto179=array();
$proto179["m_sql"] = "";
$proto179["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto179["m_column"]=$obj;
$proto179["m_contained"] = array();
$proto179["m_strCase"] = "";
$proto179["m_havingmode"] = false;
$proto179["m_inBrackets"] = false;
$proto179["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto179);

$proto176["m_having"] = $obj;
$proto176["m_fieldlist"] = array();
						$proto181=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_all"
));

$proto181["m_sql"] = "sid";
$proto181["m_srcTableName"] = "gps_psra_all";
$proto181["m_expr"]=$obj;
$proto181["m_alias"] = "";
$obj = new SQLFieldListItem($proto181);

$proto176["m_fieldlist"][]=$obj;
						$proto183=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_all"
));

$proto183["m_sql"] = "eYear";
$proto183["m_srcTableName"] = "gps_psra_all";
$proto183["m_expr"]=$obj;
$proto183["m_alias"] = "";
$obj = new SQLFieldListItem($proto183);

$proto176["m_fieldlist"][]=$obj;
						$proto185=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_all"
));

$proto185["m_sql"] = "eType";
$proto185["m_srcTableName"] = "gps_psra_all";
$proto185["m_expr"]=$obj;
$proto185["m_alias"] = "";
$obj = new SQLFieldListItem($proto185);

$proto176["m_fieldlist"][]=$obj;
						$proto187=array();
			$proto188=array();
$proto188["m_functiontype"] = "SQLF_COUNT";
$proto188["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_all"
));

$proto188["m_arguments"][]=$obj;
$proto188["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto188);

$proto187["m_sql"] = "COUNT(sid)";
$proto187["m_srcTableName"] = "gps_psra_all";
$proto187["m_expr"]=$obj;
$proto187["m_alias"] = "totalCalon";
$obj = new SQLFieldListItem($proto187);

$proto176["m_fieldlist"][]=$obj;
						$proto190=array();
			$proto191=array();
$proto191["m_functiontype"] = "SQLF_COUNT";
$proto191["m_arguments"] = array();
						$proto192=array();
$proto192["m_functiontype"] = "SQLF_CUSTOM";
$proto192["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1='TH'"
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

$proto190["m_sql"] = "COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL))";
$proto190["m_srcTableName"] = "gps_psra_all";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "s1TH";
$obj = new SQLFieldListItem($proto190);

$proto176["m_fieldlist"][]=$obj;
						$proto196=array();
			$proto197=array();
$proto197["m_functiontype"] = "SQLF_COUNT";
$proto197["m_arguments"] = array();
						$proto198=array();
$proto198["m_functiontype"] = "SQLF_CUSTOM";
$proto198["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1!='TH' AND exam_marking.s1<40"
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

$proto196["m_sql"] = "COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL))";
$proto196["m_srcTableName"] = "gps_psra_all";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "s1DF";
$obj = new SQLFieldListItem($proto196);

$proto176["m_fieldlist"][]=$obj;
						$proto202=array();
			$proto203=array();
$proto203["m_functiontype"] = "SQLF_COUNT";
$proto203["m_arguments"] = array();
						$proto204=array();
$proto204["m_functiontype"] = "SQLF_CUSTOM";
$proto204["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=40 AND exam_marking.s1<60"
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

$proto202["m_sql"] = "COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL))";
$proto202["m_srcTableName"] = "gps_psra_all";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "s1MQ";
$obj = new SQLFieldListItem($proto202);

$proto176["m_fieldlist"][]=$obj;
						$proto208=array();
			$proto209=array();
$proto209["m_functiontype"] = "SQLF_COUNT";
$proto209["m_arguments"] = array();
						$proto210=array();
$proto210["m_functiontype"] = "SQLF_CUSTOM";
$proto210["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=60 AND exam_marking.s1<75"
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

$proto208["m_sql"] = "COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL))";
$proto208["m_srcTableName"] = "gps_psra_all";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "s1JD";
$obj = new SQLFieldListItem($proto208);

$proto176["m_fieldlist"][]=$obj;
						$proto214=array();
			$proto215=array();
$proto215["m_functiontype"] = "SQLF_COUNT";
$proto215["m_arguments"] = array();
						$proto216=array();
$proto216["m_functiontype"] = "SQLF_CUSTOM";
$proto216["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=75 AND exam_marking.s1<90"
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

$proto214["m_sql"] = "COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL))";
$proto214["m_srcTableName"] = "gps_psra_all";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "s1JJ";
$obj = new SQLFieldListItem($proto214);

$proto176["m_fieldlist"][]=$obj;
						$proto220=array();
			$proto221=array();
$proto221["m_functiontype"] = "SQLF_COUNT";
$proto221["m_arguments"] = array();
						$proto222=array();
$proto222["m_functiontype"] = "SQLF_CUSTOM";
$proto222["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1>=90"
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

$proto220["m_sql"] = "COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL))";
$proto220["m_srcTableName"] = "gps_psra_all";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "s1MZ";
$obj = new SQLFieldListItem($proto220);

$proto176["m_fieldlist"][]=$obj;
						$proto226=array();
			$proto227=array();
$proto227["m_functiontype"] = "SQLF_COUNT";
$proto227["m_arguments"] = array();
						$proto228=array();
$proto228["m_functiontype"] = "SQLF_CUSTOM";
$proto228["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2='TH'"
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

$proto226["m_sql"] = "COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL))";
$proto226["m_srcTableName"] = "gps_psra_all";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "s2TH";
$obj = new SQLFieldListItem($proto226);

$proto176["m_fieldlist"][]=$obj;
						$proto232=array();
			$proto233=array();
$proto233["m_functiontype"] = "SQLF_COUNT";
$proto233["m_arguments"] = array();
						$proto234=array();
$proto234["m_functiontype"] = "SQLF_CUSTOM";
$proto234["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2!='TH' AND exam_marking.s2<40"
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

$proto232["m_sql"] = "COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL))";
$proto232["m_srcTableName"] = "gps_psra_all";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "s2DF";
$obj = new SQLFieldListItem($proto232);

$proto176["m_fieldlist"][]=$obj;
						$proto238=array();
			$proto239=array();
$proto239["m_functiontype"] = "SQLF_COUNT";
$proto239["m_arguments"] = array();
						$proto240=array();
$proto240["m_functiontype"] = "SQLF_CUSTOM";
$proto240["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=40 AND exam_marking.s2<60"
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

$proto238["m_sql"] = "COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL))";
$proto238["m_srcTableName"] = "gps_psra_all";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "s2MQ";
$obj = new SQLFieldListItem($proto238);

$proto176["m_fieldlist"][]=$obj;
						$proto244=array();
			$proto245=array();
$proto245["m_functiontype"] = "SQLF_COUNT";
$proto245["m_arguments"] = array();
						$proto246=array();
$proto246["m_functiontype"] = "SQLF_CUSTOM";
$proto246["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=60 AND exam_marking.s2<75"
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

$proto244["m_sql"] = "COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL))";
$proto244["m_srcTableName"] = "gps_psra_all";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "s2JD";
$obj = new SQLFieldListItem($proto244);

$proto176["m_fieldlist"][]=$obj;
						$proto250=array();
			$proto251=array();
$proto251["m_functiontype"] = "SQLF_COUNT";
$proto251["m_arguments"] = array();
						$proto252=array();
$proto252["m_functiontype"] = "SQLF_CUSTOM";
$proto252["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=75 AND exam_marking.s2<90"
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

$proto250["m_sql"] = "COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL))";
$proto250["m_srcTableName"] = "gps_psra_all";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "s2JJ";
$obj = new SQLFieldListItem($proto250);

$proto176["m_fieldlist"][]=$obj;
						$proto256=array();
			$proto257=array();
$proto257["m_functiontype"] = "SQLF_COUNT";
$proto257["m_arguments"] = array();
						$proto258=array();
$proto258["m_functiontype"] = "SQLF_CUSTOM";
$proto258["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2>=90"
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

$proto256["m_sql"] = "COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL))";
$proto256["m_srcTableName"] = "gps_psra_all";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "s2MZ";
$obj = new SQLFieldListItem($proto256);

$proto176["m_fieldlist"][]=$obj;
						$proto262=array();
			$proto263=array();
$proto263["m_functiontype"] = "SQLF_COUNT";
$proto263["m_arguments"] = array();
						$proto264=array();
$proto264["m_functiontype"] = "SQLF_CUSTOM";
$proto264["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3='TH'"
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

$proto262["m_sql"] = "COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL))";
$proto262["m_srcTableName"] = "gps_psra_all";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "s3TH";
$obj = new SQLFieldListItem($proto262);

$proto176["m_fieldlist"][]=$obj;
						$proto268=array();
			$proto269=array();
$proto269["m_functiontype"] = "SQLF_COUNT";
$proto269["m_arguments"] = array();
						$proto270=array();
$proto270["m_functiontype"] = "SQLF_CUSTOM";
$proto270["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3!='TH' AND exam_marking.s3<40"
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

$proto268["m_sql"] = "COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL))";
$proto268["m_srcTableName"] = "gps_psra_all";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "s3DF";
$obj = new SQLFieldListItem($proto268);

$proto176["m_fieldlist"][]=$obj;
						$proto274=array();
			$proto275=array();
$proto275["m_functiontype"] = "SQLF_COUNT";
$proto275["m_arguments"] = array();
						$proto276=array();
$proto276["m_functiontype"] = "SQLF_CUSTOM";
$proto276["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=40 AND exam_marking.s3<60"
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

$proto274["m_sql"] = "COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL))";
$proto274["m_srcTableName"] = "gps_psra_all";
$proto274["m_expr"]=$obj;
$proto274["m_alias"] = "s3MQ";
$obj = new SQLFieldListItem($proto274);

$proto176["m_fieldlist"][]=$obj;
						$proto280=array();
			$proto281=array();
$proto281["m_functiontype"] = "SQLF_COUNT";
$proto281["m_arguments"] = array();
						$proto282=array();
$proto282["m_functiontype"] = "SQLF_CUSTOM";
$proto282["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=60 AND exam_marking.s3<75"
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

$proto280["m_sql"] = "COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL))";
$proto280["m_srcTableName"] = "gps_psra_all";
$proto280["m_expr"]=$obj;
$proto280["m_alias"] = "s3JD";
$obj = new SQLFieldListItem($proto280);

$proto176["m_fieldlist"][]=$obj;
						$proto286=array();
			$proto287=array();
$proto287["m_functiontype"] = "SQLF_COUNT";
$proto287["m_arguments"] = array();
						$proto288=array();
$proto288["m_functiontype"] = "SQLF_CUSTOM";
$proto288["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=75 AND exam_marking.s3<90"
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

$proto286["m_sql"] = "COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL))";
$proto286["m_srcTableName"] = "gps_psra_all";
$proto286["m_expr"]=$obj;
$proto286["m_alias"] = "s3JJ";
$obj = new SQLFieldListItem($proto286);

$proto176["m_fieldlist"][]=$obj;
						$proto292=array();
			$proto293=array();
$proto293["m_functiontype"] = "SQLF_COUNT";
$proto293["m_arguments"] = array();
						$proto294=array();
$proto294["m_functiontype"] = "SQLF_CUSTOM";
$proto294["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3>=90"
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

$proto292["m_sql"] = "COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL))";
$proto292["m_srcTableName"] = "gps_psra_all";
$proto292["m_expr"]=$obj;
$proto292["m_alias"] = "s3MZ";
$obj = new SQLFieldListItem($proto292);

$proto176["m_fieldlist"][]=$obj;
						$proto298=array();
			$proto299=array();
$proto299["m_functiontype"] = "SQLF_COUNT";
$proto299["m_arguments"] = array();
						$proto300=array();
$proto300["m_functiontype"] = "SQLF_CUSTOM";
$proto300["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4='TH'"
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

$proto298["m_sql"] = "COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL))";
$proto298["m_srcTableName"] = "gps_psra_all";
$proto298["m_expr"]=$obj;
$proto298["m_alias"] = "s4TH";
$obj = new SQLFieldListItem($proto298);

$proto176["m_fieldlist"][]=$obj;
						$proto304=array();
			$proto305=array();
$proto305["m_functiontype"] = "SQLF_COUNT";
$proto305["m_arguments"] = array();
						$proto306=array();
$proto306["m_functiontype"] = "SQLF_CUSTOM";
$proto306["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4!='TH' AND exam_marking.s4<40"
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

$proto304["m_sql"] = "COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL))";
$proto304["m_srcTableName"] = "gps_psra_all";
$proto304["m_expr"]=$obj;
$proto304["m_alias"] = "s4DF";
$obj = new SQLFieldListItem($proto304);

$proto176["m_fieldlist"][]=$obj;
						$proto310=array();
			$proto311=array();
$proto311["m_functiontype"] = "SQLF_COUNT";
$proto311["m_arguments"] = array();
						$proto312=array();
$proto312["m_functiontype"] = "SQLF_CUSTOM";
$proto312["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=40 AND exam_marking.s4<60"
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

$proto310["m_sql"] = "COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL))";
$proto310["m_srcTableName"] = "gps_psra_all";
$proto310["m_expr"]=$obj;
$proto310["m_alias"] = "s4MQ";
$obj = new SQLFieldListItem($proto310);

$proto176["m_fieldlist"][]=$obj;
						$proto316=array();
			$proto317=array();
$proto317["m_functiontype"] = "SQLF_COUNT";
$proto317["m_arguments"] = array();
						$proto318=array();
$proto318["m_functiontype"] = "SQLF_CUSTOM";
$proto318["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=60 AND exam_marking.s4<75"
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

$proto316["m_sql"] = "COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL))";
$proto316["m_srcTableName"] = "gps_psra_all";
$proto316["m_expr"]=$obj;
$proto316["m_alias"] = "s4JD";
$obj = new SQLFieldListItem($proto316);

$proto176["m_fieldlist"][]=$obj;
						$proto322=array();
			$proto323=array();
$proto323["m_functiontype"] = "SQLF_COUNT";
$proto323["m_arguments"] = array();
						$proto324=array();
$proto324["m_functiontype"] = "SQLF_CUSTOM";
$proto324["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=75 AND exam_marking.s4<90"
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

$proto322["m_sql"] = "COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL))";
$proto322["m_srcTableName"] = "gps_psra_all";
$proto322["m_expr"]=$obj;
$proto322["m_alias"] = "s4JJ";
$obj = new SQLFieldListItem($proto322);

$proto176["m_fieldlist"][]=$obj;
						$proto328=array();
			$proto329=array();
$proto329["m_functiontype"] = "SQLF_COUNT";
$proto329["m_arguments"] = array();
						$proto330=array();
$proto330["m_functiontype"] = "SQLF_CUSTOM";
$proto330["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4>=90"
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

$proto328["m_sql"] = "COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL))";
$proto328["m_srcTableName"] = "gps_psra_all";
$proto328["m_expr"]=$obj;
$proto328["m_alias"] = "s4MZ";
$obj = new SQLFieldListItem($proto328);

$proto176["m_fieldlist"][]=$obj;
						$proto334=array();
			$proto335=array();
$proto335["m_functiontype"] = "SQLF_COUNT";
$proto335["m_arguments"] = array();
						$proto336=array();
$proto336["m_functiontype"] = "SQLF_CUSTOM";
$proto336["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5='TH'"
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

$proto334["m_sql"] = "COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL))";
$proto334["m_srcTableName"] = "gps_psra_all";
$proto334["m_expr"]=$obj;
$proto334["m_alias"] = "s5TH";
$obj = new SQLFieldListItem($proto334);

$proto176["m_fieldlist"][]=$obj;
						$proto340=array();
			$proto341=array();
$proto341["m_functiontype"] = "SQLF_COUNT";
$proto341["m_arguments"] = array();
						$proto342=array();
$proto342["m_functiontype"] = "SQLF_CUSTOM";
$proto342["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5!='TH' AND exam_marking.s5<40"
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

$proto340["m_sql"] = "COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL))";
$proto340["m_srcTableName"] = "gps_psra_all";
$proto340["m_expr"]=$obj;
$proto340["m_alias"] = "s5DF";
$obj = new SQLFieldListItem($proto340);

$proto176["m_fieldlist"][]=$obj;
						$proto346=array();
			$proto347=array();
$proto347["m_functiontype"] = "SQLF_COUNT";
$proto347["m_arguments"] = array();
						$proto348=array();
$proto348["m_functiontype"] = "SQLF_CUSTOM";
$proto348["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=40 AND exam_marking.s5<60"
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

$proto346["m_sql"] = "COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL))";
$proto346["m_srcTableName"] = "gps_psra_all";
$proto346["m_expr"]=$obj;
$proto346["m_alias"] = "s5MQ";
$obj = new SQLFieldListItem($proto346);

$proto176["m_fieldlist"][]=$obj;
						$proto352=array();
			$proto353=array();
$proto353["m_functiontype"] = "SQLF_COUNT";
$proto353["m_arguments"] = array();
						$proto354=array();
$proto354["m_functiontype"] = "SQLF_CUSTOM";
$proto354["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=60 AND exam_marking.s5<75"
));

$proto354["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto354["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto354["m_arguments"][]=$obj;
$proto354["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto354);

$proto353["m_arguments"][]=$obj;
$proto353["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto353);

$proto352["m_sql"] = "COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL))";
$proto352["m_srcTableName"] = "gps_psra_all";
$proto352["m_expr"]=$obj;
$proto352["m_alias"] = "s5JD";
$obj = new SQLFieldListItem($proto352);

$proto176["m_fieldlist"][]=$obj;
						$proto358=array();
			$proto359=array();
$proto359["m_functiontype"] = "SQLF_COUNT";
$proto359["m_arguments"] = array();
						$proto360=array();
$proto360["m_functiontype"] = "SQLF_CUSTOM";
$proto360["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=75 AND exam_marking.s5<90"
));

$proto360["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto360["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto360["m_arguments"][]=$obj;
$proto360["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto360);

$proto359["m_arguments"][]=$obj;
$proto359["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto359);

$proto358["m_sql"] = "COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL))";
$proto358["m_srcTableName"] = "gps_psra_all";
$proto358["m_expr"]=$obj;
$proto358["m_alias"] = "s5JJ";
$obj = new SQLFieldListItem($proto358);

$proto176["m_fieldlist"][]=$obj;
						$proto364=array();
			$proto365=array();
$proto365["m_functiontype"] = "SQLF_COUNT";
$proto365["m_arguments"] = array();
						$proto366=array();
$proto366["m_functiontype"] = "SQLF_CUSTOM";
$proto366["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5>=90"
));

$proto366["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto366["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto366["m_arguments"][]=$obj;
$proto366["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto366);

$proto365["m_arguments"][]=$obj;
$proto365["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto365);

$proto364["m_sql"] = "COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL))";
$proto364["m_srcTableName"] = "gps_psra_all";
$proto364["m_expr"]=$obj;
$proto364["m_alias"] = "s5MZ";
$obj = new SQLFieldListItem($proto364);

$proto176["m_fieldlist"][]=$obj;
						$proto370=array();
			$proto371=array();
$proto371["m_functiontype"] = "SQLF_SUM";
$proto371["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5"
));

$proto371["m_arguments"][]=$obj;
$proto371["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto371);

$proto370["m_sql"] = "SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5)";
$proto370["m_srcTableName"] = "gps_psra_all";
$proto370["m_expr"]=$obj;
$proto370["m_alias"] = "totalMark";
$obj = new SQLFieldListItem($proto370);

$proto176["m_fieldlist"][]=$obj;
$proto176["m_fromlist"] = array();
												$proto373=array();
$proto373["m_link"] = "SQLL_MAIN";
			$proto374=array();
$proto374["m_strName"] = "exam_marking";
$proto374["m_srcTableName"] = "gps_psra_all";
$proto374["m_columns"] = array();
$proto374["m_columns"][] = "sid";
$proto374["m_columns"][] = "name";
$proto374["m_columns"][] = "gender";
$proto374["m_columns"][] = "birthdate";
$proto374["m_columns"][] = "birthCert";
$proto374["m_columns"][] = "nationality";
$proto374["m_columns"][] = "sCode";
$proto374["m_columns"][] = "eNo";
$proto374["m_columns"][] = "eYear";
$proto374["m_columns"][] = "eType";
$proto374["m_columns"][] = "s1";
$proto374["m_columns"][] = "s2";
$proto374["m_columns"][] = "s3";
$proto374["m_columns"][] = "s4";
$proto374["m_columns"][] = "s5";
$proto374["m_columns"][] = "s6";
$proto374["m_columns"][] = "s7";
$obj = new SQLTable($proto374);

$proto373["m_table"] = $obj;
$proto373["m_sql"] = "exam_marking";
$proto373["m_alias"] = "";
$proto373["m_srcTableName"] = "gps_psra_all";
$proto375=array();
$proto375["m_sql"] = "";
$proto375["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto375["m_column"]=$obj;
$proto375["m_contained"] = array();
$proto375["m_strCase"] = "";
$proto375["m_havingmode"] = false;
$proto375["m_inBrackets"] = false;
$proto375["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto375);

$proto373["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto373);

$proto176["m_fromlist"][]=$obj;
												$proto377=array();
$proto377["m_link"] = "SQLL_INNERJOIN";
			$proto378=array();
$proto378["m_strName"] = "school";
$proto378["m_srcTableName"] = "gps_psra_all";
$proto378["m_columns"] = array();
$proto378["m_columns"][] = "sno";
$proto378["m_columns"][] = "sName";
$proto378["m_columns"][] = "sCenter";
$proto378["m_columns"][] = "sCode";
$proto378["m_columns"][] = "sZone";
$proto378["m_columns"][] = "sType";
$obj = new SQLTable($proto378);

$proto377["m_table"] = $obj;
$proto377["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto377["m_alias"] = "";
$proto377["m_srcTableName"] = "gps_psra_all";
$proto379=array();
$proto379["m_sql"] = "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto379["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType"
));

$proto379["m_column"]=$obj;
$proto379["m_contained"] = array();
						$proto381=array();
$proto381["m_sql"] = "exam_marking.sCode = school.sCode";
$proto381["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_all"
));

$proto381["m_column"]=$obj;
$proto381["m_contained"] = array();
$proto381["m_strCase"] = "= school.sCode";
$proto381["m_havingmode"] = false;
$proto381["m_inBrackets"] = false;
$proto381["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto381);

			$proto379["m_contained"][]=$obj;
						$proto383=array();
$proto383["m_sql"] = "exam_marking.eType = school.sType";
$proto383["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_all"
));

$proto383["m_column"]=$obj;
$proto383["m_contained"] = array();
$proto383["m_strCase"] = "= school.sType";
$proto383["m_havingmode"] = false;
$proto383["m_inBrackets"] = false;
$proto383["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto383);

			$proto379["m_contained"][]=$obj;
$proto379["m_strCase"] = "";
$proto379["m_havingmode"] = false;
$proto379["m_inBrackets"] = false;
$proto379["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto379);

$proto377["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto377);

$proto176["m_fromlist"][]=$obj;
$proto176["m_groupby"] = array();
												$proto385=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "gps_psra_all"
));

$proto385["m_column"]=$obj;
$obj = new SQLGroupByItem($proto385);

$proto176["m_groupby"][]=$obj;
$proto176["m_orderby"] = array();
$proto176["m_srcTableName"]="gps_psra_all";		
$obj = new SQLQuery($proto176);

$proto175["m_table"] = $obj;
$proto175["m_sql"] = "(  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY eYear  ) AS Sub1";
$proto175["m_alias"] = "Sub1";
$proto175["m_srcTableName"] = "gps_psra_all";
$proto387=array();
$proto387["m_sql"] = "";
$proto387["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto387["m_column"]=$obj;
$proto387["m_contained"] = array();
$proto387["m_strCase"] = "";
$proto387["m_havingmode"] = false;
$proto387["m_inBrackets"] = false;
$proto387["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto387);

$proto175["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto175);

$proto22["m_fromlist"][]=$obj;
$proto22["m_groupby"] = array();
$proto22["m_orderby"] = array();
$proto22["m_srcTableName"]="gps_psra_all";		
$obj = new SQLQuery($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "(  SELECT  eYear,  eType,  s1TH,  s1DF,  (s1DF*5) AS s1DFn,  s1MQ,  (s1MQ*4) AS s1MQn,  s1JD,  (s1JD*3) AS s1JDn,  s1JJ,  (s1JJ*2) AS s1JJn,  s1MZ,  (s1MZ*1) AS s1MZn,  (s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ) AS s1ngpm,  (s1DF+s1MQ+s1JD+s1JJ+s1MZ) AS s1calon,  ((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) AS GPSs1,  s2TH,  s2DF,  (s2DF*5) AS s2DFn,  s2MQ,  (s2MQ*4) AS s2MQn,  s2JD,  (s2JD*3) AS s2JDn,  s2JJ,  (s2JJ*2) AS s2JJn,  s2MZ,  (s2MZ*1) AS s2MZn,  (s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ) AS s2ngpm,  (s2DF+s2MQ+s2JD+s2JJ+s2MZ) AS s2calon,  ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) AS GPSs2,  s3TH,  s3DF,  (s3DF*5) AS s3DFn,  s3MQ,  (s3MQ*4) AS s3MQn,  s3JD,  (s3JD*3) AS s3JDn,  s3JJ,  (s3JJ*2) AS s3JJn,  s3MZ,  (s3MZ*1) AS s3MZn,  (s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ) AS s3ngpm,  (s3DF+s3MQ+s3JD+s3JJ+s3MZ) AS s3calon,  ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) AS GPSs3,  s4TH,  s4DF,  (s4DF*5) AS s4DFn,  s4MQ,  (s4MQ*4) AS s4MQn,  s4JD,  (s4JD*3) AS s4JDn,  s4JJ,  (s4JJ*2) AS s4JJn,  s4MZ,  (s4MZ*1) AS s4MZn,  (s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ) AS s4ngpm,  (s4DF+s4MQ+s4JD+s4JJ+s4MZ) AS s4calon,  ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) AS GPSs4,  s5TH,  s5DF,  (s5DF*5) AS s5DFn,  s5MQ,  (s5MQ*4) AS s5MQn,  s5JD,  (s5JD*3) AS s5JDn,  s5JJ,  (s5JJ*2) AS s5JJn,  s5MZ,  (s5MZ*1) AS s5MZn,  (s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ) AS s5ngpm,  (s5DF+s5MQ+s5JD+s5JJ+s5MZ) AS s5calon,  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) AS GPSs5,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS GPSchool,  (((s1DF*5+s1MQ*4+s1JD*3+s1JJ*2+s1MZ)/(s1DF+s1MQ+s1JD+s1JJ+s1MZ)) + ((s2DF*5+s2MQ*4+s2JD*3+s2JJ*2+s2MZ)/(s2DF+s2MQ+s2JD+s2JJ+s2MZ)) +   ((s3DF*5+s3MQ*4+s3JD*3+s3JJ*2+s3MZ)/(s3DF+s3MQ+s3JD+s3JJ+s3MZ)) + ((s4DF*5+s4MQ*4+s4JD*3+s4JJ*2+s4MZ)/(s4DF+s4MQ+s4JD+s4JJ+s4MZ)) +  ((s5DF*5+s5MQ*4+s5JD*3+s5JJ*2+s5MZ)/(s5DF+s5MQ+s5JD+s5JJ+s5MZ)) )/5 AS skor  FROM (  		SELECT  sid,  eYear,  eType,  COUNT(sid) AS totalCalon,  COUNT(if(exam_marking.s1='TH', exam_marking.sid, NULL)) AS s1TH,  COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1<40, exam_marking.sid, NULL)) AS s1DF,  COUNT(if(exam_marking.s1>=40 AND exam_marking.s1<60, exam_marking.sid, NULL)) AS s1MQ,  COUNT(if(exam_marking.s1>=60 AND exam_marking.s1<75, exam_marking.sid, NULL)) AS s1JD,  COUNT(if(exam_marking.s1>=75 AND exam_marking.s1<90, exam_marking.sid, NULL)) AS s1JJ,  COUNT(if(exam_marking.s1>=90, exam_marking.sid, NULL)) AS s1MZ,  COUNT(if(exam_marking.s2='TH', exam_marking.sid, NULL)) AS s2TH,  COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2<40, exam_marking.sid, NULL)) AS s2DF,  COUNT(if(exam_marking.s2>=40 AND exam_marking.s2<60, exam_marking.sid, NULL)) AS s2MQ,  COUNT(if(exam_marking.s2>=60 AND exam_marking.s2<75, exam_marking.sid, NULL)) AS s2JD,  COUNT(if(exam_marking.s2>=75 AND exam_marking.s2<90, exam_marking.sid, NULL)) AS s2JJ,  COUNT(if(exam_marking.s2>=90, exam_marking.sid, NULL)) AS s2MZ,  COUNT(if(exam_marking.s3='TH', exam_marking.sid, NULL)) AS s3TH,  COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3<40, exam_marking.sid, NULL)) AS s3DF,  COUNT(if(exam_marking.s3>=40 AND exam_marking.s3<60, exam_marking.sid, NULL)) AS s3MQ,  COUNT(if(exam_marking.s3>=60 AND exam_marking.s3<75, exam_marking.sid, NULL)) AS s3JD,  COUNT(if(exam_marking.s3>=75 AND exam_marking.s3<90, exam_marking.sid, NULL)) AS s3JJ,  COUNT(if(exam_marking.s3>=90, exam_marking.sid, NULL)) AS s3MZ,  COUNT(if(exam_marking.s4='TH', exam_marking.sid, NULL)) AS s4TH,  COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4<40, exam_marking.sid, NULL)) AS s4DF,  COUNT(if(exam_marking.s4>=40 AND exam_marking.s4<60, exam_marking.sid, NULL)) AS s4MQ,  COUNT(if(exam_marking.s4>=60 AND exam_marking.s4<75, exam_marking.sid, NULL)) AS s4JD,  COUNT(if(exam_marking.s4>=75 AND exam_marking.s4<90, exam_marking.sid, NULL)) AS s4JJ,  COUNT(if(exam_marking.s4>=90, exam_marking.sid, NULL)) AS s4MZ,  COUNT(if(exam_marking.s5='TH', exam_marking.sid, NULL)) AS s5TH,  COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5<40, exam_marking.sid, NULL)) AS s5DF,  COUNT(if(exam_marking.s5>=40 AND exam_marking.s5<60, exam_marking.sid, NULL)) AS s5MQ,  COUNT(if(exam_marking.s5>=60 AND exam_marking.s5<75, exam_marking.sid, NULL)) AS s5JD,  COUNT(if(exam_marking.s5>=75 AND exam_marking.s5<90, exam_marking.sid, NULL)) AS s5JJ,  COUNT(if(exam_marking.s5>=90, exam_marking.sid, NULL)) AS s5MZ,  SUM(exam_marking.s1+exam_marking.s2+exam_marking.s3+exam_marking.s4+exam_marking.s5) AS totalMark  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE eType ='PSRA'  GROUP BY eYear  ) AS Sub1  ) AS Sub2";
$proto21["m_alias"] = "Sub2";
$proto21["m_srcTableName"] = "gps_psra_all";
$proto389=array();
$proto389["m_sql"] = "";
$proto389["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto389["m_column"]=$obj;
$proto389["m_contained"] = array();
$proto389["m_strCase"] = "";
$proto389["m_havingmode"] = false;
$proto389["m_inBrackets"] = false;
$proto389["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto389);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto391=array();
						$obj = new SQLField(array(
	"m_strName" => "GPSchool",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "gps_psra_all"
));

$proto391["m_column"]=$obj;
$proto391["m_bAsc"] = 1;
$proto391["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto391);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="gps_psra_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gps_psra_all = createSqlQuery_gps_psra_all();



								

$tdatagps_psra_all[".sqlquery"] = $queryData_gps_psra_all;

include_once(getabspath("include/gps_psra_all_events.php"));
$tableEvents["gps_psra_all"] = new eventclass_gps_psra_all;
$tdatagps_psra_all[".hasEvents"] = true;

?>