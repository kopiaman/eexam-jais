<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamarking_TF = array();
	$tdatamarking_TF[".truncateText"] = true;
	$tdatamarking_TF[".NumberOfChars"] = 80;
	$tdatamarking_TF[".ShortName"] = "marking_TF";
	$tdatamarking_TF[".OwnerID"] = "";
	$tdatamarking_TF[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsmarking_TF = array();
$fieldToolTipsmarking_TF = array();
$pageTitlesmarking_TF = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmarking_TF["English"] = array();
	$fieldToolTipsmarking_TF["English"] = array();
	$pageTitlesmarking_TF["English"] = array();
	$fieldLabelsmarking_TF["English"]["sid"] = "No Kunci";
	$fieldToolTipsmarking_TF["English"]["sid"] = "";
	$fieldLabelsmarking_TF["English"]["name"] = "Nama Murid";
	$fieldToolTipsmarking_TF["English"]["name"] = "";
	$fieldLabelsmarking_TF["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsmarking_TF["English"]["sCode"] = "";
	$fieldLabelsmarking_TF["English"]["eNo"] = "No Giliran";
	$fieldToolTipsmarking_TF["English"]["eNo"] = "";
	$fieldLabelsmarking_TF["English"]["eYear"] = "Tahun";
	$fieldToolTipsmarking_TF["English"]["eYear"] = "";
	$fieldLabelsmarking_TF["English"]["eType"] = "Peperiksaan";
	$fieldToolTipsmarking_TF["English"]["eType"] = "";
	$fieldLabelsmarking_TF["English"]["s1"] = "AS";
	$fieldToolTipsmarking_TF["English"]["s1"] = "";
	$fieldLabelsmarking_TF["English"]["s2"] = "BA";
	$fieldToolTipsmarking_TF["English"]["s2"] = "";
	$fieldLabelsmarking_TF["English"]["s3"] = "JIK";
	$fieldToolTipsmarking_TF["English"]["s3"] = "";
	$fieldLabelsmarking_TF["English"]["s4"] = "TF";
	$fieldToolTipsmarking_TF["English"]["s4"] = "";
	$fieldLabelsmarking_TF["English"]["s5"] = "TJ";
	$fieldToolTipsmarking_TF["English"]["s5"] = "";
	$fieldLabelsmarking_TF["English"]["s6"] = "UTH";
	$fieldToolTipsmarking_TF["English"]["s6"] = "";
	$fieldLabelsmarking_TF["English"]["s7"] = "PAFA";
	$fieldToolTipsmarking_TF["English"]["s7"] = "";
	$fieldLabelsmarking_TF["English"]["sZone"] = "Zon";
	$fieldToolTipsmarking_TF["English"]["sZone"] = "";
	if (count($fieldToolTipsmarking_TF["English"]))
		$tdatamarking_TF[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmarking_TF[""] = array();
	$fieldToolTipsmarking_TF[""] = array();
	$pageTitlesmarking_TF[""] = array();
	if (count($fieldToolTipsmarking_TF[""]))
		$tdatamarking_TF[".isUseToolTips"] = true;
}


	$tdatamarking_TF[".NCSearch"] = true;



$tdatamarking_TF[".shortTableName"] = "marking_TF";
$tdatamarking_TF[".nSecOptions"] = 0;
$tdatamarking_TF[".recsPerRowList"] = 1;
$tdatamarking_TF[".recsPerRowPrint"] = 1;
$tdatamarking_TF[".mainTableOwnerID"] = "";
$tdatamarking_TF[".moveNext"] = 1;
$tdatamarking_TF[".entityType"] = 1;

$tdatamarking_TF[".strOriginalTableName"] = "exam_marking";




$tdatamarking_TF[".showAddInPopup"] = false;

$tdatamarking_TF[".showEditInPopup"] = false;

$tdatamarking_TF[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamarking_TF[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamarking_TF[".fieldsForRegister"] = array();

$tdatamarking_TF[".listAjax"] = false;

	$tdatamarking_TF[".audit"] = false;

	$tdatamarking_TF[".locking"] = false;



$tdatamarking_TF[".list"] = true;

$tdatamarking_TF[".inlineEdit"] = true;

$tdatamarking_TF[".import"] = true;

$tdatamarking_TF[".exportTo"] = true;



$tdatamarking_TF[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamarking_TF[".searchSaving"] = false;
//

$tdatamarking_TF[".showSearchPanel"] = true;
		$tdatamarking_TF[".flexibleSearch"] = true;

if (isMobile())
	$tdatamarking_TF[".isUseAjaxSuggest"] = false;
else
	$tdatamarking_TF[".isUseAjaxSuggest"] = true;

$tdatamarking_TF[".rowHighlite"] = true;


															
							$tdatamarking_TF[".isUsebuttonHandlers"] = true;

$tdatamarking_TF[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamarking_TF[".isUseTimeForSearch"] = false;





$tdatamarking_TF[".allSearchFields"] = array();
$tdatamarking_TF[".filterFields"] = array();
$tdatamarking_TF[".requiredSearchFields"] = array();

$tdatamarking_TF[".allSearchFields"][] = "eNo";
	$tdatamarking_TF[".allSearchFields"][] = "sCode";
	$tdatamarking_TF[".allSearchFields"][] = "sZone";
	

$tdatamarking_TF[".googleLikeFields"] = array();
$tdatamarking_TF[".googleLikeFields"][] = "name";

$tdatamarking_TF[".panelSearchFields"] = array();
$tdatamarking_TF[".searchPanelOptions"] = array();
$tdatamarking_TF[".panelSearchFields"][] = "name";
	$tdatamarking_TF[".panelSearchFields"][] = "eNo";
	$tdatamarking_TF[".panelSearchFields"][] = "sCode";
	$tdatamarking_TF[".panelSearchFields"][] = "sZone";
	$tdatamarking_TF[".panelSearchFields"][] = "eYear";
	
$tdatamarking_TF[".advSearchFields"] = array();
$tdatamarking_TF[".advSearchFields"][] = "eNo";
$tdatamarking_TF[".advSearchFields"][] = "sCode";
$tdatamarking_TF[".advSearchFields"][] = "sZone";

$tdatamarking_TF[".tableType"] = "list";

$tdatamarking_TF[".printerPageOrientation"] = 0;
$tdatamarking_TF[".nPrinterPageScale"] = 100;

$tdatamarking_TF[".nPrinterSplitRecords"] = 40;

$tdatamarking_TF[".nPrinterPDFSplitRecords"] = 40;



$tdatamarking_TF[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatamarking_TF[".pageSize"] = 20;

$tdatamarking_TF[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.eNo ASC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamarking_TF[".strOrderBy"] = $tstrOrderBy;

$tdatamarking_TF[".orderindexes"] = array();
$tdatamarking_TF[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "exam_marking.eNo");

$tdatamarking_TF[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.name,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  exam_marking.s1,  exam_marking.s2,  exam_marking.s3,  exam_marking.s4,  exam_marking.s5,  exam_marking.s6,  exam_marking.s7,  school.sZone";
$tdatamarking_TF[".sqlFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode";
$tdatamarking_TF[".sqlWhereExpr"] = "";
$tdatamarking_TF[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamarking_TF[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamarking_TF[".arrGroupsPerPage"] = $arrGPP;

$tdatamarking_TF[".highlightSearchResults"] = true;

$tableKeysmarking_TF = array();
$tableKeysmarking_TF[] = "sid";
$tdatamarking_TF[".Keys"] = $tableKeysmarking_TF;

$tdatamarking_TF[".listFields"] = array();
$tdatamarking_TF[".listFields"][] = "sid";
$tdatamarking_TF[".listFields"][] = "eNo";
$tdatamarking_TF[".listFields"][] = "s4";

$tdatamarking_TF[".hideMobileList"] = array();


$tdatamarking_TF[".viewFields"] = array();

$tdatamarking_TF[".addFields"] = array();

$tdatamarking_TF[".masterListFields"] = array();
$tdatamarking_TF[".masterListFields"][] = "sid";
$tdatamarking_TF[".masterListFields"][] = "sZone";
$tdatamarking_TF[".masterListFields"][] = "name";
$tdatamarking_TF[".masterListFields"][] = "eNo";
$tdatamarking_TF[".masterListFields"][] = "s1";
$tdatamarking_TF[".masterListFields"][] = "s2";
$tdatamarking_TF[".masterListFields"][] = "s3";
$tdatamarking_TF[".masterListFields"][] = "s4";
$tdatamarking_TF[".masterListFields"][] = "s5";
$tdatamarking_TF[".masterListFields"][] = "s6";
$tdatamarking_TF[".masterListFields"][] = "s7";
$tdatamarking_TF[".masterListFields"][] = "sCode";
$tdatamarking_TF[".masterListFields"][] = "eYear";
$tdatamarking_TF[".masterListFields"][] = "eType";

$tdatamarking_TF[".inlineAddFields"] = array();

$tdatamarking_TF[".editFields"] = array();

$tdatamarking_TF[".inlineEditFields"] = array();
$tdatamarking_TF[".inlineEditFields"][] = "s4";

$tdatamarking_TF[".exportFields"] = array();
$tdatamarking_TF[".exportFields"][] = "sid";
$tdatamarking_TF[".exportFields"][] = "eNo";
$tdatamarking_TF[".exportFields"][] = "s4";

$tdatamarking_TF[".importFields"] = array();
$tdatamarking_TF[".importFields"][] = "sid";
$tdatamarking_TF[".importFields"][] = "s4";

$tdatamarking_TF[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatamarking_TF["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.name";

	
	
			
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 240;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamarking_TF["name"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sCode";

	
	
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




	$tdatamarking_TF["sCode"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","eNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.eNo";

	
	
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
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 80;

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




	$tdatamarking_TF["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "eYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.eYear";

	
	
			
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








	$tdatamarking_TF["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","eType");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "eType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.eType";

	
	
			
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








	$tdatamarking_TF["eType"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","s1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "s1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s1";

	
	
			
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamarking_TF["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","s2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "s2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s2";

	
	
			
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamarking_TF["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","s3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "s3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s3";

	
	
			
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamarking_TF["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","s4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s4";

	
	
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamarking_TF["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","s5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "s5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s5";

	
	
			
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamarking_TF["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","s6");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "s6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s6";

	
	
			
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamarking_TF["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_TF","s7");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "s7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s7";

	
	
			
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "LULUS";
	$edata["LookupValues"][] = "GAGAL";
	$edata["LookupValues"][] = "TH";

	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 65;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamarking_TF["s7"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("marking_TF","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sZone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school.sZone";

	
	
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




	$tdatamarking_TF["sZone"] = $fdata;


$tables_data["marking_TF"]=&$tdatamarking_TF;
$field_labels["marking_TF"] = &$fieldLabelsmarking_TF;
$fieldToolTips["marking_TF"] = &$fieldToolTipsmarking_TF;
$page_titles["marking_TF"] = &$pageTitlesmarking_TF;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["marking_TF"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["marking_TF"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_marking_TF()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.name,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  exam_marking.s1,  exam_marking.s2,  exam_marking.s3,  exam_marking.s4,  exam_marking.s5,  exam_marking.s6,  exam_marking.s7,  school.sZone";
$proto0["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY exam_marking.eNo ASC";
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
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "marking_TF";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto7["m_sql"] = "exam_marking.name";
$proto7["m_srcTableName"] = "marking_TF";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto9["m_sql"] = "exam_marking.sCode";
$proto9["m_srcTableName"] = "marking_TF";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto11["m_sql"] = "exam_marking.eNo";
$proto11["m_srcTableName"] = "marking_TF";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto13["m_sql"] = "exam_marking.eYear";
$proto13["m_srcTableName"] = "marking_TF";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto15["m_sql"] = "exam_marking.eType";
$proto15["m_srcTableName"] = "marking_TF";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto17["m_sql"] = "exam_marking.s1";
$proto17["m_srcTableName"] = "marking_TF";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto19["m_sql"] = "exam_marking.s2";
$proto19["m_srcTableName"] = "marking_TF";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto21["m_sql"] = "exam_marking.s3";
$proto21["m_srcTableName"] = "marking_TF";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto23["m_sql"] = "exam_marking.s4";
$proto23["m_srcTableName"] = "marking_TF";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto25["m_sql"] = "exam_marking.s5";
$proto25["m_srcTableName"] = "marking_TF";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto27["m_sql"] = "exam_marking.s6";
$proto27["m_srcTableName"] = "marking_TF";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto29["m_sql"] = "exam_marking.s7";
$proto29["m_srcTableName"] = "marking_TF";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "marking_TF"
));

$proto31["m_sql"] = "school.sZone";
$proto31["m_srcTableName"] = "marking_TF";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "exam_marking";
$proto34["m_srcTableName"] = "marking_TF";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "sid";
$proto34["m_columns"][] = "name";
$proto34["m_columns"][] = "gender";
$proto34["m_columns"][] = "birthdate";
$proto34["m_columns"][] = "birthCert";
$proto34["m_columns"][] = "nationality";
$proto34["m_columns"][] = "sCode";
$proto34["m_columns"][] = "eNo";
$proto34["m_columns"][] = "eYear";
$proto34["m_columns"][] = "eType";
$proto34["m_columns"][] = "s1";
$proto34["m_columns"][] = "s2";
$proto34["m_columns"][] = "s3";
$proto34["m_columns"][] = "s4";
$proto34["m_columns"][] = "s5";
$proto34["m_columns"][] = "s6";
$proto34["m_columns"][] = "s7";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "exam_marking";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "marking_TF";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_INNERJOIN";
			$proto38=array();
$proto38["m_strName"] = "school";
$proto38["m_srcTableName"] = "marking_TF";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "sno";
$proto38["m_columns"][] = "sName";
$proto38["m_columns"][] = "sCenter";
$proto38["m_columns"][] = "sCode";
$proto38["m_columns"][] = "sZone";
$proto38["m_columns"][] = "sType";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "marking_TF";
$proto39=array();
$proto39["m_sql"] = "exam_marking.sCode = school.sCode";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= school.sCode";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_TF"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="marking_TF";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_marking_TF = createSqlQuery_marking_TF();



														

$tdatamarking_TF[".sqlquery"] = $queryData_marking_TF;

include_once(getabspath("include/marking_TF_events.php"));
$tableEvents["marking_TF"] = new eventclass_marking_TF;
$tdatamarking_TF[".hasEvents"] = true;

$query = &$queryData_marking_TF;
$table = "marking_TF";
// here goes EVENT_INIT_TABLE event

global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1 || $alevel==2){
$query->addWhere("sZone='".$zon."' AND eYear='"  .$year."'");

}else{
$query->addWhere("eYear='".$year."'");
};

;
unset($query);
?>