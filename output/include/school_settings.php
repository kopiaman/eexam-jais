<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschool = array();
	$tdataschool[".truncateText"] = true;
	$tdataschool[".NumberOfChars"] = 80;
	$tdataschool[".ShortName"] = "school";
	$tdataschool[".OwnerID"] = "";
	$tdataschool[".OriginalTable"] = "school";

//	field labels
$fieldLabelsschool = array();
$fieldToolTipsschool = array();
$pageTitlesschool = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschool["English"] = array();
	$fieldToolTipsschool["English"] = array();
	$pageTitlesschool["English"] = array();
	$fieldLabelsschool["English"]["sno"] = "Sno";
	$fieldToolTipsschool["English"]["sno"] = "";
	$fieldLabelsschool["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipsschool["English"]["sName"] = "";
	$fieldLabelsschool["English"]["sCenter"] = "Kod Pusat";
	$fieldToolTipsschool["English"]["sCenter"] = "";
	$fieldLabelsschool["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsschool["English"]["sCode"] = "";
	$fieldLabelsschool["English"]["sZone"] = "Zon";
	$fieldToolTipsschool["English"]["sZone"] = "";
	$fieldLabelsschool["English"]["sType"] = "Jenis";
	$fieldToolTipsschool["English"]["sType"] = "";
	if (count($fieldToolTipsschool["English"]))
		$tdataschool[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschool[""] = array();
	$fieldToolTipsschool[""] = array();
	$pageTitlesschool[""] = array();
	if (count($fieldToolTipsschool[""]))
		$tdataschool[".isUseToolTips"] = true;
}


	$tdataschool[".NCSearch"] = true;



$tdataschool[".shortTableName"] = "school";
$tdataschool[".nSecOptions"] = 0;
$tdataschool[".recsPerRowList"] = 1;
$tdataschool[".recsPerRowPrint"] = 1;
$tdataschool[".mainTableOwnerID"] = "";
$tdataschool[".moveNext"] = 1;
$tdataschool[".entityType"] = 0;

$tdataschool[".strOriginalTableName"] = "school";




$tdataschool[".showAddInPopup"] = false;

$tdataschool[".showEditInPopup"] = false;

$tdataschool[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschool[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschool[".fieldsForRegister"] = array();

$tdataschool[".listAjax"] = false;

	$tdataschool[".audit"] = false;

	$tdataschool[".locking"] = false;



$tdataschool[".list"] = true;

$tdataschool[".inlineEdit"] = true;
$tdataschool[".inlineAdd"] = true;

$tdataschool[".import"] = true;

$tdataschool[".exportTo"] = true;


$tdataschool[".delete"] = true;

$tdataschool[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataschool[".searchSaving"] = false;
//

$tdataschool[".showSearchPanel"] = true;
		$tdataschool[".flexibleSearch"] = true;

if (isMobile())
	$tdataschool[".isUseAjaxSuggest"] = false;
else
	$tdataschool[".isUseAjaxSuggest"] = true;

$tdataschool[".rowHighlite"] = true;


																			
$tdataschool[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschool[".isUseTimeForSearch"] = false;





$tdataschool[".allSearchFields"] = array();
$tdataschool[".filterFields"] = array();
$tdataschool[".requiredSearchFields"] = array();

$tdataschool[".allSearchFields"][] = "sName";
	$tdataschool[".allSearchFields"][] = "sCenter";
	$tdataschool[".allSearchFields"][] = "sCode";
	$tdataschool[".allSearchFields"][] = "sZone";
	$tdataschool[".allSearchFields"][] = "sType";
	

$tdataschool[".googleLikeFields"] = array();
$tdataschool[".googleLikeFields"][] = "sName";

$tdataschool[".panelSearchFields"] = array();
$tdataschool[".searchPanelOptions"] = array();
$tdataschool[".panelSearchFields"][] = "sName";
	$tdataschool[".panelSearchFields"][] = "sCenter";
	$tdataschool[".panelSearchFields"][] = "sCode";
	$tdataschool[".panelSearchFields"][] = "sZone";
	$tdataschool[".panelSearchFields"][] = "sType";
	
$tdataschool[".advSearchFields"] = array();
$tdataschool[".advSearchFields"][] = "sName";
$tdataschool[".advSearchFields"][] = "sCenter";
$tdataschool[".advSearchFields"][] = "sCode";
$tdataschool[".advSearchFields"][] = "sZone";
$tdataschool[".advSearchFields"][] = "sType";

$tdataschool[".tableType"] = "list";

$tdataschool[".printerPageOrientation"] = 0;
$tdataschool[".nPrinterPageScale"] = 100;

$tdataschool[".nPrinterSplitRecords"] = 40;

$tdataschool[".nPrinterPDFSplitRecords"] = 40;



$tdataschool[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataschool[".pageSize"] = 20;

$tdataschool[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sCenter, sCode";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschool[".strOrderBy"] = $tstrOrderBy;

$tdataschool[".orderindexes"] = array();
$tdataschool[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "sCenter");
$tdataschool[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "sCode");

$tdataschool[".sqlHead"] = "SELECT sno,  sName,  sCenter,  sCode,  sZone,  sType";
$tdataschool[".sqlFrom"] = "FROM school";
$tdataschool[".sqlWhereExpr"] = "";
$tdataschool[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschool[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschool[".arrGroupsPerPage"] = $arrGPP;

$tdataschool[".highlightSearchResults"] = true;

$tableKeysschool = array();
$tableKeysschool[] = "sno";
$tdataschool[".Keys"] = $tableKeysschool;

$tdataschool[".listFields"] = array();
$tdataschool[".listFields"][] = "sName";
$tdataschool[".listFields"][] = "sCenter";
$tdataschool[".listFields"][] = "sCode";
$tdataschool[".listFields"][] = "sZone";
$tdataschool[".listFields"][] = "sType";

$tdataschool[".hideMobileList"] = array();


$tdataschool[".viewFields"] = array();

$tdataschool[".addFields"] = array();

$tdataschool[".masterListFields"] = array();
$tdataschool[".masterListFields"][] = "sno";
$tdataschool[".masterListFields"][] = "sName";
$tdataschool[".masterListFields"][] = "sCenter";
$tdataschool[".masterListFields"][] = "sCode";
$tdataschool[".masterListFields"][] = "sZone";
$tdataschool[".masterListFields"][] = "sType";

$tdataschool[".inlineAddFields"] = array();
$tdataschool[".inlineAddFields"][] = "sName";
$tdataschool[".inlineAddFields"][] = "sCenter";
$tdataschool[".inlineAddFields"][] = "sCode";
$tdataschool[".inlineAddFields"][] = "sZone";
$tdataschool[".inlineAddFields"][] = "sType";

$tdataschool[".editFields"] = array();

$tdataschool[".inlineEditFields"] = array();
$tdataschool[".inlineEditFields"][] = "sName";
$tdataschool[".inlineEditFields"][] = "sCenter";
$tdataschool[".inlineEditFields"][] = "sCode";
$tdataschool[".inlineEditFields"][] = "sZone";
$tdataschool[".inlineEditFields"][] = "sType";

$tdataschool[".exportFields"] = array();
$tdataschool[".exportFields"][] = "sName";
$tdataschool[".exportFields"][] = "sCenter";
$tdataschool[".exportFields"][] = "sCode";
$tdataschool[".exportFields"][] = "sZone";
$tdataschool[".exportFields"][] = "sType";

$tdataschool[".importFields"] = array();
$tdataschool[".importFields"][] = "sName";
$tdataschool[".importFields"][] = "sCenter";
$tdataschool[".importFields"][] = "sCode";
$tdataschool[".importFields"][] = "sZone";
$tdataschool[".importFields"][] = "sType";

$tdataschool[".printFields"] = array();

//	sno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sno";
	$fdata["GoodName"] = "sno";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","sno");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sno";

	
	
			
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








	$tdataschool["sno"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataschool["sName"] = $fdata;
//	sCenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sCenter";
	$fdata["GoodName"] = "sCenter";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","sCenter");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sCenter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sCenter";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataschool["sCenter"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
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




	$tdataschool["sCode"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "setting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fieldValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "setting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fieldValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataschool["sZone"] = $fdata;
//	sType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sType";
	$fdata["GoodName"] = "sType";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","sType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sType";

	
	
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




	$tdataschool["sType"] = $fdata;


$tables_data["school"]=&$tdataschool;
$field_labels["school"] = &$fieldLabelsschool;
$fieldToolTips["school"] = &$fieldToolTipsschool;
$page_titles["school"] = &$pageTitlesschool;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["school"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["school"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_school()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sno,  sName,  sCenter,  sCode,  sZone,  sType";
$proto0["m_strFrom"] = "FROM school";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sCenter, sCode";
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
	"m_strName" => "sno",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto5["m_sql"] = "sno";
$proto5["m_srcTableName"] = "school";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sName",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto7["m_sql"] = "sName";
$proto7["m_srcTableName"] = "school";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sCenter",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto9["m_sql"] = "sCenter";
$proto9["m_srcTableName"] = "school";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto11["m_sql"] = "sCode";
$proto11["m_srcTableName"] = "school";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto13["m_sql"] = "sZone";
$proto13["m_srcTableName"] = "school";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sType",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto15["m_sql"] = "sType";
$proto15["m_srcTableName"] = "school";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "school";
$proto18["m_srcTableName"] = "school";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "sno";
$proto18["m_columns"][] = "sName";
$proto18["m_columns"][] = "sCenter";
$proto18["m_columns"][] = "sCode";
$proto18["m_columns"][] = "sZone";
$proto18["m_columns"][] = "sType";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "school";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "school";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "sCenter",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto21["m_column"]=$obj;
$proto21["m_bAsc"] = 1;
$proto21["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto21);

$proto0["m_orderby"][]=$obj;					
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 1;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="school";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_school = createSqlQuery_school();



						

$tdataschool[".sqlquery"] = $queryData_school;

$tableEvents["school"] = new eventsBase;
$tdataschool[".hasEvents"] = false;

?>