<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamarking_BA = array();
	$tdatamarking_BA[".truncateText"] = true;
	$tdatamarking_BA[".NumberOfChars"] = 80;
	$tdatamarking_BA[".ShortName"] = "marking_BA";
	$tdatamarking_BA[".OwnerID"] = "";
	$tdatamarking_BA[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsmarking_BA = array();
$fieldToolTipsmarking_BA = array();
$pageTitlesmarking_BA = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmarking_BA["English"] = array();
	$fieldToolTipsmarking_BA["English"] = array();
	$pageTitlesmarking_BA["English"] = array();
	$fieldLabelsmarking_BA["English"]["sid"] = "No Kunci";
	$fieldToolTipsmarking_BA["English"]["sid"] = "";
	$fieldLabelsmarking_BA["English"]["name"] = "Nama Murid";
	$fieldToolTipsmarking_BA["English"]["name"] = "";
	$fieldLabelsmarking_BA["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsmarking_BA["English"]["sCode"] = "";
	$fieldLabelsmarking_BA["English"]["eNo"] = "No Giliran";
	$fieldToolTipsmarking_BA["English"]["eNo"] = "";
	$fieldLabelsmarking_BA["English"]["eYear"] = "Tahun";
	$fieldToolTipsmarking_BA["English"]["eYear"] = "";
	$fieldLabelsmarking_BA["English"]["eType"] = "Peperiksaan";
	$fieldToolTipsmarking_BA["English"]["eType"] = "";
	$fieldLabelsmarking_BA["English"]["s1"] = "AS";
	$fieldToolTipsmarking_BA["English"]["s1"] = "";
	$fieldLabelsmarking_BA["English"]["s2"] = "BA";
	$fieldToolTipsmarking_BA["English"]["s2"] = "";
	$fieldLabelsmarking_BA["English"]["s3"] = "JIK";
	$fieldToolTipsmarking_BA["English"]["s3"] = "";
	$fieldLabelsmarking_BA["English"]["s4"] = "TF";
	$fieldToolTipsmarking_BA["English"]["s4"] = "";
	$fieldLabelsmarking_BA["English"]["s5"] = "TJ";
	$fieldToolTipsmarking_BA["English"]["s5"] = "";
	$fieldLabelsmarking_BA["English"]["s6"] = "UTH";
	$fieldToolTipsmarking_BA["English"]["s6"] = "";
	$fieldLabelsmarking_BA["English"]["s7"] = "PAFA";
	$fieldToolTipsmarking_BA["English"]["s7"] = "";
	$fieldLabelsmarking_BA["English"]["sZone"] = "Zon";
	$fieldToolTipsmarking_BA["English"]["sZone"] = "";
	if (count($fieldToolTipsmarking_BA["English"]))
		$tdatamarking_BA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmarking_BA[""] = array();
	$fieldToolTipsmarking_BA[""] = array();
	$pageTitlesmarking_BA[""] = array();
	if (count($fieldToolTipsmarking_BA[""]))
		$tdatamarking_BA[".isUseToolTips"] = true;
}


	$tdatamarking_BA[".NCSearch"] = true;



$tdatamarking_BA[".shortTableName"] = "marking_BA";
$tdatamarking_BA[".nSecOptions"] = 0;
$tdatamarking_BA[".recsPerRowList"] = 1;
$tdatamarking_BA[".recsPerRowPrint"] = 1;
$tdatamarking_BA[".mainTableOwnerID"] = "";
$tdatamarking_BA[".moveNext"] = 1;
$tdatamarking_BA[".entityType"] = 1;

$tdatamarking_BA[".strOriginalTableName"] = "exam_marking";




$tdatamarking_BA[".showAddInPopup"] = false;

$tdatamarking_BA[".showEditInPopup"] = false;

$tdatamarking_BA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamarking_BA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamarking_BA[".fieldsForRegister"] = array();

$tdatamarking_BA[".listAjax"] = false;

	$tdatamarking_BA[".audit"] = false;

	$tdatamarking_BA[".locking"] = false;



$tdatamarking_BA[".list"] = true;

$tdatamarking_BA[".inlineEdit"] = true;

$tdatamarking_BA[".import"] = true;

$tdatamarking_BA[".exportTo"] = true;



$tdatamarking_BA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamarking_BA[".searchSaving"] = false;
//

$tdatamarking_BA[".showSearchPanel"] = true;
		$tdatamarking_BA[".flexibleSearch"] = true;

if (isMobile())
	$tdatamarking_BA[".isUseAjaxSuggest"] = false;
else
	$tdatamarking_BA[".isUseAjaxSuggest"] = true;

$tdatamarking_BA[".rowHighlite"] = true;


									
												$tdatamarking_BA[".isUsebuttonHandlers"] = true;

$tdatamarking_BA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamarking_BA[".isUseTimeForSearch"] = false;





$tdatamarking_BA[".allSearchFields"] = array();
$tdatamarking_BA[".filterFields"] = array();
$tdatamarking_BA[".requiredSearchFields"] = array();

$tdatamarking_BA[".allSearchFields"][] = "eNo";
	$tdatamarking_BA[".allSearchFields"][] = "sCode";
	$tdatamarking_BA[".allSearchFields"][] = "sZone";
	

$tdatamarking_BA[".googleLikeFields"] = array();
$tdatamarking_BA[".googleLikeFields"][] = "name";

$tdatamarking_BA[".panelSearchFields"] = array();
$tdatamarking_BA[".searchPanelOptions"] = array();
$tdatamarking_BA[".panelSearchFields"][] = "name";
	$tdatamarking_BA[".panelSearchFields"][] = "eNo";
	$tdatamarking_BA[".panelSearchFields"][] = "sCode";
	$tdatamarking_BA[".panelSearchFields"][] = "sZone";
	$tdatamarking_BA[".panelSearchFields"][] = "eYear";
	
$tdatamarking_BA[".advSearchFields"] = array();
$tdatamarking_BA[".advSearchFields"][] = "eNo";
$tdatamarking_BA[".advSearchFields"][] = "sCode";
$tdatamarking_BA[".advSearchFields"][] = "sZone";

$tdatamarking_BA[".tableType"] = "list";

$tdatamarking_BA[".printerPageOrientation"] = 0;
$tdatamarking_BA[".nPrinterPageScale"] = 100;

$tdatamarking_BA[".nPrinterSplitRecords"] = 40;

$tdatamarking_BA[".nPrinterPDFSplitRecords"] = 40;



$tdatamarking_BA[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatamarking_BA[".pageSize"] = 20;

$tdatamarking_BA[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.eNo";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamarking_BA[".strOrderBy"] = $tstrOrderBy;

$tdatamarking_BA[".orderindexes"] = array();
$tdatamarking_BA[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "exam_marking.eNo");

$tdatamarking_BA[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.name,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  exam_marking.s1,  exam_marking.s2,  exam_marking.s3,  exam_marking.s4,  exam_marking.s5,  exam_marking.s6,  exam_marking.s7,  school.sZone";
$tdatamarking_BA[".sqlFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode";
$tdatamarking_BA[".sqlWhereExpr"] = "";
$tdatamarking_BA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamarking_BA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamarking_BA[".arrGroupsPerPage"] = $arrGPP;

$tdatamarking_BA[".highlightSearchResults"] = true;

$tableKeysmarking_BA = array();
$tableKeysmarking_BA[] = "sid";
$tdatamarking_BA[".Keys"] = $tableKeysmarking_BA;

$tdatamarking_BA[".listFields"] = array();
$tdatamarking_BA[".listFields"][] = "sid";
$tdatamarking_BA[".listFields"][] = "eNo";
$tdatamarking_BA[".listFields"][] = "s2";

$tdatamarking_BA[".hideMobileList"] = array();


$tdatamarking_BA[".viewFields"] = array();

$tdatamarking_BA[".addFields"] = array();

$tdatamarking_BA[".masterListFields"] = array();
$tdatamarking_BA[".masterListFields"][] = "sid";
$tdatamarking_BA[".masterListFields"][] = "sZone";
$tdatamarking_BA[".masterListFields"][] = "name";
$tdatamarking_BA[".masterListFields"][] = "eNo";
$tdatamarking_BA[".masterListFields"][] = "s1";
$tdatamarking_BA[".masterListFields"][] = "s2";
$tdatamarking_BA[".masterListFields"][] = "s3";
$tdatamarking_BA[".masterListFields"][] = "s4";
$tdatamarking_BA[".masterListFields"][] = "s5";
$tdatamarking_BA[".masterListFields"][] = "s6";
$tdatamarking_BA[".masterListFields"][] = "s7";
$tdatamarking_BA[".masterListFields"][] = "sCode";
$tdatamarking_BA[".masterListFields"][] = "eYear";
$tdatamarking_BA[".masterListFields"][] = "eType";

$tdatamarking_BA[".inlineAddFields"] = array();

$tdatamarking_BA[".editFields"] = array();

$tdatamarking_BA[".inlineEditFields"] = array();
$tdatamarking_BA[".inlineEditFields"][] = "s2";

$tdatamarking_BA[".exportFields"] = array();
$tdatamarking_BA[".exportFields"][] = "sid";
$tdatamarking_BA[".exportFields"][] = "eNo";
$tdatamarking_BA[".exportFields"][] = "s2";

$tdatamarking_BA[".importFields"] = array();
$tdatamarking_BA[".importFields"][] = "sid";
$tdatamarking_BA[".importFields"][] = "s2";

$tdatamarking_BA[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","sid");
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








	$tdatamarking_BA["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","name");
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








	$tdatamarking_BA["name"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","sCode");
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




	$tdatamarking_BA["sCode"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","eNo");
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




	$tdatamarking_BA["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","eYear");
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








	$tdatamarking_BA["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","eType");
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








	$tdatamarking_BA["eType"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","s1");
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








	$tdatamarking_BA["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","s2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s2";

	
	
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








	$tdatamarking_BA["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","s3");
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








	$tdatamarking_BA["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","s4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "s4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s4";

	
	
			
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








	$tdatamarking_BA["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","s5");
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








	$tdatamarking_BA["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","s6");
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








	$tdatamarking_BA["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("marking_BA","s7");
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








	$tdatamarking_BA["s7"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("marking_BA","sZone");
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




	$tdatamarking_BA["sZone"] = $fdata;


$tables_data["marking_BA"]=&$tdatamarking_BA;
$field_labels["marking_BA"] = &$fieldLabelsmarking_BA;
$fieldToolTips["marking_BA"] = &$fieldToolTipsmarking_BA;
$page_titles["marking_BA"] = &$pageTitlesmarking_BA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["marking_BA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["marking_BA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_marking_BA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.name,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  exam_marking.s1,  exam_marking.s2,  exam_marking.s3,  exam_marking.s4,  exam_marking.s5,  exam_marking.s6,  exam_marking.s7,  school.sZone";
$proto0["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY exam_marking.eNo";
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
	"m_srcTableName" => "marking_BA"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "marking_BA";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto7["m_sql"] = "exam_marking.name";
$proto7["m_srcTableName"] = "marking_BA";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto9["m_sql"] = "exam_marking.sCode";
$proto9["m_srcTableName"] = "marking_BA";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto11["m_sql"] = "exam_marking.eNo";
$proto11["m_srcTableName"] = "marking_BA";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto13["m_sql"] = "exam_marking.eYear";
$proto13["m_srcTableName"] = "marking_BA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto15["m_sql"] = "exam_marking.eType";
$proto15["m_srcTableName"] = "marking_BA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto17["m_sql"] = "exam_marking.s1";
$proto17["m_srcTableName"] = "marking_BA";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto19["m_sql"] = "exam_marking.s2";
$proto19["m_srcTableName"] = "marking_BA";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto21["m_sql"] = "exam_marking.s3";
$proto21["m_srcTableName"] = "marking_BA";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto23["m_sql"] = "exam_marking.s4";
$proto23["m_srcTableName"] = "marking_BA";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto25["m_sql"] = "exam_marking.s5";
$proto25["m_srcTableName"] = "marking_BA";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto27["m_sql"] = "exam_marking.s6";
$proto27["m_srcTableName"] = "marking_BA";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
));

$proto29["m_sql"] = "exam_marking.s7";
$proto29["m_srcTableName"] = "marking_BA";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "marking_BA"
));

$proto31["m_sql"] = "school.sZone";
$proto31["m_srcTableName"] = "marking_BA";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "exam_marking";
$proto34["m_srcTableName"] = "marking_BA";
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
$proto33["m_srcTableName"] = "marking_BA";
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
$proto38["m_srcTableName"] = "marking_BA";
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
$proto37["m_srcTableName"] = "marking_BA";
$proto39=array();
$proto39["m_sql"] = "exam_marking.sCode = school.sCode";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "marking_BA"
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
	"m_srcTableName" => "marking_BA"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="marking_BA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_marking_BA = createSqlQuery_marking_BA();



														

$tdatamarking_BA[".sqlquery"] = $queryData_marking_BA;

include_once(getabspath("include/marking_BA_events.php"));
$tableEvents["marking_BA"] = new eventclass_marking_BA;
$tdatamarking_BA[".hasEvents"] = true;

$query = &$queryData_marking_BA;
$table = "marking_BA";
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