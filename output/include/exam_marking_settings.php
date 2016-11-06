<?php
require_once(getabspath("classes/cipherer.php"));




$tdataexam_marking = array();
	$tdataexam_marking[".truncateText"] = true;
	$tdataexam_marking[".NumberOfChars"] = 80;
	$tdataexam_marking[".ShortName"] = "exam_marking";
	$tdataexam_marking[".OwnerID"] = "";
	$tdataexam_marking[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsexam_marking = array();
$fieldToolTipsexam_marking = array();
$pageTitlesexam_marking = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsexam_marking["English"] = array();
	$fieldToolTipsexam_marking["English"] = array();
	$pageTitlesexam_marking["English"] = array();
	$fieldLabelsexam_marking["English"]["sid"] = "No Kunci";
	$fieldToolTipsexam_marking["English"]["sid"] = "";
	$fieldLabelsexam_marking["English"]["name"] = "Nama Murid";
	$fieldToolTipsexam_marking["English"]["name"] = "";
	$fieldLabelsexam_marking["English"]["gender"] = "Jantina";
	$fieldToolTipsexam_marking["English"]["gender"] = "";
	$fieldLabelsexam_marking["English"]["birthdate"] = "Tarikh Lahir";
	$fieldToolTipsexam_marking["English"]["birthdate"] = "";
	$fieldLabelsexam_marking["English"]["birthCert"] = "Sijil Lahir";
	$fieldToolTipsexam_marking["English"]["birthCert"] = "";
	$fieldLabelsexam_marking["English"]["nationality"] = "WgNegara";
	$fieldToolTipsexam_marking["English"]["nationality"] = "";
	$fieldLabelsexam_marking["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsexam_marking["English"]["sCode"] = "";
	$fieldLabelsexam_marking["English"]["eNo"] = "No Giliran";
	$fieldToolTipsexam_marking["English"]["eNo"] = "";
	$fieldLabelsexam_marking["English"]["eYear"] = "Tahun";
	$fieldToolTipsexam_marking["English"]["eYear"] = "";
	$fieldLabelsexam_marking["English"]["eType"] = "Peperiksaan";
	$fieldToolTipsexam_marking["English"]["eType"] = "";
	$fieldLabelsexam_marking["English"]["s1"] = "AS";
	$fieldToolTipsexam_marking["English"]["s1"] = "";
	$fieldLabelsexam_marking["English"]["s2"] = "BA";
	$fieldToolTipsexam_marking["English"]["s2"] = "";
	$fieldLabelsexam_marking["English"]["s3"] = "JIK";
	$fieldToolTipsexam_marking["English"]["s3"] = "";
	$fieldLabelsexam_marking["English"]["s4"] = "TF";
	$fieldToolTipsexam_marking["English"]["s4"] = "";
	$fieldLabelsexam_marking["English"]["s5"] = "TJ";
	$fieldToolTipsexam_marking["English"]["s5"] = "";
	$fieldLabelsexam_marking["English"]["s6"] = "UTH";
	$fieldToolTipsexam_marking["English"]["s6"] = "";
	$fieldLabelsexam_marking["English"]["s7"] = "PAFA";
	$fieldToolTipsexam_marking["English"]["s7"] = "";
	$fieldLabelsexam_marking["English"]["sZone"] = "Zon";
	$fieldToolTipsexam_marking["English"]["sZone"] = "";
	if (count($fieldToolTipsexam_marking["English"]))
		$tdataexam_marking[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsexam_marking[""] = array();
	$fieldToolTipsexam_marking[""] = array();
	$pageTitlesexam_marking[""] = array();
	if (count($fieldToolTipsexam_marking[""]))
		$tdataexam_marking[".isUseToolTips"] = true;
}


	$tdataexam_marking[".NCSearch"] = true;



$tdataexam_marking[".shortTableName"] = "exam_marking";
$tdataexam_marking[".nSecOptions"] = 0;
$tdataexam_marking[".recsPerRowList"] = 1;
$tdataexam_marking[".recsPerRowPrint"] = 1;
$tdataexam_marking[".mainTableOwnerID"] = "";
$tdataexam_marking[".moveNext"] = 1;
$tdataexam_marking[".entityType"] = 0;

$tdataexam_marking[".strOriginalTableName"] = "exam_marking";




$tdataexam_marking[".showAddInPopup"] = false;

$tdataexam_marking[".showEditInPopup"] = false;

$tdataexam_marking[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataexam_marking[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataexam_marking[".fieldsForRegister"] = array();

$tdataexam_marking[".listAjax"] = false;

	$tdataexam_marking[".audit"] = false;

	$tdataexam_marking[".locking"] = false;



$tdataexam_marking[".list"] = true;

$tdataexam_marking[".inlineEdit"] = true;


$tdataexam_marking[".exportTo"] = true;



$tdataexam_marking[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataexam_marking[".searchSaving"] = false;
//

$tdataexam_marking[".showSearchPanel"] = true;
		$tdataexam_marking[".flexibleSearch"] = true;

if (isMobile())
	$tdataexam_marking[".isUseAjaxSuggest"] = false;
else
	$tdataexam_marking[".isUseAjaxSuggest"] = true;

$tdataexam_marking[".rowHighlite"] = true;


							
									
			
			
			
			
			$tdataexam_marking[".isUsebuttonHandlers"] = true;

$tdataexam_marking[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexam_marking[".isUseTimeForSearch"] = false;





$tdataexam_marking[".allSearchFields"] = array();
$tdataexam_marking[".filterFields"] = array();
$tdataexam_marking[".requiredSearchFields"] = array();

$tdataexam_marking[".allSearchFields"][] = "eNo";
	$tdataexam_marking[".allSearchFields"][] = "s1";
	$tdataexam_marking[".allSearchFields"][] = "s2";
	$tdataexam_marking[".allSearchFields"][] = "s3";
	$tdataexam_marking[".allSearchFields"][] = "s4";
	$tdataexam_marking[".allSearchFields"][] = "s5";
	$tdataexam_marking[".allSearchFields"][] = "s6";
	$tdataexam_marking[".allSearchFields"][] = "s7";
	$tdataexam_marking[".allSearchFields"][] = "sCode";
	$tdataexam_marking[".allSearchFields"][] = "sZone";
	

$tdataexam_marking[".googleLikeFields"] = array();
$tdataexam_marking[".googleLikeFields"][] = "name";

$tdataexam_marking[".panelSearchFields"] = array();
$tdataexam_marking[".searchPanelOptions"] = array();
$tdataexam_marking[".panelSearchFields"][] = "name";
	$tdataexam_marking[".panelSearchFields"][] = "birthCert";
	$tdataexam_marking[".panelSearchFields"][] = "eNo";
	$tdataexam_marking[".panelSearchFields"][] = "sCode";
	$tdataexam_marking[".panelSearchFields"][] = "sZone";
	$tdataexam_marking[".panelSearchFields"][] = "eYear";
	
$tdataexam_marking[".advSearchFields"] = array();
$tdataexam_marking[".advSearchFields"][] = "eNo";
$tdataexam_marking[".advSearchFields"][] = "s1";
$tdataexam_marking[".advSearchFields"][] = "s2";
$tdataexam_marking[".advSearchFields"][] = "s3";
$tdataexam_marking[".advSearchFields"][] = "s4";
$tdataexam_marking[".advSearchFields"][] = "s5";
$tdataexam_marking[".advSearchFields"][] = "s6";
$tdataexam_marking[".advSearchFields"][] = "s7";
$tdataexam_marking[".advSearchFields"][] = "sCode";
$tdataexam_marking[".advSearchFields"][] = "sZone";

$tdataexam_marking[".tableType"] = "list";

$tdataexam_marking[".printerPageOrientation"] = 0;
$tdataexam_marking[".nPrinterPageScale"] = 100;

$tdataexam_marking[".nPrinterSplitRecords"] = 40;

$tdataexam_marking[".nPrinterPDFSplitRecords"] = 40;



$tdataexam_marking[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataexam_marking[".pageSize"] = 20;

$tdataexam_marking[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.eNo";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexam_marking[".strOrderBy"] = $tstrOrderBy;

$tdataexam_marking[".orderindexes"] = array();
$tdataexam_marking[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "exam_marking.eNo");

$tdataexam_marking[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.name,  exam_marking.gender,  exam_marking.birthdate,  exam_marking.birthCert,  exam_marking.nationality,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  exam_marking.s1,  exam_marking.s2,  exam_marking.s3,  exam_marking.s4,  exam_marking.s5,  exam_marking.s6,  exam_marking.s7,  school.sZone";
$tdataexam_marking[".sqlFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode";
$tdataexam_marking[".sqlWhereExpr"] = "";
$tdataexam_marking[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexam_marking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexam_marking[".arrGroupsPerPage"] = $arrGPP;

$tdataexam_marking[".highlightSearchResults"] = true;

$tableKeysexam_marking = array();
$tableKeysexam_marking[] = "sid";
$tdataexam_marking[".Keys"] = $tableKeysexam_marking;

$tdataexam_marking[".listFields"] = array();
$tdataexam_marking[".listFields"][] = "sid";
$tdataexam_marking[".listFields"][] = "eNo";
$tdataexam_marking[".listFields"][] = "s1";
$tdataexam_marking[".listFields"][] = "s2";
$tdataexam_marking[".listFields"][] = "s3";
$tdataexam_marking[".listFields"][] = "s4";
$tdataexam_marking[".listFields"][] = "s5";
$tdataexam_marking[".listFields"][] = "s6";
$tdataexam_marking[".listFields"][] = "s7";

$tdataexam_marking[".hideMobileList"] = array();


$tdataexam_marking[".viewFields"] = array();

$tdataexam_marking[".addFields"] = array();

$tdataexam_marking[".masterListFields"] = array();
$tdataexam_marking[".masterListFields"][] = "sid";
$tdataexam_marking[".masterListFields"][] = "sZone";
$tdataexam_marking[".masterListFields"][] = "name";
$tdataexam_marking[".masterListFields"][] = "birthdate";
$tdataexam_marking[".masterListFields"][] = "birthCert";
$tdataexam_marking[".masterListFields"][] = "gender";
$tdataexam_marking[".masterListFields"][] = "nationality";
$tdataexam_marking[".masterListFields"][] = "eNo";
$tdataexam_marking[".masterListFields"][] = "s1";
$tdataexam_marking[".masterListFields"][] = "s2";
$tdataexam_marking[".masterListFields"][] = "s3";
$tdataexam_marking[".masterListFields"][] = "s4";
$tdataexam_marking[".masterListFields"][] = "s5";
$tdataexam_marking[".masterListFields"][] = "s6";
$tdataexam_marking[".masterListFields"][] = "s7";
$tdataexam_marking[".masterListFields"][] = "sCode";
$tdataexam_marking[".masterListFields"][] = "eYear";
$tdataexam_marking[".masterListFields"][] = "eType";

$tdataexam_marking[".inlineAddFields"] = array();

$tdataexam_marking[".editFields"] = array();

$tdataexam_marking[".inlineEditFields"] = array();
$tdataexam_marking[".inlineEditFields"][] = "s1";
$tdataexam_marking[".inlineEditFields"][] = "s2";
$tdataexam_marking[".inlineEditFields"][] = "s3";
$tdataexam_marking[".inlineEditFields"][] = "s4";
$tdataexam_marking[".inlineEditFields"][] = "s5";
$tdataexam_marking[".inlineEditFields"][] = "s6";
$tdataexam_marking[".inlineEditFields"][] = "s7";

$tdataexam_marking[".exportFields"] = array();
$tdataexam_marking[".exportFields"][] = "sid";
$tdataexam_marking[".exportFields"][] = "eNo";
$tdataexam_marking[".exportFields"][] = "s1";
$tdataexam_marking[".exportFields"][] = "s2";
$tdataexam_marking[".exportFields"][] = "s3";
$tdataexam_marking[".exportFields"][] = "s4";
$tdataexam_marking[".exportFields"][] = "s5";
$tdataexam_marking[".exportFields"][] = "s6";

$tdataexam_marking[".importFields"] = array();

$tdataexam_marking[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","sid");
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








	$tdataexam_marking["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","name");
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








	$tdataexam_marking["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.gender";

	
	
			
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
		$edata["LCType"] = 4;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "L";
	$edata["LookupValues"][] = "P";

	
	
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








	$tdataexam_marking["gender"] = $fdata;
//	birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthdate";
	$fdata["GoodName"] = "birthdate";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","birthdate");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "birthdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.birthdate";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 0;

	
	
	
		$edata["controlWidth"] = 80;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataexam_marking["birthdate"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","birthCert");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "birthCert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.birthCert";

	
	
			
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
			$edata["EditParams"].= " maxlength=25";

		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataexam_marking["birthCert"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","nationality");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "nationality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.nationality";

	
	
			
			
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
		$edata["LCType"] = 4;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";

	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataexam_marking["nationality"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","sCode");
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




	$tdataexam_marking["sCode"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","eNo");
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




	$tdataexam_marking["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","eYear");
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








	$tdataexam_marking["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","eType");
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








	$tdataexam_marking["eType"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","s1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s1";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataexam_marking["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","s2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataexam_marking["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","s3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s3";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataexam_marking["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","s4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataexam_marking["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","s5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s5";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataexam_marking["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","s6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s6";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataexam_marking["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("exam_marking","s7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s7";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataexam_marking["s7"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("exam_marking","sZone");
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




	$tdataexam_marking["sZone"] = $fdata;


$tables_data["exam_marking"]=&$tdataexam_marking;
$field_labels["exam_marking"] = &$fieldLabelsexam_marking;
$fieldToolTips["exam_marking"] = &$fieldToolTipsexam_marking;
$page_titles["exam_marking"] = &$pageTitlesexam_marking;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exam_marking"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["exam_marking"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exam_marking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.name,  exam_marking.gender,  exam_marking.birthdate,  exam_marking.birthCert,  exam_marking.nationality,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  exam_marking.s1,  exam_marking.s2,  exam_marking.s3,  exam_marking.s4,  exam_marking.s5,  exam_marking.s6,  exam_marking.s7,  school.sZone";
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
	"m_srcTableName" => "exam_marking"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "exam_marking";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto7["m_sql"] = "exam_marking.name";
$proto7["m_srcTableName"] = "exam_marking";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto9["m_sql"] = "exam_marking.gender";
$proto9["m_srcTableName"] = "exam_marking";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto11["m_sql"] = "exam_marking.birthdate";
$proto11["m_srcTableName"] = "exam_marking";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto13["m_sql"] = "exam_marking.birthCert";
$proto13["m_srcTableName"] = "exam_marking";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto15["m_sql"] = "exam_marking.nationality";
$proto15["m_srcTableName"] = "exam_marking";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto17["m_sql"] = "exam_marking.sCode";
$proto17["m_srcTableName"] = "exam_marking";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto19["m_sql"] = "exam_marking.eNo";
$proto19["m_srcTableName"] = "exam_marking";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto21["m_sql"] = "exam_marking.eYear";
$proto21["m_srcTableName"] = "exam_marking";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto23["m_sql"] = "exam_marking.eType";
$proto23["m_srcTableName"] = "exam_marking";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto25["m_sql"] = "exam_marking.s1";
$proto25["m_srcTableName"] = "exam_marking";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto27["m_sql"] = "exam_marking.s2";
$proto27["m_srcTableName"] = "exam_marking";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto29["m_sql"] = "exam_marking.s3";
$proto29["m_srcTableName"] = "exam_marking";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto31["m_sql"] = "exam_marking.s4";
$proto31["m_srcTableName"] = "exam_marking";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto33["m_sql"] = "exam_marking.s5";
$proto33["m_srcTableName"] = "exam_marking";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto35["m_sql"] = "exam_marking.s6";
$proto35["m_srcTableName"] = "exam_marking";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto37["m_sql"] = "exam_marking.s7";
$proto37["m_srcTableName"] = "exam_marking";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "exam_marking"
));

$proto39["m_sql"] = "school.sZone";
$proto39["m_srcTableName"] = "exam_marking";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "exam_marking";
$proto42["m_srcTableName"] = "exam_marking";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "sid";
$proto42["m_columns"][] = "name";
$proto42["m_columns"][] = "gender";
$proto42["m_columns"][] = "birthdate";
$proto42["m_columns"][] = "birthCert";
$proto42["m_columns"][] = "nationality";
$proto42["m_columns"][] = "sCode";
$proto42["m_columns"][] = "eNo";
$proto42["m_columns"][] = "eYear";
$proto42["m_columns"][] = "eType";
$proto42["m_columns"][] = "s1";
$proto42["m_columns"][] = "s2";
$proto42["m_columns"][] = "s3";
$proto42["m_columns"][] = "s4";
$proto42["m_columns"][] = "s5";
$proto42["m_columns"][] = "s6";
$proto42["m_columns"][] = "s7";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "exam_marking";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "exam_marking";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "school";
$proto46["m_srcTableName"] = "exam_marking";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "sno";
$proto46["m_columns"][] = "sName";
$proto46["m_columns"][] = "sCenter";
$proto46["m_columns"][] = "sCode";
$proto46["m_columns"][] = "sZone";
$proto46["m_columns"][] = "sType";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "exam_marking";
$proto47=array();
$proto47["m_sql"] = "exam_marking.sCode = school.sCode";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= school.sCode";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "exam_marking"
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 1;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="exam_marking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exam_marking = createSqlQuery_exam_marking();



																		

$tdataexam_marking[".sqlquery"] = $queryData_exam_marking;

include_once(getabspath("include/exam_marking_events.php"));
$tableEvents["exam_marking"] = new eventclass_exam_marking;
$tdataexam_marking[".hasEvents"] = true;

$query = &$queryData_exam_marking;
$table = "exam_marking";
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