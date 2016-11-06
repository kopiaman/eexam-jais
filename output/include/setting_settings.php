<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasetting = array();
	$tdatasetting[".truncateText"] = true;
	$tdatasetting[".NumberOfChars"] = 80;
	$tdatasetting[".ShortName"] = "setting";
	$tdatasetting[".OwnerID"] = "";
	$tdatasetting[".OriginalTable"] = "setting";

//	field labels
$fieldLabelssetting = array();
$fieldToolTipssetting = array();
$pageTitlessetting = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssetting["English"] = array();
	$fieldToolTipssetting["English"] = array();
	$pageTitlessetting["English"] = array();
	$fieldLabelssetting["English"]["setid"] = "Setid";
	$fieldToolTipssetting["English"]["setid"] = "";
	$fieldLabelssetting["English"]["fieldName"] = "Field Name";
	$fieldToolTipssetting["English"]["fieldName"] = "";
	$fieldLabelssetting["English"]["fieldValue"] = "Field Value";
	$fieldToolTipssetting["English"]["fieldValue"] = "";
	$fieldLabelssetting["English"]["catid"] = "Catid";
	$fieldToolTipssetting["English"]["catid"] = "";
	if (count($fieldToolTipssetting["English"]))
		$tdatasetting[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssetting[""] = array();
	$fieldToolTipssetting[""] = array();
	$pageTitlessetting[""] = array();
	if (count($fieldToolTipssetting[""]))
		$tdatasetting[".isUseToolTips"] = true;
}


	$tdatasetting[".NCSearch"] = true;



$tdatasetting[".shortTableName"] = "setting";
$tdatasetting[".nSecOptions"] = 0;
$tdatasetting[".recsPerRowList"] = 1;
$tdatasetting[".recsPerRowPrint"] = 1;
$tdatasetting[".mainTableOwnerID"] = "";
$tdatasetting[".moveNext"] = 1;
$tdatasetting[".entityType"] = 0;

$tdatasetting[".strOriginalTableName"] = "setting";




$tdatasetting[".showAddInPopup"] = false;

$tdatasetting[".showEditInPopup"] = false;

$tdatasetting[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasetting[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasetting[".fieldsForRegister"] = array();

$tdatasetting[".listAjax"] = false;

	$tdatasetting[".audit"] = false;

	$tdatasetting[".locking"] = false;



$tdatasetting[".list"] = true;

$tdatasetting[".inlineEdit"] = true;
$tdatasetting[".inlineAdd"] = true;




$tdatasetting[".delete"] = true;

$tdatasetting[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasetting[".searchSaving"] = false;
//

$tdatasetting[".showSearchPanel"] = true;
		$tdatasetting[".flexibleSearch"] = true;

if (isMobile())
	$tdatasetting[".isUseAjaxSuggest"] = false;
else
	$tdatasetting[".isUseAjaxSuggest"] = true;

$tdatasetting[".rowHighlite"] = true;


																																																																												
$tdatasetting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasetting[".isUseTimeForSearch"] = false;




$tdatasetting[".detailsLinksOnList"] = "1";

$tdatasetting[".allSearchFields"] = array();
$tdatasetting[".filterFields"] = array();
$tdatasetting[".requiredSearchFields"] = array();

$tdatasetting[".allSearchFields"][] = "fieldName";
	$tdatasetting[".allSearchFields"][] = "fieldValue";
	

$tdatasetting[".googleLikeFields"] = array();
$tdatasetting[".googleLikeFields"][] = "setid";
$tdatasetting[".googleLikeFields"][] = "fieldName";
$tdatasetting[".googleLikeFields"][] = "fieldValue";
$tdatasetting[".googleLikeFields"][] = "catid";


$tdatasetting[".advSearchFields"] = array();
$tdatasetting[".advSearchFields"][] = "fieldName";
$tdatasetting[".advSearchFields"][] = "fieldValue";

$tdatasetting[".tableType"] = "list";

$tdatasetting[".printerPageOrientation"] = 0;
$tdatasetting[".nPrinterPageScale"] = 100;

$tdatasetting[".nPrinterSplitRecords"] = 40;

$tdatasetting[".nPrinterPDFSplitRecords"] = 40;



$tdatasetting[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasetting[".pageSize"] = 20;

$tdatasetting[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasetting[".strOrderBy"] = $tstrOrderBy;

$tdatasetting[".orderindexes"] = array();

$tdatasetting[".sqlHead"] = "SELECT setid,  	fieldName,  	fieldValue,  	catid";
$tdatasetting[".sqlFrom"] = "FROM setting";
$tdatasetting[".sqlWhereExpr"] = "";
$tdatasetting[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasetting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasetting[".arrGroupsPerPage"] = $arrGPP;

$tdatasetting[".highlightSearchResults"] = true;

$tableKeyssetting = array();
$tableKeyssetting[] = "setid";
$tdatasetting[".Keys"] = $tableKeyssetting;

$tdatasetting[".listFields"] = array();
$tdatasetting[".listFields"][] = "fieldName";
$tdatasetting[".listFields"][] = "fieldValue";

$tdatasetting[".hideMobileList"] = array();


$tdatasetting[".viewFields"] = array();

$tdatasetting[".addFields"] = array();

$tdatasetting[".masterListFields"] = array();
$tdatasetting[".masterListFields"][] = "setid";
$tdatasetting[".masterListFields"][] = "fieldName";
$tdatasetting[".masterListFields"][] = "fieldValue";
$tdatasetting[".masterListFields"][] = "catid";

$tdatasetting[".inlineAddFields"] = array();
$tdatasetting[".inlineAddFields"][] = "fieldName";
$tdatasetting[".inlineAddFields"][] = "fieldValue";

$tdatasetting[".editFields"] = array();

$tdatasetting[".inlineEditFields"] = array();
$tdatasetting[".inlineEditFields"][] = "fieldName";
$tdatasetting[".inlineEditFields"][] = "fieldValue";

$tdatasetting[".exportFields"] = array();

$tdatasetting[".importFields"] = array();

$tdatasetting[".printFields"] = array();

//	setid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "setid";
	$fdata["GoodName"] = "setid";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = GetFieldLabel("setting","setid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "setid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "setid";

	
	
			
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








	$tdatasetting["setid"] = $fdata;
//	fieldName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fieldName";
	$fdata["GoodName"] = "fieldName";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = GetFieldLabel("setting","fieldName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "fieldName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldName";

	
	
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




	$tdatasetting["fieldName"] = $fdata;
//	fieldValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fieldValue";
	$fdata["GoodName"] = "fieldValue";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = GetFieldLabel("setting","fieldValue");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "fieldValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldValue";

	
	
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




	$tdatasetting["fieldValue"] = $fdata;
//	catid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "catid";
	$fdata["GoodName"] = "catid";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = GetFieldLabel("setting","catid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "catid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catid";

	
	
			
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasetting["catid"] = $fdata;


$tables_data["setting"]=&$tdatasetting;
$field_labels["setting"] = &$fieldLabelssetting;
$fieldToolTips["setting"] = &$fieldToolTipssetting;
$page_titles["setting"] = &$pageTitlessetting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["setting"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["setting"] = array();


	
				$strOriginalDetailsTable="setting_category";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="setting_category";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "setting_category";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["setting"][0] = $masterParams;
				$masterTablesData["setting"][0]["masterKeys"] = array();
	$masterTablesData["setting"][0]["masterKeys"][]="catid";
				$masterTablesData["setting"][0]["detailKeys"] = array();
	$masterTablesData["setting"][0]["detailKeys"][]="catid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_setting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "setid,  	fieldName,  	fieldValue,  	catid";
$proto0["m_strFrom"] = "FROM setting";
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
	"m_strName" => "setid",
	"m_strTable" => "setting",
	"m_srcTableName" => "setting"
));

$proto5["m_sql"] = "setid";
$proto5["m_srcTableName"] = "setting";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldName",
	"m_strTable" => "setting",
	"m_srcTableName" => "setting"
));

$proto7["m_sql"] = "fieldName";
$proto7["m_srcTableName"] = "setting";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldValue",
	"m_strTable" => "setting",
	"m_srcTableName" => "setting"
));

$proto9["m_sql"] = "fieldValue";
$proto9["m_srcTableName"] = "setting";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "catid",
	"m_strTable" => "setting",
	"m_srcTableName" => "setting"
));

$proto11["m_sql"] = "catid";
$proto11["m_srcTableName"] = "setting";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "setting";
$proto14["m_srcTableName"] = "setting";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "setid";
$proto14["m_columns"][] = "fieldName";
$proto14["m_columns"][] = "fieldValue";
$proto14["m_columns"][] = "catid";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "setting";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "setting";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="setting";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_setting = createSqlQuery_setting();



				

$tdatasetting[".sqlquery"] = $queryData_setting;

$tableEvents["setting"] = new eventsBase;
$tdatasetting[".hasEvents"] = false;

?>