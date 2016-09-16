<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapendaftaran = array();
	$tdatapendaftaran[".truncateText"] = true;
	$tdatapendaftaran[".NumberOfChars"] = 80;
	$tdatapendaftaran[".ShortName"] = "pendaftaran";
	$tdatapendaftaran[".OwnerID"] = "";
	$tdatapendaftaran[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelspendaftaran = array();
$fieldToolTipspendaftaran = array();
$pageTitlespendaftaran = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspendaftaran["English"] = array();
	$fieldToolTipspendaftaran["English"] = array();
	$pageTitlespendaftaran["English"] = array();
	$fieldLabelspendaftaran["English"]["sid"] = "Sid";
	$fieldToolTipspendaftaran["English"]["sid"] = "";
	$fieldLabelspendaftaran["English"]["name"] = "Nama Murid";
	$fieldToolTipspendaftaran["English"]["name"] = "";
	$fieldLabelspendaftaran["English"]["gender"] = "Jantina";
	$fieldToolTipspendaftaran["English"]["gender"] = "";
	$fieldLabelspendaftaran["English"]["birthdate"] = "Tarikh Lahir";
	$fieldToolTipspendaftaran["English"]["birthdate"] = "";
	$fieldLabelspendaftaran["English"]["birthCert"] = "Sijil Lahir/IC";
	$fieldToolTipspendaftaran["English"]["birthCert"] = "";
	$fieldLabelspendaftaran["English"]["nationality"] = "WgNegara";
	$fieldToolTipspendaftaran["English"]["nationality"] = "";
	$fieldLabelspendaftaran["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipspendaftaran["English"]["sCode"] = "";
	$fieldLabelspendaftaran["English"]["eNo"] = "No Giliran";
	$fieldToolTipspendaftaran["English"]["eNo"] = "";
	$fieldLabelspendaftaran["English"]["eYear"] = "Tahun";
	$fieldToolTipspendaftaran["English"]["eYear"] = "";
	$fieldLabelspendaftaran["English"]["eType"] = "Peperiksaan";
	$fieldToolTipspendaftaran["English"]["eType"] = "";
	$fieldLabelspendaftaran["English"]["sZone"] = "Zon";
	$fieldToolTipspendaftaran["English"]["sZone"] = "";
	$fieldLabelspendaftaran["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipspendaftaran["English"]["sName"] = "";
	$fieldLabelspendaftaran["English"]["sCenter"] = "Kod Pusat";
	$fieldToolTipspendaftaran["English"]["sCenter"] = "";
	if (count($fieldToolTipspendaftaran["English"]))
		$tdatapendaftaran[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspendaftaran[""] = array();
	$fieldToolTipspendaftaran[""] = array();
	$pageTitlespendaftaran[""] = array();
	$fieldLabelspendaftaran[""]["sName"] = "S Name";
	$fieldToolTipspendaftaran[""]["sName"] = "";
	$fieldLabelspendaftaran[""]["sCenter"] = "S Center";
	$fieldToolTipspendaftaran[""]["sCenter"] = "";
	if (count($fieldToolTipspendaftaran[""]))
		$tdatapendaftaran[".isUseToolTips"] = true;
}


	$tdatapendaftaran[".NCSearch"] = true;



$tdatapendaftaran[".shortTableName"] = "pendaftaran";
$tdatapendaftaran[".nSecOptions"] = 0;
$tdatapendaftaran[".recsPerRowList"] = 1;
$tdatapendaftaran[".recsPerRowPrint"] = 1;
$tdatapendaftaran[".mainTableOwnerID"] = "";
$tdatapendaftaran[".moveNext"] = 1;
$tdatapendaftaran[".entityType"] = 1;

$tdatapendaftaran[".strOriginalTableName"] = "exam_marking";




$tdatapendaftaran[".showAddInPopup"] = false;

$tdatapendaftaran[".showEditInPopup"] = false;

$tdatapendaftaran[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapendaftaran[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapendaftaran[".fieldsForRegister"] = array();

$tdatapendaftaran[".listAjax"] = false;

	$tdatapendaftaran[".audit"] = false;

	$tdatapendaftaran[".locking"] = false;



$tdatapendaftaran[".list"] = true;

$tdatapendaftaran[".inlineEdit"] = true;
$tdatapendaftaran[".inlineAdd"] = true;

$tdatapendaftaran[".import"] = true;

$tdatapendaftaran[".exportTo"] = true;


$tdatapendaftaran[".delete"] = true;

$tdatapendaftaran[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapendaftaran[".searchSaving"] = false;
//

$tdatapendaftaran[".showSearchPanel"] = true;
		$tdatapendaftaran[".flexibleSearch"] = true;

if (isMobile())
	$tdatapendaftaran[".isUseAjaxSuggest"] = false;
else
	$tdatapendaftaran[".isUseAjaxSuggest"] = true;

$tdatapendaftaran[".rowHighlite"] = true;


			
$tdatapendaftaran[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapendaftaran[".isUseTimeForSearch"] = false;





$tdatapendaftaran[".allSearchFields"] = array();
$tdatapendaftaran[".filterFields"] = array();
$tdatapendaftaran[".requiredSearchFields"] = array();

$tdatapendaftaran[".allSearchFields"][] = "sName";
	$tdatapendaftaran[".allSearchFields"][] = "sCenter";
	$tdatapendaftaran[".allSearchFields"][] = "name";
	$tdatapendaftaran[".allSearchFields"][] = "birthdate";
	$tdatapendaftaran[".allSearchFields"][] = "birthCert";
	$tdatapendaftaran[".allSearchFields"][] = "gender";
	$tdatapendaftaran[".allSearchFields"][] = "nationality";
	$tdatapendaftaran[".allSearchFields"][] = "eNo";
	$tdatapendaftaran[".allSearchFields"][] = "sCode";
	$tdatapendaftaran[".allSearchFields"][] = "sZone";
	$tdatapendaftaran[".allSearchFields"][] = "eYear";
	

$tdatapendaftaran[".googleLikeFields"] = array();
$tdatapendaftaran[".googleLikeFields"][] = "name";
$tdatapendaftaran[".googleLikeFields"][] = "sName";
$tdatapendaftaran[".googleLikeFields"][] = "sCenter";

$tdatapendaftaran[".panelSearchFields"] = array();
$tdatapendaftaran[".searchPanelOptions"] = array();
$tdatapendaftaran[".panelSearchFields"][] = "name";
	$tdatapendaftaran[".panelSearchFields"][] = "birthCert";
	$tdatapendaftaran[".panelSearchFields"][] = "eNo";
	$tdatapendaftaran[".panelSearchFields"][] = "sCode";
	$tdatapendaftaran[".panelSearchFields"][] = "sZone";
	$tdatapendaftaran[".panelSearchFields"][] = "eYear";
	
$tdatapendaftaran[".advSearchFields"] = array();
$tdatapendaftaran[".advSearchFields"][] = "sName";
$tdatapendaftaran[".advSearchFields"][] = "sCenter";
$tdatapendaftaran[".advSearchFields"][] = "name";
$tdatapendaftaran[".advSearchFields"][] = "birthdate";
$tdatapendaftaran[".advSearchFields"][] = "birthCert";
$tdatapendaftaran[".advSearchFields"][] = "gender";
$tdatapendaftaran[".advSearchFields"][] = "nationality";
$tdatapendaftaran[".advSearchFields"][] = "eNo";
$tdatapendaftaran[".advSearchFields"][] = "sCode";
$tdatapendaftaran[".advSearchFields"][] = "sZone";
$tdatapendaftaran[".advSearchFields"][] = "eYear";

$tdatapendaftaran[".tableType"] = "list";

$tdatapendaftaran[".printerPageOrientation"] = 0;
$tdatapendaftaran[".nPrinterPageScale"] = 100;

$tdatapendaftaran[".nPrinterSplitRecords"] = 40;

$tdatapendaftaran[".nPrinterPDFSplitRecords"] = 40;



$tdatapendaftaran[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapendaftaran[".pageSize"] = 20;

$tdatapendaftaran[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.sid DESC, exam_marking.sCode DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapendaftaran[".strOrderBy"] = $tstrOrderBy;

$tdatapendaftaran[".orderindexes"] = array();
$tdatapendaftaran[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "exam_marking.sid");
$tdatapendaftaran[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "exam_marking.sCode");

$tdatapendaftaran[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.name,  exam_marking.gender,  exam_marking.birthdate,  exam_marking.birthCert,  exam_marking.nationality,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  school.sName,  school.sZone,  school.sCenter";
$tdatapendaftaran[".sqlFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode";
$tdatapendaftaran[".sqlWhereExpr"] = "";
$tdatapendaftaran[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapendaftaran[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapendaftaran[".arrGroupsPerPage"] = $arrGPP;

$tdatapendaftaran[".highlightSearchResults"] = true;

$tableKeyspendaftaran = array();
$tableKeyspendaftaran[] = "sid";
$tdatapendaftaran[".Keys"] = $tableKeyspendaftaran;

$tdatapendaftaran[".listFields"] = array();
$tdatapendaftaran[".listFields"][] = "name";
$tdatapendaftaran[".listFields"][] = "birthdate";
$tdatapendaftaran[".listFields"][] = "birthCert";
$tdatapendaftaran[".listFields"][] = "gender";
$tdatapendaftaran[".listFields"][] = "nationality";
$tdatapendaftaran[".listFields"][] = "eNo";
$tdatapendaftaran[".listFields"][] = "sCode";
$tdatapendaftaran[".listFields"][] = "eYear";

$tdatapendaftaran[".hideMobileList"] = array();


$tdatapendaftaran[".viewFields"] = array();

$tdatapendaftaran[".addFields"] = array();

$tdatapendaftaran[".masterListFields"] = array();
$tdatapendaftaran[".masterListFields"][] = "sid";
$tdatapendaftaran[".masterListFields"][] = "sZone";
$tdatapendaftaran[".masterListFields"][] = "sName";
$tdatapendaftaran[".masterListFields"][] = "sCenter";
$tdatapendaftaran[".masterListFields"][] = "name";
$tdatapendaftaran[".masterListFields"][] = "birthdate";
$tdatapendaftaran[".masterListFields"][] = "birthCert";
$tdatapendaftaran[".masterListFields"][] = "gender";
$tdatapendaftaran[".masterListFields"][] = "nationality";
$tdatapendaftaran[".masterListFields"][] = "eNo";
$tdatapendaftaran[".masterListFields"][] = "sCode";
$tdatapendaftaran[".masterListFields"][] = "eYear";
$tdatapendaftaran[".masterListFields"][] = "eType";

$tdatapendaftaran[".inlineAddFields"] = array();
$tdatapendaftaran[".inlineAddFields"][] = "name";
$tdatapendaftaran[".inlineAddFields"][] = "birthdate";
$tdatapendaftaran[".inlineAddFields"][] = "birthCert";
$tdatapendaftaran[".inlineAddFields"][] = "gender";
$tdatapendaftaran[".inlineAddFields"][] = "nationality";
$tdatapendaftaran[".inlineAddFields"][] = "eNo";
$tdatapendaftaran[".inlineAddFields"][] = "sCode";
$tdatapendaftaran[".inlineAddFields"][] = "eYear";

$tdatapendaftaran[".editFields"] = array();

$tdatapendaftaran[".inlineEditFields"] = array();
$tdatapendaftaran[".inlineEditFields"][] = "name";
$tdatapendaftaran[".inlineEditFields"][] = "birthdate";
$tdatapendaftaran[".inlineEditFields"][] = "birthCert";
$tdatapendaftaran[".inlineEditFields"][] = "gender";
$tdatapendaftaran[".inlineEditFields"][] = "nationality";
$tdatapendaftaran[".inlineEditFields"][] = "eNo";
$tdatapendaftaran[".inlineEditFields"][] = "sCode";
$tdatapendaftaran[".inlineEditFields"][] = "eYear";

$tdatapendaftaran[".exportFields"] = array();
$tdatapendaftaran[".exportFields"][] = "sName";
$tdatapendaftaran[".exportFields"][] = "sCenter";
$tdatapendaftaran[".exportFields"][] = "name";
$tdatapendaftaran[".exportFields"][] = "birthdate";
$tdatapendaftaran[".exportFields"][] = "birthCert";
$tdatapendaftaran[".exportFields"][] = "gender";
$tdatapendaftaran[".exportFields"][] = "nationality";
$tdatapendaftaran[".exportFields"][] = "eNo";
$tdatapendaftaran[".exportFields"][] = "sCode";
$tdatapendaftaran[".exportFields"][] = "eYear";

$tdatapendaftaran[".importFields"] = array();
$tdatapendaftaran[".importFields"][] = "name";
$tdatapendaftaran[".importFields"][] = "gender";
$tdatapendaftaran[".importFields"][] = "birthdate";
$tdatapendaftaran[".importFields"][] = "birthCert";
$tdatapendaftaran[".importFields"][] = "nationality";

$tdatapendaftaran[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","sid");
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








	$tdatapendaftaran["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","name");
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatapendaftaran["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","gender");
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




	$tdatapendaftaran["gender"] = $fdata;
//	birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthdate";
	$fdata["GoodName"] = "birthdate";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","birthdate");
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




	$tdatapendaftaran["birthdate"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","birthCert");
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




	$tdatapendaftaran["birthCert"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","nationality");
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
	$edata["LookupValues"][] = "0";

	
	
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




	$tdatapendaftaran["nationality"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","sCode");
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




	$tdatapendaftaran["sCode"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","eNo");
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




	$tdatapendaftaran["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","eYear");
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




	$tdatapendaftaran["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("pendaftaran","eType");
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








	$tdatapendaftaran["eType"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran","sName");
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




	$tdatapendaftaran["sName"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran","sZone");
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




	$tdatapendaftaran["sZone"] = $fdata;
//	sCenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sCenter";
	$fdata["GoodName"] = "sCenter";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran","sCenter");
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




	$tdatapendaftaran["sCenter"] = $fdata;


$tables_data["pendaftaran"]=&$tdatapendaftaran;
$field_labels["pendaftaran"] = &$fieldLabelspendaftaran;
$fieldToolTips["pendaftaran"] = &$fieldToolTipspendaftaran;
$page_titles["pendaftaran"] = &$pageTitlespendaftaran;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pendaftaran"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pendaftaran"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pendaftaran()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.name,  exam_marking.gender,  exam_marking.birthdate,  exam_marking.birthCert,  exam_marking.nationality,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  school.sName,  school.sZone,  school.sCenter";
$proto0["m_strFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY exam_marking.sid DESC, exam_marking.sCode DESC";
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
	"m_srcTableName" => "pendaftaran"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "pendaftaran";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto7["m_sql"] = "exam_marking.name";
$proto7["m_srcTableName"] = "pendaftaran";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto9["m_sql"] = "exam_marking.gender";
$proto9["m_srcTableName"] = "pendaftaran";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto11["m_sql"] = "exam_marking.birthdate";
$proto11["m_srcTableName"] = "pendaftaran";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto13["m_sql"] = "exam_marking.birthCert";
$proto13["m_srcTableName"] = "pendaftaran";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto15["m_sql"] = "exam_marking.nationality";
$proto15["m_srcTableName"] = "pendaftaran";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto17["m_sql"] = "exam_marking.sCode";
$proto17["m_srcTableName"] = "pendaftaran";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto19["m_sql"] = "exam_marking.eNo";
$proto19["m_srcTableName"] = "pendaftaran";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto21["m_sql"] = "exam_marking.eYear";
$proto21["m_srcTableName"] = "pendaftaran";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto23["m_sql"] = "exam_marking.eType";
$proto23["m_srcTableName"] = "pendaftaran";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "sName",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran"
));

$proto25["m_sql"] = "school.sName";
$proto25["m_srcTableName"] = "pendaftaran";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran"
));

$proto27["m_sql"] = "school.sZone";
$proto27["m_srcTableName"] = "pendaftaran";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "sCenter",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran"
));

$proto29["m_sql"] = "school.sCenter";
$proto29["m_srcTableName"] = "pendaftaran";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "exam_marking";
$proto32["m_srcTableName"] = "pendaftaran";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "sid";
$proto32["m_columns"][] = "name";
$proto32["m_columns"][] = "gender";
$proto32["m_columns"][] = "birthdate";
$proto32["m_columns"][] = "birthCert";
$proto32["m_columns"][] = "nationality";
$proto32["m_columns"][] = "sCode";
$proto32["m_columns"][] = "eNo";
$proto32["m_columns"][] = "eYear";
$proto32["m_columns"][] = "eType";
$proto32["m_columns"][] = "s1";
$proto32["m_columns"][] = "s2";
$proto32["m_columns"][] = "s3";
$proto32["m_columns"][] = "s4";
$proto32["m_columns"][] = "s5";
$proto32["m_columns"][] = "s6";
$proto32["m_columns"][] = "s7";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "exam_marking";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "pendaftaran";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_LEFTJOIN";
			$proto36=array();
$proto36["m_strName"] = "school";
$proto36["m_srcTableName"] = "pendaftaran";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "sno";
$proto36["m_columns"][] = "sName";
$proto36["m_columns"][] = "sCenter";
$proto36["m_columns"][] = "sCode";
$proto36["m_columns"][] = "sZone";
$proto36["m_columns"][] = "sType";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "pendaftaran";
$proto37=array();
$proto37["m_sql"] = "exam_marking.sCode = school.sCode";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= school.sCode";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto39["m_column"]=$obj;
$proto39["m_bAsc"] = 0;
$proto39["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto39);

$proto0["m_orderby"][]=$obj;					
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "pendaftaran"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="pendaftaran";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pendaftaran = createSqlQuery_pendaftaran();



													

$tdatapendaftaran[".sqlquery"] = $queryData_pendaftaran;

include_once(getabspath("include/pendaftaran_events.php"));
$tableEvents["pendaftaran"] = new eventclass_pendaftaran;
$tdatapendaftaran[".hasEvents"] = true;

$query = &$queryData_pendaftaran;
$table = "pendaftaran";
// here goes EVENT_INIT_TABLE event

global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1){
$query->addWhere("sZone='".$zon."' AND eYear='"  .$year."'");

}else if($alevel==2){
$query->addWhere("eYear='".$year."'");
}

;
unset($query);
?>