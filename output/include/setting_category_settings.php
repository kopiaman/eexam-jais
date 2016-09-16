<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasetting_category = array();
	$tdatasetting_category[".truncateText"] = true;
	$tdatasetting_category[".NumberOfChars"] = 80;
	$tdatasetting_category[".ShortName"] = "setting_category";
	$tdatasetting_category[".OwnerID"] = "";
	$tdatasetting_category[".OriginalTable"] = "setting_category";

//	field labels
$fieldLabelssetting_category = array();
$fieldToolTipssetting_category = array();
$pageTitlessetting_category = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssetting_category["English"] = array();
	$fieldToolTipssetting_category["English"] = array();
	$pageTitlessetting_category["English"] = array();
	$fieldLabelssetting_category["English"]["catid"] = "Catid";
	$fieldToolTipssetting_category["English"]["catid"] = "";
	$fieldLabelssetting_category["English"]["setName"] = "Set Name";
	$fieldToolTipssetting_category["English"]["setName"] = "";
	if (count($fieldToolTipssetting_category["English"]))
		$tdatasetting_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssetting_category[""] = array();
	$fieldToolTipssetting_category[""] = array();
	$pageTitlessetting_category[""] = array();
	if (count($fieldToolTipssetting_category[""]))
		$tdatasetting_category[".isUseToolTips"] = true;
}


	$tdatasetting_category[".NCSearch"] = true;



$tdatasetting_category[".shortTableName"] = "setting_category";
$tdatasetting_category[".nSecOptions"] = 0;
$tdatasetting_category[".recsPerRowList"] = 1;
$tdatasetting_category[".recsPerRowPrint"] = 1;
$tdatasetting_category[".mainTableOwnerID"] = "";
$tdatasetting_category[".moveNext"] = 1;
$tdatasetting_category[".entityType"] = 0;

$tdatasetting_category[".strOriginalTableName"] = "setting_category";




$tdatasetting_category[".showAddInPopup"] = false;

$tdatasetting_category[".showEditInPopup"] = false;

$tdatasetting_category[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasetting_category[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasetting_category[".fieldsForRegister"] = array();

$tdatasetting_category[".listAjax"] = false;

	$tdatasetting_category[".audit"] = false;

	$tdatasetting_category[".locking"] = false;



$tdatasetting_category[".list"] = true;

$tdatasetting_category[".inlineEdit"] = true;
$tdatasetting_category[".inlineAdd"] = true;




$tdatasetting_category[".delete"] = true;

$tdatasetting_category[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasetting_category[".searchSaving"] = false;
//

$tdatasetting_category[".showSearchPanel"] = true;
		$tdatasetting_category[".flexibleSearch"] = true;

if (isMobile())
	$tdatasetting_category[".isUseAjaxSuggest"] = false;
else
	$tdatasetting_category[".isUseAjaxSuggest"] = true;

$tdatasetting_category[".rowHighlite"] = true;


																				
$tdatasetting_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasetting_category[".isUseTimeForSearch"] = false;




$tdatasetting_category[".detailsLinksOnList"] = "1";

$tdatasetting_category[".allSearchFields"] = array();
$tdatasetting_category[".filterFields"] = array();
$tdatasetting_category[".requiredSearchFields"] = array();

$tdatasetting_category[".allSearchFields"][] = "catid";
	$tdatasetting_category[".allSearchFields"][] = "setName";
	

$tdatasetting_category[".googleLikeFields"] = array();
$tdatasetting_category[".googleLikeFields"][] = "catid";
$tdatasetting_category[".googleLikeFields"][] = "setName";


$tdatasetting_category[".advSearchFields"] = array();
$tdatasetting_category[".advSearchFields"][] = "catid";
$tdatasetting_category[".advSearchFields"][] = "setName";

$tdatasetting_category[".tableType"] = "list";

$tdatasetting_category[".printerPageOrientation"] = 0;
$tdatasetting_category[".nPrinterPageScale"] = 100;

$tdatasetting_category[".nPrinterSplitRecords"] = 40;

$tdatasetting_category[".nPrinterPDFSplitRecords"] = 40;



$tdatasetting_category[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasetting_category[".pageSize"] = 20;

$tdatasetting_category[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasetting_category[".strOrderBy"] = $tstrOrderBy;

$tdatasetting_category[".orderindexes"] = array();

$tdatasetting_category[".sqlHead"] = "SELECT catid,  	setName";
$tdatasetting_category[".sqlFrom"] = "FROM setting_category";
$tdatasetting_category[".sqlWhereExpr"] = "";
$tdatasetting_category[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasetting_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasetting_category[".arrGroupsPerPage"] = $arrGPP;

$tdatasetting_category[".highlightSearchResults"] = true;

$tableKeyssetting_category = array();
$tableKeyssetting_category[] = "catid";
$tdatasetting_category[".Keys"] = $tableKeyssetting_category;

$tdatasetting_category[".listFields"] = array();
$tdatasetting_category[".listFields"][] = "catid";
$tdatasetting_category[".listFields"][] = "setName";

$tdatasetting_category[".hideMobileList"] = array();


$tdatasetting_category[".viewFields"] = array();
$tdatasetting_category[".viewFields"][] = "catid";
$tdatasetting_category[".viewFields"][] = "setName";

$tdatasetting_category[".addFields"] = array();
$tdatasetting_category[".addFields"][] = "setName";

$tdatasetting_category[".masterListFields"] = array();
$tdatasetting_category[".masterListFields"][] = "catid";
$tdatasetting_category[".masterListFields"][] = "setName";

$tdatasetting_category[".inlineAddFields"] = array();
$tdatasetting_category[".inlineAddFields"][] = "setName";

$tdatasetting_category[".editFields"] = array();
$tdatasetting_category[".editFields"][] = "setName";

$tdatasetting_category[".inlineEditFields"] = array();
$tdatasetting_category[".inlineEditFields"][] = "setName";

$tdatasetting_category[".exportFields"] = array();
$tdatasetting_category[".exportFields"][] = "catid";
$tdatasetting_category[".exportFields"][] = "setName";

$tdatasetting_category[".importFields"] = array();
$tdatasetting_category[".importFields"][] = "catid";
$tdatasetting_category[".importFields"][] = "setName";

$tdatasetting_category[".printFields"] = array();
$tdatasetting_category[".printFields"][] = "catid";
$tdatasetting_category[".printFields"][] = "setName";

//	catid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "catid";
	$fdata["GoodName"] = "catid";
	$fdata["ownerTable"] = "setting_category";
	$fdata["Label"] = GetFieldLabel("setting_category","catid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "catid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catid";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatasetting_category["catid"] = $fdata;
//	setName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "setName";
	$fdata["GoodName"] = "setName";
	$fdata["ownerTable"] = "setting_category";
	$fdata["Label"] = GetFieldLabel("setting_category","setName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "setName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "setName";

	
	
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




	$tdatasetting_category["setName"] = $fdata;


$tables_data["setting_category"]=&$tdatasetting_category;
$field_labels["setting_category"] = &$fieldLabelssetting_category;
$fieldToolTips["setting_category"] = &$fieldToolTipssetting_category;
$page_titles["setting_category"] = &$pageTitlessetting_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["setting_category"] = array();
//	setting
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="setting";
		$detailsParam["dOriginalTable"] = "setting";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "setting";
	$detailsParam["dCaptionTable"] = GetTableCaption("setting");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["setting_category"][$dIndex] = $detailsParam;

	
		$detailsTablesData["setting_category"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["setting_category"][$dIndex]["masterKeys"][]="catid";

				$detailsTablesData["setting_category"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["setting_category"][$dIndex]["detailKeys"][]="catid";

// tables which are master tables for current table (detail)
$masterTablesData["setting_category"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_setting_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "catid,  	setName";
$proto0["m_strFrom"] = "FROM setting_category";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strName" => "catid",
	"m_strTable" => "setting_category",
	"m_srcTableName" => "setting_category"
));

$proto5["m_sql"] = "catid";
$proto5["m_srcTableName"] = "setting_category";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "setName",
	"m_strTable" => "setting_category",
	"m_srcTableName" => "setting_category"
));

$proto7["m_sql"] = "setName";
$proto7["m_srcTableName"] = "setting_category";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "setting_category";
$proto10["m_srcTableName"] = "setting_category";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "catid";
$proto10["m_columns"][] = "setName";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "setting_category";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "setting_category";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="setting_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_setting_category = createSqlQuery_setting_category();



		

$tdatasetting_category[".sqlquery"] = $queryData_setting_category;

$tableEvents["setting_category"] = new eventsBase;
$tdatasetting_category[".hasEvents"] = false;

?>