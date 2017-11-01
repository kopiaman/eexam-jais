<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasijil_psra1 = array();
	$tdatasijil_psra1[".truncateText"] = true;
	$tdatasijil_psra1[".NumberOfChars"] = 80;
	$tdatasijil_psra1[".ShortName"] = "sijil_psra1";
	$tdatasijil_psra1[".OwnerID"] = "";
	$tdatasijil_psra1[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelssijil_psra1 = array();
$fieldToolTipssijil_psra1 = array();
$pageTitlessijil_psra1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssijil_psra1["English"] = array();
	$fieldToolTipssijil_psra1["English"] = array();
	$pageTitlessijil_psra1["English"] = array();
	$fieldLabelssijil_psra1["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipssijil_psra1["English"]["sCode"] = "";
	$fieldLabelssijil_psra1["English"]["eYear"] = "Tahun";
	$fieldToolTipssijil_psra1["English"]["eYear"] = "";
	$fieldLabelssijil_psra1["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipssijil_psra1["English"]["sName"] = "";
	$fieldLabelssijil_psra1["English"]["sZone"] = "Zon";
	$fieldToolTipssijil_psra1["English"]["sZone"] = "";
	$fieldLabelssijil_psra1["English"]["calon"] = "Calon";
	$fieldToolTipssijil_psra1["English"]["calon"] = "";
	$fieldLabelssijil_psra1["English"]["sid"] = "Sid";
	$fieldToolTipssijil_psra1["English"]["sid"] = "";
	$fieldLabelssijil_psra1["English"]["eType"] = "Peperiksaan";
	$fieldToolTipssijil_psra1["English"]["eType"] = "";
	$fieldLabelssijil_psra1["English"]["sidul_jbtn"] = "Sidul Jbtn";
	$fieldToolTipssijil_psra1["English"]["sidul_jbtn"] = "";
	$fieldLabelssijil_psra1["English"]["sidul_sek"] = "Sidul Sek";
	$fieldToolTipssijil_psra1["English"]["sidul_sek"] = "";
	$fieldLabelssijil_psra1["English"]["sijil"] = "Sijil";
	$fieldToolTipssijil_psra1["English"]["sijil"] = "";
	if (count($fieldToolTipssijil_psra1["English"]))
		$tdatasijil_psra1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssijil_psra1[""] = array();
	$fieldToolTipssijil_psra1[""] = array();
	$pageTitlessijil_psra1[""] = array();
	$fieldLabelssijil_psra1[""]["sidul_jbtn"] = "Sidul Jbtn";
	$fieldToolTipssijil_psra1[""]["sidul_jbtn"] = "";
	$fieldLabelssijil_psra1[""]["sidul_sek"] = "Sidul Sek";
	$fieldToolTipssijil_psra1[""]["sidul_sek"] = "";
	$fieldLabelssijil_psra1[""]["sijil"] = "Sijil";
	$fieldToolTipssijil_psra1[""]["sijil"] = "";
	if (count($fieldToolTipssijil_psra1[""]))
		$tdatasijil_psra1[".isUseToolTips"] = true;
}


	$tdatasijil_psra1[".NCSearch"] = true;



$tdatasijil_psra1[".shortTableName"] = "sijil_psra1";
$tdatasijil_psra1[".nSecOptions"] = 0;
$tdatasijil_psra1[".recsPerRowList"] = 1;
$tdatasijil_psra1[".recsPerRowPrint"] = 1;
$tdatasijil_psra1[".mainTableOwnerID"] = "";
$tdatasijil_psra1[".moveNext"] = 1;
$tdatasijil_psra1[".entityType"] = 1;

$tdatasijil_psra1[".strOriginalTableName"] = "exam_marking";




$tdatasijil_psra1[".showAddInPopup"] = false;

$tdatasijil_psra1[".showEditInPopup"] = false;

$tdatasijil_psra1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasijil_psra1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasijil_psra1[".fieldsForRegister"] = array();

$tdatasijil_psra1[".listAjax"] = false;

	$tdatasijil_psra1[".audit"] = false;

	$tdatasijil_psra1[".locking"] = false;



$tdatasijil_psra1[".list"] = true;






$tdatasijil_psra1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasijil_psra1[".searchSaving"] = false;
//

$tdatasijil_psra1[".showSearchPanel"] = true;
		$tdatasijil_psra1[".flexibleSearch"] = true;

if (isMobile())
	$tdatasijil_psra1[".isUseAjaxSuggest"] = false;
else
	$tdatasijil_psra1[".isUseAjaxSuggest"] = true;

$tdatasijil_psra1[".rowHighlite"] = true;


																			
			
			
	$tdatasijil_psra1[".isUsebuttonHandlers"] = true;

$tdatasijil_psra1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasijil_psra1[".isUseTimeForSearch"] = false;





$tdatasijil_psra1[".allSearchFields"] = array();
$tdatasijil_psra1[".filterFields"] = array();
$tdatasijil_psra1[".requiredSearchFields"] = array();

$tdatasijil_psra1[".allSearchFields"][] = "sZone";
	$tdatasijil_psra1[".allSearchFields"][] = "sCode";
	$tdatasijil_psra1[".allSearchFields"][] = "sName";
	$tdatasijil_psra1[".allSearchFields"][] = "eYear";
	

$tdatasijil_psra1[".googleLikeFields"] = array();
$tdatasijil_psra1[".googleLikeFields"][] = "sName";
$tdatasijil_psra1[".googleLikeFields"][] = "sijil";
$tdatasijil_psra1[".googleLikeFields"][] = "sidul_jbtn";
$tdatasijil_psra1[".googleLikeFields"][] = "sidul_sek";

$tdatasijil_psra1[".panelSearchFields"] = array();
$tdatasijil_psra1[".searchPanelOptions"] = array();
$tdatasijil_psra1[".panelSearchFields"][] = "sZone";
	$tdatasijil_psra1[".panelSearchFields"][] = "sCode";
	$tdatasijil_psra1[".panelSearchFields"][] = "sName";
	$tdatasijil_psra1[".panelSearchFields"][] = "eYear";
	
$tdatasijil_psra1[".advSearchFields"] = array();
$tdatasijil_psra1[".advSearchFields"][] = "sZone";
$tdatasijil_psra1[".advSearchFields"][] = "sCode";
$tdatasijil_psra1[".advSearchFields"][] = "sName";
$tdatasijil_psra1[".advSearchFields"][] = "eYear";

$tdatasijil_psra1[".tableType"] = "list";

$tdatasijil_psra1[".printerPageOrientation"] = 0;
$tdatasijil_psra1[".nPrinterPageScale"] = 100;

$tdatasijil_psra1[".nPrinterSplitRecords"] = 40;

$tdatasijil_psra1[".nPrinterPDFSplitRecords"] = 40;



$tdatasijil_psra1[".geocodingEnabled"] = false;









$tdatasijil_psra1[".noRecordsFirstPage"] = true;

// view page pdf

// print page pdf


$tdatasijil_psra1[".pageSize"] = 20;

$tdatasijil_psra1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.sCode, exam_marking.eYear DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasijil_psra1[".strOrderBy"] = $tstrOrderBy;

$tdatasijil_psra1[".orderindexes"] = array();
$tdatasijil_psra1[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "exam_marking.sCode");
$tdatasijil_psra1[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "exam_marking.eYear");

$tdatasijil_psra1[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  school.sZone,  school.sName,  COUNT(exam_marking.sid) AS calon,  exam_marking.sid AS sijil,  exam_marking.sid AS sidul_jbtn,  exam_marking.sid AS sidul_sek";
$tdatasijil_psra1[".sqlFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode";
$tdatasijil_psra1[".sqlWhereExpr"] = "";
$tdatasijil_psra1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasijil_psra1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasijil_psra1[".arrGroupsPerPage"] = $arrGPP;

$tdatasijil_psra1[".highlightSearchResults"] = true;

$tableKeyssijil_psra1 = array();
$tableKeyssijil_psra1[] = "sid";
$tdatasijil_psra1[".Keys"] = $tableKeyssijil_psra1;

$tdatasijil_psra1[".listFields"] = array();
$tdatasijil_psra1[".listFields"][] = "sCode";
$tdatasijil_psra1[".listFields"][] = "sName";
$tdatasijil_psra1[".listFields"][] = "eYear";
$tdatasijil_psra1[".listFields"][] = "calon";
$tdatasijil_psra1[".listFields"][] = "sijil";
$tdatasijil_psra1[".listFields"][] = "sidul_jbtn";
$tdatasijil_psra1[".listFields"][] = "sidul_sek";

$tdatasijil_psra1[".hideMobileList"] = array();


$tdatasijil_psra1[".viewFields"] = array();

$tdatasijil_psra1[".addFields"] = array();

$tdatasijil_psra1[".masterListFields"] = array();
$tdatasijil_psra1[".masterListFields"][] = "sZone";
$tdatasijil_psra1[".masterListFields"][] = "sidul_jbtn";
$tdatasijil_psra1[".masterListFields"][] = "sijil";
$tdatasijil_psra1[".masterListFields"][] = "sidul_sek";
$tdatasijil_psra1[".masterListFields"][] = "sCode";
$tdatasijil_psra1[".masterListFields"][] = "sid";
$tdatasijil_psra1[".masterListFields"][] = "sName";
$tdatasijil_psra1[".masterListFields"][] = "eYear";
$tdatasijil_psra1[".masterListFields"][] = "eType";
$tdatasijil_psra1[".masterListFields"][] = "calon";

$tdatasijil_psra1[".inlineAddFields"] = array();

$tdatasijil_psra1[".editFields"] = array();

$tdatasijil_psra1[".inlineEditFields"] = array();

$tdatasijil_psra1[".exportFields"] = array();

$tdatasijil_psra1[".importFields"] = array();

$tdatasijil_psra1[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","sid");
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








	$tdatasijil_psra1["sid"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatasijil_psra1["sCode"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasijil_psra1["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","eType");
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








	$tdatasijil_psra1["eType"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","sZone");
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




	$tdatasijil_psra1["sZone"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasijil_psra1["sName"] = $fdata;
//	calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calon";
	$fdata["GoodName"] = "calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "calon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(exam_marking.sid)";

	
	
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








	$tdatasijil_psra1["calon"] = $fdata;
//	sijil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sijil";
	$fdata["GoodName"] = "sijil";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","sijil");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatasijil_psra1["sijil"] = $fdata;
//	sidul_jbtn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sidul_jbtn";
	$fdata["GoodName"] = "sidul_jbtn";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","sidul_jbtn");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatasijil_psra1["sidul_jbtn"] = $fdata;
//	sidul_sek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sidul_sek";
	$fdata["GoodName"] = "sidul_sek";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra1","sidul_sek");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatasijil_psra1["sidul_sek"] = $fdata;


$tables_data["sijil_psra1"]=&$tdatasijil_psra1;
$field_labels["sijil_psra1"] = &$fieldLabelssijil_psra1;
$fieldToolTips["sijil_psra1"] = &$fieldToolTipssijil_psra1;
$page_titles["sijil_psra1"] = &$pageTitlessijil_psra1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sijil_psra1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sijil_psra1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sijil_psra1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  school.sZone,  school.sName,  COUNT(exam_marking.sid) AS calon,  exam_marking.sid AS sijil,  exam_marking.sid AS sidul_jbtn,  exam_marking.sid AS sidul_sek";
$proto0["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY exam_marking.sCode, exam_marking.eYear DESC";
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
	"m_srcTableName" => "sijil_psra1"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "sijil_psra1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto7["m_sql"] = "exam_marking.sCode";
$proto7["m_srcTableName"] = "sijil_psra1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto9["m_sql"] = "exam_marking.eYear";
$proto9["m_srcTableName"] = "sijil_psra1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto11["m_sql"] = "exam_marking.eType";
$proto11["m_srcTableName"] = "sijil_psra1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "sijil_psra1"
));

$proto13["m_sql"] = "school.sZone";
$proto13["m_srcTableName"] = "sijil_psra1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sName",
	"m_strTable" => "school",
	"m_srcTableName" => "sijil_psra1"
));

$proto15["m_sql"] = "school.sName";
$proto15["m_srcTableName"] = "sijil_psra1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_COUNT";
$proto18["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "COUNT(exam_marking.sid)";
$proto17["m_srcTableName"] = "sijil_psra1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "calon";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto20["m_sql"] = "exam_marking.sid";
$proto20["m_srcTableName"] = "sijil_psra1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "sijil";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto22["m_sql"] = "exam_marking.sid";
$proto22["m_srcTableName"] = "sijil_psra1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "sidul_jbtn";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto24["m_sql"] = "exam_marking.sid";
$proto24["m_srcTableName"] = "sijil_psra1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "sidul_sek";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "exam_marking";
$proto27["m_srcTableName"] = "sijil_psra1";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "sid";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "gender";
$proto27["m_columns"][] = "birthdate";
$proto27["m_columns"][] = "birthCert";
$proto27["m_columns"][] = "nationality";
$proto27["m_columns"][] = "sCode";
$proto27["m_columns"][] = "eNo";
$proto27["m_columns"][] = "eYear";
$proto27["m_columns"][] = "eType";
$proto27["m_columns"][] = "s1";
$proto27["m_columns"][] = "s2";
$proto27["m_columns"][] = "s3";
$proto27["m_columns"][] = "s4";
$proto27["m_columns"][] = "s5";
$proto27["m_columns"][] = "s6";
$proto27["m_columns"][] = "s7";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "exam_marking";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "sijil_psra1";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "school";
$proto31["m_srcTableName"] = "sijil_psra1";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "sno";
$proto31["m_columns"][] = "sName";
$proto31["m_columns"][] = "sCenter";
$proto31["m_columns"][] = "sCode";
$proto31["m_columns"][] = "sZone";
$proto31["m_columns"][] = "sType";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "sijil_psra1";
$proto32=array();
$proto32["m_sql"] = "exam_marking.sCode = school.sCode";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= school.sCode";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra1"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sijil_psra1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sijil_psra1 = createSqlQuery_sijil_psra1();



										

$tdatasijil_psra1[".sqlquery"] = $queryData_sijil_psra1;

include_once(getabspath("include/sijil_psra1_events.php"));
$tableEvents["sijil_psra1"] = new eventclass_sijil_psra1;
$tdatasijil_psra1[".hasEvents"] = true;

$query = &$queryData_sijil_psra1;
$table = "sijil_psra1";
// here goes EVENT_INIT_TABLE event
global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1 || $alevel==2){
$query->addWhere("sZone=".$zon);
}else{};  
;
unset($query);
?>