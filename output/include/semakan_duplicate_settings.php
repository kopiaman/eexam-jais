<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasemakan_duplicate = array();
	$tdatasemakan_duplicate[".truncateText"] = true;
	$tdatasemakan_duplicate[".NumberOfChars"] = 80;
	$tdatasemakan_duplicate[".ShortName"] = "semakan_duplicate";
	$tdatasemakan_duplicate[".OwnerID"] = "";
	$tdatasemakan_duplicate[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelssemakan_duplicate = array();
$fieldToolTipssemakan_duplicate = array();
$pageTitlessemakan_duplicate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssemakan_duplicate["English"] = array();
	$fieldToolTipssemakan_duplicate["English"] = array();
	$pageTitlessemakan_duplicate["English"] = array();
	$fieldLabelssemakan_duplicate["English"]["sid"] = "Sid";
	$fieldToolTipssemakan_duplicate["English"]["sid"] = "";
	$fieldLabelssemakan_duplicate["English"]["name"] = "Nama Murid";
	$fieldToolTipssemakan_duplicate["English"]["name"] = "";
	$fieldLabelssemakan_duplicate["English"]["gender"] = "Jantina";
	$fieldToolTipssemakan_duplicate["English"]["gender"] = "";
	$fieldLabelssemakan_duplicate["English"]["birthCert"] = "Sijil Lahir";
	$fieldToolTipssemakan_duplicate["English"]["birthCert"] = "";
	$fieldLabelssemakan_duplicate["English"]["eYear"] = "Tahun";
	$fieldToolTipssemakan_duplicate["English"]["eYear"] = "";
	if (count($fieldToolTipssemakan_duplicate["English"]))
		$tdatasemakan_duplicate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssemakan_duplicate[""] = array();
	$fieldToolTipssemakan_duplicate[""] = array();
	$pageTitlessemakan_duplicate[""] = array();
	if (count($fieldToolTipssemakan_duplicate[""]))
		$tdatasemakan_duplicate[".isUseToolTips"] = true;
}


	$tdatasemakan_duplicate[".NCSearch"] = true;



$tdatasemakan_duplicate[".shortTableName"] = "semakan_duplicate";
$tdatasemakan_duplicate[".nSecOptions"] = 0;
$tdatasemakan_duplicate[".recsPerRowList"] = 1;
$tdatasemakan_duplicate[".recsPerRowPrint"] = 1;
$tdatasemakan_duplicate[".mainTableOwnerID"] = "";
$tdatasemakan_duplicate[".moveNext"] = 1;
$tdatasemakan_duplicate[".entityType"] = 1;

$tdatasemakan_duplicate[".strOriginalTableName"] = "exam_marking";




$tdatasemakan_duplicate[".showAddInPopup"] = false;

$tdatasemakan_duplicate[".showEditInPopup"] = false;

$tdatasemakan_duplicate[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasemakan_duplicate[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasemakan_duplicate[".fieldsForRegister"] = array();

$tdatasemakan_duplicate[".listAjax"] = false;

	$tdatasemakan_duplicate[".audit"] = false;

	$tdatasemakan_duplicate[".locking"] = false;



$tdatasemakan_duplicate[".list"] = true;






$tdatasemakan_duplicate[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasemakan_duplicate[".searchSaving"] = false;
//

$tdatasemakan_duplicate[".showSearchPanel"] = true;
		$tdatasemakan_duplicate[".flexibleSearch"] = true;

if (isMobile())
	$tdatasemakan_duplicate[".isUseAjaxSuggest"] = false;
else
	$tdatasemakan_duplicate[".isUseAjaxSuggest"] = true;

$tdatasemakan_duplicate[".rowHighlite"] = true;


																			
$tdatasemakan_duplicate[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasemakan_duplicate[".isUseTimeForSearch"] = false;




$tdatasemakan_duplicate[".detailsLinksOnList"] = "1";

$tdatasemakan_duplicate[".allSearchFields"] = array();
$tdatasemakan_duplicate[".filterFields"] = array();
$tdatasemakan_duplicate[".requiredSearchFields"] = array();

$tdatasemakan_duplicate[".allSearchFields"][] = "name";
	$tdatasemakan_duplicate[".allSearchFields"][] = "birthCert";
	$tdatasemakan_duplicate[".allSearchFields"][] = "gender";
	$tdatasemakan_duplicate[".allSearchFields"][] = "eYear";
	

$tdatasemakan_duplicate[".googleLikeFields"] = array();
$tdatasemakan_duplicate[".googleLikeFields"][] = "name";

$tdatasemakan_duplicate[".panelSearchFields"] = array();
$tdatasemakan_duplicate[".searchPanelOptions"] = array();
$tdatasemakan_duplicate[".panelSearchFields"][] = "name";
	$tdatasemakan_duplicate[".panelSearchFields"][] = "eYear";
	
$tdatasemakan_duplicate[".advSearchFields"] = array();
$tdatasemakan_duplicate[".advSearchFields"][] = "name";
$tdatasemakan_duplicate[".advSearchFields"][] = "birthCert";
$tdatasemakan_duplicate[".advSearchFields"][] = "gender";
$tdatasemakan_duplicate[".advSearchFields"][] = "eYear";

$tdatasemakan_duplicate[".tableType"] = "list";

$tdatasemakan_duplicate[".printerPageOrientation"] = 0;
$tdatasemakan_duplicate[".nPrinterPageScale"] = 100;

$tdatasemakan_duplicate[".nPrinterSplitRecords"] = 40;

$tdatasemakan_duplicate[".nPrinterPDFSplitRecords"] = 40;



$tdatasemakan_duplicate[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasemakan_duplicate[".pageSize"] = 20;

$tdatasemakan_duplicate[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasemakan_duplicate[".strOrderBy"] = $tstrOrderBy;

$tdatasemakan_duplicate[".orderindexes"] = array();

$tdatasemakan_duplicate[".sqlHead"] = "SELECT sid,  name,  gender,  birthCert,  eYear";
$tdatasemakan_duplicate[".sqlFrom"] = "FROM exam_marking";
$tdatasemakan_duplicate[".sqlWhereExpr"] = "";
$tdatasemakan_duplicate[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasemakan_duplicate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasemakan_duplicate[".arrGroupsPerPage"] = $arrGPP;

$tdatasemakan_duplicate[".highlightSearchResults"] = true;

$tableKeyssemakan_duplicate = array();
$tableKeyssemakan_duplicate[] = "sid";
$tdatasemakan_duplicate[".Keys"] = $tableKeyssemakan_duplicate;

$tdatasemakan_duplicate[".listFields"] = array();
$tdatasemakan_duplicate[".listFields"][] = "name";
$tdatasemakan_duplicate[".listFields"][] = "birthCert";
$tdatasemakan_duplicate[".listFields"][] = "gender";
$tdatasemakan_duplicate[".listFields"][] = "eYear";

$tdatasemakan_duplicate[".hideMobileList"] = array();


$tdatasemakan_duplicate[".viewFields"] = array();

$tdatasemakan_duplicate[".addFields"] = array();

$tdatasemakan_duplicate[".masterListFields"] = array();
$tdatasemakan_duplicate[".masterListFields"][] = "sid";
$tdatasemakan_duplicate[".masterListFields"][] = "name";
$tdatasemakan_duplicate[".masterListFields"][] = "birthCert";
$tdatasemakan_duplicate[".masterListFields"][] = "gender";
$tdatasemakan_duplicate[".masterListFields"][] = "eYear";

$tdatasemakan_duplicate[".inlineAddFields"] = array();

$tdatasemakan_duplicate[".editFields"] = array();

$tdatasemakan_duplicate[".inlineEditFields"] = array();

$tdatasemakan_duplicate[".exportFields"] = array();

$tdatasemakan_duplicate[".importFields"] = array();

$tdatasemakan_duplicate[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sid";

	
	
			
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








	$tdatasemakan_duplicate["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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




	$tdatasemakan_duplicate["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";

	
	
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




	$tdatasemakan_duplicate["gender"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","birthCert");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "birthCert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birthCert";

	
	
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




	$tdatasemakan_duplicate["birthCert"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatasemakan_duplicate["eYear"] = $fdata;


$tables_data["semakan_duplicate"]=&$tdatasemakan_duplicate;
$field_labels["semakan_duplicate"] = &$fieldLabelssemakan_duplicate;
$fieldToolTips["semakan_duplicate"] = &$fieldToolTipssemakan_duplicate;
$page_titles["semakan_duplicate"] = &$pageTitlessemakan_duplicate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["semakan_duplicate"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["semakan_duplicate"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_semakan_duplicate()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  name,  gender,  birthCert,  eYear";
$proto0["m_strFrom"] = "FROM exam_marking";
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
$proto3["m_sql"] = "COUNT(sid) >=2";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$proto4=array();
$proto4["m_functiontype"] = "SQLF_COUNT";
$proto4["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto4["m_arguments"][]=$obj;
$proto4["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto4);

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = ">=2";
$proto3["m_havingmode"] = true;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto6["m_sql"] = "sid";
$proto6["m_srcTableName"] = "semakan_duplicate";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "semakan_duplicate";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto10["m_sql"] = "gender";
$proto10["m_srcTableName"] = "semakan_duplicate";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto12["m_sql"] = "birthCert";
$proto12["m_srcTableName"] = "semakan_duplicate";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto14["m_sql"] = "eYear";
$proto14["m_srcTableName"] = "semakan_duplicate";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "exam_marking";
$proto17["m_srcTableName"] = "semakan_duplicate";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "sid";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "gender";
$proto17["m_columns"][] = "birthdate";
$proto17["m_columns"][] = "birthCert";
$proto17["m_columns"][] = "nationality";
$proto17["m_columns"][] = "sCode";
$proto17["m_columns"][] = "eNo";
$proto17["m_columns"][] = "eYear";
$proto17["m_columns"][] = "eType";
$proto17["m_columns"][] = "s1";
$proto17["m_columns"][] = "s2";
$proto17["m_columns"][] = "s3";
$proto17["m_columns"][] = "s4";
$proto17["m_columns"][] = "s5";
$proto17["m_columns"][] = "s6";
$proto17["m_columns"][] = "s7";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "exam_marking";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "semakan_duplicate";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="semakan_duplicate";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_semakan_duplicate = createSqlQuery_semakan_duplicate();



					

$tdatasemakan_duplicate[".sqlquery"] = $queryData_semakan_duplicate;

include_once(getabspath("include/semakan_duplicate_events.php"));
$tableEvents["semakan_duplicate"] = new eventclass_semakan_duplicate;
$tdatasemakan_duplicate[".hasEvents"] = true;

$query = &$queryData_semakan_duplicate;
$table = "semakan_duplicate";
// here goes EVENT_INIT_TABLE event


global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1){
$query->addWhere("sZone=".$zon);
};
;
unset($query);
?>