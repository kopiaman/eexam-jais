<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser = array();
	$tdatauser[".truncateText"] = true;
	$tdatauser[".NumberOfChars"] = 80;
	$tdatauser[".ShortName"] = "user";
	$tdatauser[".OwnerID"] = "";
	$tdatauser[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser = array();
$fieldToolTipsuser = array();
$pageTitlesuser = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser["English"] = array();
	$fieldToolTipsuser["English"] = array();
	$pageTitlesuser["English"] = array();
	$fieldLabelsuser["English"]["uid"] = "Uid";
	$fieldToolTipsuser["English"]["uid"] = "";
	$fieldLabelsuser["English"]["username"] = "Username";
	$fieldToolTipsuser["English"]["username"] = "";
	$fieldLabelsuser["English"]["password"] = "Password";
	$fieldToolTipsuser["English"]["password"] = "";
	$fieldLabelsuser["English"]["fullname"] = "Fullname";
	$fieldToolTipsuser["English"]["fullname"] = "";
	$fieldLabelsuser["English"]["zon"] = "Zon";
	$fieldToolTipsuser["English"]["zon"] = "";
	$fieldLabelsuser["English"]["umail"] = "Umail";
	$fieldToolTipsuser["English"]["umail"] = "";
	if (count($fieldToolTipsuser["English"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser[""] = array();
	$fieldToolTipsuser[""] = array();
	$pageTitlesuser[""] = array();
	if (count($fieldToolTipsuser[""]))
		$tdatauser[".isUseToolTips"] = true;
}


	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 0;
$tdatauser[".recsPerRowList"] = 1;
$tdatauser[".recsPerRowPrint"] = 1;
$tdatauser[".mainTableOwnerID"] = "";
$tdatauser[".moveNext"] = 1;
$tdatauser[".entityType"] = 0;

$tdatauser[".strOriginalTableName"] = "user";




$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser[".fieldsForRegister"] = array();

$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = false;









$tdatauser[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser[".searchSaving"] = false;
//

$tdatauser[".showSearchPanel"] = true;
		$tdatauser[".flexibleSearch"] = true;

if (isMobile())
	$tdatauser[".isUseAjaxSuggest"] = false;
else
	$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;


																				
$tdatauser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;





$tdatauser[".allSearchFields"] = array();
$tdatauser[".filterFields"] = array();
$tdatauser[".requiredSearchFields"] = array();



$tdatauser[".googleLikeFields"] = array();
$tdatauser[".googleLikeFields"][] = "uid";
$tdatauser[".googleLikeFields"][] = "username";
$tdatauser[".googleLikeFields"][] = "password";
$tdatauser[".googleLikeFields"][] = "fullname";
$tdatauser[".googleLikeFields"][] = "zon";
$tdatauser[".googleLikeFields"][] = "umail";



$tdatauser[".tableType"] = "list";

$tdatauser[".printerPageOrientation"] = 0;
$tdatauser[".nPrinterPageScale"] = 100;

$tdatauser[".nPrinterSplitRecords"] = 40;

$tdatauser[".nPrinterPDFSplitRecords"] = 40;



$tdatauser[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatauser[".pageSize"] = 20;

$tdatauser[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();

$tdatauser[".sqlHead"] = "SELECT `uid`,  	username,  	password,  	fullname,  	zon,  	umail";
$tdatauser[".sqlFrom"] = "FROM `user`";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;

$tdatauser[".highlightSearchResults"] = true;

$tableKeysuser = array();
$tableKeysuser[] = "uid";
$tdatauser[".Keys"] = $tableKeysuser;

$tdatauser[".listFields"] = array();

$tdatauser[".hideMobileList"] = array();


$tdatauser[".viewFields"] = array();

$tdatauser[".addFields"] = array();

$tdatauser[".masterListFields"] = array();
$tdatauser[".masterListFields"][] = "uid";
$tdatauser[".masterListFields"][] = "username";
$tdatauser[".masterListFields"][] = "password";
$tdatauser[".masterListFields"][] = "fullname";
$tdatauser[".masterListFields"][] = "zon";
$tdatauser[".masterListFields"][] = "umail";

$tdatauser[".inlineAddFields"] = array();

$tdatauser[".editFields"] = array();

$tdatauser[".inlineEditFields"] = array();

$tdatauser[".exportFields"] = array();

$tdatauser[".importFields"] = array();

$tdatauser[".printFields"] = array();

//	uid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "uid";
	$fdata["GoodName"] = "uid";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","uid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "uid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`uid`";

	
	
			
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








	$tdatauser["uid"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","username");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
			
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








	$tdatauser["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","password");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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








	$tdatauser["password"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
			
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








	$tdatauser["fullname"] = $fdata;
//	zon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "zon";
	$fdata["GoodName"] = "zon";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","zon");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "zon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zon";

	
	
			
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








	$tdatauser["zon"] = $fdata;
//	umail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "umail";
	$fdata["GoodName"] = "umail";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","umail");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "umail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "umail";

	
	
			
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








	$tdatauser["umail"] = $fdata;


$tables_data["user"]=&$tdatauser;
$field_labels["user"] = &$fieldLabelsuser;
$fieldToolTips["user"] = &$fieldToolTipsuser;
$page_titles["user"] = &$pageTitlesuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["user"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`uid`,  	username,  	password,  	fullname,  	zon,  	umail";
$proto0["m_strFrom"] = "FROM `user`";
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
	"m_strName" => "uid",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto5["m_sql"] = "`uid`";
$proto5["m_srcTableName"] = "user";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto7["m_sql"] = "username";
$proto7["m_srcTableName"] = "user";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto9["m_sql"] = "password";
$proto9["m_srcTableName"] = "user";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto11["m_sql"] = "fullname";
$proto11["m_srcTableName"] = "user";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "zon",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto13["m_sql"] = "zon";
$proto13["m_srcTableName"] = "user";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "umail",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto15["m_sql"] = "umail";
$proto15["m_srcTableName"] = "user";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "user";
$proto18["m_srcTableName"] = "user";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "uid";
$proto18["m_columns"][] = "username";
$proto18["m_columns"][] = "password";
$proto18["m_columns"][] = "fullname";
$proto18["m_columns"][] = "zon";
$proto18["m_columns"][] = "umail";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "`user`";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "user";
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
$proto0["m_srcTableName"]="user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user = createSqlQuery_user();



						

$tdatauser[".sqlquery"] = $queryData_user;

$tableEvents["user"] = new eventsBase;
$tdatauser[".hasEvents"] = false;

?>