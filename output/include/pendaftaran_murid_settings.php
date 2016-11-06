<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapendaftaran_murid = array();
	$tdatapendaftaran_murid[".truncateText"] = true;
	$tdatapendaftaran_murid[".NumberOfChars"] = 80;
	$tdatapendaftaran_murid[".ShortName"] = "pendaftaran_murid";
	$tdatapendaftaran_murid[".OwnerID"] = "";
	$tdatapendaftaran_murid[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelspendaftaran_murid = array();
$fieldToolTipspendaftaran_murid = array();
$pageTitlespendaftaran_murid = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspendaftaran_murid["English"] = array();
	$fieldToolTipspendaftaran_murid["English"] = array();
	$pageTitlespendaftaran_murid["English"] = array();
	$fieldLabelspendaftaran_murid["English"]["sid"] = "Sid";
	$fieldToolTipspendaftaran_murid["English"]["sid"] = "";
	$fieldLabelspendaftaran_murid["English"]["name"] = "Nama Murid";
	$fieldToolTipspendaftaran_murid["English"]["name"] = "";
	$fieldLabelspendaftaran_murid["English"]["gender"] = "Jantina";
	$fieldToolTipspendaftaran_murid["English"]["gender"] = "";
	$fieldLabelspendaftaran_murid["English"]["birthdate"] = "Tarikh Lahir";
	$fieldToolTipspendaftaran_murid["English"]["birthdate"] = "";
	$fieldLabelspendaftaran_murid["English"]["birthCert"] = "Sijil Lahir/IC";
	$fieldToolTipspendaftaran_murid["English"]["birthCert"] = "";
	$fieldLabelspendaftaran_murid["English"]["nationality"] = "WgNegara";
	$fieldToolTipspendaftaran_murid["English"]["nationality"] = "";
	$fieldLabelspendaftaran_murid["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipspendaftaran_murid["English"]["sCode"] = "";
	$fieldLabelspendaftaran_murid["English"]["eNo"] = "No Giliran";
	$fieldToolTipspendaftaran_murid["English"]["eNo"] = "";
	$fieldLabelspendaftaran_murid["English"]["eYear"] = "Tahun";
	$fieldToolTipspendaftaran_murid["English"]["eYear"] = "";
	$fieldLabelspendaftaran_murid["English"]["eType"] = "Peperiksaan";
	$fieldToolTipspendaftaran_murid["English"]["eType"] = "";
	$fieldLabelspendaftaran_murid["English"]["sZone"] = "Zon";
	$fieldToolTipspendaftaran_murid["English"]["sZone"] = "";
	$fieldLabelspendaftaran_murid["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipspendaftaran_murid["English"]["sName"] = "";
	$fieldLabelspendaftaran_murid["English"]["sCenter"] = "Kod Pusat";
	$fieldToolTipspendaftaran_murid["English"]["sCenter"] = "";
	$fieldLabelspendaftaran_murid["English"]["s7"] = "S7";
	$fieldToolTipspendaftaran_murid["English"]["s7"] = "";
	if (count($fieldToolTipspendaftaran_murid["English"]))
		$tdatapendaftaran_murid[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspendaftaran_murid[""] = array();
	$fieldToolTipspendaftaran_murid[""] = array();
	$pageTitlespendaftaran_murid[""] = array();
	$fieldLabelspendaftaran_murid[""]["sName"] = "S Name";
	$fieldToolTipspendaftaran_murid[""]["sName"] = "";
	$fieldLabelspendaftaran_murid[""]["sCenter"] = "S Center";
	$fieldToolTipspendaftaran_murid[""]["sCenter"] = "";
	$fieldLabelspendaftaran_murid[""]["s7"] = "S7";
	$fieldToolTipspendaftaran_murid[""]["s7"] = "";
	if (count($fieldToolTipspendaftaran_murid[""]))
		$tdatapendaftaran_murid[".isUseToolTips"] = true;
}


	$tdatapendaftaran_murid[".NCSearch"] = true;



$tdatapendaftaran_murid[".shortTableName"] = "pendaftaran_murid";
$tdatapendaftaran_murid[".nSecOptions"] = 0;
$tdatapendaftaran_murid[".recsPerRowList"] = 1;
$tdatapendaftaran_murid[".recsPerRowPrint"] = 1;
$tdatapendaftaran_murid[".mainTableOwnerID"] = "";
$tdatapendaftaran_murid[".moveNext"] = 1;
$tdatapendaftaran_murid[".entityType"] = 1;

$tdatapendaftaran_murid[".strOriginalTableName"] = "exam_marking";




$tdatapendaftaran_murid[".showAddInPopup"] = false;

$tdatapendaftaran_murid[".showEditInPopup"] = false;

$tdatapendaftaran_murid[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapendaftaran_murid[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapendaftaran_murid[".fieldsForRegister"] = array();

$tdatapendaftaran_murid[".listAjax"] = false;

	$tdatapendaftaran_murid[".audit"] = false;

	$tdatapendaftaran_murid[".locking"] = false;



$tdatapendaftaran_murid[".list"] = true;

$tdatapendaftaran_murid[".inlineEdit"] = true;
$tdatapendaftaran_murid[".inlineAdd"] = true;

$tdatapendaftaran_murid[".import"] = true;

$tdatapendaftaran_murid[".exportTo"] = true;


$tdatapendaftaran_murid[".delete"] = true;

$tdatapendaftaran_murid[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapendaftaran_murid[".searchSaving"] = false;
//

$tdatapendaftaran_murid[".showSearchPanel"] = true;
		$tdatapendaftaran_murid[".flexibleSearch"] = true;

if (isMobile())
	$tdatapendaftaran_murid[".isUseAjaxSuggest"] = false;
else
	$tdatapendaftaran_murid[".isUseAjaxSuggest"] = true;

$tdatapendaftaran_murid[".rowHighlite"] = true;


																			
$tdatapendaftaran_murid[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapendaftaran_murid[".isUseTimeForSearch"] = false;





$tdatapendaftaran_murid[".allSearchFields"] = array();
$tdatapendaftaran_murid[".filterFields"] = array();
$tdatapendaftaran_murid[".requiredSearchFields"] = array();

$tdatapendaftaran_murid[".allSearchFields"][] = "sName";
	$tdatapendaftaran_murid[".allSearchFields"][] = "sCenter";
	$tdatapendaftaran_murid[".allSearchFields"][] = "name";
	$tdatapendaftaran_murid[".allSearchFields"][] = "birthdate";
	$tdatapendaftaran_murid[".allSearchFields"][] = "birthCert";
	$tdatapendaftaran_murid[".allSearchFields"][] = "gender";
	$tdatapendaftaran_murid[".allSearchFields"][] = "nationality";
	$tdatapendaftaran_murid[".allSearchFields"][] = "eNo";
	$tdatapendaftaran_murid[".allSearchFields"][] = "sCode";
	$tdatapendaftaran_murid[".allSearchFields"][] = "sZone";
	$tdatapendaftaran_murid[".allSearchFields"][] = "eYear";
	

$tdatapendaftaran_murid[".googleLikeFields"] = array();
$tdatapendaftaran_murid[".googleLikeFields"][] = "name";
$tdatapendaftaran_murid[".googleLikeFields"][] = "sName";
$tdatapendaftaran_murid[".googleLikeFields"][] = "sCenter";
$tdatapendaftaran_murid[".googleLikeFields"][] = "s7";

$tdatapendaftaran_murid[".panelSearchFields"] = array();
$tdatapendaftaran_murid[".searchPanelOptions"] = array();
$tdatapendaftaran_murid[".panelSearchFields"][] = "name";
	$tdatapendaftaran_murid[".panelSearchFields"][] = "birthCert";
	$tdatapendaftaran_murid[".panelSearchFields"][] = "eNo";
	$tdatapendaftaran_murid[".panelSearchFields"][] = "sCode";
	$tdatapendaftaran_murid[".panelSearchFields"][] = "sZone";
	$tdatapendaftaran_murid[".panelSearchFields"][] = "eYear";
	
$tdatapendaftaran_murid[".advSearchFields"] = array();
$tdatapendaftaran_murid[".advSearchFields"][] = "sName";
$tdatapendaftaran_murid[".advSearchFields"][] = "sCenter";
$tdatapendaftaran_murid[".advSearchFields"][] = "name";
$tdatapendaftaran_murid[".advSearchFields"][] = "birthdate";
$tdatapendaftaran_murid[".advSearchFields"][] = "birthCert";
$tdatapendaftaran_murid[".advSearchFields"][] = "gender";
$tdatapendaftaran_murid[".advSearchFields"][] = "nationality";
$tdatapendaftaran_murid[".advSearchFields"][] = "eNo";
$tdatapendaftaran_murid[".advSearchFields"][] = "sCode";
$tdatapendaftaran_murid[".advSearchFields"][] = "sZone";
$tdatapendaftaran_murid[".advSearchFields"][] = "eYear";

$tdatapendaftaran_murid[".tableType"] = "list";

$tdatapendaftaran_murid[".printerPageOrientation"] = 0;
$tdatapendaftaran_murid[".nPrinterPageScale"] = 100;

$tdatapendaftaran_murid[".nPrinterSplitRecords"] = 40;

$tdatapendaftaran_murid[".nPrinterPDFSplitRecords"] = 40;



$tdatapendaftaran_murid[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapendaftaran_murid[".pageSize"] = 20;

$tdatapendaftaran_murid[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.eNo, exam_marking.name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapendaftaran_murid[".strOrderBy"] = $tstrOrderBy;

$tdatapendaftaran_murid[".orderindexes"] = array();
$tdatapendaftaran_murid[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "exam_marking.eNo");
$tdatapendaftaran_murid[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "exam_marking.name");

$tdatapendaftaran_murid[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.name,  exam_marking.gender,  exam_marking.birthdate,  exam_marking.birthCert,  exam_marking.nationality,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  school.sName,  school.sZone,  school.sCenter,  exam_marking.s7";
$tdatapendaftaran_murid[".sqlFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$tdatapendaftaran_murid[".sqlWhereExpr"] = "";
$tdatapendaftaran_murid[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapendaftaran_murid[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapendaftaran_murid[".arrGroupsPerPage"] = $arrGPP;

$tdatapendaftaran_murid[".highlightSearchResults"] = true;

$tableKeyspendaftaran_murid = array();
$tableKeyspendaftaran_murid[] = "sid";
$tdatapendaftaran_murid[".Keys"] = $tableKeyspendaftaran_murid;

$tdatapendaftaran_murid[".listFields"] = array();
$tdatapendaftaran_murid[".listFields"][] = "name";
$tdatapendaftaran_murid[".listFields"][] = "birthdate";
$tdatapendaftaran_murid[".listFields"][] = "birthCert";
$tdatapendaftaran_murid[".listFields"][] = "gender";
$tdatapendaftaran_murid[".listFields"][] = "nationality";
$tdatapendaftaran_murid[".listFields"][] = "eNo";
$tdatapendaftaran_murid[".listFields"][] = "sCode";
$tdatapendaftaran_murid[".listFields"][] = "eYear";

$tdatapendaftaran_murid[".hideMobileList"] = array();


$tdatapendaftaran_murid[".viewFields"] = array();

$tdatapendaftaran_murid[".addFields"] = array();

$tdatapendaftaran_murid[".masterListFields"] = array();
$tdatapendaftaran_murid[".masterListFields"][] = "sid";
$tdatapendaftaran_murid[".masterListFields"][] = "sCenter";
$tdatapendaftaran_murid[".masterListFields"][] = "sZone";
$tdatapendaftaran_murid[".masterListFields"][] = "sName";
$tdatapendaftaran_murid[".masterListFields"][] = "s7";
$tdatapendaftaran_murid[".masterListFields"][] = "name";
$tdatapendaftaran_murid[".masterListFields"][] = "birthdate";
$tdatapendaftaran_murid[".masterListFields"][] = "birthCert";
$tdatapendaftaran_murid[".masterListFields"][] = "gender";
$tdatapendaftaran_murid[".masterListFields"][] = "nationality";
$tdatapendaftaran_murid[".masterListFields"][] = "eNo";
$tdatapendaftaran_murid[".masterListFields"][] = "sCode";
$tdatapendaftaran_murid[".masterListFields"][] = "eYear";
$tdatapendaftaran_murid[".masterListFields"][] = "eType";

$tdatapendaftaran_murid[".inlineAddFields"] = array();
$tdatapendaftaran_murid[".inlineAddFields"][] = "name";
$tdatapendaftaran_murid[".inlineAddFields"][] = "birthdate";
$tdatapendaftaran_murid[".inlineAddFields"][] = "birthCert";
$tdatapendaftaran_murid[".inlineAddFields"][] = "gender";
$tdatapendaftaran_murid[".inlineAddFields"][] = "nationality";
$tdatapendaftaran_murid[".inlineAddFields"][] = "eNo";
$tdatapendaftaran_murid[".inlineAddFields"][] = "sCode";
$tdatapendaftaran_murid[".inlineAddFields"][] = "eYear";

$tdatapendaftaran_murid[".editFields"] = array();

$tdatapendaftaran_murid[".inlineEditFields"] = array();
$tdatapendaftaran_murid[".inlineEditFields"][] = "name";
$tdatapendaftaran_murid[".inlineEditFields"][] = "birthdate";
$tdatapendaftaran_murid[".inlineEditFields"][] = "birthCert";
$tdatapendaftaran_murid[".inlineEditFields"][] = "gender";
$tdatapendaftaran_murid[".inlineEditFields"][] = "nationality";
$tdatapendaftaran_murid[".inlineEditFields"][] = "eNo";
$tdatapendaftaran_murid[".inlineEditFields"][] = "sCode";
$tdatapendaftaran_murid[".inlineEditFields"][] = "eYear";

$tdatapendaftaran_murid[".exportFields"] = array();
$tdatapendaftaran_murid[".exportFields"][] = "sName";
$tdatapendaftaran_murid[".exportFields"][] = "sCenter";
$tdatapendaftaran_murid[".exportFields"][] = "name";
$tdatapendaftaran_murid[".exportFields"][] = "birthdate";
$tdatapendaftaran_murid[".exportFields"][] = "birthCert";
$tdatapendaftaran_murid[".exportFields"][] = "gender";
$tdatapendaftaran_murid[".exportFields"][] = "nationality";
$tdatapendaftaran_murid[".exportFields"][] = "eNo";
$tdatapendaftaran_murid[".exportFields"][] = "sCode";
$tdatapendaftaran_murid[".exportFields"][] = "eYear";

$tdatapendaftaran_murid[".importFields"] = array();
$tdatapendaftaran_murid[".importFields"][] = "name";
$tdatapendaftaran_murid[".importFields"][] = "gender";
$tdatapendaftaran_murid[".importFields"][] = "birthdate";
$tdatapendaftaran_murid[".importFields"][] = "birthCert";
$tdatapendaftaran_murid[".importFields"][] = "nationality";

$tdatapendaftaran_murid[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
			
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








	$tdatapendaftaran_murid["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.name";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapendaftaran_murid["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.gender";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapendaftaran_murid["gender"] = $fdata;
//	birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthdate";
	$fdata["GoodName"] = "birthdate";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","birthdate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birthdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.birthdate";

	
	
				$fdata["FieldPermissions"] = true;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapendaftaran_murid["birthdate"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","birthCert");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birthCert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.birthCert";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapendaftaran_murid["birthCert"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","nationality");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nationality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.nationality";

	
	
				$fdata["FieldPermissions"] = true;

			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapendaftaran_murid["nationality"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatapendaftaran_murid["sCode"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","eNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
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




	$tdatapendaftaran_murid["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.eYear";

	
	
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




	$tdatapendaftaran_murid["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","eType");
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








	$tdatapendaftaran_murid["eType"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school.sName";

	
	
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




	$tdatapendaftaran_murid["sName"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","sZone");
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




	$tdatapendaftaran_murid["sZone"] = $fdata;
//	sCenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sCenter";
	$fdata["GoodName"] = "sCenter";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","sCenter");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sCenter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school.sCenter";

	
	
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




	$tdatapendaftaran_murid["sCenter"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran_murid","s7");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 65;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapendaftaran_murid["s7"] = $fdata;


$tables_data["pendaftaran_murid"]=&$tdatapendaftaran_murid;
$field_labels["pendaftaran_murid"] = &$fieldLabelspendaftaran_murid;
$fieldToolTips["pendaftaran_murid"] = &$fieldToolTipspendaftaran_murid;
$page_titles["pendaftaran_murid"] = &$pageTitlespendaftaran_murid;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pendaftaran_murid"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pendaftaran_murid"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pendaftaran_murid()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.name,  exam_marking.gender,  exam_marking.birthdate,  exam_marking.birthCert,  exam_marking.nationality,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  school.sName,  school.sZone,  school.sCenter,  exam_marking.s7";
$proto0["m_strFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY exam_marking.eNo, exam_marking.name";
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
	"m_srcTableName" => "pendaftaran_murid"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "pendaftaran_murid";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto7["m_sql"] = "exam_marking.name";
$proto7["m_srcTableName"] = "pendaftaran_murid";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto9["m_sql"] = "exam_marking.gender";
$proto9["m_srcTableName"] = "pendaftaran_murid";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto11["m_sql"] = "exam_marking.birthdate";
$proto11["m_srcTableName"] = "pendaftaran_murid";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto13["m_sql"] = "exam_marking.birthCert";
$proto13["m_srcTableName"] = "pendaftaran_murid";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto15["m_sql"] = "exam_marking.nationality";
$proto15["m_srcTableName"] = "pendaftaran_murid";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto17["m_sql"] = "exam_marking.sCode";
$proto17["m_srcTableName"] = "pendaftaran_murid";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto19["m_sql"] = "exam_marking.eNo";
$proto19["m_srcTableName"] = "pendaftaran_murid";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto21["m_sql"] = "exam_marking.eYear";
$proto21["m_srcTableName"] = "pendaftaran_murid";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto23["m_sql"] = "exam_marking.eType";
$proto23["m_srcTableName"] = "pendaftaran_murid";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "sName",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto25["m_sql"] = "school.sName";
$proto25["m_srcTableName"] = "pendaftaran_murid";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto27["m_sql"] = "school.sZone";
$proto27["m_srcTableName"] = "pendaftaran_murid";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "sCenter",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto29["m_sql"] = "school.sCenter";
$proto29["m_srcTableName"] = "pendaftaran_murid";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto31["m_sql"] = "exam_marking.s7";
$proto31["m_srcTableName"] = "pendaftaran_murid";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "exam_marking";
$proto34["m_srcTableName"] = "pendaftaran_murid";
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
$proto33["m_srcTableName"] = "pendaftaran_murid";
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
$proto37["m_link"] = "SQLL_LEFTJOIN";
			$proto38=array();
$proto38["m_strName"] = "school";
$proto38["m_srcTableName"] = "pendaftaran_murid";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "sno";
$proto38["m_columns"][] = "sName";
$proto38["m_columns"][] = "sCenter";
$proto38["m_columns"][] = "sCode";
$proto38["m_columns"][] = "sZone";
$proto38["m_columns"][] = "sType";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "pendaftaran_murid";
$proto39=array();
$proto39["m_sql"] = "exam_marking.sCode = school.sCode";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
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
	"m_srcTableName" => "pendaftaran_murid"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran_murid"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="pendaftaran_murid";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pendaftaran_murid = createSqlQuery_pendaftaran_murid();



														

$tdatapendaftaran_murid[".sqlquery"] = $queryData_pendaftaran_murid;

include_once(getabspath("include/pendaftaran_murid_events.php"));
$tableEvents["pendaftaran_murid"] = new eventclass_pendaftaran_murid;
$tdatapendaftaran_murid[".hasEvents"] = true;

$query = &$queryData_pendaftaran_murid;
$table = "pendaftaran_murid";
// here goes EVENT_INIT_TABLE event

global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1){
$query->addWhere("sZone='".$zon."' AND eYear='"  .$year."'");

}else{
$query->addWhere("eYear='".$year."'");
};
;
unset($query);
?>